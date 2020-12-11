<?php
  session_cache_expire(10);
  session_start();

  if($_SESSION['uname'] == ""){
    header('location: logout.php');
  }

    if(!isset($_SESSION['uname'])){
    header('location: logout.php');
  }
include_once('phpcore/connection.php');
?>