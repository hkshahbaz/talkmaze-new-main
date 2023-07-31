<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Yajra\Datatables\Datatables;
use App\TutorEarning;
use App\CoachRequest;
use App\UserProfile;

class CoachController extends Controller
{
    public function index(Request $req)
    {
    	if($req->ajax()){

            $coaches = User::select(['id', 'name', 'email', 'created_at', 'updated_at'])->where("role", "coach");
            return Datatables::of($coaches)
                ->addColumn('action', function ($coaches) {
                    return view('ajax.admin.coach.actions', get_defined_vars());
                })
                ->addColumn('phone', function ($coaches) {
                    return $coaches->profile->phone ?? '';
                })
                ->addColumn('image', function ($coaches) {
                    return view('ajax.admin.coach.image_column', get_defined_vars());
                })
                ->addColumn('hourly_rate', function ($coaches) {
                    if(isset($coaches->profile->hourly_rate))
                    {
                        return "$".$coaches->profile->hourly_rate ?? '0';
                    }else{
                        return "$0";
                    }
                })
                ->editColumn('id', 'ID: {{$id}}')
                ->make(true);
        }
       return view('admin.coach.index');
    }

    public function payTutorForm(Request $req)
    {
    	$tutor = User::find($req->tutor_id);
        $tutorHours = tutorHours($tutor->id);
        if(!is_null($tutor->profile->hourly_rate))
        {
            $tutorPayment =  $tutorHours * $tutor->profile->hourly_rate;
        }else
        {
            $tutorPayment = "";
        }
    	return view("ajax.admin.coach.pay_tutor_form", get_defined_vars());
    }

    public function payCoach(Request $req)
    {
    	$data = [
	    			'tutor_id' => $req->tutor_id,
	    			'amount' => $req->payment,
                    'hours' => $req->hours
    			];
    	TutorEarning::create($data);
    	return back()->with("success", "Amount Paid Successfully!");
    }

    public function hourlyForm(Request $req)
    {
        $tutor = User::find($req->tutor_id);
        return view("ajax.admin.coach.hourly_rate_form", get_defined_vars());
    }

    public function saveHourlyRate(Request $req)
    {
        $data = [
                    'tutor_id' => $req->tutor_id,
                ];
        UserProfile::where('user_id', $req->tutor_id)
            ->update(['hourly_rate' => $req->hourly_rate]);

        return back()->with("success", "Hourly Rate Saved Successfully!");
    }
    
}
