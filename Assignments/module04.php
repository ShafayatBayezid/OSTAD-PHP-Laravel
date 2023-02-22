<?php
// Answer 1

$cities = [
    'Atlanta', 'Dallas', 'Edinburgh', 'Florence', 'Geneva', 'Helsinki', 'Islamabad', 'Jerusalem', 'Rio de Janeiro', 'Stockholm', 'Berlin', 'Chicago', 'Taipei', 'Utrecht', 'Valencia', 'Wellington', 'Xalapa', 'Yerevan', 'Zagreb', 'Dhaka', 'Chittagong', 'Sylhet', 'Khulna', 'Africa',
];
function sortingArrayByLowLength( $city1, $city2 ) {
    if ( $city1 == $city2 ) {
        return 0;
    } else {
        if ( strlen( $city1 ) > strlen( $city2 ) ) {
            return 1;
        } else {
            return -1;
        }
    }

}

usort( $cities, "sortingArrayByLowLength" );

$arrlength = count( $cities );
for ( $x = 0; $x < $arrlength; $x++ ) {
    echo $cities[$x];
    echo "\n";
}
