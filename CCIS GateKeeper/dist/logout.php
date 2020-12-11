<?php
       unset($_SESSION['uname']);
        session_unset();
        session_destroy();
        //SQL UPDATE STATUS OF USER

header("location: pageredirect.php");
?>
