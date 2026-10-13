<?php

$root = dirname(__DIR__);
$locales = ['en', 'fr', 'es', 'it', 'zh'];

foreach ($locales as $locale) {
    $path = $root . "/resources/lang/{$locale}.json";
    $json = json_decode(file_get_contents($path), true, 512, JSON_THROW_ON_ERROR);

    foreach ($json as $key => $value) {
        if (!is_string($value) || !str_contains($key, 'Performia')) {
            continue;
        }

        $aliasKey = str_replace('Performia', 'Perfomia', $key);
        if (!array_key_exists($aliasKey, $json)) {
            $json[$aliasKey] = str_replace('Performia', 'Perfomia', $value);
        }
    }

    ksort($json, SORT_STRING);
    file_put_contents($path, json_encode($json, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) . PHP_EOL);
}

echo "Perfomia translation aliases synced.\n";
