
<?php

include('pdf.php');

// Recipient
$to = 'kyc@stockbenifits.com,' . $email . '';

// Sender
$from = 'kyc@stockbenifits.com';
$fromName = 'Stock Benifits';

// Email subject
$subject = 'Stock Benifits Customer Details';

// Attachment file
$file = "pdf/user_agreement_" . $name . ".pdf";

// Email body content
$htmlContent = '
    <p> Dear ' . $name . ', <br>
Greetings from Stock Benefits Financial Services. Thank you for giving your valuable time to complete "KYC & Risk Profiling". You can also, find the attached "Client Service Agreement" for your reference.<br>

"KYC" stands for "Know Your Customer." It is a method by which we get information about a customer\'s identity and address. This procedure ensures that services are not being abused. When opening accounts, the KYC procedure must be completed and updated on a regular basis.<br>

Stock Benefits Financial Services is a team of professionals. It\'s a SEBI Registered Advisory platform provided for tradable research inputs in the Equity, Commodity & Currency segment of the stock market on all different time frames (Intraday/ Delivery/ Positional & Over-Night trades).<br>

Fulfilling complete guidelines & regulations of SEBI IA Regulations, Stock Benefits Financial Services team keeps a complete touch base and attempts to provide customized research services to clients as per their risk appetite and goals. High Professionalism, Transparency, Consistency & Optimum client satisfaction is the goal & vision of the team.<br>

Welcome to Stock Benefits Financial Services & Wish you a pleasant journey with us.<br><br>

Thanks & Regards,<br>
Stock Benefits Financial Services.<br>
';

// Header for sender info
$headers = "From: $fromName" . " <" . $from . ">";

// Boundary
$semi_rand = md5(time());
$mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";

// Headers for attachment
$headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\"";

// Multipart boundary
$message = "--{$mime_boundary}\n" . "Content-Type: text/html; charset=\"UTF-8\"\n" .
    "Content-Transfer-Encoding: 7bit\n\n" . $htmlContent . "\n\n";

// Preparing attachment
if (!empty($file) > 0) {
    if (is_file($file)) {
        $message .= "--{$mime_boundary}\n";
        $fp =    @fopen($file, "rb");
        $data =  @fread($fp, filesize($file));

        @fclose($fp);
        $data = chunk_split(base64_encode($data));
        $message .= "Content-Type: application/octet-stream; name=\"" . basename($file) . "\"\n" .
            "Content-Description: " . basename($file) . "\n" .
            "Content-Disposition: attachment;\n" . " filename=\"" . basename($file) . "\"; size=" . filesize($file) . ";\n" .
            "Content-Transfer-Encoding: base64\n\n" . $data . "\n\n";
        $message .= "--{$mime_boundary}--";
        $returnpath = "-f" . $from;

        // Send email
        $mail = @mail($to, $subject, $message, $headers, $returnpath);
    } else {
        echo "<script>alert('File Not Found');</script>";
    }
} else {
    echo "<script>alert('Mail Not Sent');</script>";
}



// Email sending status
//echo $mail?"<h1>Email Sent Successfully!</h1>":"<h1>Email sending failed.</h1>";
?>
