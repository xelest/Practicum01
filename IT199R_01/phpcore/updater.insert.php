<?php 

require_once('connection.php');
require_once('encryption.php');


$pword = 1;

$sql = "UPDATE user_account SET pass_word='".$pword."'";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();







?>