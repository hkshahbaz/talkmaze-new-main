<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Testimonial extends Model
{
	use SoftDeletes;
	
    protected $fillable = [
        'name', 'email','feedback' , 'image'
    ];
}
