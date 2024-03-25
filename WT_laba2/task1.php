<?php
foreach ($argv as $key => $arg) {
    if ($key == 0) continue; // Пропустить имя файла
    if (is_numeric($arg)) {
        if (!str_contains($arg, '.')) {
            echo "Параметр '{$arg}' является целым числом.\n";
        } else {
            echo "Параметр '{$arg}' является дробным числом.\n";
        }
    } else {
        echo "Параметр '{$arg}' является строкой.\n";
    }
}