<?php
require '../models/dbconfig.php';
require '../models/database.php';
require '../models/Users.php';

$current = $_POST['current'];
$new = $_POST['new'];
$id = $_POST['id'];

$user = new User();
$userData = $user->GetUserData($id);

try {
    if (password_verify($current, $userData->user_password)) {
        $newPassword = password_hash($new, PASSWORD_DEFAULT);
        if ($user->UpdateUserPassword($id, $newPassword)) {
            echo json_encode(['msg' => 'CHANGED']);
        } else {
            echo json_encode(['msg' => 'ERROR']);
        }
    } else {
        echo json_encode(['msg' => 'ERROR']);
    }
} catch (Error) {
    echo json_encode(['msg' => 'ERROR']);
}
