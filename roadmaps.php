 
 
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
<!-- MERN STACK -->
<p>
The MERN stack, comprising MongoDB, Express.js, React, and Node.js, is a cohesive set of technologies used for building efficient and scalable web applications.

Its popularity stems from the seamless integration of each component: MongoDB's flexible data handling, Express.js's efficient server-side networking, React's dynamic user interfaces, and Node.js's powerful back-end runtime environment.

For beginners, the MERN stack is a smart choice because it uses JavaScript across all layers, simplifying the learning curve. This uniformity, coupled with a strong community and ample learning resources, makes it an accessible and practical toolkit for anyone looking to dive into full-stack development.
</e>

<?php 
include('MERN_STACK.xml');
?>

<?php
include('MEAN_STACK.xml');
?>

<?php
include('MEVN_STACK.xml');
?>



<?php
include('./includes/footer.php');

?>