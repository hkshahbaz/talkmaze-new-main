<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserRequest extends Model
{
     use SoftDeletes;
     protected $fillable = ['why_would_you_like_to_be_matched_with_a_coach','experience_of_public_speaking','do_you_have_access_to_a_webcam_and_mic','user_id','tutor_id'];

     public function student(){
         return $this->belongsTo(User::class,'user_id','id')->with('profile','student_rating');
     }
}
