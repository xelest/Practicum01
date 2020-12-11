<?php
include_once('connection.php');
include_once('phpcore/encryption.php');

	function auto_register_default($id_no)
	{

		$default_password = "changeme";
		$default_password = passAjinomoto($default_password);

		$mqry = INSERT INTO `user_accounts`(`user_name`, `pass_word`, `acc_status`) VALUES ('$id_no','$default_password','A');
		mysqli_query($con, $mqry);

	}


?>