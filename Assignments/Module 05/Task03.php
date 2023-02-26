<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="style.css">

  <title>Assignment Module 05 - Task 03</title>
</head>
<body>

<?php
include_once 'controller.php';

?>

<legend class="page-title">Task 03: Get data from HTML form using PHP  $_POST superglobal variable and show them</legend>

<div class="container">

  <div class="child">
    <form action="" method="post">
      <label for="name">Name:</label>
      <input type="text" name="name" id="name"><br>

      <label for="name">Email:</label>
      <input type="email" name="email" id="email"><br>

      <button type="submit" name="submit">Submit</button>
    </form>
  </div>
  <div class="child mt-25">
    <span>Name:
      <strong><?php echo $singlePerson->getName(); ?></strong>
    </span> <br>

    <span>Email:
      <strong><?php echo $singlePerson->getEmail(); ?></strong>
    </span> <br>



  </div>
</div>


</body>
</html>