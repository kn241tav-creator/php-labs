<?php
require_once __DIR__ . '/layout.php';
require_once __DIR__ . '/Recipe.php';

$recipe1 = new Recipe('Борщ', 'Українська', 120);
$recipe2 = new Recipe('Вареники', 'Українська', 90);
$recipe3 = new Recipe('Голубці', 'Українська', 150);

$recipes = [
    ['obj' => $recipe1, 'color' => 'avatar-red', 'icon' => '🍲', 'var' => '$recipe1'],
    ['obj' => $recipe2, 'color' => 'avatar-blue', 'icon' => '🥟', 'var' => '$recipe2'],
    ['obj' => $recipe3, 'color' => 'avatar-green', 'icon' => '🥬', 'var' => '$recipe3'],
];

ob_start();
?>

<div class="task-header">
    <h1>Конструктор</h1>
    <p>Початкові значення задаються одразу при створенні об'єкта</p>
</div>

<div class="code-block"><span class="code-comment">// Конструктор класу Recipe</span>
<span class="code-keyword">public function</span> <span class="code-method">__construct</span>(<span class="code-class">string</span> <span class="code-variable">$name</span>, <span class="code-class">string</span> <span class="code-variable">$cuisine</span>, <span class="code-class">int</span> <span class="code-variable">$time</span>)
{
    <span class="code-variable">$this</span><span class="code-arrow">-></span><span class="code-method">name</span> = <span class="code-variable">$name</span>;
    <span class="code-variable">$this</span><span class="code-arrow">-></span><span class="code-method">cuisine</span> = <span class="code-variable">$cuisine</span>;
    <span class="code-variable">$this</span><span class="code-arrow">-></span><span class="code-method">time</span> = <span class="code-variable">$time</span>;
}

<span class="code-comment">// Створення через конструктор</span>
<span class="code-variable">$recipe1</span> = <span class="code-keyword">new</span> <span class="code-class">Recipe</span>(<span class="code-string">'Борщ'</span>, <span class="code-string">'Українська'</span>, <span class="code-int">120</span>);
<span class="code-variable">$recipe2</span> = <span class="code-keyword">new</span> <span class="code-class">Recipe</span>(<span class="code-string">'Вареники'</span>, <span class="code-string">'Українська'</span>, <span class="code-int">90</span>);
<span class="code-variable">$recipe3</span> = <span class="code-keyword">new</span> <span class="code-class">Recipe</span>(<span class="code-string">'Голубці'</span>, <span class="code-string">'Українська'</span>, <span class="code-int">150</span>);</div>

<div class="section-divider">
    <span class="section-divider-text">Об'єкти створені через конструктор</span>
</div>

<div class="users-grid">
    <?php foreach ($recipes as $data): ?>
    <div class="user-card">
        <div class="user-card-header">
            <div class="user-card-avatar <?= $data['color'] ?>"><?= $data['icon'] ?></div>
            <div>
                <div class="user-card-name"><?= htmlspecialchars($data['obj']->name) ?></div>
                <div class="user-card-label"><?= $data['var'] ?> <span class="user-card-badge badge-constructor">constructor</span></div>
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
                <span class="user-card-field-value"><?= $data['obj']->time ?> хв</span>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>

<div class="section-divider">
    <span class="section-divider-text">getInfo() для кожного</span>
</div>

<div class="info-output">
    <div class="info-output-header">Виклик getInfo() для об'єктів, створених через конструктор</div>
    <div class="info-output-body">
        <?php foreach ($recipes as $data): ?>
        <div class="info-output-row">
            <span class="info-output-label"><?= $data['var'] ?></span>
            <span class="info-output-text"><?= htmlspecialchars($data['obj']->getInfo()) ?></span>
        </div>
        <?php endforeach; ?>
    </div>
</div>

<?php
$content = ob_get_clean();
renderDemoLayout($content, 'Завдання 3', 'task3-body');
