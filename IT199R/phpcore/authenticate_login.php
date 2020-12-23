<?php
  require_once('connection.php');
  require_once('encryption.php');

  if(isset($_POST['submitauth']))
    {
      $username = mysqli_real_escape_string($con, $_POST['login-uname']);
      $getQRY = mysqli_query($con, "SELECT * FROM systemusers where `uname` = '$username' LIMIT 1");

      if(mysqli_num_rows($getQRY) > 0)
      {
        $pword = mysqli_real_escape_string($con,$_POST['login-pword']);
        $pword = passAjinomoto($pword);

        while($row = mysqli_fetch_assoc($getQRY)){
            $p = $row['pword'];
            $r = $row['urole'];
            $s = $$row['status'];
        }

        if($s == 'A'){

          if($pword == $p)
          {
            if($r == 'SystemAdmin')
            {
              echo "<script>alert('admin accepted');</script>";
              header("Location: ../Admin/home.php");
            }
            else if ($r == 'user')
            {
              echo "<script>alert('user accepted');</script>";
              //redirect to page
            }
            else
            {
              echo "<script>alert('no role');</script>";
            }

          }
          else
          echo "<script>alert('invalid login');</script>";
        }
         else
          echo "<script>alert('Please Contact System Admin');</script>";

      }
      else
      echo "<script>alert('invalid login');</script>";
    }
  ?>
