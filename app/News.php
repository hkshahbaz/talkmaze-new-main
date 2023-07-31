<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable=['title','small_title','description','small_description','image','tags','user_id','featured','shares'];
    public function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }
}
