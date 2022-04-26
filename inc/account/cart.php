<?php

$id_array = $_SESSION['cart'];
$ann = new Announcements();

?>
<div class="UserApp-container-cart">
    <div class="UserApp-container-cart-header">
        <h1>Twój koszyk</h1>
    </div>
    <div class="UserApp-container-cart-items">
        <div class="UserApp-container-cart-items-box">
            <?php foreach ($id_array as $id) : ?>
                <?php $data = $ann->SelectAnnouncementById($id); ?>
                <div class="UserApp-container-cart-items-box-item">
                    <div class="UserApp-container-cart-items-box-item-desc">
                        <div class="UserApp-container-cart-items-box-item-desc-image">
                            <img src="./img/users/<?php echo $data->ann_user; ?>/<?php echo $data->ann_dir; ?>/<?php echo $data->ann_img_general; ?>" alt="image" />
                        </div>
                        <div class="UserApp-container-cart-items-box-item-desc-name">
                            <h1><?php echo $data->ann_title; ?></h1>
                            <button>Usuń</button>
                        </div>
                    </div>
                    <div class="UserApp-container-cart-items-box-item-months">
                        <input type="text" class="d-none" value="<?php echo $id; ?>" />
                        <?php if ($data->ann_payment !== 'free') : ?>
                            <input type="number" value="1" min="1" /> miesięcy
                        <?php else : ?>
                            <input type="number" value="2" readonly /> tygodnie
                        <?php endif; ?>
                    </div>
                    <div class="UserApp-container-cart-items-box-item-total">
                        <h2>Koszt: </h2><span><?php
                                                if ($data->ann_payment !== 'free') {
                                                    echo '0,50 zł';
                                                } else {
                                                    echo '0 zł';
                                                }
                                                ?></span>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="UserApp-container-cart-items-btn">
            <button class="UserApp-container-cart-items-btn-button">Następny krok<i class="fas fa-arrow-alt-circle-right"></i></button>
        </div>
    </div>
    <div class="UserApp-container-cart-payment">
        <div class="UserApp-container-cart-payment-free">
            <h1>Wszystkie elementy z koszyka są darmowe</h1>
            <h2>kliknij przycisk poniżej aby potwierdzić transakcję</h2>
            <button>Kliknij tutaj</button>
        </div>
        <div class="UserApp-container-cart-payment-paid">
            <div class="UserApp-container-cart-payment-paid-header">
                <h1>Wybierz formę płatności</h1>
            </div>
            <form class="UserApp-container-cart-payment-paid-form">
                <select>
                    <option>Przelew bankowy</option>
                    <option>Karta/Przelew internetowy</option>
                </select>
            </form>
            <div class="UserApp-container-cart-payment-paid-data">
                <h2>Wykonaj płatność na poniższe dane, zamównie zostanie zrealizowane po zaksięgowaniu wpłaty</h2>
                <h3>Tytuł: DAE12345</h3>
                <h3>Nr konta: 1234 1234 1234 1234 1234 1234</h3>
                <h3>Adress: 00-000 Nigdzie, ul. Nieistniejąca 1, Polska</h3>
                <button>Potwierdź zamówienie</button>
            </div>
            <div class="UserApp-container-cart-payment-paid-stripe">
                Srtipe payments
            </div>
        </div>
        <div class="UserApp-container-cart-payment-paid-back"><button class="UserApp-container-cart-payment-paid-back-btn"><i class="fas fa-arrow-alt-circle-left"></i>Wróć do koszyka</button></div>
    </div>
</div>