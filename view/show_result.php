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
        <p> Цей трикутник є
            <?php
                switch ($type) {
                    case 1:
                        echo " різностороннім.";
                        break;
                    case 2:
                        echo " рівнобедненим.";
                        break;
                    case 3:
                        echo " рівностороннім.";
                        break;
                    case 4:
                        echo " прямокутним.";
                        break;
                }

            ?>
        </p>
        <p>Його сторони дорівнюють <?php echo '$sideA, $sideB, $sideC.'; ?> </p>
        <p>Периметр трикутника дорівнює <?php echo '$perimeter.'; ?></p>
        <p>Площа трикутника дорівнює  <?php echo '$area.'; ?></p>
    </div>
</div>
</body>
</html>