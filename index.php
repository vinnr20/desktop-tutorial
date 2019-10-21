<?php
$servername = "http://vindatabase-kevinwebserver.192.168.99.102.nip.io";
$username = "root";
$password = "redhat123";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
