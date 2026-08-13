<?php

$root = dirname(__DIR__);
$files = [
    $root . '/resources/views/pages/project-survey.blade.php',
    $root . '/app/Http/Controllers/ProjectSurveyController.php',
];

$keys = [];
foreach ($files as $file) {
    $content = file_get_contents($file);
    preg_match_all("/__\(\s*'((?:\\\\'|[^'])*)'\s*\)/", $content, $single);
    preg_match_all('/__\(\s*"((?:\\\\"|[^"])*)"\s*\)/', $content, $double);
    foreach (array_merge($single[1], $double[1]) as $key) {
        $keys[stripcslashes($key)] = true;
    }
}

$map = [
    'en' => [],
    'fr' => [
        'Healthcare Field Research' => 'Recherche terrain sante',
        'Help us understand how Flexicare should be developed and deployed.' => 'Aidez-nous a comprendre comment Flexicare doit etre developpe et deploye.',
        'We are collecting input from healthcare actors, institutions, patients, caregivers and partners to shape a practical digital healthcare solution for real operational needs.' => 'Nous collectons les retours des acteurs de la sante, institutions, patients, aidants et partenaires afin de concevoir une solution digitale de sante adaptee aux besoins operationnels reels.',
        'Why this form exists' => 'Pourquoi ce formulaire existe',
        'This is not a commercial registration form. It helps DigiTexia understand real users, field constraints, priorities and deployment conditions before building the product.' => 'Ce n est pas un formulaire commercial. Il aide DigiTexia a comprendre les utilisateurs reels, les contraintes terrain, les priorites et les conditions de deploiement avant de construire le produit.',
        'What we want to learn' => 'Ce que nous voulons comprendre',
        'User needs' => 'Besoins utilisateurs',
        'Operational problems' => 'Problemes operationnels',
        'Deployment constraints' => 'Contraintes de deploiement',
        'Expected features' => 'Fonctionnalites attendues',
        'Pilot readiness' => 'Preparation au pilote',
        'Fill in the form below. The information will help us design a better solution and identify the right pilot conditions.' => 'Remplissez le formulaire ci-dessous. Ces informations nous aideront a concevoir une meilleure solution et a identifier les bonnes conditions de pilote.',
        'Thank you. Your registration has been saved successfully.' => 'Merci. Votre enregistrement a ete sauvegarde avec succes.',
        'Please check the form and try again.' => 'Veuillez verifier le formulaire et reessayer.',
        'Full name' => 'Nom complet',
        'Email' => 'Email',
        'Phone' => 'Telephone',
        'Organization' => 'Organisation',
        'Role or function' => 'Role ou fonction',
        'Participant type' => 'Type de participant',
        'Healthcare professional' => 'Professionnel de sante',
        'Clinic or hospital manager' => 'Responsable de clinique ou hopital',
        'Patient or caregiver' => 'Patient ou aidant',
        'NGO or public actor' => 'ONG ou acteur public',
        'Technology partner' => 'Partenaire technologique',
        'Other' => 'Autre',
        'City' => 'Ville',
        'Country' => 'Pays',
        'Sector or activity' => 'Secteur ou activite',
        'Healthcare, insurance, public health, NGO, technology, other...' => 'Sante, assurance, sante publique, ONG, technologie, autre...',
        'What problems should this project solve?' => 'Quels problemes ce projet doit-il resoudre ?',
        'Which features would be most useful?' => 'Quelles fonctionnalites seraient les plus utiles ?',
        'Where and how could this solution be deployed?' => 'Ou et comment cette solution pourrait-elle etre deployee ?',
        'Preferred follow-up' => 'Suivi prefere',
        'Phone call' => 'Appel telephonique',
        'WhatsApp' => 'WhatsApp',
        'No follow-up needed' => 'Aucun suivi necessaire',
        'I agree that DigiTexia may store my answers and contact me about this project research.' => 'J accepte que DigiTexia conserve mes reponses et me contacte au sujet de cette recherche projet.',
        'Submit registration' => 'Envoyer l enregistrement',
    ],
    'es' => [
        'Healthcare Field Research' => 'Investigacion de campo en salud',
        'Help us understand how Flexicare should be developed and deployed.' => 'Ayudenos a entender como debe desarrollarse y desplegarse Flexicare.',
        'We are collecting input from healthcare actors, institutions, patients, caregivers and partners to shape a practical digital healthcare solution for real operational needs.' => 'Estamos recopilando aportes de actores de salud, instituciones, pacientes, cuidadores y socios para crear una solucion digital de salud practica para necesidades operativas reales.',
        'Why this form exists' => 'Por que existe este formulario',
        'This is not a commercial registration form. It helps DigiTexia understand real users, field constraints, priorities and deployment conditions before building the product.' => 'Este no es un formulario comercial. Ayuda a DigiTexia a entender usuarios reales, restricciones de campo, prioridades y condiciones de despliegue antes de construir el producto.',
        'What we want to learn' => 'Lo que queremos aprender',
        'User needs' => 'Necesidades de usuarios',
        'Operational problems' => 'Problemas operativos',
        'Deployment constraints' => 'Restricciones de despliegue',
        'Expected features' => 'Funciones esperadas',
        'Pilot readiness' => 'Preparacion para piloto',
        'Fill in the form below. The information will help us design a better solution and identify the right pilot conditions.' => 'Complete el formulario siguiente. La informacion nos ayudara a disenar una mejor solucion e identificar las condiciones adecuadas para un piloto.',
        'Thank you. Your registration has been saved successfully.' => 'Gracias. Su registro se ha guardado correctamente.',
        'Please check the form and try again.' => 'Revise el formulario e intentelo de nuevo.',
        'Full name' => 'Nombre completo',
        'Phone' => 'Telefono',
        'Organization' => 'Organizacion',
        'Role or function' => 'Rol o funcion',
        'Participant type' => 'Tipo de participante',
        'Healthcare professional' => 'Profesional de salud',
        'Clinic or hospital manager' => 'Responsable de clinica u hospital',
        'Patient or caregiver' => 'Paciente o cuidador',
        'NGO or public actor' => 'ONG o actor publico',
        'Technology partner' => 'Socio tecnologico',
        'City' => 'Ciudad',
        'Country' => 'Pais',
        'Sector or activity' => 'Sector o actividad',
        'Healthcare, insurance, public health, NGO, technology, other...' => 'Salud, seguros, salud publica, ONG, tecnologia, otro...',
        'What problems should this project solve?' => 'Que problemas debe resolver este proyecto?',
        'Which features would be most useful?' => 'Que funciones serian mas utiles?',
        'Where and how could this solution be deployed?' => 'Donde y como podria desplegarse esta solucion?',
        'Preferred follow-up' => 'Seguimiento preferido',
        'Phone call' => 'Llamada telefonica',
        'No follow-up needed' => 'No se necesita seguimiento',
        'I agree that DigiTexia may store my answers and contact me about this project research.' => 'Acepto que DigiTexia almacene mis respuestas y me contacte sobre esta investigacion del proyecto.',
        'Submit registration' => 'Enviar registro',
    ],
    'it' => [
        'Healthcare Field Research' => 'Ricerca sul campo sanitaria',
        'Help us understand how Flexicare should be developed and deployed.' => 'Aiutaci a capire come Flexicare dovrebbe essere sviluppato e distribuito.',
        'We are collecting input from healthcare actors, institutions, patients, caregivers and partners to shape a practical digital healthcare solution for real operational needs.' => 'Stiamo raccogliendo contributi da operatori sanitari, istituzioni, pazienti, caregiver e partner per definire una soluzione digitale sanitaria pratica per bisogni operativi reali.',
        'Why this form exists' => 'Perche esiste questo modulo',
        'This is not a commercial registration form. It helps DigiTexia understand real users, field constraints, priorities and deployment conditions before building the product.' => 'Questo non e un modulo commerciale. Aiuta DigiTexia a comprendere utenti reali, vincoli sul campo, priorita e condizioni di distribuzione prima di costruire il prodotto.',
        'What we want to learn' => 'Cosa vogliamo capire',
        'User needs' => 'Bisogni degli utenti',
        'Operational problems' => 'Problemi operativi',
        'Deployment constraints' => 'Vincoli di distribuzione',
        'Expected features' => 'Funzioni attese',
        'Pilot readiness' => 'Preparazione al pilota',
        'Fill in the form below. The information will help us design a better solution and identify the right pilot conditions.' => 'Compila il modulo qui sotto. Le informazioni ci aiuteranno a progettare una soluzione migliore e identificare le condizioni giuste per un pilota.',
        'Thank you. Your registration has been saved successfully.' => 'Grazie. La tua registrazione e stata salvata correttamente.',
        'Please check the form and try again.' => 'Controlla il modulo e riprova.',
        'Full name' => 'Nome completo',
        'Phone' => 'Telefono',
        'Organization' => 'Organizzazione',
        'Role or function' => 'Ruolo o funzione',
        'Participant type' => 'Tipo di partecipante',
        'Healthcare professional' => 'Professionista sanitario',
        'Clinic or hospital manager' => 'Responsabile di clinica o ospedale',
        'Patient or caregiver' => 'Paziente o caregiver',
        'NGO or public actor' => 'ONG o attore pubblico',
        'Technology partner' => 'Partner tecnologico',
        'City' => 'Citta',
        'Country' => 'Paese',
        'Sector or activity' => 'Settore o attivita',
        'Healthcare, insurance, public health, NGO, technology, other...' => 'Sanita, assicurazioni, salute pubblica, ONG, tecnologia, altro...',
        'What problems should this project solve?' => 'Quali problemi dovrebbe risolvere questo progetto?',
        'Which features would be most useful?' => 'Quali funzioni sarebbero piu utili?',
        'Where and how could this solution be deployed?' => 'Dove e come potrebbe essere distribuita questa soluzione?',
        'Preferred follow-up' => 'Contatto preferito',
        'Phone call' => 'Telefonata',
        'No follow-up needed' => 'Nessun follow-up necessario',
        'I agree that DigiTexia may store my answers and contact me about this project research.' => 'Accetto che DigiTexia conservi le mie risposte e mi contatti riguardo questa ricerca di progetto.',
        'Submit registration' => 'Invia registrazione',
    ],
    'zh' => [
        'Healthcare Field Research' => '医疗实地调研',
        'Help us understand how Flexicare should be developed and deployed.' => '帮助我们了解 Flexicare 应如何开发和部署。',
        'We are collecting input from healthcare actors, institutions, patients, caregivers and partners to shape a practical digital healthcare solution for real operational needs.' => '我们正在收集医疗从业者、机构、患者、护理者和合作伙伴的意见，以打造符合真实运营需求的数字医疗解决方案。',
        'Why this form exists' => '此表单的目的',
        'This is not a commercial registration form. It helps DigiTexia understand real users, field constraints, priorities and deployment conditions before building the product.' => '这不是商业登记表。它帮助 DigiTexia 在开发产品前了解真实用户、现场限制、优先事项和部署条件。',
        'What we want to learn' => '我们想了解什么',
        'User needs' => '用户需求',
        'Operational problems' => '运营问题',
        'Deployment constraints' => '部署限制',
        'Expected features' => '期望功能',
        'Pilot readiness' => '试点准备',
        'Fill in the form below. The information will help us design a better solution and identify the right pilot conditions.' => '请填写下面的表单。这些信息将帮助我们设计更好的解决方案并确定合适的试点条件。',
        'Thank you. Your registration has been saved successfully.' => '谢谢。您的登记已成功保存。',
        'Please check the form and try again.' => '请检查表单后重试。',
        'Full name' => '姓名',
        'Phone' => '电话',
        'Organization' => '组织',
        'Role or function' => '角色或职能',
        'Participant type' => '参与者类型',
        'Healthcare professional' => '医疗专业人员',
        'Clinic or hospital manager' => '诊所或医院管理者',
        'Patient or caregiver' => '患者或护理者',
        'NGO or public actor' => 'NGO 或公共部门人员',
        'Technology partner' => '技术合作伙伴',
        'City' => '城市',
        'Country' => '国家',
        'Sector or activity' => '行业或活动',
        'Healthcare, insurance, public health, NGO, technology, other...' => '医疗、保险、公共卫生、NGO、技术、其他...',
        'What problems should this project solve?' => '这个项目应该解决哪些问题？',
        'Which features would be most useful?' => '哪些功能最有用？',
        'Where and how could this solution be deployed?' => '该解决方案可以在哪里以及如何部署？',
        'Preferred follow-up' => '首选后续联系',
        'Phone call' => '电话',
        'No follow-up needed' => '无需后续联系',
        'I agree that DigiTexia may store my answers and contact me about this project research.' => '我同意 DigiTexia 保存我的回答，并就此项目研究联系我。',
        'Submit registration' => '提交登记',
    ],
];

foreach (array_keys($keys) as $key) {
    $map['en'][$key] = $key;
}

foreach (['es', 'it', 'zh'] as $locale) {
    foreach (array_keys($keys) as $key) {
        $map[$locale][$key] ??= $map['en'][$key];
    }
}

foreach ($map as $locale => $items) {
    $path = $root . "/resources/lang/{$locale}.json";
    $data = json_decode(preg_replace('/^\xEF\xBB\xBF/', '', file_get_contents($path)), true);
    if (! is_array($data)) {
        fwrite(STDERR, "Invalid JSON: {$path}\n");
        exit(1);
    }
    foreach ($items as $key => $value) {
        $data[$key] = $value;
    }
    ksort($data, SORT_NATURAL | SORT_FLAG_CASE);
    file_put_contents($path, json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) . PHP_EOL);
}

echo "Project survey translations updated: " . count($keys) . " keys.\n";
