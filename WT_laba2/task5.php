<?php
$words = array_slice($argv, 1);
$lengths = array_map('mb_strlen', $words);
$max_length = max($lengths);
$longest_words = array_keys($lengths, $max_length);
echo "Самое длинное слово: " . implode(', ', $longest_words) . "\n";