 <div class="table-responsive">
<table id="tapin_table" class="table table-striped table-bordered" style="width:100%">
              <thead>
                  <tr>     
                      <th>ID No</th>
                      <th>Tap In</th>
                  </tr>
              </thead>
              <tbody>
                  <?php

            //config
            include_once('connection.php');
          
         
          $msql = "SELECT  `id_no`, `inDate` FROM `tapin_logs` WHERE `inDate`>=(CURRENT_DATE()) order by `inDate` DESC LIMIT 4";
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