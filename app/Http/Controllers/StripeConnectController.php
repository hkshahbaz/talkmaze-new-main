<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserProfile;
use App\TutorEarning;
use App\StripeTransfer;


class StripeConnectController extends Controller
{
    public function connectAccount($id = null)
    {
        $tutor = UserProfile::where('user_id', $id)->first();

        \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

        $country_code = "CA";
        if($tutor->country_code != '' || $tutor->country_code != null){
            $country_code = $tutor->country_code;
        }

        try
        {
            $account = \Stripe\Account::create(array(
                'country' => $country_code,
                'type' => 'express',
                'capabilities' => [
                    'card_payments' => [
                      'requested' => true,
                    ],
                    'transfers' => [
                      'requested' => true,
                    ],
                ],
                // 'tos_acceptance' => [
                //     'service_agreement' => 'recipient',
                // ],
            ));

            $tutor->stripe_account = $account->id;
            $tutor->save();
        }
        catch(\Exception $e)
        {
            return back()->with('error', $e->getMessage());
        }

        return redirect()->back()->with('success', 'Stripe Account is ready for Payments');
    }

    public function boarded($enc)
    {
        $user = auth()->user();
        if(md5(base64_encode($user->email.$user->id)) == $enc)
        {
            $tutor = $user->profile;
            $tutor->is_boarded = 1;
            $tutor->save();

            return redirect()->route('stripe.account');
        }

        return redirect()->route('tutor.payout.list')->with('error', 'Invalid Access');
    }

    public function goToStripe()
    {
        $user = auth()->user();
        $tutor = $user->profile;

        if($tutor->stripe_account)
        {
            \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

            if(!$tutor->is_boarded)
            {
                $account_link = \Stripe\AccountLink::create([
                  'account' => $tutor->stripe_account,
                  'refresh_url' => route('tutor.payout.list'),
                  #FOR EXPRESS
                  'return_url' => route('boarded', md5(base64_encode($user->email.$user->id))),
                  'type' => 'account_onboarding',
                ]);

                return redirect($account_link->url);
            }
            else
            {
                #FOR EXPRESS
                $account_link = \Stripe\Account::createLoginLink($tutor->stripe_account);
                return redirect($account_link->url);
            }
        }

        return redirect()->back()->with('error', 'Something Went Wrong!');
    }

    public function transfer($id = null, Request $req)
    {
    	
        $tutor = UserProfile::where('user_id',$id)->first();
        $amount = $req->amount * 100;

        $s = \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

        try
        {
            $transfer = \Stripe\Transfer::create(array(
                "currency" => 'CAD',
                "amount" => $amount,
                "destination" => $tutor->stripe_account,
                "transfer_group" => $tutor->id,
            ));

            if($transfer){

                $data = [
                	'stripe_transfer_id' => $transfer->id,
	    			'tutor_id' => $req->tutor_id,
	    			'amount' => $req->payment,
                    'hours' => $req->hours
    			];
    			$payout = TutorEarning::create($data);
            }
        }
        catch(\Exception $e)
        {
        	dd($e->getMessage());
            return back()->with('error', $e->getMessage());
        }

        return redirect()->back()->with('success', 'Amount Transfered Successfully');
    }
}
