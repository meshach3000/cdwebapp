<?php
 include('../include/cwFunctions.php')
?>
<!doctype html>
<html lang="en">
  <head>
    <title>CDS</title>
    <?php
        printStyle();
    ?>
    <link href="../assets/css/subcss.css" rel="stylesheet" />
  </head>
  <body><nav class="navbar navbar-color-on-scroll navbar-transparent fixed-top navbar-expand-lg"  color-on-scroll="100">
  <div class="container">
      <div class="navbar-translate">
      <a class="navbar-brand" href="../index.php" >Cloud Diagnostics Service</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon"></span>
            <span class="navbar-toggler-icon"></span>
            <span class="navbar-toggler-icon"></span>
        </button>
      </div>
      <?php
        printMenuFromPages();
      ?> 
  </div>
</nav>


<div class="page-header header-filter clear-filter purple-filter" data-parallax="true" style="background-image: url('../assets/img/bg9.jpg')">
  <div class="container">
    <div class="row">
      <div class="col-md-8 ml-auto mr-auto">
        <div class="brand text-center">
          <h1>Subscriptions</h1>
          <h3 class="title text-center">Select a package to begin</h3>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="main main-raised">
  <div class="container">
    <div class="section text-center">
    <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12 float-shadow">        
                    <div class="price_table_container">
                        <div class="price_table_heading">Fremium</div>
                        <div class="price_table_body">
                            <div class="price_table_row cost warning-bg"><strong>$0</strong><span>/MONTH</span></div>
                            <div class="price_table_row">10 Sensor Limit</div>
                            <div class="price_table_row">Maximum of    100,000 requests</div>
                            <div class="price_table_row">Request warning(90%)</div>
                            <div class="price_table_row">Pre-existing algorithms only(not editable)</div>
                            <div class="price_table_row">Data will be in .csv</div>
                            <div class="price_table_row">Data table(value vs time)</div>
							<div class="price_table_row">No Report Feature & Alarm Conditions</div>
							<div class="price_table_row">Upgrade package anytime</div>
                        </div>
                        <a href="reg.php" class="btn btn-warning btn-lg btn-block">Sign Up</a>
                    </div>
                </div>
        
                <div class="col-md-3 col-sm-6 col-xs-12 float-shadow">                            
                    <div class="price_table_container">
                        <div class="price_table_heading">Basic</div>
                        <div class="price_table_body">
                            <div class="price_table_row cost primary-bg"><strong>$187.63</strong><span>/MONTH</span></div>
                            <div class="price_table_row">50 Sensor Limit</div>
                            <div class="price_table_row">Maximum of    3,750,000 requests</div>
                            <div class="price_table_row">Request warning(90%)</div>
                            <div class="price_table_row">Pre-existing algorithms only(not editable)</div>
                            <div class="price_table_row">Data will be in .csv or .txt</div>
                            <div class="price_table_row">Data table(value vs time)</div>
							<div class="price_table_row">Report Feature & Alarm Conditions</div>
							<div class="price_table_row">Payment via PayPal</div>
                        </div>
                        <a href="reg.php" class="btn btn-primary btn-lg btn-block">Sign Up</a>
                    </div>
                </div>
        
                <div class="col-md-3 col-sm-6 col-xs-12 float-shadow">        
                    <div class="price_table_container">
                        <div class="price_table_heading">Premium</div>
                        <div class="price_table_body">
                            <div class="price_table_row cost success-bg"><strong>$300.25</strong><span>/MONTH</span></div>
                            <div class="price_table_row">100 Sensor Limit</div>
                            <div class="price_table_row">Maximum 12,000,000 requests</div>
                            <div class="price_table_row">Request warning(90%)</div>
                            <div class="price_table_row">Pre-existing & user configurable algorithms</div>
                            <div class="price_table_row">Data will be in .csv or .txt</div>
                            <div class="price_table_row">Data table(value vs time)</div>
							<div class="price_table_row">Report Feature & Alarm Conditions</div>
							<div class="price_table_row">Payment via PayPal</div>                                               
                        </div>
                        <a href="reg.php" class="btn btn-success btn-lg btn-block">Sign Up</a>
                    </div>
                </div>
        
                <div class="col-md-3 col-sm-6 col-xs-12 float-shadow">        
                    <div class="price_table_container">
                        <div class="price_table_heading">Enterprise</div>
                        <div class="price_table_body">
                            <div class="price_table_row cost info-bg"><strong>$5000</strong><span>/MONTH</span></div>
                            <div class="price_table_row">1,000,000 Sensor Limit</div>
                            <div class="price_table_row">Maximum of 1,000,000,000,000 requests</div>
                            <div class="price_table_row">Request warning(90%)</div>
                            <div class="price_table_row">Pre-existing & user configurable algorithms</div>
                            <div class="price_table_row">Data will be in .csv or .txt</div>
                            <div class="price_table_row">Data table(value vs time)</div>
							<div class="price_table_row">Report Feature & Alarm Conditions</div>
							<div class="price_table_row">Payment via PayPal</div>                                                 
                        </div>
                        <a href="reg.php" class="btn btn-info btn-lg btn-block">Sign Up</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- PRICING TABLE STYLE 1-->



    </div>
  </div>
</div>

<footer class="footer footer-default" >
</footer>
<!--   Core JS Files   -->
<script src="../assets/js/core/jquery.min.js" type="text/javascript"></script>
<script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="../assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
<script src="../assets/js/plugins/moment.min.js"></script>
<!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
<script src="../assets/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="../assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
<!--  Google Maps Plugin  -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
<script src="../assets/js/material-kit.js?v=2.0.4" type="text/javascript"></script></body>
</html>