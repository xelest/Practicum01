
  <?php  
 $connect = mysqli_connect("localhost", "root", "", "mclccisn_gatekeeper");  
 if(!empty($_POST))  
 {  
      $output = '';  
      $message = '';  
      $rcpnt = mysqli_real_escape_string($connect, $_POST["rcpnt"]);  
      $sndr = mysqli_real_escape_string($connect, $_POST["sndr"]);  
      $msg2 = mysqli_real_escape_string($connect, $_POST["msg2"]);  
      $dt2 = mysqli_real_escape_string($connect, $_POST["dt2"]);  
     // $age = mysqli_real_escape_string($connect, $_POST["age"]);  
      if($_POST["imsg_no"] != '')  
      {  
           $query = "  
           UPDATE attnmessage   
           SET id_no='$rcpnt',   
           imsg_sender='$sndr',   
           imsg_details='$msg2',     
           WHERE imsg_no='".$_POST["imsg_no"]."'";  
           $message = 'Message Updated!';  
      }  
      else  
      {  
           $query = "  
           INSERT INTO tbl_employee(name, address, gender, designation, age)  
           VALUES('$name', '$address', '$gender', '$designation', '$age');  
           ";  
           $message = 'Data Inserted';  
      }  
      
      if(mysqli_query($connect, $query))  
      {  
           $output .= '<label class="text-success">' . $message . '</label>';  
           $select_query = "SELECT * FROM attnmessage";  
           $result = mysqli_query($connect, $select_query);  
           $output .= '  
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
           ';  
           while($row = mysqli_fetch_array($result))  
           {  
                $output .= '  
                     <tr>  
                          <td>' . $row["imsg_no"] . '</td>
                          <td>' . $row["imsg_details"] . '</td>
                          <td>' . $row["imsg_sender"] . '</td>
                          <td>' . $row["id_no"] . '</td>
                          <td>' . $row["imsg_Date"] . '</td>
                          <td>' . $row["imsg_Status"] . '</td>

                             <td><input type="button" name="edit" value="Edit" id="<?php echo $row["imsg_no"]; ?>" class="btn btn-info btn-xs edit_data" />  
                                    <input type="button" name="view" value="view" id="<?php echo $row["imsg_no"]; ?>" class="btn btn-info btn-xs view_data" /></td>  
                     </tr>  
                ';  
           }  
           $output .= '</tbody>
                          </table> '; 
      }  
      echo $output;
 }  
 ?>