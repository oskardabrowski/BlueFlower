<div class="UserApp-container-profile">
    <div class="UserApp-container-profile-changePhoto">
        <div class="UserApp-container-profile-changePhoto-box">
            <span><i class="fas fa-times"></i></span>
            <form action="./php/userPhoto.php" method="POST" enctype="multipart/form-data">
                <input type="file" name="user-image" />
                <input name="path" type="text" class="d-none" readonly value="<?php echo $data->user_uniq; ?>" />
                <input name="id" type="text" class="d-none" readonly value="<?php echo $data->user_id; ?>" />
                <button type="submit">Wyślij</button>
            </form>
        </div>
    </div>
    <form class="UserApp-container-profile-form">
        <div class="UserApp-container-profile-form-h1">
            <h1>Edytuj szczegóły konta</h1>
        </div>
        <div class="UserApp-container-profile-form-h2">
            <h2>Edytuj zdjęcie profilowe</h2>
        </div>
        <div class="UserApp-container-profile-form-photo">
            <div class="UserApp-container-profile-form-photo-box">
                <?php if ($data->user_photo !== '') : ?>
                    <img src="./img/users/<?php echo $data->user_uniq; ?>/<?php echo $data->user_photo; ?>" alt="user-img" />
                <?php else : ?>
                    <img src="./img/default.jpg" alt="user-img" />
                <?php endif; ?>
                <div class="UserApp-container-profile-form-photo-box-edit">
                    <?php if ($data->user_photo !== '') : ?>
                        <input class="RemoveUserPhotoInput d-none" type="text" readonly value="<?php echo $data->user_id; ?>" />
                        <button class="RemoveUserPhoto"><i class="fas fa-trash-alt"></i></button>
                    <?php endif; ?>
                    <button class="AddNewUserPhoto"><i class="fas fa-plus-circle"></i></button>
                </div>
            </div>

        </div>
        <div class="UserApp-container-profile-form-contact">
            <label>Nazwa użytkownika:</label>
            <input type="text" class="ProfileName" placeholder="Jan Kowalski" value="<?php echo $data->user_name; ?>" />
        </div>
        <div class="UserApp-container-profile-form-h2">
            <h2>Dodaj krótki opis (200 znaków)</h2>
        </div>
        <div class="UserApp-container-profile-form-desc">
            <textarea class="ProfileShortDescription" rows="12" maxlength="200"><?php echo $data->user_desc; ?></textarea>
        </div>
        <div class="UserApp-container-profile-form-h2">
            <h2>Dodaj kontakt</h2>
        </div>
        <div class="UserApp-container-profile-form-contact">
            <input type="text" class="ProfileUserId d-none" readonly value="<?php echo $data->user_id; ?>" />
            <label>Telefon:</label>
            <input type="text" class="ProfileTelephone" placeholder="+48 123 123 123" value="<?php if (!empty($user_contact) && $user_contact->tel) {
                                                                                                    echo $user_contact->tel;
                                                                                                } ?>" />
            <label>Email:</label>
            <input type="email" class="ProfileEmail" placeholder="jan.kowalski@email.com" value="<?php echo $data->user_email; ?>" />
            <label>Miejsce zamieszkania</label>
            <input type="text" class="ProfileAddress" placeholder="88-888 Rybaki, ul. Rzeczna 1, Polska" value="<?php if (!empty($user_contact) && $user_contact->address) {
                                                                                                                    echo $user_contact->address;
                                                                                                                }  ?>" />
        </div>
        <div class="UserApp-container-profile-form-submit"><button>Zatwierdź</button></div>
    </form>
</div>