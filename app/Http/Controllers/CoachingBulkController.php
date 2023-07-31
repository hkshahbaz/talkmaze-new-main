<?php

namespace App\Http\Controllers;

use App\ClassPlan;
use App\User;
use Illuminate\Http\Request;
use App\CoachingBulk;
use Illuminate\Support\Facades\DB;
use Yajra\Datatables\Datatables;
use App\Http\Requests\StoreCoachingBulk;
use Illuminate\Support\Facades\Session;

class CoachingBulkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->ajax()){
            $coaching_bulk = CoachingBulk::select(['id', 'first_name', 'last_name','email','phone', 'organization' ,'role' ,'created_at', 'updated_at']);

            return Datatables::of($coaching_bulk)
                ->addColumn('action', function ($coaching_bulk) {
                    return view('admin.actions.actions_coaching_bulk',compact('coaching_bulk'));
                    })
                ->addColumn('name', function ($coaching_bulk) {
                    return $coaching_bulk->first_name . ' ' . $coaching_bulk->last_name ;
                    })
                ->editColumn('id', 'ID: {{$id}}')
                ->make(true);
        }
       return view('admin.coaching_bulk.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.coaching_bulk.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCoachingBulk $request)
    {
        $coaching_bulk = new CoachingBulk;
        $coaching_bulk->first_name = $request->first_name;
        $coaching_bulk->last_name = $request->last_name;
        $coaching_bulk->email = $request->email;
        $coaching_bulk->phone = $request->phone;
        $coaching_bulk->role = $request->role;
        $coaching_bulk->organization = $request->organization;
        $coaching_bulk->country = $request->country;
        $coaching_bulk->city = $request->city;
        $coaching_bulk->message = $request->message;
        $coaching_bulk->save();

        if($coaching_bulk){
            Session::flash('message', 'Coaching Bulk Created Successfully!'); 
            Session::flash('alert-class', 'alert-success');
            return redirect('admin/coaching_bulks');
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
        $coaching_bulk = CoachingBulk::find($id);
        return view('admin.coaching_bulk.edit',compact('coaching_bulk'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreCoachingBulk $request, $id)
    {
        $coaching_bulk = CoachingBulk::find($id);
        $coaching_bulk->first_name = $request->first_name;
        $coaching_bulk->last_name = $request->last_name;
        $coaching_bulk->email = $request->email;
        $coaching_bulk->phone = $request->phone;
        $coaching_bulk->role = $request->role;
        $coaching_bulk->organization = $request->organization;
        $coaching_bulk->country = $request->country;
        $coaching_bulk->city = $request->city;
        $coaching_bulk->message = $request->message;
        $coaching_bulk->save();

        if($coaching_bulk) {
            Session::flash('message', 'Coaching Bulk Updated Successfully!'); 
            Session::flash('alert-class', 'alert-success');
            return redirect('admin/coaching_bulks');
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
        $coaching_bulk = CoachingBulk::find($id)->delete();
        if($coaching_bulk){
            return view('admin.coaching_bulk.index');
        }
    }

    public function showCoachingHours() {
        $coaches = User::select('id','name')->where('role', 'coach')->get();
        $form_data = ['coach'=>'', 'month' => ''];

        return view('admin.coaching_bulk.hours',compact('coaches', 'form_data'));
    }

    public function getCoachingHours(Request $request)
    {
        $sessions = ClassPlan::where('host_id', $request->coach_id)->where('status', 1)->where('date_time', 'like', $request->month.'%')->get(['title','date_time','is_group','num_hours']);
        $total_hours = ClassPlan::where('host_id', $request->coach_id)->where('status', 1)->where('date_time', 'like', $request->month.'%')->sum('num_hours');

        $coaches = User::select('id','name')->where('role', 'coach')->get();
        $form_data = ['coach'=>$request->coach_id, 'month' => $request->month];
        return view('admin.coaching_bulk.hours',compact('coaches','sessions', 'form_data','total_hours'));

    }


}
