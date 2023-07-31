<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Partner;
use Yajra\Datatables\Datatables;
use App\Http\Requests\StorePartner;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Image;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->ajax()){

            $partner = Partner::select(['id', 'name', 'image','created_at', 'updated_at']);

            return Datatables::of($partner)
                ->addColumn('action', function ($partner) {
                    return view('admin.actions.actions_partner',compact('partner'));
                    })
                ->editColumn('id', 'ID: {{$id}}')
                ->make(true);
        }
       return view('admin.partner.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.partner.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePartner $request)
    {
        //storing image
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

        $partner = new Partner;
        $partner->name = $request->name;
        $partner->image = $filename;
        $partner->save();

        if($partner){
            Session::flash('message', 'Partner Created Successfully!');
            Session::flash('alert-class', 'alert-success');
            return redirect('admin/partners');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function show(Partner $partner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $partner = Partner::find($id);
        return view('admin.partner.edit',['partner' => $partner]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $partner = Partner::find($id);

        if($request->hasFile('photo')){
            //storing image
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
            $filename = $partner->image;
        }


        $partner->name = $request->name;
        $partner->image = $filename;
        $partner->save();

        if($partner){
            Session::flash('message', 'Partner Updated Successfully!');
            Session::flash('alert-class', 'alert-success');
            return redirect('admin/partners');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $partner = Partner::find($id)->delete();
        if($partner){
            return view('admin.partner.index');
        }
    }


}
