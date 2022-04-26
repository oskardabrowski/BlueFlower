<?php
require '../models/database.php';
require '../models/dbconfig.php';
require '../models/Users.php';
require '../models/session_helper.php';

$user = new User();

$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
$password = $_POST['password'];

try {
    if ($user->CheckEmailExists($email)) {
        $userData = $user->CheckEmailExists($email);
        $db_password = $userData[0]->user_password;
        if (password_verify($password, $db_password)) {
            $_SESSION["id"] = $userData[0]->user_id;
            $_SESSION["email"] = $userData[0]->user_email;
            $_SESSION["cart"] = array();
            echo json_encode(["msg" => "SESSION_STARTED"]);
        } else {
            echo json_encode(["msg" => "WRONG_PASSWORD"]);
        }
    } else {
        echo json_encode(["msg" => "USER_NOT_EXISTS"]);
    }
} catch (Exception) {
    echo json_encode(["msg" => "SOMETHING_WRONG"]);
}
