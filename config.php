<?php
// Database connection configuration
$servername = "localhost";
$username = "admin1";
$password = "admin1";
$dbname = "contact_manager";

// Create a connection
$con = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if (!$con) {
    die(mysqli_error ($con));
}

?>
