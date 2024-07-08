<?php
$host = 'localhost';
$db = 'music_school';
$user = 'yourusername';  // replace with your database username
$pass = 'yourpassword';  // replace with your database password

$mysqli = new mysqli($host, $user, $pass, $db);

if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}

return $mysqli;
?>
