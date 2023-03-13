<?php
// Validate form inputs
if ( empty( $_POST['name'] ) || empty( $_POST['email'] ) || empty( $_POST['password'] ) ) {
    die( 'Please fill out all fields.' );
}

if ( !filter_var( $_POST['email'], FILTER_VALIDATE_EMAIL ) ) {
    die( 'Invalid email format.' );
}

// Save profile picture to server
$uploadsDir = 'uploads/'; 
$pictureName =  uniqid() . '-' . $_FILES['picture']['name'];
$picturePath = $uploadsDir . $pictureName;

if ( !move_uploaded_file( $_FILES['picture']['tmp_name'], $picturePath ) ) {
    die( 'Failed to upload profile picture.' );
}

// Save user data to CSV file
$usersFile = fopen( 'users.csv', 'a' );
fputcsv( $usersFile, array( $_POST['name'], $_POST['email'], $pictureName, date( 'Y-m-d H-i-s' )  ));
fclose( $usersFile );

// Start new session and set cookie
session_name( $_POST['name'] );
session_start();

// Redirect to success page
header( 'Location: success.php' );
?>
