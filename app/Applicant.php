<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\TimeTable;

class Applicant extends Model
{
    use SoftDeletes;
    protected $guarded = [];

    public function time_table(){
        return $this->hasMany(TimeTable::class,'applicant_id','id'); 
    }
}
