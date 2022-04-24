<?php
$announcements = new Announcements();
$user_ann;

try {
    $user_ann = $announcements->SelectAllAnnouncementsByUserUniq($data->user_uniq);
} catch (Error) {
    header('Loaction: account.php?page=announcements&code=error');
}

?>


<div class="UserApp-container-announcements">
    <?php foreach ($user_ann as $a) : ?>
        <div class="UserApp-container-announcements-item">
            <div class="UserApp-container-announcements-item-image">
                <img src="./img/items/<?php echo $a->ann_img_general; ?>" alt="image" />
            </div>
            <div class="UserApp-container-announcements-item-title <?php echo $a->ann_type; ?>-background">
                <h1><?php echo $a->ann_title; ?></h1>
            </div>
            <div class="UserApp-container-announcements-item-desc">
                <p>
                    <?php echo $a->ann_desc; ?>
                </p>
            </div>
            <div class="UserApp-container-announcements-item-footer <?php echo $a->ann_type; ?>-background">
                <?php echo $a->ann_footer; ?>
            </div>
            <div class="UserApp-container-announcements-item-options">
                <button><i class="fas fa-cart-plus"></i></button>
                <a href="?page=edit&id=1"><i class="fas fa-edit"></i></a>
                <button><i class="fas fa-trash"></i></button>
            </div>
        </div>
    <?php endforeach; ?>
</div>