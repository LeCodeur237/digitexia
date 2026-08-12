<?php

$root = dirname(__DIR__);
$controllerPath = $root . '/app/Http/Controllers/SolutionController.php';
$solutionsPath = $root . '/resources/views/pages/solutions.blade.php';

$controller = file_get_contents($controllerPath);

$controller = str_replace(
    [
        "'digiperformance' => 'perfomia',",
        "'medtrace' => 'aquawatch-ai',",
        "'perfomia' => [",
        "'title' => 'Perfomia'",
        "'page_title' => 'Perfomia - DigiTexia'",
        'Perfomia centralizes task execution',
        "'title' => 'FlexiCare'",
        "'page_title' => 'FlexiCare - DigiTexia'",
        'FlexiCare structures service requests',
        "360Â°",
        "360Ã‚Â°",
    ],
    [
        "'perfomia' => 'performia',\n            'digiperformance' => 'performia',",
        '',
        "'performia' => [",
        "'title' => 'Performia'",
        "'page_title' => 'Performia - DigiTexia'",
        'Performia centralizes task execution',
        "'title' => 'Flexicare'",
        "'page_title' => 'Flexicare - DigiTexia'",
        'Flexicare structures service requests',
        "360°",
        "360°",
    ],
    $controller
);

$medtrace = <<<'PHP'
            'medtrace' => [
                'title' => 'MedTrace',
                'page_title' => 'MedTrace - DigiTexia',
                'eyebrow' => 'Healthcare Traceability',
                'icon' => 'ti-heartbeat',
                'accent' => '#EF4444',
                'accent_soft' => 'rgba(239,68,68,.14)',
                'summary' => 'A secure healthcare traceability platform that gives authorized caregivers fast access to critical patient information through QR-based identification.',
                'problem' => 'Emergency and clinical teams often lose time because patient records, history and critical information are not instantly available.',
                'solution' => 'MedTrace connects patient identity, emergency data and authorized medical access into one secure digital traceability system.',
                'audience' => 'Clinics, hospitals, emergency responders, healthcare programs, NGOs and public health initiatives.',
                'stats' => [
                    ['value' => 'QR', 'label' => 'Secure identification'],
                    ['value' => '24/7', 'label' => 'Critical access'],
                    ['value' => 'Health', 'label' => 'Patient traceability'],
                ],
                'features' => [
                    'QR-based patient identification',
                    'Authorized access to critical health information',
                    'Emergency profile and medical history visibility',
                    'Secure records for healthcare and public health teams',
                ],
                'workflow' => [
                    'Patient identity and critical health data are structured securely.',
                    'Authorized caregivers scan the QR code when information is needed.',
                    'Medical teams access the right data faster and improve response quality.',
                ],
            ],
PHP;

if (!str_contains($controller, "'medtrace' => [")) {
    $controller = str_replace(
        "            'aquawatch-ai' => [",
        $medtrace . "\n            'aquawatch-ai' => [",
        $controller
    );
}

file_put_contents($controllerPath, $controller);

$solutions = file_get_contents($solutionsPath);

$start = strpos($solutions, '    $products = [');
$end = strpos($solutions, '    $industries = [', $start);

if ($start === false || $end === false) {
    fwrite(STDERR, "Unable to locate products block.\n");
    exit(1);
}

$productsBlock = <<<'BLADE'
    $products = [
        [
            'tag' => __('PRODUCT / MEDTRACE'),
            'name' => 'MedTrace',
            'positioning' => __('Secure healthcare traceability with QR-based access to critical patient information.'),
            'link' => url('/solutions/medtrace'),
            'rows' => [
                [__('Industry'), __('Healthcare providers, emergency responders and public health programs')],
                [__('Challenge'), __('Patient information is often unavailable when medical teams need it most.')],
                [__('Impact'), __('Faster identification, better emergency response and safer continuity of care.')],
            ],
        ],
        [
            'tag' => __('PRODUCT / AQUAWATCH AI'),
            'name' => 'AquaWatch AI',
            'positioning' => __('IoT and AI-powered monitoring for water and hydraulic infrastructure.'),
            'link' => url('/solutions/aquawatch-ai'),
            'rows' => [
                [__('Industry'), __('Water utilities and public infrastructure')],
                [__('Challenge'), __('Manual monitoring makes leaks and failures costly to detect.')],
                [__('Impact'), __('Real-time infrastructure visibility that reduces water loss and response time.')],
            ],
        ],
        [
            'tag' => __('PRODUCT / WASTEPAY'),
            'name' => 'WastePay',
            'positioning' => __('Smart waste management with QR tracking and recycling incentives.'),
            'link' => url('/solutions/wastepay'),
            'rows' => [
                [__('Industry'), __('Cities, waste operators and circular economy programs')],
                [__('Challenge'), __('Waste flows are hard to verify, reward and optimize without structured data.')],
                [__('Impact'), __('Transparent collection, stronger recycling participation and better operational accountability.')],
            ],
        ],
        [
            'tag' => __('PRODUCT / FLEXICARE'),
            'name' => 'Flexicare',
            'positioning' => __('Service operations platform for verified providers, bookings, customer requests and field execution.'),
            'link' => url('/solutions/flexicare'),
            'rows' => [
                [__('Industry'), __('Service companies, field providers and customer support teams')],
                [__('Challenge'), __('Manual service coordination creates delays, weak follow-up and inconsistent customer visibility.')],
                [__('Impact'), __('Structured booking, provider verification and operational follow-up from one platform.')],
            ],
        ],
        [
            'tag' => __('PRODUCT / PERFORMIA'),
            'name' => 'Performia',
            'positioning' => __('Performance and workforce execution platform for task delegation, attendance, KPIs and staff evaluation.'),
            'link' => url('/solutions/performia'),
            'rows' => [
                [__('Industry'), __('Microfinance institutions, HR teams and distributed operations')],
                [__('Challenge'), __('Manual task tracking and scattered evaluations limit visibility into team execution.')],
                [__('Impact'), __('Real-time performance visibility, structured accountability and faster management decisions.')],
            ],
        ],
    ];

BLADE;

$solutions = substr($solutions, 0, $start) . $productsBlock . substr($solutions, $end);

file_put_contents($solutionsPath, $solutions);

echo "Real solutions list aligned.\n";
