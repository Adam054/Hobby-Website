<?php
$server = "localhost";
$user   = "root";           // change if you have different user
$pass   = "";               // often empty on XAMPP
$dbname = "skiing_db";

$conn = mysqli_connect($server, $user, $pass, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>