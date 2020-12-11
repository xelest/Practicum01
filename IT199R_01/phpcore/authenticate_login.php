<?php
  require_once('connection.php');
  require_once('encryption.php');

  if(isset($_POST['submitauth']))
    {
      $username = mysqli_real_escape_string($con, $_POST['login-uname']);
      $pword = mysqli_real_escape_string($con,$_POST['login-pword']);
      $pword = passAjinomoto($pword);
      $getQRY = mysqli_query($con, "SELECT * FROM systemusers where `uname` = '$username' and `pword` = '$pword' LIMIT 1");

      if(mysqli_num_rows($getQRY) > 0)
      {    
        while($row = mysqli_fetch_assoc($getQRY))
        {
            $_SESSION['uname'] = $row['uname'];
            $p = $row['pword'];
            $r = $row['urole'];
            $s = $row['status'];
        }

        if($s == 'A')
        {
          //ACTIVE
        }
        else echo "Contact your System Administrator.";

        if($r == 'SystemAdmin')
        {
          header("Location: Admin/home.php");
        }


      }
    }
  ?>
