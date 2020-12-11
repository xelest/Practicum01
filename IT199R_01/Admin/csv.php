<?php 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" > -->

  <!--=============HEADERS========== -->
  <?php include ('headerinclude.php'); ?>


</head>
<body>
<!--=============Top nav========== -->
<?php include('nav_top.php'); ?>
<!--=============Sidenav========== -->
<?php include('nav_side.php'); ?>

<div class="main-content">
  <h1>CSV Uploader</h1>
  <p>CSV portal. Please use CSV file only.</p>

  <div class="form-group">
    <!--=============Tabs MENU ========== -->
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#create">User Information</a></li>
    <li><a data-toggle="tab" href="#update">User Accounts</a></li>
    <li><a data-toggle="tab" href="#change">Guardian Information</a></li>
  </ul>

  <!--=============Tabs contents========== -->
  <div class="tab-content">
      <div id="create" class="tab-pane fade in active">
        <h3>User Information</h3>
        <p>Upload main</p>

        <form method="POST" enctype="multipart/form-data">
            <div class="form-group">
              <h4>File uploader for user information</h4>
          <div class="input-group input-file">
              <input  style="width: 100%;" type="file" name="file" class="form-control" placeholder='Choose a file...' />
              <span class="input-group-btn">
            </span></div>
            <div class="form-group"></div>

              <div class="form-group">
          <button type="submit" class="btn btn-primary btn-lg" name="submitcsv">UPLOAD</button></div>

          </div>
        </form></div>



      <div id="update" class="tab-pane fade">
        <h3>User Accounts</h3>
        <p>Upload user account details.</p>
          <div class="form-group">
    <form method="POST" enctype="multipart/form-data">
      <div class="form-group">
        <h4>File uploader for user information</h4>
    <div class="input-group input-file">
        <input  style="width: 100%;" type="file" name="file" class="form-control" placeholder='Choose a file...' />
        <span class="input-group-btn">
      </span></div>
      <div class="form-group"></div>

        <div class="form-group">
    <button type="submit" class="btn btn-primary btn-lg" name="submitcsv">UPLOAD</button></div>

    </div>
  </form>
      </div></div>


      <div id="change" class="tab-pane fade">
        <h3>Guardian Information</h3>
        <p>Upload guardian information detils.</p>
         <div class="form-group">
    <form method="POST" enctype="multipart/form-data">
      <div class="form-group">
        <h4>File uploader for guardian info</h4>
    <div class="input-group input-file">
        <input  style="width: 100%;" type="file" name="file-guardian" class="form-control" placeholder='Choose a file...' />
        <span class="input-group-btn">
      </span></div>
      <div class="form-group"></div>

        <div class="form-group">
    <button type="submit" class="btn btn-primary btn-lg" name="submitcsv-guardian">UPLOAD</button></div>
    </div>
  </form>
      </div>
  </div>




<!--=============MODAL========== -->
<?php include('modal_logout.php'); ?>
<?php include('modal_yesno.php'); ?>
<!--================= this script is for the collapsable=============-->
<script src="nav.js"></script>
</body>
</html>
<?php

require_once('connection.php');
include('phpcore/csv_uploader_core_test.php');
include('phpcore/core_functions.php');
?>

