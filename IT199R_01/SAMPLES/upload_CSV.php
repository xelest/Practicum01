
<html>
 <head>
   <!-- css -->
   <link rel="stylesheet" href="css/flexme.css">
   <link rel="stylesheet" href="css/flex-input.css">
 </head>
 <body>

        <form method="post" enctype="multipart/form-data">
         <div>
          <label>MINFO Select CSV File:</label>
          <input type="file" name="file" />
          <br />
          <input type="submit" name="submit" value="Import" class="btn btn-info" />
         </div>
        </form>

        <form method="post" enctype="multipart/form-data">
         <div>
          <label>GuardianINFO Select CSV File:</label>
          <input type="file" name="file" />
          <br />
          <input type="submit" name="submitg" value="Import" class="btn btn-info" />
         </div>
        </form>

</html>


<?php
require_once('settings/connection.php');
include('phpcore/uploader_minfo.php');
include('phpcore/uploader_guardianinfo.php');
include('phpcore/core_functions.php');
?>
