<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/about-us', function () {
    return view('pages.about');
});

Route::get('/services', function () {
    return view('pages.services');
});

Route::get('/services-details', function () {
    return view('pages.service-details');
});

Route::get('/the-problem', function () {
    return view('pages.problem');
});

Route::get('/problem', function () {
    return view('pages.problem');
});

Route::get('/solutions', function () {
    return view('pages.solutions');
});

Route::get('/solutions/{slug}', function (string $slug) {
    if ($slug === 'inventorypro') {
        return view('pages.inventorypro');
    }
    if ($slug === 'flexicare') {
        return view('pages.flexicare');
    }
    if ($slug === 'digiperformance') {
        $slug = 'perfomia';
    }
    if ($slug === 'perfomia') {
        return view('pages.perfomia');
    }
    if ($slug === 'digihealth') {
        $slug = 'medtrace';
    }

    $solutions = [
        'inventorypro' => [
            'title' => 'InventoryPro',
            'page_title' => 'InventoryPro — DigiTexia',
            'eyebrow' => 'Stock Management',
            'icon' => 'ti-box',
            'accent' => '#0EA5E9',
            'accent_soft' => 'rgba(14,165,233,.14)',
            'summary' => 'Robust stock management to track resources, manage internal requests, and maintain tight inventory control across locations.',
            'problem' => 'Manual stock sheets make shortages, duplication, and untracked movement difficult to spot until they become costly.',
            'solution' => 'InventoryPro gives teams one shared source of truth for stock levels, movement history, and requests.',
            'audience' => 'Warehouses, offices, schools, clinics, and distributed operations.',
            'stats' => [
                ['value' => '3', 'label' => 'Locations tracked'],
                ['value' => '7', 'label' => 'Low-stock alerts'],
                ['value' => '1,284', 'label' => 'Items managed'],
            ],
            'features' => [
                'Multi-location tracking from a single dashboard',
                'Automatic low-stock alerts and replenishment signals',
                'Internal request management with approval flow',
                'Consumption analytics for smarter purchasing',
            ],
            'workflow' => [
                'A location logs a stock movement or request.',
                'Managers review live levels and approve replenishment.',
                'Alerts and reports keep the inventory cycle under control.',
            ],
        ],
        'perfomia' => [
            'title' => 'Perfomia',
            'page_title' => 'Perfomia — DigiTexia',
            'eyebrow' => 'HR & Performance',
            'icon' => 'ti-chart-bar',
            'accent' => '#F59E0B',
            'accent_soft' => 'rgba(245,158,11,.14)',
            'summary' => 'Comprehensive performance tracking for task delegation, activity monitoring, staff evaluation, and attendance management.',
            'problem' => 'When attendance, task follow-up, and evaluations live in different files, managers lose visibility and teams lose momentum.',
            'solution' => 'Perfomia brings the whole performance cycle into one platform, from task assignment to appraisal.',
            'audience' => 'Operations leaders, HR teams, project managers, and supervisors.',
            'stats' => [
                ['value' => '94%', 'label' => 'Attendance visibility'],
                ['value' => '86%', 'label' => 'Tasks completed'],
                ['value' => '4.2', 'label' => 'Average score'],
            ],
            'features' => [
                'Task delegation with deadlines, owners, and status tracking',
                'Attendance management with digital check-in and reporting',
                'Structured staff evaluations with KPI scoring',
                'Live monitoring dashboards for managers',
            ],
            'workflow' => [
                'Managers assign work and track execution in real time.',
                'Attendance and output data feed into the dashboard.',
                'Reviews and performance decisions are based on one clean record.',
            ],
        ],
        'digicourier' => [
            'title' => 'DigiCourier',
            'page_title' => 'DigiCourier — DigiTexia',
            'eyebrow' => 'Internal Comms',
            'icon' => 'ti-mail',
            'accent' => '#EC4899',
            'accent_soft' => 'rgba(236,72,153,.14)',
            'summary' => 'Administrative tracking system to digitize internal mail flows and secure official communication history with full audit trails.',
            'problem' => 'Paper-based internal mail and informal message chains make it hard to trace who approved what, when, and where.',
            'solution' => 'DigiCourier creates a searchable, auditable communication trail with routing, delivery confirmation, and archiving.',
            'audience' => 'Public institutions, enterprises, and teams that need formal communication traceability.',
            'stats' => [
                ['value' => '100%', 'label' => 'Traced documents'],
                ['value' => '47', 'label' => 'In transit'],
                ['value' => '312', 'label' => 'Delivered'],
            ],
            'features' => [
                'Digital mail tracking with timestamps and read confirmation',
                'Secure archive for official correspondence',
                'Classification and routing to the correct department',
                'Full audit trail for compliance and disputes',
            ],
            'workflow' => [
                'A document is received and classified.',
                'It is routed to the correct person or department.',
                'Every step is archived for later search and audit.',
            ],
        ],
        'medtrace' => [
            'title' => 'MedTrace',
            'page_title' => 'MedTrace — DigiTexia',
            'eyebrow' => 'Healthcare Innovation',
            'icon' => 'ti-heart-pulse',
            'accent' => '#16C784',
            'accent_soft' => 'rgba(22,199,132,.14)',
            'summary' => 'Innovative digital medical record system accessible via QR-coded wearables, providing instant access to vital patient data at the point of care.',
            'problem' => 'In emergencies, waiting for paper files or old records can slow treatment and put lives at risk.',
            'solution' => 'MedTrace gives authorized caregivers instant access to critical patient information through a secure QR scan.',
            'audience' => 'Clinics, hospitals, emergency teams, and patients who need portable medical identity.',
            'stats' => [
                ['value' => '<3s', 'label' => 'Emergency access'],
                ['value' => 'O+', 'label' => 'Blood type visible'],
                ['value' => '4', 'label' => 'Prescriptions tracked'],
            ],
            'features' => [
                'QR-coded wearable bracelet linked to a secure patient profile',
                'Emergency access to blood type, allergies, and contacts',
                'Full medical history record updated after each visit',
                'Privacy-first security and access control',
            ],
            'workflow' => [
                'A clinician scans the bracelet QR code.',
                'Critical patient data appears instantly.',
                'Treatment decisions are made faster and with more context.',
            ],
        ],
    ];

    abort_unless(isset($solutions[$slug]), 404);

    $solution = $solutions[$slug];

    return view('pages.solution-detail', compact('solution'));
});

Route::get('/why-us', function () {
    return view('pages.why-us');
});

Route::get('/projects', function () {
    return view('pages.projects');
});

Route::get('/project-details', function () {
    return view('pages.project-details');
});

Route::get('/our-partners', function () {
    return view('pages.partners');
});

Route::get('/team-members', function () {
    return view('pages.teams');
});

Route::get('/life-at-digi', function () {
    return view('pages.blog');
});

Route::get('/life-at-digi-details', function () {
    return view('pages.blog-details');
});

Route::get('/contact-us', function () {
    return view('pages.contact');
});

Route::get('/carriers', function () {
    return view('pages.carriers');
});

