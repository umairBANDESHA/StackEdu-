 
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

<h1>Courses Page</h1>
<p>
    This is the courses page.
</p>

<?php
include('./includes/footer.php');

?>