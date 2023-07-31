<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Conversation;
use App\Message;

class ChatController extends Controller
{
    public function chat(Request $req)
    {
    	$converstaions = Conversation::where('student_id', auth()->user()->id)->get();
        if (isset($req->conversation)) {
            $active = Conversation::where('student_id', auth()->user()->id)
                ->where('tutor_id', base64_decode($req->conversation))->first();
        } else {
            $active = Conversation::where('student_id', auth()->user()->id)->first();
        }
        return view('student.chat', get_defined_vars());
    }

    public function studentContacts(Request $req)
    {
        $converstaions = Conversation::where('student_id', auth()->user()->id)
            ->whereHas('tutor', function($q) use($req){
                $q->where('name', 'like', "%$req->q%");
            })->with('tutor')->limit(100)->get();

        return view('ajax.student.contacts', get_defined_vars());
    }

    public function getChat(Request $req)
    {
        $user = auth()->user();
        $list = Conversation::find($req->id);
        return view('ajax.student.chat', get_defined_vars());
    }

    public function saveMessage(Request $req)
	{
		$user = auth()->user();

        $m = new Message();
        $m->conversation_id = $req->convo_id;
		$m->user_id = $user->id;
		$m->message = $req->message;
		$m->ip = $req->ip();
        $m->save();

		return response()->json('OK');
	}
}
