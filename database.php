<?php

$servername = "p:localhost";
$username = "virtualgallery";
$password = "tEgJJq4fFk25DGIh";
$dbname = "VirtualGallery";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

?>