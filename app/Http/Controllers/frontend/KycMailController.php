<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Mail;
use App\Mail\KycMail;
use Illuminate\Http\Request;


class KycMailController extends Controller
{
    public function index()
    {


        dd('mail sent successfully');
    }
}
