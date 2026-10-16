@extends('index')

@section('page_title', __('DigiTexia | Projects and Digital Infrastructure Portfolio'))
@section('digitexia_v2', true)

@push('styles')
<link rel="stylesheet" href="{{ asset('css/projects-v2.css') }}?v={{ filemtime(public_path('css/projects-v2.css')) }}">
@endpush

@php
    $clientProjects = [
        [
            'tag' => __('CLIENT / FINANCIAL SERVICES'),
            'name' => 'CREMIN-CAM Perfomia Deployment',
            'image' => 'images/projets/perfomia-projets.png',
            'positioning' => __('A tailored Perfomia deployment for a regulated financial institution.'),
            'link' => 'https://perfomia.cremin-cam.org',
            'rows' => [
                [__('Challenge'), __('Manual performance tracking limited visibility into staff execution and KPIs.')],
                [__('Objective'), __('Deploy a performance management platform tailored to the institution operating model.')],
                [__('Value delivered'), __('Real-time performance visibility and structured, auditable workforce management.')],
            ],
        ],
        [
            'tag' => __('CLIENT / PROFESSIONAL ASSOCIATION'),
            'name' => 'APEC Cameroun Social Design',
            'image' => 'images/projets/apec-projets.png',
            'positioning' => __('Social media design management for LinkedIn and Facebook.'),
            'link' => 'https://web.facebook.com/profile.php?id=61575062085703&locale=fr_FR',
            'rows' => [
                [__('Challenge'), __('The association needed consistent, professional designs for its public communications.')],
                [__('Objective'), __('Create and manage designs for publication on LinkedIn and Facebook.')],
                [__('Value delivered'), __('A stronger social media presence with clear, recognizable and publication-ready visuals.')],
            ],
        ],
        [
            'tag' => __('CLIENT / ENTERPRISE'),
            'name' => 'Light Group Digital Platform',
            'image' => 'images/projets/lightgroup-projets.png',
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
        <div class="dx-container project-hero-grid dx-reveal">
            <div>
                <div class="dx-eyebrow">{{ __('Projects') }}</div>
                <h1>{{ __('Selected projects built around real operational needs.') }}</h1>
                <p class="page-hero-subtitle">
                    {{ __('Explore selected collaborations where DigiTexia helped organizations improve their digital presence, structure their operations and communicate with greater clarity.') }}
                </p>
                <div class="page-hero-cta">
                    <a href="#projects" class="dx-btn dx-btn-primary">
                        {{ __('View Projects') }}
                        <span class="dx-btn-arrow" aria-hidden="true">&rarr;</span>
                    </a>
                    <a href="#cta-final" class="dx-btn dx-btn-secondary">{{ __('Discuss Your Project') }}</a>
                </div>
            </div>
            <div class="project-hero-visual has-image" aria-label="{{ __('Projects context image') }}">
                <img src="{{ asset('images/projets/hero-projets.png') }}" alt="{{ __('DigiTexia project team and digital infrastructure') }}">
            </div>
        </div>
    </section>

    <section class="company-intro">
        <div class="dx-container project-intro-grid dx-reveal">
            <div class="project-intro-visual has-image" aria-label="{{ __('Project team image') }}">
                <img src="{{ asset('images/projets/equipe-projets.png') }}" alt="{{ __('DigiTexia team shaping digital projects') }}">
            </div>
            <div>
                <div class="dx-eyebrow">{{ __('Our work') }}</div>
                <h2>{{ __('Real projects, shaped around real organizations.') }}</h2>
                <p class="lead">
                    {{ __('Each realization starts with a concrete need, a defined audience and a clear business objective. The result is a digital asset designed to be useful, credible and ready for real-world use.') }}
                </p>
                <div class="brand-signature">{{ __('Building AI-powered digital infrastructure for Africa.') }}</div>
            </div>
        </div>
    </section>

    <section class="dx-section dx-section-alt projects-client" id="projects">
        <div class="dx-container">
            <div class="dx-section-head dx-reveal">
                <div class="dx-eyebrow">{{ __('Selected projects') }}</div>
                <h2>{{ __('Digital work delivered for organizations and their audiences') }}</h2>
                <p class="dx-section-intro">
                    {{ __('From platform deployment to social media design and digital presentation, these projects show how we turn a specific need into a practical result.') }}
                </p>
            </div>

            <div class="portfolio-grid dx-reveal">
                @foreach ($clientProjects as $project)
                    <article class="project-card">
                        <div class="project-visual has-image" aria-label="{{ $project['name'] }}">
                            <img src="{{ asset($project['image']) }}" alt="{{ $project['name'] }}">
                        </div>
                        <div class="project-card-copy">
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
            <div class="projects-cta-grid">
                <div class="projects-cta-copy">
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
                <div class="projects-cta-visual" aria-hidden="true">
                    <div class="projects-cta-grid-lines"></div>
                    <div class="projects-cta-panel">
                        <strong>{{ __('Let us build') }}</strong>
                        <p>{{ __('Every project in this portfolio started with a conversation about a real operational challenge.') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

@include('partials.v2.footer')
@endsection
