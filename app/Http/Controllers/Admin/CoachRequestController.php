<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\CoachRequest;
use Yajra\Datatables\Datatables;

class CoachRequestController extends Controller
{
    public function index(Request $req)
    {
        if($req->ajax()){

            $coach_requests = CoachRequest::select(['id', 'interval', 'date', 'slot' ,'tutor_id','student_id', 'status']);
            return Datatables::of($coach_requests)
                ->editColumn('interval', function ($coach_requests) {
                    return view('admin.actions.coach_request.interval', get_defined_vars());
                })
                ->editColumn('status', function ($coach_requests) {
                    return view('admin.actions.coach_request.status', get_defined_vars());
                })
                ->editColumn('student_id', function ($coach_requests) {
                    return view('admin.actions.coach_request.student', get_defined_vars());
                })
                ->editColumn('tutor_id', function ($coach_requests) {
                    return view('admin.actions.coach_request.tutor', get_defined_vars());
                })
                ->editColumn('id', 'ID: {{$id}}')
                ->make(true);
        }
       return view('admin.coach_request.index');
    }
}
