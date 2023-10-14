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

// function validateForm() {
//     var yearInput = document.getElementById("yearofstudies");
//     var yearError = document.getElementById("yearError");

//     // Reset error message
//     yearError.textContent = "";

//     // Parse the input value to ensure it's treated as a number
//     var yearValue = parseInt(yearInput.value);

//     // Check if the parsed input value is a valid number
//     if (isNaN(yearValue)) {
//         yearError.textContent = "Year of Studies must be a number.";
//         return false; // Prevent form submission
//     }

//     // Check if the parsed input value is within the valid range
//     if (yearValue < 1 || yearValue > 4) {
//         yearError.textContent = "Year of Studies must be a number between 1 and 4.";
//         return false; // Prevent form submission
//     }
// }


