<?php
echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
echo "Today is " . date("l") . "<br>";;


date_default_timezone_set('Asia/Manila');
echo "The time is " . date("h") .":". date("i") .":". date("sa") ;


echo gethostname() . "<br>"; // may output e.g,: sandie

// Or, an option that also works before PHP 5.3
echo php_uname('n')  . "<br>"; // may output e.g,: sandie


// PHP code to get the MAC address of Client 
$MAC = exec('getmac'); 
  
// Storing 'getmac' value in $MAC 
$MAC = strtok($MAC, ' '); 
  
// Updating $MAC value using strtok function,  
// strtok is used to split the string into tokens 
// split character of strtok is defined as a space 
// because getmac returns transport name after 
// MAC address    
echo "MAC address of client is: $MAC"; 


?>