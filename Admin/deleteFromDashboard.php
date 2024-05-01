<!-- delete from Dashboard -->
<?php
include "./config.php";
//  $conn = new mysqli('localhost','root','','login');
if(isset($_GET['email'])){
    $email = $_GET['email'];
    $sql = "DELETE FROM logindetails WHERE email = ?";
    
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->close();
}

header('location:./adminDashboard.php');
exit;
?>