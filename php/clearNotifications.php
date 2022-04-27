<?php
require '../models/database.php';
require '../models/dbconfig.php';
require '../models/Users.php';

$user = new User();
$userid = $_POST['id'];

$user->ClearNotifications($userid, json_encode(array()));
