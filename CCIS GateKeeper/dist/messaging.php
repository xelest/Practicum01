<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>CCIS | </title>

  <link href="assets/vendor/bootstrap4/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/DataTables/datatables.min.css" rel="stylesheet">
  <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet"
    crossorigin="anonymous" />
  <link href="assets/css/master.css" rel="stylesheet">
  <link href="css/mycss.css" rel="stylesheet">

  <script src="js/script_date_time.js"></script>

</head>

<body>
  <div class="wrapper">
    <div id="body" class="active">
      <div class="content">
        <div class="container-fluid">
          <div class="page-title">
            <div class="row">
              <div class="col-7">
                <h3>Messaging </h3>
              </div>

              <div class="col-5">
                <div class="card-body" style="text-align: right;"><span id="date_time"></span></div>
              </div>
            </div>
          </div>

          <!--=============TABLE PROFILE========== -->
          <div class="row">
            <div class="col-12">
              
              <div class="card mb-4">
                <div class="card-header">
                  <i class="fas fa-envelope mr-1"></i>
                  Messages
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-bordered table-striped" id="tapout_table" cellspacing="0">
                      <thead>
                        <tr>
                          <th>Msg ID</th>
                          <th>Message</th>
                          <th>Sender</th>
                          <th>Recipient</th>
                          <th>Date</th>
                          <th>Status</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                            //insert inside tbody tag
                            //databaseconnection
                            include_once('connection.php');
                            //mysql query       
                            $msql = "SELECT * from attnmessage order by `imsg_no` desc";
                            //execute mysql  query
                            $records = mysqli_query($con, $msql);
                            //start fetching data - iterration
                            while($data = mysqli_fetch_array($records))
                              {
                        ?>
                        <tr>
                          <td><?php echo $data['imsg_no']; ?></td>
                          <td><?php echo $data['imsg_details']; ?></td>
                          <td><?php echo $data['imsg_sender']; ?></td>
                          <td><?php echo $data['id_no']; ?></td>
                          <td><?php echo $data['imsg_Date']; ?></td>
                          <td><?php echo $data['imsg_Status']; ?></td>
                          <td>
                            <!----- button for actions ----->
                            <!----- assign each button an id where button id is equal to the id of the row ----->
                            <button data-toggle="modal" data-target="#msg" type="button" 
                            class="btn btn-warning btn-sm" 
                            id=<?php echo $data['imsg_no'];
                            $imsgno = $data['imsg_no']?> onclick="show(this.id)">edit</button>

                            <button type="button" class="btn btn-success btn-sm"
                            href="edit.php?id=<?php echo $data['imsg_no']; ?>"> resolved</button>
                            <!----- button for actions ----->
                          </td>
                        </tr>
                        <?php
                          //end of php 
                          //before ending tbody tag
                          }
                        ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--=============MODAL========== -->
          <!-- MESSAGE   MODAL FORM -->
        <div class="modal mcl_blue fade" id="msg" tabindex="-1" role="dialog" aria-labelledby="msg" aria-hidden="false">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            
              <div class="col-md-12 col-lg-12"
                style="height: 100% !important; width: 100% !important; padding: 0px; margin: 0px;">
                <div class="card shadow-lg border-0 rounded-lg">
                  <div class="card-header mcl-blue">
                    <h3 class="text-center font-weight-light my-3">EDIT</h3>
                  </div>
                  <div class="card-body mcl-blue">
                    <div class="form-group">
                      <div class="row">
                        <form method="POST" style="width: 100% !important;">
                          <div class="row">

                            <div class="col-lg-12 col-sm-12 col-md-12">
                              <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                  <span class="input-group-text" id="inputGroup-sizing-default" disabled id="textRecipient">Recipient</span>
                                </div>
                                <input type="text" class="form-control" aria-label="Default"
                                  aria-describedby="inputGroup-sizing-default">
                              </div>

                              <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                  <span class="input-group-text"
                                    id="inputGroup-sizing-default">Sender&nbsp;&nbsp;&nbsp;</span>
                                </div>
                                <input type="text" class="form-control" aria-label="Default"
                                  aria-describedby="inputGroup-sizing-default" disabled id="textSender">
                              </div>

                              <div class="input-group">
                                <div class="input-group-prepend">
                                </div>
                                <textarea class="form-control" aria-label="With textarea" rows="5" cols="20" id="editTextArea">

                                </textarea>
                              </div>


                              <br>
                              <div class="row">
                                <div class="col-12" align="right">
                                  <button class="btn btn-primary" align="right">SEND</button>
                                </div>
                              </div>
                            </div>


                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer text-center mcl-blue">
                    <div class="small">Internal Systems | Gatekeeper</div>
                  </div>
                </div>
              </div>


            </div>
          </div>
        </div>
        <!-- MODAL FORM -->
        <!-- MODAL FORM -->
          </div>

        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
  <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>


  <script src="assets/vendor/chartsjs/Chart.min.js"></script>
  <script src="assets/js/dashboard-charts.js"></script>
  <script src="assets/vendor/jquery3/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap4/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/fontawesome5/js/solid.min.js"></script>
  <script src="assets/vendor/fontawesome5/js/fontawesome.min.js"></script>
  <script src="assets/js/script.js"></script>
  <script src="assets/vendor/DataTables/datatables.min.js"></script>
  <script src="assets/demo/datatables-demo.js"></script>
  <script type="text/javascript">
    window.onload = date_time('date_time');
  </script>

  <script>
    $(document).ready(function () {
      $('#tapin_table').DataTable();
    });

    $(document).ready(function () {
      $('#tapout_table').DataTable();
    });


    function show(clicked_id) {

 

      document.getElementById("editTextArea").value =<?php echo $txtArea ;?>
      document.getElementByID("textRecipient").value =<?php echo $txtRecipient; ?>
      document.getElementByID("textSender").value =<?php echo $txtSender; ?>

    }
  </script>
</body>

</html>