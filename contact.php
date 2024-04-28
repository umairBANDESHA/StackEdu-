 <?php
session_start();

if(!isset($_SESSION['role'])){
    header('Location: main.php'); 
}



include('./includes/header.php');
// Set error reporting
error_reporting(E_ALL & ~E_WARNING);

// Set display_errors
ini_set('display_errors', 'Off');




?>

<form class="contact-form">
        <h2>Contact Us</h2>
        <label for="name">Name</label>
        <input type="text" id="name" name="name" placeholder="Enter your name" required>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Enter your email" required>

        <label for="Message">Message</label>
        <textarea id="Message" name="Message" placeholder="Type what you want to say...."></textarea>

        <button type="submit">Submit</button>
    </form>
<?php
include('./includes/footer.php');

?>