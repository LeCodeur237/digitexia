@extends('index')

@section('page_title', __('DigiTexia | AI-Powered Digital Infrastructure for Enterprise Operations'))
@section('digitexia_v2', true)

@push('styles')
<link rel="stylesheet" href="{{ asset('css/home-v2.css') }}?v={{ filemtime(public_path('css/home-v2.css')) }}">
@endpush

@php
    $products = [
        [
            'need' => __('Water Infrastructure Monitoring'),
            'name' => 'AquaWatch AI',
            'link' => url('/solutions/aquawatch-ai'),
            'image' => 'images/home-solutions-1.png',
            'text' => __('Smart water monitoring for boreholes and rural systems, with IoT sensing and AI prediction of failures.'),
            'outcome' => __('Reduce downtime, improve maintenance planning and protect access to water.'),
            'code' => 'AQ',
        ],
        [
            'need' => __('Waste & Circular Economy Operations'),
            'name' => 'WastePay',
            'link' => url('/solutions/wastepay'),
            'image' => 'images/home-solutions-2.png',
            'text' => __('Smart waste management with QR tracking, verified collection and incentives for recycling.'),
            'outcome' => __('Improve collection transparency and increase circular economy participation.'),
            'code' => 'WP',
        ],
        [
            'need' => __('Service Operations Management'),
            'name' => 'Flexicare',
            'link' => url('/solutions/flexicare'),
            'image' => 'images/home-solutions-3.png',
            'text' => __('Trusted household services platform for childcare, domestic support and care professionals.'),
            'outcome' => __('Create safer connections between households and qualified professionals.'),
            'code' => 'FC',
        ],
        [
            'need' => __('Performance Execution Systems'),
            'name' => 'Perfomia',
            'link' => url('/solutions/performia'),
            'image' => 'images/home-solutions-4.png',
            'text' => __('Performance and workforce execution platform for task delegation, attendance, KPIs and staff evaluation.'),
            'outcome' => __('Give managers clearer execution visibility and faster performance decisions.'),
            'code' => 'PF',
        ],
    ];

    $problems = [
        [__('Delayed Decision-Making'), __('Leaders make decisions with outdated or incomplete data. Without real-time visibility, response times slow and operational risk grows.')],
        [__('Preventable Operational Errors'), __('Manual reporting and disconnected systems create duplicated work, data conflicts and expensive correction cycles.')],
        [__('Wasted Execution Capacity'), __('Teams spend time collecting, cleaning and checking information instead of improving service delivery.')],
        [__('Lost Infrastructure Visibility'), __('Critical assets are difficult to monitor when data is spread across spreadsheets, calls, field notes and isolated tools.')],
        [__('Compliance & Audit Risk'), __('Weak traceability makes it harder to prove what happened, when it happened and who validated it.')],
    ];

    $reasons = [
        [__('Engineering Excellence'), __('We build systems around your operating model, data needs and security requirements.')],
        [__('Secure & Scalable Infrastructure'), __('Our platforms are designed to scale across teams, regions and public-private operations.')],
        [__('Built for African Realities'), __('We account for field constraints, connectivity gaps, distributed teams and local adoption patterns.')],
        [__('Partnership & Support'), __('From assessment to deployment and optimization, we stay focused on measurable operational value.')],
    ];

    $steps = [
        [__('Strategic Assessment'), __('We analyze your operational model and identify the highest-impact data or infrastructure workflow.')],
        [__('Solution Architecture'), __('We define the system architecture, data flows, dashboards and governance requirements.')],
        [__('Engineering & Validation'), __('We build, test and validate the platform with the teams who will use it every day.')],
        [__('Deployment & Optimization'), __('We support launch, adoption and ongoing improvements so the system creates measurable value.')],
    ];

    $outcomes = [
        [__('Automated Decision-Making'), __('Critical workflows move from manual follow-up to structured decision systems.')],
        [__('Lower Operational Errors'), __('Validation, traceability and dashboards reduce inconsistent reporting and duplicated work.')],
        [__('Unified Intelligence'), __('Information flows across teams, sites and stakeholders through one trusted operational layer.')],
        [__('Executive Visibility'), __('Leadership sees infrastructure, service and territory performance in real time.')],
        [__('Sustainable Productivity'), __('Teams recover time lost to manual checks and focus on higher-value execution.')],
    ];
@endphp

@section('fullpage')
@include('partials.v2.header')

