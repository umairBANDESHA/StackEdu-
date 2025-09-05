<?php
session_start();


if (!isset($_SESSION['role'])) {
    header('Location: ./main.php');
}

// Set error reporting
error_reporting(E_ALL & ~E_WARNING);

// Set display_errors
ini_set('display_errors', 'Off');

include('./includes/header.php');
?>


<div class=" text-secondary px-4 py-5 text-center">
    <div class="py-5">
        <h1 class="display-5 fw-bold ">Web Development Stacks</h1>
        <div class="col-lg-6 mx-auto">
            <p class="fs-5 mb-4">
                The MERN stack, comprising MongoDB, Express.js, React.js, and Node.js, represents a powerful set of
                technologies for building dynamic and scalable full-stack web applications. This stack leverages the
                full potential of JavaScript development, enabling seamless development of fast, responsive user
                interfaces with React.js, robust backend functionality with Node.js and Express.js, and flexible,
                schema-less database interactions with MongoDB. Ideal for developing modern web applications requiring
                real-time data exchange and complex functionalities, the MERN stack simplifies development processes,
                reduces context switching, and enhances application performance, making it a popular choice among
                developers looking to build efficient, feature-rich applications.
            </p>

        </div>
    </div>
</div>

<?php
include './MERN_STACK.xml';
?>


<?php
include('./includes/footer.php');
?>