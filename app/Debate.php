<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use App\Comment;
use App\User;
use App\Vote;

class Debate extends Model
{
	use SoftDeletes;

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

	public function user(){
        return $this->belongsTo(User::class,'user_id','id')->with('profile');
    }

    public function user_profile()
    {
        return $this->belongsTo(UserProfile::class, 'user_profile','user_id','id');
    }

    public function votes(){
        return $this->hasMany(Vote::class,'debate_id','id');
    }

    public function likes(){
        return $this->votes()->select('user_id','debate_id')->where('type','=','like');
    }

    public function dislikes(){
        return $this->votes()->where('type','=','dislike');
    }

    public function comments(){
        return $this->hasMany(Comment::class,'debate_id','id')->with(['user','childrens'])->withCount('likes');
    }

    public function comment_likes(){
        return $this->hasMany(Comment::class,'debate_id','id')->withCount('likes');
    }

    public function comments_in_favour(){
        return $this->comments()->where(['type' => 'like', 'parent_id' => null]);
    }

    public function comments_against(){
        return $this->comments()->where(['type' => 'dislike', 'parent_id' => null]);
    }

    public function latest_comments_in_favour(){
        return $this->comments()->where(['type' => 'like', 'parent_id' => null])->latest()->limit(1);
    }

    public function latest_comments_against(){
        return $this->comments()->where(['type' => 'dislike', 'parent_id' => null])->latest()->limit(1);
    }

    public function latest_reply(){
        return $this->comments()->where('parent_id','<>',null)->latest()->limit(1);
    }
}
