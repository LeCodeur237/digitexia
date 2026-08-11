@extends('index')

@section('page_title', __('DigiTexia | The Problem - The Cost of Operational Fragmentation'))
@section('digitexia_v2', true)

@push('styles')
<link rel="stylesheet" href="{{ asset('css/problem-v2.css') }}?v={{ filemtime(public_path('css/problem-v2.css')) }}">
@endpush

@section('fullpage')
@php
    $warningIcon = '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" aria-hidden="true"><path d="M12 3 2 20h20L12 3z"/><path d="M12 10v4M12 17h.01"/></svg>';
    $xCircleIcon = '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="m15 9-6 6M9 9l6 6"/></svg>';
    $checkCircleIcon = '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" aria-hidden="true"><path d="m9 12 2 2 4-4"/><circle cx="12" cy="12" r="10"/></svg>';
@endphp

@include('partials.v2.header')

<main class="dx-problem">
    <section class="page-hero">
        <div class="dx-blueprint"></div>
        <div class="dx-container dx-reveal">
            <div class="dx-eyebrow">{{ __('The problem') }}</div>
            <h1>{{ __('Operational fragmentation is quietly costing you the advantage.') }}</h1>
            <p class="page-hero-subtitle">
                {{ __('Most organizations do not lose ground in one dramatic failure. They lose it gradually in disconnected spreadsheets, delayed approvals and decisions made on data that is already out of date. DigiTexia exists to close that gap.') }}
            </p>
            <div class="page-hero-cta">
                <a href="#assessment" class="dx-btn dx-btn-primary">
                    {{ __('Request an Assessment') }}
                    <span class="dx-btn-arrow" aria-hidden="true">&rarr;</span>
                </a>
                <a href="{{ url('/solutions') }}" class="dx-btn dx-btn-secondary">{{ __('See Our Solutions') }}</a>
            </div>
        </div>
    </section>

    <section class="dx-section problem-diagram-section">
        <div class="dx-container">
            <div class="dx-section-head center dx-reveal">
                <div class="dx-eyebrow">{{ __('How fragmentation happens') }}</div>
                <h2>{{ __('When systems do not talk to each other, everything slows down.') }}</h2>
                <p class="dx-section-intro">
                    {{ __('Every disconnected tool creates a small delay. Together, they compound into an organization that reacts instead of leads.') }}
                </p>
            </div>

            <div class="diagram-panel dx-reveal">
                <div class="diagram-col bad">
                    <div class="diagram-label">{{ __('Fragmented operations') }}</div>
                    <svg class="diagram-svg" viewBox="0 0 240 180" width="100%" height="auto" role="img" aria-label="{{ __('Fragmented operations diagram') }}">
                        <g stroke="#E2665A" stroke-width="1.2" stroke-dasharray="3 4" opacity="0.6">
                            <line x1="40" y1="30" x2="110" y2="70"/>
                            <line x1="200" y1="35" x2="150" y2="80"/>
                            <line x1="30" y1="140" x2="95" y2="100"/>
                            <line x1="210" y1="145" x2="160" y2="105"/>
                        </g>
                        <g fill="none" stroke="#E2665A" stroke-width="1.4">
                            <rect x="12" y="14" width="56" height="32" rx="6"/>
                            <rect x="172" y="18" width="56" height="32" rx="6"/>
                            <rect x="4" y="124" width="56" height="32" rx="6"/>
                            <rect x="182" y="128" width="56" height="32" rx="6"/>
                            <circle cx="122" cy="90" r="18"/>
                        </g>
                        <g font-family="IBM Plex Mono" font-size="8" fill="#94A1C2" text-anchor="middle">
                            <text x="40" y="34">{{ __('Sheets') }}</text>
                            <text x="200" y="38">{{ __('Email') }}</text>
                            <text x="32" y="144">{{ __('Paper') }}</text>
                            <text x="210" y="148">{{ __('Apps') }}</text>
                            <text x="122" y="94">?</text>
                        </g>
                    </svg>
                </div>

                <div class="diagram-divider" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4">
                        <path d="M5 12h14M13 6l6 6-6 6"/>
                    </svg>
                    <span>DigiTexia</span>
                </div>

                <div class="diagram-col good">
                    <div class="diagram-label">{{ __('Unified infrastructure') }}</div>
                    <svg class="diagram-svg" viewBox="0 0 240 180" width="100%" height="auto" role="img" aria-label="{{ __('Unified infrastructure diagram') }}">
                        <g stroke="#39D6B4" stroke-width="1.4">
                            <line x1="40" y1="30" x2="122" y2="90"/>
                            <line x1="200" y1="35" x2="122" y2="90"/>
                            <line x1="30" y1="140" x2="122" y2="90"/>
                            <line x1="210" y1="145" x2="122" y2="90"/>
                        </g>
                        <g fill="none" stroke="#E3A73C" stroke-width="1.4">
                            <rect x="12" y="14" width="56" height="32" rx="6"/>
                            <rect x="172" y="18" width="56" height="32" rx="6"/>
                            <rect x="4" y="124" width="56" height="32" rx="6"/>
                            <rect x="182" y="128" width="56" height="32" rx="6"/>
                        </g>
                        <circle cx="122" cy="90" r="20" fill="#0F1728" stroke="#39D6B4" stroke-width="1.6"/>
                        <g font-family="IBM Plex Mono" font-size="8" fill="#94A1C2" text-anchor="middle">
                            <text x="40" y="34">{{ __('Inventory') }}</text>
                            <text x="200" y="38">{{ __('Reports') }}</text>
                            <text x="32" y="144">{{ __('Approvals') }}</text>
                            <text x="210" y="148">{{ __('Records') }}</text>
                        </g>
                        <text x="122" y="94" font-family="IBM Plex Mono" font-size="9" fill="#39D6B4" text-anchor="middle">DGX</text>
                    </svg>
                </div>
            </div>
        </div>
    </section>

    <section class="dx-section dx-section-alt">
        <div class="dx-container">
            <div class="dx-section-head dx-reveal">
                <div class="dx-eyebrow">{{ __('The breakdown') }}</div>
                <h2>{{ __('Five ways fragmentation erodes your organization') }}</h2>
                <p class="dx-section-intro">
                    {{ __('When critical systems are not connected, organizations lose visibility, speed and competitive edge. Fragmentation compounds across teams, departments and systems.') }}
                </p>
            </div>

            <div class="problem-detail-grid dx-reveal">
                <div class="problem-detail">
                    <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" aria-hidden="true"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 3"/></svg>
                    <div>
                        <h3>{{ __('Delayed Decision-Making') }}</h3>
                        <p>{{ __('Leaders make decisions on outdated data. When real-time visibility does not exist, response times slow, risks compound and market opportunities disappear.') }}</p>
                    </div>
                    <div>
                        <div class="signals-label">{{ __('Signals to watch for') }}</div>
                        <ul class="signals-list">
                            <li>{!! $warningIcon !!}{{ __('Reports are assembled manually before every leadership meeting') }}</li>
                            <li>{!! $warningIcon !!}{{ __('Different teams work from different versions of the current numbers') }}</li>
                        </ul>
                    </div>
                </div>

                <div class="problem-detail">
                    <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" aria-hidden="true"><path d="M12 3 2 20h20L12 3z"/><path d="M12 10v4M12 17h.01"/></svg>
                    <div>
                        <h3>{{ __('Preventable Operational Errors') }}</h3>
                        <p>{{ __('Manual processes create errors. Duplicate entry, misaligned data and disconnected systems produce costly correction cycles and compliance exposure.') }}</p>
                    </div>
                    <div>
                        <div class="signals-label">{{ __('Signals to watch for') }}</div>
                        <ul class="signals-list">
                            <li>{!! $warningIcon !!}{{ __('The same data is entered into more than one system by hand') }}</li>
                            <li>{!! $warningIcon !!}{{ __('Errors are usually caught downstream, not at the point of entry') }}</li>
                        </ul>
                    </div>
                </div>

                <div class="problem-detail">
                    <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" aria-hidden="true"><circle cx="12" cy="12" r="9"/><path d="M8 8l8 8M8 16 12 12"/></svg>
                    <div>
                        <h3>{{ __('Wasted Execution Capacity') }}</h3>
                        <p>{{ __('Teams drown in manual work. Repetitive data entry, cross-checking and report assembly consume hours that could drive strategic impact.') }}</p>
                    </div>
                    <div>
                        <div class="signals-label">{{ __('Signals to watch for') }}</div>
                        <ul class="signals-list">
                            <li>{!! $warningIcon !!}{{ __('Skilled staff spend recurring blocks of time on repetitive administration') }}</li>
                            <li>{!! $warningIcon !!}{{ __('Month-end or quarter-end work requires a scramble every cycle') }}</li>
                        </ul>
                    </div>
                </div>

                <div class="problem-detail">
                    <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" aria-hidden="true"><path d="M2 12s3.5-7 10-7 10 7 10 7-3.5 7-10 7-10-7-10-7z"/><path d="m4 4 16 16"/></svg>
                    <div>
                        <h3>{{ __('Lost Organizational Visibility') }}</h3>
                        <p>{{ __('No single source of truth. When workflows live in scattered email, chat and files, approval delays and execution gaps multiply across teams.') }}</p>
                    </div>
                    <div>
                        <div class="signals-label">{{ __('Signals to watch for') }}</div>
                        <ul class="signals-list">
                            <li>{!! $warningIcon !!}{{ __('Finding the status of a task means asking someone directly') }}</li>
                            <li>{!! $warningIcon !!}{{ __('Leadership finds out about problems after they have already grown') }}</li>
                        </ul>
                    </div>
                </div>

                <div class="problem-detail">
                    <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" aria-hidden="true"><path d="M12 2 4 5v6c0 5.2 3.4 8.7 8 10 4.6-1.3 8-4.8 8-10V5l-8-3z"/><path d="M9 12h6M9 15h4"/></svg>
                    <div>
                        <h3>{{ __('Compliance and Audit Risk') }}</h3>
                        <p>{{ __('Regulatory exposure grows. Fragmented data across spreadsheets and email creates audit trails that are incomplete, unreliable and difficult to produce on demand.') }}</p>
                    </div>
                    <div>
                        <div class="signals-label">{{ __('Signals to watch for') }}</div>
                        <ul class="signals-list">
                            <li>{!! $warningIcon !!}{{ __('Preparing for an audit takes days of reconstructing records') }}</li>
                            <li>{!! $warningIcon !!}{{ __('No one can say with confidence who approved what, or when') }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="dx-section">
        <div class="dx-container">
            <div class="dx-section-head center dx-reveal">
                <div class="dx-eyebrow">{{ __('Before and after') }}</div>
                <h2>{{ __('What changes when operations are unified') }}</h2>
                <p class="dx-section-intro">
                    {{ __('The same organization, running on connected infrastructure instead of scattered systems.') }}
                </p>
            </div>

            <div class="compare-grid dx-reveal">
                <div class="compare-col without">
                    <div class="compare-head">
                        {!! $xCircleIcon !!}
                        <span>{{ __('Without unified infrastructure') }}</span>
                    </div>
                    <ul class="compare-list">
                        <li>{!! $xCircleIcon !!}<span><b>{{ __('Decisions lag behind reality.') }}</b> {{ __('Leaders act on previous-week numbers.') }}</span></li>
                        <li>{!! $xCircleIcon !!}<span><b>{{ __('Errors surface late.') }}</b> {{ __('Corrections cost more the longer they go unnoticed.') }}</span></li>
                        <li>{!! $xCircleIcon !!}<span><b>{{ __('Teams work in silos.') }}</b> {{ __('Information stalls between departments.') }}</span></li>
                        <li>{!! $xCircleIcon !!}<span><b>{{ __('Reporting is reactive.') }}</b> {{ __('Dashboards are rebuilt by hand, after the fact.') }}</span></li>
                        <li>{!! $xCircleIcon !!}<span><b>{{ __('Capacity leaks away.') }}</b> {{ __('High-value staff do low-value work.') }}</span></li>
                    </ul>
                </div>

                <div class="compare-col with">
                    <div class="compare-head">
                        {!! $checkCircleIcon !!}
                        <span>{{ __('With DigiTexia') }}</span>
                    </div>
                    <ul class="compare-list">
                        <li>{!! $checkCircleIcon !!}<span><b>{{ __('Automated Decision-Making.') }}</b> {{ __('Critical workflows run in real time, without manual intervention.') }}</span></li>
                        <li>{!! $checkCircleIcon !!}<span><b>{{ __('Near-Zero Operational Errors.') }}</b> {{ __('Automated validation and audit trails catch issues at the source.') }}</span></li>
                        <li>{!! $checkCircleIcon !!}<span><b>{{ __('Unified Team Intelligence.') }}</b> {{ __('Information flows across departments without friction.') }}</span></li>
                        <li>{!! $checkCircleIcon !!}<span><b>{{ __('Real-Time Executive Visibility.') }}</b> {{ __('Live dashboards replace outdated reports.') }}</span></li>
                        <li>{!! $checkCircleIcon !!}<span><b>{{ __('Sustainable Productivity Gains.') }}</b> {{ __('Teams reclaim hours for strategic, high-value work.') }}</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="dx-section dx-section-alt">
        <div class="dx-container">
            <div class="dx-section-head center dx-reveal">
                <div class="dx-eyebrow">{{ __('In plain terms') }}</div>
                <h2>{{ __('What fragmentation costs organizations') }}</h2>
            </div>

            <div class="stats-grid dx-reveal">
                <div class="stat-card">
                    <div class="stat-number">{{ __('Hours') }}</div>
                    <div class="stat-label">{{ __('Lost weekly to manual cross-checking and duplicate data entry') }}</div>
                    <div class="stat-descriptor">{{ __('Capacity') }}</div>
                </div>
                <div class="stat-card">
                    <div class="stat-number">{{ __('Days') }}</div>
                    <div class="stat-label">{{ __('Spent reconstructing records ahead of an audit or review') }}</div>
                    <div class="stat-descriptor">{{ __('Compliance') }}</div>
                </div>
                <div class="stat-card">
                    <div class="stat-number">{{ __('Weeks') }}</div>
                    <div class="stat-label">{{ __('Between an issue occurring and leadership becoming aware of it') }}</div>
                    <div class="stat-descriptor">{{ __('Visibility') }}</div>
                </div>
                <div class="stat-card">
                    <div class="stat-number">{{ __('Growing') }}</div>
                    <div class="stat-label">{{ __('Regulatory and reputational exposure with every disconnected system') }}</div>
                    <div class="stat-descriptor">{{ __('Risk') }}</div>
                </div>
            </div>
        </div>
    </section>

    <section class="dx-final-cta problem-final-cta" id="assessment">
        <div class="dx-container dx-reveal">
            <div class="dx-eyebrow">{{ __('Clarity before investment') }}</div>
            <h2>{{ __('We identify the highest-impact problem before recommending a solution') }}</h2>
            <p class="dx-cta-subheading">
                {{ __('No organization needs to fix everything at once. A strategic assessment shows exactly where fragmentation is costing the most and the fastest path to closing that gap.') }}
            </p>
            <p class="dx-cta-description">
                {{ __('In a working session with your team, we map your current operational model, identify the highest-impact workflow and recommend the optimal digital path: product, custom build or hybrid.') }}
            </p>
            <div class="dx-cta-buttons">
                <a href="tel:+237650945280" class="dx-btn dx-btn-primary">{{ __('Call (+237) 650 945 280') }}</a>
                <a href="{{ url('/contact-us') }}" class="dx-btn dx-btn-secondary">{{ __('Request an Assessment') }}</a>
            </div>
        </div>
    </section>
</main>

@include('partials.v2.footer')
@endsection
