<?php include "./inc/head.php"; ?>

<body class="loginPage">
    <div class="loginPage-container">
        <div class="loginPage-container-loginform">
            <div class="loginPage-container-loginform-image">
                <img class="loginPage-container-loginform-image-loginimage LoginImage" src="./img/login/loginImage.jpg" alt="loginImage" />
                <img class="loginPage-container-loginform-image-registerimage RegisterImage" src="./img/login/registerImage.jpg" alt="loginImage" />
            </div>
            <div class="loginPage-container-loginform-form">
                <div class="loginPage-container-loginform-form-login LoginForm">
                    <div class="loginPage-container-loginform-form-login-ico"><i class="fas fa-user"></i></div>
                    <div class="loginPage-container-loginform-form-login-header">
                        <h1>Login</h1>
                    </div>
                    <form>
                        <label for="email">Email: </label>
                        <input id="email" type="email" placeholder="jan.kowalski@email.com" />
                        <span class="LoginDangerEmail"><i class="fas fa-times"></i>Proszę wpisz poprawny email</span>
                        <span class="LoginSuccessEmail"><i class="fas fa-check"></i>Email poprawny</span>
                        <label for="password">Hasło: </label>
                        <input id="password" type="password" />
                        <span class="LoginDangerPassword"><i class="fas fa-times"></i>Proszę wpisz poprawne hasło</span>
                        <button>Zaloguj</button>
                    </form>
                    <div class="loginPage-container-loginform-form-login-noaccount">
                        <span>Nie masz konta?</span>
                        <button class="GoToRegister"><i class="far fa-arrow-alt-circle-left"></i>Rejestracja</button>
                    </div>
                </div>
                <div class="loginPage-container-loginform-form-register RegisterForm">
                    <div class="loginPage-container-loginform-form-register-ico"><i class="fas fa-user-plus"></i></div>
                    <div class="loginPage-container-loginform-form-register-header">
                        <h1>Rejestracja</h1>
                    </div>
                    <form class="RegisterFormData">
                        <label for="email">Email: </label>
                        <input id="email" type="email" class="RegisterEmail" placeholder="jan.kowalski@email.com" />
                        <span class="RegisterDangerEmail"><i class="fas fa-times"></i>Proszę wpisz poprawny email</span>
                        <span class="RegisterDangerEmailExists"><i class="fas fa-times"></i>Email jest zajęty</span>
                        <span class="RegisterSuccessEmail"><i class="fas fa-check"></i>Email poprawny</span>
                        <label for="password">Hasło: </label>
                        <input id="password" class="RegisterPassword" type="password" />
                        <span class="RegisterDangerPassword"><i class="fas fa-times"></i>Hasło powinno zawierać conajmniej jedną dużą literę i znak specjalny z wymienionych: #!?@$%&</span>
                        <span class="RegisterSuccessPassword"><i class="fas fa-check"></i>Hasło poprawne</span>
                        <label for="password">Powtórz hasło: </label>
                        <input id="password" class="RegisterPasswordRepeat" type="password" />
                        <span class="RegisterSuccessPasswordBoth"><i class="fas fa-check"></i>Hasła poprawne</span>
                        <span class="RegisterDangerPasswordBoth"><i class="fas fa-times"></i>Hasła nie są jednakowe</span>
                        <button class="buttonFormSubmit">Zarejestruj</button>
                    </form>
                    <div class="loginPage-container-loginform-form-register-noaccount">
                        <span>Masz już konto?</span>
                        <button class="GoToLogin"><i class="far fa-arrow-alt-circle-left"></i>Login</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<?php include "./inc/scripts.php"; ?>