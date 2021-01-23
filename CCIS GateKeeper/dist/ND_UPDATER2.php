<?php

include 'connection.php';
$msql = "SELECT * from reports_admin";
$rz = $con->query($msql);

  
if ($rz->num_rows > 0) 
{						
	while($rwz = $rz->fetch_assoc()) 
	{	
		

	}	    					
} 
 else
{

}
?>