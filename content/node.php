<?php

session_start();

if(!isset($_SESSION['role'])){
    header('Location: main.php'); 
}


// Set error reporting
error_reporting(E_ALL & ~E_WARNING);

// Set display_errors
ini_set('display_errors', 'Off');
include('./../includes/header.php');


// Read JSON file
$json_data = file_get_contents('node.json');

// Decode JSON data into PHP array
$data = json_decode($json_data, true);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $data['nodeJs']['title']; ?></title>
</head>
<body>
<header class="bg-primary py-4">
        <div class="container text-center text-white">
            <h1 class="mb-0">Node.JS</h1>
        </div>
    </header
    <h1><?php echo $data['nodeJs']['title']; ?></h1>

    <h2>Description</h2>
    <ul>
    <?php foreach ($data['nodeJs']['description'] as $item): ?>
        <li><?php echo $item; ?></li>
    <?php endforeach; ?>
    </ul>

    <h2><?php echo $data['nodeJs']['serverComparison']['title']; ?></h2>
    <h3>PHP/ASP</h3>
    <ul>
    <?php foreach ($data['nodeJs']['serverComparison']['phpAsp'] as $item): ?>
        <li><?php echo $item; ?></li>
    <?php endforeach; ?>
    </ul>
    <h3>Node.js</h3>
    <ul>
    <?php foreach ($data['nodeJs']['serverComparison']['nodeJs'] as $item): ?>
        <li><?php echo $item; ?></li>
    <?php endforeach; ?>
    </ul>

    <h2><?php echo $data['nodeJs']['capabilities']['title']; ?></h2>
    <ul>
    <?php foreach ($data['nodeJs']['capabilities']['list'] as $item): ?>
        <li><?php echo $item; ?></li>
    <?php endforeach; ?>
    </ul>

    <h2><?php echo $data['nodeJs']['fileDetails']['title']; ?></h2>
    <ul>
    <?php foreach ($data['nodeJs']['fileDetails']['description'] as $item): ?>
        <li><?php echo $item; ?></li>
    <?php endforeach; ?>
    </ul>

    <h2><?php echo $data['nodeJs']['gettingStarted']['title']; ?></h2>
    <p><?php echo $data['nodeJs']['gettingStarted']['description']; ?></p>
    <pre><code><?php echo $data['nodeJs']['gettingStarted']['codeExample']; ?></code></pre>
    <ul>
    <?php foreach ($data['nodeJs']['gettingStarted']['cliDetails'] as $item): ?>
        <li><?php echo $item; ?></li>
    <?php endforeach; ?>
    </ul>
    <ul>
    <?php foreach ($data['nodeJs']['gettingStarted']['initiateFile'] as $item): ?>
        <li><?php echo $item; ?></li>
    <?php endforeach; ?>
    </ul>

    <h2><?php echo $data['nodeJs']['nodeJsWebServer']['title']; ?></h2>
    <p><?php echo implode('<br>', $data['nodeJs']['nodeJsWebServer']['introduction']); ?></p>
    <pre><code><?php echo $data['nodeJs']['nodeJsWebServer']['example']['code']; ?></code></pre>
    <p><?php echo $data['nodeJs']['nodeJsWebServer']['example']['description']; ?></p>
    <pre><code><?php echo $data['nodeJs']['nodeJsWebServer']['detailedExample']['code']; ?></code></pre>
    <p><?php echo $data['nodeJs']['nodeJsWebServer']['detailedExample']['description']; ?></p>

    <h2><?php echo $data['nodeJs']['crudOperations']['title']; ?></h2>
    <p><?php echo $data['nodeJs']['crudOperations']['introduction']; ?></p>

    <h3>Create</h3>
    <p><?php echo $data['nodeJs']['crudOperations']['operations']['create']['description']; ?></p>
    <pre><code><?php echo $data['nodeJs']['crudOperations']['operations']['create']['code']; ?></code></pre>

    <h3>Read</h3>
    <p><?php echo $data['nodeJs']['crudOperations']['operations']['read']['description']; ?></p>
    <pre><code><?php echo $data['nodeJs']['crudOperations']['operations']['read']['code']; ?></code></pre>

    <h3>Update</h3>
    <p><?php echo $data['nodeJs']['crudOperations']['operations']['update']['description']; ?></p>
    <pre><code><?php echo $data['nodeJs']['crudOperations']['operations']['update']['code']; ?></code></pre>

    <h3>Delete</h3>
    <p><?php echo $data['nodeJs']['crudOperations']['operations']['delete']['description']; ?></p>
    <pre><code><?php echo $data['nodeJs']['crudOperations']['operations']['delete']['code']; ?></code></pre>
    <?php
include('./../includes/footer.php');

?>
</body>
</html>
