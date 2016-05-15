<?php

if (!empty($_POST['init'])){
    //знаходимо значення на виведення
    
    $sideA;
    $sideB;
    $sideC;
    $type;
    $perimeter;
    $area;

    $info = array(
        'type' => $type,
        'sideA' => $sideA,
        'sideB' => $sideB,
        'sideC' => $sideC,
        'perimeter' => $perimeter,
        'area' => $area,
    );
}


ob_start();

require __DIR__ . '/../view/show_result.php';

$content = ob_get_clean();

require __DIR__ . '/../view/main.php';