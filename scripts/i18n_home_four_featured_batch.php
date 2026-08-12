<?php

$root = dirname(__DIR__);

$entries = [
    'en' => [
        'PRODUCT / SERVICE-03' => 'PRODUCT / SERVICE-03',
        'PRODUCT / PERFORMANCE-04' => 'PRODUCT / PERFORMANCE-04',
    ],
    'fr' => [
        'PRODUCT / SERVICE-03' => 'PRODUIT / SERVICE-03',
        'PRODUCT / PERFORMANCE-04' => 'PRODUIT / PERFORMANCE-04',
    ],
    'es' => [
        'PRODUCT / SERVICE-03' => 'PRODUCTO / SERVICIO-03',
        'PRODUCT / PERFORMANCE-04' => 'PRODUCTO / RENDIMIENTO-04',
    ],
    'it' => [
        'PRODUCT / SERVICE-03' => 'PRODOTTO / SERVIZIO-03',
        'PRODUCT / PERFORMANCE-04' => 'PRODOTTO / PRESTAZIONI-04',
    ],
    'zh' => [
        'PRODUCT / SERVICE-03' => '产品 / 服务-03',
        'PRODUCT / PERFORMANCE-04' => '产品 / 绩效-04',
    ],
];

foreach ($entries as $locale => $localeEntries) {
    $path = $root . "/resources/lang/$locale.json";
    $json = json_decode(file_get_contents($path), true);

    foreach ($localeEntries as $key => $value) {
        $json[$key] = $value;
    }

    file_put_contents(
        $path,
        json_encode($json, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) . PHP_EOL
    );
}

echo "Home four featured translations merged.\n";
