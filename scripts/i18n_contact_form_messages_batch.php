<?php

$root = dirname(__DIR__);

$translations = [
    'en' => [
        'Please check the form and try again.' => 'Please check the form and try again.',
        'Your message has been sent. We will get back to you shortly.' => 'Your message has been sent. We will get back to you shortly.',
    ],
    'fr' => [
        'Please check the form and try again.' => 'Veuillez verifier le formulaire et reessayer.',
        'Your message has been sent. We will get back to you shortly.' => 'Votre message a ete envoye. Nous vous repondrons rapidement.',
    ],
    'es' => [
        'Please check the form and try again.' => 'Revise el formulario e intentelo de nuevo.',
        'Your message has been sent. We will get back to you shortly.' => 'Su mensaje ha sido enviado. Le responderemos pronto.',
    ],
    'it' => [
        'Please check the form and try again.' => 'Controllate il modulo e riprovate.',
        'Your message has been sent. We will get back to you shortly.' => 'Il vostro messaggio e stato inviato. Vi risponderemo a breve.',
    ],
    'zh' => [
        'Please check the form and try again.' => '请检查表单后重试。',
        'Your message has been sent. We will get back to you shortly.' => '您的消息已发送。我们会尽快回复您。',
    ],
];

foreach ($translations as $locale => $entries) {
    $path = $root . "/resources/lang/{$locale}.json";
    $json = json_decode(file_get_contents($path), true) ?: [];
    foreach ($entries as $key => $value) {
        $json[$key] = $value;
    }
    ksort($json, SORT_NATURAL | SORT_FLAG_CASE);
    file_put_contents($path, json_encode($json, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) . PHP_EOL);
}

echo "contact form messages translated\n";
