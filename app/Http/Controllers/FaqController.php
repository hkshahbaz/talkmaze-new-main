<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Faq;
use Yajra\Datatables\Datatables;
use App\Http\Requests\StoreFaq;
use Illuminate\Support\Facades\Session;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->ajax()){

            $faq = Faq::select(['id', 'question', 'answer','created_at', 'updated_at']);
            return Datatables::of($faq)
                ->addColumn('action', function ($faq) {
                    return view('admin.actions.actions_faq',compact('faq'));
                    })
                ->editColumn('id', 'ID: {{$id}}')
                ->make(true);
        }
       return view('admin.faq.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.faq.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFaq $request)
    {
        $faq = new Faq;
        $faq->question = $request->question;
        $faq->answer = $request->answer;
        $faq->save();

        if($faq){
            Session::flash('message', 'Faq Created Successfully!'); 
            Session::flash('alert-class', 'alert-success');
            return redirect('admin/faqs');
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
        $faq = Faq::find($id);
        return view('admin.faq.edit',compact('faq'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreFaq $request, $id)
    {
        $faq = Faq::find($id);
        $faq->question = $request->question;
        $faq->answer = $request->answer;
        $faq->save();

        if($faq){
            Session::flash('message', 'Faq Updated Successfully!'); 
            Session::flash('alert-class', 'alert-success');
            return redirect('admin/faqs');
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
        $faq = Faq::find($id)->delete();
        if($faq){
            return view('admin.user.index');
        }
    }
}
