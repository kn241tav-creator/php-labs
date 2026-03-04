<?php
require_once __DIR__ . '/layout.php';

$dollars = 30;
$rate = 41.15;

$uah = $dollars * $rate;

echo $dollars . " доларів можна обміняти на " . number_format($uah, 2, '.', '') . " грн";
?>
