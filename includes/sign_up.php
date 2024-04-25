<?php

// names and email etc are from html file 
	$name = $_POST[ 'name' ];
	$email = $_POST[ 'email' ];
	$phoneNbr = $_POST[ 'phoneNmbr' ];
	$address = $_POST[ 'address' ];
	$picture = $_POST[ 'picture' ];
	$password = $_POST[ 'password' ];
	





	
	// for session
	$role = 'user';

	$hashed_password = password_hash($password, PASSWORD_DEFAULT);


	require_once('db_connection.php');

	// checking connection
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
	

	
// names and email etc are from table 
//storing values
$sql = 'insert into logindetails(name, email, phoneNbr, address,  password , role ) values(?, ?, ? , ? , ? , ? )';

$stmt = $conn->prepare($sql);
// names and email etc are from table 
		$stmt->bind_param("ssisss", $name, $email, $phoneNbr, $address,  $hashed_password , $role   );
		
		if ( $stmt->execute()){
			header("Location: ../main	.php");
			$_SESSION['login_failure'] = 'Successfully Data Entered.';
				// Tosave picture
	if ($_SERVER["REQUEST_METHOD"] == "post" && isset($_POST["submit"])) {
		$targetDirectory = "../img/users/";
		$targetFile = $targetDirectory . basename($_FILES["image"]["name"]);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
	
		// Check if the file is an actual image
		$check = getimagesize($_FILES["image"]["tmp_name"]);
		if ($check === false) {
			$_SESSION['ERROR'] = 'File is not an image.';
			header('Location: ./adminDashboard.php');
			$uploadOk = 0;
		}
	
		// Check if file already exists
		if (file_exists($targetFile)) {
			$_SESSION['ERROR'] = 'Sorry, file already exists.';
			header('Location: ./adminDashboard.php');
			$uploadOk = 0;
		}
	
		// Check file size (adjust as needed)
		if ($_FILES["image"]["size"] > 1000000) {
			$_SESSION['ERROR'] = 'Sorry, your file is too large.';
			header('Location: ./adminDashboard.php');
			$uploadOk = 0;
		}
	
		// Allow certain file formats
		$allowedFormats = ["jpg", "jpeg", "png", "gif"];
		if (!in_array($imageFileType, $allowedFormats)) {
			$_SESSION['ERROR'] = 'Sorry, only JPG, JPEG, PNG, and GIF files are allowed.';
			header('Location: ./adminDashboard.php');
			$uploadOk = 0;
		}
	
		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
			$_SESSION['login_failure'] = 'Sorry, your file was not uploaded.';
			header('Location: ./adminDashboard.php');
		   
		} else {
			// If everything is ok, move the file to the target directory
			if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
			   header('Location: ./adminDashboard.php');
			   $_SESSION['login_failure'] = 'File Upload Successfully.';
			} else {
				$_SESSION['login_failure'] = 'ERROR in uploading.';
			}
		}
	}

		}else {
			// 1062 error nbr is for duplicate data entry
			if($conn ->errno == 1062 ){
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