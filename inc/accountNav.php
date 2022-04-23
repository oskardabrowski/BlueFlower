<?php

$user = new User();
$id = $_SESSION['id'];
$data = $user->GetUserData($id);
$user_contact = json_decode($data->user_contact);
$error;

try {
    $data = $user->GetUserData($id);
} catch (Exception) {
    $error = true;
}
if (!empty($_GET['code'])) {
    $code = $_GET['code'];
}
?>
<?php if (!empty($error)) : ?>
    <div class="msgContainer LoginMsgDanger">Coś poszło źle w trakcie pobierania danych</div>
<?php endif; ?>
<?php if (!empty($code) && $code == 'error') : ?>
    <div class="msgContainer LoginMsgDanger">Coś poszło źle w trakcie wgrywania zdjęcia</div>
<?php endif; ?>
<?php if (!empty($code) && $code == 'succes-upload') : ?>
    <div class="msgContainer LoginMsgSuccess">Zdjęcie wgrane poprawnie</div>
<?php endif; ?>
<nav class="AccountNav">
    <svg class="AccountNav-logo">
        <use xlink:href="./img/BlueFlowerLogo.svg#FlowerLogo" />
    </svg>
    <button id="AccountMenuButton" class="AccountNav-menu"><span class="AccountNav-menu-open"><i class="fas fa-bars"></i></span><span class="AccountNav-menu-close"><i class="fas fa-times"></i></span></button>
    <div class="AccountNav-btns">
        <a href="?page=cart" class="AccountNav-btns"><i class="fas fa-shopping-cart"></i><span>0</span></a>
        <a href="?page=chat" class="AccountNav-btns"><i class="fas fa-comment"></i><span>0</span></a>
        <div class="AccountNav-btns-photo">
            <?php if ($data->user_photo !== '') : ?>
                <img src="./img/users/<?php echo $data->user_uniq; ?>/<?php echo $data->user_photo; ?>" alt="user-img" />
            <?php else : ?>
                <img src="./img/default.jpg" alt="user-img" />
            <?php endif; ?>
        </div>
    </div>
</nav>