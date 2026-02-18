<?php
require_once __DIR__ . '/layout.php'; 
ob_start();
?>

<div class="poem">
    <?php
    echo "<p>Моя перша рядок у вірші,</p>";
    echo "<p>Друга рядок з <b>виділенням</b>,</p>";
    echo "<p>Третя рядок, можливо з <i>курсивом</i>,</p>";
    echo "<p class='poem-indent-1'>Четверта рядок із відступом,</p>";
    echo "<p class='poem-indent-2'>П'ята рядок ще далі,</p>";
    echo "<p class='poem-indent-3'>Шоста рядок…</p>";
    echo "<p class='poem-indent-4'>І завершуємо вірш</p>";
    ?>
</div>

<?php
$content = ob_get_clean();

renderDemoLayout($content, 'Завдання 1', 'task1-body'); 
