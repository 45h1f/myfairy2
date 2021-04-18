<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OtherController extends Controller
{
    public function brandAdvocate(){
        return view('Frontend.Other.brand');
    }

    public function jobOppertunities(){
        return view('Frontend.Other.jobOppertunities');
    }

    public function referral(){
        return view('Frontend.Other.referral');
    }

    public function membershipPlan(){
        return view('Frontend.Other.membershipPlan');
    }
}
