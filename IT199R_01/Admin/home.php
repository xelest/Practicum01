<?php 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>DASBOARD</title>
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
<h1>DASHBOARD</h1>
<p></p>
  <!-- TAB MENU BAR --> 
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#1">Tody's Activities</a></li>
    <li><a data-toggle="tab" href="#2">2</a></li>
    <li><a data-toggle="tab" href="#3">3</a></li>
  </ul>

<!-- Tab CONTENTS -->
  <div class="tab-content">
       <!--  --> 
      <div id="1" class="tab-pane fade in active">
        <div  class="parent-container-horizontal">
          <div class="mycard" style="width: 60%; padding-left: 0px;">
           <!-- AREA CHART -->
            <div class="card card-primary">
              <div class="card-body">
                <div class="chart">
                  <canvas id="areaChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                </div>
              </div>
              <!-- /.card-body -->
            </div>

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

        <div  class="parent-container-horizontal">
          <div class="mycard">
            <p> FACULTY </p>
            <p> TEST </p>
            <p> TEST </p>
            <p> TEST </p>
          </div>
           <div class="mycard">
            <p> SHS </p>
            <p> TEST </p>
            <p> TEST </p>
            <p> TEST </p>
          </div>
           <div class="mycard">
            <p> COLLEGE </p>
            <p> TEST </p>
            <p> TEST </p>
            <p> TEST </p>
          </div>
           <div class="mycard">
            <p> ADMINS </p>
            <p> TEST </p>
            <p> TEST </p>
            <p> TEST </p>
          </div>
        </div>

        <div  class="parent-container-horizontal">
          <div class="mycard" style="flex-grow: 3;">
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

<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>

<script>
  $(function () {
    /* ChartJS
     * -------
     * Here we will create a few charts using ChartJS
     */

    //--------------
    //- AREA CHART -
    //--------------

    // Get context with jQuery - using jQuery's .get() method.
    var areaChartCanvas = $('#areaChart').get(0).getContext('2d')

    var areaChartData = {
      labels  : ['07:00-08:00','08:01-09:00', '09:01-10:00', '10:01-11:00', '11:01-12:00', '12:01-13:00', '13:01-14:00', 'July'],
      datasets: [
        {
          label               : 'Digital Goods',
          backgroundColor     : 'rgba(60,141,188,0.9)',
          borderColor         : 'rgba(60,141,188,0.8)',
          pointRadius          : false,
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : [28, 48, 40, 19, 86, 27, 90]
        },
        {
          label               : 'Electronics',
          backgroundColor     : 'rgba(210, 214, 222, 1)',
          borderColor         : 'rgba(210, 214, 222, 1)',
          pointRadius         : false,
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : [65, 59, 80, 81, 56, 55, 40]
        },
      ]
    }

    var areaChartOptions = {
      maintainAspectRatio : false,
      responsive : true,
      legend: {
        display: false
      },
      scales: {
        xAxes: [{
          gridLines : {
            display : false,
          }
        }],
        yAxes: [{
          gridLines : {
            display : false,
          }
        }]
      }
    }

    // This will get the first returned node in the jQuery collection.
    var areaChart       = new Chart(areaChartCanvas, { 
      type: 'line',
      data: areaChartData, 
      options: areaChartOptions
    })


  })
</script>

<!--=============MODAL========== -->
<?php include('modal_logout.php'); ?>
<!--================= this script is for the collapsable=============-->
<script src="nav.js"></script>
</body>
</html>
