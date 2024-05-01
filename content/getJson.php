<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Node.js Introduction</title>
</head>
<body>
<?php
$json = file_get_contents('content.json');
$data = json_decode($json, true);

// Assuming you want to print out the Express.js section
$expressData = $data['expressJs'];

echo "<h1>" . $expressData['title'] . "</h1>";
echo "<p>" . $expressData['introduction']['description'] . "</p>";

// Why learn Express.js
echo "<h2>" . $expressData['whyLearnExpress']['title'] . "</h2>";
echo "<p>" . $expressData['whyLearnExpress']['description'] . "</p>";

// Display core features
foreach ($expressData['coreFeatures'] as $feature => $details) {
    echo "<h3>" . ucfirst($feature) . "</h3>";
    echo "<p>" . $details['description'] . "</p>";
    if (isset($details['code'])) {
        echo "<pre>" . htmlspecialchars($details['code']) . "</pre>";
    }
    if (isset($details['examples'])) {
        foreach ($details['examples'] as $example) {
            echo "<p>" . $example['description'] . "</p>";
            echo "<pre>" . htmlspecialchars($example['code']) . "</pre>";
        }
    }
}
?>

</body>
</html>
