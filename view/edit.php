<?php
require_once '../model/User.php';
$user = new User();
$data = $user->getUserById($_GET['id']);
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../assets/bootstrap.min.css">
    <title>Edit User</title>
</head>
<body class="container mt-5">
    <h2>Edit User</h2>
    <form action="../controller/UserController.php" method="POST">
        <input type="hidden" name="id" value="<?= $data['id'] ?>">
        <input type="text" name="lastname" class="form-control mb-2" value="<?= $data['lastname'] ?>" required>
        <input type="text" name="firstname" class="form-control mb-2" value="<?= $data['firstname'] ?>" required>
        <button type="submit" name="update" class="btn btn-primary">Update</button>
        <a href="index.php" class="btn btn-secondary">Cancel</a>
    </form>
</body>
</html>