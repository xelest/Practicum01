<?php 
  //$con = mysqli_connect('localhost', 'root', '', 'soilanalysisdb');
  //online
  $con = mysqli_connect('localhost', 'root', '', 'mclccisn_gatekeeper');

  //on page load
  $fname = "";
  $lname = "";
  $username = "";
  $pwd1 = "";
  $pwd2 = "";
  $pwdN = "";
  $role = "";


 if (isset($_POST['register'])) {
<<<<<<< HEAD
 	$uname = $_POST['uname'];
    $pwd1 = $_POST['pword'];
    $pwd2 = $_POST['pword2'];
    $dept = $_POST['department'];
=======
 	$username = $_POST['username'];
 	$fname = $_POST['fname'];
 	$lname = $_POST['lname'];
    $pwd1 = $_POST['pwd1'];
    $pwd2 = $_POST['pwd2'];
>>>>>>> parent of 331897b... AFTER PRESENTATION
    $pwdN = passAjinomoto($pwd1);
    $role = $_POST['role'];
    $status = "deactivated";

<<<<<<< HEAD
      $sql_u = "SELECT * FROM systemusers WHERE uname='$uname'";
=======
      $sql_u = "SELECT * FROM accounts WHERE username='$username'";
>>>>>>> parent of 331897b... AFTER PRESENTATION
      $res_u = mysqli_query($con, $sql_u);
    
      if (mysqli_num_rows($res_u) > 0) 
      {
        if(strtoupper($uname)=='ADMIN')
        {
           $name_error = "NOT ALLOWED TO USE SYSTEM ADMIN AS ACCOUNT NAMES"; 
        echo "<script type='text/javascript'>alert('$name_error');</script>";
        }
        else
        {
          $name_error = "Sorry... username already taken"; 
        echo "<script type='text/javascript'>alert('$name_error');</script>";
        }
        
      }
      else
      {
        if ($pwd1 === $pwd2)
        {
<<<<<<< HEAD
           $query = "INSERT INTO systemusers (`uname`, `pword`, `status`, `urole`,`department`) 
                    VALUES ('".$uname."','".$pwdN."', 'A', '".$urole."','".$dept."')";
=======
           $query = "INSERT INTO accounts (`fname`, `lname`, `username`, `password`, `role`, `status`) 
                    VALUES ('$fname','$lname','$username', '$pwdN', '$role', '$status')";
>>>>>>> parent of 331897b... AFTER PRESENTATION
                    
           $results = mysqli_query($con, $query);
           echo "<script type='text/javascript'>alert('Record created. Success!');</script>";
           
           exit();
        }
        else
        {
            echo "<script type='text/javascript'>alert('missmatched password!');</script>";
        }
  	}
  }

  function passAjinomoto($keypass){
      $dbcon = mysqli_connect('localhost', 'root', '', 'mclccisn_gatekeeper');
      $p2 = $keypass;
      $p1 = md5($p2);
      $getQRY = mysqli_query($dbcon, "SELECT PASSWORD('$p1') as PWORD;"); // 1st layer md5
      while($rowX = $getQRY->fetch_assoc()){
      $pwordX = $rowX['PWORD'];
      }
      $pwordX = md5($pwordX); // 2nd layer md5
      return $pwordX;
    }



?>