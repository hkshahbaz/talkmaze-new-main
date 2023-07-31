<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CourseQuestions_Likes extends Model
{
    //
    public $table = "coursequestions_likes";
    public function coursequestions_likes()
    {
    	return $this->belongsTo(CourseQuestion::class, 'coursequestion_id','id');
	}
}
