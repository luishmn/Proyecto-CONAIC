const passwordField1 = document.getElementById("contrasenaEdit");
const confirmPasswordField1 = document.getElementById("contrasenaVEdit");
const showPasswordButton1 = document.getElementById("verpasswordEdit");
const passwordContainer1 = document.querySelector(".password-container");

showPasswordButton1.addEventListener("mouseover", function () {
    passwordField1.type = "text";
    confirmPasswordField1.type = "text";
    
});

showPasswordButton1.addEventListener("mouseout", function () {
    passwordField1.type = "password";
    confirmPasswordField1.type = "password";
});

passwordContainer1.addEventListener("mouseleave", function () {
    passwordField1.type = "password";
    confirmPasswordField1.type = "password";
});
