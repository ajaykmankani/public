<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function future_package()
    {
        return view('frontend.packages.future-package');
    }

    public function equity_package()
    {
        return view('frontend.packages.equity-package');
    }
    public function option_package()
    {
        return view('frontend.packages.option-package');
    }

    public function index_future_hni_services()
    {
        return view('frontend.packages.index-future-hni-services');
    }

    public function sb_premium_packages()
    {
        return view('frontend.packages.sb-premium-packages');
    }
    public function hni_packages()
    {
        return view('frontend.packages.hni-packages');
    }
    public function ags_trades_package()
    {
        return view('frontend.packages.ags-trades-package');
    }
}
