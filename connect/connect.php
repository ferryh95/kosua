<?php
$servername = "localhost";
$username = "root";
$password = "motoz010";

// Create connection
$conn = new mysqli($servername, $username, $password);
$conn->select_db('kousa');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


?>