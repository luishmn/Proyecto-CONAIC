const passwordField = document.getElementById("contrasena");
const confirmPasswordField = document.getElementById("contrasenaV");
const showPasswordButton = document.getElementById("verpassword");
const passwordContainer = document.querySelector(".password-container");

showPasswordButton.addEventListener("mouseover", function () {
    passwordField.type = "text";
    confirmPasswordField.type = "text";
});

showPasswordButton.addEventListener("mouseout", function () {
    passwordField.type = "password";
    confirmPasswordField.type = "password";
});

passwordContainer.addEventListener("mouseleave", function () {
    passwordField.type = "password";
    confirmPasswordField.type = "password";
});


