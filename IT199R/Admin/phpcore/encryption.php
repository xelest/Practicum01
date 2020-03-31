<?php

function passAjinomoto($keypass){
  //using a 2 layer encryption
  //first layer is md5 @ php
  //second layer is encrypted inside the database
  //using PASSWORD function
  //the latter is returned and rehashed as md5 inside php
    include_once('connection.php');
    $p1 = md5($keypass);
    $getQRY2 = mysqli_query($con, "SELECT PASSWORD('$p1') as PWORD;");
    while($rowx = $getQRY2->fetch_assoc()){
    $pwordx = $rowx['PWORD'];
    }
    $pwordx = md5($pwordx);
    return $pwordx;
  }





?>
