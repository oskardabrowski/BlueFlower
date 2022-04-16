const CartNextStep = document.querySelector('.UserApp-container-cart-payment');
const CartNextStepBtn = document.querySelector('.UserApp-container-cart-items-btn-button');
const CartBackStepBtn = document.querySelector('.UserApp-container-cart-payment-paid-back-btn');

function openNext() {
    CartNextStep.style.clipPath = 'circle(142% at 0 0)';
}
function closeNext() {
    CartNextStep.style.clipPath = 'circle(0.0% at 0 0)';
}

CartNextStepBtn.addEventListener('click', () => openNext(), false);
CartBackStepBtn.addEventListener('click', () => closeNext(), false);