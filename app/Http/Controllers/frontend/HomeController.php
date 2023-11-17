<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function payment_option()
    {
        return view('frontend.payment.index');
    }

    public function past_performance()
    {
        return view('frontend.past-performance.index');
    }

    public function invester_charter()
    {
        return view('frontend.invester-charter.index');
    }
    public function complaint_data()
    {
        return view('frontend.complaint-data.index');
    }
    public function grievance()
    {
        return view('frontend.grievance.index');
    }
    public function terms_and_conditions()
    {
        return view('frontend.policy.terms-and-conditions');
    }

    public function user_agreement()
    {
        return view('frontend.risk-assestment.user-agreement');
    }

    public function contact_us()
    {
        return view('frontend.contact-us.index');
    }

    public function about_us()
    {
        return view('frontend.about-us.index');
    }

    public function updates()
    {
        return view('frontend.updates.index');
    }
}
