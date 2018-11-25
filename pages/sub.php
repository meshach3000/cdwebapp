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
                        <div class="price_table_heading">Starter</div>
                        <div class="price_table_body">
                            <div class="price_table_row cost warning-bg"><strong>$ 19</strong><span>/MONTH</span></div>
                            <div class="price_table_row">1 Website</div>
                            <div class="price_table_row">10 GB Storage</div>
                            <div class="price_table_row">10 GB Bandwidth</div>
                            <div class="price_table_row">10 Email Addresses</div>
                            <div class="price_table_row">Free Backup</div>
                            <div class="price_table_row">Full Time Support</div>                                                
                        </div>
                        <a href="reg.php" class="btn btn-warning btn-lg btn-block">Sign Up</a>
                    </div>
                </div>
        
                <div class="col-md-3 col-sm-6 col-xs-12 float-shadow">
                    <div class="recommended"><strong><span class="glyphicon glyphicon-heart" aria-hidden="true"></span> RECOMMENDED</strong></div>                              
                    <div class="price_table_container">
                        <div class="price_table_heading">Basic</div>
                        <div class="price_table_body">
                            <div class="price_table_row cost primary-bg"><strong>$ 29</strong><span>/MONTH</span></div>
                            <div class="price_table_row">10 Websites</div>
                            <div class="price_table_row">100 GB Storage</div>
                            <div class="price_table_row">100 GB Bandwidth</div>
                            <div class="price_table_row">50 Email Addresses</div>
                            <div class="price_table_row">Free Backup</div>
                            <div class="price_table_row">Full Time Support</div>                                                
                        </div>
                        <a href="reg.php" class="btn btn-primary btn-lg btn-block">Sign Up</a>
                    </div>
                </div>
        
                <div class="col-md-3 col-sm-6 col-xs-12 float-shadow">        
                    <div class="price_table_container">
                        <div class="price_table_heading">Premium</div>
                        <div class="price_table_body">
                            <div class="price_table_row cost success-bg"><strong>$ 39</strong><span>/MONTH</span></div>
                            <div class="price_table_row">100 Websites</div>
                            <div class="price_table_row">1 TB Storage</div>
                            <div class="price_table_row">1 TB Bandwidth</div>
                            <div class="price_table_row">100 Email Addresses</div>
                            <div class="price_table_row">Free Backup</div>
                            <div class="price_table_row">Full Time Support</div>                                                
                        </div>
                        <a href="reg.php" class="btn btn-success btn-lg btn-block">Sign Up</a>
                    </div>
                </div>
        
                <div class="col-md-3 col-sm-6 col-xs-12 float-shadow">        
                    <div class="price_table_container">
                        <div class="price_table_heading">Master</div>
                        <div class="price_table_body">
                            <div class="price_table_row cost info-bg"><strong>$ 60</strong><span>/MONTH</span></div>
                            <div class="price_table_row">Unlimited Websites</div>
                            <div class="price_table_row">10 TB Storage</div>
                            <div class="price_table_row">100 TB Bandwidth</div>
                            <div class="price_table_row">1000 Email Addresses</div>
                            <div class="price_table_row">Free Backup</div>
                            <div class="price_table_row">Full Time Support</div>                                                
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
  <div class="container">
    <nav class="float-left">
      <ul>
        <li>
          <a href="https://www.creative-tim.com/">
              Creative Tim
          </a>
        </li>
      </ul>
    </nav>
    <div class="copyright float-right">
        &copy;
        <script>
            document.write(new Date().getFullYear())
        </script>, made with <i class="material-icons">favorite</i> by
        <a href="https://www.creative-tim.com/" target="blank">Creative Tim</a> for a better web.
    </div>
  </div>
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