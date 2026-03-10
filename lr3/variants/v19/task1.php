<?php
require_once __DIR__ . '/layout.php';
require_once __DIR__ . '/Recipe.php';

$recipe1 = new Recipe('Борщ', 'Українська', 120);
$recipe2 = new Recipe('Вареники', 'Українська', 90);
$recipe3 = new Recipe('Голубці', 'Українська', 150);

$recipes = [
    ['obj' => $recipe1, 'color' => 'avatar-red', 'icon' => '🍲'],
    ['obj' => $recipe2, 'color' => 'avatar-blue', 'icon' => '🥟'],
    ['obj' => $recipe3, 'color' => 'avatar-green', 'icon' => '🥬'],
];

ob_start();
?>

<div class="task-header">
    <h1>Створення об'єктів</h1>
    <p>Клас <code>Recipe</code> з властивостями: name, cuisine, time</p>
</div>

<div class="code-block"><span class="code-comment">// Створюємо об'єкт та задаємо властивості</span>
<span class="code-variable">$recipe1</span> = <span class="code-keyword">new</span> <span class="code-class">Recipe</span>(<span class="code-string">'Борщ'</span>, <span class="code-string">'Українська'</span>, <span class="code-int">120</span>);</div>

<div class="section-divider">
    <span class="section-divider-text">3 об'єкти</span>
</div>

<div class="users-grid">
    <?php foreach ($recipes as $i => $data): ?>
    <div class="user-card">
        <div class="user-card-header">
            <div class="user-card-avatar <?= $data['color'] ?>"><?= $data['icon'] ?></div>
            <div>
                <div class="user-card-name"><?= htmlspecialchars($data['obj']->name) ?></div>
                <div class="user-card-label">Об'єкт #<?= $i + 1 ?></div>
            </div>
        </div>
        <div class="user-card-body">
            <div class="user-card-field">
                <span class="user-card-field-label">name</span>
                <span class="user-card-field-value"><?= htmlspecialchars($data['obj']->name) ?></span>
            </div>
            <div class="user-card-field">
                <span class="user-card-field-label">cuisine</span>
                <span class="user-card-field-value"><?= htmlspecialchars($data['obj']->cuisine) ?></span>
            </div>
            <div class="user-card-field">
                <span class="user-card-field-label">time</span>
                <span class="user-card-field-value"><?= $data['obj']->time ?> хв.</span>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>

<?php
$content = ob_get_clean();
renderDemoLayout($content, 'Завдання 1', 'task1-body');
