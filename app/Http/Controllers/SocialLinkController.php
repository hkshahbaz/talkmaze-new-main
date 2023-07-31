<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SocialLink;
use Yajra\Datatables\Datatables;
use App\Http\Requests\StoreSocialLink;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Image;

class SocialLinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->ajax()){

            $social_link = SocialLink::select(['id', 'name', 'image','link', 'created_at', 'updated_at']);

            return Datatables::of($social_link)
                ->addColumn('action', function ($social_link) {
                    return view('admin.actions.actions_social_link',compact('social_link'));
                    })
                ->editColumn('id', 'ID: {{$id}}')
                ->make(true);
        }
       return view('admin.social_link.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.social_link.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSocialLink $request)
    {
        // storing image
        // $originalImage= $request->file('photo');
        // $thumbnailImage = Image::make($originalImage);

        // $thumbnailPath = public_path().'/thumbnail/';
        // $originalPath = public_path().'/images/';

        // $thumbnailImage->save($originalPath.time().$originalImage->getClientOriginalName());

        // $thumbnailImage->resize(150,150);

        // $thumbnailImage->save($thumbnailPath.time().$originalImage->getClientOriginalName());

        // $filename = time().$originalImage->getClientOriginalName();
        
         if ($request['photo']){
            
            $request['picture'] = $request->file('photo')->store('public/storage');
            $request['picture'] = Storage::url($request['picture']);
            $request['picture'] = asset($request['picture']);
            $filename = $request->file('photo')->hashName();
        }

        $social_link = new SocialLink;
        $social_link->name = $request->name;
        $social_link->link = $request->link;
        $social_link->image = $filename;
        $social_link->save();

        if($social_link){
            Session::flash('message', 'Social Link Created Successfully!'); 
            Session::flash('alert-class', 'alert-success');
            return redirect('admin/social_links');
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
        $social_link = SocialLink::find($id);
        return view('admin.social_link.edit',compact('social_link'));
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
        $social_link = SocialLink::find($id);

        if($request->hasFile('photo')){
            // storing image
            // $originalImage= $request->file('photo');
            // $thumbnailImage = Image::make($originalImage);

            // $thumbnailPath = public_path().'/thumbnail/';
            // $originalPath = public_path().'/images/';

            // $thumbnailImage->save($originalPath.time().$originalImage->getClientOriginalName());

            // $thumbnailImage->resize(150,150);

            // $thumbnailImage->save($thumbnailPath.time().$originalImage->getClientOriginalName());

            // $filename = time().$originalImage->getClientOriginalName();
            
            $request['picture'] = $request->file('photo')->store('public/storage');
            $request['picture'] = Storage::url($request['picture']);
            $request['picture'] = asset($request['picture']);
            $filename = $request->file('photo')->hashName();
        }
        else{
            $filename =$social_link->image;
        }
        
        $social_link->name = $request->name;
        $social_link->link = $request->link;
        $social_link->image = $filename;
        $social_link->save();

        if($social_link){
            Session::flash('message', 'Social Link Updated Successfully!'); 
            Session::flash('alert-class', 'alert-success');
            return redirect('admin/social_links');
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
        $social_link = SocialLink::find($id)->delete();
        if($social_link){
            return view('admin.social_link.index');
        }
    }
}
