<?php
$sName = session_name( 'users-session' );

session_start( [
    'cookie_lifetime' => 3,
] );

$_SESSION['count'] = $_SESSION['count'] ?? 0;
$_SESSION['count']++;

echo "You've visited " . $_SESSION['count'] . " times on this site</br>";

echo 'Session name: ' . session_name() . "</br>";
echo 'Session id: ' . session_id() . "</br>";

?>