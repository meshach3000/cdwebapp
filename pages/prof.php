<?php
    include('../include/cwFunctions.php');
    
    if($_SESSION["auth"] != null && $_SESSION['auth'] == true){
        getUserDetails($_SESSION['useId']);
        getSubscription($_SESSION['useId']);
    }
    else{
         header('Location:login.php');
    }

    if (isset($_GET['sub'])) {
            //create new subscriptions
         createSubscription($_GET['sub'],$_SESSION['useId']); 
       //  Header('Reload:0');
    }
?>
<!doctype html>
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
<link href="../assets/css/subcss.css" rel="stylesheet" />
    <!-- Material Kit CSS -->
    <link href="../assets/css/material-kit.css?v=2.0.4" rel="stylesheet" />
  </head>
  <body><nav class="navbar navbar-color-on-scroll navbar-transparent fixed-top navbar-expand-lg"  color-on-scroll="100">
  <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="../index.php"> Cloud Diagnostics Service </a>

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
          <h1>Profile</h1>
          <h3 class="title text-center">Update your account</h3>
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
		<div class="col-md-3 ">
		     <div class="list-group ">
              <a id="tabDetails" name="tabDetails" class="list-group-item list-group-item-action">User Details</a>
              <a id="tabAddress" name="tabAddress" class="list-group-item list-group-item-action">Address</a>
              <a  id="tabBilling" name="tabBilling"  class="list-group-item list-group-item-action">Billing</a>
              <a  id="tabSubs" name="tabSubs" class="list-group-item list-group-item-action">Subscriptions</a>
          </div> 
		</div>
		<div class="col-md-9">
		    <div class="card" id="profForm" name="profForm"> 
		        <div class="card-body">
		            <div class="row">
		                <div class="col-md-12">
		                    <h4></h4>
                            <img width="200px" height="200px" src="../assets/img/faces/marc.jpg" alt="..." class="rounded-circle">
                            
                            <hr>
		                </div>
                        <div class="col-md-12">
            
                                    <div class="alert alert-success" role="alert">
                                        <?php echo $subName; ?>
                                    </div>
    
                        </div>
		            </div>
		            <div class="row">
		                <div class="col-md-12">
		                    <form method="post" action=""> 
                              <div class="form-group row text-left">
                                <label for="useUsername" class="col-4 col-form-label">User Name</label> 
                                <div class="col-8">
                                  <input id="useUsername" name="useUsername" class="form-control here" required="required" type="text" value="<?php echo $useUsername; ?>">
                                </div>
                              </div>
                              <div class="form-group row text-left">
                                <label for="useFirstname" class="col-4 col-form-label">First Name</label> 
                                <div class="col-8">
                                  <input id="useFirstname" name="useFirstname" placeholder="" class="form-control here" type="text" value="<?php echo $useFirstname; ?>">
                                </div>
                              </div>
                              <div class="form-group row text-left">
                                <label for="useLastname" class="col-4 col-form-label">Last Name</label> 
                                <div class="col-8">
                                  <input id="useLastname" name="useLastname" placeholder="" class="form-control here" type="text" value="<?php echo $useLastname; ?>">
                                </div>
                              </div>
                              <!--<div class="form-group row text-left">
                                <label for="select" class="col-4 col-form-label">Display Name public as</label> 
                                <div class="col-8">
                                  <select id="select" name="select" class="custom-select">
                                    <option value="admin">Admin</option>
                                  </select>
                                </div>
                              </div> -->
                              <div class="form-group row text-left">
                                <label for="useEmail" class="col-4 col-form-label">Email</label> 
                                <div class="col-8">
                                  <input id="useEmail" name="useEmail" placeholder="" class="form-control here" required="required" type="email" value="<?php echo $useEmail?>" >
                                </div>
                              </div>
                              <div class="form-group row text-left">
                                <div class="offset-4 col-8">
                                  <!-- <button name="submit" type="submit" class="btn btn-primary">Update My Profile</button> -->
                                </div>
                              </div>
                            </form>
		                </div>
		            </div>
		            
		        </div>
		    </div>
            <div class="card"  id="subForm" name="subFrom" style="display-none;">
		        <div class="card-body" >
		            <div class="row">
		                <div class="col-md-12">
		                    <h4></h4>
                                 Subscriptions Packages
		                    <hr>
		                </div>
		            </div>
		            <div class="row">
		                <div class="col-md-12">
                    <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12 float-shadow">  
                  <?php if($subId!=null && $subId ==1){ echo' <div class="recommended"><strong><span class="glyphicon glyphicon-heart" aria-hidden="true"></span>Current Subscription</strong></div> ';} ?>       
                    <div class="price_table_container">
                        <div class="">Fremium</div>
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
                        <a href="prof.php?sub=1" class="btn btn-warning btn-lg btn-block subscribe">Select</a>
                    </div>
                </div>
        
                <div class="col-md-3 col-sm-6 col-xs-12 float-shadow">     
                <?php if($subId!=null && $subId ==2){ echo' <div class="recommended"><strong><span class="glyphicon glyphicon-heart" aria-hidden="true"></span>Current Subscription</strong></div> ';} ?>                        
                    <div class="price_table_container">
                        <div class="">Basic</div>
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
                        <a href="prof.php?sub=2" class="btn btn-primary btn-lg btn-block subscribe">Select</a>
                    </div>
                </div>
        
                <div class="col-md-3 col-sm-6 col-xs-12 float-shadow">  
                 <?php if($subId!=null && $subId ==3){ echo' <div class="recommended"><strong><span class="glyphicon glyphicon-heart" aria-hidden="true"></span>Current Subscription</strong></div> ';} ?>       
                    <div class="price_table_container">
                        <div class="">Premium</div>
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
                        <a href="prof.php?sub=3" class="btn btn-success btn-lg btn-block subscribe">Select</a>
                    </div>
                </div>
        
                <div class="col-md-3 col-sm-6 col-xs-12 float-shadow">    
                <?php if($subId!=null &&  $subId == 4){ echo' <div class="recommended"><strong><span class="glyphicon glyphicon-heart" aria-hidden="true"></span>Current Subscription</strong></div> ';} ?>     
                    <div class="price_table_container">
                        <div class="">Enterprise</div>
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
                        <a href="prof.php?sub=4" class="btn btn-info btn-lg btn-block subscribe">Select</a>
                    </div>
                </div>
            </div>
        </div>
		                </div>
		            </div>
		            
		        </div>
		    </div>
		</div>
	</div>
</div>

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
<script>

$(document).ready(function(){
  $("#subForm").hide();

    $("#tabSubs").on("click", function(){
            $("#profForm").hide();
            $("#subForm").show();
    });

    $("#tabDetails").on("click", function(){
            $("#subForm").hide();
            $("#profForm").show();
    });
});

</script>
</html>