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
 	$username = $_POST['username'];
 	$fname = $_POST['fname'];
 	$lname = $_POST['lname'];
    $pwd1 = $_POST['pwd1'];
    $pwd2 = $_POST['pwd2'];
    $pwdN = passAjinomoto($pwd1);
    $role = $_POST['role'];
    $status = "deactivated";

      $sql_u = "SELECT * FROM accounts WHERE username='$username'";
      $res_u = mysqli_query($con, $sql_u);
    
      if (mysqli_num_rows($res_u) > 0) 
      {
        $name_error = "Sorry... username already taken"; 
        echo "<script type='text/javascript'>alert('$name_error');</script>";
      }
      else
      {
        if ($pwd1 === $pwd2)
        {
           $query = "INSERT INTO accounts (`fname`, `lname`, `username`, `password`, `role`, `status`) 
                    VALUES ('$fname','$lname','$username', '$pwdN', '$role', '$status')";
                    
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
      $getQRY = mysqli_query($dbcon, "SELECT PASSWORD('$p1') as PWORD;");
      while($rowX = $getQRY->fetch_assoc()){
      $pwordX = $rowX['PWORD'];
      }
      $pwordX = md5($pwordX);
      return $pwordX;
    }



?>