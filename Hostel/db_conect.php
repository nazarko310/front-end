<?php
$servername = "localhost";
$username = "root";
$password = "12345";
$dbname = "bd_camelot";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
