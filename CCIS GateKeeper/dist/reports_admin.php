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
                         <div class="col-3 col-md-4">
                                <div class="row">
                                    <div class="col-6" style="padding: 3px;">
                                        <input type="text" class="form-control datepicker-here" data-range="true" data-multiple-dates-separator="-" id="myTextbox" data-language="en" data-position="bottom left" aria-describedby="daterange" placeholder="Date Range">
                                    </div>
                                    <div class="col-4" style="padding: 3px;">
                                        <input type="text" class="form-control" data-range="false" data-multiple-dates-separator="-" id="myTextbox2" data-language="en" data-position="bottom left" aria-describedby="daterange" placeholder="ID No.">
                                    </div>
                                    <div class="col-2" style="padding: 3px;">
                                        <button href="http://localhost/IT199R_02/ccis%20gatekeeper/dist/print_report_admins.php" class="btn btn-primary" id="test" target="_blank">  <a class="nav-link" href="http://localhost/IT199R_02/ccis%20gatekeeper/dist/print_report_admins.php" target="_blank"><div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div> PRINT</a></button>
                                    </div>
  
                            </div>

                    </div>
                    <div class="col-5 col-md-4"></div>
                     <div class="col-5 col-md-4">
                        <div class="row">
                            <div class="col-6">
                            <select class="form-control">
                              <option>Default select</option>
                            </select></div>

                            <div class="col-6">
                            <select class="form-control">
                              <option>Default select</option>
                            </select></div>
                        </div>
                         </div> 
                </div>
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
                            HERNANDEZ, MARK ANTHONY
                        </div>
                        <div class="col-6">
                            DATE FR:
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            2016180067
                        </div>
                        <div class="col-6">
                            DATE TO:
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            POSITION
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
                        <td>John</td>
                        <td>Doe</td>
                        <td>December 22, 2020</td>
                        <td>09:00 PM</td>
                        <td>05:00 PM</td>
                        <td>8hrs</td>
                        <td>Late</td>
                      </tr>
                      <tr>
                        <td>Mary</td>
                        <td>Moe</td>
                        <td>December 22, 2020</td>
                        <td>09:00 PM</td>
                        <td>05:00 PM</td>
                        <td>7 hrs 30 mins</td>
                        <td>Late</td>
                      </tr>
                      <tr>
                        <td>July</td>
                        <td>Dooley</td>
                        <td>December 22, 2020</td>
                        <td>09:00 AM</td>
                        <td>05:00 PM</td>
                        <td>8hrs</td>
                        <td>Late</td>
                      </tr>
                         <tr>
                        <td>July</td>
                        <td>Dooley</td>
                        <td>December 22, 2020</td>
                        <td>09:00 AM</td>
                        <td>05:00 PM</td>
                        <td>8hrs</td>
                        <td>Late</td>
                      </tr>
                         <tr>
                        <td>July</td>
                        <td>Dooley</td>
                        <td>December 22, 2020</td>
                        <td>09:00 AM</td>
                        <td>05:00 PM</td>
                        <td>8hrs</td>
                        <td>Late</td>
                      </tr>
                         <tr>
                        <td>July</td>
                        <td>Dooley</td>
                        <td>December 22, 2020</td>
                        <td>09:00 AM</td>
                        <td>05:00 PM</td>
                        <td>8hrs</td>
                        <td>Late</td>
                      </tr>
                         <tr>
                        <td>July</td>
                        <td>Dooley</td>
                        <td>December 22, 2020</td>
                        <td>09:00 AM</td>
                        <td>05:00 PM</td>
                        <td>8hrs</td>
                        <td>Late</td>
                      </tr>
                         <tr>
                        <td>July</td>
                        <td>Dooley</td>
                        <td>December 22, 2020</td>
                        <td>09:00 AM</td>
                        <td>05:00 PM</td>
                        <td>8hrs</td>
                        <td>Late</td>
                      </tr>
                         <tr>
                        <td>July</td>
                        <td>Dooley</td>
                        <td>December 22, 2020</td>
                        <td>09:00 AM</td>
                        <td>05:00 PM</td>
                        <td>8hrs</td>
                        <td>Late</td>
                      </tr>
                         <tr>
                        <td>July</td>
                        <td>Dooley</td>
                        <td>December 22, 2020</td>
                        <td>09:00 AM</td>
                        <td>05:00 PM</td>
                        <td>8hrs</td>
                        <td>Late</td>
                      </tr>
                         <tr>
                        <td>July</td>
                        <td>Dooley</td>
                        <td>December 22, 2020</td>
                        <td>09:00 AM</td>
                        <td>05:00 PM</td>
                        <td>8hrs</td>
                        <td>Late</td>
                      </tr>
                              <tr>
                        <td>July</td>
                        <td>Dooley</td>
                        <td>December 22, 2020</td>
                        <td>09:00 AM</td>
                        <td>05:00 PM</td>
                        <td>8hrs</td>
                        <td>Late</td>
                      </tr>
                              <tr>
                        <td>July</td>
                        <td>Dooley</td>
                        <td>December 22, 2020</td>
                        <td>09:00 AM</td>
                        <td>05:00 PM</td>
                        <td>8hrs</td>
                        <td>Late</td>
                      </tr>
                              <tr>
                        <td>July</td>
                        <td>Dooley</td>
                        <td>December 22, 2020</td>
                        <td>09:00 AM</td>
                        <td>05:00 PM</td>
                        <td>8hrs</td>
                        <td>Late</td>
                      </tr>

                              <tr>
                        <td>July</td>
                        <td>Dooley</td>
                        <td>December 22, 2020</td>
                        <td>09:00 AM</td>
                        <td>05:00 PM</td>
                        <td>8hrs</td>
                        <td>Late</td>
                      </tr>
                  </div>
                              <tr>
                        <td>July</td>
                        <td>Dooley</td>
                        <td>December 22, 2020</td>
                        <td>09:00 AM</td>
                        <td>05:00 PM</td>
                        <td>8hrs</td>
                        <td>Late</td>
                      </tr>

                              <tr>
                        <td>July</td>
                        <td>Dooley</td>
                        <td>December 22, 2020</td>
                        <td>09:00 AM</td>
                        <td>05:00 PM</td>
                        <td>8hrs</td>
                        <td>Late</td>
                      </tr>

                              <tr>
                        <td>July</td>
                        <td>Dooley</td>
                        <td>December 22, 2020</td>
                        <td>09:00 AM</td>
                        <td>05:00 PM</td>
                        <td>8hrs</td>
                        <td>Late</td>
                      </tr>

                              <tr>
                        <td>July</td>
                        <td>Dooley</td>
                        <td>December 22, 2020</td>
                        <td>09:00 AM</td>
                        <td>05:00 PM</td>
                        <td>8hrs</td>
                        <td>Late</td>
                      </tr>

                              <tr>
                        <td>July</td>
                        <td>Dooley</td>
                        <td>December 22, 2020</td>
                        <td>09:00 AM</td>
                        <td>05:00 PM</td>
                        <td>8hrs</td>
                        <td>Late</td>
                      </tr>

                              <tr>
                        <td>July</td>
                        <td>Dooley</td>
                        <td>December 22, 2020</td>
                        <td>09:00 AM</td>
                        <td>05:00 PM</td>
                        <td>8hrs</td>
                        <td>Late</td>
                      </tr>

                              <tr>
                        <td>July</td>
                        <td>Dooley</td>
                        <td>December 22, 2020</td>
                        <td>09:00 AM</td>
                        <td>05:00 PM</td>
                        <td>8hrs</td>
                        <td>Late</td>
                      </tr>

                              <tr>
                        <td>July</td>
                        <td>Dooley</td>
                        <td>December 22, 2020</td>
                        <td>09:00 AM</td>
                        <td>05:00 PM</td>
                        <td>8hrs</td>
                        <td>Late</td>
                      </tr>

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
        
        $('#myTextbox').on('input', function() {
            var x = document.getElementById("myTextbox").value; 
            alert(x);
        });

        $('#myTextbox2').on('input', function() {
            var y = document.getElementById("myTextbox2").value;
        });

         
        function test()
        {
             var y = document.getElementById("myTextbox2").value; 
             alert(y);
        }

    </script>

</body>

</html>