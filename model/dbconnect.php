<?php
$servername = "localhost";
$username = "masterAdmin";
$password = "master@admin";
$db_name = 'db_mastpro';

// Create connection
$conn = new mysqli($servername, $username, $password, $db_name);

// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
?>