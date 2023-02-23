<?php

function namota( $num ) {
    for ( $i = 1; $i <= 10; $i++ ) {
        $result = $num * $i;
        echo PHP_EOL;
        echo " {$num} x {$i} = $result";
    }
}

// namota( 12 );

function getInputData( $namota ) {

    $inpNum = $_POST[$namota];

    namota( $inpNum );
}

// function checkVale( $value ) {
//     if ( isset( $value ) && ( is_numeric( $value ) || !empty( $value ) ) ) {
//         return $num = $value;
//     } else {
//         return $num = '';
//     }
// }