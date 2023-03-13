<?php
$file_name = "ostad.txt";
$file = fopen( $file_name, "r+" );

// If the file does not exist, create it
if ( file_exists( $file_name ) != true ) {
    $file = fopen( $file_name, "w" );
}

// Read the contents of the file
$file_contents = fread( $file, filesize( $file_name ) );

// Add the current date and time to the contents of the file
$date_time = date( "Y-m-d H:i:s" );
$file_contents .= "\n$date_time";

// Write the new contents back to the file
fseek( $file, 0 );
fwrite( $file, $file_contents );
fclose( $file );
?>
