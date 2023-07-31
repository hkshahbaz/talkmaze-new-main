<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CompetitionUsers;
use App\User;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreCompetition;

class CompetitionUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
         if($request->ajax()){

            $competitionusers = CompetitionUsers::with('competition:id,title')->get();

            return Datatables::of($competitionusers)
                ->addColumn('action', function ($competitionusers) {
                    return view('admin.actions.actions_competition',compact('competitionusers'))->render();
                    })
               ->addColumn('comp_title', function ($competitionusers) {
                    return $competitionusers->competition->title;
                    })
                ->addColumn('name', function ($competitionusers) {
                    return $competitionusers->user_profile->user->name ?? '';
                    })
                 ->addColumn('email', function ($competitionusers) {
                    return $competitionusers->user_profile->user->email ?? '';
                    })
                  ->addColumn('city', function ($competitionusers) {
                    return $competitionusers->user_profile->city;
                    })
                   ->addColumn('country', function ($competitionusers) {
                    return $competitionusers->user_profile->country;
                    })
                ->editColumn('id', 'ID: {{$id}}')
                ->make(true);
        }
        
       /* $competition = Competition::with('user:id,name')->get();
        $user = User::whereHas('roles',function($r){
            return $r->where('name','admin');
        })->pluck('name','id')->toArray();*/    
        return view('admin.competition_users.index');
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
        //
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
        //
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
        //
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
    }
}