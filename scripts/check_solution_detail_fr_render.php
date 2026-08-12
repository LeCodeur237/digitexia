<?php

$root = dirname(__DIR__);
require $root . '/vendor/autoload.php';
$app = require_once $root . '/bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

app()->setLocale('fr');
$controller = app(App\Http\Controllers\SolutionController::class);

foreach (['aquawatch-ai', 'wastepay', 'performia', 'flexicare', 'medtrace'] as $slug) {
    $response = $controller->show($slug);
    $html = $response->render();

    $englishSignals = [
        'What ' . ($slug === 'aquawatch-ai' ? 'AquaWatch AI' : ucfirst($slug)) . ' is',
        'The Challenge',
        'The Solution',
        'Key capabilities',
        'How it works',
        'Where ' . ($slug === 'aquawatch-ai' ? 'AquaWatch AI' : ucfirst($slug)) . ' stands today',
    ];

    $hits = [];
    foreach ($englishSignals as $signal) {
        if (str_contains($html, $signal)) {
            $hits[] = $signal;
        }
    }

    echo $slug . ': ' . (empty($hits) ? 'ok' : 'english leftovers: ' . implode(', ', $hits)) . "\n";
}
