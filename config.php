<?php
// Database connection parameters
$db_host = "localhost"; // Change this to your database host
$db_user = "root"; // Change this to your database username
$db_pass = ""; // Change this to your database password
$db_name = "blog_site"; // Change this to your database name

// Create database connection
$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else { 
     //echo "Connection Sucessfully ";
}
?>