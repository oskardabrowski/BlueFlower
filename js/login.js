const LoginImage = document.querySelector(".LoginImage");
const RegisterImage = document.querySelector(".RegisterImage");
const LoginForm = document.querySelector(".LoginForm");
const RegisterForm = document.querySelector(".RegisterForm");
const GoToRegister = document.querySelector(".GoToRegister");
const GoToLogin = document.querySelector(".GoToLogin");

const LoginDangerEmail = document.querySelector('.LoginDangerEmail');
const LoginSuccessEmail = document.querySelector('.LoginSuccessEmail');

const LoginInputEmail = document.querySelector('.LoginInputEmail');
const LoginInputPassword = document.querySelector('.LoginInputPassword');
const LoginDangerPassword = document.querySelector('.LoginDangerPassword');

const LoginButton = document.querySelector('.LoginButton');

const LoginMessage = document.querySelector('.loginPage-msg');

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

LoginInputEmail.addEventListener('change', function() {
    const emailTest = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    const emailValue = LoginInputEmail.value;
    const output = emailTest.test(emailValue);

    if(output) {
        LoginSuccessEmail.style.display = 'initial';
        LoginDangerEmail.style.display = 'none';
    } else {
        LoginSuccessEmail.style.display = 'none';
        LoginDangerEmail.style.display = 'initial';
    }
})

LoginButton.addEventListener('click', function(e) {
    e.preventDefault();
    const emailValue = LoginInputEmail.value;
    const passwordValue = LoginInputPassword.value;

    const formLogin = new FormData();

    formLogin.set('email', emailValue);
    formLogin.set('password', passwordValue);

    async function loginUser() {
        const result = await fetch('./php/loginUser.php', {
            method: 'POST',
            body: formLogin
        });
        const data = await result.json();
        if(data.msg === "SESSION_STARTED") {
            window.location.replace('./account.php');
            LoginDangerPassword.style.display = 'none';
        } else if (data.msg === "WRONG_PASSWORD") {
            LoginDangerPassword.style.display = 'initial';
        } else if (data.msg === "USER_NOT_EXISTS") {
            LoginMessage.style.opacity = "1";
            LoginDangerPassword.style.display = 'none';
            LoginMessage.querySelector('h2').textContent = "Dany użytkownik nie istnieje, proszę się zarejestrować";
            LoginMessage.classList.add('LoginMsgDanger');
        } else {
            LoginMessage.style.opacity = "1";
            LoginDangerPassword.style.display = 'none';
            LoginMessage.querySelector('h2').textContent = "Coś poszło nie tak, sprubój ponownie poźniej";
            LoginMessage.classList.add('LoginMsgDanger');
        }
    }
    loginUser();

})