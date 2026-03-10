<?php
require_once __DIR__ . '/layout.php';
require_once __DIR__ . '/Recipe.php';

$recipe3 = new Recipe('Голубці', 'Українська', 150);

$recipe4 = clone $recipe3;

ob_start();
?>

<div class="task-header">
    <h1>Клонування</h1>
    <p>Метод <code>__clone()</code> задає значення за замовчанням при копіюванні об'єкта</p>
</div>

<div class="code-block"><span class="code-comment">// Метод __clone() — викликається автоматично при clone</span>
<span class="code-keyword">public function</span> <span class="code-method">__clone</span>(): <span class="code-class">void</span>
{
    <span class="code-variable">$this</span><span class="code-arrow">-></span><span class="code-method">name</span> = <span class="code-string">'Новий рецепт'</span>;
    <span class="code-variable">$this</span><span class="code-arrow">-></span><span class="code-method">cuisine</span> = <span class="code-string">''</span>;
    <span class="code-variable">$this</span><span class="code-arrow">-></span><span class="code-method">time</span> = <span class="code-int">0</span>;
}

<span class="code-comment">// Створюємо 4-й об'єкт через clone</span>
<span class="code-variable">$recipe4</span> = <span class="code-keyword">clone</span> <span class="code-variable">$recipe3</span>;</div>

<div class="section-divider">
    <span class="section-divider-text">Оригінал vs Клон</span>
</div>

<div class="comparison-wrapper">
    <div class="users-grid">
        <div class="user-card">
            <div class="user-card-header">
                <div class="user-card-avatar avatar-green">🥬</div>
                <div>
                    <div class="user-card-name"><?= htmlspecialchars($recipe3->name) ?></div>
                    <div class="user-card-label">$recipe3 <span class="user-card-badge badge-constructor">original</span></div>
                </div>
            </div>
            <div class="user-card-body">
                <div class="user-card-field">
                    <span class="user-card-field-label">name</span>
                    <span class="user-card-field-value"><?= htmlspecialchars($recipe3->name) ?></span>
                </div>
                <div class="user-card-field">
                    <span class="user-card-field-label">cuisine</span>
                    <span class="user-card-field-value"><?= htmlspecialchars($recipe3->cuisine) ?></span>
                </div>
                <div class="user-card-field">
                    <span class="user-card-field-label">time</span>
                    <span class="user-card-field-value"><?= $recipe3->time ?> хв</span>
                </div>
            </div>
        </div>

        <div class="user-card">
            <div class="user-card-header">
                <div class="user-card-avatar avatar-rose">📝</div>
                <div>
                    <div class="user-card-name"><?= htmlspecialchars($recipe4->name) ?></div>
                    <div class="user-card-label">$recipe4 <span class="user-card-badge badge-clone">clone</span></div>
                </div>
            </div>
            <div class="user-card-body">
                <div class="user-card-field">
                    <span class="user-card-field-label">name</span>
                    <span class="user-card-field-value"><?= htmlspecialchars($recipe4->name) ?></span>
                </div>
                <div class="user-card-field">
                    <span class="user-card-field-label">cuisine</span>
                    <span class="user-card-field-value"><?= htmlspecialchars($recipe4->cuisine) ?> (пусто)</span>
                </div>
                <div class="user-card-field">
                    <span class="user-card-field-label">time</span>
                    <span class="user-card-field-value"><?= $recipe4->time ?> хв</span>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section-divider">
    <span class="section-divider-text">getInfo() порівняння</span>
</div>

<div class="info-output">
    <div class="info-output-header">Результат getInfo() для оригіналу та клону</div>
    <div class="info-output-body">
        <div class="info-output-row">
            <span class="info-output-label">$recipe3</span>
            <span class="info-output-text"><?= htmlspecialchars($recipe3->getInfo()) ?></span>
        </div>
        <div class="info-output-row">
            <span class="info-output-label">$recipe4</span>
            <span class="info-output-text"><?= htmlspecialchars($recipe4->getInfo()) ?></span>
        </div>
    </div>
</div>

<?php
$content = ob_get_clean();
renderDemoLayout($content, 'Завдання 4', 'task4-body');
