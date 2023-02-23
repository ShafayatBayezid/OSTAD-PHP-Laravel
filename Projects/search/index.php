<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Search</title>
</head>
<body>

  <style>
    .container{
      width: 100%;
      max-width: 800px;
      margin: 100px auto 0;
      display: grid;
      grid-template-columns: repeat(2, 1fr);
    }
    table, tr{
      width: 100%;
    }
    td{
      display: block;
      font-weight: bold;
      padding: 7px 10px;
      margin-bottom: 3px;
      background-color: #e7f6ff;
      border-left: 2px solid #7e12d0;
      border-bottom: 2px solid #7e12d0;
      border-radius: 0 0 0 8px;
    }
  </style>

    <?php

include_once 'cities.php';

sort( $cities, SORT_STRING );

?>

<div class="container">
  <div class="child">
    <form action="" method="POST">
      <label for="city">Search anything here:</label>
      <input type="text" id="city" name="city">
      <br><br>
      <input type="submit" name="submit" value="Submit">
    </form>
  </div>
  <div class="child">
    <strong><legend>City name start with: <?php ?></legend></strong>
    <hr>




<table>
<?php
if (isset($_POST['submit'])) {
  $search_term = $_POST['city'];
  echo "You searched for: $search_term";
}
?>
</table>

  </div>
</div>

</body>
</html>