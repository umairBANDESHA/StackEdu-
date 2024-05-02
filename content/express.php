
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
$json_data = file_get_contents('express.json');

// Decode JSON data into PHP array
$data = json_decode($json_data, true);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Express.js Guide</title>
</head>
<body>
<header class="bg-primary py-4">
        <div class="container text-center text-white">
            <h1 class="mb-0">Express.JS</h1>
        </div>
    </header
    <h1><?php echo $data['expressJs']['title']; ?></h1>

    <h2>Introduction</h2>
    <p><?php echo $data['expressJs']['introduction']['description']; ?></p>

    <h2><?php echo $data['expressJs']['whyLearnExpress']['title']; ?></h2>
    <p><?php echo $data['expressJs']['whyLearnExpress']['description']; ?></p>

    <h2>Core Features</h2>
    <h3>Express Function</h3>
    <p><?php echo $data['expressJs']['coreFeatures']['expressFunction']['description']; ?></p>
    <pre><code><?php echo $data['expressJs']['coreFeatures']['expressFunction']['code']; ?></code></pre>

    <h3>Application Object</h3>
    <p><?php echo $data['expressJs']['coreFeatures']['applicationObject']['description']; ?></p>
    <pre><code><?php echo $data['expressJs']['coreFeatures']['applicationObject']['examples'][0]['code']; ?></code></pre>

    <h3>Mount Path</h3>
    <p><?php echo $data['expressJs']['coreFeatures']['mountPath']['description']; ?></p>
    <pre><code><?php echo $data['expressJs']['coreFeatures']['mountPath']['example']; ?></code></pre>

    <h3>Router</h3>
    <p><?php echo $data['expressJs']['coreFeatures']['router']['description']; ?></p>
    <pre><code><?php echo $data['expressJs']['coreFeatures']['router']['code']; ?></code></pre>

    <h2>Router Objects</h2>
    <p><?php echo $data['expressJs']['routerObjects']['description']; ?></p>
    <h3>Creating Router</h3>
    <p><?php echo $data['expressJs']['routerObjects']['creatingRouter']['description']; ?></p>
    <pre><code><?php echo $data['expressJs']['routerObjects']['creatingRouter']['code']; ?></code></pre>

    <h2>Connecting to Databases</h2>
    <p><?php echo $data['expressJs']['connectingToDatabases']['description']; ?></p>
    <ul>
    <?php foreach ($data['expressJs']['connectingToDatabases']['libraries'] as $library): ?>
        <li><a href="<?php echo $library['link']; ?>"><?php echo $library['name']; ?></a>: <?php echo $library['description']; ?></li>
    <?php endforeach; ?>
    </ul>

    <h2>Making API Calls</h2>
    <p><?php echo $data['expressJs']['makingApiCalls']['description']; ?></p>
    <ul>
    <?php foreach ($data['expressJs']['makingApiCalls']['options'] as $option): ?>
        <li><a href="<?php echo $option['link']; ?>"><?php echo $option['name']; ?></a>: <?php echo $option['description']; ?></li>
    <?php endforeach; ?>
    </ul>
    <?php
include('./../includes/footer.php');

?>
</body>
</html>
