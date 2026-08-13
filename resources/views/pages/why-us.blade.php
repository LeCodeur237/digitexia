@extends('index')

@section('page_title', __('DigiTexia | Why Us'))
@section('digitexia_v2', true)

@push('styles')
<link rel="stylesheet" href="{{ asset('css/why-us-v2.css') }}?v={{ filemtime(public_path('css/why-us-v2.css')) }}">
@endpush

@php
    $icons = [
        'shield' => '<svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" aria-hidden="true"><path d="M12 2 4 5v6c0 5.2 3.4 8.7 8 10 4.6-1.3 8-4.8 8-10V5l-8-3z"/><path d="m9 12 2 2 4-4"/></svg>',
        'bolt' => '<svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" aria-hidden="true"><path d="M13 2 4 14h6l-1 8 9-12h-6l1-8z"/></svg>',
        'chart' => '<svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" aria-hidden="true"><path d="M4 19V10M11 19V5M18 19v-7"/><path d="M2 19h20"/></svg>',
        'globe' => '<svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" aria-hidden="true"><circle cx="12" cy="12" r="9"/><path d="M3 12h18M12 3a13 13 0 0 1 0 18M12 3a13 13 0 0 0 0 18"/></svg>',
        'network' => '<svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" aria-hidden="true"><circle cx="5" cy="12" r="2.4"/><circle cx="19" cy="6" r="2.4"/><circle cx="19" cy="18" r="2.4"/><path d="M7.2 11 17 6.8M7.2 13l9.8 4.2"/></svg>',
    ];

    $pillars = [
        [
            'icon' => $icons['shield'],
            'num' => __('01 / ENGINEERING'),
            'title' => __('Engineering Excellence'),
            'text' => __('We combine strong software engineering practices with modern architectures to build platforms that are secure, reliable and built to scale, not prototypes dressed up as products.'),
            'tags' => [],
        ],
        [
            'icon' => $icons['bolt'],
            'num' => __('02 / INNOVATION'),
            'title' => __('Innovation-Driven Approach'),
            'text' => __('We do more than execute projects. We create digital products that address real challenges across strategic sectors.'),
            'tags' => ['AquaWatch AI', 'WastePay', 'MedTrace', 'FlexiCare'],
        ],
        [
            'icon' => $icons['chart'],
            'num' => __('03 / BUSINESS FOCUS'),
            'title' => __('Business-Centered Solutions'),
            'text' => __('Technology must create measurable value. Every solution is designed around operational challenges, organizational objectives, user needs and business outcomes, in that order.'),
            'tags' => [],
        ],
        [
            'icon' => $icons['globe'],
            'num' => __('04 / CONTEXT AND STANDARDS'),
            'title' => __('African Context, Global Standards'),
            'text' => __('We understand African operational realities while applying international engineering and product development standards: local relevance without compromising on quality.'),
            'tags' => [],
        ],
        [
            'icon' => $icons['network'],
            'num' => __('05 / PARTNERSHIP'),
            'title' => __('Long-Term Partnership'),
            'text' => __('Our role does not end at deployment. We support organizations throughout their digital transformation journey, including collaboration, continuous improvement and technical support.'),
            'tags' => [],
        ],
    ];

    $steps = [
        [__('Discover'), __('Understand business challenges and objectives before proposing a solution.')],
        [__('Design'), __('Create intuitive, scalable digital experiences around real user needs.')],
        [__('Engineer'), __('Build reliable, secure solutions on modern, maintainable architecture.')],
        [__('Deploy'), __('Launch into real environments, with your teams trained and ready.')],
        [__('Evolve'), __('Continuously improve and adapt as your organization needs grow.')],
    ];

    $stats = [
        ['10+', __('Digital products and custom solutions'), __('Delivered')],
        ['5+', __('Years of African technology leadership'), __('Experience')],
        ['100%', __('Enterprise-grade delivery standard'), __('Consistent')],
        ['0', __('Tolerance for compromise'), __('Always')],
    ];
@endphp

@section('fullpage')
@include('partials.v2.header')

