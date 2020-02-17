<?php
$active="registration";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>REGISTRATION | ICPAIR-2020</title>
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

.col-container {
    display: table;
    width: 100%;
}
.col1 {
    display: table-cell;
    padding: 16px;
    width:70%;
      background: #F5F5F5;
      border-right:2px solid #fff;
      border-radius: 5px;
}

@media only screen and (max-width: 600px) {
    .col1 { 
        display: block;
        width: 100%;
      
    }
}
.col2{
    display: table-cell;
    padding: 16px;
    width:30%;
    background: #F5F5F5;
    border-left:2px solid #fff;
    border-radius: 5px;
}

@media only screen and (max-width: 600px) {
    .col2{ 
        display: block;
        width: 100%;
    }
}

.parallax {
    /* The image used */
    background-image: url("img/par.jpg");

    /* Set a specific height */
    min-height: 500px; 

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    text-align: center;
    padding-top: 30px;
    margin-bottom: -7px;
  }

.psub
{
      background: #f2f2f2;
    padding: 30px 0;
    overflow: hidden;
}
.footer
{
  width:100%;
  min-height: 300px;
  background: url("img/fbg.png");
  padding-top: 20px;
  padding-bottom: 10px;

}
.about-style p
{
      text-indent: 50px;
font-family: 'Sawarabi Mincho', sans-serif;
      font-size: 16px;
      color: #000000;

    }
.about-style h4
{
    font-family: 'Alice', serif;
    font-weight: bold;
    color: #004d80;
}

hr.style-seven {
    overflow: visible; /* For IE */
    height: 30px;
    border-style: solid;
    border-color: #33adff;
    border-width: 1px 0 0 0;
    border-radius: 20px;
    margin-bottom: -10px;
}

.sub-line
{

 font-family: 'Alice', serif;
 border-radius: 5px!important;


}
.slide-heading
{
 
    font-family: 'Sawarabi Mincho', sans-serif!important;
}
.icci-logo img
{
  display: block;
  margin:0px auto;
}
.icci-logo
{
  padding-top: 18px;
}
 table thead th
{
  text-align: center;
    font-family: 'Alice', serif;
font-size: 18px;
}
.table__reg--h1
{
  font-weight: bold;
    font-family: 'Alice', serif;
font-size: 18px;
}
tbody
{
  text-align: center;
  font-family: 'Alice', serif;
font-size: 18px;
}
.alert-ba{text-align:center;

}
.alert-ba h5{font-size:18px;
    line-height:1.5em;
color:#4d4d4d;
}
  </style>
 </head>
 <section id="home">
 <body data-spy="scroll" data-target=".navbar" data-offset="50">
<?php include("inc/header.php");  ?>  
 
 <div class="wrapper">
  
<!--call for paper section starts-->
<section id="paper__sub">
<div class="about">
<div class="col-container">
  <div class="col1">
   <!--<div class="row">
<img src="img/ieee-logo.jpg" alt="ieee-logo" class="img-responsive">
</div>-->
     <div class="head-style">
    <h3><span>Registration</span></h3><hr class="style-two">
    </div>
    <div class="about-style paper__sub--con">
    
    <h4>Author/Co-Author Registration Fee Includes:</h4><hr class="style-seven">
    <ul>
<li>Participation in the conference </li>
<li>Lunch</li> 
<li>Proceeding books with abstracts only</li> 
<li>Coffee breaks</li> 
<li>Welcome reception</li> 
<li>Certificates</li>
</ul> <hr>
<h4>Registration Fee</h4><hr class="style-seven">
<div class="table-responsive">
  <table class="table table-bordered table__reg">
    <thead>
      <tr class="danger">
       <th>Category</th>
        <th>Indian(Rupees)</th>
        <th>Foreign(USD)</th>
      
      </tr>
    </thead>
    <tbody>
      <tr class="success">
        <td align="center">Student (UG/PG) Author</td>
        <td align="center">3000</td>
        <td align="center">150</td>
     
      </tr>
      <tr class="info" >
      <td align="center">Research Scholars and Faculty Author</td>
        <td>6000</td>
        <td>200</td>
        <!--<td>$36</td>-->
      
      </tr>


       <tr class="warning">
      <td>Industry and Others</td>
        <td>7000</td>
        <td>300</td>
      </tr>
      
 <tr class="success">
      <td>Listener</td>
        <td>1000</td>
        <td>100</td>
     
      </tr>


      
    </tbody>
  </table>
  <h4>Account Details</h4><hr class="style-seven">
<div class="alert alert-info alert-ba">
<h5><b>Center for Robotics & Artificial Intelligence</b><br> Indian Bank<br>
Selaiyur(Tambaran)<br>
Current Account No.:6777898347<br>
IFSC Code: IDIB000S246<br>
Branch Code: 02505<br>
MICR Code:600019250



</h5>

</div>


</div>
</div>

 


  </div>
  <!--call for paper section ends-->
  <div class="col2">
  <?php include("inc/sidebar.php");  ?>  
  </div>

</div>

</div>
</section>
<!--about section ends-->
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
  <h3><a href="#" class="btn btn-primary">Paper Submission</a></h3> 
</div>
<div class="col-md-3 psub__logo">
<img src="img/icpair-logo.png" alt="iee-logo" class="img-responsive">
  </div>
  </div>
</div>
</div>
<!--paper submission section ends here-->
<!--footer section starts here-->
<?php include("inc/footer.php");  ?>  
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
