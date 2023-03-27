<?php

function login() {
    include_once 'dbConnenctions.php';

    $email = htmlspecialchars( $_POST['email'] );
    $password = htmlspecialchars( $_POST['password'] );

    if ( empty( $email ) || empty( $password ) ) {
        echo "Please enter both email and password.";
    } else {

        // echo "heloooooo";
        $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
        $usersData = mysqli_query( $conn, $sql );

        if ( mysqli_num_rows( $usersData ) > 0 ) {

            $row = mysqli_fetch_assoc( $usersData );
            $email = $row['email'];

            header( "Location: welcome.php?email=$email" );
            exit();
        } else {
            echo "Invalid login credentials.";
        }
    }

    // mysqli_close( $conn );

}

function registration() {

    include_once 'dbConnenctions.php';

    $firstName = htmlspecialchars( $_POST['firstName'] );
    $lastName = htmlspecialchars( $_POST['lastName'] );
    $email = htmlspecialchars( $_POST['email'] );
    $password = htmlspecialchars( $_POST['password'] );
    $confirmPassword = htmlspecialchars( $_POST['confirmPassword'] );

    if ( empty( $firstName ) || empty( $lastName ) || empty( $email ) || empty( $password ) || empty( $confirmPassword ) ) {
        echo "Please fill out all fields.";
    } else if ( !filter_var( $email, FILTER_VALIDATE_EMAIL ) ) {
        echo "Please enter a valid email address.";
    } else if ( $password !== $confirmPassword ) {
        echo "Passwords do not match.";
    } else {

        date_default_timezone_set( 'Asia/Dhaka' );
        $currentDateTime = date( 'Y-m-d H-i-s' );
        $uploadsDir = 'uploads/';
        $pictureName = $_FILES['picture']['name'];
        $picturePath = $uploadsDir . $pictureName;
        if ( !move_uploaded_file( $_FILES['picture']['tmp_name'], $picturePath ) ) {
            die( 'Failed to upload profile picture.' );
        }

        $sql = "INSERT INTO users (first_name, last_name, email, password, profile_pic, registration_datetime )
        VALUES ('$firstName', '$lastName', '$email', '$password', '$pictureName', '$currentDateTime')";
        if ( mysqli_query( $conn, $sql ) ) {
            echo "Registration successful!";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error( $conn );
        }

        mysqli_close( $conn ); 

        $usersFile = fopen( 'csv/users.csv', 'a' );
        fputcsv( $usersFile, array( $firstName, $lastName, $email, $password, $pictureName, $currentDateTime ) );
        fclose( $usersFile );

        header( 'Location: login.php' );
    }

}