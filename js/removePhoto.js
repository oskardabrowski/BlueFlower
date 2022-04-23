const RemoveUserPhoto = document.querySelector('.RemoveUserPhoto');
const RemoveUserPhotoInput = document.querySelector('.RemoveUserPhotoInput');
const Nav = document.querySelector('nav');

RemoveUserPhoto.addEventListener('click', function(e) {
    e.preventDefault();
    const id = RemoveUserPhotoInput.value;
    const form = new FormData();
    form.set('id', id);

    async function RemoveImage() {
        const response = await fetch('./php/removeUserImage.php', {
            method: 'POST',
            body: form
        });

        const data = await response.json();
        if(data.msg == 'REMOVED') {
            Nav.insertAdjacentHTML('beforebegin', '<div class="msgContainer LoginMsgSuccess">Zdjęcie zostało usunięte</div>');
        } else {
            Nav.insertAdjacentHTML('beforebegin', '<div class="msgContainer LoginMsgDanger">Coś poszło źle</div>');
        }
    }
    RemoveImage();
})