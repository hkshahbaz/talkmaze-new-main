<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\CourseContent;
use App\Course;
class Lesson extends Model
{
     use SoftDeletes;
     protected $guarded = [];

    public function course(){
        return $this->belongsTo(Course::class);
    }

    public function course_contents(){
    	return $this->hasMany(CourseContent::class)->withCount('likes','views');
    }

}
