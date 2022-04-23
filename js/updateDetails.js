const ButtonSubmitProfileDetailsContainer = document.querySelector(".UserApp-container-profile-form-submit");
const ButtonSubmitProfileDetailsButton = ButtonSubmitProfileDetailsContainer.querySelector("button");
const Navbar = document.querySelector('nav');

const ProfileShortDescription = document.querySelector(".ProfileShortDescription");
const ProfileTelephone = document.querySelector(".ProfileTelephone");
const ProfileAddress = document.querySelector(".ProfileAddress");
const ProfileEmail = document.querySelector(".ProfileEmail");
const ProfileUserId = document.querySelector(".ProfileUserId");

ButtonSubmitProfileDetailsButton.addEventListener('click', function(e) {
    e.preventDefault();
    const desc = ProfileShortDescription.value;
    const email = ProfileEmail.value;
    const address = ProfileAddress.value;
    const telephone = ProfileTelephone.value;
    const id = ProfileUserId.value
    const contact = JSON.stringify({tel: telephone, address: address});

    const emailTest = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    const output = emailTest.test(email);

    const form = new FormData();
    form.set('email', email);
    form.set('desc', desc);
    form.set('contact', contact);
    form.set('id', id);

    async function updateDetails() {
        const response = await fetch('./php/updateDetails.php', {
            method: 'POST',
            body: form
        })
        const data = await response.json();
        if(data.msg == 'UPDATED') {
            Navbar.insertAdjacentHTML('beforebegin', '<div class="msgContainer LoginMsgSuccess">Dane zostały wprowadzone do bazy</div>');
        } else {
            Navbar.insertAdjacentHTML('beforebegin', '<div class="msgContainer LoginMsgDanger">Coś poszło źle</div>');
        }
    }
    if(output) {
        updateDetails();
    } else {
        Navbar.insertAdjacentHTML('beforebegin', '<div class="msgContainer LoginMsgDanger">Niepoprawny email</div>');
    }
})