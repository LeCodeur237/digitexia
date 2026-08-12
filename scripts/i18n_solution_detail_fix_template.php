<?php

$root = dirname(__DIR__);

$entries = [
    'fr' => [
        'All Solutions' => 'Toutes les solutions',
        'The Challenge' => 'Le defi',
        'The Solution' => 'La solution',
        'Key capabilities' => 'Capacites cles',
        'Platform & deployment' => 'Plateforme et deploiement',
        'Platform Screenshots' => 'Captures de la plateforme',
        'Deployment' => 'Deploiement',
        'Architecture' => 'Architecture',
        'How it works' => 'Fonctionnement',
        'From data to decision' => 'De la donnee a la decision',
        'Architecture & technology' => 'Architecture et technologie',
        'Built on capable, proven foundations' => 'Bati sur des fondations solides et eprouvees',
        'Impact & status' => 'Impact et statut',
        "Let's talk" => 'Parlons-en',
        'Platform screenshots and deployment photography will populate this gallery as the product moves through field pilots.' => 'Des captures de plateforme et des photos de deploiement alimenteront cette galerie au fur et a mesure des pilotes terrain.',
    ],
    'es' => [
        'All Solutions' => 'Todas las soluciones',
        'The Challenge' => 'El desafio',
        'The Solution' => 'La solucion',
        'Key capabilities' => 'Capacidades clave',
        'Platform & deployment' => 'Plataforma e implementacion',
        'Platform Screenshots' => 'Capturas de la plataforma',
        'Deployment' => 'Implementacion',
        'Architecture' => 'Arquitectura',
        'How it works' => 'Como funciona',
        'From data to decision' => 'De los datos a la decision',
        'Architecture & technology' => 'Arquitectura y tecnologia',
        'Built on capable, proven foundations' => 'Construido sobre bases capaces y probadas',
        'Impact & status' => 'Impacto y estado',
        "Let's talk" => 'Hablemos',
        'Platform screenshots and deployment photography will populate this gallery as the product moves through field pilots.' => 'Las capturas de la plataforma y fotografias de implementacion se agregaran a esta galeria a medida que el producto avance en pilotos de campo.',
    ],
    'it' => [
        'All Solutions' => 'Tutte le soluzioni',
        'The Challenge' => 'La sfida',
        'The Solution' => 'La soluzione',
        'Key capabilities' => 'Capacita chiave',
        'Platform & deployment' => 'Piattaforma e distribuzione',
        'Platform Screenshots' => 'Screenshot della piattaforma',
        'Deployment' => 'Distribuzione',
        'Architecture' => 'Architettura',
        'How it works' => 'Come funziona',
        'From data to decision' => 'Dai dati alla decisione',
        'Architecture & technology' => 'Architettura e tecnologia',
        'Built on capable, proven foundations' => 'Costruito su basi solide e comprovate',
        'Impact & status' => 'Impatto e stato',
        "Let's talk" => 'Parliamone',
        'Platform screenshots and deployment photography will populate this gallery as the product moves through field pilots.' => 'Screenshot della piattaforma e fotografie di distribuzione popoleranno questa galleria mentre il prodotto avanzera nei piloti sul campo.',
    ],
    'zh' => [
        'All Solutions' => '所有解决方案',
        'The Challenge' => '挑战',
        'The Solution' => '解决方案',
        'Key capabilities' => '核心能力',
        'Platform & deployment' => '平台与部署',
        'Platform Screenshots' => '平台截图',
        'Deployment' => '部署',
        'Architecture' => '架构',
        'How it works' => '工作方式',
        'From data to decision' => '从数据到决策',
        'Architecture & technology' => '架构与技术',
        'Built on capable, proven foundations' => '建立在可靠且经过验证的基础之上',
        'Impact & status' => '影响与状态',
        "Let's talk" => '联系我们',
        'Platform screenshots and deployment photography will populate this gallery as the product moves through field pilots.' => '随着产品进入现场试点，平台截图和部署照片将添加到此图库。',
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

echo "solution detail template labels fixed\n";
