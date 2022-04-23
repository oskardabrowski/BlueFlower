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
?>
<?php if (!empty($error)) : ?>
    <h1>Something went wrong while fetching data</h1>
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
                <img src="./img/<?php echo $data->user_uniq; ?>/<?php $data->user_photo; ?>" alt="user-img" />
            <?php else : ?>
                <img src="./img/default.jpg" alt="user-img" />
            <?php endif; ?>
        </div>
    </div>
</nav>