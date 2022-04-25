const DeleteAnnouncementBtn = document.querySelectorAll('.DeleteAnnouncementBtn');

DeleteAnnouncementBtn.forEach(btn => {
    btn.addEventListener('click', function(e) {
        e.preventDefault();

        const id = e.target.id;

        const form = new FormData();
        form.set('id', id);

        async function DeleteAnnouncement() {
            const response = await fetch('./php/deleteAnnouncement.php', {
                method: 'POST',
                body: form
            })
            const data = await response.json();
            if(data.msg == 'SUCCESS') {
                window.location.href = 'account.php?page=announcements&code=success';
            } else {
                window.location.href = 'account.php?page=announcements&code=error';
            }
        }
        DeleteAnnouncement();
    })
})

