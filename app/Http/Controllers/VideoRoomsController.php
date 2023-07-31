<?php

namespace App\Http\Controllers;

use App\ClassPlan;
use App\User;
use App\Message;
use App\NotificationStream;
use App\UserPlan;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Twilio\Jwt\AccessToken;
use Twilio\Jwt\Grants\VideoGrant;
use Twilio\Rest\Client;
use JoisarJignesh\Bigbluebutton\Facades\Bigbluebutton;
use Mail;


class VideoRoomsController extends Controller
{
    protected $sid;
    protected $token;
    protected $key;
    protected $secret;

    public function __construct()
    {
        $this->sid = config('services.twilio.sid');
        $this->token = config('services.twilio.token');
        $this->key = config('services.twilio.key');
        $this->secret = config('services.twilio.secret');
    }

    public function index()
    {
        $rooms = [];
        try {
            $client = new Client($this->sid, $this->token);
            $allRooms = $client->video->rooms->read([]);

            $rooms = array_map(function($room) {
                return $room->uniqueName;
            }, $allRooms);

        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }
        return view('video', ['rooms' => $rooms]);
    }

    public function createRoom(Request $request)
    {
        $client = new Client($this->sid, $this->token);

        $exists = $client->video->rooms->read([ 'uniqueName' => $request->roomName]);

        if (empty($exists)) {
            $client->video->rooms->create([
                'uniqueName' => $request->roomName,
                'type' => 'group',
                'recordParticipantsOnConnect' => false
            ]);

            Log::debug("created new room: ".$request->roomName);
        }

        return redirect()->action('VideoRoomsController@joinRoom', [
            'roomName' => $request->roomName
        ]);
    }
    public function start_meeting($id) {

        $plk = ClassPlan::whereId($id)->first();

        if (auth()->user()->hasRole('coach')) {
            DB::table('sessions')->where('tutor_id',auth()->user()->id)->where('status',1)->update(['status'=>2]);
        }

        $users = DB::table('enrolled_user')->where('class_plan_id',$id)->pluck('user_id')->toArray();

        if(auth()->user()->hasRole('coach')) {
            foreach ($users as $part){
                $noti = new NotificationStream;
                $noti->create([
                    'actor_id'=>auth()->id(),
                    'receiver_id'=>$part,
                    'verb'=>'SESSION',
                    'action'=>'Just Started a Session'
                ]);
            }
        }

        //auth()->user()->tutor_session()->updateExistingPivot($users, ['status'=>1]);

         $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';
         $session = substr(str_shuffle($permitted_chars), 0, 32);

         if (isset($plk->room_id) && $plk->room_id != '') {
             $room = $plk->room_id;
         } else {
             $room = substr(str_shuffle($permitted_chars), 0, 10);
             $classPlan = ClassPlan::find($id);
             $classPlan->room_id = $room;
             $classPlan->save();
         }

       if($plk->is_group == 1) {
            auth()->user()->students()->attach($users,['room_id'=>$room,'is_group'=>1]);
            auth()->user()->tutor_session()->attach($users,['session_id'=>$session,'is_group'=>1,'status'=>1,'room_id'=>$room]);
        } else {
            auth()->user()->students()->attach($users,['room_id'=>$room,'is_group'=>0]);
            auth()->user()->tutor_session()->attach($users,['session_id'=>$session,'is_group'=>0,'status'=>1,'room_id'=>$room]);
        }

        ClassPlan::whereId($id)->update(['status' => 1]);


      if(auth()->user()->hasRole('coach')){
        foreach ($users as $part) {
          $user_plan = UserPlan::where('user_id',$part)->first();
          if ($user_plan) {
            $user_plan->hours = $user_plan->hours - $plk->num_hours;
            $user_plan->update();
          }
        }
      }

        if(auth()->user()->hasRole('coach')) {
            $url = \Bigbluebutton::start([
                'meetingID' => $room,
                'moderatorPW' => 'moderator', //moderator password set here
                'attendeePW' => 'attendee', //attendee password here
                'userName' => auth()->user()->name,//for join meeting
                'logo' => 'https://talkmaze.com/images/logo.png'
            ]);
        } else {
            $url = Bigbluebutton::join([
                'meetingID' => $room,
                'userName' => auth()->user()->name,
                'password' => 'attendee', //which user role want to join set password here
                'logo'=> 'https://talkmaze.com/images/logo.png'
            ]);
        }

        return redirect()->to($url);



        //$coach = User::find(189);
        //$users = DB::table('enrolled_user')->where('class_plan_id',656)->pluck('user_id')->toArray();

       /* if(auth()->user()->hasRole('coach')){
            foreach ($users as $part) {
                $user = User::where('id',$part)->first();

                $joinUrl = Bigbluebutton::join([
                    'meetingID' => $room,
                    'userName' => $user->name,
                    'password' => 'attendee', //which user role want to join set password here
                    'logo'=> 'https://talkmaze.com/images/logo.png'
                ]);

                if ($user->email) {
                    Mail::to($user->email)
                        ->send(new \App\Mail\SessionMail($joinUrl));
                }
            }
        }*/

    }

