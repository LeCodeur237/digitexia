<?php

$fr = [
    'Company, institution or organization' => 'Entreprise, institution ou organisation',
    'DigiTexia collaborates with organizations to design digital solutions that create measurable impact. We are an accessible technology partner, committed to meaningful communication from the first message onward.' => 'DigiTexia collabore avec les organisations pour concevoir des solutions numériques qui créent un impact mesurable. Nous sommes un partenaire technologique accessible, engagé dans une communication utile dès le premier message.',
    'DigiTexia | Contact' => 'DigiTexia | Contact',
    'Email DigiTexia' => 'Envoyer un e-mail à DigiTexia',
    'Every successful digital transformation starts with a conversation.' => 'Toute transformation numérique réussie commence par une conversation.',
    'Full name' => 'Nom complet',
    'Let us talk about your project' => 'Parlons de votre projet',
    'Name' => 'Nom',
    'Not specified' => 'Non précisé',
    'Organization' => 'Organisation',
    'Other' => 'Autre',
    'Prefer to talk directly? Reach us by phone or email. We are accessible, and we would be glad to hear from you.' => 'Vous préférez échanger directement ? Contactez-nous par téléphone ou par e-mail. Nous sommes accessibles et serions ravis de vous lire.',
    'Product Development' => 'Développement produit',
    'Project inquiry' => 'Demande de projet',
    'Share a few details about your organization and what you hope to build. The more context you give us, the more useful our first conversation will be.' => 'Partagez quelques détails sur votre organisation et ce que vous souhaitez construire. Plus vous donnez de contexte, plus notre premier échange sera utile.',
    'Start the Conversation' => 'Démarrer la conversation',
    'Strategic Partnerships' => 'Partenariats stratégiques',
    'Technology Partnership' => 'Partenariat technologique',
    'Tell us about your challenge and objectives' => 'Parlez-nous de votre défi et de vos objectifs',
    'Topic' => 'Sujet',
    'We are glad to discuss' => 'Nous pouvons échanger sur',
    'We review every inquiry carefully and respond to discuss the most appropriate next steps for your project.' => 'Nous examinons chaque demande avec attention et répondons pour discuter des prochaines étapes les plus adaptées à votre projet.',
    'What are you trying to solve, and what would success look like?' => 'Que cherchez-vous à résoudre, et à quoi ressemblerait le succès ?',
    'What would you like to discuss?' => 'De quoi souhaitez-vous discuter ?',
    'Whether you are starting a new initiative or improving one already underway, we welcome the chance to hear about it. Tell us about your organization, your challenge and where you want to go.' => 'Que vous lanciez une nouvelle initiative ou amélioriez un projet déjà en cours, nous serons ravis d’en discuter. Parlez-nous de votre organisation, de votre défi et de la direction que vous souhaitez prendre.',
    'Your name' => 'Votre nom',
];

$short = [
    'es' => [
        'Full name' => 'Nombre completo',
        'Name' => 'Nombre',
        'Not specified' => 'No especificado',
        'Organization' => 'Organización',
        'Other' => 'Otro',
        'Product Development' => 'Desarrollo de producto',
        'Project inquiry' => 'Consulta de proyecto',
        'Start the Conversation' => 'Iniciar la conversación',
        'Strategic Partnerships' => 'Alianzas estratégicas',
        'Technology Partnership' => 'Alianza tecnológica',
        'Topic' => 'Tema',
        'Your name' => 'Su nombre',
    ],
    'it' => [
        'Full name' => 'Nome completo',
        'Name' => 'Nome',
        'Not specified' => 'Non specificato',
        'Organization' => 'Organizzazione',
        'Other' => 'Altro',
        'Product Development' => 'Sviluppo prodotto',
        'Project inquiry' => 'Richiesta di progetto',
        'Start the Conversation' => 'Avvia la conversazione',
        'Strategic Partnerships' => 'Partnership strategiche',
        'Technology Partnership' => 'Partnership tecnologica',
        'Topic' => 'Argomento',
        'Your name' => 'Il tuo nome',
    ],
    'zh' => [
        'Full name' => '全名',
        'Name' => '姓名',
        'Not specified' => '未指定',
        'Organization' => '组织',
        'Other' => '其他',
        'Product Development' => '产品开发',
        'Project inquiry' => '项目咨询',
        'Start the Conversation' => '开始沟通',
        'Strategic Partnerships' => '战略合作',
        'Technology Partnership' => '技术合作',
        'Topic' => '主题',
        'Your name' => '您的姓名',
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

echo "contact translations merged\n";
