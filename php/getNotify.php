<?php
require '../models/database.php';
require '../models/dbconfig.php';
require '../models/Users.php';

$annid = $_POST['id'];
$user = new User();

$data = $user->GetUserNotofications($annid);

echo json_encode(['msg' => $data->user_comments]);
