<?php

$blogShow = __DIR__ . '/../resources/views/pages/blog-show.blade.php';
$blogText = file_get_contents($blogShow);
$blogText = preg_replace(
    '/<div class="show-meta">.*?<\\/div>/s',
    <<<'BLADE'
<div class="show-meta">
        <span>{{ $post->author->name ?? 'DigiTexia' }}</span>
        <span>&bull;</span>
        <span>{{ optional($post->published_at)->format('d M Y') ?? __('Draft') }}</span>
        <span>&bull;</span>
        <span>{{ $post->reading_time_minutes ?? 5 }} {{ __('min read') }}</span>
      </div>
BLADE,
    $blogText,
    1
);
file_put_contents($blogShow, $blogText);

$controller = __DIR__ . '/../app/Http/Controllers/SolutionController.php';
$controllerText = file_get_contents($controller);
$controllerText = str_replace(
    ['InventoryPro â€“ DigiTexia', 'Perfomia â€“ DigiTexia', 'DigiCourier â€“ DigiTexia', 'MedTrace â€“ DigiTexia', 'InventoryPro – DigiTexia', 'Perfomia – DigiTexia', 'DigiCourier – DigiTexia', 'MedTrace – DigiTexia'],
    ['InventoryPro - DigiTexia', 'Perfomia - DigiTexia', 'DigiCourier - DigiTexia', 'MedTrace - DigiTexia', 'InventoryPro - DigiTexia', 'Perfomia - DigiTexia', 'DigiCourier - DigiTexia', 'MedTrace - DigiTexia'],
    $controllerText
);
file_put_contents($controller, $controllerText);

