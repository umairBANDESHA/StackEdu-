<?php
// Start the session
session_start();

// Check if the user is logged in
if (isset($_SESSION['role'])) {

    $_SESSION = array();

    // Destroy the session
    session_destroy();

    
    // User is not logged in, redirect to login page
    header("Location: main.php");
    exit();
}else{
    // User is not logged in, redirect to login page
    header("Location: main.php");
    exit();
}
?>