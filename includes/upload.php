<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
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
        $_SESSION['ERROR'] = 'Sorry, your file was not uploaded.';
        header('Location: ./adminDashboard.php');
       
    } else {
        // If everything is ok, move the file to the target directory
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
           header('Location: ./adminDashboard.php');
           $_SESSION['ERROR'] = 'File Upload Successfully.';
        } else {
            $_SESSION['ERROR'] = 'ERROR in uploading.';
        }
    }
}
?>