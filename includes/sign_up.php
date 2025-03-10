<?php

// names and email etc are from html file 
$name = $_POST['name'];
$email = $_POST['email'];
$phoneNbr = $_POST['phoneNmbr'];
$address = $_POST['address'];
// $picture = $_POST['picture'];
$password = $_POST['password'];







// for session
$role = 'user';

$hashed_password = password_hash($password, PASSWORD_DEFAULT);


require_once('db_connection.php');

// checking connection
if ($conn->connect_error) {
	echo "$conn->connect_error";
	die("Connection Failed : " . $conn->connect_error);
} else {

	// names and email etc are from table 
//storing values
	$sql = 'insert into logindetails(name, email, phoneNbr, address,  password  ) values(?, ?, ? , ?  , ? )';

	$stmt = $conn->prepare($sql);
	// names and email etc are from table 
	$stmt->bind_param("ssiss", $name, $email, $phoneNbr, $address, $hashed_password);


	if ($stmt->execute()) {
		header("Location: ../main.php");
		$_SESSION['login_failure'] = 'Successfully Data Entered.';
		// Tosave picture
		

	} else {
		// 1062 error nbr is for duplicate data entry
		if ($conn->errno == 1062) {
			$_SESSION['login_failure'] = 'Duplicate Data Entered.';
		} else {
			$_SESSION['login_failure'] = 'Failed to add new member.';
		}

	}

	// echo $execval;
	$stmt->close();
	$conn->close();
}
?>
<!-- <form action="upload.php" method="post" enctype="multipart/form-data"
                            style="margin-top: 20px; text-align: center;">
                            <label for="image" style="font-weight: bold; font-size: 18px;">Select Image:</label>
                            <input type="file" name="image" id="image" required style="margin-top: 10px;">
                            <button type="submit" name="submit"
                                style="margin-top: 10px; padding: 8px 16px; background-color: #4CAF50; color: white; border: none; border-radius: 4px; cursor: pointer;">Upload
                                Image</button>
                        </form>
 -->