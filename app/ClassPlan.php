<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClassPlan extends Model
{
    protected $fillable = ['title','description','date_time','num_hours','end_time','host_id','is_group','image','time_zone','recurring_type'];
    public function category(){
        return $this->belongsTo(ClassCategory::class,'class_category_id');
    }
    public function enrollments(){
        return $this->belongsToMany(User::class,'enrolled_user','class_plan_id','user_id');
    }
    public function host(){
        return $this->belongsTo(User::class,'host_id','id');
    }
    public function parentdata(){
        return $this->belongsTo(ClassPlan::class,'parent_id','id');
    }
    public function children(){
        return $this->HasMany(ClassPlan::class,'parent_id','id');
    }
}
