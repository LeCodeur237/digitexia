@extends('index')

@section('page_title', __('DigiTexia | AI-Powered Digital Infrastructure for Enterprise Operations'))
@section('digitexia_v2', true)

@push('styles')
<link rel="stylesheet" href="{{ asset('css/home-v2.css') }}?v={{ filemtime(public_path('css/home-v2.css')) }}">
@endpush

@php
    $needs = [
        [
            'title' => __('Water Infrastructure Monitoring'),
            'text' => __('Predict failures, monitor boreholes and improve visibility across rural and distributed water systems.'),
            'cta' => __('Discover AquaWatch AI'),
        ],
        [
            'title' => __('Waste & Circular Economy Operations'),
            'text' => __('Track waste flows, verify collection, structure recycling incentives and improve accountability across operators.'),
            'cta' => __('Discover WastePay'),
        ],
        [
            'title' => __('Service Operations Management'),
            'text' => __('Help households discover, compare and connect with trusted domestic and care professionals.'),
            'cta' => __('Discover Flexicare'),
        ],
        [
            'title' => __('Performance Execution Systems'),
            'text' => __('Structure tasks, attendance, KPI visibility and staff evaluation for distributed teams.'),
            'cta' => __('Explore Performia'),
        ],
    ];

    $problems = [
        [__('Delayed Decision-Making'), __('Leaders make decisions with outdated or incomplete data. Without real-time visibility, response times slow and operational risk grows.')],
        [__('Preventable Operational Errors'), __('Manual reporting and disconnected systems create duplicated work, data conflicts and expensive correction cycles.')],
        [__('Wasted Execution Capacity'), __('Teams spend time collecting, cleaning and checking information instead of improving service delivery.')],
        [__('Lost Infrastructure Visibility'), __('Critical assets are difficult to monitor when data is spread across spreadsheets, calls, field notes and isolated tools.')],
        [__('Compliance & Audit Risk'), __('Weak traceability makes it harder to prove what happened, when it happened and who validated it.')],
    ];

    $products = [
        [
            'tag' => __('PRODUCT / WATER-01'),
            'name' => 'AquaWatch AI',
            'link' => url('/solutions/aquawatch-ai'),
            'text' => __('Smart water monitoring for boreholes and rural systems, with IoT sensing and AI prediction of failures.'),
            'features' => [__('IoT monitoring'), __('Failure prediction')],
            'outcome' => __('Reduce downtime, improve maintenance planning and protect access to water.'),
        ],
        [
            'tag' => __('PRODUCT / WASTE-02'),
            'name' => 'WastePay',
            'link' => url('/solutions/wastepay'),
            'text' => __('Smart waste management with QR tracking, verified collection and incentives for recycling.'),
            'features' => [__('QR traceability'), __('Recycling incentives')],
            'outcome' => __('Improve collection transparency and increase circular economy participation.'),
        ],
        [
            'tag' => __('PRODUCT / SERVICE-03'),
            'name' => 'Flexicare',
            'link' => url('/solutions/flexicare'),
            'text' => __('Trusted household services platform for childcare, domestic support and care professionals.'),
            'features' => [__('Professional profiles'), __('Trust mechanisms')],
            'outcome' => __('Create safer connections between households and qualified professionals.'),
        ],
        [
            'tag' => __('PRODUCT / PERFORMANCE-04'),
            'name' => 'Performia',
            'link' => url('/solutions/performia'),
            'text' => __('Performance and workforce execution platform for task delegation, attendance, KPIs and staff evaluation.'),
            'features' => [__('KPI dashboards'), __('Staff evaluation')],
            'outcome' => __('Give managers clearer execution visibility and faster performance decisions.'),
        ],
    ];
@endphp

@section('fullpage')
@include('partials.v2.header')

