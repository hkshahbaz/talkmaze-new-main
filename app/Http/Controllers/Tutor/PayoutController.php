<?php

namespace App\Http\Controllers\Tutor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\TutorEarning;

class PayoutController extends Controller
{
    public function list()
    {
    	$list = TutorEarning::where('tutor_id', auth()->user()->id)
    		->get();
    	return view("tutor.payout.list", get_defined_vars());
    }
}
