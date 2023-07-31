<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MeetingSession extends Model
{
    protected $guarded = [];

    public function coach_request(){
    	return $this->belongsTo(CoachRequest::class, "coach_request_id", "id"); 
    }

    public function student(){
    	return $this->belongsTo(User::class, "student_id", "id"); 
    }

    public function tutor(){
    	return $this->belongsTo(User::class, "tutor_id", "id"); 
    }

    public function reviews(){
        return $this->hasMany(Review::class, 'meeting_session_id', 'id');
    }

    
}
