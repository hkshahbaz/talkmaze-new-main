<?php

namespace App\Http\Controllers\Tutor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\MeetingSession;
use App\Review;

class MeetingSessionController extends Controller
{
    public function list()
    {
    	$list = MeetingSession::where("tutor_id", auth()->user()->id)
            ->has('coach_request')
    		->get();
    	return view("tutor.session.list", get_defined_vars());
    }

    public function addReview($id = null)
    {
    	return view("tutor.session.review", get_defined_vars());
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
        return redirect()->route("tutor.session.list")->with("success", "You Have Submitted Your Review Successfully!");
    }
}
