<?php

if (!empty($_POST['init'])){
    //знаходимо значення на виведення


    if(!is_numeric($_POST['side']) || !is_numeric($_POST['side']) || !is_numeric($_POST['side'])){
        $error = 'Невірно введені значення';
        ob_start();
        require __DIR__ . '/../view/error.php';
        $content = ob_get_clean();
        require __DIR__ . '/../view/main.php';
    }

    $sideA=$_POST['sideA'];
    $sideB=$_POST['sideB'];
    $sideC=$_POST['sideC'];

    if($sideA+$sideB<=$sideC || $sideA+$sideC<=$sideB || $sideC+$sideB<=$sideA){
        $error = 'Некоректні значення: фігура із вказаними сторонами не є трикутником';
        ob_start();
        require __DIR__ . '/../view/error.php';
        $content = ob_get_clean();
        require __DIR__ . '/../view/main.php';
    }


    $type = $_POST['type'];


    //запускати відповідний creator($sideA, $sideB, $sideC)
    switch ($type) {
        case 1:

            break;
        case 2:
            
            break;
        case 3:
            
            break;
        case 4:
            
            break;
    }

}


ob_start();

require __DIR__ . '/../view/form.php';

$content = ob_get_clean();

require __DIR__ . '/../view/main.php';