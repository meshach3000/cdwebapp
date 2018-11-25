<?php
    function printStyle(){
      echo(' <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <!--  Fonts and icons  -->
          <!--     Fonts and icons     -->
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    
        <!-- Material Kit CSS -->
        <link href="../assets/css/material-kit.css?v=2.0.4" rel="stylesheet" />
      ');
    }

    function printMenu(){

        echo ('<div class="collapse navbar-collapse">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                  <li class="nav-item">
                  <a href="pages/sub.php" class="nav-link">
                      <i class="material-icons">apps</i> Subscriptions
                  </a>
                </li>
                 <li class="nav-item">
                  <a href="pages/prof.php" class="nav-link">
                      <i class="material-icons">person</i> Profile
                  </a>
                </li>
                 <li class="nav-item">
                  <a href="pages/reg.php" class="nav-link">
                      <i class="material-icons">book</i> Register
                  </a>
                </li>
                 <li class="nav-item">
                  <a href="pages/login.php" class="nav-link">
                      <i class="material-icons">star</i> Sign in
                  </a>
                </li>
                </li>
              </ul>
          </div>');
    }

    function printMenuFromPages(){

        echo ('<div class="collapse navbar-collapse">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                  <li class="nav-item">
                  <a href="sub.php" class="nav-link">
                      <i class="material-icons">apps</i> Subscriptions
                  </a>
                </li>
                 <li class="nav-item">
                  <a href="prof.php" class="nav-link">
                      <i class="material-icons">person</i> Profile
                  </a>
                </li>
                 <li class="nav-item">
                  <a href="reg.php" class="nav-link">
                      <i class="material-icons">book</i> Register
                  </a>
                </li>
                 <li class="nav-item">
                  <a href="login.php" class="nav-link">
                      <i class="material-icons">star</i> Sign in
                  </a>
                </li>
                </li>
              </ul>
          </div>');
    }
?>