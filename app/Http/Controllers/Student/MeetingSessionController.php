<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\MeetingSession;
use App\Review;
use Mail;
use App\User;

class MeetingSessionController extends Controller
{
    public function list()
    {
    	$list = MeetingSession::where("student_id", auth()->user()->id)
            ->has('coach_request')
    		->get();
    	return view("student.session.list", get_defined_vars());
    }

    public function addReview($id = null)
    {
    	return view("student.session.review", get_defined_vars());
    }

    public function saveReview(Request $req)
    {
        $req->validate(['rating' => 'required', 
            'review' => 'required']);
        $data = [
            'meeting_session_id' => $req->session_id,
            'user_id' => auth()->user()->id,
            'rating' => $req->rating,
            'review' => $req->review,
        ];

        Review::create($data);
        return redirect()->route("student.session.list")->with("success", "You Have Submitted Your Review Successfully!");
    }

    public function requestRefund($id = null, Request $req)
    {
        $session = MeetingSession::findOrFail($id);
        $session->refund_status = "1";
        $session->save();

        $admin_email = User::where('role', 'admin')->pluck('email')->first();
        Mail::send('email.student.refund_request', get_defined_vars(), function ($send) use($admin_email)
        { 
            $send->to($admin_email)->subject('Student Refund Request');
        });
        
        return redirect()->route('student.session.list')->with("success", "Your Request For Refund Payment Sent Successfully!");
    }
}
