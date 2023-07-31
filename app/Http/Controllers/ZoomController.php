<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
use Zoom;
use Mail;
use App\MeetingSession;
use App\CoachRequest;
use Auth;
use GuzzleHttp\Client;
use App\UserProfile;
use Log;

class ZoomController extends Controller
{ 
    public function OAuthRedirect($start_session = false)
    {
        $user = Auth::user();
        // dd($user);
        try
        {
            $zoom_user = Zoom::user()->create([
                'first_name' => $user->name,
                'email' => $user->email,
                'type' => 1
            ]);
            $user_profile = UserProfile::where('user_id', $user->id)->first();
            $user_profile->zoom_access_token = $zoom_user->id;
            $user_profile->save();
        }
        catch(\Exception $e)
        {
            Log::notice($e->getMessage());
            dd($e->getMessage());
            return redirect()->to('/dashboard-profile')->with('error', $e->getMessage());
        }
        
        if(!$start_session)
            return redirect()->to('/dashboard-profile')->with('success', 'Zoom account has been linked successfully, Check your email and accept invitation.');
        
    }

    public function OAuthCallback()
    {
        try { 
            $client = new Client(['base_uri' => 'https://zoom.us']); 
            $response = $client->request('POST', '/oauth/token', [ 
                "headers" => [ 
                    "Authorization" => "Basic ". base64_encode(env('ZOOM_CLIENT_KEY').':'.env('ZOOM_CLIENT_SECRET')) 
                ], 
                'form_params' => [ 
                    "grant_type" => "authorization_code", 
                    "code" => $_GET['code'], "redirect_uri" => env('ZOOM_REDIRECT_URL') 
                ], 
            ]); 
            $token = json_decode($response->getBody()->getContents(), true); 
            $token = json_encode($token);
            
            $tutor = Auth::user()->tutor_profile;
            $tutor->zoom_access_token = $token;
            $tutor->save();
            
            if(session('start_session_after_oauth'))
            {
                return $this->startSession(session('start_session_after_oauth'));
            }
            return redirect()->route('tutor.edit.profile')->with('success', 'Zoom account has been linked successfully');
        } 
        catch(Exception $e) { 
            return redirect()->route('tutor.edit.profile')->with('error', $e->getMessage());
        }
    }

    public function startSession($id = null)
    {
        if(is_null(Auth::user()->profile->zoom_access_token))
        {
            $this->OAuthRedirect($id);
        }
        
        $tutor = Auth::user()->profile;
        $user = Zoom::user()->find($tutor->zoom_access_token);
        if($user->status == 'pending')
        {
            return redirect()->route('dashboard-home')->with('error', 'Zoom invitation has not been accepted yet, please check your email and accept invitation');
        }

        $class_plan = CoachRequest::find($id);
        if ($class_plan->interval == 2) {
                $class_plan->remaining_weeks = $class_plan->remaining_weeks - 1;
                $class_plan->save();
            }
        $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';
        $session_id = substr(str_shuffle($permitted_chars), 0, 32);
        
        try {
            $user = Zoom::user()->first();
            $meeting = Zoom::meeting()->make([
                'userId' => auth()->user()->id,
                'topic' => 'Online Class',
                'type' => 2,
                'disable_recording' => false,
                'duration' => 1,
                'timezone' => 'Pakistan',
                'password' => '1234567890',
                'agenda' => 'Tutor arrange online class for student',
            ]);

            $meeting = $user->meetings()->save($meeting);

            $check_meeting_session=MeetingSession::where("coach_request_id",$class_plan->id)
            ->count();
            if($check_meeting_session>0)
            {
                $meeting_session=MeetingSession::where("coach_request_id",$class_plan->id)
                ->first();
            }else
            {
                $meeting_session = MeetingSession::create([
                    'session_id' => $session_id,
                    'zoom_id' => $meeting->id,
                    'start_url' => $meeting->start_url,
                    'join_url' => $meeting->join_url,
                    'tutor_id' => $class_plan->tutor_id,
                    'student_id' => $class_plan->student_id,
                    'coach_request_id' => $class_plan->id,
                    'status' => '1',
                ]);
            }
            Mail::send('email.student.join_session', get_defined_vars(), function ($message) use($class_plan) {
                $message->to($class_plan->student->email, $class_plan->student->name);
                $message->subject('Join Session');
            });

        } catch (\Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with('error','Something Went Wrong, Try Again!');
        }

        return redirect()->to($meeting->start_url);
    }

    public function zoomCallback(Request $req)
    {
        $id = $req['payload']['object']['id'];

        $m_ses = MeetingSession::where('zoom_id', $id)->where('status','1')->first();
        $t_req = CoachRequest::find($m_ses->coach_request_id);
        $tutor_timezone = $t_req->tutor->time_zone;
        $amount = TutorProfile::where('user_id', $t_req->tutor_id)->first()->hourly_rate;
        $hours = $t_req->time_in_min / 60 ;

        if ($t_req->interval == "1") {
            $t_req->class_status = "completed";
        } else {
            if ($t_req->remaining_weeks > 0) {
                $t_req->active_date = Carbon::parse($t_req->active_date)->addDays(7)->format('Y/m/d');
            } else {
                $t_req->class_status = "completed";
            }
        }
        $t_req->save();

        $now = Carbon::now();
        $created_at = Carbon::parse($m_ses->created_at);
        $time_taken = $created_at->diffInMinutes($now);

        $m_ses->time_taken = $time_taken;
        $m_ses->ended_at = Carbon::now();
        $m_ses->status = "2";
        $m_ses->save();

        $payout = new TutorPayout();
        $payout->tutor_id = $t_req->tutor_id;
        $payout->meeting_session_id = $m_ses->id;
        $payout->hours = $hours;
        $payout->amount = $amount;
        $payout->status = "due";
        $payout->save();
    }

    public function zoomJoined(Request $req)
    {
        $id = $req['payload']['object']['id'];
        $m_ses = MeetingSession::where('zoom_id', $id)->where('status','1')->first();
        $m_ses->student_joined = "1";
        $m_ses->save();
    }
}
