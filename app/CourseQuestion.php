<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\CourseQuestionAnswer;
use App\CourseQuestions_Likes;
use App\Course;
use App\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;


class CourseQuestion extends Model
{
	// protected $guarded = [];
    use SoftDeletes;

	public $table = "coursequestions";
	public function setSlugAttribute($slug)
    {
        $slug = Str::slug( $slug );
        $slugs = $this->whereRaw("slug REGEXP '^{$slug}(-[0-9]*)?$'");

        if ($slugs->count() === 0) {
            $this->attributes['slug'] = $slug;
        }
        else{
            // Get the last matching slug
            $lastSlug = $slugs->orderBy('slug', 'desc')->first()->slug;

            // Strip the number off of the last slug, if any
            $lastSlugNumber = intval(str_replace($slug . '-', '', $lastSlug));

            // Increment/append the counter and return the slug we generated
            $this->attributes['slug'] = $slug . '-' . ($lastSlugNumber + 1);
        }
    }
	public function user()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
    public function coursequestionanswers()
    {
    	return $this->hasMany(CourseQuestionAnswer::class, 'coursequestion_id','id');
	}
	public function course()
    {
        return $this->belongsTo(Course::class,'course_id','id');
    }
    public function coursequestions_likes()
    {
        return $this->hasMany(CourseQuestions_Likes::class,'coursequestion_id','id');
    }
    public function likes(){
        return $this->coursequestions_likes()->select('user_id','coursequestion_id')->where('type','=','like');
    }

    public function dislikes(){
        return $this->coursequestions_likes()->where('type','=','dislike');
    }
    public function replies()
    {
        return $this->coursequestionanswers()->where('user_id',Auth::id());
    }

}
