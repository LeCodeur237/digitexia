<?php

$root = dirname(__DIR__);

$en = [
    'Give authorized caregivers fast access to critical patient information through secure QR-based identification.' => 'Give authorized caregivers fast access to critical patient information through secure QR-based identification.',
    'Discover MedTrace' => 'Discover MedTrace',
    'Service Operations Management' => 'Service Operations Management',
    'Coordinate verified providers, customer requests, bookings and field execution from one structured platform.' => 'Coordinate verified providers, customer requests, bookings and field execution from one structured platform.',
    'Discover Flexicare' => 'Discover Flexicare',
    'Performance Execution Systems' => 'Performance Execution Systems',
    'Structure tasks, attendance, KPI visibility and staff evaluation for distributed teams.' => 'Structure tasks, attendance, KPI visibility and staff evaluation for distributed teams.',
    'Explore Performia' => 'Explore Performia',
    'PRODUCT / HEALTH-01' => 'PRODUCT / HEALTH-01',
    'QR identification' => 'QR identification',
    'Help medical teams identify patients faster and improve continuity of care.' => 'Help medical teams identify patients faster and improve continuity of care.',
    'PRODUCT / WATER-02' => 'PRODUCT / WATER-02',
    'PRODUCT / WASTE-03' => 'PRODUCT / WASTE-03',
    'PRODUCT / SERVICE-04' => 'PRODUCT / SERVICE-04',
    'Improve service coordination, provider accountability and customer visibility.' => 'Improve service coordination, provider accountability and customer visibility.',
    'PRODUCT / PERFORMANCE-05' => 'PRODUCT / PERFORMANCE-05',
    'KPI dashboards' => 'KPI dashboards',
    'Give managers clearer execution visibility and faster performance decisions.' => 'Give managers clearer execution visibility and faster performance decisions.',
    'healthcare' => 'healthcare',
    'services' => 'services',
    'performance' => 'performance',
];

$fr = [
    'Give authorized caregivers fast access to critical patient information through secure QR-based identification.' => 'Donnez aux soignants autorisés un accès rapide aux informations critiques du patient grâce à une identification QR sécurisée.',
    'Discover MedTrace' => 'Découvrir MedTrace',
    'Service Operations Management' => 'Gestion des opérations de service',
    'Coordinate verified providers, customer requests, bookings and field execution from one structured platform.' => 'Coordonnez prestataires vérifiés, demandes clients, réservations et exécution terrain depuis une plateforme structurée.',
    'Discover Flexicare' => 'Découvrir Flexicare',
    'Performance Execution Systems' => 'Systèmes d’exécution de la performance',
    'Structure tasks, attendance, KPI visibility and staff evaluation for distributed teams.' => 'Structurez les tâches, la présence, la visibilité KPI et l’évaluation du personnel pour les équipes distribuées.',
    'Explore Performia' => 'Explorer Performia',
    'PRODUCT / HEALTH-01' => 'PRODUIT / SANTÉ-01',
    'QR identification' => 'Identification QR',
    'Help medical teams identify patients faster and improve continuity of care.' => 'Aidez les équipes médicales à identifier les patients plus vite et à améliorer la continuité des soins.',
    'PRODUCT / WATER-02' => 'PRODUIT / EAU-02',
    'PRODUCT / WASTE-03' => 'PRODUIT / DÉCHETS-03',
    'PRODUCT / SERVICE-04' => 'PRODUIT / SERVICE-04',
    'Improve service coordination, provider accountability and customer visibility.' => 'Améliorez la coordination des services, la responsabilité des prestataires et la visibilité client.',
    'PRODUCT / PERFORMANCE-05' => 'PRODUIT / PERFORMANCE-05',
    'KPI dashboards' => 'Tableaux de bord KPI',
    'Give managers clearer execution visibility and faster performance decisions.' => 'Donnez aux managers une visibilité d’exécution plus claire et des décisions de performance plus rapides.',
    'healthcare' => 'santé',
    'services' => 'services',
    'performance' => 'performance',
];

$es = array_replace($en, [
    'Discover MedTrace' => 'Descubrir MedTrace',
    'Discover Flexicare' => 'Descubrir Flexicare',
    'Explore Performia' => 'Explorar Performia',
    'Service Operations Management' => 'Gestión de operaciones de servicio',
    'Performance Execution Systems' => 'Sistemas de ejecución del rendimiento',
    'healthcare' => 'salud',
    'services' => 'servicios',
    'performance' => 'rendimiento',
]);

$it = array_replace($en, [
    'Discover MedTrace' => 'Scopri MedTrace',
    'Discover Flexicare' => 'Scopri Flexicare',
    'Explore Performia' => 'Esplora Performia',
    'Service Operations Management' => 'Gestione delle operazioni di servizio',
    'Performance Execution Systems' => 'Sistemi di esecuzione delle prestazioni',
    'healthcare' => 'sanità',
    'services' => 'servizi',
    'performance' => 'prestazioni',
]);

$zh = array_replace($en, [
    'Discover MedTrace' => '了解 MedTrace',
    'Discover Flexicare' => '了解 Flexicare',
    'Explore Performia' => '探索 Performia',
    'Service Operations Management' => '服务运营管理',
    'Performance Execution Systems' => '绩效执行系统',
    'healthcare' => '医疗',
    'services' => '服务',
    'performance' => '绩效',
]);

foreach (['en' => $en, 'fr' => $fr, 'es' => $es, 'it' => $it, 'zh' => $zh] as $locale => $entries) {
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

echo "Home real solution translations merged.\n";
