document.getElementById('techStackSelector').addEventListener('change', function() {
    var selectedStack = this.value;
    displayContentFor(selectedStack);
});

function displayContentFor(stack) {
    const contentArea = document.getElementById('contentArea');
    switch (stack) {
        case 'mern':
            contentArea.innerHTML = '<h2>MERN Stack</h2><p>Here are some resources for the MERN stack.</p><video src="mern-intro.mp4" controls></video>';
            break;
        case 'mean':
            contentArea.innerHTML = '<h2>MEAN Stack</h2><p>Learn about the MEAN stack with these tutorials.</p><video src="mean-tutorial.mp4" controls></video>';
            break;
        case 'lamp':
            contentArea.innerHTML = '<h2>LAMP Stack</h2><p>Comprehensive guides for the LAMP stack.</p>';
            break;
        default:
            contentArea.innerHTML = '<p>Select a technology stack to display the resources.</p>';
    }
}

// Initialize with default content
displayContentFor('mern');
