<?php
$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "car_rental_db";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
