<?php
$say = "Hello " . htmlspecialchars($_GET['name']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XSS Cross Site Scripting, PHP Web</title>
</head>

<body>
    <h1><?= $say ?></h1>
</body>

</html>

<!-- http://localhost:8080/10-xss/script-can-xss.php?Arief%3Ch1%3E%3Cscript%3Ealert(%22Ups,%20anda%20di%20heck,%20ciee%20ga%20pake%20perlindungan%20xss.%22)%3C/script%3E%3C/h1%3E -->