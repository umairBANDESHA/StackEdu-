<?php
session_start();

// if (!isset($_SESSION['role'])) {
//     header('Location: main.php');
// }



include('./includes/header.php');
// Set error reporting
error_reporting(E_ALL & ~E_WARNING);

// Set display_errors
ini_set('display_errors', 'Off');

?>
<!-- MERN STACK -->
<div class=" text-secondary px-4 py-5 text-center">
    <div class="py-5">
        <h1 class="display-5 fw-bold ">Web Development Stacks</h1>
        <div class="col-lg-6 mx-auto">
            <p class="fs-5 mb-4">The MERN stack, comprising MongoDB, Express.js, React, and Node.js, is a cohesive set
                of technologies used for building efficient and scalable web applications.

                Its popularity stems from the seamless integration of each component: MongoDB's flexible data handling,
                Express.js's efficient server-side networking, React's dynamic user interfaces, and Node.js's powerful
                back-end runtime environment.

                For beginners, the MERN stack is a smart choice because it uses JavaScript across all layers,
                simplifying the learning curve. This uniformity, coupled with a strong community and ample learning
                resources, makes it an accessible and practical toolkit for anyone looking to dive into full-stack
                development.
            </p>
            <div class="d-grid gap-5 d-sm-flex justify-content-sm-center">
                <a href="#mern">
                    <button type="button" class="btn btn-outline-dark btn-lg mx- px-4" id="mernBtn">MERN Stack</button>
                </a>
                <a href="#mean">
                    <button type="button" class="btn btn-outline-dark btn-lg mx- px-4" id="meanBtn">MEAN Stack</button>
                </a>
                <a href="#mevn">
                    <button type="button" class="btn btn-outline-dark btn-lg mx- px-4" id="mevnBtn">MEVN Stack</button>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- MERN stack -->
<div id="mern" class="modal_Mern page" >

    <!-- LOgin design  -->
    <div class="modal-content_Mern container">
        <span class="close_Mern">&times;</span>
        <?php
        include('MERN_STACK.xml');
        ?>
    </div>
</div>
<!-- MEAN stack -->
<div class="mean"  id="mean">
    <?php
    include('MEAN_STACK.xml');
    ?>
</div>

<!-- MEVN stack -->
<div class="mevn" id="mevn">
    <?php
    include('MEVN_STACK.xml');
    ?>
</div>



<?php
include('./includes/footer.php');

?>