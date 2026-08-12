<?php

$root = dirname(__DIR__);

$translations = [
    'es' => [
        'DigiTexia builds AI-powered digital infrastructure for organizations that need stronger visibility, better operations and scalable technology.' => 'DigiTexia construye infraestructura digital impulsada por IA para organizaciones que necesitan mayor visibilidad, mejores operaciones y tecnologia escalable.',
        'Coordinate verified providers, customer requests, bookings and field execution from one structured platform.' => 'Coordine proveedores verificados, solicitudes de clientes, reservas y ejecucion en campo desde una plataforma estructurada.',
        'Give managers clearer execution visibility and faster performance decisions.' => 'Ofrezca a los responsables mayor visibilidad de ejecucion y decisiones de rendimiento mas rapidas.',
        'Improve service coordination, provider accountability and customer visibility.' => 'Mejore la coordinacion del servicio, la responsabilidad de los proveedores y la visibilidad del cliente.',
        'Performance and workforce execution platform for task delegation, attendance, KPIs and staff evaluation.' => 'Plataforma de rendimiento y ejecucion laboral para delegacion de tareas, asistencia, KPIs y evaluacion del personal.',
        'Service operations platform for verified providers, bookings, customer requests and field execution.' => 'Plataforma de operaciones de servicio para proveedores verificados, reservas, solicitudes de clientes y ejecucion en campo.',
        'Structure tasks, attendance, KPI visibility and staff evaluation for distributed teams.' => 'Estructure tareas, asistencia, visibilidad de KPIs y evaluacion del personal para equipos distribuidos.',
    ],
    'it' => [
        'DigiTexia builds AI-powered digital infrastructure for organizations that need stronger visibility, better operations and scalable technology.' => 'DigiTexia costruisce infrastrutture digitali basate su IA per organizzazioni che necessitano di maggiore visibilita, operazioni migliori e tecnologia scalabile.',
        'Coordinate verified providers, customer requests, bookings and field execution from one structured platform.' => 'Coordinate fornitori verificati, richieste dei clienti, prenotazioni ed esecuzione sul campo da una piattaforma strutturata.',
        'Give managers clearer execution visibility and faster performance decisions.' => 'Offrite ai manager una visibilita piu chiara sull esecuzione e decisioni sulle prestazioni piu rapide.',
        'Improve service coordination, provider accountability and customer visibility.' => 'Migliorate il coordinamento del servizio, la responsabilita dei fornitori e la visibilita del cliente.',
        'Performance and workforce execution platform for task delegation, attendance, KPIs and staff evaluation.' => 'Piattaforma di performance ed esecuzione del lavoro per delega delle attivita, presenze, KPI e valutazione del personale.',
        'Service operations platform for verified providers, bookings, customer requests and field execution.' => 'Piattaforma di operazioni di servizio per fornitori verificati, prenotazioni, richieste dei clienti ed esecuzione sul campo.',
        'Structure tasks, attendance, KPI visibility and staff evaluation for distributed teams.' => 'Strutturate attivita, presenze, visibilita KPI e valutazione del personale per team distribuiti.',
    ],
    'zh' => [
        'DigiTexia builds AI-powered digital infrastructure for organizations that need stronger visibility, better operations and scalable technology.' => 'DigiTexia 为需要更强可见性、更好运营和可扩展技术的组织构建 AI 驱动的数字基础设施。',
        'Coordinate verified providers, customer requests, bookings and field execution from one structured platform.' => '通过一个结构化平台协调已验证服务方、客户请求、预约和现场执行。',
        'Give managers clearer execution visibility and faster performance decisions.' => '为管理者提供更清晰的执行可见性和更快速的绩效决策能力。',
        'Improve service coordination, provider accountability and customer visibility.' => '提升服务协调、服务方责任追踪和客户可见性。',
        'Performance and workforce execution platform for task delegation, attendance, KPIs and staff evaluation.' => '面向任务分配、考勤、KPI 和员工评估的绩效与团队执行平台。',
        'Service operations platform for verified providers, bookings, customer requests and field execution.' => '面向已验证服务方、预约、客户请求和现场执行的服务运营平台。',
        'Structure tasks, attendance, KPI visibility and staff evaluation for distributed teams.' => '为分布式团队结构化任务、考勤、KPI 可见性和员工评估。',
    ],
];

foreach ($translations as $locale => $entries) {
    $path = $root . "/resources/lang/{$locale}.json";
    $json = json_decode(file_get_contents($path), true) ?: [];

    foreach ($entries as $key => $value) {
        $json[$key] = $value;
    }

    ksort($json, SORT_NATURAL | SORT_FLAG_CASE);
    file_put_contents($path, json_encode($json, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) . PHP_EOL);
}

echo "home and footer ES/IT/ZH translations fixed\n";
