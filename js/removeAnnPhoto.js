const PhotoAnnouncementDelButton = document.querySelectorAll('.PhotoAnnouncementDelButton');

PhotoAnnouncementDelButton.forEach(btn => {
    btn.addEventListener('click', function(e) {
        e.preventDefault();
        const id = btn.id;
        const name = btn.getAttribute('pname');

        const form = new FormData();
        form.set('id', id);
        form.set('name', name);

        async function RemovePhoto() {
            const response = await fetch('./php/removePhoto.php', {
                method: 'POST',
                body: form
            });
            const data = await response.json();
            if(data.msg == 'DELETED') {
                e.target.closest(".UserApp-container-edit-images-image").style.display = 'none';
                Nav.insertAdjacentHTML('beforebegin', '<div class="msgContainer LoginMsgSuccess">Obraz został usunięty</div>');
            } else {
                Nav.insertAdjacentHTML('beforebegin', '<div class="msgContainer LoginMsgDanger">Coś poszło źle</div>');
            }
        }
        RemovePhoto();
    });
});