<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NotificationStream extends Model
{
    protected $fillable = ['read','actor_id','action_id','action','verb','receiver_id'];
    public function sender(){
        return $this->belongsTo(User::class,'actor_id','id')->with('profile');
    }
}