    public function create_group(Request $request){
        if(auth()->user()->hasRole('coach')){
            foreach ($request->participents as $part){
                $noti = new NotificationStream;
                $noti->create([
                    'actor_id'=>auth()->id(),
                    'receiver_id'=>$part,
                    'verb'=>'SESSION',
                    'action'=>'Just Started a Session'
                ]);
            }
        }
        $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';
        $room = substr(str_shuffle($permitted_chars), 0, 10);
        $session = substr(str_shuffle($permitted_chars), 0, 32);

        auth()->user()->students()->attach($request->participents,['room_id'=>$room,'is_group'=>1]);
        auth()->user()->tutor_session()->attach($request->participents,['session_id'=>$session,'is_group'=>1,'status'=>1,'room_id'=>$room]);
       // return redirect('/dashboard-call/group/'.$room);

        $url = \Bigbluebutton::start([
            'meetingID' => $room,
            'moderatorPW' => 'moderator', //moderator password set here
            'attendeePW' => 'attendee', //attendee password here
            'userName' => auth()->user()->name,//for join meeting
            'logo' => 'https://talkmaze.com/images/logo.png'
        ]);
        return redirect()->to($url);
    }
    public function joinGroupRoom($roomName)
    {

        // A unique identifier for this user
        $identity = Auth::user()->name;

        Log::debug("joined with identity: $identity");
        $mType = 'moderator';

        if(auth()->user()->hasRole('coach')){
            if (auth()->user()->tutor_session()->where('status',1)->where('is_group',1)->exists() || auth()->user()->student_session()->where('status',1)->where('is_group',1)->exists()){
                $session_id = auth()->user()->tutor_session()->where('status',1)->where('is_group',1)->first();
                if(!$session_id){
                    $session_id = auth()->user()->student_session()->where('status',1)->where('is_group',1)->first();
                }
                if($session_id){
                    $messages = Message::where('session_id',$session_id->pivot->session_id)->where('is_group',1)->get();
                    $usert = auth()->user()->tutor_session()->where('session_id',$session_id->pivot->session_id)->with('profile')->first();
                    if(!$usert){
                        $usert = auth()->user()->student_session()->where('session_id',$session_id->pivot->session_id)->with('profile')->first();
                    }
                    $sessionId = $session_id->pivot->session_id;
                }else{
                    dd('$session_id ni mili');
                }
            }else{
                return redirect()->back();
            }
        }else{
            $mType = 'attendee';

            if (auth()->user()->student_session()->where('status',1)->where('is_group',1)->exists()){
                $session_id = auth()->user()->student_session()->where('is_group',1)->where('status',1)->first();
                if($session_id){
                    $messages = Message::where('session_id',$session_id->pivot->session_id)->get();
                    $usert = auth()->user()->student_session()->where('session_id',$session_id->pivot->session_id)->with('profile')->first();
                    $sessionId = $session_id->pivot->session_id;
                }
            }else{
                return redirect()->back();
            }
        }
        $joineduser=[];
        $session_users = DB::table('sessions')->where('session_id',$sessionId)->get();
        $session_data = DB::table('sessions')->where('session_id',$sessionId)->first();
        $host = User::whereId($session_data->tutor_id)->first();
        foreach($session_users as $on){
            $useropp = User::whereId($on->user_id)->first();
            if($useropp){
                $joineduser[] = $useropp;
            }
        }

        return redirect()->to(
            Bigbluebutton::join([
                'meetingID' => $roomName,
                'userName' => $identity,
                'password' => $mType, //which user role want to join set password here
                'logo'=> 'https://talkmaze.com/images/logo.png'
            ])
        );

    }

