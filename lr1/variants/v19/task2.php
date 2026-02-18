<?php

$usd = 30;
$rate = 41.15;

$uah = $usd * $rate;

echo $usd . " доларів можна обміняти на " . number_format($uah, 2, '.', '') . " грн";

?>
