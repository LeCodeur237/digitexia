<?php

$root = dirname(__DIR__);

$entries = [
    'fr' => [
        'Start a Conversation' => 'Demarrer une conversation',
        'The challenge & the solution' => 'Le defi et la solution',
        'Platform screenshots coming soon' => 'Captures de plateforme bientot disponibles',
        "Real platform screenshots will be added here as they become available, we don't publish placeholder or stock imagery in their place." => 'De vraies captures de plateforme seront ajoutees ici des qu elles seront disponibles ; nous ne publions pas d images generiques a leur place.',
    ],
    'es' => [
        'Start a Conversation' => 'Iniciar una conversacion',
        'The challenge & the solution' => 'El desafio y la solucion',
        'Platform screenshots coming soon' => 'Capturas de plataforma proximamente',
        "Real platform screenshots will be added here as they become available, we don't publish placeholder or stock imagery in their place." => 'Las capturas reales de la plataforma se agregaran aqui cuando esten disponibles; no publicamos imagenes genericas en su lugar.',
    ],
    'it' => [
        'Start a Conversation' => 'Avviare una conversazione',
        'The challenge & the solution' => 'La sfida e la soluzione',
        'Platform screenshots coming soon' => 'Screenshot della piattaforma in arrivo',
        "Real platform screenshots will be added here as they become available, we don't publish placeholder or stock imagery in their place." => 'Gli screenshot reali della piattaforma saranno aggiunti qui quando disponibili; non pubblichiamo immagini generiche al loro posto.',
    ],
    'zh' => [
        'Start a Conversation' => '开始对话',
        'The challenge & the solution' => '挑战与解决方案',
        'Platform screenshots coming soon' => '平台截图即将推出',
        "Real platform screenshots will be added here as they become available, we don't publish placeholder or stock imagery in their place." => '真实平台截图将在可用后添加到这里；我们不会用占位图或素材图替代。',
    ],
];

foreach ($entries as $locale => $localeEntries) {
    $path = $root . "/resources/lang/{$locale}.json";
    $json = json_decode(file_get_contents($path), true) ?: [];
    foreach ($localeEntries as $key => $value) {
        $json[$key] = $value;
    }
    ksort($json, SORT_NATURAL | SORT_FLAG_CASE);
    file_put_contents($path, json_encode($json, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) . PHP_EOL);
}

echo "common CTA translations fixed\n";
