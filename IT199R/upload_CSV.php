<!DOCTYPE html>
<html>
<head>
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
  background: radial-gradient(ellipse at center,  rgba(81,112,173,1) 0%,rgba(53,84,147,1) 100%);
  border:1px solid #2d416d;
  box-shadow: 0 1px #5670A4 inset, 0 0 10px 5px rgba(0, 0, 0, 0.1);
  border-radius: 5px;
  width: 360px;
  height: 380px;
  margin: 60px auto;
  padding: 50px 30px 0 30px;
  text-align: center;
  
  h1 {
    margin: 0 0 50px 0;
    padding: 0;  
    font-size: 26px;
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

  & input[type="email"] {
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

</body>
</html>


<html>
 <head>
    <style type="text/css">
 
    
  </style>
 </head>
 <body>

		
		<section class="login-form-wrap">
  <h1>Facebook</h1>
  <form class="login-form" action="POST" enctype="multipart/form-data">
    <label>
      <input type="email" name="email" required placeholder="Email">
    </label>
    <label>
      <input type="password" name="password" required placeholder="Password">
    </label>
    <input type="submit" value="Login">
  </form>
  <h5><a href="#">Forgot password</a></h5>
</section>

</html>


<?php
require_once('settings/connection.php');
include('phpcore/uploader_minfo.php');
include('phpcore/uploader_guardianinfo.php');
include('phpcore/core_functions.php');
?>
