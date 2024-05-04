<?php

session_start();

if (!isset($_SESSION['role'])) {
    header('Location: main.php');
}


// Set error reporting
error_reporting(E_ALL & ~E_WARNING);

// Set display_errors
ini_set('display_errors', 'Off');
include('./includes/header.php');


// Read JSON file
$jsonData = file_get_contents('./content/vue.json');

// Decode JSON data
$data = json_decode($jsonData, true);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    
        <link rel="stylesheet" href="style.css">
        
</head>

<body>
    <header class="py-4 bg-success">
        <div class="container text-center text-black">
            <h1 class="mb-0">Vue.JS</h1>
        </div>
</header>
<div class="container px-5">
<?php
    // Function to render code snippets
    function renderCode($code)
    {
        return "<pre><code class=' text-dark'>{$code}</code></pre>";
    }

    // Function to render list items
    function renderList($items)
    {
        $html = '<ul>';
        foreach ($items as $item) {
            $html .= "<li>{$item}</li>";
        }
        $html .= '</ul>';
        return $html;
    }

    // Function to render examples
    function renderExamples($examples)
    {
        $html = '<ul>';
        foreach ($examples as $example) {
            $html .= "<li>{$example['usage']} - {$example['description']}</li>";
        }
        $html .= '</ul>';
        return $html;
    }

    // Render Introduction section
    $introduction = $data['vueJs']['vueIntroduction'];
    echo "<h2>{$introduction['title']}</h2>";
    echo "<p>{$introduction['description']}</p>";
    if (isset($introduction['scriptTag'])) {
        echo "<h3>{$introduction['scriptTag']['title']}</h3>";
        echo "<p>{$introduction['scriptTag']['description']}</p>";
        echo renderCode($introduction['scriptTag']['code']);
    }

    // Render Why Learn Vue? section
    $whyLearnVue = $data['vueJs']['whyLearnVue'];
    echo "<h2>{$whyLearnVue['title']}</h2>";
    echo "<p>{$whyLearnVue['description']}</p>";



    // Render Creating Your App with Vite section
    $creatingAppWithVite = $data['vueJs']['creatingAppWithVite'];
    echo "<h2>{$creatingAppWithVite['title']}</h2>";
    echo "<p>{$creatingAppWithVite['description']}</p>";
    echo renderList($creatingAppWithVite['commands']);

    // Render Template Syntax section
    $templateSyntax = $data['vueJs']['templateSyntax'];
    echo "<h2>{$templateSyntax['title']}</h2>";
    echo "<p>{$templateSyntax['description']}</p>";
    echo "<h3>{$templateSyntax['textInterpolation']['description']}</h3>";
    echo renderCode($templateSyntax['textInterpolation']['list'][0]);
    echo renderCode($templateSyntax['textInterpolation']['list'][1]);
    echo "<h3>{$templateSyntax['settingInnerHTML']['description']}</h3>";
    echo renderCode($templateSyntax['settingInnerHTML']['code']);
    echo "<h3>{$templateSyntax['jsExpressions']['title']}</h3>";
    echo "<p>{$templateSyntax['jsExpressions']['description']}</p>";
    echo renderCode($templateSyntax['jsExpressions']['validExample']);
    echo renderCode($templateSyntax['jsExpressions']['invalidExample']);

    // Render Vue Directives section
    $directives = $data['vueJs']['directives'];
    echo "<h2>{$directives['title']}</h2>";
    echo "<p>{$directives['description']}</p>";
    echo "<ul>";
    foreach ($directives['list'] as $directive) {
        echo "<li><strong>{$directive['name']}</strong>: {$directive['usage']}</li>";
    }
    echo "</ul>";

    // Render Conditional Rendering section
    $conditionalRendering = $data['vueJs']['conditionalRendering'];
    echo "<h2>{$conditionalRendering['title']}</h2>";
    echo "<p>{$conditionalRendering['description']}</p>";
    echo renderExamples($conditionalRendering['examples']);

    // Render Event Handling section
    $eventHandling = $data['vueJs']['eventHandling'];
    echo "<h2>{$eventHandling['title']}</h2>";
    echo "<p>{$eventHandling['description']}</p>";
    echo renderExamples($eventHandling['examples']);

    // Render List Rendering section
    $listRendering = $data['vueJs']['listRendering'];
    echo "<h2>{$listRendering['title']}</h2>";
    echo "<p>{$listRendering['description']}</p>";
    echo renderExamples($listRendering['examples']);

    // Render Data Binding section
    $dataBinding = $data['vueJs']['dataBinding'];
    echo "<h2>{$dataBinding['title']}</h2>";
    echo "<p>{$dataBinding['description']}</p>";
    echo "<ul>";
    foreach ($dataBinding['examples'] as $example) {
        echo "<li><strong>{$example['binding']}</strong>: {$example['description']}</li>";
    }
    echo "</ul>";


    // Render Binding Class and Style section
    $bindingClassStyle = $data['vueJs']['bindingClassStyle'];
    echo "<h2>{$bindingClassStyle['title']}</h2>";
    echo "<p>{$bindingClassStyle['description']}</p>";
    echo "<ul>";
    foreach ($bindingClassStyle['examples'] as $example) {
        echo "<li><strong>{$example['binding']}</strong>: {$example['description']}</li>";
    }
    echo "</ul>";

    // Render Vue.js Lifecycle Hooks section
    $vueLifecycleHooks = $data['vueJs']['vueLifecycleHooks'];
    echo "<h2>{$vueLifecycleHooks['title']}</h2>";
    echo "<p>{$vueLifecycleHooks['description']}</p>";
    echo "<ul>";
    foreach ($vueLifecycleHooks['hooks'] as $hook) {
        echo "<li><strong>{$hook['name']}</strong>: {$hook['description']}</li>";
    }
    echo "</ul>";
    echo "<p><strong>Example:</strong> {$vueLifecycleHooks['example']}</p>";

    // Render watchEffect Function section
    $watchEffectFunction = $data['vueJs']['watchEffectFunction'];
    echo "<h2>{$watchEffectFunction['title']}</h2>";
    echo "<p>{$watchEffectFunction['description']}</p>";
    echo renderCode($watchEffectFunction['usage']);

    // Render Template Refs section
    $templateRefs = $data['vueJs']['templateRefs'];
    echo "<h2>{$templateRefs['title']}</h2>";
    echo "<p>{$templateRefs['description']}</p>";
    echo "<p>{$templateRefs['usage']}</p>";
    echo renderCode($templateRefs['script']);
    // echo "<p><strong>Script:</strong><pre><code> {$}</code></pre></p>";
    
    // Render Top Vue Libraries section
    $topVueLibraries = $data['vueJs']['topVueLibraries'];
    echo "<h2>{$topVueLibraries['title']}</h2>";
    echo "<p>{$topVueLibraries['description']}</p>";
    echo "<ul>";
    foreach ($topVueLibraries['libraries'] as $library) {
        echo "<li><strong>{$library['name']}</strong>: {$library['description']}</li>";
    }
    echo "</ul>";

    // Render Vue Testing section
    $vueTesting = $data['vueJs']['vueTesting'];
    echo "<h2>{$vueTesting['title']}</h2>";
    echo "<p>{$vueTesting['description']}</p>";
    echo "<ul>";
    foreach ($vueTesting['libraries'] as $library) {
        echo "<li><strong>{$library['name']}</strong>: {$library['description']}</li>";
    }
    echo "</ul>";
    echo "<p><strong>Example:</strong> <pre><code>{$vueTesting['example']}</code></pre></p>";

    // Render Server-Side Rendering (SSR) section
    $serverSideRendering = $data['vueJs']['serverSideRendering'];
    echo "<h2>{$serverSideRendering['title']}</h2>";
    echo "<p>{$serverSideRendering['description']}</p>";
    echo "<ul>";
    foreach ($serverSideRendering['libraries'] as $library) {
        echo "<li><strong>{$library['name']}</strong>: {$library['description']}</li>";
    }
    echo "</ul>";
    ?> 
</div>
    <?php
     include('./includes/footer.php');

     ?> </body>

</html>