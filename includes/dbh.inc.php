<?php 

$dbservername = "localhost";
$dbUsername = "root";
$dbPassword = "database";
$dbName = "jj_ivs";

$conn = mysqli_connect($dbservername, $dbUsername, $dbPassword, $dbName );

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>