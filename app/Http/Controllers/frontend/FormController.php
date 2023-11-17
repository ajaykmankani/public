<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);

        // RECAPTCHA SETTINGS
        $captcha = $_POST['g-recaptcha-response'];
        $ip = $_SERVER['REMOTE_ADDR'];
        $key = '6Ldqm8wkAAAAAPF9fpkA44A-1xK_GMiOh9sS0tey';
        $url = 'https://www.google.com/recaptcha/api/siteverify';

        //    RECAPTCHA RESPONSE
        $recaptcha_response = file_get_contents($url . '?secret=' . $key . '&response=' . $captcha . '&remoteip=' . $ip);
        $data = json_decode($recaptcha_response);
        return $data;
    }
    public function form_submit(Request $request)
    {

        $email = "leads@stockbenifits.com";
        $msg = "";
        if (isset($request->btnExprtSubmit)) {

            $name = $request->name;
            $phone = $request->phone;
            $email = $request->email;
            $state = $request->state;
            $investment = $request->investment;
            $segment = $request->segment;
            $mail_msg = 'Name = ' . $name . '<br> Phone = ' . $phone . '<br> State =' . $state . '<br> E-mail =' . $email . '<br> Investment =' . $investment . '<br> Segment =' . $segment;

            $to = "leads@stockbenifits.com";
            $subject = 'Stock Benefits Customer Details';
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            $headers .= "From: Stock Benefits <$email>" . "\r\n"; // Replace with a valid email address

            if (mail($to, $subject, $mail_msg, $headers)) {
                return redirect()->route('thankyou');
            } else {
                return redirect()->back()->with('error' ,'something went wrong');
            }

        }

        if (isset($request->btnSupportSubmit)) {

            $name = $request->name;
            $phone = $request->phone;
            $email = $request->email;
            $subject = $request->subject;
            $message = $request->message;
            $mail_msg = 'Name = ' . $name . '<br> Phone = ' . $phone . '<br> Subject =' . $subject . '<br> E-mail =' . $email . '<br> Message =' . $message;

            $to = "leads@stockbenifits.com";
            $subject = 'Stock Benefits Customer Details';
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            $headers .= "From: Stock Benefits <$email>" . "\r\n"; // Replace with a valid email address

            if (mail($to, $subject, $mail_msg, $headers)) {
                return redirect()->route('thankyou');
            } else {
                return redirect()->back()->with('error', 'something went wrong');
            }
        }

        if (isset($request->Submit_ask_for_expert)) {

            $name = $request->name;
            $phone = $request->phone;
            $email = $request->email;
            $subject = 'Enquiry Form';
            $message = $request->message;
            $mail_msg = 'Name = ' . $name . '<br> Phone = ' . $phone . '<br> Subject =' . $subject . '<br> E-mail =' . $email . '<br> Message =' . $message;

            $to = "leads@stockbenifits.com";
            $subject = 'Stock Benefits Customer Details';
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            $headers .= "From: Stock Benefits <$email>" . "\r\n"; // Replace with a valid email address

            if (mail($to, $subject, $mail_msg, $headers)) {
                return redirect()->route('thankyou');
            } else {
                return redirect()->back()->with('error', 'something went wrong');
            }
        }
    }
}
