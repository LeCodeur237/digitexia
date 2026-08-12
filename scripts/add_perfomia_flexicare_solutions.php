<?php

$root = dirname(__DIR__);
$controllerPath = $root . '/app/Http/Controllers/SolutionController.php';
$solutionsPath = $root . '/resources/views/pages/solutions.blade.php';

$controller = file_get_contents($controllerPath);

$controller = str_replace(
    [
        "'perfomia' => 'digital-twin-platform',",
        "'digiperformance' => 'digital-twin-platform',",
        "360Â°",
        "360Ã‚Â°",
    ],
    [
        "'digiperformance' => 'perfomia',",
        "'digicourier' => 'digital-twin-platform',",
        "360°",
        "360°",
    ],
    $controller
);

$controller = preg_replace(
    "/\\s+'digicourier' => 'digital-twin-platform',\\R\\s+'digicourier' => 'digital-twin-platform',/",
    "\n            'digicourier' => 'digital-twin-platform',",
    $controller
);

$newSolutionData = <<<'PHP'
            'perfomia' => [
                'title' => 'Perfomia',
                'page_title' => 'Perfomia - DigiTexia',
                'eyebrow' => 'Performance Intelligence',
                'icon' => 'ti-chart-bar',
                'accent' => '#F59E0B',
                'accent_soft' => 'rgba(245,158,11,.14)',
                'summary' => 'A performance and workforce execution platform for teams that need structured task delegation, KPI visibility, attendance tracking and operational accountability.',
                'problem' => 'When tasks, attendance and evaluations are tracked manually, managers lose visibility and performance decisions become slow and inconsistent.',
                'solution' => 'Perfomia centralizes task execution, attendance, KPI tracking and staff evaluation into one operational management system.',
                'audience' => 'Microfinance institutions, operational teams, HR departments, supervisors and organizations managing distributed staff.',
                'stats' => [
                    ['value' => 'KPI', 'label' => 'Performance tracking'],
                    ['value' => 'Live', 'label' => 'Team visibility'],
                    ['value' => 'HR', 'label' => 'Staff evaluation'],
                ],
                'features' => [
                    'Task delegation with owners, deadlines and execution status',
                    'Attendance tracking and workforce visibility',
                    'KPI dashboards for managers and leadership',
                    'Structured staff evaluation and performance reporting',
                ],
                'workflow' => [
                    'Managers assign tasks and define expected outputs.',
                    'Teams update execution, attendance and performance data.',
                    'Leadership uses dashboards to evaluate progress and act faster.',
                ],
            ],
            'flexicare' => [
                'title' => 'FlexiCare',
                'page_title' => 'FlexiCare - DigiTexia',
                'eyebrow' => 'Service Operations',
                'icon' => 'ti-users',
                'accent' => '#7C3AED',
                'accent_soft' => 'rgba(124,58,237,.14)',
                'summary' => 'A service operations platform that connects customers, verified providers, bookings and field execution in one structured digital workflow.',
                'problem' => 'Service businesses often manage requests, providers and follow-up manually, which creates delays, weak accountability and poor customer visibility.',
                'solution' => 'FlexiCare structures service requests, provider verification, booking management and customer follow-up into one operational platform.',
                'audience' => 'Service companies, home-service operators, field providers, customer support teams and organizations coordinating distributed service delivery.',
                'stats' => [
                    ['value' => '360°', 'label' => 'Service visibility'],
                    ['value' => 'QR', 'label' => 'Provider verification'],
                    ['value' => 'Live', 'label' => 'Booking follow-up'],
                ],
                'features' => [
                    'Customer request and booking management',
                    'Verified provider profiles and service assignment',
                    'Operational follow-up for field service delivery',
                    'Dashboards for service quality, delays and customer activity',
                ],
                'workflow' => [
                    'A customer request is captured and assigned to a verified provider.',
                    'The service execution is tracked from booking to completion.',
                    'Managers monitor service quality, delays and customer follow-up.',
                ],
            ],
PHP;

if (!str_contains($controller, "'perfomia' => [")) {
    $controller = str_replace(
        "            'digital-twin-platform' => [",
        $newSolutionData . "\n            'digital-twin-platform' => [",
        $controller
    );
}

file_put_contents($controllerPath, $controller);

$solutions = file_get_contents($solutionsPath);

$newCards = <<<'BLADE'
        [
            'tag' => __('PRODUCT / PERFOMIA'),
            'name' => 'Perfomia',
            'positioning' => __('Performance and workforce execution platform for task delegation, attendance, KPIs and staff evaluation.'),
            'link' => url('/solutions/perfomia'),
            'rows' => [
                [__('Industry'), __('Microfinance institutions, HR teams and distributed operations')],
                [__('Challenge'), __('Manual task tracking and scattered evaluations limit visibility into team execution.')],
                [__('Impact'), __('Real-time performance visibility, structured accountability and faster management decisions.')],
            ],
        ],
        [
            'tag' => __('PRODUCT / FLEXICARE'),
            'name' => 'FlexiCare',
            'positioning' => __('Service operations platform for verified providers, bookings, customer requests and field execution.'),
            'link' => url('/solutions/flexicare'),
            'rows' => [
                [__('Industry'), __('Service companies, field providers and customer support teams')],
                [__('Challenge'), __('Manual service coordination creates delays, weak follow-up and inconsistent customer visibility.')],
                [__('Impact'), __('Structured booking, provider verification and operational follow-up from one platform.')],
            ],
        ],
BLADE;

if (!str_contains($solutions, "url('/solutions/perfomia')")) {
    $solutions = str_replace(
        "        [\n            'tag' => __('FLAGSHIP / DIGITAL TWIN PLATFORM'),",
        $newCards . "\n        [\n            'tag' => __('FLAGSHIP / DIGITAL TWIN PLATFORM'),",
        $solutions
    );
}

file_put_contents($solutionsPath, $solutions);

echo "Perfomia and FlexiCare added to Solutions.\n";
