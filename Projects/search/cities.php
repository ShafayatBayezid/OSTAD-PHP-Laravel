<?php

$cities = [
    'Atlanta', 'Berlin', 'Chicago', 'Dallas', 'Edinburgh', 'Florence', 'Geneva', 'Helsinki', 'Islamabad',
    'Jerusalem', 'Kuala Lumpur', 'London', 'Mumbai', 'New York', 'Oslo', 'Paris', 'Quebec City', 'Rome',
    'San Francisco', 'Tokyo', 'Ulaanbaatar', 'Vancouver', 'Warsaw', 'Xiamen', 'Yerevan', 'Zurich', 'Auckland', 'Buenos Aires', 'Copenhagen', 'Dubai', 'Edmonton', 'Frankfurt', 'Guadalajara', 'Hanoi', 'Incheon', 'Jerusalem', 'Krakow', 'Lisbon', 'Montreal', 'Nairobi', 'Ottawa', 'Perth', 'Quito', 'Rio de Janeiro', 'Stockholm', 'Taipei', 'Utrecht', 'Valencia', 'Wellington', 'Xalapa', 'Yerevan', 'Zagreb', 'Dhaka', 'Chittagong', 'Sylhet', 'Khulna', 'Rajshahi', 'Barisal', 'Rangpur', 'Mymensingh', 'Comilla', 'Narayanganj', 'Gazipur', 'Jessore', 'Dinajpur', 'Cox\'s Bazar', 'Pabna', 'Tangail', 'Kushtia', 'Faridpur', 'Bogra', 'Nawabganj', 'Feni', 'Satkhira', 'Sirajganj', 'Pirojpur', 'Narsingdi', 'Manikganj',
];
$x = "Manikganj";
// foreach ( $cities as $city ) {

//     $lowerValue = strtolower( $city );
// }

function search ($array, $searchValue){
$searchResult = array_search($searchValue, $array);
echo $searchResult;
}

 search($cities, $x);