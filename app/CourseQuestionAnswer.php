<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\CourseQuestions;
class CourseQuestionAnswer extends Model
{
    //
    protected $guarded = [];
    public $table = "coursequestionreply";
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function coursequestion()
    {
       return $this->belongsTo(CourseQuestions::class,'answer_id','id');
   	}
}