    public function end_session($id){
        $r = DB::table('sessions')->where('room_id',$id)->where('status',1)->update(['status'=>2]);

        Bigbluebutton::close([
            'meetingID' => $id,
            'moderatorPW' => 'moderator' //moderator password set here
        ]);
        return redirect()->back();
    }

    public function joinRoom(Request $request, $roomName)
    {
        // A unique identifier for this user
        $identity = Auth::user()->name;

        Log::debug("joined with identity: $identity");
        $mType = 'moderator';

        $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';
        $session = substr(str_shuffle($permitted_chars), 0, 32);
        $messages = '';
        $usert = '';
        $sessionId = '';

        if(auth()->user()->hasRole('coach')){
            $r = auth()->user()->students()->where('room_id',$roomName)->first();
            if (auth()->user()->tutor_session()->where('user_id',$r->id)->where('status',1)->exists()){
                $session_id = auth()->user()->tutor_session()->where('user_id',$r->id)->where('status',1)->first();
                if($session_id){
                    $messages = Message::where('session_id',$session_id->pivot->session_id)->get();
                    $usert = auth()->user()->tutor_session()->where('session_id',$session_id->pivot->session_id)->with('profile')->first();
                    $sessionId = $session_id->pivot->session_id;
                }
            }else{
                auth()->user()->tutor_session()->attach($r->id,['session_id'=>$session,'status'=>1,'room_id'=>$roomName]);
                $sessionId = $session;
            }
        }else{
            $mType = 'attendee';

            $r = auth()->user()->tutors()->where('room_id',$roomName)->first();
            if (auth()->user()->student_session()->where('tutor_id',$r->id)->where('status',1)->exists()){
                $session_id = auth()->user()->student_session()->where('tutor_id',$r->id)->where('status',1)->first();
                if($session_id){
                    $messages = Message::where('session_id',$session_id->pivot->session_id)->get();
                    $usert = auth()->user()->student_session()->where('session_id',$session_id->pivot->session_id)->with('profile')->first();
                    $sessionId = $session_id->pivot->session_id;
                }
            }else{
                auth()->user()->student_session()->attach($r->id,['session_id'=>$session,'status'=>1,'room_id'=>$roomName]);
                $sessionId = $session;
                if($sessionId){
                    $messages = Message::where('session_id',$sessionId)->get();
                    $usert = auth()->user()->student_session()->where('session_id',$sessionId)->with('profile')->first();
                }
            }
        }
        // dd([ 'accessToken' => $token->toJWT(), 'roomName' => $roomName,'messages'=>$messages,'user'=>$usert,'session_id'=>$sessionId ]);
        //return view('user.dashboard.pages.calling-page', [ 'accessToken' => $token->toJWT(), 'roomName' => $roomName,'messages'=>$messages,'user'=>$usert,'session_id'=>$sessionId,'group'=>false ]);
        return redirect()->to(
            Bigbluebutton::join([
                'meetingID' => $roomName,
                'userName' => $identity,
                'password' => $mType, //which user role want to join set password here
                'logo'=> 'https://talkmaze.com/images/logo.png'
            ])
        );
    }
}
