<?php

$root = dirname(__DIR__);

$entries = [
    'en' => [
        'Go to administration' => 'Go to administration',
        'Administration' => 'Administration',
    ],
    'fr' => [
        'Go to administration' => 'Aller a l administration',
        'Administration' => 'Administration',
    ],
    'es' => [
        'Go to administration' => 'Ir a la administracion',
        'Administration' => 'Administracion',
    ],
    'it' => [
        'Go to administration' => 'Vai all amministrazione',
        'Administration' => 'Amministrazione',
    ],
    'zh' => [
        'Go to administration' => '前往管理后台',
        'Administration' => '管理后台',
    ],
];

foreach ($entries as $locale => $items) {
    $path = $root . "/resources/lang/{$locale}.json";
    $json = file_get_contents($path);
    $json = preg_replace('/^\xEF\xBB\xBF/', '', $json);
    $data = json_decode($json, true);

    if (! is_array($data)) {
        fwrite(STDERR, "Invalid JSON: {$path}\n");
        exit(1);
    }

    foreach ($items as $key => $value) {
        $data[$key] = $value;
    }

    ksort($data, SORT_NATURAL | SORT_FLAG_CASE);
    file_put_contents(
        $path,
        json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) . PHP_EOL
    );
}

echo "Admin shortcut translations updated.\n";
