<?php

namespace App\Http\Controllers;

use App\ClassCategory;
use App\ClassPlan;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class ClassPlanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, ClassPlan $class_plan)
    {
        if ($request->ajax()){

            $class_plan = $class_plan->newQuery()->where('class_category_id','!=',null)->with(['category','host:id,name','parentdata'])->get();
            // dd($class_plan[0]->host);
            return Datatables::of($class_plan)
                ->addColumn('action', function($class_plan) {
                    return view('admin.actions.actions_class_plan',compact('class_plan'));
                    })
                ->addColumn('tutor', function(Classplan $class_plan) {
                    return $class_plan->host_id;
                    })
                ->editColumn('title', function(Classplan $class_plan) {
                    return $class_plan ? $class_plan->title: 'no title';
                    })
                ->editColumn('description', function(Classplan $class_plan) {
                    return substr($class_plan->description,0,30);
                    })
                ->editColumn('parent_id', function(Classplan $class_plan) {
                    return $class_plan->parentdata ? $class_plan->parentdata->title : 'no parent';
                    })
                ->addColumn('class_category', function($class_plan) {
                    return $class_plan->category ? $class_plan->category->title:'not found';
                    })
                ->addColumn('enrollment', function($class_plan) {
                    if($class_plan->parent_id == null){
                        $cp = $class_plan;
                        return view('admin.actions.enrollment',compact('cp'));
                    }else{
                        $cp = ClassPlan::whereId($class_plan->parent_id)->first();
                        return view('admin.actions.enrollment',compact('cp'));
                    }
                })
                ->addColumn('visibility', function($class_plan) {
                        if($class_plan->is_visible == 1){
                            return 'true';
                        }else{
                            return 'false';
                        }
                    })
                ->editColumn('id', 'ID: {{$id}}')
                ->rawColumns(['image'])
                ->make(true);
        }
       return view('admin.class_plan.index');
    }

    public function create()
    {
        $class_cat = ClassCategory::pluck('title','id');
        $tutor = User::whereHas('roles',function($r){
            return $r->where('name','coach');
        })->pluck('name','id');
        // dd($tutor);
        return view('admin.class_plan.create',compact('class_cat','tutor'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $filename ='';
        if ($request['photo']){

            $request['picture'] = $request->file('photo')->store('public/storage');
            $request['picture'] = Storage::url($request['picture']);
            $request['picture'] = asset($request['picture']);
            // $filename = $request->file('photo')->hashName();
            $filename = $request['picture'];
        }

        if ($request->time && $request->end_time) {
            $time1 = strtotime($request->time);
            $time2 = strtotime($request->end_time);
            $num_hours = round(abs($time2 - $time1) / 3600,2);
        }

        $class_plan = new ClassPlan;
        $class_plan->class_category_id = $request->class_category_id;
        $class_plan->host_id = $request->host_id;
        $class_plan->is_visible = $request->is_visible;
        $class_plan->title = $request->title;
        $class_plan->image = $filename;
        $class_plan->description = $request->description;
        $class_plan->price = $request->price;
        $class_plan->time_zone = $request->time_zone;
        $class_plan->date_time = date('Y-m-d H:i:s',strtotime($request->date.' '.$request->time));
        $class_plan->end_time = date('Y-m-d H:i:s',strtotime($request->date.' '.$request->end_time));
        $class_plan->num_hours = $num_hours;
        $class_plan->is_group = 1;
        $class_plan->save();

        if($request->repeat=="1"){
            for ($x = 1; $x <= $request->repeat_sessions; $x++) {
                if($request->repeat_type == "1"){
                    $date = date('Y-m-d',strtotime($request->date.'+'.$x.'week'));
                }elseif($request->repeat_type == "2"){
                    $date = date('Y-m-d',strtotime($request->date.'+'.$x.'month'));
                }else{
                    $date = date('Y-m-d',strtotime($request->date.'+'.$x.'day'));
                }
                // dd(date('Y-m-d',strtotime('+'.$x.'week')),$request->date );
                $class_plano = new ClassPlan;
                $class_plano->class_category_id = $request->class_category_id;
                $class_plano->host_id = $request->host_id;
                $class_plano->is_visible = 0;
                $class_plano->title = $request->title.' class '.$x ;
                $class_plano->image = $filename;
                $class_plano->description = $request->description;
                $class_plano->price = null;
                $class_plano->date_time = $date.' '.$request->time;
                $class_plano->time_zone = $request->time_zone;
                $class_plano->is_group = 1;
                $class_plano->parent_id = $class_plan->id;
                $class_plano->save();
            }
        }

        if($class_plan){
            Session::flash('message', 'Class Plan Created Successfully!');
            Session::flash('alert-class', 'alert-success');
            return redirect('admin/class_plans');
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
        $class_plan = ClassPlan::find($id);

        $date_time = explode(' ', $class_plan->date_time);
        $date_time_end = explode(' ', $class_plan->end_time);

        $class_plan->date = $date_time[0];
        $class_plan->time = $date_time[1];
        $class_plan->end_time = $date_time_end[1];

        $class_cat = ClassCategory::pluck('title','id');
        // $tutor = User::where('role','=','tutor')->pluck('name','id');
        $tutor = User::whereHas('roles',function($r){
            return $r->where('name','coach');
        })->pluck('name','id');
        return view('admin.class_plan.edit',compact('class_cat','tutor','class_plan'));
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
        $class_plan = ClassPlan::find($id);

        if ($request['photo']){

            $request['picture'] = $request->file('photo')->store('public/storage');
            $request['picture'] = Storage::url($request['picture']);
            $request['picture'] = asset($request['picture']);
            // $filename = $request->file('photo')->hashName();
            $filename = $request['picture'];
        }
        else{
            $filename = $class_plan->image;
        }

        if ($request->time && $request->end_time) {
            $time1 = strtotime($request->time);
            $time2 = strtotime($request->end_time);
            $num_hours = round(abs($time2 - $time1) / 3600,2);
        }

        $class_plan->class_category_id = $request->class_category_id;
        $class_plan->host_id = $request->host_id;
        $class_plan->is_visible = $request->is_visible;
        $class_plan->title = $request->title;
        $class_plan->image = $filename;
        $class_plan->description = $request->description;
        $class_plan->time_zone = $request->time_zone;
        $class_plan->price = $request->price;
        $class_plan->date_time = $request->date.' '.$request->time;
        $class_plan->end_time = $request->date.' '.$request->end_time;
        $class_plan->num_hours = $num_hours;
        $class_plan->is_group = 1;

        $class_plan->save();
        
        $children = ClassPlan::where('parent_id',$id)->update([
            'host_id'=> $request->host_id,
            'title' => $request->title,
            'description'=>$request->description,
            'time_zone'=>$request->time_zone,
            'image'=>$filename
        ]);

        if($class_plan ) {
            Session::flash('message', 'Class Plan Updated Successfully!');
            Session::flash('alert-class', 'alert-success');
            return redirect('admin/class_plans');
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
        $class_plan = ClassPlan::find($id)->forceDelete();
        if($class_plan){
            return view('admin.class_plan.index');
        }
    }

    public function schedual_meeting(Request $request) {
        $num_hours = 0;
       if ($request->end_time && $request->date_time) {
           $hours = ( strtotime( $request->end_time ) - strtotime( $request->date_time ) ) / 60 / 60;

           if ($hours > 0) {
               $num_hours = $hours;
           }
       }

        $plan = new ClassPlan;
        $request['host_id'] = auth()->id();
        $request['num_hours'] = $num_hours;
        $request['is_group'] = $request->is_group ==1 ? 0:1;

        $plan = $plan->create($request->all());
        $coach = User::find(auth()->id());
        $student_names = '';
        foreach ($request->participents as $user){

            $plan->enrollments()->attach($user,['is_paid'=>1]);

            $student = User::find($user);
            $content = ['coach_name' => $coach->name, 'student_name' => $student->name, 'time' => $request->date_time .' GMT'. $request->time_zone];
            $student_names .=  $student->name.', ';
            if ($student->email) {
                \Mail::to($student->email)
                    ->send(new \App\Mail\PrivateSessionMail($content));
            }
        }

        $content = ['coach_name' => $coach->name, 'student_name' => $student_names, 'time' => $request->date_time .' GMT'. $request->time_zone];

        \Mail::to('aamerghalia@gmail.com')
            ->send(new \App\Mail\PrivateSessionAdminMail($content));
        return redirect()->back();
    }

}
