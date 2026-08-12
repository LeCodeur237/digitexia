<?php

$root = dirname(__DIR__);
$controller = file_get_contents($root . '/app/Http/Controllers/SolutionController.php');
$keys = [];

preg_match_all("/'([^'\\\\]*(?:\\\\.[^'\\\\]*)*)'/", $controller, $matches);

foreach ($matches[1] as $value) {
    if (
        $value === ''
        || str_contains($value, '#')
        || str_contains($value, 'rgba(')
        || str_starts_with($value, 'ti-')
        || preg_match('/^[a-z0-9-]+$/', $value)
    ) {
        continue;
    }

    $keys[stripslashes($value)] = true;
}

$fr = [
    'Concept' => 'Concept',
    'Prototype' => 'Prototype',
    'Deployed' => 'Déployé',
    'Operational' => 'Opérationnel',
    'Water Utilities & Public Infrastructure' => 'Services d’eau et infrastructures publiques',
    'Waste Operators & Circular Economy Programs' => 'Opérateurs déchets et programmes d’économie circulaire',
    'Enterprise & Public Institutions' => 'Entreprises et institutions publiques',
    'Digital medical identity and traceability infrastructure.' => 'Infrastructure d’identité médicale numérique et de traçabilité.',
    'Reliable patient identity. Traceable care. Compliance-ready by design.' => 'Identité patient fiable. Soins traçables. Conformité intégrée dès la conception.',
    'Smart waste tracking and recycling incentive infrastructure.' => 'Infrastructure intelligente de suivi des déchets et d’incitation au recyclage.',
    'Verify collection. Reward recycling. Turn waste flows into usable data.' => 'Vérifiez la collecte. Récompensez le recyclage. Transformez les flux de déchets en données exploitables.',
    'AI-powered water monitoring and operational intelligence.' => 'Surveillance intelligente de l’eau et intelligence opérationnelle alimentées par l’IA.',
    'Monitor infrastructure. Understand water systems. Make better decisions.' => 'Surveillez l’infrastructure. Comprenez les systèmes d’eau. Prenez de meilleures décisions.',
    'Performance and execution management for teams and institutions.' => 'Gestion de la performance et de l’exécution pour les équipes et institutions.',
    'Turn execution into something you can see, measure and manage.' => 'Transformez l’exécution en quelque chose de visible, mesurable et pilotable.',
    'Healthcare management built for clinics and care teams.' => 'Gestion médicale conçue pour les cliniques et les équipes de soins.',
    'Simpler scheduling. Coordinated care. Records you can trust.' => 'Planification simplifiée. Soins coordonnés. Dossiers fiables.',
    'All Solutions' => 'Toutes les solutions',
    'Overview' => 'Vue d’ensemble',
    'The challenge & the solution' => 'Le défi et la solution',
    'The Challenge' => 'Le défi',
    'The Solution' => 'La solution',
    'Key capabilities' => 'Capacités clés',
    'Platform & deployment' => 'Plateforme et déploiement',
    'How it works' => 'Fonctionnement',
    'From data to decision' => 'De la donnée à la décision',
    'Architecture & technology' => 'Architecture et technologie',
    'Built on capable, proven foundations' => 'Bâti sur des fondations solides et éprouvées',
    'Impact & status' => 'Impact et statut',
    "Let's talk" => 'Parlons-en',
    'Start a Conversation' => 'Démarrer une conversation',
    'Call (+237) 650 945 280' => 'Appeler le (+237) 650 945 280',
    'Designed for' => 'Conçu pour',
    'Problem addressed' => 'Problème traité',
    'Value delivered' => 'Valeur apportée',
    'Platform screenshots coming soon' => 'Captures de plateforme bientôt disponibles',
    "Real platform screenshots will be added here as they become available, we don't publish placeholder or stock imagery in their place." => 'De vraies captures de plateforme seront ajoutées ici dès qu’elles seront disponibles; nous ne publions pas d’images génériques à leur place.',
    'Platform Screenshots' => 'Captures de la plateforme',
    'Deployment' => 'Déploiement',
    'Architecture' => 'Architecture',
    'Verified deployment' => 'Déploiement vérifié',
    'Client' => 'Client',
    'Sector' => 'Secteur',
];

foreach (array_keys($keys) as $key) {
    $fr[$key] ??= $key;
}

$translations = [
    'en' => array_combine(array_keys($keys), array_keys($keys)),
    'fr' => $fr,
    'es' => array_combine(array_keys($keys), array_keys($keys)),
    'it' => array_combine(array_keys($keys), array_keys($keys)),
    'zh' => array_combine(array_keys($keys), array_keys($keys)),
];

foreach ($translations as $locale => $entries) {
    $path = $root . "/resources/lang/$locale.json";
    $json = json_decode(file_get_contents($path), true);

    foreach ($entries as $key => $value) {
        if (!array_key_exists($key, $json)) {
            $json[$key] = $value;
        }
    }

    file_put_contents(
        $path,
        json_encode($json, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) . PHP_EOL
    );
}

echo "Enriched solution detail i18n keys merged: " . count($keys) . "\n";
