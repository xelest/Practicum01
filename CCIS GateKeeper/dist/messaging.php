<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CCIS | </title>

    <link href="assets/vendor/bootstrap4/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/master.css" rel="stylesheet">
    <link href="css/mycss.css" rel="stylesheet">
    <script src="js/script_date_time.js"></script>

    <!-- Datatable CSS -->
    <link href="assets/vendor/DataTables/datatables.min.css" rel="stylesheet">
    <!-- Datatable JS -->
     <script src="assets/vendor/DataTables/datatables.min.js"></script>


</head>

<body>
            <!-- Modal -->
            <div id="updateModal" class="modal fade" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
         <div class="col-md-12 col-lg-12" style="height: 100% !important; width: 100% !important; padding: 0px; margin: 0px;">
                                <div class="card shadow-lg border-0 rounded-lg">
                                    <div class="card-header mcl-blue"><h3 class="text-center font-weight-light my-3" style="color: white; letter-spacing: 5px;">NEW USER</h3></div>
                                    <div class="card-body mcl-blue">
                                        <form>
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputFirstName" autocomplete="off">First Name</label>
                                                        <input class="form-control py-4" id="inputFirstName" type="text" placeholder="Enter first name" />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputLastName" autocomplete="off">Last Name</label>
                                                        <input class="form-control py-4" id="inputLastName" type="text" placeholder="Enter last name" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="" autocomplete="off">Identification Number</label>
                                                        <input class="form-control py-4" id="" type="text" placeholder="Enter ID Number" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                            </div>
                                            <div class="form-group mt-4 mb-0"><a class="btn btn-success btn-block" href="">Register</a></div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center mcl-blue">
                                        <div class="small">Internal Systems | Gatekeeper</div>
                                    </div>
                                </div>
                            </div>

                </div>
            </div>

    <div class="wrapper">
        <div id="body" class="active">
            <div class="content">
                <div class="container-fluid">
                    <div class="page-title">
                        <div class="row">
                            <div class="col-7"><h3>Messaging </h3></div>

                            <div class="col-5"><div class="card-body" style="text-align: right;" ><span id="date_time">asd</span></div></div>
                        </div>
                    </div>



                    <div class="row">
                       <!--  <div class="col-4">

                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Recipient</span>
                      </div>
                      <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                    </div>

                      <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Sender&nbsp;&nbsp;&nbsp;</span>
                      </div>
                      <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                    </div>

                    <div class="input-group">
                      <div class="input-group-prepend">
                      </div>
                      <textarea class="form-control" aria-label="With textarea" rows="5" cols="20"></textarea>
                    </div>
                    <br>
                     <div class="row">
                      <div class="col-12" align="right">
                      <button class="btn btn-primary" align="right">SEND</button>
                      </div>
                     </div>
                         

             <!-- Table -->


                    <!--=============TABLE PROFILE========== -->
                    <div class="table-responsive">
                                    <table class="table table-bordered table-striped"  id='userTable' cellspacing="0">
                                        <thead>
                                              <tr>     
                                                  <th>Log No</th>  
                                                  <th>ID No</th>
                                                  <th>Tap In Date</th>
                                              </tr>
                                          </thead>
                                          <tbody>
                                              <?php

                                        //config
                                        include_once('connection.php');
                                      
                                     $msql = "SELECT `log_no`, `id_no`, `inDate` FROM `tapin_logs`";
                                      //fetch
                                      $result1 = mysqli_query($con, $msql);

                                      //contents populate
                                      while ($row1 = mysqli_fetch_assoc($result1)) {
                                          echo "<tr>";
                                          foreach ($row1 as $field => $value) {

                                              if ($value instanceof DateTime){
                                                $dt = $value;
                                                $dt = strtotime(str_replace(',', '', $dt));
                                                $d = date('F d Y',$dt);
                                                $t = date('h:i A',$dt);
                                                echo "<td>" . $d . "</td>";
                                                echo "<td>" . $t . "</td>";  
                                              }
                                              else{
                                                echo "<td>" . $value . "</td>";  
                                              }
                                              
                                          }
                                          echo "</tr>";
                                      }
                                        ?>      
                                          </tbody>
                                    </table>
                    </div>
                  
        

                    </div>
                </div>
            </div>

        </div>

    </div>


    <script src="assets/vendor/jquery3/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap4/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/fontawesome5/js/solid.min.js"></script>
    <script src="assets/vendor/fontawesome5/js/fontawesome.min.js"></script>
    <script src="assets/js/script.js"></script>
    <script type="text/javascript">window.onload = date_time('date_time');</script>

</body>

</html>