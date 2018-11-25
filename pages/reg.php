<?php
    include('../include/cwFunctions.php')
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Register</title>
    <?php
        printStyle();
    ?>
	<?php
		$useUsername = $useEmail = $useFirstname = $useSurname = $usePassword = "";

			if ($_SERVER["REQUEST_METHOD"] == "POST") {
				$useUsername = test_input($_POST["useUsername"]);
				$useEmail = test_input($_POST["useEmail"]);
				$useFirstname = test_input($_POST["useFirstname"]);
				$useSurname = test_input($_POST["useLastname"]);
				$usePassword = test_input($_POST["usePassword"]);
				createUser($useUsername, $useFirstname,$useSurname,$usePassword,$useEmail);
			}

	?>
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
    <div class="row justify-content-center" style="padding-top: 260px;">
<div class="col-md-6">
<div class="card">
<header class="card-header card-header-primary text-center">
	<a href="login.php" class="float-right btn btn-success mt-1">Log in</a>
	<h4 class="card-title mt-2">Sign up</h4>
</header>
<article class="card-body">
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <div class="form-group">
		<label>Username</label>
	    <input id="useUsername" name="useUsername" class="form-control" type="text" required>
	</div> <!-- form-group end.// -->  
	<div class="form-row">
		<div class="col form-group">
			<label>First name </label>   
		  	<input id="useFirstname" name="useFirstname" type="text" class="form-control" placeholder="" required>
		</div> <!-- form-group end.// -->
		<div class="col form-group">
			<label>Last name</label>
		  	<input id="useLastname" name="useLastname" type="text" class="form-control" placeholder=" " required>
		</div> <!-- form-group end.// -->
	</div> <!-- form-row end.// -->
	<div class="form-group">
		<label>Email address</label>
		<input id="useEmail" name="useEmail" type="email" class="form-control" placeholder="" required> 
	</div> <!-- form-group end.// -->
	<div class="form-group">
		<label>Create password</label>
	    <input id="usePassword" name="usePassword" class="form-control" type="password" required>
	</div> <!-- form-group end.// -->  
    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block"> Register  </button>
    </div> <!-- form-group// -->      
    <small class="text-muted">By clicking the 'Sign Up' button, you confirm that you accept our <br> Terms of use and Privacy Policy.</small>                                          
</form>
</article> <!-- card-body end .// -->
<div class="border-top card-body text-center">Have an account? <a href="login.php">Log In</a></div>
</div> <!-- card.// -->
</div> <!-- col.//-->

</div> <!-- row.//-->
  </div>
  </div>



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
<script type="../text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
<script src="../assets/js/material-kit.js?v=2.0.4" type="text/javascript"></script></body>

</html>