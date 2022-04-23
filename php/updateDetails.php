<?php
require '../models/dbconfig.php';
require '../models/database.php';
require '../models/Users.php';

$user = new User();

$email = $_POST['email'];
$desc = $_POST['desc'];
$contact = $_POST['contact'];
$id = $_POST['id'];

if ($user->UpdateUserDetails($id, $email, $desc, $contact)) {
    echo json_encode(['msg' => 'UPDATED']);
} else {
    echo json_encode(['msg' => 'Error']);
}
