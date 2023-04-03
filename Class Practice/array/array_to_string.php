<?php
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

// print_r($students);

$serializedData = serialize($students);
// echo $serializedData;

$unserializedData = unserialize($serializedData);
print_r($unserializedData);

// $jsonEncoded = json_encode($students);
// // echo $jsonEncoded;
// $jsonDecoded = json_decode($jsonEncoded, true); // true means, it will decode as array. without using true, it will decode as json object.
// print_r($jsonDecoded);