<?php
$items = new Announcements();
$user = new User();
$premiumAnnouncements = $items->SelectAllPremiumAnnouncements();
$standardAnnouncements = $items->SelectAllStandardAnnouncements();
$freeAnnouncements = $items->SelectAllFreeAnnouncements();
?>

<article class="items">
    <div class="items-headerdiv">
        <h1 class="items-header header-style">Najnowsze ogłoszenia</h1>
    </div>
    <div class="items-filter">
        <form class="items-filter-form">
            <label class="items-filter-form-label" for="province">Nazwa: </label>
            <input type="text" placeholder="np. Motoryzacja" id="name" class="items-filter-form-selection province-selection" />
            <label class="items-filter-form-label" for="topic">Kategoria: </label>
            <select id="topic" class="items-filter-form-selection topic-selection">
                <option>Wszystkie</option>
                <option>Inne</option>
                <option>Samochody</option>
                <option>Kryptowaluty</option>
                <option>Oprogramowanie</option>
                <option>Elektronika</option>
                <option>Jedzenie</option>
                <option>Odzież</option>
                <option>AGD</option>
            </select>
        </form>
    </div>
    <div class="items-container">
        <?php foreach ($premiumAnnouncements as $a) : ?>
            <?php
            $user_data;
            $user_contact;

            if ($a->ann_user) {
                $ann_user = $user->SelectUserByUniq($a->ann_user);
                $user_data = $ann_user[0];
            }
            $user_contact = json_decode($user_data->user_contact);
            ?>
            <?php if ($a->ann_active) : ?>
                <a href="./item.php?id=<?php echo $a->ann_id; ?>" class="items-container-item">
                    <div class="items-container-item-rotate">
                        <div class="items-container-item-rotate-front">
                            <div class="items-container-item-rotate-front-image">
                                <img src="./img/users/<?php echo $a->ann_user; ?>/<?php echo $a->ann_dir; ?>/<?php echo $a->ann_img_general; ?>" alt="book" />
                            </div>
                            <div class="items-container-item-rotate-front-title <?php echo $a->ann_type; ?>-background <?php echo $a->ann_type; ?>-path">
                                <h2><?php echo $a->ann_title; ?></h2>
                            </div>
                            <div class="items-container-item-rotate-front-desc">
                                <p>
                                    <?php echo $a->ann_desc; ?>
                                </p>
                            </div>
                            <div class="items-container-item-rotate-front-footer <?php echo $a->ann_type; ?>-background"><?php echo $a->ann_footer; ?></div>
                        </div>
                        <div class="items-container-item-rotate-back <?php echo $a->ann_type; ?>-background">
                            <div class="items-container-item-rotate-back-photo">
                                <div class="items-container-item-rotate-back-photo-container">
                                    <?php if ($user_data->user_photo !== '') : ?>
                                        <img src="./img/users/<?php echo $a->ann_user; ?>/<?php echo $user_data->user_photo; ?>" alt="user-img" />
                                    <?php else : ?>
                                        <img src="./img/default.jpg" alt="user-img" />
                                    <?php endif; ?>
                                </div>
                                <span class="items-container-item-rotate-back-photo-username"><?php echo $user_data->user_name; ?></span>
                            </div>
                            <div class="items-container-item-rotate-back-content">
                                <?php echo $user_data->user_desc; ?>
                            </div>
                            <div class="items-container-item-rotate-back-contact">
                                <span class="items-container-item-rotate-back-contact-header">Contact</span>
                                <?php if ($user_contact && $user_contact->tel) : ?>
                                    <span class="items-container-item-rotate-back-contact-method"><i class="fas fa-phone"></i><?php echo $user_contact->tel; ?></span>
                                <?php endif; ?>
                                <span class="items-container-item-rotate-back-contact-method"><i class="fas fa-envelope"></i><?php echo $user_data->user_email; ?></span>
                                <?php if ($user_contact && $user_contact->address) : ?>
                                    <span class="items-container-item-rotate-back-contact-method"><i class="fas fa-map-marker-alt"></i><?php echo $user_contact->address; ?></span>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </a>
            <?php endif; ?>
        <?php endforeach ?>
        <?php foreach ($standardAnnouncements as $a) : ?>
            <?php
            $user_data;
            $user_contact;

            if ($a->ann_user) {
                $ann_user = $user->SelectUserByUniq($a->ann_user);
                $user_data = $ann_user[0];
            }
            $user_contact = json_decode($user_data->user_contact);
            ?>
            <?php if ($a->ann_active) : ?>
                <a href="./item.php?id=<?php echo $a->ann_id; ?>" class="items-container-item">
                    <div class="items-container-item-rotate">
                        <div class="items-container-item-rotate-front">
                            <div class="items-container-item-rotate-front-image">
                                <img src="./img/users/<?php echo $a->ann_user; ?>/<?php echo $a->ann_dir; ?>/<?php echo $a->ann_img_general; ?>" alt="book" />
                            </div>
                            <div class="items-container-item-rotate-front-title <?php echo $a->ann_type; ?>-background <?php echo $a->ann_type; ?>-path">
                                <h2><?php echo $a->ann_title; ?></h2>
                            </div>
                            <div class="items-container-item-rotate-front-desc">
                                <p>
                                    <?php echo $a->ann_desc; ?>
                                </p>
                            </div>
                            <div class="items-container-item-rotate-front-footer <?php echo $a->ann_type; ?>-background"><?php echo $a->ann_footer; ?></div>
                        </div>
                        <div class="items-container-item-rotate-back <?php echo $a->ann_type; ?>-background">
                            <div class="items-container-item-rotate-back-photo">
                                <div class="items-container-item-rotate-back-photo-container">
                                    <?php if ($user_data->user_photo !== '') : ?>
                                        <img src="./img/users/<?php echo $a->ann_user; ?>/<?php echo $user_data->user_photo; ?>" alt="user-img" />
                                    <?php else : ?>
                                        <img src="./img/default.jpg" alt="user-img" />
                                    <?php endif; ?>
                                </div>
                                <span class="items-container-item-rotate-back-photo-username"><?php echo $user_data->user_name; ?></span>
                            </div>
                            <div class="items-container-item-rotate-back-content">
                                <?php echo $user_data->user_desc; ?>
                            </div>
                            <div class="items-container-item-rotate-back-contact">
                                <span class="items-container-item-rotate-back-contact-header">Contact</span>
                                <?php if ($user_contact && $user_contact->tel) : ?>
                                    <span class="items-container-item-rotate-back-contact-method"><i class="fas fa-phone"></i><?php echo $user_contact->tel; ?></span>
                                <?php endif; ?>
                                <span class="items-container-item-rotate-back-contact-method"><i class="fas fa-envelope"></i><?php echo $user_data->user_email; ?></span>
                                <?php if ($user_contact && $user_contact->address) : ?>
                                    <span class="items-container-item-rotate-back-contact-method"><i class="fas fa-map-marker-alt"></i><?php echo $user_contact->address; ?></span>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </a>
            <?php endif; ?>
        <?php endforeach ?>
        <?php foreach ($freeAnnouncements as $a) : ?>
            <?php
            $user_data;
            $user_contact;

            if ($a->ann_user) {
                $ann_user = $user->SelectUserByUniq($a->ann_user);
                $user_data = $ann_user[0];
            }
            $user_contact = json_decode($user_data->user_contact);
            ?>
            <?php if ($a->ann_active) : ?>
                <a href="./item.php?id=<?php echo $a->ann_id; ?>" class="items-container-item">
                    <div class="items-container-item-rotate">
                        <div class="items-container-item-rotate-front">
                            <div class="items-container-item-rotate-front-image">
                                <img src="./img/users/<?php echo $a->ann_user; ?>/<?php echo $a->ann_dir; ?>/<?php echo $a->ann_img_general; ?>" alt="book" />
                            </div>
                            <div class="items-container-item-rotate-front-title <?php echo $a->ann_type; ?>-background <?php echo $a->ann_type; ?>-path">
                                <h2><?php echo $a->ann_title; ?></h2>
                            </div>
                            <div class="items-container-item-rotate-front-desc">
                                <p>
                                    <?php echo $a->ann_desc; ?>
                                </p>
                            </div>
                            <div class="items-container-item-rotate-front-footer <?php echo $a->ann_type; ?>-background"><?php echo $a->ann_footer; ?></div>
                        </div>
                        <div class="items-container-item-rotate-back <?php echo $a->ann_type; ?>-background">
                            <div class="items-container-item-rotate-back-photo">
                                <div class="items-container-item-rotate-back-photo-container">
                                    <?php if ($user_data->user_photo !== '') : ?>
                                        <img src="./img/users/<?php echo $a->ann_user; ?>/<?php echo $user_data->user_photo; ?>" alt="user-img" />
                                    <?php else : ?>
                                        <img src="./img/default.jpg" alt="user-img" />
                                    <?php endif; ?>
                                </div>
                                <span class="items-container-item-rotate-back-photo-username"><?php echo $user_data->user_name; ?></span>
                            </div>
                            <div class="items-container-item-rotate-back-content">
                                <?php echo $user_data->user_desc; ?>
                            </div>
                            <div class="items-container-item-rotate-back-contact">
                                <span class="items-container-item-rotate-back-contact-header">Contact</span>
                                <?php if ($user_contact && $user_contact->tel) : ?>
                                    <span class="items-container-item-rotate-back-contact-method"><i class="fas fa-phone"></i><?php echo $user_contact->tel; ?></span>
                                <?php endif; ?>
                                <span class="items-container-item-rotate-back-contact-method"><i class="fas fa-envelope"></i><?php echo $user_data->user_email; ?></span>
                                <?php if ($user_contact && $user_contact->address) : ?>
                                    <span class="items-container-item-rotate-back-contact-method"><i class="fas fa-map-marker-alt"></i><?php echo $user_contact->address; ?></span>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </a>
            <?php endif; ?>
        <?php endforeach ?>
    </div>
</article>