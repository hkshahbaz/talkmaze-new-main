<?php

namespace App\Http\Controllers\Tutor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Conversation;
use App\Message;

class ChatController extends Controller
{
    public function chat()
    {
        $converstaions = Conversation::where('tutor_id', auth()->user()->id)->get();
        return view('tutor.chat', get_defined_vars());
    }

    public function studentContacts(Request $req)
    {
        $converstaions = Conversation::where('tutor_id', auth()->user()->id)
            ->whereHas('student_user', function($q) use($req){
                $q->where('name', 'like', "%$req->q%");
            })->with('student_user')->limit(100)->get();

        return view('ajax.tutor.contacts', get_defined_vars());
    }

    public function getChat(Request $req)
    {
        $user = auth()->user();
        $list = Conversation::find($req->id);
        return view('ajax.tutor.chat', get_defined_vars());
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
