<?php include "./inc/head.php"; ?>
<?php include "./inc/nav.php"; ?>

<?php require "./models/database.php"; ?>
<?php require "./models/dbconfig.php"; ?>
<?php require "./models/Announcements.php"; ?>
<?php require "./models/Users.php"; ?>
<?php

if ($_GET['id']) {
    $ann_id = $_GET['id'];
} else {
    header('Location: index.php');
}

$ann = new Announcements();
$user = new User();

$data = $ann->SelectAnnouncementById($ann_id);
$u = $user->SelectUserByUniq($data->ann_user);
$userData = $u[0];
$user_contact = json_decode($userData->user_contact);
$images = json_decode($data->ann_images);

?>



<header class="Item-banner">
    <img src="./img/users/<?php echo $data->ann_user; ?>/<?php echo $data->ann_dir; ?>/<?php echo $data->ann_img_general; ?>" alt="item-image" />
</header>
<article class="Item-desc">
    <div class="Item-desc-article">
        <h1 class="header-style"><?php echo $data->ann_title; ?></h1>
        <div class="Item-desc-article-text">
            <?php echo $data->ann_desc; ?>
        </div>
    </div>
    <div class="Item-desc-photos">
        <?php if (!empty($images)) : ?>
            <?php foreach ($images as $i) : ?>
                <div class="Item-desc-photos-item">
                    <img src="./img/users/<?php echo $data->ann_user; ?>/<?php echo $data->ann_dir; ?>/images/<?php echo $i; ?>" alt="gallery-photo" />
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
    <div class="Item-desc-person">
        <h1 class="header-style">Ogłoszenie wystawione przez</h1>
        <div class="Item-desc-person-img"><img src="./img/users/<?php echo $data->ann_user; ?>/<?php echo $userData->user_photo; ?>" alt="user-img" /></div>
        <h2 class="Item-desc-person-name"><?php echo $userData->user_name; ?></h2>
        <div class="Item-desc-person-contact">
            <ul>
                <li><i class="fas fa-phone"></i><?php echo $user_contact->tel; ?></li>
                <li><i class="fas fa-envelope"></i><?php echo $userData->user_email; ?></li>
                <li><i class="fas fa-map-marker-alt"></i><?php echo $user_contact->address; ?></li>
            </ul>
        </div>
    </div>
</article>
<footer class="footer">
    <div class="footer-container">
        <div class="footer-container-media">
            <div>
                <ul>
                    <li><a href="#"><i class="fab fa-facebook"></i>Facebook</a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i>Twitter</a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i>Instagram</a></li>
                </ul>
            </div>
            <div>
                <ul>
                    <li><a href="#"><i class="fas fa-user-secret"></i>Polityka prywatności</a></li>
                    <li><i class="fas fa-phone"></i>Tel: 666 666 666</li>
                    <li><i class="fas fa-envelope"></i>Mail: office@blueflower.pl</li>
                </ul>
            </div>
        </div>
        <div class="footer-container-copy">
            <div>Copyright &copy; BlueFlower <span>2022</span></div>
            <div>Created with Font Awesome</div>
        </div>
    </div>
</footer>
</body>
<?php include "./inc/scripts.php"; ?>