<?php
require "../models/database.php";
require "../models/dbconfig.php";
require "../models/Announcements.php";

$ann = new Announcements();

$id = $_POST['id'];

if ($ann->DeleteAnnouncement($id)) {
    echo json_encode(['msg' => 'SUCCESS']);
} else {
    echo json_encode(['msg' => 'ERROR']);
}
