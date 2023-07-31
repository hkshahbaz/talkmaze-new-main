<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Package extends Model
{
    protected $guarded = [];

    use SoftDeletes;

    public function users()
    {
        return $this->hasManyThrough(
            User::class, // Final modal which we want to access
            UserPlan::class, // Intermidiate modal
            'plan_id', // Foreign key on users table...
            'user_plan_id', // Foreign key on posts table...
            'id', // Local key on countries table...
            'id' // Local key on users table...
        );
    }
}
