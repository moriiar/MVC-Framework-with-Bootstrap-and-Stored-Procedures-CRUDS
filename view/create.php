<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../assets/bootstrap.min.css">
    <title>Create User</title>
</head>
<body class="container mt-5">
    <h2>Create User</h2>
    <form action="../controller/UserController.php" method="POST">
        <input type="text" name="lastname" class="form-control mb-2" placeholder="Last Name" required>
        <input type="text" name="firstname" class="form-control mb-2" placeholder="First Name" required>
        <button type="submit" name="add" class="btn btn-primary">Save</button>
        <a href="index.php" class="btn btn-secondary">Cancel</a>
    </form>
</body>
</html>