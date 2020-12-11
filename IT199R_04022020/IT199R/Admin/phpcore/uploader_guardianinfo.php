<?php
$connect = mysqli_connect("localhost", "root", "", "merged_db_prac1");
if(isset($_POST["submitg"]))
{
 if($_FILES['file']['name'])
 {
  $filename = explode(".", $_FILES['file']['name']);
  if($filename[1] == 'csv' && $filename[0] == 'guardianinfo')
  {

                  $handle = fopen($_FILES['file']['tmp_name'], "r");
                  while($gdata = fgetcsv($handle))
                  {
                    $items0 = mysqli_real_escape_string($connect, $gdata[0]);
                    $items1 = mysqli_real_escape_string($connect, $gdata[1]);
                    $items2 = mysqli_real_escape_string($connect, $gdata[2]);
                    $items3 = mysqli_real_escape_string($connect, $gdata[3]);
                    $items4 = mysqli_real_escape_string($connect, $gdata[4]);
                    $items5 = mysqli_real_escape_string($connect, $gdata[5]);

                    $query = "INSERT INTO `guardianinfo`(guardian_no,Gname,mobile_no,pword,stud_no,email)
                              VALUES('$items0','$items1','$items2','$items3','$items4','$items5')";
                  }
                    mysqli_query($connect, $query);
   }
   fclose($handle);
   echo "<script>alert('Import done');</script>";
   echo $filename[0];
  }
   else { echo "<script>alert('invalid file');</script>"; }
 }

?>
