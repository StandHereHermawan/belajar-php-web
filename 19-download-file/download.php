<?php

if (isset($_GET['key']) && $_GET['key'] == 'rahasia') {
    header('Content-Disposition: attachment; filename="file.jpeg"');
    header('Content-Type: image/jpeg');
    readfile(__DIR__ . '/file/kars.jpg');
    echo "<h1>Success Key.</h1>";
    exit();
} else {
    echo "<h1>Invalid Key.</h1>";
    exit();
}

# <!DOCTYPE html>
# <html lang="en">
# 
# <head>
#     <meta charset="UTF-8">
#     <meta name="viewport" content="width=device-width, initial-scale=1.0">
#     <title>Download HTML</title>
# </head>
# 
# <body>
#     <h1>Download HTML</h1>
#     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum possimus molestiae at eum blanditiis totam ipsa quaerat quas a ut corrupti, dolores odit quis quisquam recusandae corporis voluptatem numquam neque!</p>
#     <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Explicabo veritatis dolore voluptatum sint similique fugiat eligendi voluptas accusamus error dolorum tenetur repudiandae minima, rem cupiditate doloribus. Vitae quae non maxime?</p>
#     <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aperiam impedit expedita odit quo numquam, sequi id, incidunt doloremque, provident aliquid quidem hic ex fugit obcaecati ipsa molestiae modi quaerat. Quae!</p>
#     <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iusto, voluptate debitis! Possimus facilis adipisci assumenda facere aperiam, molestiae aut rerum sint quod eius nisi porro saepe odit aliquid. Consectetur, voluptas.</p>
# </body>
# 
# </html>