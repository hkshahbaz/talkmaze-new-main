<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use JoisarJignesh\Bigbluebutton\Facades\Bigbluebutton;

class BigBlueController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //dd(\Bigbluebutton::isConnect());

        $url = \Bigbluebutton::start([
            'meetingID' => 'tamku',
            'moderatorPW' => 'moderator', //moderator password set here
            'attendeePW' => 'attendee', //attendee password here
            'userName' => 'John Deo',//for join meeting,
            'logo' => 'https://talkmaze.com/images/logo.png',
            'bannerText' => 'Test Meeting for Talkmaze users'
            //'redirect' => false // only want to create and meeting and get join url then use this parameter
        ]);

        return redirect()->to($url);
        dd('here');

        $mm = \Bigbluebutton::all();
        print_r($mm);


        \Bigbluebutton::create([
            'meetingID' => 'tamku',
            'meetingName' => 'test meeting',
            'attendeePW' => 'attendee',
            'moderatorPW' => 'moderator'
        ]);


        $total_pharmacy = \DB::table('users')->where('type', 2)->count();
        $user_count = \DB::table('users')->where('type', 3)->count();
        $total_trainings = \DB::table('training_positions')->count();

        return view('dashboard' ,compact(['total_pharmacy','user_count', 'total_trainings']));
    }

    public function startMeeting() {
        $url = \Bigbluebutton::start([
            'meetingID' => 'tamku',
            'moderatorPW' => 'moderator', //moderator password set here
            'attendeePW' => 'attendee', //attendee password here
            'userName' => 'John Deo',//for join meeting
            'logo' => 'https://talkmaze.com/images/logo.png',
            'bannerText' => 'Helo this is test Meeting'

            //'redirect' => false // only want to create and meeting and get join url then use this parameter
        ]);

        return redirect()->to($url);

    }

    public function joinMeeting() {
        return redirect()->to(
            Bigbluebutton::join([
                'meetingID' => 'tamku',
                'userName' => 'disa',
                'password' => 'attendee', //which user role want to join set password here
                'logo'=> 'https://talkmaze.com/images/logo.png'
            ])
        );

    }

    public function testStripe() {
        return view('user.stripe');
    }

}
