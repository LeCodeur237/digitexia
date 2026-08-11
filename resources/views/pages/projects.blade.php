@extends('index')

@section('page_title', __('DigiTexia | Projects and Digital Infrastructure Portfolio'))
@section('digitexia_v2', true)

@push('styles')
<link rel="stylesheet" href="{{ asset('css/projects-v2.css') }}?v={{ filemtime(public_path('css/projects-v2.css')) }}">
@endpush

@php
    $flagshipProjects = [
        [
            'tag' => __('FLAGSHIP / AQUAWATCH AI'),
            'name' => 'AquaWatch AI',
            'positioning' => __('An AI-powered water monitoring and operational intelligence platform.'),
            'link' => url('/solutions/aquawatch-ai'),
            'rows' => [
                [__('Problem'), __('Water infrastructure is hard to monitor manually, so losses and failures go undetected too long.')],
                [__('Designed for'), __('Utilities and organizations managing water infrastructure.')],
                [__('Value created'), __('Improved resource management and faster, better-informed decisions.')],
                [__('Why innovative'), __('Applies AI-driven monitoring to infrastructure that has long relied on manual inspection.')],
            ],
        ],
        [
            'tag' => __('FLAGSHIP / WASTEPAY'),
            'name' => 'WastePay',
            'positioning' => __('A smart waste management system using QR tracking and recycling incentives.'),
            'link' => url('/solutions/wastepay'),
            'rows' => [
                [__('Problem'), __('Waste collection and recycling programs lack reliable traceability and incentive structures.')],
                [__('Designed for'), __('Municipalities, waste operators, NGOs and circular economy initiatives.')],
                [__('Value created'), __('Verified waste flows, stronger citizen participation and clearer operational reporting.')],
                [__('Why innovative'), __('Connects field collection, QR verification and incentive logic in one digital workflow.')],
            ],
        ],
        [
            'tag' => __('FLAGSHIP / CARBON AFRICA EXCHANGE'),
            'name' => 'Carbon Africa Exchange',
            'positioning' => __('Carbon tracking and marketplace infrastructure for climate programs.'),
            'link' => url('/solutions/carbon-africa-exchange'),
            'rows' => [
                [__('Problem'), __('Forest, agriculture and carbon data are difficult to structure, verify and monetize responsibly.')],
                [__('Designed for'), __('Climate programs, land projects, development agencies and ESG teams.')],
                [__('Value created'), __('Structured carbon intelligence and a foundation for trusted carbon credit workflows.')],
                [__('Why innovative'), __('Builds climate data infrastructure designed for African territory realities.')],
            ],
        ],
        [
            'tag' => __('FLAGSHIP / DIGITAL TWIN PLATFORM'),
            'name' => 'Digital Twin Platform',
            'positioning' => __('A territorial intelligence layer for infrastructure, services and field data.'),
            'link' => url('/solutions/digital-twin-platform'),
            'rows' => [
                [__('Problem'), __('Governments and institutions lack real-time intelligence across distributed infrastructure.')],
                [__('Designed for'), __('Governments, cities, NGOs and infrastructure operators.')],
                [__('Value created'), __('Better planning, live monitoring and data-backed public decisions.')],
                [__('Why innovative'), __('Turns fragmented field data into a digital nervous system for territories.')],
            ],
        ],
    ];

    $clientProjects = [
        [
            'tag' => __('CLIENT / GOVERNMENT'),
            'name' => 'YouthConnekt Cameroun',
            'positioning' => __('A national digital platform connecting Cameroonian youth to opportunity.'),
            'link' => url('/contact-us'),
            'rows' => [
                [__('Challenge'), __('No centralized digital platform existed to connect youth with government programs and opportunities.')],
                [__('Objective'), __('Build a modern, scalable public platform reflecting national identity and government standards.')],
                [__('Value delivered'), __('An accessible digital front door connecting youth across Cameroon to opportunity, on infrastructure ready to scale nationally.')],
            ],
        ],
        [
            'tag' => __('CLIENT / FINANCIAL SERVICES'),
            'name' => 'CREMIN-CAM Performance Deployment',
            'positioning' => __('A tailored Performia deployment for a regulated financial institution.'),
            'link' => 'https://www.cremin-cam.org',
            'rows' => [
                [__('Challenge'), __('Manual performance tracking limited visibility into staff execution and KPIs.')],
                [__('Objective'), __('Deploy a performance management platform tailored to the institution operating model.')],
                [__('Value delivered'), __('Real-time performance visibility and structured, auditable workforce management.')],
            ],
        ],
        [
            'tag' => __('CLIENT / PROFESSIONAL ASSOCIATION'),
            'name' => 'APEC Cameroun Digital Presence',
            'positioning' => __('A modernized digital identity for a national professional association.'),
            'link' => 'https://web.facebook.com/profile.php?id=61575062085703&locale=fr_FR',
            'rows' => [
                [__('Challenge'), __('An outdated digital presence weakened the association credibility with members and partners.')],
                [__('Objective'), __("Modernize the organization's digital identity to reflect its role and standing.")],
                [__('Value delivered'), __('A refreshed digital presence that strengthens credibility with members, partners and the public.')],
            ],
        ],
        [
            'tag' => __('CLIENT / ENTERPRISE'),
            'name' => 'Light Group Digital Platform',
            'positioning' => __('A cleaner digital presentation for an enterprise brand and its stakeholders.'),
            'link' => 'https://www.lightgroup.co.com/',
            'rows' => [
                [__('Challenge'), __('The brand needed a clearer online presentation aligned with its business credibility.')],
                [__('Objective'), __('Improve structure, visual hierarchy and access to key company information.')],
                [__('Value delivered'), __('A more professional digital experience for prospects, partners and stakeholders.')],
            ],
        ],
    ];

    $industries = [
        [__('Financial Services'), __('Secure, auditable systems for regulated institutions.')],
        [__('Healthcare'), __('Traceability and identity infrastructure for patient safety.')],
        [__('Water Utilities'), __('Monitoring and intelligence for critical infrastructure.')],
        [__('Government'), __('Transparent, scalable platforms for public institutions.')],
        [__('NGOs'), __('Accountable digital tools built for constrained budgets.')],
        [__('Education'), __('Digital systems that scale across institutions and regions.')],
        [__('SMEs'), __('Enterprise-grade capability sized for growing businesses.')],
        [__('Enterprise'), __('Custom infrastructure for complex, large-scale operations.')],
        [__('Industrial Operations'), __('Real-time visibility into physical, distributed workflows.')],
    ];
