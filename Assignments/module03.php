<?php
/*
মডিউল ৩ এর এসাইনমেন্ট
1. Write a Reusable  PHP Function that can check Even & Odd Number And Return Decision
2. 1+2+3...…….100  Write a loop to calculate the summation of the series
 */

$startFrom = 1;
$endOn = 100;

// Answer 2:
function sumSeriesOfNumbers( $start, $end ) {
    $sum = 0;
    for ( $i = $start; $i <= $end; $i++ ) {
        $sum += $i;
    }
    return $sum;
}

// Answer 1:
function checkEvenOrOdd( $num ) {
    if ( 0 == $num % 2 ) {
        return "{$num} is an Even Number \n";
    } else {
        return "{$num} is an Odd Number \n";
    }
}

echo "Summation of {$startFrom} to {$endOn} is " . sumSeriesOfNumbers( $startFrom, $endOn );

echo PHP_EOL."=====";
echo PHP_EOL;

echo checkEvenOrOdd( sumSeriesOfNumbers( $startFrom, $endOn ) );
