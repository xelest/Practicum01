<?php
$conn = mysqli_connect("localhost", "root", "", "covid19_db");

$counter = 0;
if (isset($_POST["submitcsv"])) {
    
    $fileName = $_FILES["file"]["tmp_name"];
    
    if ($_FILES["file"]["size"] > 0) {
        
        $file = fopen($fileName, "r");
        
        while (($column = fgetcsv($file, 10000, ",")) !== FALSE) {

                $res = mysqli_query($conn, "SELECT id_no FROM barangay_history WHERE id_no='$column[0]'");
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
                       $sqlInsert = "INSERT INTO `barangay_history`
                                    (`reference_date`, `city_municipality`, `barangay`, `new_positive_case`, `current_positive_case`, `current_deceased`, `current_recovered`, `total_positive_cases`, `current_pum`, `current_pui`) 
                                    VALUES ('" . $column[0] . "','" . $column[1] . "','" . $column[2] . "','" . $column[3] . "','" . $column[4] . "', '" . $column[5] . "', '" . $column[6] . "', '" . $column[7] . "', '" . $column[8] . "', '" . $column[9] . "')";
                       $result = mysqli_query($conn, $sqlInsert);  

                       $counter++;

                } 
          }        
        }
         //echo $counter;
        // console.log("task done!");
        echo "<script>alert('Success! $counter records were created');</script>";
    }




?>