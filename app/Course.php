<?php

namespace App;

use App\Lesson;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;
use App\Category;
use App\CourseContent;
use App\CourseRating;
use App\User;

class Course extends Model
{
    use SoftDeletes;
    protected $guarded =[];

    public function category(){
    	return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function lessons(){
        return $this->hasMany(Lesson::class)->with(['course_contents']);
    }

    public function lessons_text(){
        return $this->hasMany(Lesson::class)->with(['course_contents' => function($q){
            return $q->where('content_type_id','=',1)->get();
        }]);
    }

    public function lessons_audio(){
        return $this->hasMany(Lesson::class)->with(['course_contents' => function($q){
            return $q->where('content_type_id','=',2)->get();
        }]);
    }

    public function lessons_video(){
        return $this->hasMany(Lesson::class)->with(['course_contents' => function($q){
            return $q->where('content_type_id','=',3)->get();
        }]);
    }

    public function content(){
        return $this->hasMany(CourseContent::class)->where('lesson_id',0);
    }
    /**
     * Get the user's Courses.
     */
    public function users_enroll()
    {
        return $this->belongsToMany(User::class, 'course_user','course_id','user_id');
    }

    public function users()
    {
        return $this->belongsToMany(User::class,'course_user')->with('profile');
    }

    public function user()
    {
        return $this->belongsTo(User::class)->with('profile');
    }
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

    public function rating()
    {
        return $this->hasMany(CourseRating::class, 'course_id','id');
    }

    public function reviews(){
        return $this->rating()->where('review','<>',null);
    }
}
