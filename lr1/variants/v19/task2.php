<?php
require_once __DIR__ . '/layout.php';
ob_start();

$dollars = 30;
$rate = 41.15;
$uah = $dollars * $rate;
?>
<div class="card">
    <p class="result">
        <?php echo $dollars . " доларів можна обміняти на " . number_format($uah, 2, '.', '') . " грн"; ?>
    </p>
</div>
<?php
$content = ob_get_clean();
renderVariantLayout($content, 'Завдання 2', 'task3-body');
?>

