<?php
require '../models/database.php';
require '../models/dbconfig.php';
require '../models/Announcements.php';
require '../models/session_helper.php';

$ids = json_decode($_POST['ids']);
$ann = new Announcements();

foreach ($ids as $i) {
    $ann->ActiveAnnouncementById($i, 1);
}

$_SESSION['cart'] = array();

echo json_encode(['msg' => 'SUCCESS']);
