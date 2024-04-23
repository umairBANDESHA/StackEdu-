 
 
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

<h1>Roadmap Page</h1>
<p>
    <?php
    echo $_SESSION['role'];
    ?>
    This is the roadmaps page.
</p>

<?php
include('./includes/footer.php');

?>