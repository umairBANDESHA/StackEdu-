<?php
session_start();
// Set error reporting
error_reporting(E_ALL & ~E_WARNING);

// Set display_errors
ini_set('display_errors', 'Off');


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="stylesheet" href="./css/styles.css" />
</head>
<div class="background b"></div>

<body>


    <div class="page">
        <div class="container">
            <h1> <img src="./logo/8.png" alt="" class="center-margin" width="130px" height="85px">
            </h1>

            <form action="./includes/sign_up.php" method="post">
                <div class="input">
                    <input type="text" class="form-control" placeholder="User Name" name="name" required>
                    <input type="email" class="form-control" placeholder="email" name="email" required>
                    <input type="number" class="form-control" placeholder="0300********" name="phoneNmbr" required>
                    <input type="text" class="form-control" placeholder="Abc city" name="address" required>
                    <input type="password" class="form-control" placeholder="Password" name="password" required?>
               </div>
                <div>
                    <span class="error">
                        <?php
                        echo $_SESSION['login_failure'];
                        unset($_SESSION['login_failure']);
                        ?>
                    </span>
                </div>
                <div class="button">
                    <button class="btn btn-info btn-lg px-2">Log In</button>
                </div>
                <div>
                    <p>
                        Already have an account
                        <a href="./main.php">Sign In</a>
                    </p>
                </div>
            </form>

        </div>
    </div>
</body>

</html>