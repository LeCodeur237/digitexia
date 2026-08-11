<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SolutionController extends Controller
{
    public function index()
    {
        return view('pages.solutions');
    }

    public function show(string $slug)
    {
        $aliases = [
            'inventorypro' => 'aquawatch-ai',
            'perfomia' => 'digital-twin-platform',
            'digiperformance' => 'digital-twin-platform',
            'digicourier' => 'digital-twin-platform',
            'medtrace' => 'aquawatch-ai',
            'digihealth' => 'aquawatch-ai',
        ];

        $slug = $aliases[$slug] ?? $slug;

        // Si une vue spécifique existe pour cette solution, on l'affiche directement
        if (view()->exists("pages.$slug")) {
            return view("pages.$slug");
        }

        $solutions = $this->getSolutionsData();

        abort_unless(isset($solutions[$slug]), 404);

        $solution = $solutions[$slug];

        return view('pages.solution-detail', compact('solution'));
    }

    private function getSolutionsData(): array
    {
        return [
            'aquawatch-ai' => [
                'title' => 'AquaWatch AI',
                'page_title' => 'AquaWatch AI - DigiTexia',
                'eyebrow' => 'Water Intelligence',
                'icon' => 'ti-droplet',
                'accent' => '#0EA5E9',
                'accent_soft' => 'rgba(14,165,233,.14)',
                'summary' => 'Smart water monitoring for boreholes, rural systems and distributed hydraulic infrastructure using IoT signals and AI failure prediction.',
                'problem' => 'Water infrastructure is difficult to monitor manually, so leaks, downtime and failures are often discovered too late.',
                'solution' => 'AquaWatch AI connects field sensors, maintenance data and predictive models to help operators detect risk earlier and plan interventions faster.',
                'audience' => 'Water utilities, rural water programs, municipalities, NGOs and infrastructure operators.',
                'stats' => [
                    ['value' => '24/7', 'label' => 'Infrastructure monitoring'],
                    ['value' => 'AI', 'label' => 'Failure prediction'],
                    ['value' => 'IoT', 'label' => 'Field signals'],
                ],
                'features' => [
                    'IoT monitoring for boreholes and distributed water systems',
                    'AI prediction of failures, leaks and service interruptions',
                    'Maintenance alerts for field teams and operators',
                    'Dashboards for water access, uptime and asset condition',
                ],
                'workflow' => [
                    'Sensors and field reports capture water system signals.',
                    'AI models detect abnormal patterns and failure risks.',
                    'Operators receive alerts and prioritize maintenance actions.',
                ],
            ],
            'wastepay' => [
                'title' => 'WastePay',
                'page_title' => 'WastePay - DigiTexia',
                'eyebrow' => 'Waste Intelligence',
                'icon' => 'ti-recycle',
                'accent' => '#00BF63',
                'accent_soft' => 'rgba(0,191,99,.14)',
                'summary' => 'Smart waste management infrastructure using QR tracking, verified collection and incentives for recycling participation.',
                'problem' => 'Waste collection and recycling programs lack reliable traceability, making it hard to verify flows, reward behavior and optimize operations.',
                'solution' => 'WastePay structures collection data, QR verification and incentive workflows into one auditable waste intelligence system.',
                'audience' => 'Municipalities, waste operators, circular economy programs, NGOs and private sector recycling initiatives.',
                'stats' => [
                    ['value' => 'QR', 'label' => 'Traceability'],
                    ['value' => '100%', 'label' => 'Verified flows'],
                    ['value' => 'Live', 'label' => 'Collection data'],
                ],
                'features' => [
                    'QR tracking for waste collection and recycling flows',
                    'Incentive logic for citizens, collectors and partners',
                    'Operator dashboards for routes, volumes and participation',
                    'Auditable records for reporting and circular economy programs',
                ],
                'workflow' => [
                    'Waste collection or recycling activity is verified with QR tracking.',
                    'Participation and volume data feed the operational dashboard.',
                    'Incentives and reports are generated from trusted records.',
                ],
            ],
            'carbon-africa-exchange' => [
                'title' => 'Carbon Africa Exchange',
                'page_title' => 'Carbon Africa Exchange - DigiTexia',
                'eyebrow' => 'Climate Intelligence',
                'icon' => 'ti-leaf',
                'accent' => '#16C784',
                'accent_soft' => 'rgba(22,199,132,.14)',
                'summary' => 'Carbon tracking and marketplace infrastructure for forests, agriculture and climate programs across African territories.',
                'problem' => 'Carbon data is often fragmented, hard to verify and difficult to convert into trusted carbon credit workflows.',
                'solution' => 'Carbon Africa Exchange structures measurement, verification and marketplace readiness into one climate intelligence platform.',
                'audience' => 'Climate programs, forestry initiatives, agriculture projects, ESG teams, NGOs and development agencies.',
                'stats' => [
                    ['value' => 'MRV', 'label' => 'Carbon measurement'],
                    ['value' => 'ESG', 'label' => 'Reporting layer'],
                    ['value' => 'Market', 'label' => 'Credit workflows'],
                ],
                'features' => [
                    'Carbon data structuring for forests and agriculture',
                    'Measurement and verification workflows for climate programs',
                    'Marketplace readiness for carbon credit opportunities',
                    'Dashboards for ESG, land projects and climate reporting',
                ],
                'workflow' => [
                    'Field, forest and agriculture data are collected and structured.',
                    'Verification workflows improve trust in carbon measurements.',
                    'Climate assets become easier to report, manage and prepare for exchange.',
                ],
            ],
            'digital-twin-platform' => [
                'title' => 'Digital Twin Platform',
                'page_title' => 'Digital Twin Platform - DigiTexia',
                'eyebrow' => 'Territory Intelligence',
                'icon' => 'ti-map-2',
                'accent' => '#004AAC',
                'accent_soft' => 'rgba(0,74,172,.14)',
                'summary' => 'A national and urban digital twin platform that aggregates infrastructure, services and field data into one operational intelligence layer.',
                'problem' => 'Governments, NGOs and enterprises often lack real-time visibility across distributed infrastructure, services and territories.',
                'solution' => 'The Digital Twin Platform connects maps, assets, field reports and dashboards to support planning, monitoring and better decisions.',
                'audience' => 'Governments, cities, NGOs, development agencies, utilities and infrastructure operators.',
                'stats' => [
                    ['value' => 'GIS', 'label' => 'Asset mapping'],
                    ['value' => 'Live', 'label' => 'Territory signals'],
                    ['value' => '360°', 'label' => 'Operational view'],
                ],
                'features' => [
                    'Infrastructure and service data aggregation',
                    'Territory dashboards for planning and monitoring',
                    'Field data integration for distributed operations',
                    'Decision intelligence for public and institutional leaders',
                ],
                'workflow' => [
                    'Infrastructure, service and field data are connected.',
                    'The platform maps assets and creates a live territory view.',
                    'Leaders use dashboards to plan, monitor and prioritize action.',
                ],
            ],
        ];
    }
}
