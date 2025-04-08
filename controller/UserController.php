<?php
require_once __DIR__ . '/../model/User.php';

$user = new User();

if (isset($_POST['add'])) {
    $user->insertUser($_POST['lastname'], $_POST['firstname']);
    header("Location: ../view/index.php");
    exit;
}

if (isset($_POST['update'])) {
    $user->updateUser($_POST['id'], $_POST['lastname'], $_POST['firstname']);
    header("Location: ../view/index.php");
    exit;
}

if (isset($_GET['delete'])) {
    $user->deleteUser($_GET['delete']);
    header("Location: ../view/index.php");
    exit;
}
?>