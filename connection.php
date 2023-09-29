<?php


$hostname = "localhost"; // or your MySQL server IP address
$username = "root";
$password = "";
$database = "marksheet";

// Create a connection
$connection = mysqli_connect($hostname, $username, $password, $database);

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
?>