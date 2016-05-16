<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Triangles</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="center">
    <div class="content">
        <?php

        require __DIR__ . '/func.php';
        require __DIR__ . '/init.php';
        $triangle = init();
        info_about_triangle($triangle);
        ?>
    </div>
</div>
</body>
</html>