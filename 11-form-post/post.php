<?php
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Form Post</title>
</head>

<body>
    <!-- emmet abbreviation notes. -->
    <!-- table>(tr>(td{First name: })+(td{?= $_POST['first_name']?>}))+(tr>(td{Last name: })+(td{?= $_POST['last_name']?>})) -->
    <table>
        <tr>
            <td>First name: </td>
            <td><?= $_POST['first_name'] ?></td> <!--$_POST adalah global variabel untuk menyimpan data yang diinput dari HTML Form-->
        </tr>
        <tr>
            <td>Last name: </td>
            <td><?= $_POST['last_name'] ?></td> <!--$_POST adalah global variabel untuk menyimpan data yang diinput dari HTML Form-->
        </tr>
    </table>
    <!-- emmet abbreviation notes. -->
    <!-- table>tr*2>td*2 -->
    <table>
        <tr>
            <td>First name: </td>
            <td><?= $_POST['first_name'] ?></td>
        </tr>
        <tr>
            <td>Last name: </td>
            <td><?= $_POST['last_name'] ?></td>
        </tr>
    </table>
</body>

</html>