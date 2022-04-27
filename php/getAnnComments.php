<?php
require '../models/database.php';
require '../models/dbconfig.php';
require '../models/Announcements.php';

$annid = $_POST['id'];
$ann = new Announcements();

$data = $ann->SelectAnnouncementById($annid);

echo json_encode(['msg' => $data->ann_comments]);
