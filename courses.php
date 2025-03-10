 
<?php
session_start();

if(!isset($_SESSION['role'])){
    header('Location: main.php'); 
}



include('./includes/header.php');
// Set error reporting
error_reporting(E_ALL & ~E_WARNING);

// Set display_errors
ini_set('display_errors', 'Off');



?>
  <div class="container px-4 " id="custom-cards">
      <h2 class="pb-2 border-bottom">Technologies</h2>
      <div
        class="card_container row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5"
      >
        <!-- card -->
        <div class="col">
          <div
            class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg"
            style="background-image: url('unsplash-photo-2.jpg')"
          >
            <div class="p-3">
              <h2 class="fw-normal">ExpressJS</h2>
              <pre>
ExpressJS is a minimal and flexible 
Node.js web application framework
              </pre>
              <p>
                <a class="btn btn-secondary" href="./express.php">
                    View details »
                </a>
            </p>
            </div>
          </div>
        </div>
        <div class="col">
          <div
            class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg"
            style="background-image: url('unsplash-photo-2.jpg')"
          >
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

   </div>
    </div>


    <div class="container px-4 " id="custom-cards">
      <div
        class="card_container row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5"
      >
        <!-- card -->
        <div class="col">
          <div
            class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg"
            style="background-image: url('unsplash-photo-2.jpg')"
          >
            <div class="p-3">
              <h2 class="fw-normal">AngularJS</h2>
              <pre>
AngularJS is open-source JS based web
framework.It was maintained mainly by 
Google.
              </pre>
              <p><a class="btn btn-secondary" href="./angular.php">View details »</a></p>
            </div>
          </div>
        </div>
        <div class="col">
          <div
            class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg"
            style="background-image: url('unsplash-photo-2.jpg')"
          >
            <div class="p-3">
              <h2 class="fw-normal">MongoDB</h2>
              <pre>
MongoDB is a source-available, cross-
platform, document-oriented database 
program. Classified as a NoSQL database.
              </pre>
              <p><a class="btn btn-secondary" href="./mongoDB.php">View details »</a></p>
            </div>
          </div>
        </div>
        <div class="col">
          <div
            class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg"
            style="background-image: url('unsplash-photo-2.jpg')"
          >
            <div class="p-3">
              <h2 class="fw-normal">VueJS</h2>
              <pre>
Vue.js commonly referred to as Vue is an
open-source model–view front end JS
library for building user interfaces
              </pre>
              <p><a class="btn btn-secondary" href="./vue.php">View details »</a></p>
            </div>
          </div>
        </div>

   </div>
    </div>





   

<?php
include('./includes/footer.php');

?>