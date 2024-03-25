<?php
function print_array($array, $level = 1) {
    $colors = ['red', 'blue', 'green', 'purple', 'yellow'];
    $color = $colors[min($level, count($colors)) - 1];
    echo "<ul style='color: {$color};'>\n";
    foreach ($array as $key => $value) {
        if (is_array($value)) {
            echo "<li>{$key}:</li>\n";
            print_array($value, $level + 1);
        } else {
            echo "<li>{$key}: {$value}</li>\n";
        }
    }
    echo "</ul>\n";
}

$array = [1, [2, 3, [12, 123]], 12]; // Ваш многомерный массив
print_array($array);