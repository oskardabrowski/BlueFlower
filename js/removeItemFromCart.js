const ButtonRemoveItemFromCart = document.querySelectorAll('.ButtonRemoveItemFromCart');
const AnnouncementCounterCart2 = document.querySelector('.AnnouncementCounterCart');
ButtonRemoveItemFromCart.forEach(btn => {
    btn.addEventListener('click', function(e) {
        e.preventDefault();
        const id = e.target.id;
        const parent = e.target.closest('.UserApp-container-cart-items-box-item');

        const form = new FormData();
        form.set('id', id);

        async function RemoveItem() {
            const response = await fetch('./php/removeItemFromCart.php', {
                method: "POST",
                body: form
            });
            const data = await response.json();
            if(data.msg == 'REMOVED') {
                parent.style.display = 'none';
                if(AnnouncementCounterCart2) {
                    const num = AnnouncementCounterCart2.innerText;
                    const newNum = parseInt(num) -1
                    AnnouncementCounterCart2.innerText = newNum;
                    if(newNum == 0) {
                        AnnouncementCounterCart2.style.display = 'none';
                    }
                }
                Nav.insertAdjacentHTML('beforebegin', '<div class="msgContainer LoginMsgSuccess">Element został usunięty</div>');
            } else {
                Nav.insertAdjacentHTML('beforebegin', '<div class="msgContainer LoginMsgDanger">Coś poszło źle</div>');
            }
        }
        RemoveItem();
    })
})