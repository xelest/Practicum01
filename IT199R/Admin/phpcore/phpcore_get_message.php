<?php
require_once('connection.php');

	function phpcore_get_message($id_no)
	{

		 $getQRY = mysqli_query($con, "SELECT * FROM `attnmessage` where `id_no` = '$username' and `imsg_Status` = 'A' LIMIT 1");

		 $msg = $getQRY['imsg_details'];

		return $msg;;
	}


?>