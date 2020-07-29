<?php
require'db.php';
$id1=$_GET['id'];
$prop="SELECT * FROM details WHERE P_id='$id1'";
$run=mysqli_query($conn,$prop); 
$result=mysqli_fetch_assoc($run);
if($result)
{
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Uptown</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html">Uptown</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item"><a href="index.html" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
	          <li class="nav-item"><a href="agent.html" class="nav-link">Agent</a></li>
	          <li class="nav-item"><a href="features.html" class="nav-link">Features</a></li>
	          <li class="nav-item"><a href="properties.html" class="nav-link">Properties</a></li>
	          <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
	          <li class="nav-item"><a href="login.html" class="nav-link">LogIn</a></li>
	          <li class="nav-item"><a href="signup.html" class="nav-link">Sign Up</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
    <section class="hero-wrap hero-wrap-2 ftco-degree-bg js-fullheight" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate pb-5 text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Properties <i class="ion-ios-arrow-forward"></i></span></p>
            <h1 class="mb-3 bread">Properties Single</h1>
          </div>
        </div>
      </div>
    </section>

		<section class="ftco-section ftco-property-details">
      <div class="container">
      	<div class="row justify-content-center">
      		<div class="col-md-12">
      			<div class="property-details">
      				<div class="img" style="background-image: url(images/prop<?php echo $result['P_id']; ?>.jpg);"></div>
      				<div class="text text-center">
      					<span class="subheading"><?php echo $result['City']; ?></span>
      					<h2><?php echo $result['Name']; ?></h2>
      				</div>
      			</div>
      		</div>
      	</div>
      	<div class="row">
      		<div class="col-md-12 pills">
						<div class="bd-example bd-example-tabs">
							<div class="d-flex justify-content-center">
							  <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">

							    <li class="nav-item">
							      <a class="nav-link active" id="pills-description-tab" data-toggle="pill" href="#pills-description" role="tab" aria-controls="pills-description" aria-expanded="true">Details</a>
							    </li>
							    <li class="nav-item">
							      <a class="nav-link" id="pills-manufacturer-tab" data-toggle="pill" href="#pills-manufacturer" role="tab" aria-controls="pills-manufacturer" aria-expanded="true">Description</a>
							    </li>
							  </ul>
							</div>

						  <div class="tab-content" id="pills-tabContent">
						    <div class="tab-pane fade show active" id="pills-description" role="tabpanel" aria-labelledby="pills-description-tab">
						    	<div class="row">
						    		<div class="col-md-4">
						    			<ul class="features">
						    				<li class="check"><span class="ion-ios-checkmark"></span>City:&nbsp&nbsp<?php echo $result['City']; ?></li>
						    				<li class="check"><span class="ion-ios-checkmark"></span>Plot Area:&nbsp&nbsp<?php echo $result['Plot_area']; ?> sqft</li>
						    				<li class="check"><span class="ion-ios-checkmark"></span>Bed Rooms:&nbsp&nbsp<?php echo $result['Bed']; ?> </li>
						    				<li class="check"><span class="ion-ios-checkmark"></span>24/7 Water Supply</li>
						    				<li class="check"><span class="ion-ios-checkmark"></span>Property Id:&nbsp&nbsp<?php echo $result['P_id']; ?> </li>
						    			</ul>
						    		</div>
						    		<div class="col-md-4">
						    			<ul class="features">
						    				<li class="check"><span class="ion-ios-checkmark"></span>Location:&nbsp&nbsp<?php echo $result['Location']; ?> </li>
						    				<li class="check"><span class="ion-ios-checkmark"></span>Storeys:&nbsp&nbsp<?php echo $result['Storeys']; ?></li>
						    				<li class="check"><span class="ion-ios-checkmark"></span>Bath Rooms:&nbsp&nbsp<?php echo $result['Bath']; ?> </li>
						    				<li class="check"><span class="ion-ios-checkmark"></span>24/7 Electricity Supply</li>
						    				<li class="check"><span class="ion-ios-checkmark"></span>Agent Name:&nbsp&nbsp<?php echo $result['Agent_name']; ?> </li>
						    			</ul>
						    		</div>
						    		<div class="col-md-4">
						    			<ul class="features">
						    				<li class="check"><span class="ion-ios-checkmark"></span>Price:&nbsp&nbsp<?php echo $result['Price']; ?></li>
						    				<li class="check"><span class="ion-ios-checkmark"></span>Year Build:&nbsp&nbsp<?php echo $result['Year']; ?></li>
						    				<li class="check"><span class="ion-ios-checkmark"></span>Kitchen:&nbsp&nbsp<?php echo $result['Kitchen']; ?></li>
						    				<li class="check"><span class="ion-ios-checkmark"></span>Parking Facility</li>
						    				<li class="check"><span class="ion-ios-checkmark"></span>Agent Phone Number:&nbsp&nbsp<?php echo $result['Agent_no']; ?></li>
						    			</ul>
						    		</div>
						    	</div>
						    </div>

						    <div class="tab-pane fade" id="pills-manufacturer" role="tabpanel" aria-labelledby="pills-manufacturer-tab">
						      <p><?php echo $result['Description']; ?></p>
						    </div>

    </section>

     <footer class="ftco-footer ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Uptown</h2>
              <p>Your only destination to find a PERFECT ABODE for yourself</p>
              <ul class="ftco-footer-social list-unstyled mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#instagram.com/shulin_pathak"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">6/244,Vipul Khand,Gomti Nagar,Lucknow.</span></li>
	                <li><a href="tel://6387351303"><span class="icon icon-phone"></span><span class="text">+91 6387351303</span></a></li>
	                <li><a href="mailto:shulinpathak2001@gmail.com"><span class="icon icon-envelope pr-4"></span><span class="text">shulinpathak2001@gmail.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">
	<p>THANK YOU!Have a nice day<p>
          </div>
        </div> 
      </div>
    </footer>

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>
<?php } ?>