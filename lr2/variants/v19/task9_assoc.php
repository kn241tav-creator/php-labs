<?php
require_once __DIR__ . '/layout.php';

function sortByName(array $employees): array
{
    ksort($employees);
    return $employees;
}

function sortBySalary(array $employees): array
{
    asort($employees);
    return $employees;
}

$employees = [
    'Микола' => 44000,
    'Жанна' => 67500,
    'Ростислав' => 31000,
    'Тамара' => 58000,
    'Юрій' => 22000,
    'Елла' => 75000,
    'Захар' => 40000,
];


$sortBy = $_POST['sort'] ?? $_GET['sort'] ?? 'name';
$sorted = $sortBy === 'grade' ? sortByGrade($students) : sortByName($students);

ob_start();
?>
<div class="demo-card">
    <h2>Асоціативний масив</h2>
    <p class="demo-subtitle">Сортування студентів за іменем або за оцінкою</p>

    <div class="flex-buttons">
        <form method="post">
            <input type="hidden" name="sort" value="name">
            <button type="submit" class="<?= $sortBy === 'name' ? 'btn-submit' : 'btn-secondary' ?>">За іменем</button>
        </form>
        <form method="post">
            <input type="hidden" name="sort" value="grade">
            <button type="submit" class="<?= $sortBy === 'grade' ? 'btn-submit' : 'btn-secondary' ?>">За оцінкою</button>
        </form>
    </div>

    <div class="demo-section">
        <h3>Вхідні дані</h3>
        <div class="demo-code">$students = [
<?php foreach ($students as $name => $grade): ?>
    "<?= $name ?>" => <?= $grade ?>,
<?php endforeach; ?>
];</div>
    </div>

    <div class="demo-section">
        <h3>Відсортовано: <span class="demo-tag demo-tag-primary"><?= $sortBy === 'grade' ? 'за оцінкою' : 'за іменем' ?></span></h3>
        <table class="demo-table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Ім'я <?= $sortBy === 'name' ? '&#8593;' : '' ?></th>
                    <th>Оцінка <?= $sortBy === 'grade' ? '&#8593;' : '' ?></th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; foreach ($sorted as $name => $grade): ?>
                <tr>
                    <td><?= $i++ ?></td>
                    <td><?= htmlspecialchars($name) ?></td>
                    <td><span class="demo-tag demo-tag-success"><?= $grade ?>/12</span></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <div class="demo-code"><?= $sortBy === 'grade' ? 'sortByGrade' : 'sortByName' ?>($students);
// <?= $sortBy === 'grade' ? 'asort($students)' : 'ksort($students)' ?></div>
</div>
<?php
$content = ob_get_clean();
renderVariantLayout($content, 'Завдання 9');
