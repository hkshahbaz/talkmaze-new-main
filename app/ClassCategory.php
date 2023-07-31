<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClassCategory extends Model
{
    public function plans(){
        return $this->hasMany(ClassPlan::class,'class_category_id');
    }
}
