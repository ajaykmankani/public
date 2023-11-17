<?php
dd($request->all());

$email = "ajaykmankani66@gmail.com";
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$msg = "";
if (isset($_POST['btnExprtSubmit'])) {

      // RECAPTCHA SETTINGS
   $captcha = $_POST['g-recaptcha-response'];
   $ip = $_SERVER['REMOTE_ADDR'];
   $key = '6Ldqm8wkAAAAAPF9fpkA44A-1xK_GMiOh9sS0tey';
   $url = 'https://www.google.com/recaptcha/api/siteverify';

    //    RECAPTCHA RESPONSE
    $recaptcha_response = file_get_contents($url.'?secret='.$key.'&response='.$captcha.'&remoteip='.$ip);
    $data = json_decode($recaptcha_response);

if(isset($data->success) &&  $data->success === true) {
    $name = test_input($_POST['name']);
    $phone = test_input($_POST['phone']);
    $email = test_input($_POST['email']);
    $state = test_input($_POST['state']);
    $investment = test_input($_POST['investment']);
    $segment = test_input($_POST['segment']);
    $mail_msg = 'Name = ' . $name . '<br> Phone = ' . $phone . '<br> State =' . $state . '<br> E-mail =' . $email . '<br> Investment =' . $investment . '<br> Segment =' . $segment;



    $to = $email;
    $from = $email;
    $fromName = 'Stock Benifits';
    $subject = 'Stock Benifits Customer Details';




    if (mail($to, $subject, $mail_msg)) {
        if ($res == true) {
            $msg = '<span class="text alert text-success">Sent Successfully</span>';
            echo "<script type='text/javascript'>window.location='thankyou.blade.php';</script>";
        }
    } else {
        $msg = '<span class="text alert text-danger">Some Error Occurred</span>';
    }
}else {
      die('Your account has been logged as a spammer, you cannot continue!');
   }
}

if (isset($_POST['btnSupportSubmit'])) {

      // RECAPTCHA SETTINGS
   $captcha = $_POST['g-recaptcha-response'];
   $ip = $_SERVER['REMOTE_ADDR'];
   $key = '6Ldqm8wkAAAAAPF9fpkA44A-1xK_GMiOh9sS0tey';
   $url = 'https://www.google.com/recaptcha/api/siteverify';

    //    RECAPTCHA RESPONSE
    $recaptcha_response = file_get_contents($url.'?secret='.$key.'&response='.$captcha.'&remoteip='.$ip);
    $data = json_decode($recaptcha_response);

if(isset($data->success) &&  $data->success === true) {
    $name = test_input($_POST['name']);
    $phone = test_input($_POST['phone']);
    $email = test_input($_POST['email']);
    $subject = test_input($_POST['subject']);
    $message = test_input($_POST['message']);
    $mail_msg = 'Name = ' . $name . '<br> Phone = ' . $phone . '<br> Subject =' . $subject . '<br> E-mail =' . $email . '<br> Message =' . $message;

    $to = $email;
    $from = $email;
    $fromName = 'Stock Benifits';
    $subject = 'Stock Benifits Customer Details';



    if (mail($to, $subject, $mail_msg)) {
        if ($res == true) {
            $msg = '<span class="text alert text-success">Sent Successfully</span>';
            echo "<script type='text/javascript'>window.location='thankyou.blade.php';</script>";
        }
    } else {
        $msg = '<span class="text alert text-danger">Some Error Occurred</span>';
    }

}else {
      die('Your account has been logged as a spammer, you cannot continue!');
   }
}

if (isset($_POST['Submit_ask_for_expert'])) {

      // RECAPTCHA SETTINGS
   $captcha = $_POST['g-recaptcha-response'];
   $ip = $_SERVER['REMOTE_ADDR'];
   $key = '6Ldqm8wkAAAAAPF9fpkA44A-1xK_GMiOh9sS0tey';
   $url = 'https://www.google.com/recaptcha/api/siteverify';

    //    RECAPTCHA RESPONSE
    $recaptcha_response = file_get_contents($url.'?secret='.$key.'&response='.$captcha.'&remoteip='.$ip);
    $data = json_decode($recaptcha_response);

if(isset($data->success) &&  $data->success === true) {
    $name = test_input($_POST['name']);
    $phone = test_input($_POST['phone']);
    $email = test_input($_POST['email']);
    $subject = 'Enquiry Form';
    $message = test_input($_POST['message']);
    $mail_msg = 'Name = ' . $name . '<br> Phone = ' . $phone . '<br> Subject =' . $subject . '<br> E-mail =' . $email . '<br> Message =' . $message;

    $to = $email;
    $from = $email;
    $fromName = 'Stock Benifits';
    $subject = 'Stock Benifits Customer Details';



    if (mail($to, $subject, $mail_msg)) {
        if ($res == true) {
            $msg = '<span class="text alert text-success">Sent Successfully</span>';
            echo "<script type='text/javascript'>window.location='thankyou.blade.php';</script>";
        }
    } else {
        $msg = '<span class="text alert text-danger">Some Error Occurred</span>';
    }

}else {
      die('Your account has been logged as a spammer, you cannot continue!');
   }
}
