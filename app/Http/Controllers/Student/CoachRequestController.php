<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\CoachRequest;
use Carbon\Carbon;
use App\Conversation;
use App\Message;
use App\User;
use App\Day;
use App\UserPlan;
use Mail;

class CoachRequestController extends Controller
{
    public function requestTutor(Request $req)
    {
        
    	if($req->interval == '1')
    	{
    		$req->validate([
				'message' => 'required',
                'date' => 'required',
				'slot' => 'required']);

            if(auth()->user()->hasRole('parent')){
                $req->validate([
                    'parent_student_id' => 'required'
                ]);
            }
            $coach_req = new CoachRequest();
            $coach_req->message = $req->message;
            $coach_req->date = $req->date;
            $coach_req->active_date = $req->date;
            $coach_req->slot = implode("," ,$req->slot);
            $coach_req->interval = $req->interval;
            if(auth()->user()->hasRole('parent')){
                $coach_req->parent_student_id = $req->parent_student_id;
            }
            $from = explode("-", $req->slot[array_key_first($req->slot)])[0];
            $to = explode("-", $req->slot[array_key_last($req->slot)])[1];
            $start = Carbon::parse($from);
            $end = Carbon::parse($to);
            $duration_min = $end->diffInMinutes($start);
            $coach_req->time_in_min = $duration_min;
            $hours = $duration_min / 60;
            $coach_req->start_time = $start;
            $coach_req->end_time = $end;
            $coach_req->hours = $hours;
            $coach_req->student_id = auth()->user()->id;
            $coach_req->tutor_id = $req->tutor_id;
            $coach_req->save();
    	}else{

    		$req->validate([
                'message' => 'required',
                'date' => 'required',
                'slot' => 'required',
                'no_of_weeks' => 'required']);
            if(auth()->user()->hasRole('parent')){
                $req->validate([
                    'parent_student_id' => 'required'
                ]);
            }
            $coach_req = new CoachRequest();
            $coach_req->message = $req->message;
            $coach_req->date = $req->date;
            $coach_req->active_date = $req->date;
            $coach_req->slot = implode("," ,$req->slot);
            $coach_req->interval = $req->interval;
            $coach_req->no_of_weeks = $req->no_of_weeks;
            $coach_req->remaining_weeks = $req->remaining_weeks;
            if(auth()->user()->hasRole('parent')){
                $coach_req->parent_student_id = $req->parent_student_id;
            }
            $from = explode("-", $req->slot[array_key_first($req->slot)])[0];
            $to = explode("-", $req->slot[array_key_last($req->slot)])[1];
            $start = Carbon::parse($from);
            $end = Carbon::parse($to);
            $duration_min = $end->diffInMinutes($start);
            $coach_req->time_in_min = $duration_min;
            
            // Calculate No of Hours
            $hours = ($duration_min / 60) * $req->no_of_weeks;
            $coach_req->start_time = $start;
            $coach_req->end_time = $end;
            $coach_req->hours = $hours;
            $coach_req->student_id = auth()->user()->id;
            $coach_req->tutor_id = $req->tutor_id;
            $coach_req->save();
    	}

        // send email to seller
        $tutor = User::find($req->tutor_id);
        $tutor_email = $tutor->email;

        Mail::send('email.tutor.student_request', get_defined_vars(), function ($send) use($tutor_email)
        {
            $send->to($tutor_email)->subject('New Student Request');
        });

        // Decrement Remaining Student Package Hours...
        $user_plan = UserPlan::where("user_id", auth()->user()->id)->first();
        $user_plan->remaining_hour = $user_plan->remaining_hour - $hours;
        $user_plan->save();

        $conversation = Conversation::where('tutor_id', $req->tutor_id)->where('student_id', auth()->user()->id);
        if ($conversation->count() > 0) {
            $message = new Message();
            $message->conversation_id = $conversation->first()->id;
            $message->user_id = auth()->user()->id;
            $message->message = $req->message;
            $message->ip = request()->ip();
            $message->save();
        } else {
            $conversation = new Conversation();
            $conversation->tutor_id = $req->tutor_id;
            $conversation->student_id = auth()->user()->id;
            $conversation->save();

            $message = new Message();
            $message->conversation_id = $conversation->first()->id;
            $message->user_id = auth()->user()->id;
            $message->message = $req->message;
            $message->ip = request()->ip();
            $message->save();
        }
        
        return redirect()->route('student.tutor.request.list')->with("success", "Your Request To Book Coach Submitted Successfully!");
    }

    public function loadTutorIntervals(Request $req,$id = null, $day = null)
    {
        $user = auth()->user();
        $tutor = User::find($id);
        $tutor_req = CoachRequest::where('tutor_id',$req->id)
            ->where('date', $req->day)
            ->where('status', 'approved')
            ->where('class_status', 'pending')
            ->pluck('slot')->toArray();
        $tutor_req = getTutorBookedSlots($tutor_req);
        
        $day = Carbon::parse($req->day)->format("l");
        $day = strtolower($day);
        $day = Day::where("name", $day)->first();
        $time_table = $tutor->timetable->where('day_id',$day->id)->first();
        // dd($time_table);
        if(!is_null($time_table))
        {
            if ($user->time_zone == $tutor->time_zone) {
            $studentStartTime = strtotime($time_table->from);
            $studentEndTime = strtotime($time_table->to);
            } else {
                $studentStartTime = strtotime(studentTime($time_table->from));
                $studentEndTime = strtotime(studentTime($time_table->to));
            }

            $tutorStartTime = strtotime($time_table->from);
            $tutorEndTime = strtotime($time_table->to);

            // dd($studentStartTime, $studentEn);

            $student_time_zone = array();
            $tutor_time_zone = array();

            for ($i = $studentStartTime; $i < $studentEndTime; $i+=1800) {
                $student_time_zone[] = date("h:ia", $i)."-". date("h:ia", ($i+1800));
            }

            for ($i = $tutorStartTime; $i < $tutorEndTime; $i+=1800) {
                $tutor_time_zone[] = date("h:ia", $i)."-". date("h:ia", ($i+1800));
            }

            
            // dd($student_time_zone);
            $available = array_diff($tutor_time_zone, $tutor_req);
            // dd($tutor_req, $tutor_time_zone, $available);
            // $available = $tutor_time_zone;
            // dd($available);
        }else
        {
            $available = 0;
        }
        
        // dd($available);

        if (count($available) > 0) {
            return [view('ajax.student.load_tutor_time_intervals', get_defined_vars())->render(), 200];
        } else {
            return [view('ajax.student.load_tutor_time_intervals', get_defined_vars())->render(), 401];
        }
    }
}
