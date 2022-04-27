const NotificationButtonSeen = document.querySelector('.NotificationButtonSeen');
const NotificationSeenInputUser = document.querySelector('.NotificationSeenInputUser');
const Notifications = document.querySelector('.AccountNav-btns-notifications');

NotificationButtonSeen.addEventListener('click', async function() {
    const id = NotificationSeenInputUser.value;
    Notifications.style.display = 'flex';
    const form = new FormData();
    form.set('id', id);
    const ClearNotifiactions = async () => {
        const response = await fetch('./php/clearNotifications.php', {
            method: 'POST',
            body: form
        });
    }
    ClearNotifiactions();
})