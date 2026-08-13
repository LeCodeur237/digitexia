<?php
$translations = [
    'en' => [
        'Comment submitted for review.' => 'Comment submitted for review.',
        'Your name' => 'Your name',
    ],
    'fr' => [
        'Comment submitted for review.' => 'Commentaire envoyé pour validation.',
        'Your name' => 'Votre nom',
    ],
    'es' => [
        'Comment submitted for review.' => 'Comentario enviado para revision.',
        'Your name' => 'Su nombre',
    ],
    'it' => [
        'Comment submitted for review.' => 'Commento inviato per revisione.',
        'Your name' => 'Il tuo nome',
    ],
    'zh' => [
        'Comment submitted for review.' => '????????',
        'Your name' => '????',
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
