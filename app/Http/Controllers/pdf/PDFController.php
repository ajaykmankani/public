<?php

namespace App\Http\Controllers\pdf;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\KycMail;
use PDF;
use Mail;

class PDFController extends Controller
{
    public function index()
    {
        $data['email'] = "ajaykmankani66@gmail.com";
        $data['title'] = "From StockBenifits";
        $data['body'] = "This test example";

        $pdf = PDF::loadview('pdf.kycpdf', $data);
    }
}
