<?php
include('settings/connection.php');

function dbINSERT($qry){

  $insert_this =  mysqli_real_escape_string($qry);
  mysqli_query($con, $insert_this);
  return $qry;
}

function dbUPDATE($qry){

  $update_this =  mysqli_real_escape_string($qry);
  mysqli_query($con, $insert_this);

}

function dbDELETE($qry){

  $delete_this =  mysqli_real_escape_string($qry);
  mysqli_query($con, $insert_this);

}

function prepSTMT($stmt){

	$newstmt = $stmt;
	return  $newstmt;
}


?>
