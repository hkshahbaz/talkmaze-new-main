<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Testimonial;
use Yajra\Datatables\Datatables;
use App\Http\Requests\StoreTestimonial;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Image;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->ajax()){

            $testimonial = Testimonial::select(['id', 'name', 'email','feedback','image', 'created_at', 'updated_at']);

            return Datatables::of($testimonial)
                ->addColumn('action', function ($testimonial) {
                    return view('admin.actions.actions_testimonial',compact('testimonial'));
                    })
                ->editColumn('id', 'ID: {{$id}}')
                ->make(true);
        }
       return view('admin.testimonial.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.testimonial.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTestimonial $request)
    {
        //storing image
        
        if ($request['photo']){
            
            $request['picture'] = $request->file('photo')->store('public/storage');
            $request['picture'] = Storage::url($request['picture']);
            $request['picture'] = asset($request['picture']);
            $filename = $request->file('photo')->hashName();
        }

        $testimonial = new Testimonial;
        $testimonial->name = $request->name;
        $testimonial->email = $request->email;
        $testimonial->feedback = $request->feedback;
        $testimonial->image = $request['picture'];
        $testimonial->save();

        if($testimonial){
            Session::flash('message', 'Testimonial Created Successfully!'); 
            Session::flash('alert-class', 'alert-success');
            return redirect('admin/testimonials');
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
        $testimonial = Testimonial::find($id);
        return view('admin.testimonial.edit',['testimonial' => $testimonial]);
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
        $testimonial = Testimonial::find($id);
        if($request->hasFile('photo')){
            // storing image
            
            $request['picture'] = $request->file('photo')->store('public/storage');
            
            $request['picture'] = Storage::url($request['picture']);

            $request['picture'] = asset($request['picture']);

            $filename = $request->file('photo')->hashName();
        }
        else{
            $filename = $testimonial->image;
        }
        
        $testimonial->name = $request->name;
        $testimonial->email = $request->email;
        $testimonial->feedback = $request->feedback;
        $testimonial->image = $filename;
        $testimonial->save();

        if($testimonial){
            Session::flash('message', 'Testimonial Updated Successfully!'); 
            Session::flash('alert-class', 'alert-success');
            return redirect('admin/testimonials');
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
        $testimonial = Testimonial::find($id)->delete();
        if($testimonial){
            return view('admin.testimonial.index');
        }
    }
}
