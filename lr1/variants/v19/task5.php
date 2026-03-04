<?php
require_once __DIR__ . '/layout.php';
ob_start();

$n = 942;
$digits = str_split((string)$n);
$sum = array_sum($digits);
$reverse = (int)strrev((string)$n);
$isPalindrome = ($n === $reverse) ? 'так' : 'ні';
?>
<div class="task6-container">
    <div class="number-display"><?php echo $n; ?></div>
    <div class="result-row"><span>Сума цифр:</span><span><?php echo $sum; ?></span></div>
    <div class="result-row"><span>Зворотне число:</span><span><?php echo $reverse; ?></span></div>
    <div class="result-row"><span>Паліндром:</span><span><?php echo $isPalindrome; ?></span></div>
</div>
<?php
$content = ob_get_clean();
renderVariantLayout($content, 'Завдання 5', 'task6-body');
?>

