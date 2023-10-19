const passwordInput = document.getElementById('password');
const togglePasswordButton = document.getElementById('togglePassword');

togglePasswordButton.addEventListener('click', function() {
    const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
    passwordInput.setAttribute('type', type);
});

function validateForm() {
    var firstnameInput = document.getElementById("firstname");
    var firstnameError = document.getElementById("firstnameError");

    // Reset error message
    firstnameError.textContent = "";

    // Regular expression to allow only characters (no numbers)
    var lettersOnly = /^[A-Za-z]+$/;

    // Check if the input value contains only characters
    if (!firstnameInput.value.match(lettersOnly)) {
        firstnameError.textContent = "First Name must contain only letters.";
        return false; // Prevent form submission
    }
}

function toggleNavbar() {
    var navbar = document.querySelector('.navbar');
    navbar.classList.toggle('show-navbar');
}
//hello am here
