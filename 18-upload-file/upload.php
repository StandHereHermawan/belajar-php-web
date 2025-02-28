<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $file_name = $_FILES['upload_file']['name']; # upload_file dari nama tag input di html.
    $file_type = $_FILES['upload_file']['type'];
    $file_size = $_FILES['upload_file']['size'];
    $file_tmp_name = $_FILES['upload_file']['tmp_name'];
    $file_error = $_FILES['upload_file']['error'];

    move_uploaded_file($file_tmp_name, __DIR__ . '/file/' . $file_name); # Memindahkan file yang diupload ke web server PHP yang sebelumnya berada di /opt/lampp/temp ke direktori /belajar-php-web/18-upload-file/file.
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>


<body>
    <?php if ($_SERVER['REQUEST_METHOD'] == "POST") : ?>
        <h1>Upload File</h1>
        <!-- table>tr*5>td*2 -->
        <table>
            <tr>
                <td>File Name : </td>
                <td><?= $file_name ?></td>
            </tr>
            <tr>
                <td>File Type : </td>
                <td><?= $file_type ?></td>
            </tr>
            <tr>
                <td>File Size : </td>
                <td><?= $file_size ?></td>
            </tr>
            <tr>
                <td>File Temporary Name : </td>
                <td><?= $file_tmp_name ?></td>
            </tr>
            <tr>
                <td>File Error : </td>
                <td><?= $file_error ?></td>
            </tr>
        </table>
    <?php endif; ?>

    <h1>Form Upload File</h1>
    <!-- form[action="upload.php"][method="post"][enctype="multipart/form-data"]>(label{File : }>input[type="file"][name="upload_file"])+(input[type=submit][value="Upload"]) -->
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <label for="">File :
            <input type="file" name="upload_file" />
        </label>
        <input type="submit" value="Upload" />
    </form>
</body>

</html>