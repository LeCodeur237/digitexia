<?php

$root = dirname(__DIR__);
$path = $root . '/resources/views/pages/solution-detail.blade.php';
$text = file_get_contents($path);
$issues = [];

preg_match_all('/>([^<{]*[A-Za-z][^<{]*)</', $text, $matches, PREG_OFFSET_CAPTURE);

foreach ($matches[1] as [$literal, $offset]) {
    $literal = trim(html_entity_decode($literal, ENT_QUOTES | ENT_HTML5, 'UTF-8'));

    if ($literal === '' || str_contains($literal, '{{') || str_contains($literal, '@')) {
        continue;
    }

    $line = substr_count(substr($text, 0, $offset), "\n") + 1;
    $issues[] = [$line, $literal];
}

echo count($issues) . " literal text candidates\n";
foreach ($issues as [$line, $literal]) {
    echo "$line: $literal\n";
}
