<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use App\Http\Requests\StoreDebate;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use App\Debate;
use App\User;
use Image;


class DebateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->ajax()){

            $debate = Debate::with(['user:id,name'])->get();
            return Datatables::of($debate)
                ->addColumn('action', function ($debate) {
                    return view('admin.actions.actions_debate',compact('debate'));
                    })
                ->addColumn('user_name', function ($debate) {
                    return $debate->user->name;
                    })
                ->editColumn('id', 'ID: {{$id}}')
                ->make(true);
        }
       return view('admin.debate.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = User::pluck('name','id');
        return view('admin.debate.create',compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDebate $request)
    {
        //storing image
        
        if ($request['photo']){
            
            $request['picture'] = $request->file('photo')->store('public/storage');
            $request['picture'] = Storage::url($request['picture']);
            $request['picture'] = asset($request['picture']);
            // $filename = $request->file('photo')->hashName();
            $filename = $request['picture'];
        }

        $debate = new Debate;
        $debate->user_id = $request->user_id;
        $debate->setAttribute('slug', $request->topic);
        $debate->topic = $request->topic;
        $debate->description = $request->description;
        $debate->image = $filename;
        $debate->save();

        if($debate){
            Session::flash('message', 'Debate Created Successfully!'); 
            Session::flash('alert-class', 'alert-success');
            return redirect('admin/debates');
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
        $debate = Debate::find($id);
        $user = User::pluck('name','id');
        return view('admin.debate.edit',compact('debate','user'));
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
        $debate = Debate::find($id);
         if($request->hasFile('photo')){
            //storing image
            
            $request['picture'] = $request->file('photo')->store('public/storage');
            $request['picture'] = Storage::url($request['picture']);
            $request['picture'] = asset($request['picture']);
            // $filename = $request->file('photo')->hashName();
            $filename = $request['picture'];
         }
         else{
            $filename = $debate->image;
         }

        $debate->user_id = $request->user_id;
        $debate->topic = $request->topic;
        $debate->description = $request->description;
        $debate->image = $filename;
        $debate->save();

        if($debate){
            Session::flash('message', 'Debate Updated Successfully!'); 
            Session::flash('alert-class', 'alert-success');
            return redirect('admin/debates');
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
        $debate = Debate::find($id)->delete();
        if($debate){
            return view('admin.debate.index');
        }
    }
}
