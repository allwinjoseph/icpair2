<?php

// $email and $message are the data that is being
// posted to this page from our html contact form;

$name=$_REQUEST['name'] ;
$email=$_REQUEST['email'] ;
$number=$_REQUEST['number'] ;
$cname=$_REQUEST['cname'] ;
$message=$_REQUEST['message'] ;


// When we unzipped PHPMailer, it unzipped to
// public_html/PHPMailer_5.2.0
require("class.phpmailer.php");

$mail = new PHPMailer();

$mail->IsSMTP();
$mail->Host = "www.icpair2020.com";

$mail->SMTPAuth = true;
//$mail->SMTPSecure = "ssl";
$mail->Port = 587;
$mail->Username = "enquiry@icpair2020.com"; // SMTP username
$mail->Password = "icpair2020"; // SMTP password

// $email is the user's email address the specified
// on our contact us page. We set this variable at
// the top of this page with:
// $email = $_REQUEST['email'] ;
$mail->From = "enquiry@ieeeicci.com";
$mail->FromName = "icrp2020 quick enquiry";
$mail->AddAddress("icpair@bharathuniv.ac.in");
$mail->IsHTML(true);

$mail->Subject = "This is a Quick Enquiry email from www.icrp2020.com";
$mail->Body = "Name of the person: $name"."<br>"."E-mail: $email"."<br>"."Contact Number: $number"."<br>"."College/University Name: $cname"."<br>"."Message: $message";



if(!$mail->Send())
{
echo "<p>Message could not be sent. </p>";
echo "Mailer Error: " . $mail->ErrorInfo;
exit;
}

  echo ("<script LANGUAGE='JavaScript'>
    window.alert('Thanks! we will contact you shortly.');
    window.location.href='index.php';
    </script>");

?>
