<?php
require '../models/dbconfig.php';
require '../models/database.php';
require '../models/Users.php';

$user = new User();

$email = $_POST['email'];
$password = $_POST['password'];
$passwordHash = password_hash($password, PASSWORD_DEFAULT);
$uniq = uniqid($email);

try {
    if ($user->CreateNewUser($email, $passwordHash, $uniq)) {
        echo json_encode(['msg' => 'UserCreated']);
    } else {
        echo json_encode(['pass' => 'WrongInDb']);
    }
} catch (Exception) {
    echo json_encode(['pass' => 'WrongSomething']);
}
