<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Namota</title>
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
      font-weight: bold;
      padding: 7px 10px;
    }
    td.blue{
      background-color: #e7f6ff;
      border-bottom: 2px solid #7e12d0;}
    td.red{
      background-color: #ff0000;
      color: #fff;
      border-bottom: 2px solid #7e12d0;
    }
    label{
      display: block;
    }
  </style>
  <?php

$value = ( isset( $_POST['namota'] ) && ( is_numeric( $_POST['namota'] ) || !empty( $_POST['namota'] ) ) ) ? $_POST['namota'] : '';

?>

<div class="container">
  <div class="child">
    <form action="" method="POST">
      <label for="namota">Insert a Number:</label>
      <input type="number" id="namota" name="namota">
      <br><br>
      <input type="submit" name="submit" value="Submit">
    </form>
  </div>
  <div class="child">
    <label for=""> <?php echo "Namota of: {$value}"; ?> </label>

<hr>
  <table>
        <?php
if ( isset( $_POST['submit'] ) ) {
    $inpNum = $_POST['namota'];

    $value = ( isset( $inpNum ) && ( is_numeric( $inpNum ) || !empty( $inpNum ) ) ) ? $inpNum : '';

    for ( $i = 1; $i <= 10; $i++ ) {
        $result = (int) $value * $i;

        ?>
        <tr>

<?php
if ( isset( $value ) && ( is_numeric( $value ) || !empty( $value ) ) ) {
            echo "<td class='blue'>{$value} x {$i} = $result</td>";
        } else {
            echo "<td class='red'>Please insert a number </td>";
            break;
        }
        ?>
          </td>
        </tr>

        <?php

    }}
?>
  </table>
</div>

</div>


</body>
</html>