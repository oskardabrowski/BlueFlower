<?php

$id_array = $_SESSION['cart'];
$ann = new Announcements();
$offersArr = array();

?>
<div class="UserApp-container-cart">
    <div class="UserApp-container-cart-header">
        <h1>Twój koszyk</h1>
    </div>
    <div class="UserApp-container-cart-items">
        <div class="UserApp-container-cart-items-box">
            <?php foreach ($id_array as $id) : ?>
                <?php $data = $ann->SelectAnnouncementById($id); ?>
                <?php array_push($offersArr, $data->ann_payment); ?>
                <div class="UserApp-container-cart-items-box-item">
                    <div class="UserApp-container-cart-items-box-item-desc">
                        <div class="UserApp-container-cart-items-box-item-desc-image">
                            <img src="./img/users/<?php echo $data->ann_user; ?>/<?php echo $data->ann_dir; ?>/<?php echo $data->ann_img_general; ?>" alt="image" />
                        </div>
                        <div class="UserApp-container-cart-items-box-item-desc-name">
                            <h1><?php echo $data->ann_title; ?></h1>
                            <button id="<?php echo $id; ?>" class="ButtonRemoveItemFromCart">Usuń</button>
                        </div>
                    </div>
                    <div class="UserApp-container-cart-items-box-item-months">
                        <input type="text" class="d-none InputExistsId" value="<?php echo $id; ?>" />
                        <?php if ($data->ann_payment !== 'free') : ?>
                            <input type="number" class="<?php echo $data->ann_payment; ?>MonthsPaymentField" value="1" min="1" /> miesięcy
                        <?php else : ?>
                            <input type="number" value="2" readonly /> tygodnie
                        <?php endif; ?>
                    </div>
                    <div class="UserApp-container-cart-items-box-item-total">
                        <h2>Koszt: </h2><span><?php
                                                if ($data->ann_payment == 'free') {
                                                    echo '0 zł';
                                                } elseif ($data->ann_payment == 'standard') {
                                                    echo '0.50 zł / miesiąc';
                                                } else {
                                                    echo '1.0 zł / miesiąc';
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
        <?php if (!in_array('standard', $offersArr)) : ?>
            <?php if (!in_array('premium', $offersArr)) : ?>
                <div class="UserApp-container-cart-payment-free">
                    <h1>Wszystkie elementy z koszyka są darmowe</h1>
                    <h2>kliknij przycisk poniżej aby potwierdzić transakcję</h2>
                    <button class="AnnouncementActivate">Kliknij tutaj</button>
                </div>
            <?php endif; ?>
        <?php endif; ?>
        <?php if (in_array('standard', $offersArr) or in_array('premium', $offersArr)) : ?>
            <div class="UserApp-container-cart-payment-paid">
                <div class="UserApp-container-cart-payment-paid-header">
                    <h1>Wybierz formę płatności</h1>
                </div>
                <div class="UserApp-container-cart-payment-paid-data">
                    <h2>Wykonaj płatność na poniższe dane, zamównie zostanie zrealizowane po zaksięgowaniu wpłaty</h2>
                    <h3>Kwota: 1zł</h3>
                    <h3>Tytuł: DAE12345</h3>
                    <h3>Nr konta: 1234 1234 1234 1234 1234 1234</h3>
                    <h3>Adress: 00-000 Nigdzie, ul. Nieistniejąca 1, Polska</h3>
                    <button class="AnnouncementActivate">Potwierdź zamówienie</button>
                </div>
            </div>
        <?php endif; ?>
        <div class="UserApp-container-cart-payment-paid-back"><button class="UserApp-container-cart-payment-paid-back-btn"><i class="fas fa-arrow-alt-circle-left"></i>Wróć do koszyka</button></div>
    </div>
</div>