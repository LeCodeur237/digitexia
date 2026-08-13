<?php
$translations = [
    'en' => ['Back to Blog' => 'Back to Blog'],
    'fr' => ['Back to Blog' => 'Retour au blog'],
    'es' => ['Back to Blog' => 'Volver al blog'],
    'it' => ['Back to Blog' => 'Torna al blog'],
    'zh' => ['Back to Blog' => '????'],
];

foreach ($translations as $locale => $pairs) {
    $path = __DIR__ . "/../resources/lang/{$locale}.json";
    $json = json_decode(file_get_contents($path), true, 512, JSON_THROW_ON_ERROR);
    foreach ($pairs as $key => $value) {
        $json[$key] = $value;
    }
    ksort($json, SORT_NATURAL | SORT_FLAG_CASE);
    file_put_contents($path, json_encode($json, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) . PHP_EOL);
}
