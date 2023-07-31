<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserPlan extends Model
{
    protected $guarded = [];

    public function plan()
    {
        return $this->belongsTo(Package::class,'plan_id','id');
    }
}
