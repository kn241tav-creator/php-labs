<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Завдання 6</title>
</head>
<body>

<h2>Шахова таблиця 11 x 4</h2>

<table cellspacing="0" cellpadding="0">
<?php
for ($i = 0; $i < 11; $i++) {
    echo "<tr>";
    for ($j = 0; $j < 4; $j++) {

        if (($i + $j) % 2 == 0) {
            $color = "black";
        } else {
            $color = "white";
        }

        echo "<td style='width:40px; height:40px; background:$color; border:1px solid black;'></td>";
    }
    echo "</tr>";
}
?>
</table>

<h2>11 синіх кіл (розмір зростає)</h2>

<?php
for ($i = 1; $i <= 11; $i++) {

    $size = $i * 15; 

    echo "<div style='
        width: {$size}px;
        height: {$size}px;
        background: blue;
        border-radius: 50%;
        margin: 10px;
    '></div>";
}
?>

</body>
</html>