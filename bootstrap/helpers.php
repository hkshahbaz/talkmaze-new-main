<?php

use App\CoachRequest;
use App\TutorEarning;
use App\Review;
use App\ParentStudent;
use App\NotificationStream;

function  getRating($meeting_id)
{
    return $review = Review::where('meeting_session_id', $meeting_id)
        ->where('user_id', "!=", auth()->user()->id)
        ->first()->rating ?? null;
    
}

function  getReview($meeting_id)
{
    return $review = Review::where('meeting_session_id', $meeting_id)
        ->where('user_id', "!=", auth()->user()->id)
        ->first()->review ?? '';
    
}

function  reviewSubmitted($meeting_id)
{
    $review = Review::where('meeting_session_id', $meeting_id)
        ->where('user_id', auth()->user()->id)
        ->first();
    if(!is_null($review))
    {
        return true;
    }else{
       return false; 
    }
    
}

function tutorHours($tutor_id)
{
    $totalHours = CoachRequest::where('tutor_id', $tutor_id)
    ->where('class_status', 'completed')
    ->sum('hours') ?? 0;
    $paidHours = TutorEarning::where('tutor_id', $tutor_id)
    ->sum('hours') ?? 0;
    if($totalHours > $paidHours)
    {
    $tutorHours = $totalHours - $paidHours;
    }else
    {
    $tutorHours = 0;
    }
    return $tutorHours;
}

function parent_students()
{
    $list = ParentStudent::where('parent_id', auth()->user()->id)
        ->get();
    return $list;
}

function notifications()
{
    $notifications  = NotificationStream::where('receiver_id', auth()->id())->where('read',0)->orderBy('created_at','desc')->get();
    return $notifications;
}

function getTutorBookedSlots($tutor_req)
{
    $main_array = [];
    $req_array = [];
    foreach($tutor_req as $item)
    {
        $req_array[] = explode(',', $item);
    }

    foreach($req_array as $item)
    {
        foreach($item as $new)
        {
            $main_array[] = $new;
        }
    }
    return $main_array;
}

function getSessionList()
{
    
}