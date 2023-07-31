<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Competition;
class CompetitionUsers extends Model
{
    protected $fillable=['fname','lname'];
    
    public function competition(){
        return $this->belongsTo(Competition::class,'competition_id','id');
    }
    
     public function user_profile(){
        return $this->belongsTo(UserProfile::class,'user_profiles_id','id');
    }
}
