const AnnouncementActivateBtns = document.querySelectorAll(".AnnouncementActivate");

AnnouncementActivateBtns.forEach(btn => {
    btn.addEventListener('click', function(e) {
        e.preventDefault();
        let ids = [];
        const InputExistsIdArr = document.querySelectorAll('.InputExistsId');

        InputExistsIdArr.forEach(id => ids.push(id.value));

        const form = new FormData();
        form.set('ids', JSON.stringify(ids));

        async function activate() {
            const response = await fetch('./php/activateAnnouncements.php', {
                method: 'POST',
                body: form
            });
            const data = await response.json();
            if(data.msg === 'SUCCESS') {
                window.location.href = 'account.php?code=success';
            } else {
                Nav.insertAdjacentHTML('beforebegin', '<div class="msgContainer LoginMsgDanger">Coś poszło źle</div>');
            }
        }
        activate();
    })
})

