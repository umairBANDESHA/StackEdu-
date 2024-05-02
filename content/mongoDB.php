
<?php
session_start();

if(!isset($_SESSION['role'])){
    header('Location: /StackEdu-/main.php'); 
}


// Set error reporting
error_reporting(E_ALL & ~E_WARNING);

// Set display_errors
ini_set('display_errors', 'Off');
include('./../includes/header.php');


// Read JSON file
$json_data = file_get_contents('mongoDB.json');

// Decode JSON data into PHP array
$data = json_decode($json_data, true);
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
<header class="bg-primary py-4">
        <div class="container text-center text-white">
            <h1 class="mb-0">MongoDB</h1>
        </div>
</header>
<?php

// Function to render description and code snippet
function renderDescriptionAndCode($description, $codeSnippet) {
    echo "<p>$description</p>";
    if (is_array($codeSnippet)) {
        echo "<pre><code>";
        foreach ($codeSnippet as $code) {
            echo htmlspecialchars($code) . "<br>";
        }
        echo "</code></pre>";
    } else {
        echo "<pre><code>" . htmlspecialchars($codeSnippet) . "</code></pre>";
    }
}



// Render MongoDB Overview section
echo "<div>";
echo "<div>";
echo "<h2>{$data['mongodb']['mongodbOverview']['title']}</h2>";
echo "<p>{$data['mongodb']['mongodbOverview']['description']}</p>";
echo "</div>";

// Render Database Comparison section
echo "<div>";
echo "<h2>{$data['mongodb']['databaseComparison']['title']}</h2>";
foreach ($data['mongodb']['databaseComparison']['description'] as $paragraph) {
    echo "<p>$paragraph</p>";
}
echo "</div>";

// Render Local vs Cloud Database section
echo "<div>";
echo "<h2>{$data['mongodb']['localVsCloud']['title']}</h2>";
foreach ($data['mongodb']['localVsCloud']['description'] as $paragraph) {
    echo "<p>$paragraph</p>";
}
echo "</div>";

// Render Creating a Cluster section
echo "<div>";
echo "<h2>{$data['mongodb']['creatingCluster']['title']}</h2>";
foreach ($data['mongodb']['creatingCluster']['description'] as $paragraph) {
    echo "<p>$paragraph</p>";
}
echo "</div>";

// Render Install MongoDB Shell section
echo "<div>";
echo "<h2>{$data['mongodb']['installMongoDBShell']['title']}</h2>";
foreach ($data['mongodb']['installMongoDBShell']['description'] as $paragraph) {
    echo "<p>$paragraph</p>";
}
echo "</div>";

// Render Connect to Database section
echo "<div>";
echo "<h2>{$data['mongodb']['connectToDatabase']['title']}</h2>";
foreach ($data['mongodb']['connectToDatabase']['description'] as $paragraph) {
    echo "<p>$paragraph</p>";
}
echo "</div>";

// Render Databases and Collections section
echo "<div>";
echo "<h2>{$data['mongodb']['mongoCommands']['databasesAndCollections']['title']}</h2>";
foreach ($data['mongodb']['mongoCommands']['databasesAndCollections']['operations'] as $operation) {
    echo "<div>";
    echo "<h3>{$operation['title']}</h3>";
    renderDescriptionAndCode($operation['description'], $operation['codeSnippet']);
    echo "</div>";
}
echo "</div>";

// Render CRUD section
echo "<div>";
echo "<h2>CRUD</h2>";
foreach ($data['mongodb']['mongoCommands']['CRUD'] as $crudOperation) {
    echo "<div>";
    echo "<h3>{$crudOperation['title']}</h3>";
    foreach ($crudOperation['commands'] as $command) {
        echo "<div>";
        echo "<p>{$command['description']}</p>";
        renderDescriptionAndCode('', $command['code']);
        echo "</div>";
    }
    echo "</div>";
}
echo "</div>";

echo "</div>";
?>
<?php
include('./../includes/footer.php');

?>
</body>
</html>



