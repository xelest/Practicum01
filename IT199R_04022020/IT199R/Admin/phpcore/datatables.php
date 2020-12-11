<?php 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>DATA TABLES</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

<?php include ('headerinclude.php') ?>

  
  <script>
    $(document).ready(function() {
    $('#example').DataTable();
    } );
  </script>
  
</head>
<body>
 <div class="table-responsive">  
 <div style="width:80%;">
  <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </thead>
        <tbody> <!-- START PHP HERE -->
            <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>2011/04/25</td>
                <td>$320,800</td>
            </tr>       
        </tbody> <!-- END PHP HERE -->
        <tfoot>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </tfoot>
    </table>
  </div></div>

</body>
</html>
