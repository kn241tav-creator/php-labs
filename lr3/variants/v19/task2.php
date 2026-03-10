<?php

require_once __DIR__ . '/layout.php';
require_once __DIR__ . '/Recipe.php';

$recipe1 = new Recipe('Борщ', 'Українська', 120);
$recipe2 = new Recipe('Вареники', 'Українська', 90);
$recipe3 = new Recipe('Голубці', 'Українська', 150);

$recipes = [$recipe1, $recipe2, $recipe3];
$labels = ['$recipe1', '$recipe2', '$recipe3'];

ob_start();
?>

<div class="task-header">
    <h1>Метод getInfo()</h1>
    <p>Виводить значення властивостей об'єкта</p>
</div>

<div class="code-block"><span class="code-comment">// Метод getInfo() повертає рядок з інформацією</span>
<span class="code-keyword">public function</span> <span class="code-method">getInfo</span>(): <span class="code-class">string</span>
{
    <span class="code-keyword">return</span> <span class="code-string">"Рецепт: {$this->name}, Кухня: {$this->cuisine}, Час: {$this->time} хв"</span>;
}

<span class="code-comment">// Виклик для кожного об'єкта</span>
<span class="code-variable">$recipe1</span><span class="code-arrow">-></span><span class="code-method">getInfo</span>();</div>

<div class="section-divider">
    <span class="section-divider-text">Результат виклику</span>
</div>

<div class="info-output">
    <div class="info-output-header">getInfo() — вивід для кожного об'єкта</div>
    <div class="info-output-body">
        <?php foreach ($recipes as $i => $recipe): ?>
        <div class="info-output-row">
            <span class="info-output-label"><?= $labels[$i] ?></span>
            <span class="info-output-text"><?= htmlspecialchars($recipe->getInfo()) ?></span>
        </div>
        <?php endforeach; ?>
    </div>
</div>

<div class="section-divider">
    <span class="section-divider-text">Картки рецептів</span>
</div>

<div class="users-grid">
    <?php
    $colors = ['avatar-red', 'avatar-blue', 'avatar-green'];
    $icons = ['🍲', '🥟', '🥬'];
    foreach ($recipes as $i => $recipe):
    ?>
    <div class="user-card">
        <div class="user-card-header">
            <div class="user-card-avatar <?= $colors[$i] ?>"><?= $icons[$i] ?></div>
            <div>
                <div class="user-card-name"><?= htmlspecialchars($recipe->name) ?></div>
                <div class="user-card-label"><?= $labels[$i] ?>->getInfo()</div>
            </div>
        </div>
        <div class="user-card-body">
            <div class="user-card-field">
                <span class="user-card-field-label">name</span>
                <span class="user-card-field-value"><?= htmlspecialchars($recipe->name) ?></span>
            </div>
            <div class="user-card-field">
                <span class="user-card-field-label">cuisine</span>
                <span class="user-card-field-value"><?= htmlspecialchars($recipe->cuisine) ?></span>
            </div>
            <div class="user-card-field">
                <span class="user-card-field-label">time</span>
                <span class="user-card-field-value"><?= $recipe->time ?> хв</span>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>

<?php
$content = ob_get_clean();
renderDemoLayout($content, 'Завдання 2', 'task2-body');
