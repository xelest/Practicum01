<?php
$x1 = $_POST['reg-uname'];
$x3 = $_POST['reg-pword'];
$x0 = $_POST['reg_pword'];
$xuser = "admin";

include_once('connection.php');
include_once('phpcore/encryption.php');
	if($x1 == $x3){
			include_once('connection.php');
			include_once('phpcore/encryption.php');
			$status = 'A'; //default
			$urole = 'SystemAdmin'; // default
			$x2 = passAjinomoto($x1);

	$mqry = "INSERT INTO `systemusers`(`uname`,`pword`,`status`,`urole`) VALUES ($x1, $x2, $status, $urole)";

		}
		else
	echo "<script>alert('password missmatched');</script>";

?>