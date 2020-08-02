<?php
$servername = "localhost";
$username = "id14510169_admin";
$password = "-zb9<9tVRQ>}N\^~";
$dbname = "id14510169_ajudedb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?> 