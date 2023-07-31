<?php

namespace App\Http\Controllers;

use App\ClassPlan;
use App\CoachAvailability;
use App\NotificationStream;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AvailabilityController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
  }

  public function showAvailability() {
    auth()->user()->notifications()->where('verb','SESSION')->update(['read'=>1]);
    $notifications  = NotificationStream::where('receiver_id',auth()->id())->where('read',0)->orderBy('created_at','desc')->get();

    $availability = CoachAvailability::where('coach_id', auth()->id())->get();

    $avails = [];
    foreach ($availability as $avail) {
//      if ($availl->time_zone) {
//        $availl->from_time = date('Y-m-d h:i:s',strtotime($availl->from_time. ' '. $availl->time_zone));
//        $availl->to_time = date('Y-m-d h:i:s',strtotime($availl->to_time. ' '. $availl->time_zone));
//      }
      $date = date('d-M-Y',strtotime($avail->from_time));
      $start = date('g:i a',strtotime($avail->from_time. ' '. auth()->user()->timezone));
      $end = date('g:i a',strtotime($avail->to_time. ' '. auth()->user()->timezone));
      $avails[$date][] = ['start_time' => $start, 'end_time' => $end,'del_id' => $avail->id];
    }


    return view('user.dashboard.pages.coach_availability',compact('notifications', 'avails'));
  }

  public function addAvailability(Request $request) {

    $availability = new CoachAvailability();
    $request['coach_id'] = auth()->id();
    $availability = $availability->create($request->all());

    if($availability){
      Session::flash('message', 'Availability Added Successfully!');
      Session::flash('alert-class', 'alert-success');
      return redirect('/coach-availability');
    }
  }

  public function deleteAvailability($id) {
    CoachAvailability::where('id', $id)->delete();
    Session::flash('message', 'Availability Deleted Successfully!');
    Session::flash('alert-class', 'alert-success');
    return redirect('/coach-availability');

  }

  public function checkAndSchedule($coach_id) {

    auth()->user()->notifications()->where('verb','SESSION')->update(['read'=>1]);
    $notifications  = NotificationStream::where('receiver_id',auth()->id())->where('read',0)->orderBy('created_at','desc')->get();

    $availability = CoachAvailability::where('coach_id', $coach_id)->get();


    $avails = [];
    foreach ($availability as $avail) {
      $date = date('d-M-Y',strtotime($avail->from_time));
      $start = date('g:i a',strtotime($avail->from_time. ' '. auth()->user()->timezone));
      $end = date('g:i a',strtotime($avail->to_time. ' '. auth()->user()->timezone));
      $avails[$date][] = ['start_time' => $start, 'end_time' => $end, 'del_id' => $avail->id, 'from_time' =>$avail->from_time, 'to_time' => $avail->to_time];
    }

    $reserved = ClassPlan::where('host_id', $coach_id)->where('status', 0)->get();
    return view('user.dashboard.pages.check_availability',compact('notifications', 'avails', 'coach_id', 'reserved'));
  }

  public function studentCreateSchedule(Request $request) {

    $num_hours = 0;
    if ($request->time_slots_from && $request->time_slots_from) {
      $time1 = strtotime($request->time_slots_from);
      $time2 = strtotime($request->time_slots_to);
      $hours = round(abs($time2 - $time1) / 3600,2);

      if ($hours > 0) {
        $num_hours = $hours;
      }
    }

    $start = date("H:i", strtotime($request->time_slots_from));
    $end = date("H:i", strtotime($request->time_slots_to));
    $date = $request->date_time;
    $request['date_time'] = $date.' '.$start;
    $request['end_time'] = $date.' '.$end;

    $plan = new ClassPlan;
    $request['num_hours'] = $num_hours;
    $request['is_group'] = 1;

    $plan = $plan->create($request->all());

    $coach = User::find($request->host_id);
    $student_names = '';

    $student = User::find(auth()->id());
    $plan->enrollments()->attach(auth()->id(),['is_paid'=>1]);

      $content = ['coach_name' => $coach->name, 'student_name' => $student->name, 'time' => $request->date_time . ' '. $request->time_zone];
      $student_names .=  $student->name.', ';
      if ($student->email) {
        \Mail::to($student->email)
          ->send(new \App\Mail\PrivateSessionMail($content));
      }

    $content = ['coach_name' => $coach->name, 'student_name' => $student_names, 'time' => $request->date_time . ' '. $request->time_zone];

    \Mail::to('aamerghalia@gmail.com')
      ->send(new \App\Mail\PrivateSessionAdminMail($content));
    return redirect()->back();
  }

  public function geTimeSlots(Request $request) {

    $date = $request->date;
    $coach = $request->coach;

    $availability = CoachAvailability::where('coach_id', $coach)->whereDate('from_time', '=' ,$date)->get();

    $finalIntervals = [];

    if ($availability->count() > 0) {
      foreach ($availability as $avail) {
        $startTime = date('g:i a',strtotime($avail->from_time. ' '. auth()->user()->timezone));
        $endTime = date('g:i a',strtotime($avail->to_time. ' '. auth()->user()->timezone));

        $startTime = strtotime($startTime);
        $endTime   = strtotime($endTime);

        $arrInterval = [];
        while($endTime >= $startTime){
          $arrInterval[] = date("h:i a", $startTime);
          $startTime = strtotime('+30 minutes', $startTime);
        }

        $finalIntervals = array_merge($finalIntervals, $arrInterval);

      }

      return response()->json(['intervals' => $finalIntervals, 'status' => 'success']);
    }

    return response()->json(['status' => 'error']);

  }

  public function checkReservedSlots(Request $request) {

    $start = date("H:i", strtotime($request->from_time. ' '. $request->time_zone));
    $end = date("H:i", strtotime($request->to_time. ' '. $request->time_zone));

    $date = $request->date;
    $previous = ClassPlan::where('host_id', $request->coach)->whereDate('date_time', $date)->get();

    $status = 'success';

    if ($previous->count() > 0) {
      foreach ($previous as $pre) {
        $pre_start = date("H:i", strtotime($pre->date_time. ' '. $pre->time_zone));
        $pre_end = date("H:i", strtotime($pre->end_time. ' '. $pre->time_zone));


        $fromTime = strtotime($pre_start);
        $toTime = strtotime($pre_end);
        $inputTime = strtotime($start);

        //verifying if time comes between or mismatch with some other class plan
        if($inputTime >= $fromTime && $inputTime <= $toTime) {
          $status = 'error';
        }
      }
    }

    return response()->json(['status' => $status]);

  }

}