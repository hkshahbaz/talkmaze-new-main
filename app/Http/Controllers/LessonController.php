<?php

namespace App\Http\Controllers;

use App\Course;
use App\Lesson;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use App\Http\Requests\StoreLesson;
use Illuminate\Support\Facades\Session;


class LessonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->ajax()){

            $lesson = Lesson::whereHas('course',function($r){
                return $r->where('deleted_at',null);
            })->with('course')->get();

            return Datatables::of($lesson)
                ->addColumn('action', function ($lesson) {
                    return view('admin.actions.actions_lesson',COMPACT('lesson'))->render();
                    })
                ->addColumn('course', function ($lesson) {
                    return $lesson->course ? $lesson->course->name : 'No Course' ;
                    })
                ->editColumn('id', 'ID: {{$id}}')
                ->make(true);
        }
       return view('admin.lesson.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courses = Course::pluck('name', 'id');
        return view('admin.lesson.create',compact('courses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLesson $request)
    {

        $lesson = new Lesson;
        $lesson->course_id = $request->course_id;
        $lesson->name = $request->name;
        $lesson->save();

        if($lesson){
            Session::flash('message', 'Lesson Created Successfully!');
            Session::flash('alert-class', 'alert-success');
            return redirect('admin/lessons');
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
        $lesson = Lesson::find($id);
        $courses = Course::pluck('name', 'id');
        return view('admin.lesson.edit',compact('lesson','courses'));
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
        $lesson = Lesson::find($id);

        $lesson->course_id = $request->course_id;
        $lesson->name = $request->name;
        $lesson->save();

        if($lesson){
            Session::flash('message', 'Lesson Updated Successfully!');
            Session::flash('alert-class', 'alert-success');
            return redirect('admin/lessons');
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
        $lesson = Lesson::find($id)->delete();
        if($lesson){
            return view('admin.lesson.index');
        }
    }
}
