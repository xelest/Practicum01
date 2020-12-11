<div class="tab-content">
      <div id="create" class="tab-pane fade in active" style="width: 30%;">
        <h3>Create</h3>
        <p>Create new message</p>
        <form method="POST" action="#">
        <div class="parent-container-horizontal">

        <div class="item-container">
        <label for="exampleInputEmail1">Sender</label></div>
         <div class="item-container">
        <select id="" name="msg_sender" style="width: 100%; height: 35px;">
			  <option value="CCIS">CCIS Faculty</option>
			  <option value="MITL">MITL Faculty</option>
			  <option value="Admission">Admission's Office</option>
			  <option value="CGC">CGC - Center for Guidance and Counseling</option>
			  <option value="CSA">CSA - Center for Student Advising</option>
			</select>
        </div> <br>


        <div class="item-container">
        <label for="exampleInputEmail1">ID No.</label>
        <input type="text" class="form-control" id="usr" name="msg_id_no" required="required">
        </div> <br>

        <div class="item-container">
        <label for="exampleInputEmail1">Message</label>
		<textarea id="w3mission" rows="5" cols="69" name="msg_details" required="required" style="width: 100%;"></textarea>
        </div> <br>

        <div class="item-container">
	     <button type="submit" class="btn btn-primary" name="create_msg"> Create </button>
        </div>
        </div>
    	</form>


       
      </div>

      <div id="update" class="tab-pane fade">
        <h3> History </h3>
        <p>A - active. messages is waiting for interaction.</p>
        <p>R -  read. closed messages. </p>
        <div class="table-responsive">
        <table id="myTable" class="table table-hover">
              <thead>
                  <tr>     
                  	  <th>Message ID</th>  
                      <th>Id Number</th>
                      <th>Message Content</th>
                      <th>Sender</th>
                      <th>Date Created</th>
                      <th>Status</th>
                      <th>Action</th>
                  </tr>
              </thead>
              <tbody>
                  <?php

            //config
            include_once('connection.php');
          
         
          $msql = "SELECT `imsg_no`,  `id_no`, `imsg_details`, `imsg_sender`, `imsg_Date`, `imsg_Status` FROM `attnmessage`";
          //fetch
          $result1 = mysqli_query($con, $msql);

          //contents populate
          while ($row1 = mysqli_fetch_assoc($result1)) {
              echo "<tr>";
              foreach ($row1 as $field => $value) {
                  echo "<td>" . $value . "</td>";
              }
               echo "<td> <button type='submit' class='btn btn-primary' data-toggle='modal' data-target='#center_modal_form'> Create </button></td>";
              echo "</tr>";
          }
            ?>      
              </tbody>
        </table>
        
      </div></div>

      

    
  </div>