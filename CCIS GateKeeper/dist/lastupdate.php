<?php
include 'connection.php';

$sqlz = "SELECT * FROM `reports_admin` WHERE Timein != 'ND' AND TimeOut = 'ND'";
$resultz = $con->query($sqlz);

				    if ($resultz->num_rows > 0) 
				    {

				    	while($rowz = $resultz->fetch_assoc()) 
				    	{
				        	$id_no = $rowz['id_no'];
				        	$date = $rowz['Date'];

				        	$ins = "UPDATE `reports_admin` SET `Duration`='ND', `Remarks`='TAPPED IN' WHERE id_no = '".$id_no."' AND Date = '".$date."'";

				        	if(mysqli_query($con, $ins) === TRUE)
							{
								
							}
							 else
							{

							}

				        }
				    }

$sqlz = "SELECT * FROM `reports_admin` WHERE Timein = 'ND' AND TimeOut = 'ND'";
$resultz = $con->query($sqlz);

				    if ($resultz->num_rows > 0) 
				    {

				    	while($rowz = $resultz->fetch_assoc()) 
				    	{
				        	$id_no = $rowz['id_no'];
				        	$date = $rowz['Date'];

				        	$ins = "UPDATE `reports_admin` SET `Duration`='ND', `Remarks`='ND' WHERE id_no = '".$id_no."' AND Date = '".$date."'";

				        	if(mysqli_query($con, $ins) === TRUE)
							{
								
							}
							 else
							{

							}

				        }
				    }	


$sqlz = "SELECT * FROM `reports_admin` WHERE Timein = 'ND' AND TimeOut != 'ND'";
$resultz = $con->query($sqlz);

				    if ($resultz->num_rows > 0) 
				    {

				    	while($rowz = $resultz->fetch_assoc()) 
				    	{
				        	$id_no = $rowz['id_no'];
				        	$date = $rowz['Date'];

				        	$ins = "UPDATE `reports_admin` SET `Duration`='ND', `Remarks`='NO TAP IN' WHERE id_no = '".$id_no."' AND Date = '".$date."'";

				        	if(mysqli_query($con, $ins) === TRUE)
							{
								
							}
							 else
							{

							}

				        }
				    }	


?>

