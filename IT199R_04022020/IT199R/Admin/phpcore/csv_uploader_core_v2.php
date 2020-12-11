<?php
$conn = mysqli_connect("localhost", "root", "", "merged_db_prac1");

$counter = 0;
if (isset($_POST["submitcsv"])) {
    
    $fileName = $_FILES["file"]["tmp_name"];
    
    if ($_FILES["file"]["size"] > 0) {
        
        $file = fopen($fileName, "r");
        
        while (($column = fgetcsv($file, 10000, ",")) !== FALSE) {

                $res = mysqli_query($conn, "SELECT id_no FROM user_information WHERE id_no='$column[0]'");
                $row = mysqli_fetch_array($res);

                if (mysqli_num_rows($res) > 0) 
                { 
                    //do nothing
                echo "<br>";
                }
                else if(mysqli_num_rows($res) == null)
                { 
                    // this are new entry and does not exist in database
                    //echo "safe to insert this one ".$column[0]. " <br>"; 
                       $sqlInsert = "INSERT into `user_information`(`id_no`,`user_fname`,`user_lname`,`user_dept`,`user_status`,`user_position`)
                        values ('" . $column[0] . "','" . $column[1] . "','" . $column[2] . "','" . $column[3] . "','" . $column[4] . "', '" . $column[5] . "')";
                       $result = mysqli_query($conn, $sqlInsert);  

                       $counter++;

                } 
          }        
        }
         //echo $counter;
        // console.log("task done!");
        echo "<script>alert('Success! $counter records were created');</script>";
    }



    if (isset($_POST["submitcsv-guardian"])) {
    
    $fileName2 = $_FILES["file-guardian"]["tmp_name"];
    
    if ($_FILES["file-guardian"]["size"] > 0) {
        
        $file2 = fopen($fileName2, "r");
        
        while (($column = fgetcsv($file2, 10000, ",")) !== FALSE) {


            $res2 = mysqli_query($conn, "SELECT id_no FROM guardianinfo WHERE id_no='$column[3]'");
                $row2 = mysqli_fetch_array($res2);

                if (mysqli_num_rows($res) > 0) 
                { 
                    //do nothing
                echo "<br>";
                }

            else if(mysqli_num_rows($res2) == null) {
             $sqlInsert2 = "INSERT into `guardianinfo`(guardian_no,Gname,mobile_no,id_no,email)
                   values ('" . $column[0] . "','" . $column[1] . "','" . $column[2] . "','" . $column[3] . "','" . $column[4] . "')";
             $result2 = mysqli_query($conn, $sqlInsert2);
             $counter++;
            }
            
        
        }
    }

    echo "<script>alert('Success! $counter records were created');</script>";
}

?>