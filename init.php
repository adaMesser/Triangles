<?php
function init()
{

    //якеь із значень не є числом

    if (!is_numeric($_POST['sideA']) || !is_numeric($_POST['sideB']) || !is_numeric($_POST['sideC'])) {
        $error = 'Невірно введені значення';
        header('Location: error.php?error='.$error);
        exit;
    }

    $sideA = $_POST['sideA'];
    $sideB = $_POST['sideB'];
    $sideC = $_POST['sideC'];

    //сума двох сторін менша чи рівна за третю - це не трикутник
    if ($sideA + $sideB <= $sideC || $sideA + $sideC <= $sideB || $sideC + $sideB <= $sideA) {
        $error = 'Некоректні значення: фігура із вказаними сторонами не є трикутником';
        header('Location: error.php?error='.$error);
        exit;
    }


    $type = $_POST['type'];

    //запускати відповідний creator($sideA, $sideB, $sideC)
    switch ($type) {
        case 1: //різносторонній
            $triangle = new scalene_triangle($sideA, $sideB, $sideC, $type);
            break;
        case 2: //рівнобедрений
            $triangle = new isosceles_triangle($sideA, $sideB, $sideC, $type);
            break;
        case 3://рівносторонній
            $triangle = new equilateral_triangle($sideA, $sideB, $sideC, $type);
            break;
        case 4://прямокутний
            $triangle = new rectangular_triangle($sideA, $sideB, $sideC, $type);
            break;
    }
    return $triangle;
}
?>
