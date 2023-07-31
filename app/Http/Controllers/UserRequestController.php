<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Twilio\Rest\Client;
use Yajra\Datatables\Datatables;
use App\Http\Requests\StoreUserRequest;
use Illuminate\Support\Facades\Session;
use App\UserRequest;
use App\User;
use function Sodium\compare;
use Mail;

class UserRequestController extends Controller
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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index(Request $request)
    {
        if($request->ajax()){

            $user_request = UserRequest::select(['id', 'user_id', 'tutor_id', 'why_would_you_like_to_be_matched_with_a_coach' ,'experience_of_public_speaking' ,'do_you_have_access_to_a_webcam_and_mic' ,'created_at', 'updated_at']);
            return Datatables::of($user_request)
                ->addColumn('action', function ($user_request) {
                    return view('admin.actions.actions_user_request',compact('user_request'));
                    })
                ->editColumn('id', 'ID: {{$id}}')
                ->make(true);
        }
       return view('admin.user_request.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = User::where('role','user')->pluck('name','id');
        $tutor = User::where('role','tutor')->pluck('name','id');
        return view('admin.user_request.create',compact('user','tutor'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserRequest $request)
    {
        $user_request = new UserRequest;
        $user_request->user_id = $request->user_id;
        $user_request->tutor_id = $request->tutor_id;
        $user_request->why_would_you_like_to_be_matched_with_a_coach = $request->why_would_you_like_to_be_matched_with_a_coach;
        $user_request->experience_of_public_speaking = $request->experience_of_public_speaking;
        $user_request->do_you_have_access_to_a_webcam_and_mic = $request->do_you_have_access_to_a_webcam_and_mic;
        $user_request->save();

        if($user_request){
            Session::flash('message', 'User Request Created Successfully!');
            Session::flash('alert-class', 'alert-success');
            return redirect('admin/user_requests');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user_request = UserRequest::find($id);
        $user = User::where('role','user')->pluck('name','id');
        $tutor = User::where('role','tutor')->pluck('name','id');
        return view('admin.user_request.edit',compact('user_request','user','tutor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user_request = UserRequest::find($id);
        $user_request->user_id = $request->user_id;
        $user_request->tutor_id = $request->tutor_id;
        $user_request->why_would_you_like_to_be_matched_with_a_coach = $request->why_would_you_like_to_be_matched_with_a_coach;
        $user_request->experience_of_public_speaking = $request->experience_of_public_speaking;
        $user_request->do_you_have_access_to_a_webcam_and_mic = $request->do_you_have_access_to_a_webcam_and_mic;
        $user_request->save();

        if($user_request) {
            Session::flash('message', 'User Request Updated Successfully!');
            Session::flash('alert-class', 'alert-success');
            return redirect('admin/user_requests');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user_request = UserRequest::find($id)->delete();
        if($user_request){
            return view('admin.user_request.index');
        }
    }

    public function sendrequest(Request $request){
        $rq = new UserRequest;
        $request['user_id'] = auth()->id();
        $rq = $rq->create($request->all());
        return response()->json($rq,200);
//        dd(auth()->user()->package()->count());
        // if (auth()->user()->package()->count()>0){
        //     return response()->json($rq,200);
        // }else{
        //     return response()->json($rq,400);
        // }
    }

    public function send_request(Request $request){
        $ref = UserRequest::whereId($request->get('request_id'))->first();
        $student_id = $ref->user_id;
        $coach_id = $request->get('tutor_id');
        $ref->update(['tutor_id'=>$request->get('tutor_id')]);

        $coach = User::find($coach_id);
        $student = User::find($student_id);
        $content = ['coach_name' => $coach->name, 'student_name' => $student->name];
        if ($coach->email) {
            Mail::to($coach->email)
                ->send(new \App\Mail\CoachRequestMail($content));
        }

        return redirect('/dashboard-home')->with('success', 'Profile updated!');
    }

    public function accept($id) {
        $request = UserRequest::whereId($id)->first();
        $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';
        $room = substr(str_shuffle($permitted_chars), 0, 10);
        if (!auth()->user()->students()->where('student_id', $request->user_id)->where('is_group',0)->exists()){
            $client = new Client($this->sid, $this->token);
            $exists = $client->video->rooms->read([ 'uniqueName' => $room]);
            if (empty($exists)) {
                $client->video->rooms->create([
                    'uniqueName' => $room,
                    'type' => 'group',
                    'recordParticipantsOnConnect' => false
                ]);
                Log::debug("created new room: ".$room);
            }
            auth()->user()->students()->attach($request->user_id,['room_id'=>$room]);
        }
        $req = UserRequest::where('tutor_id',auth()->id())->where('user_id',$request->user_id)->get();
        foreach ($req as $rf){
            $rf->delete();
        }
        return redirect()->back()->with('success', 'Profile updated!');
    }
    public function reject($id){
        $request = UserRequest::whereId($id)->first();
        $request->delete();
        return redirect()->back();
    }

//    public function createRoom(Request $request)
//    {
//        $client = new Client($this->sid, $this->token);
//
//        $exists = $client->video->rooms->read([ 'uniqueName' => $request->roomName]);
//
//        if (empty($exists)) {
//            $client->video->rooms->create([
//                'uniqueName' => $request->roomName,
//                'type' => 'group',
//                'recordParticipantsOnConnect' => false
//            ]);
//
//            Log::debug("created new room: ".$request->roomName);
//        }
//
//        return redirect()->action('VideoRoomsController@joinRoom', [
//            'roomName' => $request->roomName
//        ]);
//    }
}
