<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CourseContent;
use App\Course;
use App\ContentType;
use App\Lesson;
use Illuminate\Support\Facades\Storage;
use Yajra\Datatables\Datatables;
use App\Http\Requests\StoreCourseContent;
use Illuminate\Support\Facades\Session;
use Image;

class CourseContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->ajax()){

            $course_content = CourseContent::with(['lesson:id,name','content_type:id,title'])->get();

            return Datatables::of($course_content)
                ->addColumn('action', function ($course_content) {
                    return view('admin.actions.actions_course_content',compact('course_content'));
                    })
                ->addColumn('course_name', function ($course_content) {
                    return $course_content->lesson ? $course_content->lesson->name: 'not found';
                    })
                ->addColumn('content_type', function ($course_content) {
                    return $course_content->content_type->title;
                    })
                ->addColumn('content', function ($course_content) {
                    return substr($course_content->content,0,30).'...';
                })
                ->editColumn('id', 'ID: {{$id}}')
                ->make(true);
        }
       return view('admin.course_content.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courses = Course::all();
        $content_type = ContentType::pluck('title','id');
        return view('admin.course_content.create',compact('courses','content_type'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCourseContent $request)
    {
        
        $course_content = new CourseContent;
        $course_content->course_id = $request->course_id;
        $course_content->title = $request->title;
        $course_content->content_type_id = $request->content_type_id;
        $content = '';

        if(request()->hasFile('video')){

            $request['video'] = $request->file('video')->store('public/videos');
            $request['video'] = Storage::url($request['video']);
            $request['video'] = asset($request['video']);
            $content = $request->file('video')->hashName();

        }
        else if($request->audio){
            $request['audio'] = $request->file('audio')->store('public/audios');
            $request['audio'] = Storage::url($request['audio']);
            $request['audio'] = asset($request['audio']);
            $content = $request->file('audio')->hashName();
        }
        else if($request->pdf){
            $request['pdf-file'] = $request->file('pdf')->store('public/pdf');
            $request['pdf-file'] = Storage::url($request['pdf-file']);
            $request['pdf-file'] = asset($request['pdf-file']);
            $content = $request->file('pdf')->hashName();
        }
        else{
            $content = $request->content_text;
        }

        $course_content->content = $content;
        $course_content->lesson_id = $request->lesson_id;
        $course_content->save();

        if($course_content){
            Session::flash('message', 'Course Content Created Successfully!');
            Session::flash('alert-class', 'alert-success');
            return redirect('admin/course_contents');
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
        $course_content = CourseContent::where('id',$id)->with(['course', 'lesson'])->first();
        $courses = Course::all()->except($course_content->course->id);
        $lessons = Lesson::where('course_id', $course_content->course->id)->where('id','<>',$course_content->lesson->id)->get();
        $content_type = ContentType::pluck('title','id');
        return view('admin.course_content.edit',compact('courses','content_type','course_content','lessons'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreCourseContent $request, $id)
    {
        $course_content = CourseContent::find($id);
        $course_content->course_id = $request->course_id;
        $course_content->title = $request->title;
        $course_content->content_type_id = $request->content_type_id;

        if(request()->hasFile('video')){

            $request['video'] = $request->file('video')->store('public/videos');
            $request['video'] = Storage::url($request['video']);
            $request['video'] = asset($request['video']);
            $content = $request->file('video')->hashName();

        }
        else if($request->audio){
            $request['audio'] = $request->file('audio')->store('public/audios');
            $request['audio'] = Storage::url($request['audio']);
            $request['audio'] = asset($request['audio']);
            $content = $request->file('audio')->hashName();
        }
        // else if($request->document){
        //     $request['document'] = $request->file('document')->store('public/document');
        //     $request['document'] = Storage::url($request['document']);
        //     $request['document'] = asset($request['document']);
        //     $content = $request->file('document')->hashName();
        // }
        else{
            $content = $request->content_text;
        }

        $course_content->content = $content;
        $course_content->lesson_id = $request->lesson_id;
        $course_content->save();

        if($course_content){
            Session::flash('message', 'Course Content Updated Successfully!');
            Session::flash('alert-class', 'alert-success');
            return redirect('admin/course_contents');
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
        $course_content = CourseContent::find($id)->delete();
        if($course_content){
            return view('admin.course_content.index');
        }
    }

    public function fetch(Request $request){
        // return response([$request->all()]);

        $lessons = Lesson::where('course_id', '=' ,$request->value)->get();
        $output = '<option value="" selected>Select Lesson</option>';

        foreach ($lessons as $lesson) {
            $output .= '<option value="'.$lesson->id.'">'.$lesson->name.'</option>';
        }

        return $output;
    }
}
