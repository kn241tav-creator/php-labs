<?php

$char = 'ґ';

switch ($char) {
    // Голосні
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

    // Спеціальні символи
    case 'ь':
    case 'ъ':
    case "'":
        echo "спеціальний символ";
        break;

    // Приголосні (все інше)
    default:
        echo "приголосна";
}

?>
