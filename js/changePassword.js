const CurrentPassword = document.querySelector('.CurrentPassword');
const InputNewPassword1 = document.querySelector('.InputNewPassword1');
const InputNewPassword2 = document.querySelector('.InputNewPassword2');
const changePasswordBtn = document.querySelector('.changePasswordBtn');

const ChangePasswordUserId = document.querySelector('.ChangePasswordUserId');
const ChangePasswordForm = document.querySelector('.ChangePasswordForm');

const RegisterDangerPassword = document.querySelector('.RegisterDangerPassword');
const RegisterSuccessPassword = document.querySelector('.RegisterSuccessPassword');
const RegisterSuccessPasswordBoth = document.querySelector('.RegisterSuccessPasswordBoth');
const RegisterDangerPasswordBoth = document.querySelector('.RegisterDangerPasswordBoth');

let passTested=false, passBoth=false;

// ChangePasswordForm.addEventListener('submit', function(e) {
//     e.preventDefault();
// })

InputNewPassword1.addEventListener('change', function() {
    const regexp = /^(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*[!@#\$&%?])(?=.{6,})/;
    const output = regexp.test(InputNewPassword1.value);

    if(!output) {
        RegisterSuccessPassword.style.display = "none";
        RegisterDangerPassword.style.display = "initial";
    } else {
        RegisterSuccessPassword.style.display = "initial";
        RegisterDangerPassword.style.display = "none";
    }
    passTested = output;
});

InputNewPassword2.addEventListener('change', function() {
    const firstPassword = InputNewPassword1.value;
    const secondPassword = InputNewPassword2.value;

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

changePasswordBtn.addEventListener('click', function(e) {
    e.preventDefault();
    const password = CurrentPassword.value;
    const password1 = InputNewPassword1.value;
    const id = ChangePasswordUserId.value;

    if(passTested && passBoth) {
        const form = new FormData();
        form.set('current', password);
        form.set('new', password1);
        form.set('id', id);

        async function changeUserPassword() {
            const response = await fetch('./php/changePassword.php',{
                method: 'POST',
                body: form
            });
            const data = await response.json();
            if(data.msg == 'CHANGED') {
                Nav.insertAdjacentHTML('beforebegin', '<div class="msgContainer LoginMsgSuccess">Hasło zmienione</div>');
            } else {
                Nav.insertAdjacentHTML('beforebegin', '<div class="msgContainer LoginMsgDanger">Coś poszło źle</div>');
            }
        }
        changeUserPassword();
    }



});
