<?php
$number = $argv[1];
$sum = array_sum(str_split($number));
echo "Сумма цифр в числе {$number} равна {$sum}.\n";