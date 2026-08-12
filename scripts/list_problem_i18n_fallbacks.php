<?php

$root = dirname(__DIR__);
$blade = file_get_contents($root . '/resources/views/pages/problem.blade.php');
$keys = [];

foreach (['es', 'it', 'zh'] as $locale) {
    preg_match_all("/__\(\s*'((?:\\\\'|[^'])*)'\s*\)/", $blade, $single);
    preg_match_all('/__\(\s*"((?:\\\\"|[^"])*)"\s*\)/', $blade, $double);
    foreach (array_merge($single[1], $double[1]) as $key) {
        $key = stripcslashes($key);
        if ($key !== '') {
            $keys[$key] = true;
        }
    }

    $json = json_decode(file_get_contents($root . "/resources/lang/{$locale}.json"), true) ?: [];
    echo strtoupper($locale) . PHP_EOL;
    foreach (array_keys($keys) as $key) {
        if (($json[$key] ?? null) === $key) {
            echo '- ' . $key . PHP_EOL;
        }
    }
    echo PHP_EOL;
}
