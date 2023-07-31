<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use App\User;
use App\UserProfile;
use Mail;
use App\Mail\PasswordSentEmail;

class AdminController extends Controller
{
	public function __construct()
    {
        // $this->middleware('auth');
    }

    public function index(){

    	return view('admin.dashboard');
    }

     public function edit(Request $request,$id)
    {
    	// return dd($id);
        $user = User::with(['profile'])->where('id',$id)->latest()->first();
        return view('admin.edit',compact('user'));
    }

     public function update(Request $request, $id)
    {
        $password = $request->password;
        $hash_password = Hash::make($password);

        $user = User::find($id);

        if($request->hasFile('photo')){
            // storing image
            $originalImage= $request->file('photo');
            $request['picture'] = $request->file('photo')->store('public/storage');
            $request['picture'] = Storage::url($request['picture']);
            $request['picture'] = asset($request['picture']);
            $filename = $request->file('photo')->hashName();
            
            // $originalImage= $request->file('photo');
            // $thumbnailImage = Image::make($originalImage);

            // $thumbnailPath = public_path().'/thumbnail/';
            // $originalPath = public_path().'/images/';

            // $thumbnailImage->save($originalPath.time().$originalImage->getClientOriginalName());

            // $thumbnailImage->resize(150,150);

            // $thumbnailImage->save($thumbnailPath.time().$originalImage->getClientOriginalName());

            // $filename = time().$originalImage->getClientOriginalName();

        }
        else{
            $filename = $user->profile->image;
        } 
        
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $hash_password;
        $user->role = $request->role;
        $user->save();

        Mail::to($user)->send(new PasswordSentEmail($password));

        if($user){

            $profile = UserProfile::where('user_id' ,$id)->first();

                $profile->address   = $request->address;
                $profile->city      = $request->city;
                $profile->country   = $request->country;
                $profile->phone     = $request->phone;
                $profile->image     = $filename;
                $profile->save();

            // $profile = $user->profile()->save($profile);
            if($profile){
                Session::flash('message', 'Account Settings Updated Successfully!'); 
                Session::flash('alert-class', 'alert-success');
                return redirect('admin/home'); 
            }      
        }
    }
}
