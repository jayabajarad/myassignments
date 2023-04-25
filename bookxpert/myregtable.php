<?php
$servername = "localhost";
$username = "jayabajarad9028@gmail.com";
$password = "Jaya@1998";
$dbname = "User";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE username (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
setpassword VARCHAR(30) NOT NULL,
confirmpassword VARCHAR(30) NOT NULL,
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
  echo "Table username created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>