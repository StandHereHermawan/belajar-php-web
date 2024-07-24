<?php
$title = "Global Variable \$_SERVER"
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
</head>

<body>
    <!-- h1+table[border=1]>{}+(tr>(td{})+(td{})) -->
    <h1>$_SERVER</h1>
    <table border="1">
        <?php foreach ($_SERVER as $key => $value) { ?>
            <tr>
                <td><?= $key ?></td>
                <td><?= $value ?></td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>