<?php
require_once __DIR__ . '/layout.php';

function sumOfDigits(int $number): int
{
    $d1 = (int) floor($number / 100);
    $d2 = (int) floor(($number % 100) / 10);
    $d3 = $number % 10;
    return $d1 + $d2 + $d3;
}
function reverseNumber(int $number): int
{
    $d1 = (int) floor($number / 100);
    $d2 = (int) floor(($number % 100) / 10);
    $d3 = $number % 10;
    return $d3 * 100 + $d2 * 10 + $d1;
}


function isPalindrome(int $number): string
{
    return $number === reverseNumber($number) ? 'так' : 'ні';
}

$number = mt_rand(100, 999);

$d1 = (int)($number / 100);
$d2 = (int)(($number % 100) / 10);
$d3 = $number % 10;

$sum = sumOfDigits($number);
$reversed = reverseNumber($number);
$palindrome = isPalindrome($number);

$content = '<div class="task5-container">
    <div class="card">
        <h3>Випадкове тризначне число</h3>
        <div class="number-display">' . $number . '</div>
        <div class="digits-row">
            <div class="digit-box">' . $d1 . '</div>
            <div class="digit-box">' . $d2 . '</div>
            <div class="digit-box">' . $d3 . '</div>
        </div>
    </div>

    <div class="card mt-20">
        <h3>Результати</h3>
        <div class="result-row">
            <div>
                <span>1. Сума цифр</span>
                <div class="func">sumOfDigits(' . $number . ')</div>
            </div>
            <span class="result-value">' . $sum . '</span>
        </div>
        <div class="result-row">
            <div>
                <span>2. Зворотне число</span>
                <div class="func">reverseNumber(' . $number . ')</div>
            </div>
            <span class="result-value">' . $reversed . '</span>
        </div>
        <div class="result-row">
            <div>
                <span>3. Паліндром</span>
                <div class="func">isPalindrome(' . $number . ')</div>
            </div>
            <span class="result-value">' . $palindrome . '</span>
        </div>
    </div>

    <p class="hint">Оновіть сторінку для нового числа </p>
</div>';

renderDemoLayout($content, 'Завдання 5', 'task5-body');
