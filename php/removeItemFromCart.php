<?php
require '../models/database.php';
require '../models/dbconfig.php';
require '../models/Users.php';
require '../models/Announcements.php';
require '../models/session_helper.php';

$id = $_POST['id'];
$newCartArr = array();

$oldArray = $_SESSION['cart'];

foreach ($oldArray as $a) {
    if ($a != $id) {
        array_push($newCartArr, $a);
    }
}

$_SESSION['cart'] = $newCartArr;

echo json_encode(['msg' => 'REMOVED']);
