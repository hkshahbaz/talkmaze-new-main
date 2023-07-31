<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\User;
use App\Debate;

class Comment extends Model
{
    use SoftDeletes;
    protected $guarded =[];

    public function user(){
    	return $this->belongsTo(User::class,'user_id','id')->with('profile');
    }

    public function debate(){
    	return $this->belongsTo(Debate::class,'debate_id','id');
    }

    public function likes(){
    	return $this->belongsToMany(User::class,'comment_likes');
    }

    public function childrens(){
        return $this->hasMany(Comment::class, 'parent_id', 'id')->with('user')->withCount('likes');
    }

    public function parent(){
        return $this->belongTo(Comment::class, 'parent_id', 'id');
    }
}	
