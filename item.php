<?php include "./inc/head.php"; ?>
<?php include "./inc/nav.php"; ?>

<?php require "./models/database.php"; ?>
<?php require "./models/dbconfig.php"; ?>
<?php require "./models/Announcements.php"; ?>
<?php require "./models/Users.php"; ?>
<?php require "./models/session_helper.php"; ?>
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

$currentUserId = $_SESSION['id'];

$comments = json_decode($data->ann_comments);
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
        <div class="Item-desc-person-img">
            <?php if ($userData->user_photo) : ?>
                <img src="./img/users/<?php echo $data->ann_user; ?>/<?php echo $userData->user_photo; ?>" alt="user-img" />
            <?php elseif ($userData->user_photo != '') : ?>
                <img src="./img/users/default.jpg" alt="user-img" />
            <?php endif; ?>
        </div>
        <h2 class="Item-desc-person-name"><?php echo $userData->user_name; ?></h2>
        <div class="Item-desc-person-contact">
            <ul>
                <li><i class="fas fa-phone"></i><?php echo $user_contact->tel; ?></li>
                <li><i class="fas fa-envelope"></i><?php echo $userData->user_email; ?></li>
                <li><i class="fas fa-map-marker-alt"></i><?php echo $user_contact->address; ?></li>
            </ul>
        </div>
    </div>
    <div class="Item-desc-comments">
        <h2 class="header-style Item-desc-comments-header">Sekcja komentarzy</h2>
        <div class="Item-desc-comments-section">
            <?php if (!empty($comments)) : ?>
                <?php foreach ($comments as $c) : ?>
                    <?php $commentingUser = $user->GetUserData($c->userId); ?>
                    <?php $subcomments = $c->subcomments; ?>
                    <?php $photo = $commentingUser->user_photo; ?>
                    <div class="Item-desc-comments-section-comment">
                        <div class="Item-desc-comments-section-comment-level1">
                            <div>
                                <div class="Item-desc-comments-section-comment-level1-img">
                                    <?php if (strlen($commentingUser->user_photo) > 0) : ?>
                                        <img src="./img/users/<?php echo $commentingUser->user_uniq; ?>/<?php echo $commentingUser->user_photo; ?>" />
                                    <?php else :  ?>
                                        <img src="./img/users/default.jpg" />
                                    <?php endif; ?>
                                </div>
                                <div class="Item-desc-comments-section-comment-level1-desc">
                                    <h3 class="UserCommentName"><?php echo $commentingUser->user_name; ?></h3>
                                    <p><?php echo $c->desc; ?></p>
                                    <span id="<?php echo $c->commentId ?>" class="RepeatToButton">Repeat</span>
                                </div>
                            </div>
                            <?php if ($currentUserId == $userData->user_id) : ?>
                                <div id="<?php echo $c->commentId; ?>" annid="<?php echo $ann_id; ?>" class="Item-desc-comments-section-comment-level1-block DeleteParentComment"><i id="<?php echo $c->commentId ?>" annid="<?php echo $ann_id; ?>" class="fas fa-trash"></i></div>
                            <?php endif; ?>
                        </div>
                        <?php foreach ($subcomments as $s) : ?>
                            <?php $subCommentingUser = $user->GetUserData($s->userId); ?>
                            <div class="Item-desc-comments-section-comment-level2">
                                <div>
                                    <div class="Item-desc-comments-section-comment-level2-img">
                                        <?php if (strlen($subCommentingUser->user_photo) > 0) : ?>
                                            <img src="./img/users/<?php echo $subCommentingUser->user_uniq; ?>/<?php echo $subCommentingUser->user_photo; ?>" />
                                        <?php else :  ?>
                                            <img src="./img/users/default.jpg" />
                                        <?php endif; ?>
                                    </div>
                                    <div class="Item-desc-comments-section-comment-level2-desc">
                                        <h3><?php echo $subCommentingUser->user_name; ?></h3>
                                        <p><?php echo $s->desc; ?></p>
                                        <span id="<?php echo $s->commentParentId; ?>" class="RepeatToButton">Repeat</span>
                                    </div>
                                </div>
                                <?php if ($currentUserId == $userData->user_id) : ?>
                                    <div id="<?php echo $s->subcommentId; ?>" annid="<?php echo $ann_id; ?>" parent="<?php echo $s->commentParentId; ?>" class="Item-desc-comments-section-comment-level1-block DeleteSubComment"><i id="<?php echo $s->subcommentId; ?>" annid="<?php echo $ann_id; ?>" parent="<?php echo $s->commentParentId; ?>" class="fas fa-trash"></i></div>
                                <?php endif; ?>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
        <div class="Item-desc-comments-form">
            <h2>Dodaj nowy komentarz</h2>
            <h5 class="d-none RepeatSomeoneHeader">Odpowiedz: Alex</h5>
            <form class="AddCommentInputForm">
                <span class="d-none RepeatTo"></span>
                <input type="text" readonly class="d-none AnnUserId" value="<?php echo $userData->user_id; ?>" />
                <input type="text" readonly class="d-none UserId" value="<?php echo $currentUserId; ?>" />
                <input type="text" readonly class="d-none AnnId" value="<?php echo $ann_id; ?>" />
                <textarea class="CommentMessage" rows="5" cols="75"></textarea>
                <button class="CommentSend"><i class="fas fa-paper-plane"></i></button>
            </form>
        </div>
    </div>
</article>
<?php include "./inc/footer.php"; ?>
</body>
<?php include "./inc/scripts.php"; ?>
<script src="./js/addComment.js"></script>
<script src="./js/removeComment.js"></script>
<script src="./js/addNotify.js"></script>