<?php
$connect = mysqli_connect("localhost", "root", "", "merged_db_prac1");
if(isset($_POST["submitcsv"]))
{
 if($_FILES['file']['name'])
 {
  $filename = explode(".", $_FILES['file']['name']);
  if($filename[1] == 'csv')
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

     $item4 = mysqli_real_escape_string($connect, $data[4]);
     $item5 = mysqli_real_escape_string($connect, $data[5]);
     $item6 = mysqli_real_escape_string($connect, $data[6]);
     $item7 = mysqli_real_escape_string($connect, $data[7]);
     $item8 = mysqli_real_escape_string($connect, $data[8]);

                 $query = "INSERT INTO `guardianinfo`(`guardian_no`, `Gname`,`mobile_no`,`id_no`,` email`)
                          VALUES('$item4','$item5','$item6','$item7', '$item8')";
                mysqli_query($connect, $query);

   }
   fclose($handle);
   echo "<script>alert('Import done');</script>";
  }
 }
 else
  echo "<script>alert('MUST BE A CSV FILE');</script>";
}
?>
