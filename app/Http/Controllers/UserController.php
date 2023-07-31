<?php

namespace App\Http\Controllers;


use App\User;
use Yajra\Datatables\Datatables;
use App\Http\Requests\StoreUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use App\Mail\PasswordSentEmail;
use Validator;
use App\UserProfile;
use Image;
use Mail;



class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->ajax()){
            $user = User::select(['id', 'name', 'email', 'password', 'created_at', 'updated_at','subscriber']);

            return Datatables::of($user)
                ->addColumn('action', function ($user) {
                    return view('admin.actions.actions_user',compact('user'));
                    })
                ->editColumn('id', 'ID: {{$id}}')
                ->editColumn('subscriber', function ($user) {
                    return $user->subscriber ? 'Yes':'No';
                })
                ->removeColumn('password')
                ->make(true);
        }
       return view('admin.user.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUser $request)
    {
        if ($request['photo']){
            $originalImage= $request->file('photo');
            $request['picture'] = $request->file('photo')->store('public/storage');
            $request['picture'] = Storage::url($request['picture']);
            $request['picture'] = asset($request['picture']);
            // $filename = $request->file('photo')->hashName();
            $filename = $request['picture'];
        }
        else{
            $filename = asset('images/profileavatar.png');
        }


        $password = Str::random(8);
        $hash_password = Hash::make($password);

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $password;
        $user->role = $request->role;
        $user->bio = $request->bio;
        $user->type = $request->type;
        $user->rating = $request->rating>=5 ? 5:$request->rating ;
        $user->save();
        $user->attachRole($request->role);

        Mail::to($user)->send(new PasswordSentEmail($password));

        if($user){
            $profile = new UserProfile([
                'user_id' => $user->id,
                'address'  => $request->address,
                'city'  => $request->city,
                'country'   => $request->country,
                'phone' =>  $request->phone,
                'image' => $filename,
            ]);

            $profile = $user->profile()->save($profile);
            if($profile){
                Session::flash('message', 'User Created Successfully!');
                Session::flash('alert-class', 'alert-success');
                return redirect('/admin/users');
            }
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
        return view('admin.user.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id)
    {
        $user = User::with(['profile'])->where('id',$id)->latest()->first();
        $role = $user->roles()->first();
        // dd($user->roles()->get());
        // dd($user->profile->image);
        return view('admin.user.edit',compact('user','role'));
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
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'bail|required|unique:users,email,'.$id,
            'address' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()
                        ->back()
                        ->withErrors($validator)
                        ->withInput();
        }


        $user = User::find($id);

        if($request->hasFile('photo')){
            // storing image
            $originalImage= $request->file('photo');
            $request['picture'] = $request->file('photo')->store('public/storage');
            $request['picture'] = Storage::url($request['picture']);
            $request['picture'] = asset($request['picture']);
            // $filename = $request->file('photo')->hashName();
            $filename = $request['picture'];

        }
        else{
            $filename = $user->profile->image;
        }
        // dd($request->rating);
        $user->name = $request->name;
        $user->type = $request->type;
        $user->email = $request->email;
        $user->bio = $request->bio;
        $user->role = $request->role;
        $user->rating = $request->rating >= 5 ? 5 : $request->rating ;
        if($request->role){
            $user->detachRoles();
            $user->attachRole($request->role);
        }
        $user->save();

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
                Session::flash('message', 'User Updated Successfully!');
                Session::flash('alert-class', 'alert-success');
                return redirect('admin/users');
            }
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
        $user = User::find($id)->forceDelete();
        if($user){
            return view('admin.user.index');
        }
    }

    public function update_profile(Request $request){
        // dd($request->all());
        $X = "";
        if($request->picture){
            $request['image'] = $request->file('picture')->store('public/brands');
            $request['image'] = Storage::url($request['image']);
            $request['image'] = asset($request['image']);
            auth()->user()->profile()->update(['image'=>$request['image']]);
            return $request['image'];
        }
        else if($request->old && $request->new && $request->confirm){
            if (Hash::check($request->old, auth()->user()->password)) {
                if($request->new == $request->confirm){
                    auth()->user()->update(['password'=>Hash::make($request->new)]);
                    $request->session()->flash('success', 'Password changed');
                    return redirect()->back();
                }else{
                    $request->session()->flash('error', 'Password not confirmed');
                    return redirect()->back();
                }
            }else{
                $request->session()->flash('error', 'Old password that you entered is wrong!');
                return redirect()->back();
            }
        }else{
            // dd($request->timezone);
            $data = $request->first_name.' '.$request->last_name;
            auth()->user()->update(['name'=>$data,'nick'=>$request->nick,'timezone'=>$request->timezone,'bio'=>$request->bio]);
            $request->session()->flash('success', 'User Updated');
            return redirect()->back();
        }
    }

    public function validateApiUser(Request $request) {

      if (\Auth::attempt(array('email' => $request->email, 'password' => $request->password))){
        $user = User::where('email', $request->email)->first();
        return response()->json( array('success' => true, 'data' => $user) );
        return "success";
      }
      else {
        return response()->json( array('error' => true, 'data' => 'Couldn\'t Validate User!') );
      }

    }
}
