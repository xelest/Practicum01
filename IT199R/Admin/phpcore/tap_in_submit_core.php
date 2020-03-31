<?php
include_once 'connection.php';

if(isset($_POST['submit_tapin']))
{
	if(isset($_POST['tap_in']))
	{
		$user = $_POST['tap_in'];
		$user_check_query = "SELECT * FROM `user_information` WHERE id_no='$user' LIMIT 1";
		$result = mysqli_query($con, $user_check_query);
		$user1 = mysqli_fetch_assoc($result);
		if ($user1) { // if user exists
		    $query = "INSERT INTO tapin_logs(id_no,inDesc)
                VALUES('$user', 'in')";
      		mysqli_query($con, $query);
      		$err = "has tapped in";
			echo "<script type='text/javascript'>alert('$err');</script>";

			  $bordercolor = "#555555";
 			 $imgname = $user;
 			 $notif_msg_header = "WELCOME";
 			 $notif_msg_details = "asdasd";
  			$notif_msg_sender = "asdsad";
  			$card1hide = "asdasd";
		  }
		  else
		{
			$err = "invalid";
			  $bordercolor = "#555555";
			  $imgname = "placeholder";
			  $notif_msg_header = "WELCOME";
			  $notif_msg_details = "";
			  $notif_msg_sender = "";
			  $card1hide = "";
		}
	}
}



?>