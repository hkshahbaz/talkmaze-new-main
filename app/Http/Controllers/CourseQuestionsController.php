<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\StoreCompetition;
use Yajra\Datatables\Datatables;
use App\CourseQuestion;
use App\CourseQuestionAnswer;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\NotificationStream;


class CourseQuestionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if(auth()->user()->hasRole('coach')){

         /* if($request->ajax()){

            $coursequestion = CourseQuestion::with(['user','course','coursequestionanswers'])->where('user_id',auth()->id())->get();
            return Datatables::of($coursequestion)
                ->addColumn('action', function ($coursequestion) {
                    return view('admin.actions.actions_coursequestion',compact('coursequestion'))->render();
                    })
                //hastomany relationship logic
                ->addColumn('answers', function ($coursequestion) {
                    return $coursequestion->coursequestionanswers->map(function($coursequestionanswer) {
                        return $coursequestionanswer->reply;
                    })->implode('<br>');
                })
                ->addColumn('user_name', function ($coursequestion) {
                    return $coursequestion->user->name;
                    })
                ->addColumn('course_name', function ($coursequestion) {
                    return $coursequestion->course->name;
                    })
                ->addColumn('description', function ($coursequestion) {
                    return strip_tags($coursequestion->description);
                    })
                ->addColumn('details_url', function($coursequestion) {
                    return url('dashboard-details-data/' . $coursequestion->id);
                })
                 ->editColumn('id', '{{$id}}')
                ->make(true);
        }*/

        /*if($request->ajax()){

            $users = User::select();

            return Datatables::of($users)
                ->addColumn('details_url', function($user) {
                    return url('admin/details-data/' . $user->id);
                })
                 ->editColumn('id', '{{$id}}')
                ->make(true);
                }*/
        $coursequestion = CourseQuestion::with(['user','course','coursequestionanswers'])->where('user_id',auth()->id())->withCount('likes','dislikes','replies')->get();
        $notifications  = NotificationStream::where('receiver_id',auth()->id())->where('read',0)->orderBy('created_at','desc')->get();
        return view('user.dashboard.pages.coursequestions',compact('coursequestion','notifications'));
        }
        if(auth()->user()->hasRole('admin')){
       
         if($request->ajax()){

            $coursequestion = CourseQuestion::with(['user','course','coursequestionanswers'])->get();
            return Datatables::of($coursequestion)
                ->addColumn('action', function ($coursequestion) {
                    return view('admin.actions.actions_coursequestion',compact('coursequestion'))->render();
                    })
                /*hastomany relationship logic
                ->addColumn('answers', function ($coursequestion) {
                    return $coursequestion->coursequestionanswers->map(function($coursequestionanswer) {
                        return $coursequestionanswer->reply;
                    })->implode('<br>');
                })*/
                ->addColumn('user_name', function ($coursequestion) {
                    return $coursequestion->user->name;
                    })
                ->addColumn('course_name', function ($coursequestion) {
                    return $coursequestion->course->name;
                    })
                ->addColumn('description', function ($coursequestion) {
                    return strip_tags($coursequestion->description);
                    })
                ->addColumn('details_url', function($coursequestion) {
                    return url('admin/details-data/' . $coursequestion->id);
                })
                 ->editColumn('id', '{{$id}}')
                ->make(true);
        }

        /*if($request->ajax()){

            $users = User::select();

            return Datatables::of($users)
                ->addColumn('details_url', function($user) {
                    return url('admin/details-data/' . $user->id);
                })
                 ->editColumn('id', '{{$id}}')
                ->make(true);
                }*/
        
        return view('admin.coursequestion.index');
    }
    }
    public function getDetailsData($id)
    {
        $reply = CourseQuestion::find($id)->coursequestionanswers();


        return Datatables::of($reply)
         ->addColumn('user_name', function ($reply) {
                    return $reply->user->name;
                    })
         ->setRowClass(function ($reply) {
                return $reply->id % 2 == 0 ? 'alert-success' : 'alert-warning';
            })->make(true);


       /* $posts = User::find($id)->debates();
        //print_r($posts);exit;
        $posts = User::with('debates')->where('id',$id)->get();
        return Datatables::of($posts)
        ->addColumn('topic', function ($posts) {
                    return $posts->debates->topic;
                    })
        return Datatables::of($posts)
         ->setRowClass(function ($posts) {
                return $posts->id % 2 == 0 ? 'alert-success' : 'alert-warning';
            })->make(true);*/
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function getLikes($id)
    {
        $ruser = CourseQuestion::where('id',$id)->get();
         // $coursequestion = CourseQuestion::with(['coursequestionanswers'])->where('user_id',auth()->id())->where('id',$id)->get();
         $name="Snehal";
         //$returnHTML = view('user.dashboard.pages.coursequestions',['userjobs'=> $ruser])->render();// or method that you prefere to return data + RENDER is the key here
        return response()->json( array('success' => true, 'html'=>$ruser) );
    }
    public function store(Request $request)
    {
        // print_r($request->all());exit;
        if (Auth::check()) 
        {
          
        $user = auth()->user();

        $que = new CourseQuestion;
        $que->user_id =$user->id;
        $que->course_id =$request->course_id;
        $que->title = $request->title;
        $que->setAttribute('slug', $request->title);
        $que->description =  $request->description;
        $mytime = Carbon::now();
        $que->date =$mytime;
        $que->save();

        if($que){
            Session::flash('message', 'Thanks for submitting your question. Your question is in review. Once coach is answerd your question, it will shown in the discussion panel.');
            Session::flash('alert-class', 'alert-success');
            return redirect('/resources');
        }
        }
        else
        {
             return view('user.pages.login');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
