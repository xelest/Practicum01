<?php 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Tap Details</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
  <!--=============HEADERS========== -->
  <?php include ('headerinclude.php'); ?>
 <style> 
  
.wrapper {  
  width: 844px;
  height: 160px;
}
.margin-area {
  position: relative;
  text-align: center;
  font-family: "Trebuchet", sans-serif;
  font-size: 14px;
  margin: 0 20px;
}
.dot {
  height: 30px;
  width: 30px;
  position: absolute;
  background: #000;
  border-radius: 50%;
  top: 10px;
  color: #fff;
  line-height: 30px;
  z-index: 9999;
  &.one {
    left: 65px;
    background: #0C84D9;
  }
  &.two {
    left: 280px;
    background: #0C84D9;
  }
  &.three {
    left: 490px;
    background: #bbb;
    color: #ffd800;
  }
  &.four {
    left: 700px;
    background: #bbb;
    color: #ffd800;
  }
}
.progress-bar {
  position: absolute;
  height: 10px;
  width: 25%;
  top: 20px;
  left: 10%;
  background: #bbb;
  &.first {
    background: #0C84D9;
  }
  &.second {
    left: 37%;
  }
  &.third {
    left: 64%;
  }
}
.message {
  position: absolute;
  height: 60px;
  width: 170px;
  padding: 10px;
  margin: 0;
  left: -8px;
  top: 0;
  color: #000;
  &.message-1 {
    top: 40px;
    color: #000;
  }
  &.message-2 {
    left: 210px;
  }
  &.message-3 {
    left: 210px;
    color: #000;
  }
  &.message-4 {
    left: 210px;
  }
}
.status {
  position: absolute;
  width: 700px;
  left: -600px;
  text-align: center;
  padding: 20px;
  color: black;
  &.code {
    top: 70px;
  }
}
a {
  color: #0C84D9;
  text-decoration: none;
  font-weight: bold;
  &:hover, &:focus {
    text-decoration: underline;
  }
}



  </style>
   <script>
    $(document).ready(function() {
    $('#searchTable').DataTable();
    } );
  </script>

</head>
<body>
<!--=============Top nav========== -->
<?php include('nav_top.php'); ?>
<!--=============Sidenav========== -->
<?php include('nav_side.php'); ?>

<!--=============START MAIN CONTENT========== -->
<div class="main-content">
<h1>Taps</h1>
<p>This page is for lookups </p>

  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#create">OVERVIEW</a></li>
    <li><a data-toggle="tab" href="#update">IN</a></li>
    <li><a data-toggle="tab" href="#change">OUT</a></li>
  </ul>
<!-- DASHBOARD -->
<div class="tab-content">
      <div id="create" class="tab-pane fade in active">
          
      </div>

      <div id="update" class="tab-pane fade" style="width: 100%;">
         <?php include('phpcore/table_tapin.php'); ?>
      </div>
      <!--- TAP OUT -->
      <div id="change" class="tab-pane fade"  style="width: 100%;">
        <div class="table-responsive">  
         <div>
      </div>
</div>
<!--=============MODAL========== -->
<?php include('modal_logout.php'); ?>
<!--================= this script is for the collapsable=============-->
<script src="nav.js"></script>
  <script>
    $(document).ready(function() {
    $('#tapin_table').DataTable();
    } );

     $(document).ready(function() {
    $('#tapout_table').DataTable();
    } );

  </script>

</body>
</html>
