<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CoachAvailability extends Model
{
  protected $fillable = ['coach_id','from_time','to_time'];

  protected $table = 'coach_availability';

  public function coach(){
    return $this->belongsTo(User::class,'coach_id','id');
  }

}
