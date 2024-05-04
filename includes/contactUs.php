<?php

$name = $_POST['name'];
$email = $_POST['email'];
$Message = $_POST['Message'];
// $address = $_POST['address'];



require_once('db_connection.php');

// checking connection
if ($conn->connect_error) {
	echo "$conn->connect_error";
	die("Connection Failed : " . $conn->connect_error);
} else {

	// names and email etc are from table 
//storing values
	$sql = 'insert into contact(userName, userEmail, message  ) values(?, ?, ?  )';

	$stmt = $conn->prepare($sql);
	// names and email etc are from table 
	$stmt->bind_param("sss", $name, $email, $Message);


	if ($stmt->execute()) {
		$_SESSION['msg'] = 'Successfully response submitted.';
		header("Location: ../main.php");
        
		

	} else {
		// 1062 error nbr is for duplicate data entry
		if ($conn->errno == 1062) {
			$_SESSION['msg'] = 'This user already exists.';
		} else {
			$_SESSION['msg'] = 'Error occuerd.';
		}

	}

	// echo $execval;
	$stmt->close();
	$conn->close();
}
?>