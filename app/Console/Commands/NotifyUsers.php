<?php

namespace App\Console\Commands;

use App\ClassPlan;
use App\User;
use Illuminate\Console\Command;
use App\Jobs\SendMailJob;
use App\Mail\SessionMail;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use JoisarJignesh\Bigbluebutton\Facades\Bigbluebutton;


class NotifyUsers extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'notify:users';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        //One hour is added to compensate for PHP being one hour faster
        //
        $now = date("Y-m-d H:i", strtotime(Carbon::now()->addHour()));
        logger('sending joining link email to students on:'.$now);

        $tomorrow = Carbon::now()->tomorrow()->format('Y-m-d');
        $class_plans = ClassPlan::where('date_time','like',$tomorrow.'%')->where('status', 0)->get();
        if ($class_plans && count($class_plans) > 0) {
            foreach ($class_plans as $c_plan) {

                $users = DB::table('enrolled_user')->where('class_plan_id',$c_plan->id)->pluck('user_id')->toArray();

                $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';
                $room = substr(str_shuffle($permitted_chars), 0, 10);
                $classPlan = ClassPlan::find($c_plan->id);
                $classPlan->room_id = $room;
                $classPlan->save();

                \Bigbluebutton::create([
                    'meetingID' => $room,
                    'meetingName' => $c_plan->title,
                    'attendeePW' => 'attendee',
                    'moderatorPW' => 'moderator',
                ]);

                $date_time = explode(' ', $c_plan->date_time);
                $time = $date_time[0];

                $coach = User::find($c_plan->host_id);

                $content = ['name' => $coach->name, 'time' => $time, 'timezone' => $c_plan->time_zone,'link' => '', 'is_coach' => 'true'];

                dispatch(new SendMailJob(
                        $coach->email,
                        new SessionMail($content))
                );

                foreach ($users as $part) {
                    $user = User::where('id',$part)->first();

                    $joinUrl = Bigbluebutton::join([
                        'meetingID' => $room,
                        'userName' => $user->name,
                        'password' => 'attendee', //which user role want to join set password here
                        'logo'=> 'https://talkmaze.com/images/logo.png'
                    ]);

                    if ($user->email) {
                        $content = ['name' => $user->name, 'time' => $time, 'timezone' => $c_plan->time_zone,'link' => $joinUrl];
                        dispatch(new SendMailJob(
                                $user->email,
                                new SessionMail($content))
                        );
                    }
                }
            }

        }

        return true;
    }
}
