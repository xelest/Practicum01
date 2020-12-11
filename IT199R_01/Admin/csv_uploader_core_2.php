<?php
$connect = mysqli_connect("localhost", "root", "", "it199r-1");
if(isset($_POST["submitcsv2"]))
{
 if($_FILES['file2']['name'])
 {
  $filename = explode(".", $_FILES['file2']['name']);
  if($filename[1] == 'csv')
  {
   $handle = fopen($_FILES['file2']['tmp_name'], "r");
   while($data = fgetcsv($handle))
   {
     $itemb0 = mysqli_real_escape_string($connect, $data[0]);
     $itemb1 = mysqli_real_escape_string($connect, $data[1]);
     $itemb2 = mysqli_real_escape_string($connect, $data[2]);
     $itemb3 = mysqli_real_escape_string($connect, $data[3]);

                 $query = "INSERT INTO `guardianinfo`(`guardian_no`, `Gname`,`mobile_no`,`id_no`,` email`)
                          VALUES('$item4','$item5','$item6','$item7')";
                mysqli_query($connect, $query);

   }
   fclose($handle);
   echo "<script>alert('Import done');</script>";
  }
 }
}
?>
