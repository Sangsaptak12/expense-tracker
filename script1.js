document.addEventListener('DOMContentLoaded', function() {
    const loginLink = document.querySelector('.login');
    const logink = document.querySelector('.login-link');
    const registerLink = document.querySelector('.register-link');
    const loginForm = document.querySelector('.form_box');
    const registerForm = document.querySelector('.reg_box');
    const closeIcons = document.querySelectorAll('.icon_close');
    const coverBox = document.querySelector('.cover_box');

    // Function to show login form
    function showLoginForm() {
        coverBox.classList.remove('active2');
        loginForm.classList.add('active'); 
        loginForm.style.display = 'flex';
        registerForm.style.display = 'none';
        coverBox.style.display = 'flex';
    }

    // Function to show registration form
    function showRegisterForm() {
        coverBox.classList.add('active2');
        registerForm.style.display = 'flex';
        loginForm.style.display = 'none';
        coverBox.style.display = 'flex';
    }

    // Event listener for login button in navigation
    loginLink.addEventListener('click', function(event) {
        event.preventDefault();
        showLoginForm();
    });
    // Event listener for login link
    logink.addEventListener('click', function(event) {
        event.preventDefault();
        showLoginForm();
    });

    // Event listener for register link
    registerLink.addEventListener('click', function(event) {
        event.preventDefault();
        showRegisterForm();
    });

    // Event listeners for close icons
    closeIcons.forEach(function(icon) {
        icon.addEventListener('click', function() {
            coverBox.style.display = 'none';
        });
    });
    showLoginForm();
    // You can keep the form submission event listeners for login and registration forms as in the previous code.
});
