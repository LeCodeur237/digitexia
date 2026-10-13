<?php

$root = dirname(__DIR__);

$translations = [
    'en' => [
        'Access the platform' => 'Access the platform',
        'A clear view of the product experience.' => 'A clear view of the product experience.',
        'Explore the dashboard, task management, mail tracking, evaluations and mobile access through real Perfomia screens.' => 'Explore the dashboard, task management, mail tracking, evaluations and mobile access through real Perfomia screens.',
        'Commercial contact and platform access can be connected to the final Perfomia environment.' => 'Commercial contact and platform access can be connected to the final Perfomia environment.',
    ],
    'fr' => [
        'Access the platform' => 'Accéder à la plateforme',
        'A clear view of the product experience.' => 'Une vue claire de l’expérience produit.',
        'Explore the dashboard, task management, mail tracking, evaluations and mobile access through real Perfomia screens.' => 'Découvrez le tableau de bord, la gestion des tâches, le suivi des courriers, les évaluations et l’accès mobile à partir de véritables écrans Perfomia.',
        'Commercial contact and platform access can be connected to the final Perfomia environment.' => 'Le contact commercial et l’accès à la plateforme pourront être reliés à l’environnement final de Perfomia.',
    ],
    'es' => [
        'Access the platform' => 'Acceder a la plataforma',
        'A clear view of the product experience.' => 'Una vista clara de la experiencia del producto.',
        'Explore the dashboard, task management, mail tracking, evaluations and mobile access through real Perfomia screens.' => 'Explore el panel, la gestión de tareas, el seguimiento de correos, las evaluaciones y el acceso móvil mediante pantallas reales de Perfomia.',
        'Commercial contact and platform access can be connected to the final Perfomia environment.' => 'El contacto comercial y el acceso a la plataforma podrán conectarse al entorno final de Perfomia.',
    ],
    'it' => [
        'Access the platform' => 'Accedi alla piattaforma',
        'A clear view of the product experience.' => 'Una visione chiara dell’esperienza prodotto.',
        'Explore the dashboard, task management, mail tracking, evaluations and mobile access through real Perfomia screens.' => 'Esplora dashboard, gestione attività, monitoraggio posta, valutazioni e accesso mobile attraverso schermate reali di Perfomia.',
        'Commercial contact and platform access can be connected to the final Perfomia environment.' => 'Il contatto commerciale e l’accesso alla piattaforma potranno essere collegati all’ambiente finale di Perfomia.',
    ],
    'zh' => [
        'Access the platform' => '访问平台',
        'A clear view of the product experience.' => '清晰呈现产品体验。',
        'Explore the dashboard, task management, mail tracking, evaluations and mobile access through real Perfomia screens.' => '通过真实的 Perfomia 界面查看仪表盘、任务管理、公文跟踪、评估和移动端访问。',
        'Commercial contact and platform access can be connected to the final Perfomia environment.' => '商务联系和平台访问可连接到最终的 Perfomia 环境。',
    ],
];

foreach ($translations as $locale => $items) {
    $path = $root . "/resources/lang/{$locale}.json";
    $json = json_decode(file_get_contents($path), true, 512, JSON_THROW_ON_ERROR);
    foreach ($items as $key => $value) {
        $json[$key] = $value;
    }
    ksort($json, SORT_STRING);
    file_put_contents($path, json_encode($json, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) . PHP_EOL);
}

echo "Perfomia design translations finalized.\n";
