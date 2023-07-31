<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ContentType;
use Yajra\Datatables\Datatables;
use App\Http\Requests\StoreFaq;
use Illuminate\Support\Facades\Session;

class ContentTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->ajax()){

            $content_type = ContentType::select(['id', 'title','created_at', 'updated_at']);
            return Datatables::of($content_type)
                ->addColumn('action', function ($content_type) {
                    return view('admin.actions.actions_content_type',compact('content_type'));
                    })
                ->editColumn('id', 'ID: {{$id}}')
                ->make(true);
        }
       return view('admin.content_type.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.content_type.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $content_type = new ContentType;
        $content_type->title = $request->title;
        $content_type->save();

        if($content_type){
            Session::flash('message', 'Content Type Created Successfully!'); 
            Session::flash('alert-class', 'alert-success');
            return redirect('admin/content_types');
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
        $content_type = ContentType::find($id);
        return view('admin.content_type.edit',['content_type' => $content_type]);
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
        $content_type = ContentType::find($id);
        $content_type->title = $request->title;
        $content_type->save();

        if($content_type){
            Session::flash('message', 'Content Type Updated Successfully!'); 
            Session::flash('alert-class', 'alert-success');
            return redirect('admin/content_types');
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
       $content_type = ContentType::find($id)->delete();
        if($content_type){
            return view('admin.content_type.index');
        }
    }
}
