<?php
require_once __DIR__ . '/layout.php';
ob_start();
?>
<style>
    .task6-container {
        display: flex;
        flex-direction: column;
        gap: 40px;
    }

    .task6-section {
        background: white;
        padding: 40px;
        border-radius: var(--radius-xl);
        box-shadow: var(--shadow-md);
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .task6-section:hover {
        transform: translateY(-2px);
        box-shadow: var(--shadow-lg);
    }

    .task6-section h2 {
        color: var(--color-primary);
        margin-top: 0;
        font-size: 24px;
        margin-bottom: 5px;
    }

    .task6-section .desc {
        color: var(--color-text-muted);
        font-size: 14px;
        margin-bottom: 25px;
    }

    /* === ТАБЛИЦЯ === */
    .chess-board {
        border-collapse: collapse;
        display: inline-block;
        box-shadow: 0 2px 8px rgba(0,0,0,0.15);
        border-radius: 6px;
        overflow: hidden;
    }

    .chess-board td {
        width: 45px;
        height: 45px;
        border: 1px solid #ccc;
        transition: transform 0.2s;
    }

    .chess-board td.black {
        background: linear-gradient(135deg, #1f2937, #111827);
    }

    .chess-board td.white {
        background: linear-gradient(135deg, #f3f4f6, #e5e7eb);
    }

    .chess-board td:hover {
        transform: scale(1.1);
    }

    /* === КОЛА === */
    .circles-wrapper {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;
        gap: 20px;
        background: linear-gradient(135deg, #e0e7ff 0%, #ede9fe 100%);
        padding: 40px;
        border-radius: 8px;
        min-height: 300px;
    }

    .circle {
        border-radius: 50%;
        background: linear-gradient(135deg, #4f46e5, #6366f1);
        box-shadow: 0 4px 20px rgba(79, 70, 229, 0.4);
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-weight: bold;
        font-size: 12px;
    }

    .circle:hover {
        box-shadow: 0 8px 30px rgba(79, 70, 229, 0.6);
        transform: scale(1.15);
    }

    .counter {
        text-align: center;
        margin-top: 20px;
        color: var(--color-text-muted);
        font-size: 14px;
    }
</style>

<div class="task6-container">
    <!-- ТАБЛИЦЯ -->
    <div class="task6-section">
        <h2>🏁 Шахова таблиця</h2>
        <div class="desc">11 рядків × 4 колонки з чередуванням кольорів</div>
        <div style="text-align: center;">
            <table class="chess-board">
            <?php
            for ($i = 0; $i < 11; $i++) {
                echo "<tr>";
                for ($j = 0; $j < 4; $j++) {
                    $color = (($i + $j) % 2 == 0) ? 'black' : 'white';
                    echo "<td class='$color'></td>";
                }
                echo "</tr>";
            }
            ?>
            </table>
        </div>
    </div>

    <!-- КОЛА -->
    <div class="task6-section">
        <h2>🔵 Синя градація</h2>
        <div class="desc">11 кіл з поступово зростаючим розміром</div>
        <div class="circles-wrapper">
        <?php
        for ($i = 1; $i <= 11; $i++) {
            $size = $i * 20;
            echo "<div class='circle' style='width:{$size}px; height:{$size}px;'></div>";
        }
        ?>
        </div>
        <div class="counter">📊 Розміри: 20px → 220px</div>
    </div>
</div>

<?php
$content = ob_get_clean();
renderVariantLayout($content, 'Завдання 6', 'task3-body');
?>
       