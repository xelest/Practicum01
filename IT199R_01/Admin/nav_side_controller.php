<?php

session_start();

$n = $_SESSION('');

switch (n) 
{
    case "SystenAdmin":
        include('nav_side_sysadmin.php');
        break;
    case "Admin":
        include('nav_side_admin.php');
        break;
    case "User":
        include('nav_side_messenger.php');
        break;
    default:
        header("Location: logout.php");
}

?>