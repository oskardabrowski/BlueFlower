<?php
require "../models/database.php";
require "../models/dbconfig.php";
require "../models/Announcements.php";

$ann = new Announcements();
$id = $_POST['id'];
$announcement = $ann->SelectAnnouncementById($id);
$images = json_decode($announcement->ann_images);

$generalPath = '../img/users/' . $announcement->ann_user . '/' . $announcement->ann_dir;

if (unlink('../img/users/' . $announcement->ann_user . '/' . $announcement->ann_dir . '/' . $announcement->ann_img_general)) {
    foreach ($images as $i) {
        unlink('../img/users/' . $announcement->ann_user . '/' . $announcement->ann_dir . '/images/' . $i);
    }
    if (rmdir('../img/users/' . $announcement->ann_user . '/' . $announcement->ann_dir . '/images')) {
        if (rmdir('../img/users/' . $announcement->ann_user . '/' . $announcement->ann_dir)) {
            if ($ann->DeleteAnnouncement($id)) {
                echo json_encode(['msg' => 'SUCCESS']);
            } else {
                echo json_encode(['msg' => 'ERROR']);
            }
        } else {
            echo json_encode(['msg' => 'ERROR']);
        }
    } else {
        echo json_encode(['msg' => 'ERROR']);
    }
} else {
    echo json_encode(['msg' => 'ERROR']);
}
