<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\MeetingSession;
use Yajra\Datatables\Datatables;
use App\User;
use App\Transaction;

class SessionController extends Controller
{
    public function index(Request $req)
    {
        // dd(MeetingSession::all());
    	if($req->ajax()){

            $sessions = MeetingSession::select(['id', 'zoom_id', 'session_id', 'student_id' ,'tutor_id','time_taken', 'status', 'refund_status', 'student_joined', 'created_at', 'updated_at']);
            return Datatables::of($sessions)
                ->addColumn('action', function ($sessions) {
                    return view('admin.actions.actions_session', get_defined_vars());
                })
                ->addColumn('student', function ($sessions) {
                    return $sessions->student->name ?? '';
                })
                ->addColumn('tutor', function ($sessions) {
                    return $sessions->tutor->name ?? '';
                })
                ->addColumn('timeTaken', function ($sessions) {
                    return $sessions->time_taken." mins";
                })
                ->addColumn('sessionStatus', function ($sessions) {
                    return view('ajax.admin.session.status_column', get_defined_vars());
                })
                ->addColumn('refundStatus', function ($sessions) {
                    return view('ajax.admin.session.refund_column', get_defined_vars());
                })
                ->editColumn('id', 'ID: {{$id}}')
                ->make(true);
        }
       return view('admin.session.index');
    }

    public function loadRefundForm(Request $req)
    {
    	$student = User::find($req->student_id);
    	$transaction = Transaction::where("student_id", $req->student_id)->orderBy('id', 'DESC')->first();
    // 	dd($student, $transaction, $student->package->plan);
    	return view("ajax.admin.load_refund_form", get_defined_vars());
    }

    public function refundPayment(Request $req)
    {
    	$stripe_id = $req->stripe_id;
    	$amount = $req->payment;
    	// dd($stripe_id, $amount);
    	\Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        try {
            $refund = \Stripe\Refund::create(['charge' => $stripe_id,
        		'amount' => $amount * 100]);
        } catch(\Stripe\Error\InvalidRequest $e) {
            dd($e->getMessage());
        } catch(\Stripe\Error\Card $e) {
            dd($e->getMessage());
        }

        return back()->with("success", "Amount Refunded Successfully!");
    }

    public function delete(Request $req, $id = null)
    {
        MeetingSession::findOrFail($id)->delete();
        return back()->with("success", "Session Deleted Successfully");
    }
}
