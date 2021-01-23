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
 	$uname = $_POST['uname'];
    $pwd1 = $_POST['pword'];
    $pwd2 = $_POST['pword2'];
    $pwdN = passAjinomoto($pwd1);
    $urole = $_POST['urole'];
    $status = "A";

      $sql_u = "SELECT * FROM accounts WHERE uname='$uname'";
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
           $query = "INSERT INTO systemusers (`uname`, `pword`, `status`, `urole`) 
                    VALUES ('".$uname."','$pwdN', 'A', '$urole')";
                    
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