<?php

$month = 10;
$season = "";
$position = "";

if ($month == 12 || $month == 1 || $month == 2) {
    $season = "зима";
    
    if ($month == 12) {
        $position = "перший місяць сезону";
    } elseif ($month == 1) {
        $position = "середній місяць сезону";
    } else {
        $position = "останній місяць сезону";
    }

} elseif ($month >= 3 && $month <= 5) {
    $season = "весна";
    
    if ($month == 3) {
        $position = "перший місяць сезону";
    } elseif ($month == 4) {
        $position = "середній місяць сезону";
    } else {
        $position = "останній місяць сезону";
    }

} elseif ($month >= 6 && $month <= 8) {
    $season = "літо";
    
    if ($month == 6) {
        $position = "перший місяць сезону";
    } elseif ($month == 7) {
        $position = "середній місяць сезону";
    } else {
        $position = "останній місяць сезону";
    }

} elseif ($month >= 9 && $month <= 11) {
    $season = "осінь";
    
    if ($month == 9) {
        $position = "перший місяць сезону";
    } elseif ($month == 10) {
        $position = "середній місяць сезону";
    } else {
        $position = "останній місяць сезону";
    }

} else {
    echo "Невірний номер місяця";
    exit;
}

echo $season . ", " . $position;

?>
