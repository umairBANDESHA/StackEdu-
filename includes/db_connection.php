<?php
// Database configuration
define('DB_SERVER', 'localhost');    // Change this to your database server
define('DB_USERNAME', 'root'); // Change this to your database username
define('DB_PASSWORD', ''); // Change this to your database password
define('DB_NAME', 'stackedu');     // Change this to your database name

// Attempt to connect to the database
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check the connection
if ($conn === false) {
    die("ERROR: Could not connect to the database. " . mysqli_connect_error());
}
?>
 
