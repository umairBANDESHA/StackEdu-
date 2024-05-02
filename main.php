<?php
include('./includes/header.php');
// Set error reporting
error_reporting(E_ALL & ~E_WARNING);

// Set display_errors
ini_set('display_errors', 'Off');


session_start();


// NODE JS
$json_data_NJ = file_get_contents('./content/node.json');
$data_NJ = json_decode($json_data, true);

// REACT JS

$json_data_RJ = json_decode($data, true);
$data_RJ = file_get_contents('./content/react.json');

// EXPRESS JS

$json_data_EJ = file_get_contents('./content/express.json');
$data_EJ = json_decode($json_data, true);

?>

<!-- SIGN IN DIV -->
    <div id="loginModal" class="modal page">
     
     <!-- LOgin design  -->
     <div class="modal-content container">
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
             <a href="./sign_up_page.php">Sign Up</a>
           </p>
         </div>
       </form>
     </div>
   </div>

<!-- PROFILE VIEW -->

  
  <!--Hero Section  -->
    <div class="container col-xxl-8 px-4 py-5">
      <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
        <div class="col-10 col-sm-8 col-lg-6">
          <img
            src="./img/hero_section.jpg"
            class="d-block mx-lg-auto img-fluid"
            alt="Bootstrap Themes"
            width="700"
            height="500"
            loading="lazy"
          />
        </div>
        <div class="col-lg-6">
          <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">
            Responsive left-aligned hero with image
          </h1>
          <p class="lead">
            Quickly design and customize responsive mobile-first sites with
            Bootstrap, the world’s most popular front-end open source toolkit,
            featuring Sass variables and mixins, responsive grid system,
            extensive prebuilt components, and powerful JavaScript plugins.
          </p>
          <div class="d-grid gap-2 d-md-flex justify-content-md-start">
            <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">
              Primary
            </button>
            <button type="button" class="btn btn-outline-secondary btn-lg px-4">
              Default
            </button>
          </div>
        </div>
      </div>
    </div>

    <!-- Recomended-->
    <div class="container px-4 py-5" id="custom-cards">
      <h2 class="pb-2 border-bottom">Recomended Technologies</h2>
      <div
        class="card_container row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
        <!-- card -->
        <div class="col">
          <div
            class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg"
            style="background-image: url('unsplash-photo-2.jpg')"
          >
            <img src="./img/stack_1.jpg" alt="" width="100%" height="200" />
            <div class="p-3">
              <h2 class="fw-normal">NodeJS</h2>
              <pre>
It is an open-source,cross-platform,
JavaScript runtime environment
              </pre>
              <p><a class="btn btn-secondary" href="./node.php">View details »</a></p>
            </div>
          </div>
        </div>

        <div class="col">
          <div
            class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg"
            style="background-image: url('unsplash-photo-2.jpg')"
          >
          
            <img src="./img/stack_1.jpg" alt="" width="100%" height="200" />
            <div class="p-3">
              <h2 class="fw-normal">ReactJS</h2>
              <pre>
ReactJS is a declarative, efficient, 
and flexible JavaScript library.
              </pre>
              <p><a class="btn btn-secondary" href="./react.php">View details »</a></p>
            </div>
          </div>
        </div>

        <div class="col">
          <div
            class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg"
            style="background-image: url('unsplash-photo-2.jpg')"
          >
            <img src="./img/stack_1.jpg" alt="" width="100%" height="200" />
            <div class="p-3">
              <h2 class="fw-normal">ExpressJS</h2>
              <pre>
ExpressJS is a minimal and flexible 
Node.js web application framework
              </pre>
              <p><a class="btn btn-secondary" href="./express.php">View details »</a></p>
            </div>
          </div>
        </div>

    </div>
    </div>

    <!-- Trending -->
    <div class="container px-4 py-5" id="custom-cards">
      <h2 class="pb-2 border-bottom">Trending Web-Devlopment Stack</h2>
      <div
        class="card_container row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5"
      >
        <!-- Side Buttons -->
        <!-- <ul
        class="controls"
        id="sliderFirstControls"
        aria-label="Carousel Navigation"
        tabindex="0"
      >
        <li
          class="prev"
          aria-controls="tns1"
          tabindex="-1"
          data-controls="prev"
        >
          <i class="fa-solid fa-chevron-left"></i>
        </li>
        <li
          class="next"
          aria-controls="tns1"
          tabindex="-1"
          data-controls="next"
        >
          <i class="fe fe-chevron-right"></i>
          <i class="fa-solid fa-chevron-right"></i>
        </li>
      </ul> -->
        <!-- card -->
        <div class="col">
          <div
            class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg"
            style="background-image: url('unsplash-photo-2.jpg')"
          >
            <img src="./img/stack_1.jpg" alt="" width="100%" height="200" />
            <div class="p-3">
              <h2 class="fw-normal">MERN</h2>
              <pre>
MERN stack is popular stack to build
dynamic full-stack web apps.
              </pre>
              <p><a class="btn btn-secondary" href="./mernStack.php">View details »</a></p>
            </div>
          </div>
        </div>

   </div>
    </div>





    <!-- FOOTER -->
<?php
    include('./includes/footer.php');
?>

<script>
    window.onload = function() {
        // Check if there's an error message and display it
        <?php if (isset($_SESSION['login_failure'])): ?>
        document.getElementById('loginModal').style.display = 'block'; // Show login div
        // document.getElementById('errorDiv').style.display = 'block'; // Show error div
        // <?php
            unset($_SESSION['login_failure']); // Clear the error message for future page loads
        endif;
        ?>
    };
</script>

