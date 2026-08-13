<?php
$translations = [
    'en' => [
        'Share this article' => 'Share this article',
        'Share' => 'Share',
        'Share on Facebook' => 'Share on Facebook',
        'Share on X' => 'Share on X',
        'Share on LinkedIn' => 'Share on LinkedIn',
        'Share on WhatsApp' => 'Share on WhatsApp',
    ],
    'fr' => [
        'Share this article' => 'Partager cet article',
        'Share' => 'Partager',
        'Share on Facebook' => 'Partager sur Facebook',
        'Share on X' => 'Partager sur X',
        'Share on LinkedIn' => 'Partager sur LinkedIn',
        'Share on WhatsApp' => 'Partager sur WhatsApp',
    ],
    'es' => [
        'Share this article' => 'Compartir este articulo',
        'Share' => 'Compartir',
        'Share on Facebook' => 'Compartir en Facebook',
        'Share on X' => 'Compartir en X',
        'Share on LinkedIn' => 'Compartir en LinkedIn',
        'Share on WhatsApp' => 'Compartir en WhatsApp',
    ],
    'it' => [
        'Share this article' => 'Condividi questo articolo',
        'Share' => 'Condividi',
        'Share on Facebook' => 'Condividi su Facebook',
        'Share on X' => 'Condividi su X',
        'Share on LinkedIn' => 'Condividi su LinkedIn',
        'Share on WhatsApp' => 'Condividi su WhatsApp',
    ],
    'zh' => [
        'Share this article' => '??????',
        'Share' => '??',
        'Share on Facebook' => '??? Facebook',
        'Share on X' => '??? X',
        'Share on LinkedIn' => '??? LinkedIn',
        'Share on WhatsApp' => '??? WhatsApp',
    ],
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
