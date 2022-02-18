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
<html lang="" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Booking | Go anytime anywhere</title>
    <link rel="shortcut icon" href="images\logo (4).png">
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-120809174-1"></script>
	   <script>
	         window.dataLayer = window.dataLayer || [];
	          function gtag(){dataLayer.push(arguments);}
	           gtag('js', new Date());
             gtag('config', 'UA-120809174-1');
	   </script>



      <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-    wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	   <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
     <link rel="stylesheet" href="https://godebido.com/css/style.css">
     <link rel="stylesheet" href="https://godebido.com/css/bootstrap.css">
     <link rel="stylesheet" href="https://godebido.com/css/mob.css">
	   <link rel="stylesheet" href="https://godebido.com/css/animate.css">
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


  <style>
        .tourz-search
        {

            position: relative;
            background-size: cover;
          background-image: url("bnr2.jpg"); no-repeat fixed center;
        }
        .IMAG{
            height: 200px;

        }

    /*  url(upload/home_slide_image1.png)*/
  </style>




  <style>
  .v2-hom-search {
      background: url(../images/search/taxi.jpg) no-repeat;
      position: relative;
      padding: 100px 0px;
      background-size:cover;
  }
  </style>
  <section>
  		<div class="v2-hom-search">
  			<div class="container">
  				<div class="row">
  					<div class="col-md-6">


              <div class="panel panel-primary panel-booking">
              <div class="panel-heading"><strong>Online booking</strong></div>
              <div class="panel-body">


              					<div class="row homeform">
              							<div class="col-md-12 col-xs-12">
              									<div class="home-form">
              											<!-- Nav tabs -->


              											<div class="tab-content">



              													<div role="tabpanel" class="tab-pane active" id="tab_01">

                                          <form method="POST" action="confirmation.php" accept-charset="UTF-8" class="" id="lead_form" role="form"><input name="_token" type="hidden" value="HACSOkjEjKPkvpICY6Y5AFunQzcWGK741nQUEmmR">


                                          <div class="row">

                                          <div class="control-group col-md-12" style="margin:15px 0 -10px 0;">

                                          <label class="radio-inline"><input type="radio" name="triptype" onchange="oneway();" value="ONEWAY" checked="">ONE WAY</label>
                                          <label class="radio-inline"><input type="radio" name="triptype" onchange="roundtrip();" value="ROUNDTRIP">ROUND TRIP</label>

                                          </div>
                                          </div>



              <div class="row">

              <!-- Prepended text-->
              <div class="control-group col-md-12">
              <label class="control-label"></label>
              <div class="controls">
              	<div class="input-group">
              		<span class="input-group-addon">Pickup location</span>
          <!--  <input name="going_from" class="form-control "  autocomplete="off"  id="GoingFrom"   required="required" >
          -->
          <select  name="class" class="input-md form-control">

            <option value=""> Select PickUp Location </option>
            <option value="">Arbia College, Purnea</option>
            <option value="">B.M.T. Law College, Purnea</option>
            <option value="">Bhatta Bazar</option>
            <option value="">Belori</option>
            <option value="">Bijendra Public School</option>
            <option value="">Bright Career School</option>
            <option value="">Bus Stand</option>
            <option value="">Chhath Pokhar</option>
            <option value="">Chunapur</option>
            <option value="">City Cart</option>
            <option value="">City Life</option>
            <option value="">College Chowk</option>
            <option value="">Coperative Colony</option>
            <option value="">Court Station</option>
            <option value="">D.A.P.S.</option>
            <option value="">D.P.S.</option>
            <option value="">D.A.V. Public School</option>
            <option value="">D.I.G. Chowk </option>
            <option value="">Dhamdaha</option>
            <option value="">Dhruv Udyan</option>
            <option value="">Discovery kids</option>
            <option value="">Dollar House Chowk</option>
            <option value="">Dominoz</option>
            <option value="">Don Bosco</option>
            <option value="">Donar Chowk</option>
            <option value="">Emerald Restaurant</option>
            <option value="">Ford Company</option>
            <option value="">Fun city</option>
            <option value="">G.D.Goenka School</option>
            <option value="">Girja Chowk</option>
            <option value="">Gulabbagh</option>
            <option value="">Gyan Kunj Scool</option>
            <option value="">Hotel Centre Point</option>
            <option value="">I-Mart</option>
            <option value="">Indira Gandhi Stadium</option>
            <option value="">J.N.V. Garvaneli</option>
            <option value="">JVR Plaza</option>
            <option value="">Jail Chowk</option>
            <option value="">Janta Chowk</option>
            <option value="">Jhanda Chowk</option>
            <option value="">K.Hat</option>
            <option value="">Kachahri</option>
            <option value="">Kali Bari Chowk</option>
            <option value="">Kasba</option>
            <option value="">Kendriya Vidyalaya , Chunapur</option>
            <option value="">Khiru Chowk</option>
            <option value="">Khuskibagh</option>
            <option value="">KidZee</option>
            <option value="">KorathBari</option>
            <option value="">Kunj Vihar</option>
            <option value="">Lalganj</option>
            <option value="">Line Bazar</option>
            <option value="">MIT</option>
            <option value="">M Bazar</option>
            <option value="">Madhopara</option>
            <option value="">Madhubani</option>
            <option value="">Mahila College, Purnea</option>
            <option value="">Mangal Colony</option>
            <option value="">Manjhli Chowk</option>
            <option value="">Maranga</option>
            <option value="">Mata Sthan Mandir</option>
            <option value="">MAX7</option>
            <option value="">Millia Convent English School</option>
            <option value="">Mount Zion Mission School</option>
            <option value="">Mount Zion School</option>
            <option value="">MurliGanj</option>
            <option value="">Navratana Hatta</option>
            <option value="">Newalal Chowk</option>
            <option value="">Panchmukhi Mandir</option>
            <option value="">Pearl Restaurant</option>
            <option value="">Polytechnic Chowk</option>
            <option value="">Polytechnic College</option>
            <option value="">Prabhat Colony</option>
            <option value="">Purandevi Mandir</option>
            <option value="">Purnea City</option>
            <option value="">Purnea College, Purnea</option>
            <option value="">Purnea Junction</option>
            <option value="">Purnea University</option>
            <option value="">R.K.K. College</option>
            <option value="">R.N.Shah Chowk</option>
            <option value="">Rajendra Bal Udyan</option>
            <option value="">Rajendra Nagar</option>
            <option value="">Rajni Chowk</option>
            <option value="">Rambagh</option>
            <option value="">Ranbhumi Maidan</option>
            <option value="">RaniPatra</option>
            <option value="">Rupvani Cinema Hall</option>
            <option value="">S.K.Mission School</option>
            <option value="">ST. Peters (Hindi Medium), Kachahri</option>
            <option value="">St. Peters (Eng. Medium), Janta Chowk</option>
            <option value="">St. Xaviers School</option>
            <option value="">Shanti Nagar</option>
            <option value="">Sipahi Tola</option>
            <option value="">Sudin Chowk</option>
            <option value="">Tanishq</option>
            <option value="">Taxi stand</option>
            <option value="">Teacher's Colony</option>
            <option value="">Thana Chowk</option>
            <option value="">Ursline Convent Hindi Medium school</option>
            <option value="">Ursline Convent English Medium School, Purnea City</option>
            <option value="">V-Mart (Polytecnic Chowk)</option>
            <option value="">V-Mart (Rambagh)</option>
            <option value="">V2</option>
            <option value="">VVIT</option>
            <option value="">Vanbhag</option>
            <option value="">Vivekanand Colony</option>
            <option value="">Zila School</option>
            <option value="">Zila School Road</option>
          </select>
              <input name="service_type" value="Car rental" type="hidden">


              </div>
              	</div>
              </div>


              <!-- Prepended text-->
              <div class="control-group col-md-12">
              <label class="control-label"></label>
              <div class="controls">
                <div class="input-group">
                  <span class="input-group-addon">Destination location</span>
                <select  name="class" class="input-md form-control">

                    <option value=""> Select Destination Location </option>
                    <option value="">Arbia College, Purnea</option>
                    <option value="">B.M.T. Law College, Purnea</option>
                    <option value="">Bhatta Bazar</option>
                    <option value="">Belori</option>
                    <option value="">Bijendra Public School</option>
                    <option value="">Bright Career School</option>
                    <option value="">Bus Stand</option>
                    <option value="">Chhath Pokhar</option>
                    <option value="">Chunapur</option>
                    <option value="">City Cart</option>
                    <option value="">City Life</option>
                    <option value="">College Chowk</option>
                    <option value="">Coperative Colony</option>
                    <option value="">Court Station</option>
                    <option value="">D.A.P.S.</option>
                    <option value="">D.P.S.</option>
                    <option value="">D.A.V. Public School</option>
                    <option value="">D.I.G. Chowk </option>
                    <option value="">Dhamdaha</option>
                    <option value="">Dhruv Udyan</option>
                    <option value="">Discovery kids</option>
                    <option value="">Dollar House Chowk</option>
                    <option value="">Dominoz</option>
                    <option value="">Don Bosco</option>
                    <option value="">Donar Chowk</option>
                    <option value="">Emerald Restaurant</option>
                    <option value="">Ford Company</option>
                    <option value="">Fun city</option>
                    <option value="">G.D.Goenka School</option>
                    <option value="">Girja Chowk</option>
                    <option value="">Gulabbagh</option>
                    <option value="">Gyan Kunj Scool</option>
                    <option value="">Hotel Centre Point</option>
                    <option value="">I-Mart</option>
                    <option value="">Indira Gandhi Stadium</option>
                    <option value="">J.N.V. Garvaneli</option>
                    <option value="">JVR Plaza</option>
                    <option value="">Jail Chowk</option>
                    <option value="">Janta Chowk</option>
                    <option value="">Jhanda Chowk</option>
                    <option value="">K.Hat</option>
                    <option value="">Kachahri</option>
                    <option value="">Kali Bari Chowk</option>
                    <option value="">Kasba</option>
                    <option value="">Kendriya Vidyalaya , Chunapur</option>
                    <option value="">Khiru Chowk</option>
                    <option value="">Khuskibagh</option>
                    <option value="">KidZee</option>
                    <option value="">KorathBari</option>
                    <option value="">Kunj Vihar</option>
                    <option value="">Lalganj</option>
                    <option value="">Line Bazar</option>
                    <option value="">MIT</option>
                    <option value="">M Bazar</option>
                    <option value="">Madhopara</option>
                    <option value="">Madhubani</option>
                    <option value="">Mahila College, Purnea</option>
                    <option value="">Mangal Colony</option>
                    <option value="">Manjhli Chowk</option>
                    <option value="">Maranga</option>
                    <option value="">Mata Sthan Mandir</option>
                    <option value="">MAX7</option>
                    <option value="">Millia Convent English School</option>
                    <option value="">Mount Zion Mission School</option>
                    <option value="">Mount Zion School</option>
                    <option value="">MurliGanj</option>
                    <option value="">Navratana Hatta</option>
                    <option value="">Newalal Chowk</option>
                    <option value="">Panchmukhi Mandir</option>
                    <option value="">Pearl Restaurant</option>
                    <option value="">Polytechnic Chowk</option>
                    <option value="">Polytechnic College</option>
                    <option value="">Prabhat Colony</option>
                    <option value="">Purandevi Mandir</option>
                    <option value="">Purnea City</option>
                    <option value="">Purnea College, Purnea</option>
                    <option value="">Purnea Junction</option>
                    <option value="">Purnea University</option>
                    <option value="">R.K.K. College</option>
                    <option value="">R.N.Shah Chowk</option>
                    <option value="">Rajendra Bal Udyan</option>
                    <option value="">Rajendra Nagar</option>
                    <option value="">Rajni Chowk</option>
                    <option value="">Rambagh</option>
                    <option value="">Ranbhumi Maidan</option>
                    <option value="">RaniPatra</option>
                    <option value="">Rupvani Cinema Hall</option>
                    <option value="">S.K.Mission School</option>
                    <option value="">ST. Peters (Hindi Medium), Kachahri</option>
                    <option value="">St. Peters (Eng. Medium), Janta Chowk</option>
                    <option value="">St. Xaviers School</option>
                    <option value="">Shanti Nagar</option>
                    <option value="">Sipahi Tola</option>
                    <option value="">Sudin Chowk</option>
                    <option value="">Tanishq</option>
                    <option value="">Taxi stand</option>
                    <option value="">Teacher's Colony</option>
                    <option value="">Thana Chowk</option>
                    <option value="">Ursline Convent Hindi Medium school</option>
                    <option value="">Ursline Convent English Medium School, Purnea </option>
                    <option value="">V-Mart (Polytecnic Chowk)</option>
                    <option value="">V-Mart (Rambagh)</option>
                    <option value="">V2</option>
                    <option value="">VVIT</option>
                    <option value="">Vanbhag</option>
                    <option value="">Vivekanand Colony</option>
                    <option value="">Zila School</option>
                    <option value="">Zila School Road</option>
                  </select>





              </div>
                </div>
              </div>

              </div> <!-- Row-->



              	 <div class="row">
              	 <div class="control-group col-md-6 col-sm-6 col-xs-6">
              			<label class="control-label"></label>
              			<div class="controls">
              					<div class="input-group input-append date" id="datePicker">


              													<span class="input-group-addon add-on"><i class="fa fa-calendar"></i></span>

              <input name="travel_date" class="form-control  hasDatepicker" autocomplete="off" placeholder="Journey Date" maxlength="12" id="LeadTravelDate" required="required" type="text">
              					</div>
              			</div>
              	</div>

                <div class="control-group col-md-6 col-sm-6 col-xs-6">
                   <label class="control-label"></label>
                   <div class="controls">
                       <div class="input-group input-append date" id="returnDate" style="display:none;">
                           <span class="input-group-addon add-on"><i class="fa fa-calendar"></i></span>

             <input name="return_date" class="form-control  hasDatepicker" autocomplete="off" placeholder="Return Date" maxlength="12" id="LeadReturnDate" type="text">
                       </div>
                   </div>
               </div>

              </div> <!-- Row-->

              <div class="row">


              			 <div class="control-group col-md-6 col-sm-12 col-xs-12">
              				 <label class="control-label"></label>
              				 <div class="controls">
              					 <div class="input-group">
              						 <span class="input-group-addon"> Adults</span>

              						 <input name="adults" class="form-control " value="1" autocomplete="off" maxlength="2" id="LeadAdults" min="0" required="required" type="number">

              			 </div>
              					 </div>
              			 </div>

              			 <div class="control-group col-md-6 col-sm-12 col-xs-12">
              				 <label class="control-label"></label>
              				 <div class="controls">
              					 <div class="input-group">
              						 <span class="input-group-addon"> Child (5-12Yrs)</span>

              						 <input name="child" class="form-control " value="0" autocomplete="off" maxlength="2" id="LeadChild" min="0" required="required" type="number">

              			 </div>
              					 </div>

              		 </div>


              </div>
              <div class="row">
              	<div class="control-group col-md-6 col-sm-12 col-xs-12">
              		<label class="control-label"></label>
              		<div class="controls">
              			<div class="input-group">
              				<span class="input-group-addon"> Infant (0-5Yrs)</span>

              				<input name="infant" class="form-control " value="0" autocomplete="off" maxlength="2" id="LeadInfant" min="0" required="required" type="number">

              	</div>
              			</div>
              	</div>




              	<div class="control-group col-md-6 col-sm-12 col-xs-12">
              		<label class="control-label"></label>
              		<div class="controls">
              			<div class="input-group">
              				<span class="input-group-addon"> Vehicle</span>

              				<select id="LeadClass" name="class" class="input-md form-control">
                        <option value="Sedan" class="economy_class">Taxi</option>
                        <option value="SUV" class="business_class">e-Rickshaw</option>
                        <option value="MPV" class="business_class">Cab</option>
                        <option value="Sedan" class="economy_class">Bus</option>
                        <option value="SUV" class="business_class">Auto</option>
                        <option value="MPV" class="business_class">Scorpio (Reservation)</option>
                      </select>

              	</div>
              			</div>
              	</div>


               </div> <!-- Row-->





              <div class="row">

              <div class="control-group col-md-6">
              <label class="control-label" for="pnr"></label>
              <div class="controls">
              	<div class="input-group">
              	<!--	<a href="confirmation.php" class="btn btn-md btn-success" data-toggle="modal" data-target="#BookingForm" >CLICK TO CONTINUE</a>-->

                <input type="submit" name="" value="Click To Continue" class="btn btn-md btn-success">
              </form>

              	</div>

              </div>
              </div>
               </div> <!-- Row-->




              													</div><!-- end tab-pane -->




              											</div><!-- end tab-content -->
              									</div><!-- end homeform -->
              							</div><!-- end col -->

              					</div><!-- end row -->

              </div>
              </div>

  </div>





  					<div class="col-md-6">
  					<div class="v2-ho-se-ri hidden-xs">
  						<h1>Online booking</h1>
  						<p>Experience the various exciting travel services and make easy to go anywhere in your city.</p>
  						<div class="tourz-hom-ser2 v2-hom-ser ">
  							<ul>
                  <li>
                    <a href="booking.php" class="waves-effect waves-light btn-large tourz-pop-ser-btn"><img src="..\DreamTravels\images\DT1.png" alt="" />Bus</a>
                  </li>
                  <li>
                    <a href="booking.php" class="waves-effect waves-light btn-large tourz-pop-ser-btn"><img src="..\DreamTravels\images\DT3.png" alt="" /> e-Rickshaw</a>
                  </li>
                  <li>
                    <a href="booking.php" class="waves-effect waves-light btn-large tourz-pop-ser-btn"><img src="..\DreamTravels\images\DT4.png" alt="" /> Auto</a>
                  </li>
                  <li>
                    <a href="booking.php" class="waves-effect waves-light btn-large tourz-pop-ser-btn"><img src="..\DreamTravels\images\DT5.png" alt="" /> Taxi</a>
                  </li>
                  <li>
                    <a href="booking.php" class="waves-effect waves-light btn-large tourz-pop-ser-btn"><img src="..\DreamTravels\images\Dt6.png" alt="" /> Cab</a>
                  </li>
                  <li>
                    <a href="booking.php" class="waves-effect waves-light btn-large tourz-pop-ser-btn"><img src="..\DreamTravels\images\DT2.png" alt="" />Scorpio</a>
                  </li>

  							</ul>
  						</div>
  					</div>
  					</div>




  				</div>
  			</div>
  		</div>
  	</section>













    <!-- - - - footer - - - -->
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
                     <p> <span class="strong"><i class="fa fa-volume-control-phone"></i> </span> <span class="highlighted">+918409989897</span> </p>
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


    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://godebido.com/scripts/bootstrap.js"></script>

    <link rel="stylesheet" href="https://godebido.com/css/date.css">
    <script type="text/javascript" src="https://godebido.com/scripts/typed.js"></script>
    <script src="https://godebido.com/scripts/tadaaapickr.pack.min.js"></script>
    <script src="https://godebido.com/scripts/wow.min.js"></script>
    <script src="https://godebido.com/scripts/custom.js"></script>
      <script type="text/javascript" src="//platform-api.sharethis.com/js/sharethis.js#property=59b26a5a5377b30012995346&product=inline-share-buttons"></script>

      <script type="text/javascript">

       function oneway(){
      						document.getElementById('returnDate').style.display = "none";
         }
       function roundtrip(){
      					document.getElementById('returnDate').style.display ="table";

        }
         // When the document is ready
         $(document).ready(function () {
                 var d = new Date();
                 $("#LeadTravelDate").datepicker({ dateFormat: "dd-mm-yyyy", startDate:d, endDate: "29-11-2019"});
                    $("#LeadReturnDate").datepicker({ dateFormat: "dd-mm-yyyy", startDate:d.toString(), endDate: "29-11-2019"});
                  //  document.write(d.toString());

               });

               </script>

  </body>
</html>
