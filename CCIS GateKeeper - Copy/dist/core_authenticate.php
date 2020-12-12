<?php 

  $con = mysqli_connect('localhost', 'root', '', 'mclccisn_gatekeeper');
  
  //on page load
  $username = "";
  $pwd1 = "";
  $role = "";
  
  if (isset($_POST['authlogin'])) {
  	$username = $_POST['username'];
    $pwd1 = $_POST['pwd1'];
    $pwdN = passAjinomoto($pwd1);

      $sql_u = "SELECT * FROM user_account WHERE `username`='$username' AND `password`='$pwdN' LIMIT 1";
      $res_u = mysqli_query($con, $sql_u);
    
      //check if user exist, and password is correct
      //returns 0 or morethan 0
      if (mysqli_num_rows($res_u) > 0) 
      {
            //once found, extract the details
              while($extract = mysqli_fetch_array($res_u))
              {
                 $username = $extract['username'];
                 $role = $extract['role'];
                 $uid = $extract['account_id'];
                 $status = $extract['status'];
                  echo "<script type='text/javascript'>alert('extracted!');</script>";      
              }
          
                //check if existing account is active or not
                if($status === 'active')
                {
                    //check if active account is account admin
                    //redirect to account management page
                    if ($role === 'account_admin')
                    {
                      session_cache_expire(10);
                      session_start();
                      $_SESSION["role"] = $role;
                      $_SESSION["username"] = $username;
                      $_SESSION["status"] = $status;
                      header("Location: accounts.php");
                       echo "<script type='text/javascript'>alert('account_admin!');</script>";      
                    }
                    //check if active account is analyst
                    //redirect to main landing page, for soil analyst 
                    else if ($role === 'analyst')
                    {
                      session_cache_expire(10);
                      session_start();
                      $_SESSION["role"] = $role;
                      $_SESSION["username"] = $username;
                      $_SESSION["status"] = $status;
                      header("Location: ANALYST/index.php");
                       echo "<script type='text/javascript'>alert('analyst account!');</script>";      
                    }
                    else
                    {
                      //warning account has an invalid role assigned
                      echo "<script type='text/javascript'>alert('Invalid Login Details!');</script>";                    
                    }
                      exit();
               }
               else
               {
                    //warning account is not active, contact administrator
                    echo "<script type='text/javascript'>alert('Contact Administrator');</script>";
                    exit();
              }
                
      }
      else
      {
          //account does not exist
                  session_start();
                  unset($_SESSION['uname']);
                  session_unset();
                  session_destroy();
        //SQL UPDATE STATUS OF USER
            echo "<script type='text/javascript'>alert('Invalid Login Details!');</script>";
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