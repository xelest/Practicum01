<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--=============================JS QJUERY======================== -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!--=============================CSS======================== -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/log.css">
  <link rel="stylesheet" type="text/css" href="css/util.css">
</head>
<body>

  <!--=============================Top nav======================== -->
<nav class="navbar navbar-inverse navbar-global navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
        <div id="navbar" class="collapse navbar-collapse">
        </div><!--/.nav-collapse -->
      </div>
    </nav>


  <div class="limiter">
    <div class="container-login">
      <div class="wrap-login p-t-30 p-b-50">
        
        <form class="login-form validate-form p-b-33 p-t-5">
          <div class="login-form-title p-b-41 m-t-32">
          Account Login
          </div>

          <div class="wrap-input validate-input" data-validate = "Enter username">
            <input class="input" id="login" type="text" name="username" placeholder="User name">
          </div>

          <div class="wrap-input validate-input" data-validate="Enter password">
            <input class="input" id="password" type="password" name="pass" placeholder="Password">
          </div>

          <div class="container-login-form-btn m-t-32">
            <button class="login-form-btn">
              Login
            </button>
          </div>

        </form>
      </div>
    </div>
  
<!--
  <div class="wrapper fadeInDown">
    <div id="formContent">
      <!-- Tabs Titles 

      <!-- Login Form 


      <form action="#" method="POST">
        <input type="text" id="login" class="fadeIn second" name="login-uname" placeholder="username..">
        <input type="password" id="password" class="fadeIn third" name="login-pword" placeholder="password..">
        <input type="submit" name="submitauth" class="fadeIn fourth" value="Log In">
      </form>

      <!-- Remind Passowrd 
      <div id="formFooter">
        <a class="underlineHover" href="#"></a>
      </div>

    </div>
  </div> -->

   
   
</div>
<!--================= this script is for the collapsable=============-->
<script src="js/nav.js"></script>
  <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
  <script src="vendor/animsition/js/animsition.min.js"></script>
  <script src="vendor/bootstrap/js/popper.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="vendor/select2/select2.min.js"></script>
  <script src="vendor/daterangepicker/moment.min.js"></script>
  <script src="vendor/daterangepicker/daterangepicker.js"></script>
  <script src="vendor/countdowntime/countdowntime.js"></script>
  <script src="js/login.js"></script>
</body>
</html>

<?php
include_once('phpcore/authenticate_login.php');

?>
