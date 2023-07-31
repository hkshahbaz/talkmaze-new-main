<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SocialLink extends Model
{
    use SoftDeletes;
	
    protected $fillable = [
        'name', 'image','link'
    ];
}
