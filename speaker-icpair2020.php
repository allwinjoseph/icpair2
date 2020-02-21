<?php
$active="speaker";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>SPEAKERS | ICPAIR-2020</title>
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

.col-container{display:table;width:100%}.col1{display:table-cell;padding:16px;width:70%;background:#f5f5f5;border-right:2px solid #fff;border-radius:5px}@media only screen and (max-width:600px){.col1{display:block;width:100%}}.col2{display:table-cell;padding:16px;width:30%;background:#f5f5f5;border-left:2px solid #fff;border-radius:5px}@media only screen and (max-width:600px){.col2{display:block;width:100%}}.parallax{background-image:url(img/par.jpg);min-height:500px;background-attachment:fixed;background-position:center;background-repeat:no-repeat;background-size:cover;text-align:center;padding-top:30px;margin-bottom:-7px}.psub{background:#f2f2f2;padding:30px 0;overflow:hidden}.footer{width:100%;min-height:300px;background:url(img/fbg.png);padding-top:20px;padding-bottom:10px}.about-style p{text-indent:50px;font-family:'Sawarabi Mincho',sans-serif;font-size:16px;color:#000}.about-style h4{font-family:Alice,serif;font-weight:700;color:#004d80}hr.style-seven{overflow:visible;height:30px;border-style:solid;border-color:#33adff;border-width:1px 0 0 0;border-radius:20px;margin-bottom:-10px}.sub-line{font-family:Alice,serif;border-radius:5px!important}.slide-heading{font-family:'Sawarabi Mincho',sans-serif!important}.icci-logo img{display:block;margin:0 auto}.icci-logo{padding-top:18px}td{line-height:1.5em;font-family:Alice,serif;font-size:18px}

  </style>
 </head>
 <section id="home">
 <body data-spy="scroll" data-target=".navbar" data-offset="50">
<!--header starts-->
<?php include ("inc/header.php");?>
<!--header ends-->
 
 <div class="wrapper">
 <!--speaker section starts here-->
 <div class="head-style">
    <h3><span>Speakers</span></h3><hr class="style-seven">
    </div>
<div class="flex-container speaker" style="padding-top:20px; padding-bottom:20px;">
<div class="f5">

<img src="img/speaker.png" alt="speaker"><hr class="style-two">

   <h2>Dr. Irene Maxine Pepperberg</h2>
  <h3>Scientist & Professor<br> Harvard University<br>Cambridge, MA, USA.</h3>
  <!--<h4><i class="fa fa-phone-square" aria-hidden="true"></i> -<br><i class="fa fa-envelope" aria-hidden="true">-</i> </h4>-->
</div>








</div>

  <!--speaker section ends here-->
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
<?php include("inc/footer.php");?>
<!--footer section starts here-->

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
