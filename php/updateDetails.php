<?php
require '../models/dbconfig.php';
require '../models/database.php';
require '../models/Users.php';

$user = new User();

$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
$desc = filter_var($_POST['desc'], FILTER_SANITIZE_STRING);
$contact = $_POST['contact'];
$id = $_POST['id'];
$name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);

if ($user->UpdateUserDetails($id, $email, $desc, $contact, $name)) {
    echo json_encode(['msg' => 'UPDATED']);
} else {
    echo json_encode(['msg' => 'Error']);
}
