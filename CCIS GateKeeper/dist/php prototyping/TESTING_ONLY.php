<?php

require '../connection.php';

$idno = "2015102434";
$duration = "9";
$timeout = "10:00:00";
$fname = "ivan";
$lname = "magbanua";
$NEWXdate = "2021/01/06";
$NEWXtime = "08:00:00";
$remarks = "ABSENT";

			


				        $myqryY = "INSERT INTO `reports_admin`(`id_no`,`Firstname`, `Lastname`, `Date`, `TimeIn`, `TimeOut`, `Duration`, `Remarks`)
				        		  VALUES ('".$idno."','".$fname."','".$lname."','".$NEWXdate."','".$NEWXtime."','".$timeout."','".$duration."','".$remarks."')";

				       if(mysqli_query($con, $myqryY) === TRUE)
				       {
				       		echo " | inserted | <br>";
				       }
				       else
				       {
				       		echo " | failed | <br>";
				       		echo 'Error: '. $con->error;
				       }


				       //get earliest time
        			$sqlz = "SELECT * FROM `tapout_logs` WHERE id_no='".$idno."' AND outDate BETWEEN '".$newfrdate. "' AND '".$newtodate."' ORDER BY inDate DESC LIMIT 1";
				    $resultz = $con->query($sqlz);

				    if ($resultz->num_rows > 0) 
				    {
				      	$tapout_exist = 1;
				      	echo "tapout | 1";
				    } 
				    else 
				    {
				    	$tapout_exist = 0;
				    	echo "tapout | 0";
				    }
				    echo " <hr> <br>";


?>