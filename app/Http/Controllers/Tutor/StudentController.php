<?php

namespace App\Http\Controllers\Tutor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\CoachRequest;
use App\User;
use App\Transaction;
use Carbon\Carbon;
use App\UserPlan;

class StudentController extends Controller
{
    public function studentRequests()
    {
        $req_count = CoachRequest::where('tutor_id',auth()->user()->id)->count();
        $pending = CoachRequest::where('tutor_id',auth()->user()->id)->where('status','pending')->get();
        $approved = CoachRequest::where('tutor_id',auth()->user()->id)->where('status','approved')->get();
        $cancelled = CoachRequest::where('tutor_id',auth()->user()->id)->where('status','cancelled')->get();
        // dd($pending, $approved, $cancelled);
        return view('tutor.student.requests',get_defined_vars());
    }

    public function requestApprove($id)
    {
        CoachRequest::where('id',$id)->update([
            'status'=>'approved'
        ]);
        $t_req = CoachRequest::where('id',$id)->first();
        // $req_slots = explode(",", $t_req->slot);
        // foreach($req_slots as $slot)
        // {
        //     $slot = str_replace(' ', '', $slot);
        //     Schedule::create(['tutor_id'=>$t_req->tutor_id,
        //         'student_id'=>$t_req->student_id,
        //         'coach_request_id'=>$t_req->id,
        //         'date'=>Carbon::parse($t_req->date)->format("Y-m-d"),
        //         'active_date'=>Carbon::parse($t_req->date)->format("Y-m-d"),
        //         'slot'=>$slot]);
        // }
        $userPlan = UserPlan::where("user_id", $t_req->student_id)->first();
        $userPlan->remaining_hour = $userPlan->remaining_hour - $t_req->hours;
        $userPlan->save();
        
        return back()->with('success','Student Request Approved Successfully');
    }

    public function requestCancel($id)
    {
        $tutor_request=CoachRequest::find($id);
        // $transaction = Transaction::where('coach_request_id',$tutor_request->id)
        //     ->first();
        // $stripe_id = $transaction->stripe_id;
        
        // \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

        // try {
        //     $refund = \Stripe\Refund::create(['charge' => $stripe_id]);
        // } catch(\Stripe\Error\InvalidRequest $e) {
        //     dd($e->getMessage());
        // } catch(\Stripe\Error\Card $e) {
        //     dd($e->getMessage());
        // }
        $tutor_request->status = "cancelled";
        $tutor_request->save();
        // $userPlan = UserPlan::where("user_id", $tutor_request->student_id)->first();
        // $userPlan->remaining_hour = $userPlan->remaining_hour - $t_req->hours;
        // $userPlan->save();
        return back()->with('success','Student Request Cancelled Successfully');
    }

    public function students()
    {
        $list=CoachRequest::where('status', 'approved')
            ->with("student")
            ->get();
            
        return view('tutor.student.students',get_defined_vars());

    }

    public function saveSchedule(Request $req)
    {
        // $t_req=CoachRequest::find($req->req_id);
        // Schedule::create(['tutor_id'=>auth()->user()->id,
        //     'student_id'=>$t_req->student_id,
        //     'date'=>$req->date,
        //     'active_date'=>$req->date,
        //     'slot'=>$req->slot,
        //     'request_tutor_id'=>$t_req->id
        // ]);
        // $t_req->save();
        // $student = StudentProfile::where('user_id',$t_req->student_id)->first();
        // $student->remaining_hours -= 1;
        // $student->save();
        
        // return back()->with("message","Schedule saved successfully");
    }
}
