<?php
$active="contact";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Contact Us | ICPAIR-2020</title>
    <meta name="description" content="">

    <!-- CSS FILES -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Alegreya+SC" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Alice" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Sawarabi+Mincho" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Tangerine" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Niconne" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Rye" rel="stylesheet">
<link rel="icon" href="img/favicon.png" type="image/gif">
<link rel="stylesheet" href="styles/style.min.css">
    <link rel="stylesheet" href="css/style.css">
     <link rel="stylesheet" href="css/cus.css">
    <style>
    * {
    box-sizing: border-box;
}

.col-container{display:table;width:100%}.col1{display:table-cell;padding:16px;width:70%;background:#f5f5f5;border-right:2px solid #fff;border-radius:5px}@media only screen and (max-width:600px){.col1{display:block;width:100%}}.col2{display:table-cell;padding:16px;width:30%;background:#f5f5f5;border-left:2px solid #fff;border-radius:5px}@media only screen and (max-width:600px){.col2{display:block;width:100%}}.parallax{background-image:url(img/par.jpg);min-height:500px;background-attachment:fixed;background-position:center;background-repeat:no-repeat;background-size:cover;text-align:center;padding-top:30px;margin-bottom:-7px}.psub{background:#f2f2f2;padding:30px 0;overflow:hidden}.footer{width:100%;min-height:300px;background:url(img/fbg.png);padding-top:20px;padding-bottom:10px}.about-style p{text-indent:50px;font-family:'Sawarabi Mincho',sans-serif;font-size:16px;color:#000}.about-style h4{font-family:Alice,serif;font-weight:700;color:#004d80}hr.style-seven{overflow:visible;height:30px;border-style:solid;border-color:#33adff;border-width:1px 0 0 0;border-radius:20px;margin-bottom:-10px}.sub-line{font-family:Alice,serif;border-radius:5px!important}.slide-heading{font-family:'Sawarabi Mincho',sans-serif!important}.icci-logo img{display:block;margin:0 auto}.icci-logo{padding-top:18px}table ul li:before{content:'✓';font-size:18px;margin-right:10px;color:red}


  </style>
 </head>
 <section id="home">
 <body data-spy="scroll" data-target=".navbar" data-offset="50">

<?php include("inc/header.php")  ?> 

 <div class="wrapper">
     
<div class="col-container">
  
<div class="col5">
   <div class="head-style">
    <h3><span>Our Location</span></h3><hr class="style-two">
    </div>
    <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d62223.9688389269!2d80.10700887348085!3d12.907846433449903!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x3a525f27f279193b%3A0xeff41b9ffdb92590!2sbharath%20university!3m2!1d12.907765099999999!2d80.1420286!5e0!3m2!1sen!2sin!4v1581671096546!5m2!1sen!2sin" width="100%" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
<div class="col6">
  <div class="head-style">
    <h3><span>Contact Info</span></h3><hr class="style-two">
    </div>
    <ul class="contact__info">
                                    <li><i class="fa fa-map-marker"></i> <p><strong>Address</strong>: Bharath Institute of Higher Education & Research.<br> &nbsp;&nbsp;Selaiyur, Chennai-600073</span>  </p></li>
                                    <li><i class="fa fa-phone fa-cus"></i>  <p><strong>Contact Number</strong>: +91 9566203308, +91 7010344024</p></li>

              
              <li><i class="fa fa-envelope fa-cus"></i> <p><strong>Email</strong>: icpair@bharathuniv.ac.in</p></li>
                                    <li><i class="fa fa-globe fa-cus"></i> <p><strong>Web</strong>: <a href="#" target="_blank">www.bharathuniv.ac.in</a></p></li>
                                </ul> 
</div>
</div>
<div class="container">
 <div class="head-style">
    <h3><span>Get in touch</span></h3><hr class="style-two">
  </div>
<div class="row form-cus">
<form class="form-horizontal" action="enquiry1.php" method="POST">
    <div class="form-group">

      <div class="col-sm-12 col-md-6">
        <input type="name" class="form-control" id="name" placeholder="Your Name" name="name" required>
      </div>
       <div class="col-sm-12 col-md-6">
        <input type="email" class="form-control" id="email" placeholder="Your E-mail" name="email" required>
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-12 col-md-12">          
        <input type="text" class="form-control" id="sub" placeholder="Subject" name="sub" required>
      </div>
    </div>
   <div class="form-group">
<div class="col-md-12 col-sm-12">
  <textarea class="form-control" rows="5" id="comment" placeholder="Message" name="message"></textarea>
</div>
</div>
    <div class="form-group">   
    <div class="col-md-12 col-sm-12">     
        <input type="submit" class="btn btn-success" value="Send Message">
      </div>
      </div>
   
  </form>

</div>
    </div>



<!--venue section starts here-->

    <!--<div class="parallax-container">
      <div class="parallax">
        
          <h2>Conference Venue</h2><hr class="conf-hr">
          <div class="parallax__con">
  <h4>Easwari Engineering College<br><span class="parallex__con--small"> Bharathi Salai, Ramapuram,
Chennai 600089.</span></h4>

<h3><span class="parallax__con--date">Conference Date: 23<sup>rd</sup> March 2019</span></h3>
<h3><span class="parallax__con--query">For any queries regarding paper submission, acceptance please call <span class="query--col1"> +91 4443923043</span> or E-mail to <span class="query--col2">icci2k19@gmail.com</span> </span></h3>
</div>
      </div>
    </div>-->

<!--<div class="parallax">
  <h2>Conference Venue</h2>
  <h4>SRM Easwari Engineering College<br> Bharathi Salai, Ramapuram,
Chennai 600089.</h4>

<h3>March 00/00/2019</h3>
<h4>For any queries regarding paper submission, acceptance please call  +91 4443923043 or E-mail to icci2k19@gmail.com </h4>

</div>-->

<!--venue section ends here-->
<!--paper submissino section starts here-->
<div class="psub1">
<div class="container">
  <div class="row">
<div class="col-md-6 psub__text">
  <h3>for paper submission please go to </h3>
</div>
<div class="col-md-3">
  <h3><a href="https://easychair.org/conferences/?conf=internationalconfere" class="btn btn-primary">Paper Submission</a></h3> 
</div>
<div class="col-md-3 psub__logo">
<img src="img/icpair-logo.png" alt="iee-logo" class="img-responsive">
  </div>
  </div>
</div>
</div>
<!--paper submission section ends here-->
<!--footer section starts here-->
<?php include("inc/footer.php")  ?>


</div><!--wrapper ends--->

    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
   

    <script src="js/jquery.fractionslider.js" type="text/javascript" charset="utf-8"></script>

    <script src="js/main.js"></script>
   <script src="js/jquery.easing.1.3.js"></script>
   
     <script>
        $(window).load(function(){
            $('.slider').fractionSlider({
                'fullWidth':            true,
                'controls':             true,
                'responsive':           true,
                'dimensions':           "1920,450",
                'timeout' :            3000,
                'increase':             true,
                'pauseOnHover':         true,
                'slideEndAnimation':    false,
                'autoChange':           true
            });
        });
    </script>

    <script src="js/main.js"></script>
</body>
</html>
