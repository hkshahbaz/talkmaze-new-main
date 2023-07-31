<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;
use Yajra\Datatables\Datatables;
use App\Http\Requests\StoreJob;
use Illuminate\Support\Facades\Session;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       if($request->ajax()){

            $job = Job::select(['id', 'title', 'location','requistion_number', 'category','slug' , 'description' , 'role','requirement','apply_by' ,'created_at', 'updated_at']);

            return Datatables::of($job)
                ->addColumn('action', function ($job) {
                    return view('admin.actions.actions_job',compact('job'));
                    })
                ->editColumn('description', function ($job) {
                    return substr($job->description,0, 30);
                })
                ->editColumn('requirement', function ($job) {
                    return '<a target="_blank" href="' .url('/job-detail/'.$job->slug).'">View Job</a>';
                })
                ->editColumn('id', 'ID: {{$id}}')
                ->rawColumns(['requirement'])
                ->make(true);
        }
       return view('admin.job.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.job.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreJob $request)
    {
        $job = new Job;
        $job->title = $request->title;
        $job->setAttribute('slug', $request->title);
        $job->location = $request->location;
        $job->requistion_number = $request->requistion_number;
        $job->category = $request->category;
        $job->role = $request->role;
        $job->apply_by = $request->apply_by;
        $job->requirement = $request->requirement;
        $job->small_desc = $request->small_desc;
        $job->description = $request->description;
        $job->save();

        if($job){
            Session::flash('message', 'Job Created Successfully!');
            Session::flash('alert-class', 'alert-success');
            return redirect('admin/jobs');
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
        $job = Job::find($id);
        return view('admin.job.edit',['job' => $job]);
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
        $job = Job::find($id);
        $job->title = $request->title;
        $job->location = $request->location;
        $job->requistion_number = $request->requistion_number;
        $job->category = $request->category;
        $job->role = $request->role;
        $job->apply_by = $request->apply_by;
        $job->requirement = $request->requirement;
        $job->description = $request->description;
        $job->small_desc = $request->small_desc;
        $job->save();

        if($job){
            Session::flash('message', 'Job Updated Successfully!');
            Session::flash('alert-class', 'alert-success');
            return redirect('admin/jobs');
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
        $job = Job::find($id)->delete();
        if($job){
            return view('admin.job.index');
        }
    }
}
