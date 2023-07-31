<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\MeetingSession;
use Yajra\Datatables\Datatables;

class RefundRequestController extends Controller
{
    public function requestList(Request $req)
    {
    	if($req->ajax()){
            $list = MeetingSession::select('id', 'student_id', 'refund_status')
                    ->where("refund_status", "==", "0")
                    ->get();
            return Datatables::of($list)
                ->addColumn('action', function ($list) {
                    return view('admin.refund_request.index',get_defined_vars());
                })
                ->editColumn('id', 'ID: {{$id}}')
                ->make(true);
        }
    	
		return view("admin.refund_request.index", get_defined_vars());
    }
}
