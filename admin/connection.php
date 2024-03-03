<?php
$servername = "localhost";
$username = "iamabinashpanda";
$password = "abipagusa";
$dbname = "simpledb";

// Create connection
$conn = new mysqli($servername, $username, $password,  $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>