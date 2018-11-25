<?php
$useEmail= $useFirstname = $useLastname = $useUsername ="";


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

    function dbConnection(){
        try{
               $conn = new mysqli('localhost', 'admin', 'admin', 'clouddb',3306);
                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                } 
        }
        catch(Exception $e){
            echo $e;
        }

    }

    function console_log(){
         echo '<script>';
         echo 'console.log('.json_encode($data) .')';
         echo '<script>';
    }

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }

    function createUser($useUsername, $useFirstname,$useLastname,$usePassword,$useEmail){

        try{
                $conn = new mysqli('localhost', 'admin', 'admin', 'clouddb',3306);
                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                } 
        }
        catch(Exception $e){
            echo $e;
        }

        $date = date_create();
        $dateTime = date_format($date, 'Y-m-d H:i:s');

        $sql = "INSERT INTO users (use_username, use_firstname,use_lastname,use_password,use_email,use_created)
                VALUES ('$useUsername','$useFirstname', '$useLastname','$usePassword','$useEmail', '$dateTime' )";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
            header("login.php");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    }
    
    function getUserDetails($useId){
        try{
            $conn = new mysqli('localhost', 'admin', 'admin', 'clouddb',3306);
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            } 
        }catch(Exception $e){
          echo $e;
        }

        $sql = "SELECT use_username,use_firstname,use_lastname, use_email, use_password FROM users where use_id=$useId";
        $result = $conn->query($sql);
        $useId = 0;

             if ($result->num_rows > 0) {
                // output data of each row
                    while($row = $result->fetch_assoc()) {
                        $GLOBALS['useEmail'] = $row['use_email'];
                        $GLOBALS['useFirstname'] = $row['use_firstname'];
                        $GLOBALS['useLastname'] = $row['use_lastname'];
                        $GLOBALS['useUsername'] = $row['use_username'];
                    }
       
                }
  }

    function login($useEmail,$usePassword){
        try{
            $conn = new mysqli('localhost', 'admin', 'admin', 'clouddb',3306);
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            } 
        }catch(Exception $e){
          echo $e;
        }

        $sql = "SELECT use_id, use_email, use_password FROM users where use_email like '$useEmail' and use_password like '$usePassword'";
        $result = $conn->query($sql);
        $useId = 0;

             if ($result->num_rows > 0) {
                // output data of each row
                 while($row = $result->fetch_assoc()) {
                     echo "Name: " . $row["use_email"]. " " . $row["use_password"]. "<br>";
                     $useId = $row["use_id"];
                 }
                 session_start();
                 $_SESSION["auth"] = true;
                 $_SESSION["useId"] = $useId;
                 header('Location:prof.php');
            } 
            else {
                    echo "0 results";
                   // header('Location:reg.php');
            }
            $conn->close();
    }
?>