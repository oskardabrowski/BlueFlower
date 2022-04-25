<?php
require "../models/database.php";
require "../models/dbconfig.php";
require "../models/Announcements.php";

$ann = new Announcements();

$id = $_POST['id'];
$name = $_POST['name'];

$data = $ann->SelectAnnouncementById($id);
$images = json_decode($data->ann_images);
$newArr = array();

foreach ($images as $i) {
    if ($i != $name) {
        array_push($newArr, $i);
    }
}

if (unlink('../img/users/' . $data->ann_user . '/' . $data->ann_dir . '/images/' . $name)) {
    if ($ann->UpdateImagesArray($id, json_encode($newArr))) {
        echo json_encode(['msg' => 'DELETED']);
    }
}
