<?php
$servername = "localhost";
$username = "jayabajarad9028@gmail.com";
$password = "Jaya@1998";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>