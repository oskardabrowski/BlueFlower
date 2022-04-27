<?php
$user = new User();
$id = $_SESSION['id'];
$data = $user->GetUserData($id);
$user_contact = json_decode($data->user_contact);
$error;

$annnouncements = new Announcements();

$notifiactions = json_decode($data->user_comments);
$notnum = 0;

foreach ($notifiactions as $n) {
    $count = $n->count;
    $notnum = $notnum + $count;
}

try {
    $data = $user->GetUserData($id);
} catch (Exception) {
    $error = true;
}
if (!empty($_GET['code'])) {
    $code = $_GET['code'];
}

if (!empty($_SESSION['cart'])) {
    $number = count($_SESSION['cart']);
} else {
    $number = 0;
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
<?php if (!empty($code) && $code == 'success') : ?>
    <div class="msgContainer LoginMsgSuccess">Sukces</div>
<?php endif; ?>
<nav class="AccountNav">
    <input type="text" class="d-none NotificationSeenInputUser" value="<?php echo $_SESSION['id']; ?>" />
    <svg class="AccountNav-logo">
        <use xlink:href="./img/BlueFlowerLogo.svg#FlowerLogo" />
    </svg>
    <button id="AccountMenuButton" class="AccountNav-menu"><span class="AccountNav-menu-open"><i class="fas fa-bars"></i></span><span class="AccountNav-menu-close"><i class="fas fa-times"></i></span></button>
    <div class="AccountNav-btns">
        <a href="?page=cart" class="AccountNav-btns AnnouncementCartContainer">
            <i class="fas fa-shopping-cart"></i>
            <span class="AnnouncementCounterCart <?php if ($number == 0) {
                                                        echo 'd-none';
                                                    } ?>"><?php echo $number; ?></span>
        </a>
        <a href="#" class="AccountNav-btns NotificationButtonSeen"><i class="fas fa-comment"></i>
            <span class="<?php if ($notnum == 0) {
                                echo 'd-none';
                            } ?>"><?php echo $notnum; ?></span>
            <div class="AccountNav-btns-notifications">
                <?php foreach ($notifiactions as $n) : ?>
                    <a href="./item.php?id=<?php echo $n->annid; ?>" class="AccountNav-btns-notifications-notification">
                        <span><?php echo $n->count; ?> notifications</span>
                    </a>
                <?php endforeach; ?>
            </div>
        </a>
        <div class="AccountNav-btns-photo">
            <?php if ($data->user_photo !== '') : ?>
                <img src="./img/users/<?php echo $data->user_uniq; ?>/<?php echo $data->user_photo; ?>" alt="user-img" />
            <?php else : ?>
                <img src="./img/default.jpg" alt="user-img" />
            <?php endif; ?>
        </div>
    </div>
</nav>