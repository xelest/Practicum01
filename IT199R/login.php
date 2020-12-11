<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="customBS4.css">

  <style type="text/css">
        
        * {
  box-sizing: border-box; 
}

html {
  background: #E2E2E2;
}

body {
  background: #E2E2E2;
  margin:0;
  padding:0; 
  font-family: 'Lato', sans-serif;
}

.login-form-wrap {
  background: radial-gradient(ellipse at center,  #354664 0%, #354664 100%);
  border:1px solid #2d416d;
  box-shadow: 0 1px #5670A4 inset, 0 0 10px 5px rgba(0, 0, 0, 0.1);
  border-radius: 5px;
  padding: 50px 30px 0 30px;
  text-align: center; }
  
  h1 {
    margin: 0 0 20px 0;
    padding: 0;  
    font-size: 32px;
    color: #fff;
  }
  h3 {
    color: #fff;
  }

  h5 {
    margin-top: 40px;
  }
  h5 > a {
    font-size: 14px;
    color: #fff;
    text-decoration: none; 
    font-weight: 400;
  }
}

.login-form {

  & input[type="email"], input[type="password"],  {
    width: 100%; 
    border: 1px solid #314d89;
    outline: none;
    padding: 12px 20px;
    color: #afafaf;
    font-weight: 400;
    font-family: 'Lato', sans-serif;
    cursor:pointer;
  }

  & input[type="text"] {
    border-bottom: none; 
    border-radius: 4px 4px 0 0;
    padding-bottom: 13px;
    box-shadow: 0 -1px 0 #E0E0E0 inset,
          0 1px 2px rgba(0, 0, 0, 0.23) inset;
  }

  & input[type="password"] {
    border-top: none; 
    border-radius: 0 0 4px 4px;
    box-shadow: 0 -1px 2px rgba(0, 0, 0, 0.23) inset,
          0 1px 2px rgba(255, 255, 255, 0.1);
  }

  & input[type="submit"] {
    font-family: 'Lato', sans-serif;
    font-weight: 400;
    background: linear-gradient(to bottom,  rgba(224,224,224,1) 0%,rgba(206,206,206,1) 100%);
    display: block;
    margin: 20px auto 0 auto;
    width: 100%;
    border: none;
    border-radius: 3px;
    padding: 8px;
    font-size: 17px;
    color: #636363;
    text-shadow: 0 1px 0 rgba(255, 255, 255, 0.45);
    font-weight: 700;
    box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.17), 0 1px 0 rgba(255, 255, 255, 0.36) inset;
    
    &:hover {
      background: #DDD; 
    }
    
    &:active {
      padding-top: 9px;
      padding-bottom: 7px;
      background: #C9C9C9; 
    }
  }
}
  </style>
</head>
<body>
  <!--=============Top nav========== -->
  <nav class="navbar fixed-top navbar-dark bg-dark">
  <h3>College of Computer and Information Science</h3>
  </nav>


<div class="col-12" style="margin-top: 200px;">
  <div class="row">
  <div class="col-9 bg-blue">
  asd
</div>
<div class="col-2 login-form-wrap bg-blue">
  <h1> L O G I N</h1>
  <form class="login-form" action="" method="POST" >
     <div class="form-group">
    <input class="form-control" type="text" placeholder="Username" name="login-uname" autocomplete="off" required></div>

     <div class="form-group">
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="login-pword" autocomplete="off" required>
  </div>

    <div class="form-group">
    <button type="submit" class="btn btn-light btn-md btn-block" name="submitauth">Login</button></div>
    
  </form>
  <h5><a href="#"></a></h5>
</div> 
<div class="col-1"></div>
</div>
</div>
<!--=============Bottom nav========== -->
<nav class="navbar fixed-bottom navbar-dark bg-dark"><span class="footer-para"> <p style="color: #D2D4D9;">  </p> </span>
</nav>
</body>
</html>
<?php
include_once('phpcore/authenticate_login.php');
?>
