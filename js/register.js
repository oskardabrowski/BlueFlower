const buttonFormSubmit = document.querySelector('.buttonFormSubmit');
const RegisterEmail = document.querySelector('.RegisterEmail');
const RegisterPassword = document.querySelector('.RegisterPassword');
const RegisterPasswordRepeat = document.querySelector('.RegisterPasswordRepeat');

const RegisterDangerPassword = document.querySelector('.RegisterDangerPassword');
const RegisterSuccessPassword = document.querySelector('.RegisterSuccessPassword');

const RegisterDangerPasswordBoth = document.querySelector('.RegisterDangerPasswordBoth');
const RegisterSuccessPasswordBoth = document.querySelector('.RegisterSuccessPasswordBoth');

const RegisterDangerEmail = document.querySelector('.RegisterDangerEmail');
const RegisterDangerEmailExists = document.querySelector('.RegisterDangerEmailExists');
const RegisterSuccessEmail = document.querySelector('.RegisterSuccessEmail');

let passTested = false, passBoth = false, emailNotInDB = false;

RegisterEmail.addEventListener('change', function() {
    const emailTest = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    const emailValue = RegisterEmail.value;
    const output = emailTest.test(emailValue);

    if(output) {
        RegisterDangerEmail.style.display = "none";
        async function checkeEmail() {
            const form = new FormData();
            form.set('email', emailValue);
            const exists = await fetch('php/checkEmail.php',{
                method: 'POST',
                body: form
            });
            const data = await exists.json();

            if(data.msg === 'Exists') {
                RegisterDangerEmailExists.style.display = 'initial';
                RegisterSuccessEmail.style.display = 'none';
                emailNotInDB = false;
            } else {
                RegisterDangerEmailExists.style.display = 'none';
                RegisterSuccessEmail.style.display = 'initial';
                emailNotInDB = true;
            }
        }
        checkeEmail();
    } else {
        RegisterDangerEmail.style.display = "initial";
    }
})


RegisterPassword.addEventListener('change', function() {
    const regexp = /^(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*[!@#\$&%?])(?=.{6,})/;
    const output = regexp.test(RegisterPassword.value);

    if(!output) {
        RegisterSuccessPassword.style.display = "none";
        RegisterDangerPassword.style.display = "initial";
    } else {
        RegisterSuccessPassword.style.display = "initial";
        RegisterDangerPassword.style.display = "none";
    }
    passTested = output;
});

RegisterPasswordRepeat.addEventListener('change', function() {
    const firstPassword = RegisterPassword.value;
    const secondPassword = RegisterPasswordRepeat.value;

    if(secondPassword === firstPassword) {
        passBoth = true;
        RegisterDangerPasswordBoth.style.display = "none";
        RegisterSuccessPasswordBoth.style.display = "initial";
    } else {
        passBoth = false;
        RegisterSuccessPasswordBoth.style.display = "none";
        RegisterDangerPasswordBoth.style.display = "initial";
    }
});

buttonFormSubmit.addEventListener('click', function() {
    const RegisterEmailValue = RegisterEmail.value;
    const RegisterPasswordValue = RegisterPassword.value;
    const RegisterPasswordRepeatValue = RegisterPasswordRepeat.value;


})


