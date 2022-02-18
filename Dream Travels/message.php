<?php
  session_start();
  error_reporting(0);
  include("connection.php");
  $profile = $_SESSION['uid'];
  if($profile == true)
  {

  }
  else {
    header('location:login.php');
  }
  ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>message sent | Dream Travels</title>

    <!-- Global site tag (gtag.js) - Google Analytics -->
  	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-120809174-1"></script>
  	<script>
  	  window.dataLayer = window.dataLayer || [];
  	  function gtag(){dataLayer.push(arguments);}
  	  gtag('js', new Date());

  	  gtag('config', 'UA-120809174-1');
  	</script>

  	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

  	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">


  	<!--== ALL CSS FILES ==-->

  	<link rel="stylesheet" href="https://godebido.com/css/style.css">

  	<link rel="stylesheet" href="https://godebido.com/css/bootstrap.css">

  	<link rel="stylesheet" href="https://godebido.com/css/mob.css">
  	<link rel="stylesheet" href="https://godebido.com/css/animate.css">


    <style media="screen">
      .msg{
        text-align: center;
        height:400px;
        color:brown;
        background-image:url("images\DT1.png");
      }
    </style>
  </head>
  <body>



    <div id="wrapper">
        <div id="preloader">
      <div id="status">&nbsp;</div>
    </div>

    <script>var strings = "";</script>

    <!--      ====== MOBILE MENU ========== -->
         <section class="mob-top">
             <div class="mob-menu">
             <div class="mob-head-left">    <a href="..\index.php"><img src="images\logo (4).png" alt="Logo"> </a> </div>
             <div class="mob-head-right"> <a href="#"><i class="fa fa-bars mob-menu-icon" aria-hidden="true"></i></a> <a href="#" class="btn-close-menu"><i class="fa fa-times" aria-hidden="true"></i></a>
             <div class="mob-menu-slide">
             <ul class='top-menu'>
               <li class="active"><a href="..\index"><i class="fa fa-home fa-2x"></i></a> </li>
               <li><a href="aboutUs.php">About us </a></li>
            </ul>
            <h4>Vehicles</h4>
            <ul class='top-menu'>
              <li><a href="booking.php">Bus</a> </li>
              <li><a href="booking.php">e-Rickshaw</a> </li>
              <li><a href="booking.php">Taxi</a> </li>
              <li><a href="booking.php">Cab</a> </li>
              <li><a href="booking.php">Auto</a> </li>
            </ul>
            <ul class='top-menu'>
                <li><a href="corporate.php">Corporate</a> </li>
                <li><a href="contactUs.php">Contact Us</a> </li>
                <li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" href="#">My account <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="login.php"></i> Login </a> </li>
                    <li><a href="signUp.php"> Sign up </a> </li>
                  </ul>
                </li>
          </ul>
        </div>
      </div>
    </div>
    </section>
    <!--====== END MOBILE MENU ==========-->



    <!--====== TOP HEADER ==========-->
    <section>
          <div class="rows head affix-top affixok" data-spy="affix" data-offset-top="120">
          <div class="container">
          <div>
          <div class="col-md-6 col-sm-12 col-xs-12 head_right head_right_all">
            <ul>
              <li><a href="tel:+918409989897">Call us: &nbsp+918409989897</a>
              </li>
            </ul>
          </div>

          <div class="col-md-6 col-sm-12 col-xs-12 head_right2 head_right_all foot-social2 ">
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a> </li>
                        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a> </li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a> </li>
                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a> </li>
                        <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a> </li>
                      </ul>
          </div>
          </div>
          </div>
          </div>
    </section>


    <!--====== NAVIGATION MENU ==========-->
    <section>
      <div class="rows main_menu " data-spy="affix" data-offset-top="120" >
        <div class="container res-menu">

          <nav class="navbar navbar-inverse" >
            <div>
              <!-- Brand and toggle get grouped for better mobile display(MOBILE MENU) -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button> <img src="Dream Travels\images\logo (4).png" alt="" class="mob_logo" /> </div>
              <!-- NAVIGATION MENU -->
              <div class="col-md-4 col-sm-12 col-xs-12 head_left">
              <a href="..\index.php"><img src="images\logo (4).png" alt="">
              </a>
              </div>
              <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                  <li class="active"><a href="..\index.php"><i class="fa fa-home "></i></a> </li>

                  <li><a href="aboutUs.php">About us</a> </li>

                  <li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" href="#">Services <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="booking.php"><i class="fa fa-bus"></i> Bus </a> </li>
                      <li><a href="booking.php"><i class="fa fa-cab"></i> Cab </a> </li>

                      <li><a href="booking.php"> <i class="fa fa-bus"></i> e-Rickshaw </a> </li>
                      <li><a href="booking.php"><i class="fa fa-auto-rickshaw"></i> Auto</a> </li>
                      <li><a href="booking.php"><i class="fa fa-taxi"></i> Taxi</a> </li>
                      <li><a href="booking.php"><i class="fa fa-car"></i>Scorpio</a> </li>

                    </ul>
                  </li>

                  <li><a href="corporate.php">Corporate</a> </li>

                  <li><a href="contactUs.php">Contact Us</a> </li>
                  <li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" href="#">My account <span class="caret"></span></a>
    								<ul class="dropdown-menu">
    									<li><a href="login.php">Login </a> </li>
    									<li><a href="signUp.php"> Sign up </a> </li>
    								</ul>
    							</li>
                </ul>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </section>



    <div class="msg" >
      <br><br><br><br>
      <h1>your  message has been sent successfully.... </h1>
      	<div class="nf1 text-success"><i class="fa fa-check-circle"></i></div>
      <br>
      <h2>Thank you !!!</h2>
    </div>




    <div class="rows">
    <div class="footer">
      <div class="container">
         <div class="foot-sec2">
            <div>
               <div class="row">
                  <div class="col-sm-3 col-md-3 foot-spec foot-com">
                     <h4><span><i class="fa fa-building"></i> Company menu</h4>
                     <ul class="two-columns">
                        <li> <i class="fa fa-caret-right"></i> <a href="..\index.php">Home</a>  </li>
                        <li>  <i class="fa fa-caret-right"></i> <a href="aboutUs.php">About Us</a> </li>
                        <li>  <i class="fa fa-caret-right"></i> <a href="contactUs.php">Contact Us</a> </li>
                        <li>  <i class="fa fa-caret-right"></i> <a href="career.php">Careers</a></li>
                        <li>  <i class="fa fa-caret-right"></i> <a href="corporate.php">Corporate</a></li>
                     </ul>
                  </div>
                  <div class="col-sm-3 foot-spec foot-com">
                     <h4><span><i class="fa fa-cogs"></i> Services menu</h4>
                     <ul class="two-columns">
                        <li>  <i class="fa fa-caret-right"></i> <a href="booking.php"> Bus Ticket</a> </li>
                        <li>  <i class="fa fa-caret-right"></i> <a href="booking.php"> Auto Booking</a> </li>
                        <li>  <i class="fa fa-caret-right"></i> <a href="booking.php">  Cab booking</a> </li>
                        <li>  <i class="fa fa-caret-right"></i> <a href="booking.php">e-Rickshaw Booking</a> </li>
                        <li>  <i class="fa fa-caret-right"></i> <a href="booking.php"> Taxi</a> </li>
                        <li>  <i class="fa fa-caret-right"></i> <a href="booking.php"> Scorpio rental</a> </li>
                     </ul>
                  </div>
                  <div class="col-sm-3 foot-spec foot-com">
                     <h4><span><i class="fa fa-link"></i> More Links</span></h4>
                     <ul class="two-columns">
                        <li> <i class="fa fa-caret-right"></i> <a href="..\index.php">DreamTravels.com Blog</a> </li>

                        <br/>
                     </ul>
                  </div>
                  <div class="col-sm-3 foot-social foot-spec foot-com">
                     <h4><span><i class="fa fa-address-card"></i>  Address &amp; Contact Info </span></h4>
                     <p>PURNEA COLLEGE PURNEA <br>
                       BCA DEPARTMENT<br>
    PURNEA COLLEGE
    PURNEA
    BIHAR, INDIA - 854301</p>
                     <p> <span class="strong"><i class="fa fa-volume-control-phone"></i> </span> <span class="highlighted">+918409989897 </span> </p>
                     <ul>
                     <p> <span class="strong"><i class="fa fa-envelope"></i> </span> <span class="highlighted"></span> </p>
                     <ul>
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a> </li>
                        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a> </li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a> </li>
                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a> </li>
                        <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a> </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
    </div>
    </div>

    <section>
       <div class="rows copy">
          <div class="container">
             <p   style="color:#ffffff" href="" target="_blank">  Copyright © 2019  DreamTravels.com | All Rights Reserved| Terms & condtition | Privacy policy </p>
          </div>
       </div>
    </section>
    <div class="share_box share_box2">
       <div class="top-social">
          <a href="" data-toggle="modal" data-target="#BookingForm"><i class="fa fa-phone"></i> Call us</a>
       </div>
    </div>
    </div>
      <!-- Page Plugins -->

    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://godebido.com/scripts/bootstrap.js"></script>

    <link rel="stylesheet" href="https://godebido.com/css/date.css">
    <script type="text/javascript" src="https://godebido.com/scripts/typed.js"></script>
    <script src="https://godebido.com/scripts/tadaaapickr.pack.min.js"></script>
    <script src="https://godebido.com/scripts/wow.min.js"></script>
    <script src="https://godebido.com/scripts/custom.js"></script>
      <script type="text/javascript" src="//platform-api.sharethis.com/js/sharethis.js#property=59b26a5a5377b30012995346&product=inline-share-buttons"></script>


  </body>
</html>
