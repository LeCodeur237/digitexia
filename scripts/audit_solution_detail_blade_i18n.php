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
}

foreach (['en', 'fr', 'es', 'it', 'zh'] as $locale) {
    $json = json_decode(file_get_contents($root . "/resources/lang/$locale.json"), true);
    $missing = [];

    foreach (array_keys($keys) as $key) {
        if (!array_key_exists($key, $json)) {
            $missing[] = $key;
        }
    }

    echo $locale . ': ' . count($missing) . " missing\n";
    foreach ($missing as $key) {
        echo " - $key\n";
    }
}
