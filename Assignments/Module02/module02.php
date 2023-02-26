<?php
$tuition_fee = 25000;

$commission = ($tuition_fee > 20000) ? "Commission of {$tuition_fee} dollars is 25% = " . 0.25 * $tuition_fee . " dollars" :
(($tuition_fee > 10000) ? "Commission of {$tuition_fee} dollars is 20% = " . 0.20 * $tuition_fee . " dollars" :
    (($tuition_fee > 7000) ? "Commission of {$tuition_fee} dollars is 15% = " . 0.15 * $tuition_fee . " dollars" :
        "Invalid data"));

echo "\n";
echo " {$commission} \n";
