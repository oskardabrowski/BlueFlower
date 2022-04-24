<div class="UserApp-container-changePassword">
    <div class="UserApp-container-changePassword-header">
        <h1>Zmień swoje hasło</h1>
    </div>
    <form class="ChangePasswordForm" method="POST">
        <label>Stare hasło:</label>
        <input type="text" readonly class="d-none ChangePasswordUserId" value="<?php echo $data->user_id; ?>" />
        <div>
            <input class="CurrentPassword" name="current" type="password" />
        </div>
        <label>Nowe hasło:</label>
        <div>
            <input class="InputNewPassword1" name="newpassword" type="password" />
            <span class="RegisterDangerPassword"><i class="fas fa-times"></i>Hasło powinno zawierać conajmniej jedną dużą literę i znak specjalny z wymienionych: #!?@$%&</span>
            <span class="RegisterSuccessPassword"><i class="fas fa-check"></i>Hasło poprawne</span>
        </div>
        <label>Powtórz nowe hasło:</label>
        <div>
            <input class="InputNewPassword2" name="newpassword" type="password" />
            <span class="RegisterSuccessPasswordBoth"><i class="fas fa-check"></i>Hasła poprawne</span>
            <span class="RegisterDangerPasswordBoth"><i class="fas fa-times"></i>Hasła nie są jednakowe</span>
        </div>
        <button class="changePasswordBtn">Zmień</button>
    </form>
</div>