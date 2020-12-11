<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CCIS | </title>

    <link href="assets/vendor/bootstrap4/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/master.css" rel="stylesheet">
    <style>
    body{
      background-color: #E2E2E2 !important;
      color: #2F333D !important;
    }

    .mcl-blue{
      background-color: #354664 !important;
      color: #CCCC !important;
    }

    .mcl-darkgray{
      background-color: #2F333D !important;
      color: #CCCC !important;
    }

    .mcl-a-dark{
      background-color: #2F333D !important;
      color: #CCCC !important;
    }
    .mcl-a-dark:hover{
      background-color: #195387 !important;
      color: #white !important;
    }

    .card {
        -webkit-box-shadow: 9px 9px 5px -11px rgba(0,0,0,0.65);
        -moz-box-shadow: 9px 9px 5px -11px rgba(0,0,0,0.65);
        box-shadow: 9px 9px 5px -11px rgba(0,0,0,0.65);
        color: #2F333D !important;
    }

    .mcl-green{
      background-color: #5D8C7D !important;
      color: #white !important;
    }

    .mcl-red{      
      background-color: #E57466 !important;
      color: #white !important;
    }

  </style>
</head>

<body class="txt-sm">
    <div class="wrapper">
        <div id="body" class="active">
            <div class="content">
                <div class="container-fluid">
                    <div class="page-title">
                        <h3>CSV UPLOADER</h3>
                    </div>



                    <div class="col-4">
                        <div class="card">
                                <div class="card-header mcl-red">File uploader for user information</div>
                                <div class="card-body">
                                    <form method="POST" enctype="multipart/form-data">
                                        <div class="form-row">
                                            <div class="input-group input-file">
                                              <input  style="width: 100%;" type="file" name="file" class="form-control" placeholder='Choose a file...' />
                                              <span class="input-group-btn">
                                            </span></div>

                                            
                                        </div>
                                        <div class="form-group">
                                           <input type="submit" name="submit" value="Import" class="btn btn-info btn-sm" />
                                    </form>
                                </div>
                            </div></div>

                    
                </div>
            </div>

        </div>

    </div>

    <script src="assets/vendor/jquery3/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap4/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/fontawesome5/js/solid.min.js"></script>
    <script src="assets/vendor/fontawesome5/js/fontawesome.min.js"></script>
    <script src="assets/js/script.js"></script>

</body>

</html>


<?php
$connect = mysqli_connect("localhost", "root", "", "mclccisn_gatekeeper");
if(isset($_POST["submit"]))
{
 if($_FILES['file']['name'])
 {
  $filename = explode(".", $_FILES['file']['name']);
  if($filename[1] == 'csv')
  {
   $handle = fopen($_FILES['file']['tmp_name'], "r");
   while($data = fgetcsv($handle))
   {
    //check data from database
    $item0 = mysqli_real_escape_string($connect, $data[0]);
     $result = mysql_query("SELECT `id_no` FROM `user_accounts` WHERE `id_no`='$item0'");
    if(mysql_num_rows($result) > 0)
    {
    echo "User exist";
    }
    else{ //if data exist do nothing, else insert this new data
     $item0 = mysqli_real_escape_string($connect, $data[0]);
     $item1 = mysqli_real_escape_string($connect, $data[1]);
     $item2 = mysqli_real_escape_string($connect, $data[2]);
     $item3 = mysqli_real_escape_string($connect, $data[3]);

      $query = "INSERT INTO `user_accounts`(id_no,name,accstatus,dept)
                VALUES('$item0','$item1','$item2','$item3')";
      //mysqli_query($connect, $query);
    }

   }
   fclose($handle);
   echo "<script>alert('Import done');</script>";
  }
 }
}
else{
}
?>