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
          <h1>Register</h1>
             <h3 class="title text-center">Create a new account</h3>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="main main-raised">
  <div class="container">
    <div class="section text-center">
      <h2 class="title">Form</h2>
    </div>
        <div class="row">
            <div class="col-md-8 ml-auto mr-auto">
                <p class="bg-warning text-center">Enter all details<p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 ml-auto mr-auto">
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                    <div class="form-group">
                        <label for="useUsername">Username</label>
                        <input type="text" class="form-control" id="useUsername" placeholder="John123">
                    </div>
                    <div class="form-group">
                        <label for="useFirstname">Firstname</label>
                        <input type="text" class="form-control" id="useFirstname" placeholder="John">
                    </div>
                    <div class="form-group">
                        <label for="useSurname">Lastname</label>
                        <input type="text" class="form-control" id="useSurname" placeholder="Doe">
                    </div>
                    <div class="form-group">
                        <label for="useEmail">Email address</label>
                        <input type="text" class="form-control" id="useEmail" placeholder="doe@mail.com">
                    </div>
                    <div class="form-group">
                        <label for="usePassword">Password</label>
                        <input type="password" class="form-control" id="usePassword" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
           </div>
       </div>
  </div>
</div>
<?php

$useUsername = $useEmail = $useFirstname = $useSurname = $usePassword = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $useUsername = test_input($_POST["useUsername"]);
        $useEmail = test_input($_POST["useEmail"]);
        $useFirstname = test_input($_POST["useFirstname"]);
        $useSurname = test_input($_POST["useSurname"]);
        $usePassword = test_input($_POST["usePassword"]);
    }
?>
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