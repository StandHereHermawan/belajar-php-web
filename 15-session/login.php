<?php

session_start(); # Function untuk memulai session.

if ($_SESSION['login'] == true) :
    header('Location: /15-session/member.php');
    exit();
endif;

$error = '';
if ($_SERVER['REQUEST_METHOD'] == "POST") :
    if ($_POST['username'] == 'arief' && $_POST['password'] == 'rahasia') :
        $_SESSION['login'] = true; # $_SESSION adalah global variable dengan tipe data array. berfungsi menyimpan data di session.
        $_SESSION['username_login'] = 'arief';
        header('Location: /15-session/member.php');
        exit();
    else :
        $error = "Login Gagal";
    endif;
endif;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Page, PHP Web</title>
</head>

<body>
    <h1>Login</h1>

    <!-- emmet -->
    <!-- form[action="login.php"][method="post"]>((label>input)+br)*2+input[type=submit][value=Login] -->
    <form action="/15-session/login.php" method="post">
        <label>username:
            <input type="text" name="username" />
        </label>
        <br />
        <label>password:
            <input type="password" name="password" />
        </label>
        <br />
        <input type="submit" value="Login" />
    </form>

    <?php if ($error != "") : ?>
        <h2><?= $error ?></h2>
    <?php endif; ?>

    <?php
    if ($error != "") :
        $text1 = "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Maxime odit mollitia magnam necessitatibus quasi repellendus eius pariatur, eligendi itaque voluptates alias vitae culpa quidem? Delectus saepe illo nesciunt voluptate eligendi!";
        $text2 = ". Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iusto nobis repellat, voluptas exercitationem magnam ut rem voluptatibus, unde molestias iste mollitia necessitatibus, animi voluptates optio impedit laboriosam culpa veniam? Nisi.";
        echo "<p>$error. $text1.</p>";
        echo "<p>$error. $text2.</p>";
    endif;
    ?>
</body>

</html>