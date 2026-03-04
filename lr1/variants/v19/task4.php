<?php
require_once __DIR__ . '/layout.php';
ob_start();

$char = 'ґ';

$normalized = strtolower($char);
$vowels = ['а','е','є','и','і','ї','о','у','ю','я'];
$special = ['ь','ъ',"'"];

if (in_array($normalized, $vowels, true)) {
    $result = 'голосна';
} elseif (in_array($normalized, $special, true)) {
    $result = 'спеціальний символ';
} else {
    $result = 'приголосна';
}
?>
<div class="letter-display"><?php echo htmlspecialchars($char); ?></div>
<p class="letter-result"><?php echo $result; ?></p>
<?php
$content = ob_get_clean();
renderVariantLayout($content, 'Завдання 4', 'task5-body');
?>

