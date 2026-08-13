@extends('index')

@section('page_title', __('DigiTexia | Team'))
@section('digitexia_v2', true)

@push('styles')
<link rel="stylesheet" href="{{ asset('css/team-v2.css') }}?v={{ filemtime(public_path('css/team-v2.css')) }}">
@endpush

@php
    $leaders = [
        [
            'name' => 'Anne Marie NTAP',
            'role' => __('Chief Executive Officer & Co-Founder'),
            'initials' => 'AN',
            'positioning' => __('Co-founder and CEO, setting DigiTexia strategic direction.'),
            'bio' => __('Anne Marie NTAP co-founded DigiTexia and leads the company as CEO, guiding its strategic direction and vision as it builds digital infrastructure for organizations across Africa.'),
            'expertise' => [__('Business Strategy'), __('Leadership')],
            'image' => 'images/team/CEO-4.png',
            'image_size' => '900 x 1100',
        ],
        [
            'name' => 'Lucien',
            'role' => __('Chief Technology Officer & Co-Founder'),
            'initials' => 'LU',
            'positioning' => __('Co-founder and CTO, leading technology and engineering.'),
            'bio' => __('Lucien co-founded DigiTexia and leads its technology and engineering direction as CTO. His work spans full-stack development, AI-powered product design, IoT and digital transformation.'),
            'expertise' => [__('Software Engineering'), __('Artificial Intelligence'), __('IoT'), __('Product Development')],
            'image' => 'images/team/CTO.png',
            'image_size' => '900 x 1100',
        ],
    ];

    $capabilities = [
        [
            'icon' => '<svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" aria-hidden="true"><rect x="3" y="3" width="7" height="7" rx="1.2"/><rect x="14" y="3" width="7" height="7" rx="1.2"/><rect x="3" y="14" width="7" height="7" rx="1.2"/><rect x="14" y="14" width="7" height="7" rx="1.2"/></svg>',
            'title' => __('Engineering'),
            'text' => __('Modern software architecture, enterprise platforms and systems built to scale.'),
        ],
        [
            'icon' => '<svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" aria-hidden="true"><path d="M13 2 4 14h6l-1 8 9-12h-6l1-8z"/></svg>',
            'title' => __('Artificial Intelligence'),
            'text' => __('AI-powered applications, intelligent automation and decision-support systems.'),
        ],
        [
            'icon' => '<svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" aria-hidden="true"><path d="M21 12a9 9 0 1 1-3-6.7"/><path d="M21 4v5h-5"/></svg>',
            'title' => __('Digital Transformation'),
            'text' => __('Process digitalization, workflow optimization and enterprise modernization.'),
        ],
        [
            'icon' => '<svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" aria-hidden="true"><path d="m9 12 2 2 4-4"/><circle cx="12" cy="12" r="9"/></svg>',
            'title' => __('Product Development'),
            'text' => __('Designing, building and evolving digital products around real user needs.'),
        ],
        [
            'icon' => '<svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" aria-hidden="true"><circle cx="5" cy="12" r="2.4"/><circle cx="19" cy="6" r="2.4"/><circle cx="19" cy="18" r="2.4"/><path d="M7.2 11 17 6.8M7.2 13l9.8 4.2"/></svg>',
            'title' => __('IoT & Smart Infrastructure'),
            'text' => __('Connected systems, monitoring, sensors and digital infrastructure where applicable.'),
        ],
        [
            'icon' => '<svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" aria-hidden="true"><path d="M4 19V10M11 19V5M18 19v-7"/><path d="M2 19h20"/></svg>',
            'title' => __('Business & Strategy'),
            'text' => __('Technology strategy, partnerships, product positioning and business development.'),
        ],
    ];

    $products = ['MedTrace', 'AquaWatch AI', 'WastePay', 'Flexicare', 'Performia'];

    $culture = [
        [__('01'), __('Curiosity'), __('Asking why before deciding how.')],
        [__('02'), __('Engineering Excellence'), __('Built to standard, not to deadline pressure alone.')],
        [__('03'), __('Ownership'), __('Seeing problems through, not just tickets closed.')],
        [__('04'), __('Impact'), __('Measuring work by the difference it makes.')],
    ];
@endphp

@section('fullpage')
@include('partials.v2.header')

