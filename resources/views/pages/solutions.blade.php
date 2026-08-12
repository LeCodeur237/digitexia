@extends('index')

@section('page_title', __('DigiTexia | Intelligent Digital Solutions'))
@section('digitexia_v2', true)

@push('styles')
<link rel="stylesheet" href="{{ asset('css/solutions-v2.css') }}?v={{ filemtime(public_path('css/solutions-v2.css')) }}">
@endpush

@php
    $icons = [
        'grid' => '<svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" aria-hidden="true"><rect x="3" y="3" width="7" height="7" rx="1.2"/><rect x="14" y="3" width="7" height="7" rx="1.2"/><rect x="3" y="14" width="7" height="7" rx="1.2"/><rect x="14" y="14" width="7" height="7" rx="1.2"/></svg>',
        'bolt' => '<svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" aria-hidden="true"><path d="M13 2 4 14h6l-1 8 9-12h-6l1-8z"/></svg>',
        'sync' => '<svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" aria-hidden="true"><path d="M21 12a9 9 0 1 1-3-6.7"/><path d="M21 4v5h-5"/></svg>',
        'mobile' => '<svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" aria-hidden="true"><rect x="7" y="2" width="10" height="20" rx="2"/><path d="M11 18h2"/></svg>',
        'cloud' => '<svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" aria-hidden="true"><path d="M7 18a4.5 4.5 0 0 1-.5-8.98A5.5 5.5 0 0 1 17 8a4 4 0 0 1 .5 7.98"/></svg>',
        'chart' => '<svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" aria-hidden="true"><path d="M4 19V10M11 19V5M18 19v-7"/><path d="M2 19h20"/></svg>',
        'eye' => '<svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" aria-hidden="true"><path d="M2 12s3.5-7 10-7 10 7 10 7-3.5 7-10 7-10-7-10-7z"/><circle cx="12" cy="12" r="3"/></svg>',
        'check' => '<svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" aria-hidden="true"><path d="m9 12 2 2 4-4"/><circle cx="12" cy="12" r="9"/></svg>',
        'shield' => '<svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" aria-hidden="true"><path d="M12 2 4 5v6c0 5.2 3.4 8.7 8 10 4.6-1.3 8-4.8 8-10V5l-8-3z"/></svg>',
    ];

    $capabilities = [
        [
            'icon' => $icons['grid'],
            'title' => __('Enterprise Software'),
            'rows' => [
                [__('Challenge'), __('Manual, disconnected operations slow decisions and growth.')],
                [__('Solution'), __('Secure, scalable business applications built around your workflows.')],
                [__('Value'), __('Streamlined operations and measurably stronger performance.')],
            ],
        ],
        [
            'icon' => $icons['bolt'],
            'title' => __('Artificial Intelligence'),
            'rows' => [
                [__('Challenge'), __('Teams spend hours on decisions that data could support instantly.')],
                [__('Solution'), __('AI-powered systems that automate processes and generate insight.')],
                [__('Value'), __('Faster, smarter decision-making across the organization.')],
            ],
        ],
        [
            'icon' => $icons['sync'],
            'title' => __('Digital Transformation'),
            'rows' => [
                [__('Challenge'), __('Legacy processes cannot keep pace with growing demand.')],
                [__('Solution'), __('Process automation and connected digital platforms.')],
                [__('Value'), __('Operations that modernize without disrupting the business.')],
            ],
        ],
        [
            'icon' => $icons['mobile'],
            'title' => __('Mobile Solutions'),
            'rows' => [
                [__('Challenge'), __('Field teams and citizens need access beyond the desktop.')],
                [__('Solution'), __('Intuitive mobile applications built for real-world conditions.')],
                [__('Value'), __('Greater accessibility, engagement and operational reach.')],
            ],
        ],
        [
            'icon' => $icons['cloud'],
            'title' => __('Cloud and Infrastructure'),
            'rows' => [
                [__('Challenge'), __('Growth exposes fragile, hard-to-scale technical foundations.')],
                [__('Solution'), __('Resilient cloud architectures and secure digital environments.')],
                [__('Value'), __('Infrastructure that supports growth instead of limiting it.')],
            ],
        ],
        [
            'icon' => $icons['chart'],
            'title' => __('Data and Analytics'),
            'rows' => [
                [__('Challenge'), __('Operational data exists but rarely informs real decisions.')],
                [__('Solution'), __('Analytics that turn raw data into actionable insight.')],
                [__('Value'), __('Sharper planning and stronger strategic decision-making.')],
            ],
        ],
    ];

    $impacts = [
        [$icons['sync'], __('Operational Efficiency'), __('Fewer manual steps, less duplicated work.')],
        [$icons['eye'], __('Faster Decision Making'), __('Real-time data instead of week-old reports.')],
        [$icons['check'], __('Process Automation'), __('Workflows that run without manual chasing.')],
        [$icons['chart'], __('Cost Optimization'), __('Capacity redirected to higher-value work.')],
        [$icons['cloud'], __('Scalability'), __('Systems that grow with the organization.')],
        [$icons['shield'], __('Security'), __('Data integrity and access control by design.')],
        [$icons['check'], __('Sustainability'), __('Platforms built to be maintained, not replaced.')],
    ];

    $products = [
        [
            'tag' => __('PRODUCT / MEDTRACE'),
            'name' => 'MedTrace',
            'positioning' => __('Secure healthcare traceability with QR-based access to critical patient information.'),
            'link' => url('/solutions/medtrace'),
            'rows' => [
                [__('Industry'), __('Healthcare providers, emergency responders and public health programs')],
                [__('Challenge'), __('Patient information is often unavailable when medical teams need it most.')],
                [__('Impact'), __('Faster identification, better emergency response and safer continuity of care.')],
            ],
        ],
        [
            'tag' => __('PRODUCT / AQUAWATCH AI'),
            'name' => 'AquaWatch AI',
            'positioning' => __('IoT and AI-powered monitoring for water and hydraulic infrastructure.'),
            'link' => url('/solutions/aquawatch-ai'),
            'rows' => [
                [__('Industry'), __('Water utilities and public infrastructure')],
                [__('Challenge'), __('Manual monitoring makes leaks and failures costly to detect.')],
                [__('Impact'), __('Real-time infrastructure visibility that reduces water loss and response time.')],
            ],
        ],
        [
            'tag' => __('PRODUCT / WASTEPAY'),
            'name' => 'WastePay',
            'positioning' => __('Smart waste management with QR tracking and recycling incentives.'),
            'link' => url('/solutions/wastepay'),
            'rows' => [
                [__('Industry'), __('Cities, waste operators and circular economy programs')],
                [__('Challenge'), __('Waste flows are hard to verify, reward and optimize without structured data.')],
                [__('Impact'), __('Transparent collection, stronger recycling participation and better operational accountability.')],
            ],
        ],
        [
            'tag' => __('PRODUCT / FLEXICARE'),
            'name' => 'Flexicare',
            'positioning' => __('Service operations platform for verified providers, bookings, customer requests and field execution.'),
            'link' => url('/solutions/flexicare'),
            'rows' => [
                [__('Industry'), __('Service companies, field providers and customer support teams')],
                [__('Challenge'), __('Manual service coordination creates delays, weak follow-up and inconsistent customer visibility.')],
                [__('Impact'), __('Structured booking, provider verification and operational follow-up from one platform.')],
            ],
        ],
        [
            'tag' => __('PRODUCT / PERFORMIA'),
            'name' => 'Performia',
            'positioning' => __('Performance and workforce execution platform for task delegation, attendance, KPIs and staff evaluation.'),
            'link' => url('/solutions/performia'),
            'rows' => [
                [__('Industry'), __('Microfinance institutions, HR teams and distributed operations')],
                [__('Challenge'), __('Manual task tracking and scattered evaluations limit visibility into team execution.')],
                [__('Impact'), __('Real-time performance visibility, structured accountability and faster management decisions.')],
            ],
        ],
    ];
    $industries = [
        [__('Financial Services'), __('Secure, compliant systems for high-stakes, high-volume operations.')],
        [__('Healthcare'), __('Traceability and compliance where patient safety is non-negotiable.')],
        [__('Smart Water Management'), __('Infrastructure monitoring for critical, hard-to-access systems.')],
        [__('Government'), __('Transparent, auditable platforms for public institutions.')],
        [__('Education'), __('Digital systems that scale across institutions and regions.')],
        [__('NGOs'), __('Lean, accountable tools built for constrained budgets and broad reach.')],
        [__('SMEs'), __('Enterprise-grade capability sized for growing businesses.')],
        [__('Enterprise'), __('Custom infrastructure for complex, large-scale operations.')],
        [__('Industrial Operations'), __('Real-time visibility into physical, distributed workflows.')],
    ];

    $reasons = [
        [__('Engineering Excellence'), __('Every platform is built to enterprise standards, not assembled from templates.')],
        [__('Innovation'), __('We apply AI and modern engineering where it creates real operational value.')],
        [__('Business-Focused Approach'), __('Every technical decision is weighed against the business outcome it serves.')],
        [__('Long-Term Partnership'), __('We stay invested from assessment through deployment and beyond.')],
        [__('Secure Digital Platforms'), __('Security and data integrity are built in, not added afterward.')],
        [__('Scalable Solutions'), __('Infrastructure designed to grow with your organization, not against it.')],
    ];
