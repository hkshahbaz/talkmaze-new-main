<?php

namespace App\Http\Controllers;

use App\Competition;
use App\User;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreCompetition;

class CompetitionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
         if($request->ajax()){

            $competition = Competition::with('user:id,name')->get();

            return Datatables::of($competition)
                ->addColumn('action', function ($competition) {
                    return view('admin.actions.actions_competition',compact('competition'))->render();
                    })
                ->addColumn('user_name', function ($competition) {
                    return $competition->user->name ?? '';
                    })
                ->editColumn('id', 'ID: {{$id}}')
                ->make(true);
        }
        
       /* $competition = Competition::with('user:id,name')->get();
        $user = User::whereHas('roles',function($r){
            return $r->where('name','admin');
        })->pluck('name','id')->toArray();*/    
        return view('admin.competition.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       // $category = Category::where('parent_id','=',null)->pluck('name', 'id');
        return view('admin.competition.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCompetition $request)
    {
        // print_r($request->all());
        $filename ='';
        if ($request->hasFile('comp_image')){

          
            /*$imageName = time().'.'.$request->file('comp_image')->getClientOriginalExtension();
            $request->file('comp_image')->move(public_path('storage'), $imageName);
            $filename = $imageName;*/
           $request['picture'] = $request->file('comp_image')->store('public/poster');
             //$request['picture'] = $request->file('comp_image');
            $request['picture'] = Storage::url($request['picture']);
            $request['picture'] = asset($request['picture']);
          
            $filename = $request['picture'];
        }
         else{
            $filename = asset('images/profileavatar.png');
        }

        $user = auth()->user();

        $competition = new Competition;
        $competition->user_id =$user->id;
        $competition->comp_image =$filename;
        $competition->setAttribute('slug', $request->title);
        $competition->title = $request->title;
        $competition->open_date = $request->open_date;
        $competition->close_date = $request->close_date;
        $competition->description =  $request->description;
        $competition->requirement =  $request->requirement;
        $competition->status =  $request->status;
        $competition->save();

        if($competition){
            Session::flash('message', 'Competition Created Successfully!');
            Session::flash('alert-class', 'alert-success');
            return redirect('admin/competitions');
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
        //s
        /* $user = User::whereHas('roles',function($r){
            return $r->where('name','admin');
        })->pluck('name','id')->toArray();*/
        $competition = Competition::find($id);
        //$category = Category::where('parent_id','=',null)->pluck('name', 'id');
        return view('admin.competition.edit',compact('competition'));

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
         $competition = Competition::find($id);
          $filename ='';
        /*if ($request->hasFile('comp_image')){

           // $request['picture'] = $request->file('comp_image')->store('public/storage');
            // $originalImage= $request->file('comp_image');
            $imageName = time().'.'.$request->file('comp_image')->getClientOriginalExtension();
            $request->file('comp_image')->move(public_path('storage'), $imageName);
            $filename = $imageName;
        }
         else{
            $filename = asset('images/profileavatar.png');
        }

        $competition->comp_image =$filename;*/
        $competition->setAttribute('slug', $request->title);
        $competition->title = $request->title;
        $competition->open_date = $request->open_date;
        $competition->close_date = $request->close_date;
        $competition->description =  $request->description;
        $competition->requirement =  $request->requirement;
        $competition->status =  $request->status;
        $competition->save();
        if($competition){
            Session::flash('message', 'Competition updated Successfully!');
            Session::flash('alert-class', 'alert-success');
            return redirect('admin/competitions');
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
        //
        $comp = Competition::find($id)->delete();
        if($comp){
             //Session::flash('message', 'Competition deleted Successfully!');
            //Session::flash('alert-class', 'alert-danger');
            return view('admin.competition.index');
        }
    }
}