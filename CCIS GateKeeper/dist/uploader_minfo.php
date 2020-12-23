<?php
$connect = mysqli_connect("localhost", "root", "", "it199r-1");

$cntr = 0;
if(isset($_POST["submit"]))
{
 if($_FILES['file']['name'])
 {
  $filename = explode(".", $_FILES['file']['name']);
  if($filename[1] == 'csv' && $filename[0] == 'minfo')
  {
   $handle = fopen($_FILES['file']['tmp_name'], "r");
   while($data = fgetcsv($handle))
   {
     $item0 = mysqli_real_escape_string($connect, $data[0]);
     $item1 = mysqli_real_escape_string($connect, $data[1]);
     $item2 = mysqli_real_escape_string($connect, $data[2]);
     $item3 = mysqli_real_escape_string($connect, $data[3]);

                $query = "INSERT INTO `minfo`(id_no,name,accstatus,dept)
                          VALUES('$item0','$item1','$item2','$item3')";
                 mysqli_query($connect, $query);

   }
   fclose($handle);
   echo "<script>alert('Import done |   |');</script>";
  }
  else
   echo "<script>alert('invalid file');</script>"; 
 }
}
?>
