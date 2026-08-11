@extends('index')

@section('page_title', __('DigiTexia | Partners'))
@section('digitexia_v2', true)

@push('styles')
<link rel="stylesheet" href="{{ asset('css/partners-v2.css') }}?v={{ filemtime(public_path('css/partners-v2.css')) }}">
@endpush

@php
    $icons = [
        'network' => '<svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" aria-hidden="true"><circle cx="5" cy="12" r="2.4"/><circle cx="19" cy="6" r="2.4"/><circle cx="19" cy="18" r="2.4"/><path d="M7.2 11 17 6.8M7.2 13l9.8 4.2"/></svg>',
        'chart' => '<svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" aria-hidden="true"><path d="M4 19V10M11 19V5M18 19v-7"/><path d="M2 19h20"/></svg>',
        'shield' => '<svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" aria-hidden="true"><path d="M12 2 4 5v6c0 5.2 3.4 8.7 8 10 4.6-1.3 8-4.8 8-10V5l-8-3z"/><path d="M9 12h6M9 15h4"/></svg>',
        'bolt' => '<svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" aria-hidden="true"><path d="M13 2 4 14h6l-1 8 9-12h-6l1-8z"/></svg>',
    ];

    $logos = [
        ['name' => 'CREMIN-CAM', 'label' => __('Client'), 'src' => asset('partners/partner-2.png'), 'href' => 'https://www.cremin-cam.org'],
        ['name' => 'APEC', 'label' => __('Client'), 'src' => asset('partners/apec-logo-white--BtJLi1d.svg'), 'href' => 'https://web.facebook.com/profile.php?id=61575062085703&locale=fr_FR'],
        ['name' => 'Light Group', 'label' => __('Client'), 'src' => asset('partners/partner-1.png'), 'href' => 'https://www.lightgroup.co.com/'],
        ['name' => __('Consulting Allies'), 'label' => __('Partner profile'), 'src' => asset('partners/partner-4.png'), 'href' => null],
    ];

    $types = [
        [
            'icon' => $icons['network'],
            'title' => __('Technology Partnerships'),
            'text' => __('We collaborate with technology providers, platforms and infrastructure companies to build stronger, more capable digital solutions.'),
            'tags' => [__('Cloud providers'), __('AI platforms'), __('Software ecosystems'), __('Hardware providers')],
        ],
        [
            'icon' => $icons['chart'],
            'title' => __('Strategic Business Partnerships'),
            'text' => __('We work with companies and organizations to co-create solutions, expand capabilities and deliver greater value to shared customers.'),
            'tags' => [],
        ],
        [
            'icon' => $icons['shield'],
            'title' => __('Institutional and Development Partnerships'),
            'text' => __('We collaborate with governments, NGOs, international organizations and development programs to deploy digital solutions with lasting impact.'),
            'tags' => [],
        ],
        [
            'icon' => $icons['bolt'],
            'title' => __('Innovation and Research Partnerships'),
            'text' => __('We partner with universities, research centers and innovation hubs to explore emerging technologies and future solutions.'),
            'tags' => [],
        ],
    ];

    $reasons = [
        [__('Innovation Capability'), __('Access to proven digital products and emerging technologies, engineered specifically for African operational realities.')],
        [__('Engineering Expertise'), __('The ability to design and deploy digital solutions that are reliable, secure and built to last.')],
        [__('African Market Understanding'), __('Deep understanding of local operational challenges, combined with international engineering standards.')],
        [__('Shared Impact'), __('A genuine commitment to building solutions that generate measurable value for every party involved.')],
    ];

    $journey = [
        [__('Connect'), __('We start with a conversation to understand shared objectives and where our interests align.')],
        [__('Explore'), __('Together, we identify the specific areas where collaboration could create the most value.')],
        [__('Build'), __('We develop the solution together, combining each partner expertise and resources.')],
        [__('Scale'), __('Once proven, we work to expand successful initiatives further and wider.')],
    ];
@endphp

@section('fullpage')
@include('partials.v2.header')

