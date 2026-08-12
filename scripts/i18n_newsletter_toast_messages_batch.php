<?php
$translations = [
    'en' => [
        'Newsletter subscription' => 'Newsletter subscription',
        'Newsletter error' => 'Newsletter error',
        'Dismiss notification' => 'Dismiss notification',
    ],
    'fr' => [
        'Newsletter subscription' => 'Abonnement newsletter',
        'Newsletter error' => 'Erreur newsletter',
        'Dismiss notification' => 'Fermer la notification',
    ],
    'es' => [
        'Newsletter subscription' => 'Suscripcion al boletin',
        'Newsletter error' => 'Error del boletin',
        'Dismiss notification' => 'Cerrar notificacion',
    ],
    'it' => [
        'Newsletter subscription' => 'Iscrizione alla newsletter',
        'Newsletter error' => 'Errore newsletter',
        'Dismiss notification' => 'Chiudi notifica',
    ],
    'zh' => [
        'Newsletter subscription' => '??????',
        'Newsletter error' => '??????',
        'Dismiss notification' => '????',
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
