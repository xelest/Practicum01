<?php 

  $con = mysqli_connect('localhost', 'root', '', 'mclccisn_gatekeeper');
  
  //on page load
  $username = "";
  $pwd1 = "";
  $role = "";
  $status = "";
  
  if (isset($_POST['authlogin'])) {
  	$username = $_POST['username'];
    $pwd1 = $_POST['pwd1'];
    $pwdN = passAjinomoto($pwd1);

      $sql_u = "SELECT * FROM systemusers WHERE `uname`='$username' AND `pword`='$pwdN' LIMIT 1";
      $res_u = mysqli_query($con, $sql_u);
    
      //check if user exist, and password is correct
      //returns 0 or morethan 0
      if (!empty($res_u)) 
      {
            //once found, extract the details
              while($extract = mysqli_fetch_array($res_u))
              {
                 $username = $extract['uname'];
                 $role = $extract['urole'];
                 $uid = $extract['uid'];
                 $status = $extract['status'];
                  //echo "<script type='text/javascript'>alert('extracted!');</script>";      
              }
          
                //check if existing account is active or not
                if($status === 'A')
                {
                    //check if active account is account admin
                    //redirect to account management page
                    if ($role === 'SystemAdmin')
                    {
                      session_cache_expire(10);
                      session_start();
                      $_SESSION["urole"] = $role;
                      $_SESSION["uname"] = $username;
                      $_SESSION["status"] = $status;
                      header("Location: gatekeeper.php");
                       echo "<script type='text/javascript'>alert('account_admin!');</script>";      
                    }
                    //check if active account is analyst
                    //redirect to main landing page, for soil analyst 
                    else if ($role === 'SystemAdmin')
                    {
                      session_cache_expire(10);
                      session_start();
                      $_SESSION["urole"] = $role;
                      $_SESSION["uname"] = $username;
                      $_SESSION["status"] = $status;
                      header("Location: gatekeeper.php");
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
                    
                    echo "<script>
                        alert('Invalid Login Details!');
                        window.location.href='login.html';
                        </script>";
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