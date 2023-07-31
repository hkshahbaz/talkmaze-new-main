<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\UserProfile;
use Socialite;
use Auth;
use Exception;



class SocialAuthGoogleController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('google')->stateless()->redirect();
        // return Socialite::driver('google')->redirect();
        
    }


    public function callback()
    {
        try {
            
            $googleUser = Socialite::driver('google')->stateless()->user();
            // $googleUser = Socialite::driver('google')->user();
            // dd($googleUser);
            $existUser = User::where('email',$googleUser->email)->first();
            

            if($existUser) {
                Auth::loginUsingId($existUser->id);
            }
            else {
                $user = new User;
                $user->name = $googleUser->name;
                $user->email = $googleUser->email;
                $user->google_id = $googleUser->id;
                $user->password = md5(rand(1,10000));
                $user->save();
                $user->attachRole('user');
        
                if($user){
                    $filename = asset('images/profileavatar.png');
                    $profile = new UserProfile([
                        'user_id' => $user->id,
                        'image' => $filename,
                    ]);
        
                    $profile = $user->profile()->save($profile);
                    if($profile){
                        Auth::loginUsingId($user->id);
                    }
                }
            }
            return redirect()->to('/dashboard-home');
        } 
        catch (Exception $e) {
            return 'error';
        }
    }
}