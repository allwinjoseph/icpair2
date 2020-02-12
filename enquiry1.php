<?php

// $email and $message are the data that is being
// posted to this page from our html contact form;

$name=$_REQUEST['name'] ;
$email=$_REQUEST['email'] ;
$sub=$_REQUEST['sub'] ;
$message=$_REQUEST['message'] ;


// When we unzipped PHPMailer, it unzipped to
// public_html/PHPMailer_5.2.0
require("class.phpmailer.php");

$mail = new PHPMailer();

$mail->IsSMTP();
$mail->Host = "www.allevainfotech.com";

$mail->SMTPAuth = true;
//$mail->SMTPSecure = "ssl";
$mail->Port = 587;
$mail->Username = "enquiry@ieeeicci.com"; // SMTP username
$mail->Password = "icci_2019"; // SMTP password

// $email is the user's email address the specified
// on our contact us page. We set this variable at
// the top of this page with:
// $email = $_REQUEST['email'] ;
$mail->From = "enquiry@ieeeicci.com";
$mail->FromName = "IEEEICCI quick enquiry";
$mail->AddAddress("ieeeicci2019@gmail.com");
$mail->IsHTML(true);

$mail->Subject = "This is a Get in touch email from www.ieeeicci.com";
$mail->Body = "Name of the person: $name"."<br>"."E-mail: $email"."<br>"."Subject: $sub"."<br>"."Message: $message";



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
