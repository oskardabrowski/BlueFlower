<?php
require '../models/database.php';
require '../models/dbconfig.php';
require '../models/Users.php';
require '../models/Announcements.php';

$user = new User();
$ann = new Announcements();

$id = $_POST['id'];
$json = $_POST['json'];

$user->UpdateUserComments($id, $json);
