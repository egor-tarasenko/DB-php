<?php
    /** @var $pdo*/
    require 'connect.php';


$id = $_GET['id'] ?? null;

$stmt = $pdo->prepare('SELECT * FROM users WHERE id = ?');
$stmt->execute([$id]);
$user = $stmt->fetch();

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>
    <h1>User Details</h1>

    <h3>ID: <?php echo $user['id']; ?></h3>
    <h3>Name: <?php echo $user['name']; ?></h3>
    <h3>Email: <?php echo $user['email']; ?></h3>
    <h3>Password: <?php echo $user['password']; ?></h3>
    <h3>Created At: <?php echo $user['created_at']; ?></h3>
    <h3>Updated At: <?php echo $user['updated_at']; ?></h3>
</body>
</html>
