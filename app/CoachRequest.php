<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CoachRequest extends Model
{
    protected $guarded = [];

   	public function student(){
    	return $this->belongsTo(User::class, 'student_id', 'id');
    }

    public function parent_student(){
        return $this->belongsTo(ParentStudent::class, 'parent_student_id', 'id');
    }

    public function tutor(){
    	return $this->belongsTo(User::class, 'tutor_id', 'id');
    }

    public function meetingSession(){
    	return $this->hasOne(MeetingSession::class, 'coach_request_id', 'id');
    }

}
