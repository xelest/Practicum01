<?php 
include_once 'connection.php';

if(isset($_POST['submit_tapout']))
{
  if(isset($_POST['tapout']))
  {
    $user = $_POST['tapout'];
    $res = mysqli_query($con, "SELECT * FROM user_information WHERE id_no='$user' LIMIT 1");
    $row = mysqli_fetch_array($res);

                if (mysqli_num_rows($res) > 0) // user exist
                { 
                    if($row['user_status'] == 'A'){
                      $imgname = $row['id_no'];
                      $bordercolor = "#83B336";
                      $res2 = mysqli_query($con, "SELECT * FROM `attnmessage` WHERE `id_no`='$imgname' and `imsg_Status` = 'A' LIMIT 1");
                      if ($res2->num_rows > 0) {
                          // output data of each row
                          while($row2 = $res2->fetch_assoc()) {
                             $notif_msg_header = "WELCOME";
                             $notif_msg_details = $row2['imsg_details'];
                             $notif_msg_sender = $row2['imsg_sender'];

                                }
                            } else {
                              $notif_msg_header = "WELCOME";
                              $notif_msg_details = "";
                              $notif_msg_sender = "";
                              $card1hide = "$('#card1').hide();";
                            }
                    }
                    else
                    {
                       $imgname = $row['id_no'];
                       $bordercolor = "##FFFF00";
                       $notif_msg_header = "Welcome Back";
                      $notif_msg_details = "You are not currently enrolled.";
                      $notif_msg_sender = "";
                      $card1hide = "";
                    }

                      $myqry = "INSERT INTO `tapout_logs`(`id_no`) VALUES ('$imgname')";
                      mysqli_query($con, $myqry);  
                      echo "<script> window.open( 
                            '', '_blank');                
                  </script> ";

                    }
                else if(mysqli_num_rows($res) == null) //invalid user
                { 
                    // this are new entry and does not exist in database
                  $bordercolor = "#555555";
                  $imgname = "placeholder";
                  $notif_msg_header = "INVALID";
                  $notif_msg_details = "Please report to the Security Office";
                  $notif_msg_sender = "Welcome Guest";
                  $card1hide = "";
                }          
    }
  }
  else
  {
                  $bordercolor = "#555555";
                  $imgname = "placeholder";
                  $notif_msg_header = "INVALID";
                  $notif_msg_details = "Please report to the Security Office";
                  $notif_msg_sender = "Welcome Guest";
                  $card1hide = "";
  }
  
  
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!-- JQuery -->

    <link href="assets/vendor/bootstrap4/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/DataTables/datatables.min.css" rel="stylesheet">
    <link href="assets/css/master.css" rel="stylesheet">
    <link href="css/mycss.css" rel="stylesheet">
    <script src="js/script_date_time.js"></script>

    <link rel="stylesheet" href="css/loading-bar.min.css">
    <script src="css/loading-bar.min.js"></script>
    
    <style>



body, html {
  height: 100%;
  width: 100%;
  margin: 0;
  padding: 0;
  overflow: hidden;
}

.bg-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(6, 11, 61, 0.600);
}

.bg {
  /* The image used */
  background-image: url("img/img-1.jpg");

  /* Full height */
  height: 100%;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

img.slide-slow {
  animation: slide-slow 1.5s;
  margin-top:0%;
}

@keyframes slide-slow {
  from {
    margin-left: 100%;
  }

  to {
    margin-left: 0%;
  }
}

img {
  border-radius: 50%;
  width: 400px;
  height: 400px;
  -webkit-box-shadow: 5px 5px 5px 0px rgba(0,0,0,0.75);
-moz-box-shadow: 5px 5px 5px 0px rgba(0,0,0,0.75);
box-shadow: 5px 5px 5px 0px rgba(0,0,0,0.75);
}

#card1 {
  animation: slide-right 1.5s;
  margin-top:0%;
  border-radius: 4px;
  padding: 5px;
}

@keyframes slide-right {
  from {
    margin-left: -50%;
  }

  to {
    margin-left: 0%;
  }
}

.xheader{
  width: 100%;
  border-style: solid;
  border-width: 1px;
  color: white;
  border-color: #6C6A69;

}
.xcontent{
  width: 100%;
   border-style: solid;
  border-width: 1px;
  color: white;
border-color: #6C6A69;
  height: 50%;
}

.xfooter{
  width: 100%;
  border-color: #6C6A69;
  color: white;
}




    </style>
</head>
<!-- -->
<body onload="onLoad()">
<!-- -->
<div class="bg"></div>
<div class="bg-overlay"></div>
<div class="parent-container-vertical" style="position: absolute; top: 0; margin: 0; height: 100%; width: 100%; overflow: hidden;">
<div class="myBar label-center" style="position: absolute; float: right; right: 10px; top: 10px; color: white;" data-value="0"></div>
        <div id="titlemcl" class="item-container" style="font-family: 'Noto Sans', sans-serif; color: white; border-style: none; margin-top: 5%;">
        <h1 style="text-align: center;margin: 0; padding: 0; font-size: 2.5rem;letter-spacing: 1px;"> MALAYAN COLLEGES LAGUNA</h1>
        <h4 style="text-align: center;margin: 0; padding: 0; letter-spacing: 1px;"> Malayan Colleges Laguna</h4>
        </div>


<div class="row"><div class="card-body"></div></div>
<div class="row"><div class="card-body"></div></div>


<div class="row">
  <div class="card-body">
    <div class="row">
      <div class="col-1"></div>
      <div class="col-1"></div> 
      <div class="col-4" style="align-items: center;">
          <div class="row"><div class="card-body"></div></div>
          <div class="row"><div class="card-body"></div></div>
          <img class="slide-right" id="img1" src="img/<?php echo $imgname;?>.jpg"  alt="Avatar" style="width: 375px; height: 375px; border: solid 8px <?php echo $bordercolor; ?>">
        </div>   

                <div class="col-5" style="align-items: center;">
          <div class="card" style="background: rgba(0, 0, 0, 0.4);">
            <div class="card-header" style="border-color: white; color: cyan;">asdasd</div>
            <div class="card-body">
              
              <div class="slide-slow" id="card1" style="height: 50vh; color: white;"></div>
            </div>
          </div>
        </div>

        <div class="col-1"></div>
    </div>
  </div>
</div>
 

<!-- -->
<script>
  function onLoad(){
  var bar = new ldBar(".myBar", {
   "stroke": 'green',
   "stroke-width": 3,
   "preset": "circle",
  });

bar.set(
  100,     /* target value. */
  true   /* enable animation. default is true */
);
}
</script>

    <script src="assets/vendor/chartsjs/Chart.min.js"></script>
    <script src="assets/js/dashboard-charts.js"></script>
    <script src="assets/vendor/jquery3/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap4/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/fontawesome5/js/solid.min.js"></script>
    <script src="assets/vendor/fontawesome5/js/fontawesome.min.js"></script>
    <script src="assets/js/script.js"></script>
    <script src="assets/js/initiate-datatables.js"></script>
    <script src="assets/vendor/DataTables/datatables.min.js"></script>
    <script type="text/javascript">window.onload = date_time('date_time');</script>

</body>
</html>