@endphp

@section('fullpage')
@include('partials.v2.header')

<main class="dx-solutions">
    <section class="page-hero">
        <div class="dx-blueprint"></div>
        <div class="dx-container dx-reveal">
            <div class="dx-eyebrow">{{ __('Solutions') }}</div>
            <h1>{{ __('Intelligent digital solutions, built around how your organization actually operates.') }}</h1>
            <p class="page-hero-subtitle">
                {{ __('DigiTexia designs, engineers and deploys the platforms that help organizations modernize operations, improve efficiency and accelerate growth: infrastructure built to move your business forward, not software for its own sake.') }}
            </p>
            <div class="page-hero-cta">
                <a href="#cta-final" class="dx-btn dx-btn-primary">
                    {{ __('Schedule a Consultation') }}
                    <span class="dx-btn-arrow" aria-hidden="true">&rarr;</span>
                </a>
                <a href="#flagship" class="dx-btn dx-btn-secondary">{{ __('View Flagship Products') }}</a>
            </div>
        </div>
    </section>

    <section class="company-intro">
        <div class="dx-container dx-reveal">
            <div class="dx-eyebrow">{{ __('Our approach') }}</div>
            <h2>{{ __('Every solution starts with a real operational need, never a template.') }}</h2>
            <p class="lead">
                {{ __('We combine technology, engineering and innovation to design digital ecosystems that scale with your organization. Each platform is shaped around how your teams actually work today, and where your operations need to go next.') }}
            </p>
            <div class="brand-signature">{{ __('Building AI-powered digital infrastructure for Africa.') }}</div>
        </div>
    </section>

    <section class="dx-section">
        <div class="dx-container">
            <div class="dx-section-head dx-reveal">
                <div class="dx-eyebrow">{{ __('What we build') }}</div>
                <h2>{{ __('Digital solutions engineered for business outcomes') }}</h2>
                <p class="dx-section-intro">
                    {{ __('Six capability areas, one goal: turning operational complexity into a system your organization can run on with confidence.') }}
                </p>
            </div>

            <div class="cat-grid dx-reveal">
                @foreach ($capabilities as $capability)
                    <article class="capability-card">
                        {!! $capability['icon'] !!}
                        <h3>{{ $capability['title'] }}</h3>
                        <div class="field-list">
                            @foreach ($capability['rows'] as $row)
                                <div class="field-row">
                                    <span class="field-label">{{ $row[0] }}</span>
                                    <span>{{ $row[1] }}</span>
                                </div>
                            @endforeach
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="dx-section dx-section-alt">
        <div class="dx-container">
            <div class="dx-section-head center dx-reveal">
                <div class="dx-eyebrow">{{ __('Business impact') }}</div>
                <h2>{{ __('Measurable outcomes across every engagement') }}</h2>
                <p class="dx-section-intro">
                    {{ __('We design toward outcomes leadership can track, not features that look good in a demo.') }}
                </p>
            </div>

            <div class="impact-mini-grid dx-reveal">
                @foreach ($impacts as $impact)
                    <article class="impact-card">
                        {!! $impact[0] !!}
                        <h3>{{ $impact[1] }}</h3>
                        <p>{{ $impact[2] }}</p>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="dx-section" id="flagship">
        <div class="dx-container">
            <div class="dx-section-head dx-reveal">
                <div class="dx-eyebrow">{{ __('Flagship products') }}</div>
                <h2>{{ __('Our AI-powered digital products at work') }}</h2>
                <p class="dx-section-intro">
                    {{ __('Proven platforms deployed across critical sectors, each engineered around a specific operational challenge.') }}
                </p>
            </div>

            <div class="flagship-grid dx-reveal">
                @foreach ($products as $product)
                    <article class="product-card">
                        <div class="product-tag">{{ $product['tag'] }}</div>
                        <h3>{{ $product['name'] }}</h3>
                        <p class="positioning">{{ $product['positioning'] }}</p>
                        <div class="field-list">
                            @foreach ($product['rows'] as $row)
                                <div class="field-row">
                                    <span class="field-label">{{ $row[0] }}</span>
                                    <span>{{ $row[1] }}</span>
                                </div>
                            @endforeach
                        </div>
                        <div class="product-link">
                            <a href="{{ $product['link'] }}" class="dx-card-link">{{ __('Learn more') }} <span aria-hidden="true">&rarr;</span></a>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="dx-section dx-section-alt">
        <div class="dx-container">
            <div class="dx-section-head dx-reveal">
                <div class="dx-eyebrow">{{ __('Industries served') }}</div>
                <h2>{{ __('Built for the sectors driving African growth') }}</h2>
                <p class="dx-section-intro">
                    {{ __('We understand the specific digital challenges each sector faces and design accordingly.') }}
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

    <section class="dx-section">
        <div class="dx-container">
            <div class="dx-section-head dx-reveal">
                <div class="dx-eyebrow">{{ __('Why DigiTexia') }}</div>
                <h2>{{ __('A technology partner you can build on') }}</h2>
            </div>

            <div class="reasons-grid-6 dx-reveal">
                @foreach ($reasons as $reason)
                    <article class="reason-card">
                        <div class="reason-number">{{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}</div>
                        <h3>{{ $reason[0] }}</h3>
                        <p>{{ $reason[1] }}</p>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="dx-final-cta" id="cta-final">
        <div class="dx-container dx-reveal">
            <div class="dx-eyebrow">{{ __('Let us talk') }}</div>
            <h2>{{ __('Let us discuss your digital transformation goals') }}</h2>
            <p class="dx-cta-subheading">
                {{ __('Whatever stage your organization is at, we can talk through what digital transformation could look like for you.') }}
            </p>
            <p class="dx-cta-description">
                {{ __('In a short conversation, we listen to your operational challenges and share how similar organizations have approached them: no pressure, no obligation.') }}
            </p>
            <div class="dx-cta-buttons">
                <a href="tel:+237650945280" class="dx-btn dx-btn-primary">{{ __('Call (+237) 650 945 280') }}</a>
                <a href="{{ url('/contact-us') }}" class="dx-btn dx-btn-secondary">{{ __('Send a Message') }}</a>
            </div>
        </div>
    </section>
</main>

@include('partials.v2.footer')
@endsection
