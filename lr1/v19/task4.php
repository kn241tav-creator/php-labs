<?php
require_once __DIR__ . '/layout.php';

$char = 'ґ';

switch ($char) {
    case 'а':
    case 'е':
    case 'є':
    case 'и':
    case 'і':
    case 'ї':
    case 'о':
    case 'у':
    case 'ю':
    case 'я':
        echo "голосна";
        break;

    case 'ь':
    case 'ъ':
    case "'":
        echo "спеціальний символ";
        break;
    default:
        echo "приголосна";
}

?>
