<?php
// db.php
$servername = "localhost";
$username = "root";
$password = "Senthil2421";
$dbname = "if0_37333906_pixelplaza";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