<main class="dx-home">
    <section class="hero">
        <div class="dx-blueprint"></div>
        <div class="dx-container hero-grid">
            <div class="hero-content dx-reveal">
                <div class="dx-eyebrow">{{ __('Digital infrastructure') }} &middot; {{ __('Africa') }}</div>
                <h1>{{ __('AI-powered digital infrastructure for African operations') }}</h1>
                <p class="hero-subtitle">
                    {{ __('DigiTexia designs and deploys intelligent systems that help governments, NGOs and enterprises monitor infrastructure, structure data and make faster operational decisions.') }}
                </p>
                <div class="hero-meta">
                    <span>{{ __('AI and IoT systems') }}</span>
                    <span>{{ __('Secure data infrastructure') }}</span>
                    <span>{{ __('Real-time analytics') }}</span>
                </div>
                <div class="hero-cta">
                    <a href="#cta-final" class="dx-btn dx-btn-primary">{{ __('Schedule a Consultation') }} <span class="dx-btn-arrow">&rarr;</span></a>
                    <a href="#solutions" class="dx-btn dx-btn-secondary">{{ __('Explore Our Solutions') }}</a>
                </div>
            </div>

            <div class="hero-visual dx-reveal">
                <div class="console">
                    <div class="console-top">
                        <span class="console-title">{{ __('DIGITEXIA') }} &middot; {{ __('INFRASTRUCTURE CONSOLE') }}</span>
                        <span class="console-status"><span class="dot-live"></span>{{ __('LIVE SIGNALS') }}</span>
                    </div>
                    <div class="console-tabs">
                        <span class="active">{{ __('Water') }}</span>
                        <span>{{ __('Waste') }}</span>
                        <span>{{ __('Carbon') }}</span>
                        <span>{{ __('Cities') }}</span>
                        <span>{{ __('Reports') }}</span>
                    </div>
                    <div class="console-metrics">
                        <div class="metric">
                            <div class="metric-value" data-count="2847">0</div>
                            <div class="metric-label">{{ __('Field signals processed') }}</div>
                            <div class="metric-change">&uarr; 18.2%</div>
                        </div>
                        <div class="metric">
                            <div class="metric-value" data-count="94" data-suffix="%">0</div>
                            <div class="metric-label">{{ __('Data reliability') }}</div>
                            <div class="metric-change">&uarr; 6.4%</div>
                        </div>
                        <div class="metric">
                            <div class="metric-value" data-count="0.3" data-suffix="%" data-decimals="1">0</div>
                            <div class="metric-label">{{ __('Manual error rate') }}</div>
                            <div class="metric-change down">&darr; 91%</div>
                        </div>
                        <div class="metric">
                            <div class="metric-value" data-count="312">0</div>
                            <div class="metric-label">{{ __('Connected assets') }}</div>
                            <div class="metric-change">&uarr; 24%</div>
                        </div>
                    </div>
                    <div class="console-footer">
                        <span>{{ __('Infrastructure intelligence') }} &middot; {{ __('last 12 weeks') }}</span>
                        <svg class="spark" width="90" height="26" viewBox="0 0 90 26" fill="none" aria-hidden="true">
                            <polyline points="0,20 12,17 24,19 36,10 48,13 60,6 72,9 90,2" stroke="#39D6B4" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="ticker-wrap">
        <div class="ticker-track">
            <span>AquaWatch AI <b>{{ __('monitoring') }}</b></span>
            <span>WastePay <b>{{ __('traceability') }}</b></span>
            <span>Flexicare <b>{{ __('services') }}</b></span>
            <span>Performia <b>{{ __('performance') }}</b></span>
            <span>{{ __('Built for African operations') }} <b>99.98%</b></span>
            <span>AquaWatch AI <b>{{ __('monitoring') }}</b></span>
            <span>WastePay <b>{{ __('traceability') }}</b></span>
            <span>Flexicare <b>{{ __('services') }}</b></span>
            <span>Performia <b>{{ __('performance') }}</b></span>
            <span>{{ __('Built for African operations') }} <b>99.98%</b></span>
        </div>
    </div>

    <section class="company-intro">
        <div class="dx-container">
            <div class="dx-eyebrow dx-eyebrow-center">{{ __('Who we are') }}</div>
            <h2>{{ __('DigiTexia is a technology company that designs, engineers and deploys AI-powered digital infrastructure for African organizations that need stronger operational intelligence.') }}</h2>
            <p class="lead">{{ __('We combine field data, automation, cloud systems and decision dashboards to solve real operational challenges in water, waste, climate and territorial governance.') }}</p>
            <div class="brand-signature">{{ __('Building intelligent infrastructure systems for Africa.') }}</div>
        </div>
    </section>

    <section class="dx-section" id="needs">
        <div class="dx-container">
            <div class="dx-section-head dx-reveal">
                <div class="dx-eyebrow">{{ __('Business needs') }}</div>
                <h2>{{ __('The challenges we solve') }}</h2>
                <p class="dx-section-intro">{{ __('From field monitoring to infrastructure governance, we build systems that convert fragmented operations into usable intelligence.') }}</p>
            </div>

            <div class="cards-grid dx-reveal">
                @foreach ($needs as $need)
                    <div class="card">
                        <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" aria-hidden="true"><path d="M12 2 4 5v6c0 5.2 3.4 8.7 8 10 4.6-1.3 8-4.8 8-10V5l-8-3z"/><path d="M9 12h6M9 15h4"/></svg>
                        <h3>{{ $need['title'] }}</h3>
                        <p>{{ $need['text'] }}</p>
                        <a href="#solutions" class="card-cta">{{ $need['cta'] }} <span aria-hidden="true">&rarr;</span></a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="dx-section dx-section-alt">
        <div class="dx-container">
            <div class="dx-section-head dx-reveal">
                <div class="dx-eyebrow">{{ __('The problem') }}</div>
                <h2>{{ __('The cost of operational fragmentation') }}</h2>
                <p class="dx-section-intro">{{ __('When critical systems are not connected, organizations lose visibility, speed and control. Fragmentation compounds across teams, assets and territories.') }}</p>
            </div>

            <div class="problems-grid dx-reveal">
                @foreach ($problems as $problem)
                    <div class="problem-card">
                        <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" aria-hidden="true"><path d="M12 3 2 20h20L12 3z"/><path d="M12 10v4M12 17h.01"/></svg>
                        <h3>{{ $problem[0] }}</h3>
                        <p>{{ $problem[1] }}</p>
                    </div>
                @endforeach
            </div>

            <div class="problem-cta dx-reveal">
                <div>
                    <h3>{{ __('Clarity before investment.') }}</h3>
                    <p>{{ __('We assess your operational model, identify the highest-impact challenge and recommend the optimal digital path.') }}</p>
                </div>
                <a href="{{ url('/the-problem') }}" class="dx-btn dx-btn-primary">{{ __('Explore the problem') }}</a>
            </div>
        </div>
    </section>

    <section class="dx-section" id="solutions">
        <div class="dx-container">
            <div class="dx-section-head dx-reveal">
                <div class="dx-eyebrow">{{ __('Solutions') }}</div>
                <h2>{{ __('Our AI-powered infrastructure products') }}</h2>
                <p class="dx-section-intro">{{ __('Purpose-built systems for critical African infrastructure workflows. Deploy a product layer or engineer a custom platform.') }}</p>
            </div>

            <div class="products-grid dx-reveal">
                @foreach ($products as $product)
                    <div class="product-card">
                        <div class="product-tag">{{ $product['tag'] }}</div>
                        <h3>{{ $product['name'] }}</h3>
                        <p>{{ $product['text'] }}</p>
                        <div class="product-features">
                            @foreach ($product['features'] as $feature)
                                <span>{{ $feature }}</span>
                            @endforeach
                        </div>
                        <p class="product-outcome"><strong>{{ __('Business outcome') }}</strong>{{ $product['outcome'] }}</p>
                        <a href="{{ $product['link'] }}" class="product-link">{{ __('Learn more') }} <span aria-hidden="true">&rarr;</span></a>
                    </div>
                @endforeach
            </div>

            <div class="solutions-cta dx-reveal">
                <a href="{{ url('/solutions') }}" class="dx-btn dx-btn-secondary">{{ __('View all solutions') }}</a>
            </div>
        </div>
    </section>

    <section class="dx-section dx-section-alt">
        <div class="dx-container">
            <div class="dx-section-head dx-reveal">
                <div class="dx-eyebrow">{{ __('Why DigiTexia') }}</div>
                <h2>{{ __('Why organizations choose DigiTexia') }}</h2>
            </div>

            <div class="reasons-grid dx-reveal">
                <div class="reason-card">
                    <div class="reason-number">01</div>
                    <h3>{{ __('Engineering Excellence') }}</h3>
                    <p>{{ __('We build systems around your operating model, data needs and security requirements.') }}</p>
                </div>
                <div class="reason-card">
                    <div class="reason-number">02</div>
                    <h3>{{ __('Secure & Scalable Infrastructure') }}</h3>
                    <p>{{ __('Our platforms are designed to scale across teams, regions and public-private operations.') }}</p>
                </div>
                <div class="reason-card">
                    <div class="reason-number">03</div>
                    <h3>{{ __('Built for African Realities') }}</h3>
                    <p>{{ __('We account for field constraints, connectivity gaps, distributed teams and local adoption patterns.') }}</p>
                </div>
                <div class="reason-card">
                    <div class="reason-number">04</div>
                    <h3>{{ __('Partnership & Support') }}</h3>
                    <p>{{ __('From assessment to deployment and optimization, we stay focused on measurable operational value.') }}</p>
                </div>
            </div>
        </div>
    </section>

    <section class="dx-section statistics">
        <div class="dx-container">
            <div class="dx-section-head center dx-reveal">
                <div class="dx-eyebrow dx-eyebrow-center">{{ __('Track record') }}</div>
                <h2>{{ __('DigiTexia at a glance') }}</h2>
            </div>
            <div class="stats-grid dx-reveal">
                <div class="stat-card">
                    <div class="stat-number" data-count="4">0</div>
                    <div class="stat-label">{{ __('Core infrastructure product lines') }}</div>
                    <div class="stat-descriptor">{{ __('Focused') }}</div>
                </div>
                <div class="stat-card">
                    <div class="stat-number" data-count="5" data-suffix="+">0</div>
                    <div class="stat-label">{{ __('Years of African technology leadership') }}</div>
                    <div class="stat-descriptor">{{ __('Regional') }}</div>
                </div>
                <div class="stat-card">
                    <div class="stat-number" data-count="100" data-suffix="%">0</div>
                    <div class="stat-label">{{ __('Enterprise-grade delivery mindset') }}</div>
                    <div class="stat-descriptor">{{ __('Rigorous') }}</div>
                </div>
                <div class="stat-card">
                    <div class="stat-number" data-count="0">0</div>
                    <div class="stat-label">{{ __('Tolerance for unclear data') }}</div>
                    <div class="stat-descriptor">{{ __('Always') }}</div>
                </div>
            </div>
        </div>
    </section>

    <section class="dx-section" id="workflow">
        <div class="dx-container">
            <div class="dx-section-head dx-reveal">
                <div class="dx-eyebrow">{{ __('Methodology') }}</div>
                <h2>{{ __('Our strategic delivery process') }}</h2>
            </div>

            <div class="workflow-steps dx-reveal">
                <div class="step">
                    <div class="step-number">01</div>
                    <h3>{{ __('Strategic Assessment') }}</h3>
                    <p>{{ __('We analyze your operational model and identify the highest-impact data or infrastructure workflow.') }}</p>
                </div>
                <div class="step">
                    <div class="step-number">02</div>
                    <h3>{{ __('Solution Architecture') }}</h3>
                    <p>{{ __('We define the system architecture, data flows, dashboards and governance requirements.') }}</p>
                </div>
                <div class="step">
                    <div class="step-number">03</div>
                    <h3>{{ __('Engineering & Validation') }}</h3>
                    <p>{{ __('We build, test and validate the platform with the teams who will use it every day.') }}</p>
                </div>
                <div class="step">
                    <div class="step-number">04</div>
                    <h3>{{ __('Deployment & Optimization') }}</h3>
                    <p>{{ __('We support launch, adoption and ongoing improvements so the system creates measurable value.') }}</p>
                </div>
            </div>
        </div>
    </section>

    <section class="dx-section dx-section-alt">
        <div class="dx-container">
            <div class="dx-section-head dx-reveal">
                <div class="dx-eyebrow">{{ __('Outcomes') }}</div>
                <h2>{{ __('Measurable impact on your operations') }}</h2>
                <p class="dx-section-intro">{{ __('The goal is stronger visibility, fewer errors, faster decisions and infrastructure systems that can scale.') }}</p>
            </div>

            <div class="impact-grid dx-reveal">
                <div class="impact-card"><svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" aria-hidden="true"><path d="M13 2 4 14h6l-1 8 9-12h-6l1-8z"/></svg><h3>{{ __('Automated Decision-Making') }}</h3><p>{{ __('Critical workflows move from manual follow-up to structured decision systems.') }}</p></div>
                <div class="impact-card"><svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" aria-hidden="true"><path d="M12 2 4 5v6c0 5.2 3.4 8.7 8 10 4.6-1.3 8-4.8 8-10V5l-8-3z"/><path d="m9 12 2 2 4-4"/></svg><h3>{{ __('Lower Operational Errors') }}</h3><p>{{ __('Validation, traceability and dashboards reduce inconsistent reporting and duplicated work.') }}</p></div>
                <div class="impact-card"><svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" aria-hidden="true"><circle cx="5" cy="12" r="2.4"/><circle cx="19" cy="6" r="2.4"/><circle cx="19" cy="18" r="2.4"/><path d="M7.2 11 17 6.8M7.2 13l9.8 4.2"/></svg><h3>{{ __('Unified Intelligence') }}</h3><p>{{ __('Information flows across teams, sites and stakeholders through one trusted operational layer.') }}</p></div>
                <div class="impact-card"><svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" aria-hidden="true"><path d="M2 12s3.5-7 10-7 10 7 10 7-3.5 7-10 7-10-7-10-7z"/><circle cx="12" cy="12" r="3"/></svg><h3>{{ __('Executive Visibility') }}</h3><p>{{ __('Leadership sees infrastructure, service and territory performance in real time.') }}</p></div>
                <div class="impact-card"><svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" aria-hidden="true"><path d="M4 19V10M11 19V5M18 19v-7"/><path d="M2 19h20"/></svg><h3>{{ __('Sustainable Productivity') }}</h3><p>{{ __('Teams recover time lost to manual checks and focus on higher-value execution.') }}</p></div>
            </div>
        </div>
    </section>

    <section class="dx-final-cta" id="cta-final">
        <div class="dx-container dx-reveal">
            <div class="dx-eyebrow dx-eyebrow-center">{{ __('Get started') }}</div>
            <h2>{{ __('Build the infrastructure intelligence your organization needs.') }}</h2>
            <p class="dx-cta-subheading">{{ __('Let us discuss how AI-powered digital infrastructure can drive measurable impact for your organization.') }}</p>
            <p class="dx-cta-description">{{ __('In a strategic consultation, we assess your challenges, recommend the right product or platform and define a practical implementation roadmap.') }}</p>
            <div class="dx-cta-buttons">
                <a href="tel:+237650945280" class="dx-btn dx-btn-primary">{{ __('Call (+237) 650 945 280') }}</a>
                <a href="{{ url('/contact-us') }}" class="dx-btn dx-btn-secondary">{{ __('Schedule a Consultation') }}</a>
            </div>
        </div>
    </section>
</main>

@include('partials.v2.footer')
@endsection
