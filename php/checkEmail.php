<?php
require '../models/database.php';
require '../models/dbconfig.php';
require '../models/Users.php';

$email = $_POST['email'];
$user = new User();

if ($user->CheckEmailExists($email)) {
    echo json_encode(['msg' => 'Exists']);
} else {
    echo json_encode(['msg' => 'Notexists']);
}
