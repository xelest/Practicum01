<?php 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Reports</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <!--=============HEADERS========== -->
  <?php include ('headerinclude.php'); ?>
</head>
<body>
  <!--=============HEADERS========== -->
  <?php include ('headerinclude.php'); ?>
</head>
<body>
<!--=============Top nav========== -->
<?php include('nav_top.php'); ?>
<!--=============Sidenav========== -->
<?php include('nav_side.php'); ?>

<div class="main-content">
<h1>REPORTS GENERATION</h1>
<p></p>
  <!-- TAB MENU BAR --> 
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#1">1</a></li>
    <li><a data-toggle="tab" href="#2">SHS</a></li>
    <li><a data-toggle="tab" href="#3">COLLEGE</a></li>
    <li><a data-toggle="tab" href="#3">FACULTY</a></li>
  </ul>

<!-- Tab CONTENTS -->
  <div class="tab-content">
       <!--  --> 
      <div id="1" class="tab-pane fade in active">
      

        <div  class="parent-container-vertical">
          <div class="mycard" id="forprint">
            <table id="tapin_table" class="table table-striped table-bordered" style="width:100%">
              <thead>
                  <tr>     
                      <th>Log No</th>  
                      <th>ID No</th>
                      <th>Tap In</th>
                  </tr>
              </thead>
              <tbody>
                  <?php

            //config
            include_once('connection.php');
          
         
          $msql = "SELECT `log_no`, `id_no`, `inDate` FROM `tapin-logs`";
          //fetch
          $result1 = mysqli_query($con, $msql);

          //contents populate
          while ($row1 = mysqli_fetch_assoc($result1)) {
              echo "<tr>";
              foreach ($row1 as $field => $value) {
                  echo "<td>" . $value . "</td>";
              }
              echo "</tr>";
          }
            ?>      
              </tbody>
        </table>

          </div>
           <div class="mycard">
            <button class="btn btn-primary" onclick="PrintElem('forprint');"> print </button>
            <p> TEST </p>
            <p> TEST </p>
            <p> TEST </p>
            <p> TEST </p>
            <p> TEST </p>
            <p> TEST </p>
          </div>
        </div>


      </div>
 
      <!--  --> 
      <div id="2" class="tab-pane fade">

           <div  class="parent-container-horizontal">
          <div class="mycard">
           <p> TEST </p>
           <p> TEST </p>
           <p> TEST </p>
           <p> TEST </p>
           <p> TEST </p>
           <p> TEST </p>
           <p> TEST </p>
          </div>
           <div class="mycard">
            <p> TEST </p>
            <p> TEST </p>
            <p> TEST </p>
            <p> TEST </p>
            <p> TEST </p>
            <p> TEST </p>
            <p> TEST </p>
          </div>
        </div>

      </div>

      <!--  --> 
      <div id="3" class="tab-pane fade">
        
      </div>
</div>
<!-- END TABS --> 
</div>
<script>
function PrintElem(elem)
{
    var mywindow = window.open('', 'PRINT', 'height=400,width=600');

    mywindow.document.write('<html><head><title>' + document.title  + '</title>');
    mywindow.document.write('</head><body >');
    mywindow.document.write('<h1>' + document.title  + '</h1>');
    mywindow.document.write(document.getElementById(elem).innerHTML);
    mywindow.document.write('</body></html>');

    mywindow.document.close(); // necessary for IE >= 10
    mywindow.focus(); // necessary for IE >= 10*/

    mywindow.print();
    mywindow.close();

    return true;
}
</script>
<!--=============MODAL========== -->
<?php include('modal_logout.php'); ?>
<!--================= this script is for the collapsable=============-->
<script src="nav.js"></script>
</body>
</html>
