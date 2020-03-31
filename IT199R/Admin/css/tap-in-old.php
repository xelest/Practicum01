<?php 
include_once 'connection.php';

if(isset($_POST['submit_tapin']))
{
  if(isset($_POST['tap_in']))
  {
    $user = $_POST['tap_in'];
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

                      $myqry = "INSERT INTO `tapin-logs`(`id_no`) VALUES ('$imgname')";
                      mysqli_query($con, $myqry);  

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
  
  
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="css/flexme.css">
    <!-- JQuery -->
      <script src="../js/jquery-3.3.1.min.js"></script>
    <style>
        
img {
  border-radius: 50%;
  width: 400px;
  height: 400px;
  -webkit-box-shadow: 5px 5px 5px 0px rgba(0,0,0,0.75);
-moz-box-shadow: 5px 5px 5px 0px rgba(0,0,0,0.75);
box-shadow: 5px 5px 5px 0px rgba(0,0,0,0.75);
}


body{
  margin: 0px;
  padding: 0px;
  height: 100%;
  width: 100%;
  overflow: hidden;
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

.parent-container-vertical {
  animation: slide-right 1.5s;
  margin-top:0%;
}

@keyframes slide-right {
  from {
    margin-left: -40%;
  }

  to {
    margin-left: -15%;
  }
}



  </style>
    <title>Login</title>
</head>

<body onload="onLoad()">

    <header class="main-header text-center" style="background: url('img/img-1.jpg') center center/cover;">
    <div class="header-about-overlay"></div>

    <div>
        <div class="header-about">
            <div class="container" style="margin-top: 5%;">
                <h1 class="header-top">Malayan Colleges Laguna</h1>
                <h6 class="header-top"> Malayan Colleges Laguna </h6>
                    
                    <div class="">
                    <section class="" style="position: absolute; float: right; margin-left: 45%; margin-top: 7%; z-index: 200;  opacity: 1; color: white; width: 25%">
                     <img class="slide-slow" id="img1" src="img/<?php echo $imgname;?>.jpg" alt="Avatar" style="width: 400px; height: 400px; border: solid 8px <?php echo $bordercolor; ?>">
                    </section>
                   </div>

                    <div class="parent-container-vertical" style="position: absolute; margin-top: 10%; margin-left: -15%;  z-index: 300">

                      <div id="card1" class="item-container" style="background: rgba(0, 0, 0, 0.4); color: white; height: 300px; width: 900px; ">
                        <div class="card-1"> 

                            <p><h1><?php echo $notif_msg_header;?></h1></p>
                            <br>
                            <p><h3><?php echo $notif_msg_details;?></h3></p>
                            <br>
                            <p><h2><?php echo $notif_msg_sender;?></h2></p>


                         </div> </div>

                     

                    </div>

            </div>
        </div>
    </div></header>

    

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/app.js"></script>

    <script> 
      function onLoad(){
         <?php echo $card1hide; ?>    
      }

    </script>
</body>

</html>