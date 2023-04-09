<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn = new mysqli($servername, $username, $password);
if($conn->connect_error) die("Connection to database failed") . $conn->connect->error;
else echo "Connected to database successfully";
$conn->close();
?>