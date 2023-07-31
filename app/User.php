<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\UserProfile;
use App\Comment;
use App\Debate;
use App\Plan;
use App\UserPlan;
use App\EnrollUser;
use App\Course;
use Laratrust\Traits\LaratrustUserTrait;

class User extends Authenticatable
{
    use LaratrustUserTrait;
    use Notifiable;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','nick','timezone','bio','type','rating'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function profile(){
        return $this->hasOne(UserProfile::class, 'user_id', 'id');
    }

    public function comment(){
        return $this->hasOne(Comment::class,'user_id','id');
    }

    public function debates(){
        return $this->hasMany(Debate::class,'user_id','id');
    }

     /**
     * Get the user's Plan.
     */
    public function package()
    {   
        return $this->hasOne(UserPlan::class,'user_id','id');
    }

    public function coupon()
    {   
        return $this->hasMany(UserCoupon::class,'user_id','id');
    }

    /**
     * Get the user's Courses.
     */
    public function courses()
    {
        return $this->belongsToMany(Course::class, 'course_user','user_id','course_id');
    }

    public function comment_liked(){
        return $this->belongsToMany(Comment::class,'comment_likes');
    }
    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }
    public function timetable(){
        return $this->hasMany(TutorTimeTable::class,'user_id','id')->with('day');
    }
    public function rating(){
        return $this->hasMany(TutorRating::class,'tutor_id','id');
    }
    
    public function tutor_rating(){
        return $this->hasMany(TutorRating::class,'tutor_id','id');
    }
    public function do_rating(){
        return $this->hasMany(TutorRating::class,'user_id','id');
    }

    public function student_rating(){
        return $this->hasMany(StudentRating::class,'student_id','id');
    }
    public function do_student_rating(){
        return $this->hasMany(StudentRating::class,'user_id','id');
    }

    public function students(){
        return $this->belongsToMany(User::class,'student_tutor','tutor_id','student_id')->withTimestamps();
    }
    public function tutors(){
        return $this->belongsToMany(User::class,'student_tutor','student_id','tutor_id')->withPivot('room_id','is_group')->withTimestamps();
    }

    public function student_session(){
        return $this->belongsToMany(User::class,'sessions','user_id','tutor_id')->withPivot('session_id','status')->with('profile')->withTimestamps();
    }
    public function tutor_session(){
        return $this->belongsToMany(User::class,'sessions','tutor_id','user_id')->withPivot('session_id','status')->with('profile')->withTimestamps();
    }
    public function enrollments(){
        return $this->belongsToMany(ClassPlan::class,'enrolled_user','user_id','class_plan_id');
    }
    public function host(){
        return $this->hasMany(ClassPlan::class,'host_id','id');
    }

    public function notifications()
    {
        return $this->hasMany(NotificationStream::class,'receiver_id','id');
    }
    public function studentSessions(){
        return $this->hasMany(MeetingSession::class,'student_id','id');
    }

    public function tutorSessions(){
        return $this->hasMany(MeetingSession::class,'tutor_id','id');
    }

    public function tutorEarnings(){
        return $this->hasMany(TutorEarning::class,'tutor_id','id');
    }
     public function isAdmin() {
       return $this->role === 'admin';
    }

    public function isUser() {
       return $this->role === 'user';
    }
    public function isCoach() {
       return $this->role === 'coach';
    }
}
