<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subscribe;
use Yajra\Datatables\Datatables;
use App\Http\Requests\StoreSubscribe;
use Illuminate\Support\Facades\Session;

class SubscribeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->ajax()){

            $subscribe = Subscribe::select(['id', 'email', 'created_at', 'updated_at']);
            return Datatables::of($subscribe)
                ->addColumn('action', function ($subscribe) {
                    return view('admin.actions.actions_subscribe',compact('subscribe'));
                    })
                ->editColumn('id', 'ID: {{$id}}')
                ->make(true);
        }
       return view('admin.subscribe.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.subscribe.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSubscribe $request)
    {
        $subscribe = new Subscribe;
        $subscribe->email = $request->email;
        $subscribe->save();

        if($subscribe){
            Session::flash('message', 'subscriber Created Successfully!'); 
            Session::flash('alert-class', 'alert-success');
            return redirect('admin/subscribes');
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
        $subscribe = Subscribe::find($id);
        return view('admin.subscribe.create',compact('subscribe'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreSubscribe $request, $id)
    {
        $subscribe = Subscribe::find($id);
        $subscribe->email = $request->email;
        $subscribe->save();

        if($subscribe){
            Session::flash('message', 'subscriber Updated Successfully!'); 
            Session::flash('alert-class', 'alert-success');
            return redirect('admin/subscribes');
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
        $subscribe = Subscribe::find($id)->delete();
        if($subscribe){
            return view('admin.subscribe.index');
        }
    }
}
