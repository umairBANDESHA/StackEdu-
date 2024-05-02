<?php
session_start();

// if(!isset($_SESSION['role'])){
//     header('Location: /StackEdu-/main.php'); 
// }


// // Set error reporting
// error_reporting(E_ALL & ~E_WARNING);

// // Set display_errors
// ini_set('display_errors', 'Off');
include('./../includes/header.php');
$data = file_get_contents('react.json');
$json_data = json_decode($data, true);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Render JSON Data in PHP</title>
    

</head>
<body>
<header class="bg-primary py-4">
        <div class="container text-center text-white">
            <h1 class="mb-0">React JS</h1>
        </div>
</header>
    <div id="data-container"></div>
    <script>
        // Function to render the JSON data on the PHP page
        function renderData(data) {
            const container = document.getElementById('data-container');

            // Iterate over the JSON data and construct HTML elements
            Object.keys(data).forEach(key => {
                const section = data[key];
                const sectionContainer = document.createElement('div');
                sectionContainer.classList.add('section');

                const title = document.createElement('h2');
                title.textContent = section.title;

                const description = document.createElement('p');
                description.textContent = section.description;

                sectionContainer.appendChild(title);
                sectionContainer.appendChild(description);

                // Check if additional data exists for the section
                if (section.installation) {
                    const installationHeader = document.createElement('h3');
                    installationHeader.textContent = 'Installation';
                    sectionContainer.appendChild(installationHeader);

                    const installationList = document.createElement('ol');
                    section.installation.forEach(step => {
                        const listItem = document.createElement('li');
                        listItem.textContent = step;
                        installationList.appendChild(listItem);
                    });
                    sectionContainer.appendChild(installationList);
                }

                // Check if additional code exists for the section
                if (section.code) {
                    const codeBlock = document.createElement('pre');
                    codeBlock.textContent = section.code;
                    sectionContainer.appendChild(codeBlock);
                }

                // Check if additional sections exist for the section
                if (section.steps) {
                    const stepsHeader = document.createElement('h3');
                    stepsHeader.textContent = 'Steps';
                    sectionContainer.appendChild(stepsHeader);

                    const stepsList = document.createElement('ol');
                    section.steps.forEach(step => {
                        const listItem = document.createElement('li');
                        listItem.textContent = `${step.step}. ${step.description}`;
                        if (step.code) {
                            const codeBlock = document.createElement('pre');
                            codeBlock.textContent = step.code;
                            listItem.appendChild(codeBlock);
                        }
                        stepsList.appendChild(listItem);
                    });
                    sectionContainer.appendChild(stepsList);
                }

                // Handle other sections

                // Check if additional features exist for the section
                if (section.features) {
                    const featuresHeader = document.createElement('h3');
                    featuresHeader.textContent = 'Features';
                    sectionContainer.appendChild(featuresHeader);

                    const featuresList = document.createElement('ul');
                    section.features.forEach(feature => {
                        const featureItem = document.createElement('li');
                        // Check if the feature is an object
                        if (typeof feature === 'object') {
                            // Render object properties as strings
                            let featureString = '';
                            for (const prop in feature) {
                                featureString += `${prop}: ${feature[prop]}\n`;
                            }
                            featureItem.textContent = featureString;
                        } else {
                            // Render string directly
                            featureItem.textContent = feature;
                        }
                        featuresList.appendChild(featureItem);
                    });
                    sectionContainer.appendChild(featuresList);
                }

                // Check if additional examples exist for the section
                if (section.examples) {
                    const examplesHeader = document.createElement('h3');
                    examplesHeader.textContent = 'Examples';
                    sectionContainer.appendChild(examplesHeader);

                    const examplesList = document.createElement('ul');
                    Object.keys(section.examples).forEach(key => {
                        const exampleItem = document.createElement('li');
                        const exampleValue = section.examples[key];
                        // Check if the example value is an object
                        if (typeof exampleValue === 'object') {
                            // Render object properties as strings
                            let exampleString = '';
                            for (const prop in exampleValue) {
                                exampleString += `${prop}: ${exampleValue[prop]}\n`;
                            }
                            exampleItem.textContent = `${key}: ${exampleString}`;
                        } else {
                            // Render string directly
                            exampleItem.textContent = `${key}: ${exampleValue}`;
                        }
                        examplesList.appendChild(exampleItem);
                    });
                    sectionContainer.appendChild(examplesList);
                }

                // Check if additional props exist for the section
                if (section.props) {
                    const propsHeader = document.createElement('h3');
                    propsHeader.textContent = 'Props';
                    sectionContainer.appendChild(propsHeader);

                    const propsList = document.createElement('ul');
                    section.props.forEach(prop => {
                        const propItem = document.createElement('li');
                        // Check if the prop is an object
                        if (typeof prop === 'object') {
                            // Render object properties as strings
                            let propString = '';
                            for (const propName in prop) {
                                propString += `${propName}: ${prop[propName]}\n`;
                            }
                            propItem.textContent = propString;
                        } else {
                            // Render string directly
                            propItem.textContent = prop;
                        }
                        propsList.appendChild(propItem);
                    });
                    sectionContainer.appendChild(propsList);
                }

                // Check if additional sections exist for passing events
                if (section.passingEvents) {
                    const passingEventsHeader = document.createElement('h3');
                    passingEventsHeader.textContent = 'Passing Events';
                    sectionContainer.appendChild(passingEventsHeader);

                    const passingEventsList = document.createElement('ul');
                    section.passingEvents.forEach(event => {
                        const eventItem = document.createElement('li');
                        eventItem.textContent = event;
                        passingEventsList.appendChild(eventItem);
                    });
                    sectionContainer.appendChild(passingEventsList);
                }

                // Check if additional sections exist for React conditional rendering
                if (section.conditionalRendering) {
                    const conditionalRenderingHeader = document.createElement('h3');
                    conditionalRenderingHeader.textContent = 'React Conditional Rendering';
                    sectionContainer.appendChild(conditionalRenderingHeader);

                    const conditionalRenderingList = document.createElement('ul');
                    section.conditionalRendering.forEach(condition => {
                        const conditionItem = document.createElement('li');
                        conditionItem.textContent = condition;
                        conditionalRenderingList.appendChild(conditionItem);
                    });
                    sectionContainer.appendChild(conditionalRenderingList);
                }

                // Check if additional sections exist for adding forms in React
                if (section.addingForms) {
                    const addingFormsHeader = document.createElement('h3');
                    addingFormsHeader.textContent = 'Adding Forms in React';
                    sectionContainer.appendChild(addingFormsHeader);

                    const addingFormsList = document.createElement('ul');
                    section.addingForms.forEach(form => {
                        const formItem = document.createElement('li');
                        formItem.textContent = form;
                        addingFormsList.appendChild(formItem);
                    });
                    sectionContainer.appendChild(addingFormsList);
                }

                container.appendChild(sectionContainer);
            });
        }

        // Function to fetch JSON data from the server
        function fetchData() {
            fetch('react.json')
                .then(response => response.json())
                .then(data => renderData(data))
                .catch(error => console.error('Error fetching data:', error));
        }

        // Call the fetchData function when the page loads
        window.addEventListener('load', fetchData);
    </script>
    <?php
include('./../includes/footer.php');

?>
</body>
</html>
