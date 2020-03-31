<?php
  require_once('connection.php');
  require_once('encryption.php');

  $_SESSION['uname'] = "";
  if(isset($_POST['submitauth']))
    {
      $username = mysqli_real_escape_string($con, $_POST['login-uname']);
      $pword = mysqli_real_escape_string($con,$_POST['login-pword']);
      $pword = passAjinomoto($pword);
      $getQRY = mysqli_query($con, "SELECT * FROM systemusers where `uname` = '$username' LIMIT 1");

      if(mysqli_num_rows($getQRY) > 0)
      {    

        while($row = mysqli_fetch_assoc($getQRY))
        {
            $_SESSION['uname'] = $row['uname'];
            $p = $row['pword'];
            $r = $row['urole'];
            $s = $row['status'];
        }

       if ($p == $pword)
        {
          if($s == 'A')
          {
                 if($r == 'SystemAdmin')
              {
                header("Location: Admin/index.php");
              }
          }
          else echo "Contact your System Administrator.";
          }
        else if($pword != $row['pword'])
        {
             echo "<script>alert('Invalid login details.');</script>";
        }

       }

      }

  ?>
