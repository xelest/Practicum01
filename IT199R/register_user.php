<?php
$x1 = "admin";
$x3 = "admin";
$x0 = "admin";
$xuser = "admin";

include_once('connection.php');
include_once('phpcore/encryption.php');
	if($x1 == $x3){
			include_once('connection.php');
			include_once('phpcore/encryption.php');
			$status = 'A'; //default
			$urole = 'SystemAdmin'; // default
			$x2 = "";

			// prepare and bind
			$stmt = $con->prepare("INSERT INTO `systemusers`(`uname`, `pword`, `status`, `urole`) VALUES(?,?,?,?)");
			$stmt->bind_param($x0, $x2, $status, $urole);

			// set parameters and execute
			$x0 = $xuser;
			$x2 = passAjinomoto($x1);
			$status = 'A'; //default
			$urole = 'User'; // default
			$stmt->execute();

		}
		else
	echo "<script>alert('password missmatched');</script>";

?>