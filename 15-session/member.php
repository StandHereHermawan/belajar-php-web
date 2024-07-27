<?php

session_start();
if ($_SESSION['login'] != true) :
    header('Location: /15-session/login.php');
    exit();
endif;

$say = "Hello " . $_SESSION['username_login'] . "!";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mengambil Session, PHP Web</title>
</head>

<body>
    <h1><?= $say ?></h1>
    <!-- a[href="logout.php"]{Logout} -->
    <a href="/15-session/logout.php">Logout</a>
</body>

</html>