@endphp

@section('fullpage')
@include('partials.v2.header')

<main class="dx-projects">
    <section class="page-hero">
        <div class="dx-blueprint"></div>
        <div class="dx-container dx-reveal">
            <div class="dx-eyebrow">{{ __('Projects') }}</div>
            <h1>{{ __('A portfolio of digital solutions built to solve real operational challenges.') }}</h1>
            <p class="page-hero-subtitle">
                {{ __('From proprietary products to tailored enterprise platforms, every DigiTexia project reflects the same discipline: engineering excellence in service of measurable business impact.') }}
            </p>
            <div class="page-hero-cta">
                <a href="#flagship" class="dx-btn dx-btn-primary">
                    {{ __('View Portfolio') }}
                    <span class="dx-btn-arrow" aria-hidden="true">&rarr;</span>
                </a>
                <a href="#cta-final" class="dx-btn dx-btn-secondary">{{ __('Discuss Your Project') }}</a>
            </div>
        </div>
    </section>

    <section class="company-intro">
        <div class="dx-container dx-reveal">
            <div class="dx-eyebrow">{{ __('Our portfolio') }}</div>
            <h2>{{ __('We build proprietary products and tailored enterprise solutions, and hold both to the same standard.') }}</h2>
            <p class="lead">
                {{ __('Every project starts from a real operational need, not a technology looking for a use case. Whether we deploy a proven product or engineer a custom platform, the objective is the same: infrastructure designed to deliver long-term value.') }}
            </p>
            <div class="brand-signature">{{ __('Building AI-powered digital infrastructure for Africa.') }}</div>
        </div>
    </section>

    <section class="dx-section" id="flagship">
        <div class="dx-container">
            <div class="dx-section-head dx-reveal">
                <div class="dx-eyebrow">{{ __('Flagship solutions') }}</div>
                <h2>{{ __('Proprietary digital products, deployed and proven') }}</h2>
                <p class="dx-section-intro">
                    {{ __('Four platforms engineered for critical infrastructure challenges across Africa.') }}
                </p>
            </div>

            <div class="portfolio-grid dx-reveal">
                @foreach ($flagshipProjects as $project)
                    <article class="project-card">
                        <div class="project-tag">{{ $project['tag'] }}</div>
                        <h3>{{ $project['name'] }}</h3>
                        <p class="positioning">{{ $project['positioning'] }}</p>
                        <div class="field-list">
                            @foreach ($project['rows'] as $row)
                                <div class="field-row">
                                    <span class="field-label">{{ $row[0] }}</span>
                                    <span>{{ $row[1] }}</span>
                                </div>
                            @endforeach
                        </div>
                        <div class="project-link">
                            <a href="{{ $project['link'] }}" class="dx-card-link">{{ __('Learn more') }} <span aria-hidden="true">&rarr;</span></a>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="dx-section dx-section-alt">
        <div class="dx-container">
            <div class="dx-section-head dx-reveal">
                <div class="dx-eyebrow">{{ __('Client solutions') }}</div>
                <h2>{{ __('Custom platforms, built around real business transformation') }}</h2>
                <p class="dx-section-intro">
                    {{ __('Beyond our own products, we engineer bespoke digital infrastructure for organizations with specific operational requirements.') }}
                </p>
            </div>

            <div class="portfolio-grid dx-reveal">
                @foreach ($clientProjects as $project)
                    <article class="project-card">
                        <div class="project-tag">{{ $project['tag'] }}</div>
                        <h3>{{ $project['name'] }}</h3>
                        <p class="positioning">{{ $project['positioning'] }}</p>
                        <div class="field-list">
                            @foreach ($project['rows'] as $row)
                                <div class="field-row">
                                    <span class="field-label">{{ $row[0] }}</span>
                                    <span>{{ $row[1] }}</span>
                                </div>
                            @endforeach
                        </div>
                        <div class="project-link">
                            <a href="{{ $project['link'] }}" class="dx-card-link" @if (str_starts_with($project['link'], 'http')) target="_blank" rel="noreferrer" @endif>
                                {{ __('Open project') }} <span aria-hidden="true">&rarr;</span>
                            </a>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="dx-section">
        <div class="dx-container dx-reveal">
            <div class="innovation-panel">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.3" aria-hidden="true"><path d="M13 2 4 14h6l-1 8 9-12h-6l1-8z"/></svg>
                <div>
                    <h3>{{ __('Innovation is not a department. It is how we work.') }}</h3>
                    <p>
                        {{ __("DigiTexia continuously invests in innovation to build digital solutions that address Africa's evolving operational realities: scalable technologies designed for long-term impact, not short-term novelty.") }}
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="dx-section dx-section-alt">
        <div class="dx-container">
            <div class="dx-section-head dx-reveal">
                <div class="dx-eyebrow">{{ __('Industries served') }}</div>
                <h2>{{ __('Portfolio experience across Africa strategic sectors') }}</h2>
                <p class="dx-section-intro">
                    {{ __('Every project deepens our understanding of the operational realities specific to each industry.') }}
                </p>
            </div>

            <div class="industries-grid dx-reveal">
                @foreach ($industries as $industry)
                    <article class="industry-card">
                        <h3>{{ $industry[0] }}</h3>
                        <p>{{ $industry[1] }}</p>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="dx-final-cta" id="cta-final">
        <div class="dx-container dx-reveal">
            <div class="dx-eyebrow">{{ __('Let us build') }}</div>
            <h2>{{ __('Let us design your next digital solution') }}</h2>
            <p class="dx-cta-subheading">
                {{ __('Every project in this portfolio started with a conversation about a real operational challenge.') }}
            </p>
            <p class="dx-cta-description">
                {{ __('If your organization is facing one, we can discuss it and share how a similar solution might apply to your context.') }}
            </p>
            <div class="dx-cta-buttons">
                <a href="tel:+237650945280" class="dx-btn dx-btn-primary">{{ __('Call (+237) 650 945 280') }}</a>
                <a href="{{ url('/contact-us') }}" class="dx-btn dx-btn-secondary">{{ __('Discuss Your Project') }}</a>
            </div>
        </div>
    </section>
</main>

@include('partials.v2.footer')
@endsection
