const LoginImage = document.querySelector(".LoginImage")
const RegisterImage = document.querySelector(".RegisterImage")
const LoginForm = document.querySelector(".LoginForm")
const RegisterForm = document.querySelector(".RegisterForm")
const GoToRegister = document.querySelector(".GoToRegister")
const GoToLogin = document.querySelector(".GoToLogin")

GoToRegister.addEventListener('click', function() {
    LoginImage.style.top = "35rem";
    LoginForm.style.top = "-35rem";
    RegisterImage.style.top = "0rem";
    RegisterForm.style.top = "0rem";
})
GoToLogin.addEventListener('click', function() {
    LoginImage.style.top = "0rem";
    LoginForm.style.top = "0rem";
    RegisterImage.style.top = "35rem";
    RegisterForm.style.top = "-35rem";
})

