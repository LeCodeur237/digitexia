<?php

$fr = [
    'AI & Intelligent Systems' => 'IA et systèmes intelligents',
    'Africa & Technology' => 'Afrique et technologie',
    'Articles are published in English so the editorial voice stays consistent across markets.' => 'Les articles sont publiés en anglais afin de garder une voix éditoriale cohérente sur tous les marchés.',
    'Blog topics' => 'Thèmes du blog',
    'Coming soon' => 'Bientôt disponible',
    'DigiTexia | Blog and Technology Insights' => 'DigiTexia | Blog et analyses technologiques',
    'Digital Infrastructure' => 'Infrastructure numérique',
    'Have a digital challenge to solve? Let us talk.' => 'Un défi numérique à résoudre ? Parlons-en.',
    'If something you read here connects to a challenge your organization is facing, we welcome the conversation.' => 'Si un sujet lu ici correspond à un défi que rencontre votre organisation, nous serons ravis d’en discuter.',
    'Industry Insights' => 'Analyses sectorielles',
    'Latest insights' => 'Dernières analyses',
    'Life at Digi' => 'Vie chez Digi',
    'Our insight library is being prepared.' => 'Notre bibliothèque d’analyses est en préparation.',
    'Read more' => 'Lire la suite',
    'Recent articles' => 'Articles récents',
    'Technology, innovation and digital transformation insights for Africa.' => 'Analyses sur la technologie, l’innovation et la transformation numérique en Afrique.',
    'This space will share practical guidance for leaders working on AI, infrastructure monitoring, automation and digital transformation across Africa.' => 'Cet espace partagera des conseils pratiques pour les dirigeants travaillant sur l’IA, la surveillance d’infrastructures, l’automatisation et la transformation numérique en Afrique.',
    'We share what we learn building digital infrastructure across Africa: practical perspectives on AI, enterprise technology and the real-world challenges organizations face.' => 'Nous partageons ce que nous apprenons en construisant des infrastructures numériques en Afrique : perspectives pratiques sur l’IA, les technologies d’entreprise et les défis réels auxquels les organisations font face.',
];

$short = [
    'es' => [
        'AI & Intelligent Systems' => 'IA y sistemas inteligentes',
        'Africa & Technology' => 'África y tecnología',
        'Blog topics' => 'Temas del blog',
        'Coming soon' => 'Próximamente',
        'Digital Infrastructure' => 'Infraestructura digital',
        'Industry Insights' => 'Análisis sectorial',
        'Latest insights' => 'Últimos análisis',
        'Life at Digi' => 'Vida en Digi',
        'Read more' => 'Leer más',
        'Recent articles' => 'Artículos recientes',
    ],
    'it' => [
        'AI & Intelligent Systems' => 'IA e sistemi intelligenti',
        'Africa & Technology' => 'Africa e tecnologia',
        'Blog topics' => 'Temi del blog',
        'Coming soon' => 'Prossimamente',
        'Digital Infrastructure' => 'Infrastruttura digitale',
        'Industry Insights' => 'Approfondimenti di settore',
        'Latest insights' => 'Ultimi approfondimenti',
        'Life at Digi' => 'Vita in Digi',
        'Read more' => 'Leggi di più',
        'Recent articles' => 'Articoli recenti',
    ],
    'zh' => [
        'AI & Intelligent Systems' => '人工智能与智能系统',
        'Africa & Technology' => '非洲与技术',
        'Blog topics' => '博客主题',
        'Coming soon' => '即将推出',
        'Digital Infrastructure' => '数字基础设施',
        'Industry Insights' => '行业洞察',
        'Latest insights' => '最新洞察',
        'Life at Digi' => 'Digi生活',
        'Read more' => '阅读更多',
        'Recent articles' => '最新文章',
    ],
];

foreach (['en', 'fr', 'es', 'it', 'zh'] as $lang) {
    $path = __DIR__ . "/../resources/lang/{$lang}.json";
    $json = json_decode(file_get_contents($path), true) ?: [];

    foreach ($fr as $key => $translation) {
        if (array_key_exists($key, $json)) {
            continue;
        }

        if ($lang === 'fr') {
            $json[$key] = $translation;
        } elseif (isset($short[$lang][$key])) {
            $json[$key] = $short[$lang][$key];
        } else {
            $json[$key] = $key;
        }
    }

    ksort($json, SORT_NATURAL | SORT_FLAG_CASE);
    file_put_contents(
        $path,
        json_encode($json, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) . PHP_EOL
    );
}

echo "blog translations merged\n";
