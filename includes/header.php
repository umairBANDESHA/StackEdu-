<?php
// Set error reporting
error_reporting(E_ALL & ~E_WARNING);

// Set display_errors
ini_set('display_errors', 'Off');

session_start();

if(!isset($session['imagePath'])){
    $session['imagePath'] = "./icons/user.png"; 
}
if(!isset( $_SESSION['loginBtn'])){
    $session['loginBtn'] = "Log In"; 
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>StackEdu</title>
    <!-- bootstrap -->
    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
    crossorigin="anonymous"
    />
    <link rel="stylesheet" href="./css/styles.css" />
    <style>
     
    </style>
  </head>
  <body>
    <!-- Header -->
    <header class="mb-3 border-bottom">
      <div class="container text-white">
        <div
          class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start"
        >
          <a
            href="./main.php"
            class="d-flex align-items-center mb-2 mb-lg-0 link-body-emphasis text-decoration-none"
          >
            <img src="./logo/7.png" alt="" width="60" height="72" />
          </a>

          <ul
            class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0 text-white"
          >
            <li>
              <a
                href="./courses.php"
                class="dropdown-toggle nav-link px-2 link-body-emphasis text-white"
                data-bs-toggle="dropdown"
                >Courses</a
              >
              <ul class="dropdown-menu text-small">
                <li><a class="dropdown-item" href="./courses.php">MERN Stack</a></li>
                <li><a class="dropdown-item" href="./courses.php">MEAN Stack</a></li>
                <li><a class="dropdown-item" href="./courses.php">Django Stack</a></li>
                <li><a class="dropdown-item" href="./courses.php">Laravel Stack</a></li>
                <li><a class="dropdown-item" href="./courses.php">Linux Stack</a></li>
                <!-- <li><hr class="dropdown-divider" /></li> -->
              </ul>
            </li>
        
            <li>
              <a href="./roadmaps.php" class="text-white nav-link px-2 link-body-emphasis"
                >Roadmaps</a
              >
            </li>
            <li>
              <a href="./about.php" class="text-white nav-link px-2 link-body-emphasis"
                >About Us</a
              >
            </li>
            <li>
              <a href="./contact.php" class="text-white nav-link px-2 link-body-emphasis"
                >Contact Us</a
              >
            </li>
          </ul>

          <form class=" col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
            <input
              type="search"
              class="form-control"
              placeholder="Search..."
              aria-label="Search"
            />
          </form>

          <div class="dropdown text-end">
            <a
              href="#"
              class="d-block link-body-emphasis text-decoration-none dropdown-toggle"
              data-bs-toggle="dropdown"
              aria-expanded="false"
            >
            <?PHP echo '
              <img
                src="'. $session['imagePath'].'"
                alt="mdo"
                width="32"
                height="32"
                class="rounded-circle border"
              />';
              ?>
            </a>
            <ul class="dropdown-menu text-small">
              <li><a class="dropdown-item" href="#">Profile</a></li>
              <li><hr class="dropdown-divider" /></li>
              <li>
 
                <a class="dropdown-item" href="#" id=loginBtn > Login</a>
                
              </li>
            </ul>
          </div>
        </div>
      </div>
    </header>

  


<!-- LogIn -->
<div id="loginModal" class="modal page">
     
     <!-- LOgin design  -->
     <div class="model-content container">
       <span class="close">&times;</span>
      <img src="./logo/8.png" alt="" class="center-margin" width="130px" height="85px">

       <form action="./includes/connect.php" method="post">
         <div <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>  class="input">
           <input
             type="text"
             class="form-control"
             placeholder="User Name"
             name="name"
             required
           />
           <span class="help-block <?php echo $username_err; ?>"></span>
           <input
             type="password"
             class="form-control"
             placeholder="Password"
             name="password"
             required?
           />
           <span class="help-block <?php echo $password_err; ?>"> </span>
         </div>
         <div>
           <span class="error">
             <?php
                   echo $_SESSION['login_failure'];
                   unset($_SESSION['login_failure']);
                   ?>
           </span>
         </div>

         <!--  -->
         <div class="button">
           <button class="btn btn-info btn-lg px-2">Log In</button>
         </div>
         <div>
           <p>
             Don't have an account
             <a href="#">Sign Up</a>
           </p>
         </div>
       </form>
     </div>
   </div>
