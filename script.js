document.addEventListener("DOMContentLoaded", function () {
    // Get the elements for login and register forms
    const loginForm = document.getElementById("login");
    const registerForm = document.getElementById("register");

    // Get the elements that trigger the switch between login and register
    const changeToRegisterBtn = document.getElementById("changeToRegister");
    const changeToLoginBtn = document.getElementById("changeToLogin");

    // Function to switch to the register form
    function changeToRegister() {
        loginForm.classList.add("hidden");
        registerForm.classList.remove("hidden");
    }

    // Function to switch to the login form
    function changeToLogin() {
        registerForm.classList.add("hidden");
        loginForm.classList.remove("hidden");
    }

    // Add event listeners for switching forms
    changeToRegisterBtn.addEventListener("click", changeToRegister);
    changeToLoginBtn.addEventListener("click", changeToLogin);
});
