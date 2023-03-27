<?php

include_once 'functions.php';
if ( isset( $_POST['login'] ) ) {

    login();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link rel="stylesheet" href="style.css">
  <title>Assignment Module 8</title>
</head>
  <body>

  <legend class="page-title">Login Form</legend>
  
  <div class="container">
    <div class="child">
      <form method="post" action="login.php" enctype="multipart/form-data">

        <label for="email">Email:</label>
        <input type="text" name="email" id="email" ><br><br>

        <label for="password">Password:</label>
        <input type="password" name="password" id="password" ><br><br>

        <button type="submit" name="login">Submit</button><br>
        
      </form>
      <span class="new-here">New Here? <a href="register.php"> Signup Now!</a></span>
    </div>
  </div>

  </body>
</html>