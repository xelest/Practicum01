<?php

if(isset($_POST['submit_register']))
{
$uname = $_POST['reg-uname'];
$pword1 = $_POST['reg-pword'];
$pword2 = $_POST['reg-pword2'];

	if($pword1 == $pword2)
	{
			include_once('connection.php');
			include_once('phpcore/encryption.php');
			$status = 'A'; //default
			$urole = 'SystemAdmin'; // default
			$encpword = passAjinomoto($pword1);

	$mqry = "INSERT INTO `systemusers`(`uname`,`pword`,`status`,`urole`)
			VALUES ('$uname', '$encpword', '$status', '$urole')";

	mysqli_query($con, $mqry);		
    echo "<script>alert('user registered');</script>";
	}
	else
	echo "<script>alert('password missmatched');</script>";
}
?>