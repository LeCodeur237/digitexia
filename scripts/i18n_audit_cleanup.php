<?php

$entries = [
    'en' => [
        'DIGITEXIA' => 'DIGITEXIA',
        'INFRASTRUCTURE CONSOLE' => 'INFRASTRUCTURE CONSOLE',
    ],
    'fr' => [
        'DIGITEXIA' => 'DIGITEXIA',
        'INFRASTRUCTURE CONSOLE' => 'CONSOLE D’INFRASTRUCTURE',
    ],
    'es' => [
        'DIGITEXIA' => 'DIGITEXIA',
        'INFRASTRUCTURE CONSOLE' => 'CONSOLA DE INFRAESTRUCTURA',
    ],
    'it' => [
        'DIGITEXIA' => 'DIGITEXIA',
        'INFRASTRUCTURE CONSOLE' => 'CONSOLE INFRASTRUTTURALE',
    ],
    'zh' => [
        'DIGITEXIA' => 'DIGITEXIA',
        'INFRASTRUCTURE CONSOLE' => '基础设施控制台',
    ],
];

foreach ($entries as $lang => $values) {
    $path = __DIR__ . "/../resources/lang/{$lang}.json";
    $json = json_decode(file_get_contents($path), true) ?: [];

    foreach ($values as $key => $value) {
        $json[$key] = $json[$key] ?? $value;
    }

    ksort($json, SORT_NATURAL | SORT_FLAG_CASE);
    file_put_contents(
        $path,
        json_encode($json, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) . PHP_EOL
    );
}

echo "audit cleanup translations merged\n";
