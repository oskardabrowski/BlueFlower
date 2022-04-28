<?php
require '../models/database.php';
require '../models/dbconfig.php';
require '../models/Users.php';
require '../models/Announcements.php';

$generalImgUpload = false;
$imagesAllUpload  = false;

$user_id = $_POST['user_id'];
$id = $_POST['id'];
$class = $_POST['class'];
$title = filter_var($_POST['title'], FILTER_SANITIZE_STRING);

$name = $_FILES['general_img']['name'];
$tmp = $_FILES['general_img']['tmp_name'];
$size = $_FILES['general_img']['size'];

$generalImgName = $name;

$desc = filter_var($_POST['desc'], FILTER_SANITIZE_STRING);
$images = $_FILES['NewPhotos'];
$footer = filter_var($_POST['footer'], FILTER_SANITIZE_STRING);

$ann = new Announcements();
$data = $ann->SelectAnnouncementById($id);
$imagesArray = json_decode($data->ann_images);

$user = new User();
$userData = $user->GetUserData($user_id);

if ($name) {
    $generalImgName = $name;
    if (unlink('../img/users/' . $userData->user_uniq . '/' . $data->ann_dir . '/' . $data->ann_img_general)) {
        $path = '../img/users/' . $userData->user_uniq . '/' . $data->ann_dir . '/' . $name;
        if ($user->uploadImage($name, $tmp, $size, $path)) {
            $generalImgUpload = true;
        } else {
            $generalImgUpload = false;
        }
    } else {
        $generalImgUpload = false;
    }
} else {
    $generalImgName = $data->ann_img_general;
    $generalImgUpload = true;
}

if ($_FILES['NewPhotos']['tmp_name']) {
    for ($i = 0; $i < count($_FILES['NewPhotos']) - 2; $i++) {
        $name = $_FILES['NewPhotos']['name'][$i];
        $tmp = $_FILES['NewPhotos']['tmp_name'][$i];
        $size = $_FILES['NewPhotos']['size'][$i];

        $path = '../img/users/' . $userData->user_uniq . '/' . $data->ann_dir . '/images/' . $name;
        if ($name != null) {
            $user->uploadImage($name, $tmp, $size, $path);
            array_push($imagesArray, $name);
        }
    }
    $imagesAllUpload = true;
}

if ($generalImgUpload && $imagesAllUpload) {
    if ($ann->UpdateAnnouncementById($id, $generalImgName, $title, $desc, $footer, $class, json_encode($imagesArray))) {
        header('Location: ../account.php?page=announcements&code=success');
    } else {
        header('Location: ../account.php?page=announcements&code=error');
    }
} else {
    header('Location: ../account.php?page=announcements&code=error');
}
