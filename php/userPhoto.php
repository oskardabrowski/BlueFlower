<?php
require '../models/dbconfig.php';
require '../models/database.php';
require '../models/Users.php';

$user = new User();

$id = $_POST['id'];
$userData = $user->GetUserData($id);


$name = $_FILES['user-image']['name'];
$tmp_name = $_FILES['user-image']['tmp_name'];
$size = $_FILES['user-image']['size'];
$uniq = $_POST['path'];
$path = '../img/users/' . $uniq . '/' . $name;


if (!empty($name)) {
    if (isset($userData->user_photo) && $userData->user_photo !== '') {
        if (unlink('../img/users/' . $uniq . '/' . $userData->user_photo)) {
            if ($user->uploadImage($name, $tmp_name, $size, $path)) {
                if ($user->UpdateUserImage($name, $uniq)) {
                    header('Location: ../account.php?page=profile&code=succes-upload');
                } else {
                    header('Location: ../account.php?page=profile&code=error');
                }
            } else {
                header('Location: ../account.php?page=profile&code=error');
            }
        } else {
            header('Location: ../account.php?page=profile&code=error');
        }
    } else {
        if ($user->uploadImage($name, $tmp_name, $size, $path)) {
            if ($user->UpdateUserImage($name, $uniq)) {
                header('Location: ../account.php?page=profile&code=succes-upload');
            } else {
                header('Location: ../account.php?page=profile&code=error');
            }
        } else {
            header('Location: ../account.php?page=profile&code=error');
        }
    }
} else {
    header('Location: ../account.php?page=profile&code=error');
}
