<?php

// names and email etc are from html file 
	$name = $_POST[ 'name' ];
	$email = $_POST[ 'email' ];
	$phoneNbr = $_POST[ 'PhoneNbr' ];
	$address = $_POST[ 'Address' ];
	$password = $_POST[ 'password' ];
	$role = $_POST[ 'role' ];

    $whereName = $_POST['updateUser'];

	$hashed_password = password_hash($password, PASSWORD_DEFAULT);


require_once('config.php');

	// checking connection
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
	

	
// names and email etc are from table 
//storing values
$sql = 'update logindetails set name = ?, email = ?, password = ?, role = ?, address = ?, phoneNbr = ? WHERE name = ? '; 
$stmt = $conn->prepare($sql);
// names and email etc are from table 
		$stmt->bind_param("sssssis", $name, $email, $hashed_password , $role , $address , $phoneNbr , $whereName );
		
		if ( $stmt->execute()){
			header("Location: ./updateUserPage.php");
			$_SESSION['login_failure'] = 'Successfully Data Entered.';

		}else {
			// 1062 error nbr is for duplicate data entry
			if($conn ->errno ==1062 ){
				$_SESSION['login_failure'] = 'Duplicate Data Entered.';
			}else{
				$_SESSION['login_failure'] = 'Failed to add new member.';
			}

		}

		// echo $execval;
		$stmt->close();
		$conn->close();
	}
?>