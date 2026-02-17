<?php
$server = "localhost";
$user   = "root";           
$pass   = "";               
$dbname = "skiing_db"; // don't touch

$conn = mysqli_connect($server, $user, $pass, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>