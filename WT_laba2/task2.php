<?php
$rows = $argv[1];
echo "<table>\n";
for ($i = 1; $i <= $rows; $i++) {
    echo "<tr><td>Строка {$i}</td></tr>\n";
}
echo "</table>\n";