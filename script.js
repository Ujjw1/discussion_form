// Add event listener to newsletter subscribe button
document.querySelector('.footer-newsletter button').addEventListener('click', function () {
    // Get the email input value
    var email = document.querySelector('.footer-newsletter input[type="email"]').value;

    // Validate the email address
    if (email && validateEmail(email)) {
        // Send a request to subscribe to the newsletter
        console.log('Subscribed to newsletter with email: ' + email);
    } else {
        alert('Please enter a valid email address');
    }
});

// Function to validate email address
function validateEmail(email) {
    var re = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    return re.test(email);
}