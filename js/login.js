const LoginImage = document.querySelector(".LoginImage")
const RegisterImage = document.querySelector(".RegisterImage")
const LoginForm = document.querySelector(".LoginForm")
const RegisterForm = document.querySelector(".RegisterForm")
const GoToRegister = document.querySelector(".GoToRegister")
const GoToLogin = document.querySelector(".GoToLogin")

GoToRegister.addEventListener('click', function() {
    LoginImage.style.top = "100%";
    LoginForm.style.top = "-100%";
    RegisterImage.style.top = "0%";
    RegisterForm.style.top = "0%";
})
GoToLogin.addEventListener('click', function() {
    LoginImage.style.top = "0%";
    LoginForm.style.top = "0%";
    RegisterImage.style.top = "100%";
    RegisterForm.style.top = "-100%";
})

