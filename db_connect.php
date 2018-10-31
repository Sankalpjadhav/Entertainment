<?php
$connection = mysqli_connect("localhost", "root", "","entertainment"); // Establishing Connection with Server


// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}
?>
