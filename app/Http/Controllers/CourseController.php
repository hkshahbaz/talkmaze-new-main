<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Course;
use App\Category;
use Yajra\Datatables\Datatables;
use App\Http\Requests\StoreCourse;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Image;


class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->ajax()){

            $course = Course::with('category:id,name')->get();

            return Datatables::of($course)
                ->addColumn('action', function ($course) {
                    return view('admin.actions.actions_course',compact('course'))->render();
                    })
                ->addColumn('category_name', function ($course) {
                    return $course->category->name;
                    })
                ->addColumn('enrolled_users', function ($course) {
                    return $course->users()->count();
                    })
                ->addColumn('description', function ($course) {
                    return substr($course->description,0,30).'...';
                })
                ->editColumn('id', 'ID: {{$id}}')
                ->make(true);
        }
       return view('admin.course.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::where('parent_id','=',null)->pluck('name', 'id');
        $user = User::whereHas('roles',function($r){
            return $r->where('name','coach');
        })->pluck('name','id')->toArray();
        return view('admin.course.create',compact('category','user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCourse $request)
    {
        //storing image

        if ($request['photo']){
            $originalImage= $request->file('photo');
            $request['picture'] = $request->file('photo')->store('public/storage');
            $request['picture'] = Storage::url($request['picture']);
            $request['picture'] = asset($request['picture']);
            // $filename = $request->file('photo')->hashName();
            $filename = $request['picture'];
        }
        else{
            $filename = asset('images/img 1.png');
        }

        $course = new Course;
        $course->user_id = $request->user_id;
        $course->category_id = $request->category_id;
        $course->setAttribute('slug', $request->name);
        $course->name = $request->name;
        $course->description = $request->description;
        $course->tags = $request->tags;
        $course->image = $filename;
        $course->price = $request->price;
        $course->is_private = $request->is_private;
        $course->save();

        if($course){
            Session::flash('message', 'Course Created Successfully!');
            Session::flash('alert-class', 'alert-success');
            return redirect('admin/courses');
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
        $user = User::whereHas('roles',function($r){
            return $r->where('name','coach');
        })->pluck('name','id')->toArray();
        $course = Course::find($id);
        $category = Category::where('parent_id','=',null)->pluck('name', 'id');
        return view('admin.course.edit',compact('course','category','user'));
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
        $course = Course::find($id);

        if($request->hasFile('photo')){

            //storing image
            $originalImage= $request->file('photo');
            $request['picture'] = $request->file('photo')->store('public/storage');
            $request['picture'] = Storage::url($request['picture']);
            $request['picture'] = asset($request['picture']);
            // $filename = $request->file('photo')->hashName();
            $filename = $request['picture'];
        }
        else{
            $filename =$course->image;
        }

        $course->user_id = $request->user_id;
        $course->category_id = $request->category_id;
        $course->name = $request->name;
        $course->description = $request->description;
        $course->tags = $request->tags;
        $course->image = $filename;
        $course->price = $request->price;
        $course->is_private = $request->is_private;
        $course->save();

        if($course){
            Session::flash('message', 'Course updated Successfully!');
            Session::flash('alert-class', 'alert-success');
            return redirect('admin/courses');
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
        $course = Course::find($id)->delete();
        if($course){
            return view('admin.course.index');
        }
    }
    public function show_enroll(){
        $users = User::all();
        $courses = Course::all();
        return view('admin.enrollment.create',compact('users','courses'));
    }
    public function creat_enroll(Request $request){
        $course = Course::whereId($request->course_id)->first();
        $course->users_enroll()->syncWithoutDetaching($request->user_id);
        return redirect()->back();
    }
}
