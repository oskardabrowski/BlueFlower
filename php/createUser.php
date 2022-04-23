<?php
require '../models/dbconfig.php';
require '../models/database.php';
require '../models/Users.php';

$user = new User();

$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
$password = $_POST['password'];
$passwordHash = password_hash($password, PASSWORD_DEFAULT);
$uniq = uniqid($email);

try {
    if (mkdir("../img/users/" . $uniq, 0777, true)) {
        if ($user->CreateNewUser($email, $passwordHash, $uniq)) {
            echo json_encode(['msg' => 'UserCreated']);
        } else {
            echo json_encode(['pass' => 'WrongInDb']);
        }
    } else {
        echo json_encode(['pass' => 'WrongSomething']);
    }
} catch (Exception) {
    echo json_encode(['pass' => 'WrongSomething']);
}
