<?php
session_start();


// names and email etc are from html file 
$name = $_POST['name'];
$password = $_POST['password'];
//$role = $_POST['role'];

require_once('db_connection.php');

// checking connection
if ($conn->connect_error) {
    echo "$conn->connect_error";
    die("Connection Failed : " . $conn->connect_error);
} else {
    // $session['imagePath'] = './icons/user.png';
      
    // Query to retrieve user information
    // $adminQuery = "SELECT admin_Name , admin_Pass FROM admindata WHERE name = ?";
    // $stmt = $conn->prepare($adminQuery);
    $userQuery = "SELECT * FROM logindetails WHERE name = ?";
    $stmt = $conn->prepare($userQuery);

    $stmt->bind_param("s", $name);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Fetch user information, including the hashed password       
        $row = $result->fetch_assoc();

        $stored_hashed_password = $row["password"]; // Replace 'hashed_password' with your actual database column name
        $stored_role = $row["role"]; // Replace 'hashed_password' with your actual database column name
        $stored_name = $row["name"]; // Replace 'hashed_password' with your actual database column name

        // Use $stored_hashed_password for verification during login
        if (password_verify($password, $row['password'])) {
            // if ($stored_role == 'admin') {
            //     $_SESSION['role'] = 'admin'; // Replace with the actual user ID


            //     // $imageData = ($row['picture']); // Convert binary data to base64

            //     // Output image data as base64
            //     // $_SESSION['picture'] = '<img src="data:image/jpeg;' . $imageData . '" alt="Profile vbyuj Picture">';
            


            //     header('Location: Admin\adminDashboard.php');
               
                
            //     //echo "<h2> Admin Panel </h2>      <a href='../Stephen King/main.php'>Go To Web</a>";

            // } else {

                $_SESSION['role'] = 'user'; // Replace with the actual user ID
                if($stored_name= 'Bandesha'){
                    $session['imagePath'] = "../img/myself.jpg";
                }
                $_SESSION['loginBtn'] = 'Log Out'; // Replace with the actual user ID





                header("Location: ../main.php");
            
        } else {
            $_SESSION['login_failure'] = "Invalid user name or password";
			header('Location: ../main.php');
            $_SESSION['loginBtn'] = 'Log In'; 
        }
    } else {
        $_SESSION['login_failure'] = "Invalid user name or password";
        // header('Location: sign_in_page.php');
    }


}

$conn->close();
$stmt->close();
?>

<!-- QUERIES TO CREATE DATABASE & TABLE AND TO SAVE DEFAULT DATA -->

<!-- 
create database stackedu;

create table logindetails( name varchar(200) not null, email varchar(200) not null, password varchar(200) not null ,  role varchar(200) not null);
insert into logindetails(name , email , password ) values ( 'Bandesha' , 'umairbandesha40@gmail.com' , 1538);

 -->