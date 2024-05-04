<?php
session_start();

// names and email etc are from html file 
$name = $_POST['name'];
$password = $_POST['password'];

require_once('db_connection.php');

// checking connection
if ($conn->connect_error) {
    echo "$conn->connect_error";
    die("Connection Failed : " . $conn->connect_error);
} else {
    // Query to retrieve user information
    $userQuery = "SELECT name, password  FROM logindetails WHERE name = ?";
    $stmt = $conn->prepare($userQuery);

    $stmt->bind_param("s", $name);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Fetch user information, including the hashed password       
        $row = $result->fetch_assoc();

        $stored_hashed_password = $row["password"];
        
        $stored_role = $row["role"];
        $stored_name = $row["name"]; 

        // Use $stored_hashed_password for verification during login
        if (  password_verify($password, $row['password'])) {
           
                $_SESSION['role'] = 'user'; // Replace with the actual user ID
                    header("Location: ../main.php");
        
            

            
        } else {
            // USER name or PAss is wrong
            $_SESSION['login_failure'] = "Invalid user name or password";
			header('Location: ../main.php');
            }
    } else {
        // if i dont get any thing from database or there is no user of that name
        $_SESSION['login_failure'] = "No User";
        header('Location: ../main.php');
    }


}

$conn->close();
$stmt->close();
?>
