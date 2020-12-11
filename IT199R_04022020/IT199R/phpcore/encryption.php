<?php

function passAjinomoto($keypass){
  //using a 2 layer encryption
  //first layer is md5 @ php
  //second layer is encrypted inside the database
  //using PASSWORD function
  //the latter is returned and rehashed as md5 inside php
    include_once('settings/connection.php');
    $p1 = md5($keypass);
    $getQRY = mysqli_query($con, "SELECT PASSWORD('$p1') as PWORD;");
    while($row = $getQRY->fetch_assoc()){
    $pword = $row['PWORD'];
    }
    $pword = md5($pword);
    return $pword;
  }





?>
