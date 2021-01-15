
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CCIS | </title>

    <link href="assets/vendor/bootstrap4/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/DataTables/datatables.min.css" rel="stylesheet">
    <link href="assets/css/master.css" rel="stylesheet">
    <link href="css/mycss.css" rel="stylesheet">

    <link href="assets/vendor/airdatepicker/dist/css/datepicker.min.css" rel="stylesheet">



    <?php
    //onload variables
    $name = "NO DATA";
    $id_no = "NO DATA";
    $position = "NO DATA";

    $from_date = "NO DATA";
    $to_date = "NO DATA";

    ?>


    
  <script src="js/script_date_time.js"></script>

</head>

<body>
    <div class="wrapper">
        <div id="body" class="active">
            <div class="content">
                <div class="container-fluid">
                    <div class="page-title">
                        <div class="row">
                            <div class="col-7"><h3>REPORTS </h3></div>

                            <div class="col-5"><div class="card-body" style="text-align: right;" ><span id="date_time"></span></div></div>
                        </div>
                    </div>
                    <div class="row">
                         <div class="col-5 col-md-5">
                                <div class="row style="align-items: center;">
                                    <div class="col-3" style="padding: 3px;">
                                    <form method="post" action="">
                                        <input type="text" class="form-control datepicker-here" data-range="false"   id="frdaterange" name="frdaterange" data-language="en" data-position="bottom left" aria-describedby="daterange" placeholder="Date Start" required>
                                    </div>

                                    <div class="col-3" style="padding: 3px;">

                                        <input type="text" class="form-control datepicker-here" data-range="false"   id="todaterange" name="todaterange" data-language="en" data-position="bottom left" aria-describedby="daterange" placeholder="Date End" required>
                                    </div>

                                    <div class="col-3" style="padding: 3px;">
                                       <input type="text" name="xidno" id="xidno"  class="form-control" required/>
                                    </div>

                                    <div class="col-3" style="padding: 3px;">
                                        <input type="submit" name="query" value="generate" class="btn btn-primary" />
                                    </div>

                                    <form>
                            </div>
                    </div>
                    <div class="col-2 col-md-2"></div>
                     <div class="col-5 col-md-5">
                        <div class="row" >
                            <div class="col-9" align="left" style="align-items: right;padding: 3px;">
                                Below is a preview of the generated report.<br>
                                Press print to save to pdf or print page.
                            </div>


                            <div class="col-3" style="padding: 3px;">
                            </div>

                        </div>
                         </div> 
                </div>
                <?php
                $connect = mysqli_connect("localhost", "root", "", "mclccisn_gatekeeper");

                         //$query = "SELECT * FROM attnmessage";  
                        // $result = mysqli_query($connect, $query);  


                        if(isset($_POST['query']))
                        {
                                      $frdaterange = $_POST['frdaterange'];
                                      $todaterange = $_POST['todaterange'];
                                      $xidno = $_POST['xidno'];;

                                    if($frdaterange > $todaterange)
                                    {
                                        echo "<script>alert('invalid date range FROM is greater than TO')</script>;";
                                    }
                                    else //VALID DATE RANGE
                                    {
                                        if(!empty($xidno)|| $xidno!=null)
                                            {
                                                $query = "SELECT * FROM user_account where `id_no`= '".$xidno."' AND `acc_type`='Admin' LIMIT 1";  
                                                $result = mysqli_query($connect, $query); 

                                                //VALID USER EXIST 
                                                 if(mysqli_num_rows($result) > 0)
                                                 {
                                                    echo "<script>alert('valid user admin')</script>;";

                                                        $name = $xidno;
                                                        $id_no = $xidno;
                                                        $position = $xidno;

                                                        $from_date = $frdaterange;
                                                        $to_date = $todaterange;

                                                        //get_duration($from_date, $to_date);
                                                        $fname = get_whofirstname($id_no);
                                                        $lname = get_wholastname($id_no);

                                                        echo "<script>alert('".$fname." is not a valid member of MCL')</script>;";
                                                        echo "<script>alert('".$lname." is not a valid member of MCL')</script>;";
                                                 }
                                                 else
                                                {
                                                    echo "<script>alert('".$xidno." is not a valid member of MCL')</script>;";
                                                }
                                            }
                                    }

                        }


                    ?>




                <div class="row">
                    <div class="container-fluid">
                    <div class="page-title">
                        <div class="row">
                            <div class="col-7"><h3> Report Generation </h3></div><div class="col-5"><div class="card-body" style="text-align: right;" ><span id="date_time"></span></div></div></div>
                    </div>


                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-bounding-box" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" d="M1.5 1a.5.5 0 0 0-.5.5v3a.5.5 0 0 1-1 0v-3A1.5 1.5 0 0 1 1.5 0h3a.5.5 0 0 1 0 1h-3zM11 .5a.5.5 0 0 1 .5-.5h3A1.5 1.5 0 0 1 16 1.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 1-.5-.5zM.5 11a.5.5 0 0 1 .5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 1 0 1h-3A1.5 1.5 0 0 1 0 14.5v-3a.5.5 0 0 1 .5-.5zm15 0a.5.5 0 0 1 .5.5v3a1.5 1.5 0 0 1-1.5 1.5h-3a.5.5 0 0 1 0-1h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 1 .5-.5z"/>
                      <path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                    </svg>
                   CCIS | Internal Systems | GateKeeper
                    <br>
                    <hr class="style1">
                    <div class="row">
                        <div class="col-6">
                            NAME&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;<?php echo $name?>
                        </div>
                        <div class="col-6">
                            DATE FR&nbsp;&nbsp;:&nbsp;&nbsp;<?php echo $from_date?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            ID NO&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;<?php echo $id_no?>
                        </div>
                        <div class="col-6">
                            DATE TO&nbsp;:&nbsp;&nbsp;<?php echo $to_date?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            POSITION&nbsp;:&nbsp;&nbsp;<?php echo $position?>
                        </div>
                        <div class="col-6">
                            
                        </div>
                    </div>

                    <hr class="style1">
                    <h6 style="text-align: center; letter-spacing: 1px"> P R O F I L E &nbsp;&nbsp;&nbsp; R E P O R T </h6>
                    <table class="table table-striped">
                    <thead>
                    <div class="page">
                      <tr>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>Date</th>
                        <th>Time In</th>
                        <th>Time Out</th>
                        <th>Duration</th>
                        <th>Remarks</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <?php
                        if(isset($_POST['xprocess']))
                        {
                        while($row = mysqli_fetch_array($result))  
                               {  
                               ?>  
                               <tr>  
                                    <td><?php echo $row["imsg_no"]; ?></td> 
                                    <td><?php echo $row["imsg_details"]; ?></td> 
                                    <td><?php echo $row["imsg_sender"]; ?></td> 
                                    <td><?php echo $row["id_no"]; ?></td> 
                                    <td><?php echo $row["imsg_Date"]; ?></td> 
                                    <td><?php echo $row["imsg_Status"]; ?></td> 
                                    <td>


                                      <input type="button" name="edit" value="Edit" id="<?php echo $row["imsg_no"]; ?>" class="btn btn-info btn-xs edit_data" />  


                                    </td>  
                               </tr>  
                               <?php 
                               } 
                               }  
                               ?>
                             </tbody>
                    <?PHP
                     if(!isset($_POST['xprocess']))
                        {
                        ?>
                       <td>ND</td>
                       <td>ND</td>
                       <td>ND</td>
                       <td>ND</td>
                       <td>ND</td>
                       <td>ND</td>
                       <td>ND</td>
                      </tr>
                    <?php
                     }
                       
                      ?>

                     </tbody>
                  </table>
                     <!-- CONTAINER X-->
                    <!-- ROW X-->
                    <div class="xfooter" style="margin-bottom: 0px;">
                    <hr class="style1">
                    <div class="row">
                        <div class="col-6">
                            <h6 style="font-size: 12px !important"> Copyright © CCIS College of Computing and Information Science 2020</h6>
                        </div>
                        <div class="col-6">
                           <h6 align="right" style="font-size: 12px !important"> Report generation requested by: </h6>
                        </div>
                    </div>
                     </div>
                    <!-- ROW X-->

                </div>

            </div>

        </div>

    </div>

                </div>
            </div>

        </div>

    </div>

    <script src="assets/vendor/chartsjs/Chart.min.js"></script>
    <script src="assets/js/dashboard-charts.js"></script>
    <script src="assets/vendor/jquery3/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap4/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/fontawesome5/js/solid.min.js"></script>
    <script src="assets/vendor/fontawesome5/js/fontawesome.min.js"></script>
    <script src="assets/js/script.js"></script>
    <script src="assets/js/initiate-datatables.js"></script>
    <script src="assets/vendor/DataTables/datatables.min.js"></script>
    <script type="text/javascript">window.onload = date_time('date_time');</script>


    <script src="assets/js/fullcalendar-script.js"></script>
        <script src="assets/vendor/airdatepicker/dist/js/datepicker.min.js"></script>
    <script src="assets/vendor/airdatepicker/dist/js/i18n/datepicker.en.js"></script>


    
    <script>
        function getInputValue(){
            // Selecting the input element and get its value 
            var inputVal = document.getElementById("daterange").value;
            
            // Displaying the value
            alert(inputVal);
        }
    </script>

