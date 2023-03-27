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

include_once 'dbConnenctions.php';

$urlEmail = $_GET['email'];

$sql = "SELECT * FROM users WHERE email = '$urlEmail'";
$loggedInUser = mysqli_query( $conn, $sql );
$row = mysqli_fetch_assoc( $loggedInUser );
$loggedInUserName = $row['first_name'];

echo <<<EOD
<div>
<span class='logged-user'> Viewing as: <p> {$loggedInUserName} </p></span>

</div>
EOD;

// =================

$sql = "SELECT * FROM users";
$allUsers = mysqli_query( $conn, $sql );

echo '<table>';
echo '<tr><th>Profile Picture</th><th>Name</th><th>Email</th><th>Created at</th></tr>';

while ( $rows = mysqli_fetch_assoc( $allUsers ) ) {

    $firstName = $rows['first_name'];
    $lastName = $rows['last_name'];
    $email = $rows['email'];
    $profile_pic = $rows['profile_pic'];
    $registrationDate = $rows['registration_datetime'];

    echo '<tr>';
    echo '<td><img src="uploads/' . $profile_pic . '"></td>';
    echo '<td>' . $firstName . ' ' . $lastName . '</td>';
    echo '<td>' . $email . '</td>';
    echo '<td>' . $registrationDate . '</td>';
    echo '</tr>';

    // exit();
}

echo '</table>';

/*
// to get data from csv file, use this code.

$usersFile = fopen( 'csv/users.csv', 'r' );

echo '<table>';
echo '<tr><th>Profile Picture</th><th>Name</th><th>Email</th><th>Created at</th></tr>';

while (  ( $userData = fgetcsv( $usersFile ) ) !== false ) {
echo '<tr>';
echo '<td><img src="uploads/' . $userData[4] . '"></td>';
echo '<td>' . $userData[0] . ' ' . $userData[1] . '</td>';
echo '<td>' . $userData[2] . '</td>';
echo '<td>' . $userData[5] . '</td>';
echo '</tr>';

}

echo '</table>';

fclose( $usersFile );
 */

?>
    </div>
    <a class="back-btn" href="register.php"> Add New user</a>
  </div>

  </body>
</html>