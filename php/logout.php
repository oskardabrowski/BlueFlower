<?php
require '../models/session_helper.php';

function LogoutUser()
{
    if (isset($_SESSION['id'])) {
        unset($_SESSION['id']);
        unset($_SESSION['email']);
        session_destroy();
        header('Location: ../index.php');
    }
}
LogoutUser();
