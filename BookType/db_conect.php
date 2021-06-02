<?php
$servername = "localhost";
$username = "root";
$password = "12345";
$dbname = "bd_shop";

// $servername = "localhost";
// $username = "id15275563_root";
// $password = "EHzn2tgn!w&{kr&D";
// $dbname = "id15275563_bd_shop";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