<main class="dx-partners">
    <section class="page-hero">
        <div class="dx-blueprint"></div>
        <div class="dx-container dx-reveal">
            <div class="dx-eyebrow">{{ __('Partners') }}</div>
            <h1>{{ __('Meaningful digital transformation is built together, not alone.') }}</h1>
            <p class="page-hero-subtitle">
                {{ __('DigiTexia is open to building partnerships that create real technological and social impact with organizations that share our belief that technology, applied well, can solve complex operational challenges across Africa.') }}
            </p>
            <div class="page-hero-cta">
                <a href="#cta-final" class="dx-btn dx-btn-primary">
                    {{ __('Start a Partnership Conversation') }}
                    <span class="dx-btn-arrow" aria-hidden="true">&rarr;</span>
                </a>
                <a href="{{ url('/projects') }}" class="dx-btn dx-btn-secondary">{{ __('See What We Build') }}</a>
            </div>
        </div>
    </section>

    <section class="company-intro">
        <div class="dx-container dx-reveal">
            <div class="dx-eyebrow">{{ __('Our belief') }}</div>
            <h2>{{ __('We work with organizations that share one objective: using technology to create sustainable impact.') }}</h2>
            <p class="lead">
                {{ __('Partnership, for us, is more than a business relationship. It is a shared commitment to solving complex operational challenges by combining our engineering capability with partner expertise, reach or resources.') }}
            </p>
            <div class="brand-signature">{{ __('Building AI-powered digital infrastructure for Africa.') }}</div>
        </div>
    </section>

    <section class="dx-section" id="clients">
        <div class="dx-container">
            <div class="dx-section-head dx-reveal">
                <div class="dx-eyebrow">{{ __('Clients and partners') }}</div>
                <h2>{{ __('Organizations connected to the DigiTexia ecosystem') }}</h2>
                <p class="dx-section-intro">
                    {{ __('A focused view of clients we support and partner profiles we can grow with.') }}
                </p>
            </div>

            <div class="logo-wall dx-reveal">
                @foreach ($logos as $logo)
                    @if ($logo['href'])
                        <a href="{{ $logo['href'] }}" target="_blank" rel="noreferrer" class="logo-tile" aria-label="{{ $logo['name'] }}">
                            <span class="logo-mark"><img src="{{ $logo['src'] }}" alt="{{ $logo['name'] }} logo"></span>
                        </a>
                    @else
                        <div class="logo-tile" role="img" aria-label="{{ $logo['name'] }}">
                            <span class="logo-mark"><img src="{{ $logo['src'] }}" alt="{{ $logo['name'] }} logo"></span>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </section>

    <section class="dx-section dx-section-alt">
        <div class="dx-container">
            <div class="dx-section-head dx-reveal">
                <div class="dx-eyebrow">{{ __('Partnership types') }}</div>
                <h2>{{ __('Four ways organizations collaborate with DigiTexia') }}</h2>
                <p class="dx-section-intro">
                    {{ __('Each partnership type serves a different purpose. Together, they form the ecosystem we are building.') }}
                </p>
            </div>

            <div class="cat-grid dx-reveal">
                @foreach ($types as $type)
                    <article class="partner-card">
                        {!! $type['icon'] !!}
                        <h3>{{ $type['title'] }}</h3>
                        <p>{{ $type['text'] }}</p>
                        @if (!empty($type['tags']))
                            <div class="tag-list">
                                @foreach ($type['tags'] as $tag)
                                    <span>{{ $tag }}</span>
                                @endforeach
                            </div>
                        @endif
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="dx-section">
        <div class="dx-container dx-reveal">
            <div class="ecosystem-panel">
                <div>
                    <h3>{{ __('Our ecosystem is growing.') }}</h3>
                    <p>
                        {{ __('We are building our network of technology, business, institutional and research partners deliberately, around shared objectives rather than headline counts. If your organization is exploring how technology could extend its impact, we welcome the conversation.') }}
                    </p>
                </div>
                <a href="#cta-final" class="dx-btn dx-btn-secondary">{{ __('Become a Partner') }}</a>
            </div>
        </div>
    </section>

    <section class="dx-section dx-section-alt">
        <div class="dx-container">
            <div class="dx-section-head dx-reveal">
                <div class="dx-eyebrow">{{ __('Why partner with us') }}</div>
                <h2>{{ __('What DigiTexia brings to a partnership') }}</h2>
            </div>

            <div class="reasons-grid dx-reveal">
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

    <section class="dx-section">
        <div class="dx-container">
            <div class="dx-section-head dx-reveal">
                <div class="dx-eyebrow">{{ __('The partner journey') }}</div>
                <h2>{{ __('How a partnership takes shape') }}</h2>
            </div>

            <div class="workflow-steps dx-reveal">
                @foreach ($journey as $step)
                    <article class="step-card">
                        <div class="step-number">{{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}</div>
                        <h3>{{ $step[0] }}</h3>
                        <p>{{ $step[1] }}</p>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="dx-final-cta" id="cta-final">
        <div class="dx-container dx-reveal">
            <div class="dx-eyebrow">{{ __('Let us collaborate') }}</div>
            <h2>{{ __('Let us build the future of digital innovation together') }}</h2>
            <p class="dx-cta-subheading">
                {{ __('Whether you are a technology provider, an institution or a research organization, we can explore what a partnership could look like.') }}
            </p>
            <p class="dx-cta-description">
                {{ __('Tell us about your organization and what you hope to build. We will take it from there.') }}
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
