 <?php

session_start();

if(!isset($session['role'])){
    header('Location: main.php'); 
}



// Set error reporting
error_reporting(E_ALL & ~E_WARNING);

// Set display_errors
ini_set('display_errors', 'Off');




include('./includes/header.php');
?>

<h1>Contact Page</h1>
<p>
    This is the coontact page.
</p>

<?php
include('./includes/footer.php');

?>