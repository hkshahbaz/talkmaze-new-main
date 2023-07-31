<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Applicant;
use Yajra\Datatables\Datatables;
use App\Http\Requests\StoreApplicant;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Image;
use App\Day;
use App\TimeTable;


class ApplicantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->ajax()){

            $applicant = Applicant::join('jobs','jobs.id','=','applicants.job_id')->select(['applicants.id', 'name', 'email','phone','education','gender','debate','experience' ,'education_level' ,'why_to_join','resume' , 'education_level','how_here_about_us','comments' ,'applicants.created_at', 'applicants.updated_at','jobs.title as job_title']);
            /*$applicant = Applicant::select(['id', 'name', 'email','phone','education','gender','debate','experience' ,'education_level' ,'why_to_join','resume' , 'education_level','how_here_about_us','comments' ,'created_at', 'updated_at']);
            */
            return Datatables::of($applicant)
                ->addColumn('action', function ($applicant) {
                    return view('admin.actions.actions_applicant',compact('applicant'));
                })
                  ->addColumn('job_title', function ($applicant) {
                    return $applicant->job_title;
                    })
                ->editColumn('id', 'ID: {{$id}}')
                ->editColumn('resume',function($applicant){
                    return '<a target="_black" href="/storage/storage/'.$applicant->resume.'">View resume</a>';
                })
                ->rawColumns(['resume'])
                ->make(true);
        }
       return view('admin.applicant.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $days = Day::select('name','id')->get();
        return view('admin.applicant.create',compact('days'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreApplicant $request)
    {
        if ($request['resume']){
            $request['picture'] = $request->file('resume')->store('public/storage');
            $request['picture'] = Storage::url($request['picture']);
            $request['picture'] = asset($request['picture']);
            $filename = $request->file('resume')->hashName();
        }

        $applicant = new Applicant;
        $applicant->name = $request->name;
        $applicant->email = $request->email;
        $applicant->phone = $request->phone;
        $applicant->gender = $request->gender;
        $applicant->debate = $request->debate;
        $applicant->education = $request->education;
        $applicant->experience = $request->experience;
        $applicant->education_level = $request->education_level;
        $applicant->why_to_join = $request->why_to_join;
        $applicant->educational_level = $request->educational_level;
        $applicant->how_here_about_us = $request->how_here_about_us;
        $applicant->resume = $filename;
        $applicant->save();


        $days = $request->day;

        foreach ($days as $day => $val) {
                TimeTable::create([
                'applicant_id' => $applicant->id,
                'day_id'  => $day,
                'time_zone'  => $val['time_zone'],
                'from'   => $val['from'],
                'to' =>  $val['to'],
            ]);
        }

        if($applicant){
            Session::flash('message', 'Applicant Created Successfully!');
            Session::flash('alert-class', 'alert-success');
            return redirect('admin/applicants');
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
        $days = Day::select('name','id')->get();
        $applicant = Applicant::where('id',$id)->with('time_table')->first();
        return view('admin.applicant.edit',compact('applicant','days'));
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
        $applicant = Applicant::find($id);
        if($request->hasFile('resume')){
            // storing image
            // $originalImage= $request->file('resume');
            // $thumbnailImage = Image::make($originalImage);

            // $thumbnailPath = public_path().'/thumbnail/';
            // $originalPath = public_path().'/images/';

            // $thumbnailImage->save($originalPath.time().$originalImage->getClientOriginalName());

            // $thumbnailImage->resize(150,150);

            // $thumbnailImage->save($thumbnailPath.time().$originalImage->getClientOriginalName());

            // $filename = time().$originalImage->getClientOriginalName();

            $request['picture'] = $request->file('resume')->store('public/storage');
            $request['picture'] = Storage::url($request['picture']);
            $request['picture'] = asset($request['picture']);
            $filename = $request->file('resume')->hashName();
        }
        else{

            $filename =$applicant->resume;
        }

        $applicant->name = $request->name;
        $applicant->email = $request->email;
        $applicant->phone = $request->phone;
        $applicant->gender = $request->gender;
        $applicant->debate = $request->debate;
        $applicant->education = $request->education;
        $applicant->experience = $request->experience;
        $applicant->education_level = $request->education_level;
        $applicant->why_to_join = $request->why_to_join;
        $applicant->educational_level = $request->educational_level;
        $applicant->how_here_about_us = $request->how_here_about_us;
        $applicant->resume = $filename;
        $applicant->save();

        $days = $request->day;

        foreach ($days as $day => $val) {
                TimeTable::create([
                'applicant_id' => $applicant->id,
                'day_id'  => $day,
                'time_zone'  => $val['time_zone'],
                'from'   => $val['from'],
                'to' =>  $val['to'],
            ]);
        }

        if($applicant){
            Session::flash('message', 'Applicant Updated Successfully!');
            Session::flash('alert-class', 'alert-success');
            return redirect('admin/applicants');
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
        $applicant = Applicant::find($id)->delete();

        $ids = TimeTable::select('id')->where('applicant_id',$id)->get();
        foreach ($ids as $index => $value) {
            Timetable::destroy($value->id);
        }

        if($applicant){
            return view('admin.applicant.index');
        }
    }
}
