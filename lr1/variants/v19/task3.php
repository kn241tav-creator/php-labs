<?php
require_once __DIR__ . '/layout.php';
ob_start();

$month = 10;

function getSeasonInfo(int $m): array
{
    if ($m >= 3 && $m <= 5) {
        return ['name' => 'весна', 'class' => 'spring', 'emoji' => '🌸'];
    } elseif ($m >= 6 && $m <= 8) {
        return ['name' => 'літо', 'class' => 'summer', 'emoji' => '☀️'];
    } elseif ($m >= 9 && $m <= 11) {
        return ['name' => 'осінь', 'class' => 'autumn', 'emoji' => '🍂'];
    } else {
        return ['name' => 'зима', 'class' => 'winter', 'emoji' => '❄️'];
    }
}

function monthPosition(int $m): string
{
    if ($m % 3 == 1) {
        return 'перший місяць сезону';
    } elseif ($m % 3 == 2) {
        return 'середній місяць сезону';
    } else {
        return 'останній місяць сезону';
    }
}

$info = getSeasonInfo($month);
$position = monthPosition($month);

$content = '<div class="card large">
    <div class="season-emoji">' . $info['emoji'] . '</div>
    <div class="season-result">' . $info['name'] . ', ' . $position . '</div>
</div>';

renderVariantLayout($content, 'Завдання 3', 'task4-body ' . $info['class']);
?>

