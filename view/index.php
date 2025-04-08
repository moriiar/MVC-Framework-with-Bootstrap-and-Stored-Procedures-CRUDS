<?php
require_once '../model/User.php';
$user = new User();
$users = $user->getUsers();
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../assets/bootstrap.min.css">
    <title>User List</title>
</head>
<body class="container mt-5">
    <h2>User List</h2>
    <a href="create.php" class="btn btn-success mb-3">Add New</a>
    <table class="table table-bordered">
        <thead>
            <tr><th>ID</th><th>Lastname</th><th>Firstname</th><th>Actions</th></tr>
        </thead>
        <tbody>
        <?php foreach($users as $row): ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['lastname'] ?></td>
            <td><?= $row['firstname'] ?></td>
            <td>
                <a href="edit.php?id=<?= $row['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                <a href="../controller/UserController.php?delete=<?= $row['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Delete user?')">Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>