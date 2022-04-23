<?php
require '../models/dbconfig.php';
require '../models/database.php';
require '../models/Users.php';
require '../models/session_helper.php';

$user = new User();
$id = $_POST['id'];
$userData = $user->GetUserData($id);
$data = $userData;
$path = '../img/users/' . $data->user_uniq . '/' . $data->user_photo;


if (unlink($path)) {
    if ($user->UpdateUserImage('', $data->user_uniq)) {
        echo json_encode(['msg' => 'REMOVED']);
    } else {
        echo json_encode(['msg' => 'NOT_REMOVED']);
    }
} else {
    echo json_encode(['msg' => 'NOT_REMOVED']);
}