$fr = [
    'InventoryPro - DigiTexia' => 'InventoryPro - DigiTexia',
    'Perfomia - DigiTexia' => 'Perfomia - DigiTexia',
    'DigiCourier - DigiTexia' => 'DigiCourier - DigiTexia',
    'MedTrace - DigiTexia' => 'MedTrace - DigiTexia',
    'Stock Management' => 'Gestion des stocks',
    'HR & Performance' => 'RH et performance',
    'Internal Comms' => 'Communication interne',
    'Healthcare Innovation' => 'Innovation santé',
    'Built for operational clarity.' => 'Conçu pour la clarté opérationnelle.',
    'Request an Assessment' => 'Demander une évaluation',
    'Back to Solutions' => 'Retour aux solutions',
    'What it solves' => 'Ce que cela résout',
    'The outcome' => 'Le résultat',
    'Who it is for' => 'À qui cela s’adresse',
    'Why teams adopt it' => 'Pourquoi les équipes l’adoptent',
    'How it helps' => 'Comment cela aide',
    'It replaces fragmented files, manual approvals and slow follow-up with a structured workflow that improves control and day-to-day execution.' => 'Cela remplace les fichiers fragmentés, les validations manuelles et les suivis lents par un workflow structuré qui améliore le contrôle et l’exécution quotidienne.',
    'Less rework, less uncertainty and less waiting. More traceability, more visibility and a process your team can rely on every day.' => 'Moins de reprises, moins d’incertitude et moins d’attente. Plus de traçabilité, plus de visibilité et un processus fiable au quotidien.',
    'Key Features' => 'Fonctionnalités clés',
    'Built around the operational workflow your team needs to control.' => 'Construit autour du workflow opérationnel que votre équipe doit maîtriser.',
    'Designed to reduce friction, accelerate decisions and keep operational information in one trusted environment.' => 'Conçu pour réduire les frictions, accélérer les décisions et garder l’information opérationnelle dans un environnement fiable.',
    'How It Works' => 'Comment cela fonctionne',
    'Structured workflow, less manual effort.' => 'Workflow structuré, moins d’effort manuel.',
    'This step is designed to make execution predictable, visible and easier to manage across teams.' => 'Cette étape rend l’exécution plus prévisible, visible et plus facile à gérer entre équipes.',
    'Free Operational Assessment' => 'Évaluation opérationnelle gratuite',
    'Want this solution aligned with your organization?' => 'Vous voulez adapter cette solution à votre organisation ?',
    'We can assess your workflow and adapt the platform to your operating model, teams and priorities without starting from zero.' => 'Nous pouvons évaluer votre workflow et adapter la plateforme à votre modèle opérationnel, vos équipes et vos priorités sans repartir de zéro.',
    'View All Solutions' => 'Voir toutes les solutions',
    'Blog article' => 'Article de blog',
    'Comments' => 'Commentaires',
    'Write your comment...' => 'Écrivez votre commentaire...',
    'Submit comment' => 'Envoyer le commentaire',
    'Please login to leave a comment.' => 'Veuillez vous connecter pour laisser un commentaire.',
    'Comments are disabled for this article.' => 'Les commentaires sont désactivés pour cet article.',
    'Robust stock management to track resources, manage internal requests, and maintain tight inventory control across locations.' => 'Gestion robuste des stocks pour suivre les ressources, gérer les demandes internes et maintenir un contrôle précis de l’inventaire sur plusieurs sites.',
    'Manual stock sheets make shortages, duplication, and untracked movement difficult to spot until they become costly.' => 'Les fiches de stock manuelles rendent les ruptures, doublons et mouvements non suivis difficiles à détecter avant qu’ils ne coûtent cher.',
    'InventoryPro gives teams one shared source of truth for stock levels, movement history, and requests.' => 'InventoryPro donne aux équipes une source de vérité unique pour les niveaux de stock, l’historique des mouvements et les demandes.',
    'Warehouses, offices, schools, clinics, and distributed operations.' => 'Entrepôts, bureaux, écoles, cliniques et opérations distribuées.',
    'Locations tracked' => 'Sites suivis',
    'Low-stock alerts' => 'Alertes de stock faible',
    'Items managed' => 'Articles gérés',
    'Multi-location tracking from a single dashboard' => 'Suivi multi-sites depuis un tableau de bord unique',
    'Automatic low-stock alerts and replenishment signals' => 'Alertes automatiques de stock faible et signaux de réapprovisionnement',
    'Internal request management with approval flow' => 'Gestion des demandes internes avec flux de validation',
    'Consumption analytics for smarter purchasing' => 'Analyse de consommation pour des achats plus intelligents',
    'A location logs a stock movement or request.' => 'Un site enregistre un mouvement de stock ou une demande.',
    'Managers review live levels and approve replenishment.' => 'Les managers consultent les niveaux en temps réel et approuvent le réapprovisionnement.',
    'Alerts and reports keep the inventory cycle under control.' => 'Les alertes et rapports gardent le cycle d’inventaire sous contrôle.',
    'Comprehensive performance tracking for task delegation, activity monitoring, staff evaluation, and attendance management.' => 'Suivi complet de la performance pour la délégation des tâches, le suivi d’activité, l’évaluation du personnel et la gestion des présences.',
    'When attendance, task follow-up, and evaluations live in different files, managers lose visibility and teams lose momentum.' => 'Lorsque les présences, le suivi des tâches et les évaluations vivent dans différents fichiers, les managers perdent en visibilité et les équipes en rythme.',
    'Perfomia brings the whole performance cycle into one platform, from task assignment to appraisal.' => 'Perfomia rassemble tout le cycle de performance dans une seule plateforme, de l’attribution des tâches à l’évaluation.',
    'Operations leaders, HR teams, project managers, and supervisors.' => 'Responsables opérationnels, équipes RH, chefs de projet et superviseurs.',
    'Attendance visibility' => 'Visibilité des présences',
    'Tasks completed' => 'Tâches terminées',
    'Average score' => 'Score moyen',
    'Task delegation with deadlines, owners, and status tracking' => 'Délégation des tâches avec délais, responsables et suivi de statut',
    'Attendance management with digital check-in and reporting' => 'Gestion des présences avec pointage numérique et reporting',
    'Structured staff evaluations with KPI scoring' => 'Évaluations structurées du personnel avec scoring KPI',
    'Live monitoring dashboards for managers' => 'Tableaux de bord de suivi en direct pour les managers',
    'Managers assign work and track execution in real time.' => 'Les managers attribuent le travail et suivent l’exécution en temps réel.',
    'Attendance and output data feed into the dashboard.' => 'Les données de présence et de production alimentent le tableau de bord.',
    'Reviews and performance decisions are based on one clean record.' => 'Les revues et décisions de performance reposent sur un dossier propre et unique.',
    'Administrative tracking system to digitize internal mail flows and secure official communication history with full audit trails.' => 'Système de suivi administratif pour numériser les flux de courrier interne et sécuriser l’historique des communications officielles avec piste d’audit complète.',
    'Paper-based internal mail and informal message chains make it hard to trace who approved what, when, and where.' => 'Le courrier interne papier et les chaînes de messages informelles rendent difficile la traçabilité de qui a approuvé quoi, quand et où.',
    'DigiCourier creates a searchable, auditable communication trail with routing, delivery confirmation, and archiving.' => 'DigiCourier crée une trace de communication consultable et auditable avec routage, confirmation de livraison et archivage.',
    'Public institutions, enterprises, and teams that need formal communication traceability.' => 'Institutions publiques, entreprises et équipes qui ont besoin d’une traçabilité formelle des communications.',
    'Traced documents' => 'Documents tracés',
    'In transit' => 'En transit',
    'Delivered' => 'Livré',
    'Digital mail tracking with timestamps and read confirmation' => 'Suivi du courrier numérique avec horodatage et confirmation de lecture',
    'Secure archive for official correspondence' => 'Archive sécurisée pour la correspondance officielle',
    'Classification and routing to the correct department' => 'Classification et routage vers le bon service',
    'Full audit trail for compliance and disputes' => 'Piste d’audit complète pour la conformité et les litiges',
    'A document is received and classified.' => 'Un document est reçu et classifié.',
    'It is routed to the correct person or department.' => 'Il est routé vers la bonne personne ou le bon service.',
    'Every step is archived for later search and audit.' => 'Chaque étape est archivée pour recherche et audit ultérieurs.',
    'Secure digital medical record access for healthcare teams that need critical patient information at the point of care.' => 'Accès sécurisé au dossier médical numérique pour les équipes de santé qui ont besoin d’informations critiques au point de soin.',
    'In emergencies, waiting for paper files or old records can slow treatment and put lives at risk.' => 'En urgence, attendre des dossiers papier ou anciens peut ralentir les soins et mettre des vies en danger.',
    'MedTrace gives authorized caregivers instant access to critical patient information through a secure QR scan.' => 'MedTrace donne aux soignants autorisés un accès instantané aux informations critiques du patient via un scan QR sécurisé.',
    'Clinics, hospitals, emergency teams, and patients who need portable medical identity.' => 'Cliniques, hôpitaux, équipes d’urgence et patients ayant besoin d’une identité médicale portable.',
    'Emergency access' => 'Accès d’urgence',
    'Blood type visible' => 'Groupe sanguin visible',
    'Critical access' => 'Accès critique',
    'Secure QR-based access to critical patient records' => 'Accès sécurisé par QR aux dossiers critiques des patients',
    'Role-based visibility for authorized healthcare staff' => 'Visibilité par rôle pour le personnel de santé autorisé',
    'Emergency information including allergies and blood type' => 'Informations d’urgence incluant allergies et groupe sanguin',
    'Portable medical identity for faster care decisions' => 'Identité médicale portable pour des décisions de soin plus rapides',
    'A patient profile is created and linked to a secure QR identity.' => 'Un profil patient est créé et lié à une identité QR sécurisée.',
    'Authorized staff scan the QR code at the point of care.' => 'Le personnel autorisé scanne le QR code au point de soin.',
    'Critical information is displayed quickly for safer decisions.' => 'Les informations critiques s’affichent rapidement pour des décisions plus sûres.',
];

