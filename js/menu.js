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