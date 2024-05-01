<?php
require_once('config.php');

$name = $_POST[ 'name' ];

// checking connection
if($conn->connect_error){
    echo "$conn->connect_error";
    die("Connection Failed : ". $conn->connect_error);
} else {


    // Use prepared statement to prevent SQL injection
    $sql = "DELETE FROM `logindetails` WHERE name = ?";
    
    $stmt = $conn->prepare($sql);
    // names and email etc are from table 
            $stmt->bind_param("s", $name );
            
            if ( $stmt->execute()){
                header("Location: addUser.php");
                $_SESSION['login_failure'] = 'Successfully User removed.';
    
            }else {
                // 1062 error nbr is for duplicate data entry
                if($conn ->errno ==1062 )
                    $_SESSION['login_failure'] = 'Failed to remove member.';
                }
    
            }
    
            // echo $execval;
            $stmt->close();
            $conn->close();
        }
    ?>