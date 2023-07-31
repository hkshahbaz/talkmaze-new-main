<?php

namespace App\Http\Controllers;

use App\DiscountCodes;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class DiscountCodesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->ajax()){

            $course = DiscountCodes::all();

            return Datatables::of($course)
                ->addColumn('action', function ($course) {
                    return view('admin.actions.actions_coupons',compact('course'))->render();
                    })
                ->addColumn('discount_type', function ($course) {
                        if($course->discount_type==1){
                            return "%";
                        }else{
                            return "$";
                        }
                    })
                ->addColumn('code_type', function ($course) {
                        if($course->code_type==1){
                            return "Group Sessions";
                        }elseif($course->code_type==2){
                            return "Courses";
                        }
                        elseif($course->code_type==3){
                            return "Private Sessions";
                        }
                    })    
                ->editColumn('id', 'ID: {{$id}}')
                ->make(true);
        }
        $type = ['1'=>'% age based','2'=>'$ based'];
        
        return view('admin.coupons.index',compact('type'));
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
    public function store(Request $request)
    {
        // dd($request->all());
        $code = new DiscountCodes;
        $code->create($request->all());
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DiscountCodes  $discountCodes
     * @return \Illuminate\Http\Response
     */
    public function show(DiscountCodes $discountCodes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DiscountCodes  $discountCodes
     * @return \Illuminate\Http\Response
     */
    public function edit(DiscountCodes $discountCodes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DiscountCodes  $discountCodes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DiscountCodes $discountCodes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DiscountCodes  $discountCodes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        if($request->ajax()){
            $code = DiscountCodes::whereId($id)->first();
            if($code->delete()){
                return response()->json(['message'=>'successfully deleted'],200);
            }else{
                return response()->json(['message'=>'something went wrong'],400);
            }
        }
    }
}
