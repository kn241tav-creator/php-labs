<?php
require_once __DIR__ . '/layout.php';

function findUnique(array $arr): array
{
    $counts = array_count_values($arr);
    $unique = array_keys(array_filter($counts, fn($count) => $count === 1));
    return array_values($unique);
}

$input = $_POST['array'] ?? '11, 6, 2, 15, 6, 11, 9, 2, 4, 15, 7, 13';
$submitted = isset($_POST['array']);

$arr = array_map(fn($v) => (int)trim($v), explode(',', $input));
$arr = array_filter($arr, fn($v) => $v !== 0 || $v === 0);

$unique = findUnique($arr);

ob_start();
?>
<div class="demo-card">
    <h2>Однець в масиві</h2>
    <p class="demo-subtitle">Вибірає однець, що зустрічаються тільки один раз</p>

    <form method="post" class="demo-form">
        <div>
            <label for="array">Масив (через кому)</label>
            <input type="text" id="array" name="array" value="<?= htmlspecialchars($input) ?>" placeholder="11, 6, 2, 15">
        </div>
        <button type="submit" class="btn-submit">Найти однець</button>
    </form>

    <?php if (!empty($arr)): ?>
    <div class="demo-section">
        <h3>Вхідний масив</h3>
        <div class="array-display">
            <?php foreach ($arr as $item): ?>
            <span class="array-item <?= $mode && trim($item) == $mode['value'] ? 'array-item-unique' : '' ?>"><?= htmlspecialchars($item) ?></span>
            <?php endforeach; ?>
        </div>
    </div>

    <?php if (!empty($unique)): ?>
    <div class="demo-result">
        <h3>Мода</h3>
        <div class="demo-result-value"><?= htmlspecialchars($mode['value']) ?> (зустрічається <?= $mode['count'] ?> разів)</div>
    </div>

    <div class="demo-section">
        <h3>Частота елементів</h3>
        <table class="demo-table">
            <thead>
                <tr>
                    <th>Елемент</th>
                    <th>Кількість</th>
                    <th>Статус</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $counts = array_count_values($arr);
                arsort($counts);
                foreach ($counts as $value => $count):
                ?>
                <tr>
                    <td><?= htmlspecialchars($value) ?></td>
                    <td><?= $count ?></td>
                    <td>
                        <?php if ($value == $mode['value']): ?>
                        <span class="demo-tag demo-tag-success">Мода</span>
                        <?php else: ?>
                        <span class="demo-tag demo-tag-primary"><?= $count ?>×</span>
                        <?php endif; ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <?php else: ?>
    <div class="demo-result demo-result-info">
        <h3>Результат</h3>
        <div class="demo-result-value">Масив порожній</div>
    </div>
    <?php endif; ?>

    <div class="demo-code">findMode([<?= htmlspecialchars(implode(', ', $arr)) ?>])
// Результат: <?= $mode ? "мода = {$mode['value']} ({$mode['count']} разів)" : 'null' ?></div>
    <?php endif; ?>
</div>
<?php
$content = ob_get_clean();
renderVariantLayout($content, 'Завдання 6');
