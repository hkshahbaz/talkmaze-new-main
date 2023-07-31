<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\CoachRequest;
use App\User;
use App\Transaction;

class TutorController extends Controller
{

    public function requestList()
    {
        $req_count = CoachRequest::where('student_id',auth()->user()->id)->count();
        $pending = CoachRequest::where('student_id',auth()->user()->id)->where('status','pending')->get();
        $approved = CoachRequest::where('student_id',auth()->user()->id)->where('status','approved')->get();
        $cancelled = CoachRequest::where('student_id',auth()->user()->id)->where('status','cancelled')->get();

        return view('student.requests.requests',get_defined_vars());
    }

    public function requestCancel($id)
    {

        $tutor_request=CoachRequest::find($id);
        $transaction = Transaction::where('coach_request_id',$tutor_request->id)
            ->first() ?? abort(404);

        $stripe_id = $transaction->stripe_id;
        \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

        try {
            $refund = \Stripe\Refund::create(['charge' => $stripe_id]);
        } catch(\Stripe\Error\InvalidRequest $e) {
            dd($e->getMessage());
        } catch(\Stripe\Error\Card $e) {
            dd($e->getMessage());
        }
        $tutor_request->status = "cancelled";
        $tutor_request->save();
        return back()->with('message','Request Cancelled Successfully');
    }

    public function packages(Request $request , $id=null)
    {
        $list=Package::all();
        return view("student.tutor.packages",get_defined_vars());
    }

    public function buyPackage(Request $req)
    {
        $t_req=CoachRequest::where('tutor_id',$req->tutor_id)
            ->where('student_id',auth()->user()->id)
            ->first();
        $student_package=Package::find($req->package_id);
        session(['request_tutor' => $t_req,'student_package'=>$student_package , 'update_package'=>$req->update_package]);
        return redirect()->route('student.payment.form')->with('success', 'To Complete Request Please Enter Payment Details');
    }

    public function declineRequest(Request $req,$id=null)
    {
        $t_req=CoachRequest::find($id);
        $t_req->decline_reason=$req->decline_reason;
        $t_req->payment_type="temporary";
        $t_req->accept_status='2';
        $t_req->save();
        return back()->with("message","Request declined successfully.");
    }
}
