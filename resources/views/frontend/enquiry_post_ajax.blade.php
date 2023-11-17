<?php
include("autoLoader.php");
$obj = new Controller;

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$msg = "";
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $name = test_input($_POST['name']);
    $phone = test_input($_POST['phone']);
    $email = test_input($_POST['email']);
    $message = test_input($_POST['message']);
    $mail_msg = 'Name = ' . $name . '<br> Phone = ' . $phone . '<br> E-mail =' . $email . '<br> Message =' . $message;
    $to = 'leads@stockbenifits.com';
    $from = 'kyc@stockbenifits.com';
    $fromName = 'Stock Benifits';
    $subject = 'Stock Benifits Customer Details';

    if (mail($to, $subject, $mail_msg)) {
        $res = $obj->array_insert("enquiry", array(NULL, $name, $phone, $email, $message, NULL, NULL, NULL, 'POPUP', 1, $obj->get_datetime(), NULL));
        if ($res == true) {
            $msg = '<span class="text alert text-success">Sent Successfully</span>';
            echo "<script type='text/javascript'>window.location='thanks.html';</script>";
        }
    } else {
        $msg = '<span class="text alert text-danger">Something Went Wrong</span>';
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}
