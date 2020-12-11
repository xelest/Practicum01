<?php 
  $con = mysqli_connect('localhost', 'root', 'mclccisn_gatekeeper', 'mclccisn_gatekeeper');
  
  //on page load
  $username = "";
  $uid = "";
  //default
  $pwd1 = "changeme";

  if (isset($_POST['pwdreset'])) {
  	$uid = $_POST['user_id'];
    $pwdN = passAjinomoto($pwd1);
    $role = $_POST['role'];
    $status = "deactivated";

      $sql_u = "SELECT * FROM accounts WHERE `account_id`='$uid'";
      $res_u = mysqli_query($con, $sql_u);
    
      if (mysqli_num_rows($res_u) > 0) 
      {
          $query = "UPDATE `user_account` SET `password`='$pwdN',`status`='$status' WHERE `id_no`='$uid'";
                    
           $results = mysqli_query($con, $query);
           //echo 'Saved!';
           echo "<script type='text/javascript'>alert('Request has been processed!');</script>";
           exit();
       
      }
      else
      {
        $name_error = "invalid request"; 
        echo "<script type='text/javascript'>alert('$name_error');</script>";
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