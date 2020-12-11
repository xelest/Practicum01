<?php /*require_once('server.php');

    if(!isset($_SESSION))
    {
        session_destroy();
        session_start();
    } */
?>
<html>
<head>
      <!-- css -->
      <link rel="stylesheet" href="css/dashboard.css">


      <!-- JQuery -->
      <script src="js/jquery-3.3.1.min.js"></script>

      <!-- JavaScript -->
      <script src="js/dashboard.js"></script>

      <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<!--- REGISTRATION FORM -->
<body onload="">

   <!--- TABLE -->


  <div class="tableaccounts" id="tableaccounts" style="margin: 1%; width: 93%; height: 72%; padding 3%; overflow-y:auto; ">
<h2   style="font-family: 'Segoe UI',Arial,sans-serif;
  font-size: 32px;
  text-shadow: 6px 6px #22272B;
  letter-spacing: 3px; margin-left: 20px;">PLANT MATRIX</h2>
  <input type="text" id="accountsearch" name="accountsearch" placeholder="...." onkeyup="myFunction()" style="width: 20%;">
  <table id="plant_matrix" style="width: 100%;  ">

    <tr>
     <!--- TABLE: HEADERS-->
      <th>Name</th>
      <th>Mx Ph</th>
      <th>Mn Ph</th>
      <th>Hum Mx</th>
      <th>Hum Mn</th>
      <th>Mx Tmp</th>
      <th>Mn Tmp</th>
      <th>Mx N</th>
      <th>Mn N</th>
      <th>Mx P</th>
      <th>Mn P</th>
      <th>Mx K</th>
      <th>Mn K</th>
      <th>Ca Mx</th>
      <th>Ca Mn</th>
      <th>Mx Mg</th>
      <th>Mn Mg</th>
      <th>Mx Zn</th>
      <th>Mn Zn</th>
    </tr>
    <!--- TABLE: CONTENTS -->
  <?php
//config
require_once('connects.php');
//query
$sqlQ = "SELECT * from plant_matrix_table ORDER BY plant_name ASC;";
//fetch
$result = mysqli_query($con, $sqlQ);

//contents populate
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    foreach ($row as $field => $value) {
        echo "<td>" . $value . "</td>";
    }
    echo "</tr>";
}
  ?></div>
</table></div></div>
<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("accountsearch");
  filter = input.value.toUpperCase();
  table = document.getElementById("plant_matrix");
  tr = table.getElementsByTagName("tr");

  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>
</body>
</html>