<main class="dx-team">
    <section class="team-hero">
        <div class="dx-blueprint"></div>
        <div class="dx-container team-hero-grid">
            <div class="team-hero-copy dx-reveal">
                <div class="dx-eyebrow">{{ __('Team') }}</div>
                <h1>{{ __('The people building what comes next.') }}</h1>
                <p class="team-hero-subtitle">
                    {{ __('DigiTexia brings together technology, product and business expertise to design and deploy digital solutions that address real operational challenges, led by a founding team committed to that mission.') }}
                </p>
                <div class="team-actions">
                    <a href="#leadership" class="dx-btn dx-btn-primary">{{ __('Meet the team') }}</a>
                    <a href="{{ url('/contact-us') }}" class="dx-btn dx-btn-secondary">{{ __('Build with us') }}</a>
                </div>
            </div>

            <div class="team-hero-media dx-reveal d1">
                @if (file_exists(public_path('images/team/hero-team-2.png')))
                    <img class="team-hero-image" src="{{ asset('images/team/hero-team-2.png') }}" alt="{{ __('DigiTexia team collaboration') }}">
                @else
                    <div class="team-image-placeholder hero-placeholder">
                        <span>{{ __('Team image placeholder') }}</span>
                        <strong>1600 x 1000</strong>
                    </div>
                @endif
                <div class="team-floating-card card-top">
                    <strong>{{ __('AI & Data') }}</strong>
                    <span>{{ __('Decision systems for real operations') }}</span>
                </div>
                <div class="team-floating-card card-bottom">
                    <strong>{{ __('Infrastructure') }}</strong>
                    <span>{{ __('Products built for African realities') }}</span>
                </div>
            </div>
        </div>
    </section>

    <section class="team-intro">
        <div class="dx-container dx-reveal">
            <div class="dx-eyebrow dx-eyebrow-center">{{ __('Our strength') }}</div>
            <h2>{{ __('DigiTexia is built around capabilities, not job titles.') }}</h2>
            <p>
                {{ __('Our work combines engineering, product development, digital transformation, AI and business understanding, with different disciplines pulling toward the same mission: technology that solves real problems for organizations across Africa.') }}
            </p>
            <div class="team-signature">{{ __('Building AI-powered digital infrastructure for Africa.') }}</div>
        </div>
    </section>

    <section id="leadership" class="dx-section">
        <div class="dx-container">
            <div class="dx-section-head dx-reveal">
                <div class="dx-eyebrow">{{ __('Leadership') }}</div>
                <h2>{{ __('Founding team') }}</h2>
                <p class="dx-section-intro">{{ __('The people responsible for DigiTexia strategic direction and technical vision.') }}</p>
            </div>

            <div class="leadership-grid dx-reveal d1">
                @foreach ($leaders as $leader)
                    <article class="team-card">
                        <div class="team-photo">
                            @if (! empty($leader['image']) && file_exists(public_path($leader['image'])))
                                <img src="{{ asset($leader['image']) }}" alt="{{ $leader['name'] }}">
                            @else
                                <div class="team-image-placeholder">
                                    <span>{{ __('Profile image placeholder') }}</span>
                                    <strong>{{ $leader['image_size'] }}</strong>
                                </div>
                            @endif
                        </div>
                        <div class="team-card-body">
                            <div class="role-badge">{{ $leader['role'] }}</div>
                            <h3>{{ $leader['name'] }}</h3>
                            <p class="positioning">{{ $leader['positioning'] }}</p>
                            <div class="expertise-tags">
                                @foreach ($leader['expertise'] as $item)
                                    <span>{{ $item }}</span>
                                @endforeach
                            </div>
                            <p class="bio-text">{{ $leader['bio'] }}</p>
                        </div>
                    </article>
                @endforeach
            </div>

            <div class="extend-note dx-reveal d2">
                {{ __('DigiTexia day-to-day work is also carried out by engineers, designers and specialists across our projects. As team profiles are confirmed, they will be added here.') }}
            </div>
        </div>
    </section>

    <section class="dx-section dx-section-alt">
        <div class="dx-container">
            <div class="dx-section-head dx-reveal">
                <div class="dx-eyebrow">{{ __('Collective expertise') }}</div>
                <h2>{{ __('What the team brings together') }}</h2>
                <p class="dx-section-intro">{{ __('Not a list of job titles, but the actual disciplines behind DigiTexia work.') }}</p>
            </div>

            <div class="cap-grid dx-reveal d1">
                @foreach ($capabilities as $capability)
                    <article class="cap-card">
                        {!! $capability['icon'] !!}
                        <h3>{{ $capability['title'] }}</h3>
                        <p>{{ $capability['text'] }}</p>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="dx-section">
        <div class="dx-container dx-reveal">
            <div class="products-panel">
                <div>
                    <div class="dx-eyebrow">{{ __('Products') }}</div>
                    <h2>{{ __('Real people, behind real products.') }}</h2>
                    <p>{{ __('The team technical and product work spans DigiTexia flagship suite, from architecture and engineering to deployment support.') }}</p>
                </div>
                <div class="products-tags">
                    @foreach ($products as $product)
                        <span>{{ $product }}</span>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section class="dx-section dx-section-alt">
        <div class="dx-container">
            <div class="dx-section-head center dx-reveal">
                <div class="dx-eyebrow dx-eyebrow-center">{{ __('How we work') }}</div>
                <h2>{{ __('Culture & collaboration') }}</h2>
            </div>
            <div class="culture-grid dx-reveal d1">
                @foreach ($culture as $item)
                    <article class="culture-item">
                        <div class="culture-num">{{ $item[0] }}</div>
                        <h3>{{ $item[1] }}</h3>
                        <p>{{ $item[2] }}</p>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="dx-section mission-section">
        <div class="dx-container dx-reveal">
            <div class="dx-section-head">
                <div class="dx-eyebrow">{{ __('Our mission') }}</div>
                <h2>{{ __('Built for African realities. Held to global standards.') }}</h2>
                <p class="dx-section-intro">
                    {{ __('The team works to design technology adapted to the operational realities organizations face across Africa, while holding every platform to the same engineering and product standards expected anywhere in the world.') }}
                </p>
            </div>
        </div>
    </section>

    <section id="cta-final" class="team-final-cta">
        <div class="dx-container dx-reveal">
            <div class="dx-eyebrow dx-eyebrow-center">{{ __('Build with us') }}</div>
            <h2>{{ __('Build what matters.') }}</h2>
            <p>
                {{ __('Whether you are a prospective client, a technology partner, an investor, or someone who wants to build meaningful technology with us, we would welcome the conversation.') }}
            </p>
            <div class="team-cta-buttons">
                <a href="{{ url('/contact-us') }}" class="dx-btn dx-btn-primary">
                    {{ __('Connect With Us') }}
                    <span aria-hidden="true">→</span>
                </a>
                <a href="{{ url('/our-partners') }}" class="dx-btn dx-btn-secondary">{{ __('Explore Partnerships') }}</a>
            </div>
        </div>
    </section>
</main>

@include('partials.v2.footer')
@endsection
