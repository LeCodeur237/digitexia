<?php

$root = dirname(__DIR__);
$files = [
    $root . '/resources/views/pages/solution-detail.blade.php',
    $root . '/app/Http/Controllers/SolutionController.php',
];

$keys = [];

foreach ($files as $file) {
    $text = file_get_contents($file);
    preg_match_all("/__\\(\\s*'((?:\\\\'|[^'])+)'\\s*\\)/", $text, $single);
    preg_match_all('/__\\(\\s*"((?:\\\\"|[^"])+)"\\s*\\)/', $text, $double);

    foreach (array_merge($single[1], $double[1]) as $key) {
        $keys[stripslashes($key)] = true;
    }

    preg_match_all("/'([^'\\\\]*(?:\\\\.[^'\\\\]*)*)'/", $text, $strings);
    foreach ($strings[1] as $value) {
        $value = stripslashes($value);
        if (
            $value === ''
            || str_contains($value, '#')
            || str_contains($value, 'rgba(')
            || str_starts_with($value, 'ti-')
            || preg_match('/^[a-z0-9-]+$/', $value)
        ) {
            continue;
        }
        $keys[$value] = true;
    }
}

$fr = json_decode(file_get_contents($root . '/resources/lang/fr.json'), true);
$fallbacks = [];

foreach (array_keys($keys) as $key) {
    if (isset($fr[$key]) && $fr[$key] === $key && preg_match('/[A-Za-z]{3,}/', $key)) {
        $fallbacks[] = $key;
    }
}

sort($fallbacks);
echo count($fallbacks) . " French fallback values\n";
foreach ($fallbacks as $key) {
    echo " - $key\n";
}
