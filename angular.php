<?php

session_start();

if (!isset($_SESSION['role'])) {
    header('Location: ./main.php');
}


// Set error reporting
error_reporting(E_ALL & ~E_WARNING);

// Set display_errors
ini_set('display_errors', 'Off');


$json_data = file_get_contents('./content/angular.json');

// Decode JSON data into PHP array
$data = json_decode($json_data, true);
include('./includes/header.php');
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AngularJS Documentation</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header class="bg-success py-4">
        <div class="container text-center text-white">
            <h1 class="mb-0">Angular.JS</h1>
        </div>
    </header>
    <div class="container px-5">
    <?php
    function renderData($data)
    {
        foreach ($data as $key => $value) {
            if (is_array($value)) {
                if (isset($value['title'])) {
                    echo "<h2>{$value['title']}</h2>";
                }
                if (isset($value['description'])) {
                    echo "<p>{$value['description']}</p>";
                }
                if (isset($value['commands'])) {
                    echo "<ul>";
                    foreach ($value['commands'] as $command) {
                        echo "<li>{$command['command']} - {$command['description']}</li>";
                    }
                    echo "</ul>";
                }
                if (isset($value['content'])) {
                    echo "<ul>";
                    foreach ($value['content'] as $content) {
                        echo "<li>$content</li>";
                    }
                    echo "</ul>";
                }
                if (isset($value['examples'])) {
                    foreach ($value['examples'] as $example) {
                        echo "<h3>{$example['context']}</h3>";
                        echo "<p><strong>Child Component Code:</strong></p>";
                        echo "<pre><code>{$example['childComponent']['code']}</code></pre>";
                        echo "<p><strong>Parent Usage:</strong><br>{$example['parentUsage']}</p>";
                    }
                }
                if (isset($value['usage'])) {
                    echo "<p><strong>Usage:</strong></p>";
                    echo "<pre><code>{$value['usage']['code']}</code></pre>";
                }
                if (isset($value['sampleComponent'])) {
                    echo "<h3>{$value['sampleComponent']['title']}</h3>";
                    echo "<p><strong>Code:</strong></p>";
                    echo "<pre><code>{$value['sampleComponent']['code']}</code></pre>";
                }
                if (isset($value['sampleModule'])) {
                    echo "<h3>{$value['sampleModule']['title']}</h3>";
                    echo "<p><strong>Code:</strong></p>";
                    echo "<pre><code>{$value['sampleModule']['code']}</code></pre>";
                }
                if (isset($value['sampleService'])) {
                    echo "<h3>{$value['sampleService']['title']}</h3>";
                    echo "<p><strong>Code:</strong></p>";
                    echo "<pre><code>{$value['sampleService']['code']}</code></pre>";
                }
                if (isset($value['methods'])) {
                    foreach ($value['methods'] as $method => $methodData) {
                        echo "<h3>$method</h3>";
                        echo "<p><strong>Description:</strong><br>{$methodData['description']}</p>";
                        echo "<p><strong>Code:</strong></p>";
                        echo "<pre><code>{$methodData['code']}</code></pre>";
                    }
                }
                if (isset($value['templateDrivenForms'])) {
                    echo "<h3>{$value['templateDrivenForms']['description']}</h3>";
                    echo "<p><strong>Sample HTML:</strong></p>";
                    echo "<pre><code>{$value['templateDrivenForms']['sampleHtml']}</code></pre>";
                }
                if (isset($value['serviceTests'])) {
                    echo "<h3>{$value['serviceTests']['description']}</h3>";
                    echo "<p><strong>Example:</strong></p>";
                    echo "<pre><code>{$value['serviceTests']['example']}</code></pre>";
                    echo "<p><strong>Async Tests Example:</strong></p>";
                    echo "<pre><code>{$value['serviceTests']['asyncTests']['example']}</code></pre>";
                }
                if (isset($value['usage'])) {
                    echo "<p><strong>{$value['usage']['code']}</strong></p>";
                }
                if (isset($value['code'])) {
                    echo "<p><strong>Code:</strong></p>";
                    echo "<pre><code>{$value['code']}</code></pre>";
                }
                if (isset($value['sampleRouting'])) {
                    echo "<h3>{$value['sampleRouting']['title']}</h3>";
                    echo "<p><strong>Code:</strong></p>";
                    echo "<pre><code>{$value['sampleRouting']['code']}</code></pre>";
                }
            } else {
                echo "<p><strong>$key:</strong> $value</p>";
            }
        }
    }

    renderData($data);
    ?>
    </div>

    <?php
    include('../includes/footer.php');

    ?>
</body>

</html>