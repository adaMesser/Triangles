<?php
require __DIR__ . '/func.php';

$op = isset($_GET['op']) ? $_GET['op'] : NULL;
if (!empty($_POST)) {
    require __DIR__ . '/op/result.php';
} else {
    require __DIR__ . '/op/index.php';
}
