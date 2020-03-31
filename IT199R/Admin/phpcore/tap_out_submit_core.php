<?php
include_once 'connection.php';
if(isset($_POST['submit_tapout']))
{
	if(isset($_POST['tap_out']))
	{
		$user = $_POST['tap_out'];
		 $user_check_query = "SELECT * FROM `user_information` WHERE id_no='$user' LIMIT 1";
		$result = mysqli_query($con, $user_check_query);
		$user1 = mysqli_fetch_assoc($result);
		if ($user1) { // if user exists
		    $query = "INSERT INTO tapin_logs(id_no,inDesc)
                VALUES('$user', 'out')";
      		mysqli_query($con, $query);
      		$err = "has tapped out";
			echo "<script type='text/javascript'>alert('$err');</script>";
		  }
		else
		{
			$err = "invalid";
			echo "<script type='text/javascript'>alert('$err');</script>";
		}
		
	}
}
?>