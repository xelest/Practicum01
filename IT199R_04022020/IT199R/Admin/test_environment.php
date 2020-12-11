<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!--=============HEADERS========== -->
  <?php include ('headerinclude.php'); ?>
</head>
<body>
<!--=============Top nav========== -->
<?php include('nav_top.php'); ?>
<!--=============Sidenav========== -->
<?php include('nav_side.php'); ?>


<div class="main-content">
<h1>TEST ENVIRONMENT</h1>

    <!-- Register Users -->
     <form action="#" method="POST">
	      <input type="text" id="login" class="fadeIn second" name="reg-uname" placeholder="username..">
	      <input type="password" id="password1" class="fadeIn third" name="reg-pword" placeholder="password..">
	       <input type="password" id="password2" class="fadeIn third" name="reg-pword2" placeholder="confirm password..">
      <input type="submit" name="submit_register" class="fadeIn fourth" value="Register">
    </form>
    <?php include 'phpcore/authenticate_login.php'; ?><br>

        <!-- TAP IN -->
     <form action="tap-in-new.php" method="POST">
	      <input type="text" id="tap_in" class="fadeIn second" name="tap_in" placeholder="id no.." required="required">
      <input type="submit" name="submit_tapin" class="fadeIn fourth" value="TAP IN" >
    </form> <br>

        <!-- TAP OUT -->
     <form action="tap-out.php" method="POST">
	      <input type="text" id="tap_out" class="fadeIn second" name="tap_out" placeholder="id no.." required="required">
      <input type="submit" name="submit_tapout" class="fadeIn fourth" value="TAP OUT">
    </form>
    <?php include 'phpcore/authenticate_login.php'; ?><br>
    <?php include 'phpcore/register_user.php'; ?>

</div>


<!--=============MODAL========== -->
<?php include('modal_logout.php'); ?>
<!--================= this script is for the collapsable=============-->
<script src="nav.js"></script>
</body>
</html>
