<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conversation extends Model
{
    protected $guarded = [];
    
    protected $table = "conversations";

    public function student(){
    	return $this->belongsTo(User::class, "student_id", "id"); 
    }

    public function tutor(){
    	return $this->belongsTo(User::class, "tutor_id", "id"); 
    }

    public function messages(){
        return $this->hasMany(Message::class, "conversation_id", "id");
    }
}
