<!doctype html>
<?php 
  include('include/cwFunctions.php');
?>
<html lang="en">
  <head>
    <title>CDS</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <!--  Fonts and icons  -->
      <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">

    <!-- Material Kit CSS -->
    <link href="assets/css/material-kit.css?v=2.0.4" rel="stylesheet" />
  </head>
  <body>
      <nav class="navbar navbar-color-on-scroll navbar-transparent fixed-top navbar-expand-lg"  color-on-scroll="100">
      <div class="container">
      <div class="navbar-translate">
            <a class="navbar-brand">Cloud Diagnostics Service</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="sr-only">Toggle navigation</span>
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
            </button>
      </div>
      <?php
        printMenu();
        dbConnection();
	    ?> 
  </div>
</nav>
<div class="page-header header-filter clear-filter purple-filter" data-parallax="true" style="background-image: url('assets/img/bg9.jpg')">
  <div class="container">
    <div class="row">
      <div class="col-md-8 ml-auto mr-auto">
        <div class="brand text-center">
          <h1>Cloud Diagnostics Service</h1>
          <h3 class="title text-center">Provision and monitor sensor devices from the cloud</h3>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="main main-raised">
  <div class="container">
    <div class="section text-center">
      <h2 class="title">Build your own sensor network</h2>
        <p> This  solution  allows  a  user  to  connect  and  monitor  multiple  sensors
              in  an  environment  of  their  choice.  Users  can  generate  reports  from  the  stored  data 
               as  well  as  set  alarms  if  sensors  reach  a  set  threshold  of  their  choice.  
            The  service  offers  support  for 
             varying  numbers  of  sensors  as  each
               user  requirements  will  be  different. 
        </p>
        <div class="row">
          <div class="col">
            <div class="info">
            <div class="icon icon-primary">
                <i class="material-icons">money</i>
            </div>
            <h4 class="info-title">Low cost</h4>
                <p> Sensors cost less by focusing on one transducer type
					(i.e. one type of instrument as pH, chemical concentration 
				   PPM value (salt level), temperature, etc) .
				</p>
            </div>
           </div>
           <div class="col">
            <div class="info">
            <div class="icon icon-primary">
                <i class="material-icons">cloud</i>
            </div>
            <h4 class="info-title">Cloud Service</h4>
                <p>Manage sensor devices, generate reports and adjust cloud solution packe using one cloud based solution.</p>
            </div>
           </div>
           <div class="col">
             <div class="info">
                <div class="icon icon-primary">
                    <i class="material-icons">check</i>
                </div>
                <h4 class="info-title">Easy to install</h4>
                    <p>No hassel,sensors are easy to setup and have out of the box plug and play cappabilitiy<p>
                </div>
            </div>
        </div>
		<div class="row">
				<div class="col">
          <a href="pages/reg.php">
				  	<button id="getStarted" class="btn btn-primary btn-lg">Get Started</button>
          </a>
				</div>
    </div>
    </div>
  </div>
</div>
<!--   Core JS Files   -->
<script src="assets/js/core/jquery.min.js" type="text/javascript"></script>
<script src="assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
<script src="assets/js/plugins/moment.min.js"></script>
<!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
<script src="assets/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
<!--  Google Maps Plugin  -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
<script src="assets/js/material-kit.js?v=2.0.4" type="text/javascript"></script>
</body>
</html>