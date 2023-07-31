<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Course;

class Category extends Model
{
	use SoftDeletes;
	
    protected $guarded = [];

    public function children(){
    	return $this->belongTo(Category::class, 'parent_id', 'id');
    }

    public function parent(){
    	return $this->belongTo(Category::class, 'parent_id', 'id');
    }

    public function courses(){
    	return $this->hasMany(Course::class,'category_id','id');
    }
}
