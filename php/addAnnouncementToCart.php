<?php
require '../models/database.php';
require '../models/dbconfig.php';
require '../models/Users.php';
require '../models/Announcements.php';
require '../models/session_helper.php';

$id = $_POST['id'];

if (isset($_SESSION['cart'])) {
    if (!in_array($id, $_SESSION['cart'])) {
        if (array_push($_SESSION['cart'], $id)) {
            echo json_encode(['msg' => 'SUCCESS']);
        } else {
            echo json_encode(['msg' => 'ERROR']);
        }
    } else {
        echo json_encode(['msg' => 'SUCCESS']);
    }
} else {
    echo json_encode(['msg' => 'ERROR']);
}
