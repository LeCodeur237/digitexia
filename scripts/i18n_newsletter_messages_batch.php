<?php
$translations = [
    'en' => [
        'You have been subscribed to the newsletter.' => 'You have been subscribed to the newsletter.',
        'Please enter a valid email address.' => 'Please enter a valid email address.',
    ],
    'fr' => [
        'You have been subscribed to the newsletter.' => 'Votre abonnement a la newsletter a bien ete pris en compte.',
        'Please enter a valid email address.' => 'Veuillez entrer une adresse email valide.',
    ],
    'es' => [
        'You have been subscribed to the newsletter.' => 'Te has suscrito correctamente al boletin.',
        'Please enter a valid email address.' => 'Introduce una direccion de correo valida.',
    ],
    'it' => [
        'You have been subscribed to the newsletter.' => 'La tua iscrizione alla newsletter e stata registrata.',
        'Please enter a valid email address.' => 'Inserisci un indirizzo email valido.',
    ],
    'zh' => [
        'You have been subscribed to the newsletter.' => '???????????',
        'Please enter a valid email address.' => '?????????????',
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
