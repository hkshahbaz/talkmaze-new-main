<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Debate;
use App\User;
use Yajra\Datatables\Datatables;
use App\Http\Requests\StoreComment;
use Illuminate\Support\Facades\Session;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->ajax()){

            $comment = Comment::with(['user:id,name','debate:id,topic'])->get();

            return Datatables::of($comment)
                ->addColumn('action', function ($comment) {
                    return view('admin.actions.actions_comment',compact('comment'));
                    })
                ->addColumn('user_name', function ($comment) {
                    return $comment->user->name;
                    })
                ->addColumn('debate_topic', function ($comment) {
                    return $comment->debate ? $comment->debate->topic : 'not found';
                    })
                ->editColumn('id', 'ID: {{$id}}')
                ->make(true);
        }
       return view('admin.comment.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = User::pluck('name','id');
        $debate = Debate::pluck('topic','id');
        return view('admin.comment.create',compact('user','debate'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreComment $request)
    {
        $comment = new Comment;
        $comment->user_id = $request->user_id;
        $comment->debate_id = $request->debate_id;
        $comment->comment = $request->comment;
        $comment->save();

        if($comment){
            Session::flash('message', 'Comment Created Successfully!');
            Session::flash('alert-class', 'alert-success');
            return redirect('admin/comments');
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
        $comment = Comment::find($id);
        $user = User::pluck('name','id');
        $debate = Debate::pluck('topic','id');
        return view('admin.comment.edit',compact('comment','user','debate'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreComment $request, $id)
    {
        $comment = Comment::find($id);
        $comment->user_id = $request->user_id;
        $comment->debate_id = $request->debate_id;
        $comment->comment = $request->comment;
        $comment->save();

        if($comment){
            Session::flash('message', 'Comment Updated Successfully!');
            Session::flash('alert-class', 'alert-success');
            return redirect('admin/comments');
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
        $comment = Comment::find($id)->delete();
        if($comment){
            return view('admin.comment.index');
        }
    }
}
