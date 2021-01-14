
 <?php  
 $connect = mysqli_connect("localhost", "root", "", "mclccisn_gatekeeper");  
 $query = "SELECT * FROM attnmessage";  
 $result = mysqli_query($connect, $query);  
 ?>  
 <!DOCTYPE html>  
 <html>  

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
                     <div id="employee_table">  
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
                                    <td><input type="button" name="edit" value="Edit" id="<?php echo $row["imsg_no"]; ?>" class="btn btn-info btn-xs edit_data" />  
                                    </td>  
                               </tr>  
                               <?php  
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
          <!--=============MODAL========== -->
        
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

    $(document).ready( function () {
  var table = $('#example').DataTable();
  });
</script>


      </body>  
 </html>  




 
 <div id="dataModal" class="modal fade">  
      <div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-header">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                     <h4 class="modal-title">Employee Details</h4>  
                </div>  
                <div class="modal-body" id="employee_detail">  
                </div>  
                <div class="modal-footer">  
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
                </div>  
           </div>  
      </div>  
 </div>  
 <div id="add_data_Modal" class="modal fade">  
      <div class="modal-dialog">  
           <div class="modal-content">  



                <div class="modal-header mcl-blue" align="center">  
                     <h4 class="modal-title" align="center">Edit & Update Message</h4>  
                </div>  
                <div class="modal-body mcl-blue">  
                     <form method="post" id="insert_form">
                          <label>Recipient</label>  
                          <input type="text" name="rcpnt" id="rcpnt" class="form-control" />  
                          <br />
                          <label>Sender</label>  
                                 <select name="sndr" id="sndr" class="form-control" >
                                                          <option value="CCIS Faculty">CCIS Faculty</option>
                                                          <option value="MITL Faculty">MITL Faculty</option>
                                                          <option value="CAS Faculty">CAS Faculty</option>
                                                          <option value="Clinic">Clinic</option>
                                                          <option value="Admission's Office">Admission's Office</option>
                                                          <option value="Registrar's Office">Registrar's Office</option>
                                                        </select>

                          <br /> 
                          <label>Message</label>  
                          <textarea name="msg2" id="msg2" class="form-control"></textarea>  
                          <br />  
                            
        
                          <label>Date - Time</label>  
                          <input type="text" name="dt2" id="dt2" class="form-control" disabled />  
                          <br />
                          <input type="hidden" name="imsg_no" id="imsg_no" />  
                          <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-success" align="right" />
                          <button type="button" class="btn btn-secondary" data-dismiss="modal" align="right">Close</button>
                     </form>  
                </div>  
                                                <div class="card-footer text-center mcl-blue">
                                        <div class="small">Internal Systems | Gatekeeper</div>
                                    </div>




           </div>  
      </div>  
 </div>  


 <script>  
 $(document).ready(function(){  
      $('#add').click(function(){  
           $('#insert').val("Insert");  
           $('#insert_form')[0].reset();  
      });  
      $(document).on('click', '.edit_data', function(){  
           var imsg_no = $(this).attr("id");  
           $.ajax({  
                url:"fetch_msg.php",  
                method:"POST",  
                data:{imsg_no:imsg_no},  
                dataType:"json",  
                success:function(data){
                     $('#rcpnt').val(data.id_no); 
                     $('#sndr').val(data.imsg_sender);  
                     $('#msg2').val(data.imsg_details); 
                     $('#dt2').val(data.imsg_Date);
                     $('#imsg_no').val(data.imsg_no);  
                     $('#insert').val("Update");  
                     $('#add_data_Modal').modal('show');  

                     alert($('#imsg_no').val(data.id));
                }  
           });  
      });  
      $('#insert_form').on("submit", function(event){  
           event.preventDefault();  
           if($('#rcpnt').val() == "")  
           {  
                alert("Recipient is required");  
           }  
           else if($('#sndr').val() == '')  
           {  
                alert("Sender is required");  
           }  
           else if($('#msg2').val() == '')  
           {  
                alert("Message is required");  
           }  
           else if($('#dt2').val() == '')  
           {  
                alert("Date is required");  
           }  
           else  
           {  
                $.ajax({  
                     url:"insert_msg.php",  
                     method:"POST",  
                     data:$('#insert_form').serialize(),  
                     beforeSend:function(){  
                          $('#insert').val("Inserting");  
                     },  
                     success:function(data){  
                          $('#insert_form')[0].reset();  
                          $('#add_data_Modal').modal('hide');  
                          $('#employee_table').html(data);  
                     }  
                });  
           }  
      });  
      $(document).on('click', '.view_data', function(){  
           var employee_id = $(this).attr("id");  
           if(employee_id != '')  
           {  
                $.ajax({  
                     url:"select.php",  
                     method:"POST",  
                     data:{employee_id:employee_id},  
                     success:function(data){  
                          $('#employee_detail').html(data);  
                          $('#dataModal').modal('show');  
                     }  
                });  
           }            
      });  
 });  
 </script>

