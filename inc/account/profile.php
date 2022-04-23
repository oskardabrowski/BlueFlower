<div class="UserApp-container-profile">
    <div class="UserApp-container-profile-changePhoto">
        <div class="UserApp-container-profile-changePhoto-box">
            <span><i class="fas fa-times"></i></span>
            <form>
                <input type="file" />
                <button>Change photo</button>
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
                    <img src="./img/users/Alex.jpg" alt="user-img" />
                <?php else : ?>
                    <img src="./img/default.jpg" alt="user-img" />
                <?php endif; ?>
                <div class="UserApp-container-profile-form-photo-box-edit">
                    <?php if ($data->user_photo !== '') : ?>
                        <button><i class="fas fa-trash-alt"></i></button>
                    <?php endif; ?>
                    <button class="AddNewUserPhoto"><i class="fas fa-plus-circle"></i></button>
                </div>
            </div>

        </div>
        <div class="UserApp-container-profile-form-h2">
            <h2>Dodaj krótki opis (150 znaków)</h2>
        </div>
        <div class="UserApp-container-profile-form-desc">
            <textarea rows="12"><?php echo $data->user_desc; ?></textarea>
        </div>
        <div class="UserApp-container-profile-form-h2">
            <h2>Dodaj kontakt</h2>
        </div>
        <div class="UserApp-container-profile-form-contact">
            <label>Telefon:</label>
            <input type="text" placeholder="+48 123 123 123" value="<?php if (!empty($user_contact)) {
                                                                        echo $user_contact->tel;
                                                                    } ?>" />
            <label>Email:</label>
            <input type="email" placeholder="jan.kowalski@email.com" value="<?php echo $data->user_email; ?>" />
            <label>Miejsce zamieszkania</label>
            <input type="text" placeholder="88-888 Rybaki, ul. Rzeczna 1, Polska" value="<?php if (!empty($user_contact)) {
                                                                                                echo $user_contact->address;
                                                                                            }  ?>" />
        </div>
        <div class="UserApp-container-profile-form-submit"><button>Zatwierdź</button></div>
    </form>
</div>