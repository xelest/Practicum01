
<?php if(isset($_POST['submit_tapin']))
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