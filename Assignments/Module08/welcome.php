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

  <legend class="page-title">All Registard Users</legend>

  <div class="container">
    <div class="child">
    <?php
        
        $usersFile = fopen( 'csv/users.csv', 'r' );

        echo '<table>';
        echo '<tr><th>Profile Picture</th><th>Name</th><th>Email</th><th>Created at</th></tr>';

        while (  ( $userData = fgetcsv( $usersFile ) ) !== false ) {
            echo '<tr>';
            echo '<td><img src="uploads/' . $userData[4] . '"></td>';
            echo '<td>' . $userData[0] .' '. $userData[1] . '</td>';
            echo '<td>' .  $userData[2]. '</td>';
            echo '<td>' . $userData[5] . '</td>';
            echo '</tr>';

        }

        echo '</table>';

        fclose( $usersFile );
        ?>
    </div>

    <a class="back-btn" href="index.php"> Back to Form</a>
  </div>

  </body>
</html>