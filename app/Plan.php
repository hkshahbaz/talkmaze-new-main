<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\User;
use App\UserPlan;

class Plan extends Model
{
    use SoftDeletes;

    public function users()
    {
        return $this->hasManyThrough(
            User::class,
            UserPlan::class,
            'plan_id', // Foreign key on users table...
            'user_plan_id', // Foreign key on posts table...
            'id', // Local key on countries table...
            'id' // Local key on users table...
        );
    }
}
