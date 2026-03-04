<?php
require_once __DIR__ . '/layout.php'; 
ob_start();
?>

<div class="formatted-text" style="font-family: Georgia, serif; font-size: 18px; background: #fafafa; padding: 30px; border-radius: 8px;">
    <p>Друзі <b>збираються</b> біля вогнища,</p>
    <p style="margin-left:20px;">Гітара звучить у <i>нічній</i> тиші,</p>
    <p style="margin-left:40px;">Іскри летять до зоряного неба,</p>
    <p style="margin-left:60px;">І спогади гріють найкращі й найвищі.</p>
</div>

<?php
$content = ob_get_clean();
renderVariantLayout($content, 'Завдання 1', 'task1-body');
?>
