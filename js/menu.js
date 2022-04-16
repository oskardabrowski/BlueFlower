if (document.querySelector('.Menu-Button')) {
    const MenuButton = document.querySelector('.Menu-Button');
    const MenuClose = document.querySelector('.menu-container-close');
    const Menu = document.querySelector(".menu-container");
    let menuOpen = false;
    function menuFunction() {
        if(menuOpen === false) {
            Menu.style.clipPath = 'circle(145% at 100% 0)';
            menuOpen = true;
        } else {
            Menu.style.clipPath = 'circle(0% at 100% 0)';
            menuOpen = false;
        }
    }

    MenuButton.addEventListener('click', () => menuFunction(), false);
    MenuClose.addEventListener('click', () => menuFunction(), false);
}

if(document.querySelector('#AccountMenuButton')) {
    let menuAccountOpen = false;
    function menuAccountFunction() {
        if(menuAccountOpen === false) {
            MenuAccountButton.querySelector('.AccountNav-menu-open').style.display = 'none';
            MenuAccountButton.querySelector('.AccountNav-menu-close').style.display = 'initial';
            MenuAccount.style.width = '100%';
            menuAccountOpen = true;
        } else {
            MenuAccountButton.querySelector('.AccountNav-menu-close').style.display = 'none';
            MenuAccountButton.querySelector('.AccountNav-menu-open').style.display = 'initial';
            MenuAccount.style.width = '0%';
            menuAccountOpen = false;
        }
    }

    const MenuAccountButton = document.querySelector('#AccountMenuButton');
    const MenuAccount = document.querySelector(".UserApp-menu");
    MenuAccountButton.addEventListener('click', () => menuAccountFunction(), false);
}