<main class="dx-why">
    <section class="page-hero">
        <div class="dx-blueprint"></div>
        <div class="dx-container dx-reveal">
            <div class="dx-eyebrow">{{ __('Why DigiTexia') }}</div>
            <h1>{{ __('A technology partner built on trust, engineering excellence and long-term commitment.') }}</h1>
            <p class="page-hero-subtitle">
                {{ __('Organizations do not choose DigiTexia because we write code. They choose us because we combine technical rigor with a genuine understanding of the operational realities we solve for, and we stay invested well beyond deployment.') }}
            </p>
            <div class="page-hero-cta">
                <a href="#cta-final" class="dx-btn dx-btn-primary">
                    {{ __('Start a Conversation') }}
                    <span class="dx-btn-arrow" aria-hidden="true">&rarr;</span>
                </a>
                <a href="{{ url('/projects') }}" class="dx-btn dx-btn-secondary">{{ __('See Our Work') }}</a>
            </div>
        </div>
    </section>

    <section class="company-intro">
        <div class="dx-container dx-reveal">
            <div class="dx-eyebrow">{{ __('Choosing a partner') }}</div>
            <h2>{{ __('Choosing a technology partner is a strategic decision, not just a technical one.') }}</h2>
            <p class="lead">
                {{ __('It is about more than execution. It is about a partner who understands your business challenges, designs solutions that scale with you, and stays engaged long enough to see the impact through. That is the role DigiTexia plays.') }}
            </p>
            <div class="brand-signature">{{ __('Building AI-powered digital infrastructure for Africa.') }}</div>
        </div>
    </section>

    <section class="dx-section">
        <div class="dx-container">
            <div class="dx-section-head dx-reveal">
                <div class="dx-eyebrow">{{ __('What sets us apart') }}</div>
                <h2>{{ __('Five reasons organizations build with DigiTexia') }}</h2>
                <p class="dx-section-intro">
                    {{ __('Not a list of features, the actual disciplines behind every platform we deliver.') }}
                </p>
            </div>

            <div class="pillars-grid dx-reveal">
                @foreach ($pillars as $pillar)
                    <article class="pillar-card">
                        {!! $pillar['icon'] !!}
                        <div class="pillar-num">{{ $pillar['num'] }}</div>
                        <h3>{{ $pillar['title'] }}</h3>
                        <p>{{ $pillar['text'] }}</p>
                        @if (!empty($pillar['tags']))
                            <div class="pillar-tags">
                                @foreach ($pillar['tags'] as $tag)
                                    <span>{{ $tag }}</span>
                                @endforeach
                            </div>
                        @endif
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="dx-section dx-section-alt">
        <div class="dx-container">
            <div class="dx-section-head dx-reveal">
                <div class="dx-eyebrow">{{ __('Our approach') }}</div>
                <h2>{{ __('How we work, from first conversation to long-term evolution') }}</h2>
            </div>

            <div class="process-steps dx-reveal">
                @foreach ($steps as $step)
                    <article class="pstep">
                        <div class="pstep-number">{{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}</div>
                        <h3>{{ $step[0] }}</h3>
                        <p>{{ $step[1] }}</p>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="dx-section statistics">
        <div class="dx-container">
            <div class="dx-section-head center dx-reveal">
                <div class="dx-eyebrow">{{ __('Track record') }}</div>
                <h2>{{ __('DigiTexia at a glance') }}</h2>
            </div>

            <div class="stats-grid dx-reveal">
                @foreach ($stats as $stat)
                    <article class="stat-card">
                        <div class="stat-number">{{ $stat[0] }}</div>
                        <div class="stat-label">{{ $stat[1] }}</div>
                        <div class="stat-descriptor">{{ $stat[2] }}</div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="dx-final-cta" id="cta-final">
        <div class="dx-container dx-reveal">
            <div class="dx-eyebrow">{{ __('Let us talk') }}</div>
            <h2>{{ __('Let us build the right digital solution together') }}</h2>
            <p class="dx-cta-subheading">
                {{ __('The best digital solutions start with a conversation, not a proposal.') }}
            </p>
            <p class="dx-cta-description">
                {{ __('Tell us about your operational challenge. We will assess it directly and share a practical path forward, without obligation.') }}
            </p>
            <div class="dx-cta-buttons">
                <a href="tel:+237650945280" class="dx-btn dx-btn-primary">{{ __('Call (+237) 650 945 280') }}</a>
                <a href="{{ url('/contact-us') }}" class="dx-btn dx-btn-secondary">{{ __('Start a Conversation') }}</a>
            </div>
        </div>
    </section>
</main>

@include('partials.v2.footer')
@endsection
