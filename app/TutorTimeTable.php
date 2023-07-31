<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TutorTimeTable extends Model
{
    public function day(){
        return $this->belongsTo(Day::class,'day_id','id');
    }
}
