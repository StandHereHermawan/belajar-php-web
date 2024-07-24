<?php
$title = "Hello PHP dan HTML";
$body = "Lorem, ipsum dolor sit amet consectetur adipisicing elit";
$konten = "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Possimus porro necessitatibus omnis voluptate? Est aliquam suscipit aperiam maiores provident numquam modi quisquam repudiandae, ad explicabo enim in quaerat blanditiis voluptate!";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
</head>

<body>
    <!-- div#konten>h1#judulKonten{<\?php echo $body>}+article#konten{<\?php echo $konten>} emmet abbreviation, hapus / sebelum tanda "?". -->
    <div id="konten">
        <h1 id="judulKonten"><?= $body ?></h1>
        <article id="konten"><?= $konten ?></article>
    </div>
</body>