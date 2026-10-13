<?php

$root = dirname(__DIR__);

function u(string $value): string
{
    return json_decode('"' . $value . '"', false, 512, JSON_THROW_ON_ERROR);
}

$key = 'A tailored Perfomia deployment for a regulated financial institution.';
$values = [
    'en' => $key,
    'fr' => u('Un d\u00e9ploiement Perfomia adapt\u00e9 \u00e0 une institution financi\u00e8re r\u00e9glement\u00e9e.'),
    'es' => u('Un despliegue Perfomia adaptado para una instituci\u00f3n financiera regulada.'),
    'it' => 'Un deployment Perfomia su misura per un istituto finanziario regolamentato.',
    'zh' => u('\u4e3a\u53d7\u76d1\u7ba1\u91d1\u878d\u673a\u6784\u5b9a\u5236\u90e8\u7f72\u7684 Perfomia\u3002'),
];

foreach ($values as $locale => $value) {
    $path = $root . "/resources/lang/{$locale}.json";
    $json = json_decode(file_get_contents($path), true, 512, JSON_THROW_ON_ERROR);
    $json[$key] = $value;
    ksort($json, SORT_STRING);
    file_put_contents($path, json_encode($json, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) . PHP_EOL);
}

echo "Perfomia translation values fixed.\n";
