// Get the modal element
var modal = document.getElementById("loginModal");

// Get the button that opens the modal
var btn = document.getElementById("loginBtn");

// Get the <span> element that acts as a close button in the modal
var span = document.getElementsByClassName("close")[0];

// Function to open the modal and blur the background content
function openModal() {
    modal.style.display = "block";
    document.getElementById("mainContent").classList.add("modal-active");
}

// Function to close the modal and unblur the background content
function closeModal() {
    modal.style.display = "none";
    document.getElementById("mainContent").classList.remove("modal-active");
}

// Event listener for the login button
btn.addEventListener("click", openModal);

// Event listener for the close button (span)
span.addEventListener("click", closeModal);

// Event listener to close the modal if the user clicks outside of it
window.addEventListener("click", function(event) {
    if (event.target === modal) {
        closeModal();
    }
});


    window.onload = function() {
        // Check if there's an error message and display it
       document.getElementById('loginDiv').style.display = 'block'; // Show login div
    };

