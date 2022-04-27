<?php
require '../models/database.php';
require '../models/dbconfig.php';
require '../models/Users.php';
require '../models/Announcements.php';

$id = $_POST['id'];
$commentJSON = $_POST['json'];

$ann = new Announcements();
$user = new User();

if ($ann->UpdateCommentOfAnnouncement($id, $commentJSON)) {
    echo json_encode(['msg' => 'SUCCESS']);
} else {
    echo json_encode(['msg' => 'ERROR']);
}
