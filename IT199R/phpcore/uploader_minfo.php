<?php
$connect = mysqli_connect("localhost", "root", "", "it199r-1");
if(isset($_POST["submit"]))
{
 if($_FILES['file']['name'])
 {
  $filename = explode(".", $_FILES['file']['name']);
  if($filename[1] == 'csv')
  {
   $handle = fopen($_FILES['file']['tmp_name'], "r");
   while($data = fgetcsv($handle))
   {
    //check data from database
    $item0 = mysqli_real_escape_string($connect, $data[0]);
     $result = mysql_query("SELECT * FROM minfo WHERE id_no='$item0'");
    if(mysql_num_rows($result) > 0)
    {
    echo "User exist";
    }
    else{ //if data exist do nothing, else insert this new data
     $item0 = mysqli_real_escape_string($connect, $data[0]);
     $item1 = mysqli_real_escape_string($connect, $data[1]);
     $item2 = mysqli_real_escape_string($connect, $data[2]);
     $item3 = mysqli_real_escape_string($connect, $data[3]);

                /*$query = "INSERT INTO `minfo`(id_no,name,accstatus,dept)
                          VALUES('$item0','$item1','$item2','$item3')";
                mysqli_query($connect, $query);*/
    echo "User does not exist. inserted to database";
    }

   }
   fclose($handle);
   echo "<script>alert('Import done');</script>";
  }
 }
}
?>
