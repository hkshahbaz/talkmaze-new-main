<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Course;
use App\ContentType;
use App\Lesson;
use App\User;

class CourseContent extends Model
{
    use SoftDeletes;
    protected $guarded =[];

    public function lesson(){
    	return $this->belongsTo(Lesson::class); 
    }

    public function course(){
    	return $this->belongsTo(Course::class, 'course_id', 'id'); 
    }

    public function content_type(){
    	return $this->belongsTo(ContentType::class);
    }

    public function likes(){
        return $this->belongsToMany(User::class,'content_likes');
    }

    public function views(){
        return $this->belongsToMany(User::class,'content_views');
    }
}
