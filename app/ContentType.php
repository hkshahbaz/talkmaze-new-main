<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\CourseContent;

class ContentType extends Model
{
    use SoftDeletes;
    protected $guarded =[];

    public function course_contents(){
    	return $this->hasMany(CourseContent::class); 
    }
}
