<?php

$root = dirname(__DIR__);

$en = [
    'Solution navigation' => 'Solution navigation',
    'All Solutions' => 'All Solutions',
    'Overview' => 'Overview',
    'The challenge & the solution' => 'The challenge & the solution',
    'The Challenge' => 'The Challenge',
    'The Solution' => 'The Solution',
    'Key capabilities' => 'Key capabilities',
    'Platform & deployment' => 'Platform & deployment',
    'Platform Screenshots' => 'Platform Screenshots',
    'Deployment' => 'Deployment',
    'Architecture' => 'Architecture',
    'Platform screenshots coming soon' => 'Platform screenshots coming soon',
    'How it works' => 'How it works',
    'From data to decision' => 'From data to decision',
    'Architecture & technology' => 'Architecture & technology',
    'Built on capable, proven foundations' => 'Built on capable, proven foundations',
    'Impact & status' => 'Impact & status',
    "Real platform screenshots will be added here as they become available, we don't publish placeholder or stock imagery in their place." => "Real platform screenshots will be added here as they become available, we don't publish placeholder or stock imagery in their place.",
    "Let's talk" => "Let's talk",
];

$fr = [
    'Solution navigation' => 'Navigation des solutions',
    'All Solutions' => 'Toutes les solutions',
    'Overview' => 'Vue d’ensemble',
    'The challenge & the solution' => 'Le défi et la solution',
    'The Challenge' => 'Le défi',
    'The Solution' => 'La solution',
    'Key capabilities' => 'Capacités clés',
    'Platform & deployment' => 'Plateforme et déploiement',
    'Platform Screenshots' => 'Captures de la plateforme',
    'Deployment' => 'Déploiement',
    'Architecture' => 'Architecture',
    'Platform screenshots coming soon' => 'Captures de plateforme bientôt disponibles',
    'How it works' => 'Fonctionnement',
    'From data to decision' => 'De la donnée à la décision',
    'Architecture & technology' => 'Architecture et technologie',
    'Built on capable, proven foundations' => 'Bâti sur des fondations solides et éprouvées',
    'Impact & status' => 'Impact et statut',
    "Real platform screenshots will be added here as they become available, we don't publish placeholder or stock imagery in their place." => 'De vraies captures de plateforme seront ajoutées ici dès qu’elles seront disponibles; nous ne publions pas d’images génériques à leur place.',
    "Let's talk" => 'Parlons-en',
];

$translations = [
    'en' => $en,
    'fr' => $fr,
    'es' => array_replace($en, [
        'Solution navigation' => 'Navegación de soluciones',
        'All Solutions' => 'Todas las soluciones',
        'Overview' => 'Resumen',
        'The challenge & the solution' => 'El desafío y la solución',
        'The Challenge' => 'El desafío',
        'The Solution' => 'La solución',
        'Key capabilities' => 'Capacidades clave',
        'Platform & deployment' => 'Plataforma y despliegue',
        'How it works' => 'Cómo funciona',
        'From data to decision' => 'De los datos a la decisión',
        'Architecture & technology' => 'Arquitectura y tecnología',
        'Impact & status' => 'Impacto y estado',
        "Let's talk" => 'Hablemos',
    ]),
    'it' => array_replace($en, [
        'Solution navigation' => 'Navigazione soluzioni',
        'All Solutions' => 'Tutte le soluzioni',
        'Overview' => 'Panoramica',
        'The challenge & the solution' => 'La sfida e la soluzione',
        'The Challenge' => 'La sfida',
        'The Solution' => 'La soluzione',
        'Key capabilities' => 'Capacità chiave',
        'Platform & deployment' => 'Piattaforma e distribuzione',
        'How it works' => 'Come funziona',
        'From data to decision' => 'Dai dati alla decisione',
        'Architecture & technology' => 'Architettura e tecnologia',
        'Impact & status' => 'Impatto e stato',
        "Let's talk" => 'Parliamone',
    ]),
    'zh' => array_replace($en, [
        'Solution navigation' => '解决方案导航',
        'All Solutions' => '全部解决方案',
        'Overview' => '概览',
        'The challenge & the solution' => '挑战与解决方案',
        'The Challenge' => '挑战',
        'The Solution' => '解决方案',
        'Key capabilities' => '核心能力',
        'Platform & deployment' => '平台与部署',
        'How it works' => '工作方式',
        'From data to decision' => '从数据到决策',
        'Architecture & technology' => '架构与技术',
        'Impact & status' => '影响与状态',
        "Let's talk" => '联系我们',
    ]),
];

foreach ($translations as $locale => $entries) {
    $path = $root . "/resources/lang/$locale.json";
    $json = json_decode(file_get_contents($path), true);

    foreach ($entries as $key => $value) {
        $json[$key] = $value;
    }

    file_put_contents(
        $path,
        json_encode($json, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) . PHP_EOL
    );
}

echo "Solution detail template translations merged.\n";
