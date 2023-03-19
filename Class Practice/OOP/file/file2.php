<?php

$filePath = "D:\\XAMPP\\htdocs\\OSTAD-PHP-Laravel\\Class Practice\\OOP\\file\\csv2.csv";

$students = [
    [
        'fname' => 'Shafayat',
        'lname' => 'Hossain',
        'Age'   => '27',
    ],
    [
        'fname' => 'Ahmed',
        'lname' => 'Bayezid',
        'Age'   => '29',
    ],
    [
        'fname' => 'Sakib',
        'lname' => 'Sadman',
        'Age'   => '25',
    ],
];
$newStudents = 
[
    'fname' => 'Sakib',
    'lname' => 'Sadman',
    'Age'   => '25',
];

// $data = serialize($students);
// file_put_contents($filePath, $data);

array_push();

// $dataFromFile = file_get_contents( $filePath );
// $allData = unserialize( $dataFromFile );
// print_r( $allData );

// LN7F9vMv%zaS