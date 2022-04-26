const AddAnnouncementToCartBtn = document.querySelectorAll('.AddAnnouncementToCartBtn');

AddAnnouncementToCartBtn.forEach(btn => {
    btn.addEventListener('click', function(e) {
        e.preventDefault();
        const id = e.target.id;

        const form = new FormData();
        form.set('id', id);

        async function PostAnnData() {
            const response = await fetch('./php/addAnnouncementToCart.php', {
                method: 'POST',
                body: form
            });
            const data = await response.json();
            if(data.msg == 'SUCCESS') {
                Nav.insertAdjacentHTML('beforebegin', '<div class="msgContainer LoginMsgSuccess">Ogłoszenie dodane do koszyka</div>');
            } else {
                Nav.insertAdjacentHTML('beforebegin', '<div class="msgContainer LoginMsgDanger">Coś poszło nie tak!</div>');
            }
        }
        PostAnnData();
    })
})