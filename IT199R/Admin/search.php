<?php 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Search</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!--=============HEADERS========== -->
  <?php include ('headerinclude.php'); ?>

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
<h1>Search</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem sint assumenda quae aliquid voluptatibus quia, ea, ad natus magni repellat earum, culpa iure tempore. Enim dolor eaque minima voluptas ducimus?</p>

<!--=============INPUT BOX========== -->
<div class="input-group">
  <span class="input-group-addon" id="basic-addon1" style="width:40%;">Student No.</span>
  <input type="text" class="form-control" placeholder="id number" aria-describedby="basic-addon1"></div>


<!--=============SELECT DROP DOWN========== -->
<select class="form-control" style="width:20%;">
  <option value="General User">Date</option>
  <option value="Service Provider">Department</option>
  <option value="Admin">ID No.</option>
</select> 

<!--=============TABLE PROFILE========== -->
<div class="table-responsive">  
 <div style="width:80%;">
  <table id="searchTable" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Student ID</th>
                <th>Name</th>
                <th>Department</th>
            </tr>
        </thead>
        <tbody> <!-- START PHP HERE -->
            <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
            </tr>       
        </tbody> <!-- END PHP HERE -->
        <tfoot>
            <tr>
              	<th>Student ID</th>
                <th>Name</th>
                <th>Department</th>
            </tr>
        </tfoot>
    </table>
  </div></div>
<!--=============end of table========== -->

<!--=============TABLE PROFILE========== -->
<div class="table-responsive">  
 <div style="width:80%;">
  <table id="searchTable" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Tap In Time</th>
                <th>Tap Out Time</th>
                <th>Date</th>
                <th>Student</th>
            </tr>
        </thead>
        <tbody> <!-- START PHP HERE -->
            <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>Edinburgh</td>
            </tr>       
        </tbody> <!-- END PHP HERE -->
        <tfoot>
            <tr>
                <th>Tap In Time</th>
                <th>Tap Out Time</th>
                <th>Date</th>
                <th>Student</th>
            </tr>
        </tfoot>
    </table>
  </div></div>
<!--=============end of table========== -->

</div>
<!--=============MODAL========== -->
<?php include('modal_logout.php'); ?>
<!--================= this script is for the collapsable=============-->
<script src="nav.js"></script>
</body>
</html>