<main class="dx-home">
    <section class="home-hero">
        <div class="dx-container hero-grid">
            <div class="hero-copy dx-reveal">
                <div class="home-eyebrow">{{ __('Digital infrastructure') }} <span>&middot;</span> {{ __('Africa') }}</div>
                <h1>{{ __('AI-powered digital infrastructure for African operations') }}</h1>
                <p class="hero-lead">{{ __('DigiTexia designs and deploys intelligent systems that help governments, NGOs and enterprises monitor infrastructure, structure data and make faster operational decisions.') }}</p>

                <div class="hero-actions">
                    <a href="{{ url('/contact-us') }}" class="dx-btn dx-btn-primary">{{ __('Schedule a Consultation') }}</a>
                    <a href="#solutions" class="dx-btn dx-btn-secondary">{{ __('Explore Our Solutions') }}</a>
                </div>

                <div class="hero-signals" aria-label="{{ __('Infrastructure intelligence') }}">
                    <span>{{ __('AI and IoT systems') }}</span>
                    <span>{{ __('Secure data infrastructure') }}</span>
                    <span>{{ __('Real-time analytics') }}</span>
                </div>
            </div>

            <div class="hero-visual dx-reveal">
                <figure class="hero-image-frame">
                    <img src="{{ asset('images/hero-home.png') }}" alt="{{ __('AI-powered digital infrastructure for African operations') }}" width="1563" height="1006">
                </figure>

                <div class="hero-console" aria-label="{{ __('Infrastructure intelligence') }}">
                    <span class="console-caption">{{ __('Infrastructure intelligence') }} &middot; {{ __('last 12 weeks') }}</span>
                    <div><span>{{ __('Data reliability') }}</span><strong>99.98%</strong></div>
                    <div><span>{{ __('Manual error rate') }}</span><strong>&minus;91%</strong></div>
                    <div><span>{{ __('Connected assets') }}</span><strong>+24%</strong></div>
                </div>
            </div>
        </div>
    </section>

    <section class="home-intro">
        <div class="dx-container intro-grid">
            <figure class="intro-image dx-reveal">
                <img src="{{ asset('images/hero-team.png') }}" alt="" width="896" height="1200" loading="lazy">
            </figure>
            <div class="intro-copy dx-reveal">
                <div class="home-eyebrow">{{ __('Who we are') }}</div>
                <h2>{{ __('A technology company that designs, builds and deploys the digital infrastructure of African organizations.') }}</h2>
                <p>{{ __('We combine field data, automation, cloud systems and decision dashboards to solve real operational challenges in water, waste, climate and territorial governance.') }}</p>
                <a href="{{ url('/why-us') }}" class="home-text-link">{{ __('Why DigiTexia') }} <span aria-hidden="true">&rarr;</span></a>
            </div>
        </div>
    </section>

    <section class="home-products" id="solutions">
        <div class="dx-container">
            <div class="section-heading dx-reveal">
                <div class="home-eyebrow">{{ __('Solutions') }}</div>
                <h2>{{ __('Our AI-powered infrastructure products') }}</h2>
                <p>{{ __('Purpose-built systems for critical African infrastructure workflows. Deploy a product layer or engineer a custom platform.') }}</p>
            </div>

            <div class="product-list">
                @foreach ($products as $product)
                    <article class="product-row dx-reveal">
                        <div class="product-media has-image" aria-label="{{ $product['name'] }}">
                            <img class="product-media-image" src="{{ asset($product['image']) }}" alt="{{ $product['name'] }}">
                        </div>
                        <div class="product-copy">
                            <p class="product-need">{{ $product['need'] }}</p>
                            <h3>{{ $product['name'] }}</h3>
                            <p>{{ $product['text'] }}</p>
                            <div class="product-outcome">
                                <strong>{{ __('Business outcome') }}</strong>
                                <span>{{ $product['outcome'] }}</span>
                            </div>
                            <a href="{{ $product['link'] }}" class="home-text-link">{{ __('Learn more') }} <span aria-hidden="true">&rarr;</span></a>
                        </div>
                    </article>
                @endforeach
            </div>

            <a href="{{ url('/solutions') }}" class="dx-btn dx-btn-secondary products-all">{{ __('View all solutions') }}</a>
        </div>
    </section>

    <section class="home-problem" id="problem">
        <div class="dx-container">
            <div class="section-heading dx-reveal">
                <div class="home-eyebrow">{{ __('The problem') }}</div>
                <h2>{{ __('The cost of operational fragmentation') }}</h2>
                <p>{{ __('When critical systems are not connected, organizations lose visibility, speed and control. Fragmentation compounds across teams, assets and territories.') }}</p>
            </div>

            <div class="problem-grid dx-reveal">
                @foreach ($problems as $problem)
                    <article class="problem-card">
                        <span class="problem-index">{{ str_pad((string) $loop->iteration, 2, '0', STR_PAD_LEFT) }}</span>
                        <h3>{{ $problem[0] }}</h3>
                        <p>{{ $problem[1] }}</p>
                    </article>
                @endforeach
            </div>

            <div class="assessment-panel dx-reveal">
                <div>
                    <h3>{{ __('Clarity before investment.') }}</h3>
                    <p>{{ __('We assess your operational model, identify the highest-impact challenge and recommend the optimal digital path.') }}</p>
                </div>
                <a href="{{ url('/the-problem') }}" class="dx-btn dx-btn-primary">{{ __('Explore the problem') }}</a>
            </div>
        </div>
    </section>

    <section class="home-why" id="why">
        <div class="dx-container why-grid">
            <div class="why-heading dx-reveal">
                <div class="home-eyebrow">{{ __('Why DigiTexia') }}</div>
                <h2>{{ __('Why organizations choose DigiTexia') }}</h2>
                <figure class="why-image">
                    <img src="{{ asset('images/home-us.png') }}" alt="" width="896" height="1200" loading="lazy">
                </figure>
            </div>

            <div class="reason-list dx-reveal">
                @foreach ($reasons as $reason)
                    <article class="reason-item">
                        <span>{{ str_pad((string) $loop->iteration, 2, '0', STR_PAD_LEFT) }}</span>
                        <div>
                            <h3>{{ $reason[0] }}</h3>
                            <p>{{ $reason[1] }}</p>
                        </div>
                    </article>
                @endforeach
                <a href="{{ url('/why-us') }}" class="home-text-link light-link">{{ __('Why DigiTexia') }} <span aria-hidden="true">&rarr;</span></a>
            </div>
        </div>
    </section>

    <section class="home-evidence">
        <div class="dx-container">
            <div class="section-heading compact dx-reveal">
                <div class="home-eyebrow">{{ __('Track record') }}</div>
                <h2>{{ __('DigiTexia at a glance') }}</h2>
            </div>

            <div class="stat-strip dx-reveal">
                <div><strong>4</strong><span>{{ __('Core infrastructure product lines') }}</span></div>
                <div><strong>5+</strong><span>{{ __('Years of African technology leadership') }}</span></div>
                <div><strong>100%</strong><span>{{ __('Enterprise-grade delivery mindset') }}</span></div>
                <div><strong>0</strong><span>{{ __('Tolerance for unclear data') }}</span></div>
            </div>

            <div class="process-heading dx-reveal">
                <div class="home-eyebrow">{{ __('Methodology') }}</div>
                <h2>{{ __('Our strategic delivery process') }}</h2>
            </div>

            <div class="process-grid dx-reveal">
                @foreach ($steps as $step)
                    <article class="process-step">
                        <span>{{ str_pad((string) $loop->iteration, 2, '0', STR_PAD_LEFT) }}</span>
                        <h3>{{ $step[0] }}</h3>
                        <p>{{ $step[1] }}</p>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="home-outcomes">
        <div class="dx-container outcomes-grid">
            <div class="outcomes-intro dx-reveal">
                <div class="home-eyebrow">{{ __('Outcomes') }}</div>
                <h2>{{ __('Measurable impact on your operations') }}</h2>
                <p>{{ __('The goal is stronger visibility, fewer errors, faster decisions and infrastructure systems that can scale.') }}</p>
                <div class="outcome-visual">
                    <img src="{{ asset('images/home-operations.png') }}" alt="{{ __('Operational visibility') }}">
                </div>
            </div>

            <div class="outcome-list dx-reveal">
                @foreach ($outcomes as $outcome)
                    <article>
                        <span>{{ str_pad((string) $loop->iteration, 2, '0', STR_PAD_LEFT) }}</span>
                        <div><h3>{{ $outcome[0] }}</h3><p>{{ $outcome[1] }}</p></div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="home-cta" id="cta-final">
        <div class="dx-container cta-grid dx-reveal">
            <div>
                <div class="home-eyebrow">{{ __('Get started') }}</div>
                <h2>{{ __('Build the infrastructure intelligence your organization needs.') }}</h2>
                <p>{{ __('In a strategic consultation, we assess your challenges, recommend the right product or platform and define a practical implementation roadmap.') }}</p>
                <div class="cta-actions">
                    <a href="{{ url('/contact-us') }}" class="dx-btn cta-primary">{{ __('Schedule a Consultation') }}</a>
                    <a href="tel:+237650945280" class="dx-btn cta-secondary">{{ __('Call (+237) 650 945 280') }}</a>
                </div>
            </div>
            <div class="cta-note">
                <span>{{ __('Infrastructure intelligence') }}</span>
                <strong>{{ __('Building intelligent infrastructure systems for Africa.') }}</strong>
            </div>
        </div>
    </section>
</main>

@include('partials.v2.footer')
@endsection
