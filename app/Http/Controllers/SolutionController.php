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
            'perfomia' => 'performia',
            'digiperformance' => 'performia',
            'digicourier' => 'flexicare',
            
            'digihealth' => 'medtrace',
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
            'medtrace' => [
                'title' => 'MedTrace',
                'page_title' => 'MedTrace - DigiTexia',
                'eyebrow' => 'Healthcare Traceability',
                'icon' => 'ti-heartbeat',
                'accent' => '#EF4444',
                'accent_soft' => 'rgba(239,68,68,.14)',
                'status' => 'Concept',
                'status_color' => 'dim',
                'industry' => 'Healthcare',
                'tagline' => 'Digital medical identity and traceability infrastructure.',
                'positioning' => 'Reliable patient identity. Traceable care. Compliance-ready by design.',
                'summary' => 'A secure healthcare traceability platform that gives authorized caregivers fast access to critical patient information through QR-based identification.',
                'problem' => 'Emergency and clinical teams often lose time because patient records, history and critical information are not instantly available.',
                'solution' => 'MedTrace connects patient identity, emergency data and authorized medical access into one secure digital traceability system.',
                'audience' => 'Healthcare providers and institutions that need dependable patient identification and record traceability.',
                'cta_primary' => 'Exploring digital identity infrastructure for healthcare?',
                'overview_title' => "What MedTrace is, and who it's for",
                'overview' => [
                    ['label' => 'Designed for', 'text' => 'Healthcare providers and institutions that need dependable patient identification and record traceability.'],
                    ['label' => 'Problem addressed', 'text' => 'Patient identification and medical records are often fragmented across paper and disconnected systems, weakening both care quality and compliance.'],
                    ['label' => 'Value delivered', 'text' => 'A digital identity and traceability layer designed to make patient information reliable, portable and auditable.'],
                ],
                'challenge_title' => 'Why MedTrace exists',
                'challenge_text' => "Fragmented patient identification makes continuity of care harder and compliance slower. Without a structured digital identity, records scatter across paper and disconnected systems, and reconstructing a patient's history becomes a manual, error-prone task.",
                'challenge_points' => [
                    'Patient identity fragmented across paper and disconnected systems',
                    'Provider verification difficult to confirm reliably',
                    'Limited traceability of care and records over time',
                    'Compliance documentation assembled manually, after the fact',
                ],
                'solution_text' => 'MedTrace establishes a structured digital identity for every patient record, with provider verification and traceability built in, designed so compliance documentation is a byproduct of normal use, not a separate scramble.',
                'solution_points' => [
                    'A structured digital identity for every patient record',
                    'Provider verification built into the platform',
                    'End-to-end traceability of medical interactions',
                    'Documentation that is audit-ready by design, not after the fact',
                ],
                'stats' => [
                    ['value' => 'QR', 'label' => 'Secure identification'],
                    ['value' => '24/7', 'label' => 'Critical access'],
                    ['value' => 'Health', 'label' => 'Patient traceability'],
                ],
                'features' => [
                    'Digital Patient Identity',
                    'Provider Verification',
                    'Compliance Documentation',
                    'Secure Records Access',
                ],
                'capabilities_title' => 'What MedTrace actually does',
                'capabilities' => [
                    ['title' => 'Digital Patient Identity', 'text' => 'A structured, portable identity record for every patient.'],
                    ['title' => 'Provider Verification', 'text' => 'Confirm the identity and credentials of care providers.'],
                    ['title' => 'Compliance Documentation', 'text' => 'Records structured to be audit-ready from the start.'],
                    ['title' => 'Secure Records Access', 'text' => 'Controlled access to sensitive medical information.'],
                ],
                'gallery_title' => 'See MedTrace in the field',
                'gallery_intro' => 'Platform screenshots and real deployment photography will populate this gallery as they become available.',
                'workflow' => [
                    'Patient Registration',
                    'Digital Identity Record',
                    'Provider Verification',
                    'Secure Data Exchange',
                    'Compliance Documentation',
                ],
                'tech_intro' => 'Capabilities that power MedTrace, not a list of frameworks, but what the platform is actually able to do.',
                'tech_tags' => ['Digital Identity', 'Secure Data Infrastructure', 'Cloud', 'Access Control'],
                'impact_title' => 'Where MedTrace stands today',
                'impact_text' => 'MedTrace is currently at concept stage. Verified deployment results will be published once the platform moves into pilot implementation.',
                'cta_title' => 'Exploring digital identity infrastructure for healthcare?',
                'cta_text' => "Whether MedTrace is the right fit as-is or a starting point for something more tailored, we're glad to talk it through.",
            ],
            'aquawatch-ai' => [
                'title' => 'AquaWatch AI',
                'page_title' => 'AquaWatch AI - DigiTexia',
                'eyebrow' => 'Water Intelligence',
                'icon' => 'ti-droplet',
                'accent' => '#0EA5E9',
                'accent_soft' => 'rgba(14,165,233,.14)',
                'status' => 'Prototype',
                'status_color' => 'gold',
                'industry' => 'Water Utilities & Public Infrastructure',
                'tagline' => 'AI-powered water monitoring and operational intelligence.',
                'positioning' => 'Monitor infrastructure. Understand water systems. Make better decisions.',
                'summary' => 'Smart water monitoring for boreholes, rural systems and distributed hydraulic infrastructure using IoT signals and AI failure prediction.',
                'problem' => 'Water infrastructure is difficult to monitor manually, so leaks, downtime and failures are often discovered too late.',
                'solution' => 'AquaWatch AI connects field sensors, maintenance data and predictive models to help operators detect risk earlier and plan interventions faster.',
                'audience' => 'Utilities and organizations managing water infrastructure across distributed sites.',
                'cta_primary' => 'Interested in monitoring your infrastructure differently?',
                'overview_title' => "What AquaWatch AI is, and who it's for",
                'overview' => [
                    ['label' => 'Designed for', 'text' => 'Utilities and organizations managing water infrastructure across distributed sites.'],
                    ['label' => 'Problem addressed', 'text' => 'Water infrastructure is difficult to monitor manually. Leaks, losses and failures often go undetected until they become costly.'],
                    ['label' => 'Value delivered', 'text' => 'Real-time visibility into infrastructure health, powered by AI-driven analysis of sensor data.'],
                ],
                'challenge_title' => 'Why AquaWatch AI exists',
                'challenge_text' => "Distributed water infrastructure is hard to monitor with manual inspection alone. Anomalies can go undetected for days or weeks, resource losses compound quietly, and decisions get made without a clear picture of what's actually happening in the field.",
                'challenge_points' => [
                    'Limited visibility over distributed infrastructure',
                    'Delayed detection of leaks and anomalies',
                    "Manual inspection cycles that can't keep pace",
                    'Difficulty prioritizing where to act first',
                ],
                'solution_text' => 'AquaWatch AI combines field monitoring with AI-driven analysis to give operators a continuous, real-time view of their water infrastructure, turning scattered sensor readings into clear operational intelligence.',
                'solution_points' => [
                    'Continuous monitoring instead of periodic manual checks',
                    'AI-assisted detection of anomalies and unusual patterns',
                    'A single platform view across distributed infrastructure',
                    'Data that supports faster, better-informed decisions',
                ],
                'stats' => [
                    ['value' => '24/7', 'label' => 'Infrastructure monitoring'],
                    ['value' => 'AI', 'label' => 'Failure prediction'],
                    ['value' => 'IoT', 'label' => 'Field signals'],
                ],
                'features' => [
                    'Real-Time Monitoring',
                    'Intelligent Alerts',
                    'Data Analytics',
                    'Infrastructure Mapping',
                ],
                'capabilities_title' => 'What AquaWatch AI actually does',
                'capabilities' => [
                    ['title' => 'Real-Time Monitoring', 'text' => 'Continuous visibility into infrastructure status as conditions change.'],
                    ['title' => 'Intelligent Alerts', 'text' => 'AI-assisted detection flags anomalies before they become failures.'],
                    ['title' => 'Data Analytics', 'text' => 'Historical and live data combined into clear operational insight.'],
                    ['title' => 'Infrastructure Mapping', 'text' => 'A geographic view of monitored assets and their current status.'],
                ],
                'gallery_title' => 'See AquaWatch AI in the field',
                'gallery_intro' => 'Platform screenshots and real deployment photography will populate this gallery as they become available.',
                'workflow' => [
                    'Sensors & Field Equipment',
                    'Gateway & Connectivity',
                    'DigiTexia Platform',
                    'AI Data Processing',
                    'Dashboard & Alerts',
                    'Operational Decision-Making',
                ],
                'tech_intro' => 'Capabilities that power AquaWatch AI, not a list of frameworks, but what the platform is actually able to do.',
                'tech_tags' => ['IoT', 'Artificial Intelligence', 'Cloud Infrastructure', 'Real-Time Monitoring'],
                'impact_title' => 'Where AquaWatch AI stands today',
                'impact_text' => 'AquaWatch AI is currently at prototype stage. Verified operational results will be published once field deployment data is available.',
                'cta_title' => 'Interested in monitoring your infrastructure differently?',
                'cta_text' => "Whether AquaWatch AI is the right fit as-is or a starting point for something more tailored, we're glad to talk it through.",
            ],
            'wastepay' => [
                'title' => 'WastePay',
                'page_title' => 'WastePay - DigiTexia',
                'eyebrow' => 'Waste Intelligence',
                'icon' => 'ti-recycle',
                'accent' => '#00BF63',
                'accent_soft' => 'rgba(0,191,99,.14)',
                'status' => 'Prototype',
                'status_color' => 'gold',
                'industry' => 'Waste Operators & Circular Economy Programs',
                'tagline' => 'Smart waste tracking and recycling incentive infrastructure.',
                'positioning' => 'Verify collection. Reward recycling. Turn waste flows into usable data.',
                'summary' => 'Smart waste management infrastructure using QR tracking, verified collection and incentives for recycling participation.',
                'problem' => 'Waste collection and recycling programs lack reliable traceability, making it hard to verify flows, reward behavior and optimize operations.',
                'solution' => 'WastePay structures collection data, QR verification and incentive workflows into one auditable waste intelligence system.',
                'audience' => 'Municipalities, waste operators, circular economy programs, NGOs and private sector recycling initiatives.',
                'cta_primary' => 'Want to make waste collection more traceable?',
                'overview_title' => "What WastePay is, and who it's for",
                'overview' => [
                    ['label' => 'Designed for', 'text' => 'Cities, waste operators and circular economy programs that need verified collection and recycling participation data.'],
                    ['label' => 'Problem addressed', 'text' => 'Waste flows are hard to verify when collection, recycling and incentives are tracked manually or across disconnected systems.'],
                    ['label' => 'Value delivered', 'text' => 'A structured waste intelligence layer that makes collection auditable and recycling incentives easier to manage.'],
                ],
                'challenge_title' => 'Why WastePay exists',
                'challenge_text' => 'Waste operations often lack trusted data on collection, recycling behavior and field execution. Without traceability, operators struggle to reward participation, prove impact and improve routes.',
                'challenge_points' => [
                    'Collection activity difficult to verify reliably',
                    'Recycling participation tracked manually',
                    'Limited visibility into routes, volumes and operator performance',
                    'Incentive programs hard to audit and scale',
                ],
                'solution_text' => 'WastePay combines QR tracking, verified collection records and incentive logic into a single operational system for waste and circular economy programs.',
                'solution_points' => [
                    'QR-based verification of collection and recycling flows',
                    'Incentive logic for citizens, collectors and partners',
                    'Operational dashboards for routes, volumes and participation',
                    'Auditable data for reporting and circular economy programs',
                ],
                'stats' => [
                    ['value' => 'QR', 'label' => 'Traceability'],
                    ['value' => '100%', 'label' => 'Verified flows'],
                    ['value' => 'Live', 'label' => 'Collection data'],
                ],
                'features' => [
                    'QR Tracking',
                    'Recycling Incentives',
                    'Operator Dashboards',
                    'Auditable Reporting',
                ],
                'capabilities_title' => 'What WastePay actually does',
                'capabilities' => [
                    ['title' => 'QR Tracking', 'text' => 'Verify collection and recycling activity with structured QR records.'],
                    ['title' => 'Recycling Incentives', 'text' => 'Reward participation through traceable incentive workflows.'],
                    ['title' => 'Operator Dashboards', 'text' => 'Track routes, volumes, participation and collection performance.'],
                    ['title' => 'Auditable Reporting', 'text' => 'Turn field activity into reliable circular economy reporting data.'],
                ],
                'gallery_title' => 'See WastePay in the field',
                'gallery_intro' => 'Platform screenshots and deployment photography will populate this gallery as the product moves through field pilots.',
                'workflow' => [
                    'Waste Collection',
                    'QR Verification',
                    'Volume & Participation Data',
                    'Incentive Processing',
                    'Operational Reporting',
                ],
                'tech_intro' => 'Capabilities that power WastePay, not a list of frameworks, but what the platform is actually able to do.',
                'tech_tags' => ['QR Traceability', 'Incentive Workflows', 'Dashboards', 'Circular Economy Data'],
                'impact_title' => 'Where WastePay stands today',
                'impact_text' => 'WastePay is currently at prototype stage. Verified operational results will be published once field deployment data is available.',
                'cta_title' => 'Want to make waste collection more traceable?',
                'cta_text' => "Whether WastePay is the right fit as-is or a starting point for something more tailored, we're glad to talk it through.",
            ],
            'performia' => [
                'title' => 'Performia',
                'page_title' => 'Performia - DigiTexia',
                'eyebrow' => 'Performance Intelligence',
                'icon' => 'ti-chart-bar',
                'accent' => '#F59E0B',
                'accent_soft' => 'rgba(245,158,11,.14)',
                'status' => 'Deployed',
                'status_color' => 'teal',
                'industry' => 'Enterprise & Public Institutions',
                'tagline' => 'Performance and execution management for teams and institutions.',
                'positioning' => 'Turn execution into something you can see, measure and manage.',
                'summary' => 'A performance and workforce execution platform for teams that need structured task delegation, KPI visibility, attendance tracking and operational accountability.',
                'problem' => 'When tasks, attendance and evaluations are tracked manually, managers lose visibility and performance decisions become slow and inconsistent.',
                'solution' => 'Performia centralizes task execution, attendance, KPI tracking and staff evaluation into one operational management system.',
                'audience' => 'Institutions managing teams, KPIs and organizational efficiency.',
                'cta_primary' => "Want structured visibility into your team's performance?",
                'overview_title' => "What Performia is, and who it's for",
                'overview' => [
                    ['label' => 'Designed for', 'text' => 'Institutions managing teams, KPIs and organizational efficiency.'],
                    ['label' => 'Problem addressed', 'text' => 'Leaders often lack real-time, structured visibility into how their teams are actually executing against goals.'],
                    ['label' => 'Value delivered', 'text' => 'Live performance dashboards that turn day-to-day execution into a measurable, manageable asset.'],
                ],
                'challenge_title' => 'Why Performia exists',
                'challenge_text' => 'When performance is only reviewed periodically, problems surface too late to correct and good work goes unrecognized in the moment. Leaders need a live picture of execution, not a quarterly reconstruction of it.',
                'challenge_points' => [
                    'Performance tracked manually, often only at review time',
                    'KPIs scattered across spreadsheets and reports',
                    'Leaders lack real-time visibility into execution',
                    'Recognition and course-correction happen too late',
                ],
                'solution_text' => 'Performia assigns and tracks workflows and KPIs in one system, giving leadership a live dashboard of execution, so course-correction and recognition can happen while they still matter.',
                'solution_points' => [
                    'Workflows and KPIs assigned and tracked in one place',
                    'Real-time dashboards for leadership visibility',
                    'Structured, continuous performance evaluation',
                    'Data that supports timely course-correction',
                ],
                'stats' => [
                    ['value' => 'KPI', 'label' => 'Performance tracking'],
                    ['value' => 'Live', 'label' => 'Team visibility'],
                    ['value' => 'HR', 'label' => 'Staff evaluation'],
                ],
                'features' => [
                    'KPI Tracking',
                    'Live Dashboards',
                    'Workflow Assignment',
                    'Performance Reporting',
                ],
                'capabilities_title' => 'What Performia actually does',
                'capabilities' => [
                    ['title' => 'KPI Tracking', 'text' => 'Assign and monitor key performance indicators continuously.'],
                    ['title' => 'Live Dashboards', 'text' => 'Real-time visibility into team and individual execution.'],
                    ['title' => 'Workflow Assignment', 'text' => 'Assign, track and follow up on tasks in one system.'],
                    ['title' => 'Performance Reporting', 'text' => 'Structured reporting for reviews and planning.'],
                ],
                'gallery_title' => 'See Performia in the field',
                'gallery_intro' => 'Platform screenshots and real deployment photography will populate this gallery as they become available.',
                'credibility' => [
                    'label' => 'Verified deployment',
                    'text' => 'Performia has been deployed to support structured, auditable performance management within a regulated financial institution.',
                    'meta' => [
                        ['label' => 'Client', 'value' => 'CREMIN-CAM'],
                        ['label' => 'Sector', 'value' => 'Financial Services'],
                    ],
                ],
                'workflow' => [
                    'Task & KPI Assignment',
                    'Execution Tracking',
                    'Performance Data Collection',
                    'Live Dashboard',
                    'Management Review',
                ],
                'tech_intro' => 'Capabilities that power Performia, not a list of frameworks, but what the platform is actually able to do.',
                'tech_tags' => ['Cloud Infrastructure', 'Real-Time Dashboards', 'Analytics', 'Mobile Access'],
                'impact_title' => 'Where Performia stands today',
                'impact_text' => 'Performia is deployed and operational, including within regulated financial-sector environments.',
                'cta_title' => "Want structured visibility into your team's performance?",
                'cta_text' => "Whether Performia is the right fit as-is or a starting point for something more tailored, we're glad to talk it through.",
            ],
            'flexicare' => [
                'title' => 'FlexiCare',
                'page_title' => 'FlexiCare - DigiTexia',
                'eyebrow' => 'Household & Care Services',
                'icon' => 'ti-users',
                'accent' => '#7C3AED',
                'accent_soft' => 'rgba(124,58,237,.14)',
                'status' => 'Product in development',
                'status_color' => 'dim',
                'industry' => 'Trusted household services',
                'tagline' => 'Connecting households with trusted care and domestic professionals.',
                'positioning' => 'A trusted digital platform for household and care services.',
                'summary' => 'FlexiCare is designed to simplify how households discover, verify and connect with qualified professionals for childcare, domestic support and care services.',
                'problem' => 'Finding reliable household support often depends on informal recommendations, limited information and unstructured conversations.',
                'solution' => 'FlexiCare creates a structured digital environment for discovery, verification, matching, communication, service requests and feedback.',
                'audience' => 'Households, families, nannies, domestic workers, housekeepers, caregivers and household support professionals.',
                'cta_primary' => 'Discover FlexiCare',
                'overview_title' => "What FlexiCare is, and who it's for",
                'overview' => [
                    ['label' => 'Designed for', 'text' => 'Households seeking reliable childcare, housekeeping, domestic assistance, elderly care and everyday household support.'],
                    ['label' => 'Problem addressed', 'text' => 'Households lack structured ways to evaluate identity, experience, availability, reliability, references, pricing and expectations.'],
                    ['label' => 'Value delivered', 'text' => 'A trust-centered platform that helps households and professionals connect with more clarity, safety and transparency.'],
                ],
                'challenge_title' => 'The challenge',
                'challenge_text' => 'Across many communities, household and care services are still found through personal networks, social media, word of mouth and informal recommendations. That makes it difficult for households to compare professionals confidently, while capable workers struggle to build a trusted profile and access reliable opportunities.',
                'challenge_points' => [
                    'Households have limited visibility into identity, experience and references',
                    'Availability, pricing and expectations are often discussed informally',
                    'Professionals lack a structured profile to present their skills and experience',
                    'Trust is difficult to build when feedback and service history are scattered',
                ],
                'solution_text' => 'FlexiCare is being designed as a marketplace and trust infrastructure where households can discover relevant professionals, review profiles, understand skills and availability, request support, communicate and share feedback after the service.',
                'solution_points' => [
                    'Structured professional profiles for skills, experience and availability',
                    'Search and discovery for childcare, domestic support and care services',
                    'Communication and service request workflows for households and professionals',
                    'Verified feedback designed to help build professional reputation over time',
                ],
                'stats' => [
                    ['value' => '2', 'label' => 'Marketplace sides'],
                    ['value' => '5', 'label' => 'Core service steps'],
                    ['value' => 'Trust', 'label' => 'Product foundation'],
                ],
                'features' => [
                    'Professional Profiles',
                    'Search & Discovery',
                    'Verification & Trust',
                    'Messaging',
                ],
                'capabilities_title' => 'What FlexiCare is being designed to do',
                'capabilities' => [
                    ['title' => 'Professional Profiles', 'text' => 'Structured profiles showing services, skills, experience, references and availability.'],
                    ['title' => 'Search & Discovery', 'text' => 'Help households find relevant professionals for childcare, housekeeping, domestic assistance and care services.'],
                    ['title' => 'Verification & Trust', 'text' => 'Designed to incorporate verification mechanisms that help households make more informed decisions.'],
                    ['title' => 'Messaging & Service Requests', 'text' => 'Enable households and professionals to communicate, arrange services and clarify expectations in one place.'],
                    ['title' => 'Ratings & Reviews', 'text' => 'Support reputation building through verified feedback and service history as the platform evolves.'],
                    ['title' => 'Account Management', 'text' => 'Separate experiences for households and professionals, aligned with each side of the marketplace.'],
                ],
                'gallery_title' => 'FlexiCare product visuals',
                'gallery_intro' => 'Real platform visuals will be added as the product is designed and developed. DigiTexia will use this space for genuine web, mobile and dashboard screenshots as they become available.',
                'workflow' => [
                    'Discover',
                    'Compare',
                    'Connect',
                    'Book',
                    'Build Trust',
                ],
                'tech_intro' => 'FlexiCare is planned around practical product capabilities: web and mobile access, secure backend infrastructure, structured data management, notifications, analytics and scalable marketplace architecture.',
                'tech_tags' => ['Web Platform', 'Mobile Experience', 'Secure Backend', 'Data Management', 'Matching & Recommendation', 'Notifications', 'Analytics'],
                'impact_title' => 'Where FlexiCare stands today',
                'impact_text' => 'FlexiCare is currently being designed and developed by DigiTexia. The product aims to improve access to household services, increase visibility for professionals and support the professionalization of domestic and care work.',
                'cta_title' => 'Interested in the future of trusted household services?',
                'cta_text' => 'FlexiCare is still in development. DigiTexia is open to conversations with households, professionals, agencies and partners who want to help shape a safer and more transparent service ecosystem.',
            ],
        ];
    }
}