</body>
</html>


<?php

function get_duration($stime,$etime)
{

    $xstime = $stime;
    $xetime = $etime;

    $xtime1 = new DateTime($xstime);
    $xtime2 = new DateTime($xetime);

    $dg = $xtime1->diff($xtime2);
    $dg = $dg->format('%d days');

    echo "<script>alert(".$dg.")</script>;";
}

function get_whofirstname($who){

require 'connection.php';

  $con = mysqli_connect($DB_HOST,$DB_USER,$DB_PASS,$DB_NAME);

  if(!$con)
  {
    die( "Unable to select database");
  }

    $sql2 = 'SELECT * FROM user_account WHERE id_no = '.$who.'';
    $result2 = $con->query($sql2);

    if ($result2->num_rows > 0) {
      // output data of each row
      while($row2 = $result2->fetch_assoc()) {
        $fname = $row2["firstname"];
      }
    } else {
      echo "0 results";
    }
 return $fname;
}

function get_wholastname($who){

require 'connection.php';

  $con = mysqli_connect($DB_HOST,$DB_USER,$DB_PASS,$DB_NAME);

  if(!$con)
  {
    die( "Unable to select database");
  }

    $sql2 = 'SELECT * FROM user_account WHERE id_no = '.$who.'';
    $result2 = $con->query($sql2);

    if ($result2->num_rows > 0) {
      // output data of each row
      while($row2 = $result2->fetch_assoc()) {
        $lname = $row2["lastname"];
      }
    } else {
      echo "0 results";
    }
 return $lname;
}



?>