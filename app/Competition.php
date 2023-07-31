<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\User;
use Illuminate\Support\Str;
class Competition extends Model
{
	use SoftDeletes;
    
    protected $fillable=['title','requirement','description'];
    
    public function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }
     public function competitionusers(){
    	return $this->hasMany(CompetitionUsers::class,'competition_id','id');
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
}
