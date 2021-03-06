<?php
require '../models/database.php';
require '../models/dbconfig.php';
require '../models/Users.php';
require '../models/Announcements.php';
require '../models/session_helper.php';

$user = new User();
$ann = new Announcements();
$id = $_SESSION['id'];
$userData = $user->GetUserData($id);

$type = $_POST['type'];
$class = $_POST['class'];
$title = filter_var($_POST['title'], FILTER_SANITIZE_STRING);
$general_image_name = $_FILES['general_image']['name'];
$general_image_tmp = $_FILES['general_image']['tmp_name'];
$general_image_size = $_FILES['general_image']['size'];
$desc = filter_var($_POST['desc'], FILTER_SANITIZE_STRING);
$images = $_FILES['images'];
$footer = filter_var($_POST['footer'], FILTER_SANITIZE_STRING);

$arrayImages = array();

$newDir = md5($title);

$generalPath = '../img/users/' . $userData->user_uniq . '/' . $newDir . '/' . $general_image_name;
if (mkdir('../img/users/' . $userData->user_uniq . '/' . $newDir)) {
    if ($user->uploadImage($general_image_name, $general_image_tmp, $general_image_size, $generalPath)) {
        if (mkdir('../img/users/' . $userData->user_uniq . '/' . $newDir . '/images')) {
            if (isset($_FILES['images']['tmp_name'])) {
                for ($i = 0; $i < count($_FILES['images']) - 1; $i++) {
                    $name = $_FILES['images']['name'][$i];
                    $tmp = $_FILES['images']['tmp_name'][$i];
                    $size = $_FILES['images']['size'][$i];

                    $path = '../img/users/' . $userData->user_uniq . '/' . $newDir . '/images/' . $name;
                    $user->uploadImage($name, $tmp, $size, $path);
                    if ($name != null) {
                        array_push($arrayImages, $name);
                    }
                }
                if ($ann->AddNewAnnoucement($general_image_name, $title, $desc, $footer, $class, $userData->user_uniq, json_encode($arrayImages), $newDir, $type, false)) {
                    header('Location: ../account.php?page=announcements&code=success');
                } else {
                    header('Location: ../account.php?page=form&code=error');
                }
            } else {
                header('Location: ../account.php?page=form&code=error');
            }
        } else {
            header('Location: ../account.php?page=form&code=error');
        }
    } else {
        header('Location: ../account.php?page=form&code=error');
    }
} else {
    header('Location: ../account.php?page=form&code=error');
}