$short = [
    'es' => [
        'Blog article' => 'Artículo del blog',
        'Comments' => 'Comentarios',
        'Submit comment' => 'Enviar comentario',
        'Login' => 'Iniciar sesión',
        'Built for operational clarity.' => 'Diseñado para claridad operativa.',
        'Request an Assessment' => 'Solicitar evaluación',
        'Back to Solutions' => 'Volver a soluciones',
        'What it solves' => 'Qué resuelve',
        'The outcome' => 'El resultado',
        'Who it is for' => 'Para quién es',
        'Key Features' => 'Funciones clave',
        'How It Works' => 'Cómo funciona',
        'View All Solutions' => 'Ver todas las soluciones',
    ],
    'it' => [
        'Blog article' => 'Articolo del blog',
        'Comments' => 'Commenti',
        'Submit comment' => 'Invia commento',
        'Login' => 'Accedi',
        'Built for operational clarity.' => 'Progettato per la chiarezza operativa.',
        'Request an Assessment' => 'Richiedi una valutazione',
        'Back to Solutions' => 'Torna alle soluzioni',
        'What it solves' => 'Cosa risolve',
        'The outcome' => 'Il risultato',
        'Who it is for' => 'A chi si rivolge',
        'Key Features' => 'Funzionalità chiave',
        'How It Works' => 'Come funziona',
        'View All Solutions' => 'Vedi tutte le soluzioni',
    ],
    'zh' => [
        'Blog article' => '博客文章',
        'Comments' => '评论',
        'Submit comment' => '提交评论',
        'Login' => '登录',
        'Built for operational clarity.' => '为运营清晰度而构建。',
        'Request an Assessment' => '申请评估',
        'Back to Solutions' => '返回解决方案',
        'What it solves' => '解决的问题',
        'The outcome' => '结果',
        'Who it is for' => '适用对象',
        'Key Features' => '核心功能',
        'How It Works' => '工作方式',
        'View All Solutions' => '查看所有解决方案',
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

echo "dynamic pages translations merged\n";
