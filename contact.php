 <?php
session_start();

// if(!isset($_SESSION['role'])){
//     header('Location: main.php'); 
//     // $_SESSION['role']
// }



// // Set error reporting
// error_reporting(E_ALL & ~E_WARNING);

// // Set display_errors
// ini_set('display_errors', 'Off');

include('./includes/header.php');



?>

<form action='./includes/contactUs.php' method = 'POST'  class="contact-form">
        <h2>Contact Us</h2>
        <label for="name">Name</label>
        <input type="text" id="name" name="name" placeholder="Enter your name" required>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Enter your email" required>

        <label for="Message">Message</label>
        <textarea id="Message" name="Message" placeholder="Type what you want to say...."></textarea>

        <div>
                    <span class="error">
                        <?php
                        echo $_SESSION['msg'];
                        // unset($_SESSION['msg']);
                        ?>
                    </span>
                </div>
        <button type="submit">Submit</button>
    </form>
<?php
include('./includes/footer.php');

?>