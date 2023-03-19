<?php
$fp = fopen( 'D:\\XAMPP\\htdocs\\OSTAD-PHP-Laravel\\Class Practice\\OOP\\file\\csv.csv', 'r' );
// fputs( $fp, "Hello\n" );
// fputs( $fp, "World\n" );
// $getData =
if ( $fp ) {
    while (  ( $buffer = fgetcsv( $fp, 4096 ) ) !== false ) {
        print_r( $buffer);
    }

    fclose( $fp );
}

// $data = fgetcsv( $fp );
// print_r( $data );
?>