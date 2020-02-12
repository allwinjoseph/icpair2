 <?php

// $email and $message are the data that is being
// posted to this page from our html contact form
$email = $_REQUEST['email'] ;
$name = $_REQUEST['name'] ;
$message = $_REQUEST['message'] ;
$que = $_REQUEST['que'] ;


// When we unzipped PHPMailer, it unzipped to
// public_html/PHPMailer_5.2.0
require("PHPMailerAutoload.php");

$mail = new PHPMailer();

// set mailer to use SMTP
$mail->IsSMTP();

// As this email.php script lives on the same server as our email server
// we are setting the HOST to localhost
$mail->Host = "localhost"; // specify main and backup server

$mail->SMTPAuth = true; // turn on SMTP authentication

// When sending email using PHPMailer, you need to send from a valid email address
// In this case, we setup a test email account with the following credentials:
// email: send_from_PHPMailer@jeffm.webhostinghubexample.com
// pass: password
$mail->Username = "enquiry@allevainfotech.com"; // SMTP username
$mail->Password = "Allwin_1985"; // SMTP password

// $email is the user's email address the specified
// on our contact us page. We set this variable at
// the top of this page with:
// $email = $_REQUEST['email'] ;
$mail->From = $email;
$mail->FromName= $name;

// below we want to set the email address we will be sending our email to.
$mail->AddAddress(" allwinjosemani@gmail.com", "Allwin");

// set word wrap to 50 characters
$mail->WordWrap = 50;
// set email format to HTML
$mail->IsHTML(true);

$mail->Subject = "This is a mail from user";

// $message is the user's message they typed in
// on our contact us page. We set this variable at
// the top of this page with:
// $message = $_REQUEST['message'] ;
$mail->Body = $message."<br>"."The security ques is $que"."<br>"."My name is $name";
$mail->AltBody = $message;

$captcha;
if(isset($_POST['g-recaptcha-response'])){
          $captcha=$_POST['g-recaptcha-response'];
        }
        if(!$captcha){
          echo '<h2>Please check the the captcha form.</h2>';
          exit;
        }
        $response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LdJFAcUAAAAANgFRJBnk-Y8nYaLfKuisWR65fke&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']);
        if($response.success==false)
        {
          echo '<h2>You are spammer ! Get the @$%K out</h2>';
        }else
        {
          header('Location: thankyou.html');
      }

if(!$mail->Send())
{
echo "Message could not be sent. <p>";
echo "Mailer Error: " . $mail->ErrorInfo;
exit;
}

header('Location: thankyou.html');
?>