@extends('index')

@section('page_title', __($solution['page_title']))
@section('digitexia_v2', true)

@push('styles')
<link rel="stylesheet" href="{{ asset('css/solution-detail-v2.css') }}?v={{ filemtime(public_path('css/solution-detail-v2.css')) }}">
@endpush

@section('fullpage')
@include('partials.v2.header')

<main class="dx-solution-detail" style="--solution-accent: {{ $solution['accent'] }}; --solution-accent-soft: {{ $solution['accent_soft'] }};">

    <section class="sol-hero">
        <div class="dx-blueprint"></div>
        <div class="dx-container reveal">
            <div class="status-row">
                <span class="status-badge">
                    <span class="status-dot {{ $solution['status_color'] ?? 'dim' }}"></span>
                    {{ __($solution['status'] ?? 'Available') }}
                </span>
                <span class="industry-tag">{{ __($solution['industry']) }}</span>
            </div>

            <h1>{{ __($solution['title']) }}</h1>
            <p class="sol-tagline">{{ __($solution['tagline']) }}</p>
            <p class="sol-positioning">{{ __($solution['positioning']) }}</p>

            <div class="sol-hero-cta">
                <a href="{{ url('/contact-us') }}" class="dx-btn dx-btn-primary">
                    {{ __($solution['cta_primary']) }}
                    <span class="dx-btn-arrow" aria-hidden="true">&rarr;</span>
                </a>
                <a href="{{ url('/solutions') }}" class="dx-btn dx-btn-secondary">{{ __('All Solutions') }}</a>
            </div>
        </div>
    </section>

    <section class="detail-section">
        <div class="dx-container">
            <div class="detail-section-head reveal">
                <div class="dx-eyebrow">{{ __('Overview') }}</div>
                <h2>{{ __($solution['overview_title']) }}</h2>
            </div>

            <div class="overview-grid reveal">
                @foreach ($solution['overview'] as $item)
                    <article class="overview-cell">
                        <div class="overview-label">{{ __($item['label']) }}</div>
                        <p>{{ __($item['text']) }}</p>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="detail-section detail-section-alt">
        <div class="dx-container">
            <div class="detail-section-head reveal">
                <div class="dx-eyebrow">{{ __('The challenge & the solution') }}</div>
                <h2>{{ __($solution['challenge_title']) }}</h2>
            </div>

            <div class="cs-panel reveal">
                <article class="cs-block challenge-block">
                    <h3>{{ __('The Challenge') }}</h3>
                    <p>{{ __($solution['challenge_text']) }}</p>
                    <ul class="cs-list">
                        @foreach ($solution['challenge_points'] as $point)
                            <li>
                                <span class="cs-icon warning" aria-hidden="true">!</span>
                                <span>{{ __($point) }}</span>
                            </li>
                        @endforeach
                    </ul>
                </article>

                <article class="cs-block solution-block">
                    <h3>{{ __('The Solution') }}</h3>
                    <p>{{ __($solution['solution_text']) }}</p>
                    <ul class="cs-list">
                        @foreach ($solution['solution_points'] as $point)
                            <li>
                                <span class="cs-icon success" aria-hidden="true">&#10003;</span>
                                <span>{{ __($point) }}</span>
                            </li>
                        @endforeach
                    </ul>
                </article>
            </div>
        </div>
    </section>

    <section class="detail-section" id="capabilities">
        <div class="dx-container">
            <div class="detail-section-head reveal">
                <div class="dx-eyebrow">{{ __('Key capabilities') }}</div>
                <h2>{{ __($solution['capabilities_title']) }}</h2>
            </div>

            <div class="cap-grid reveal">
                @foreach ($solution['capabilities'] as $capability)
                    <article class="cap-card">
                        <h3>{{ __($capability['title']) }}</h3>
                        <p>{{ __($capability['text']) }}</p>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="detail-section detail-section-alt" id="gallery">
        <div class="dx-container">
            <div class="detail-section-head reveal">
                <div class="dx-eyebrow">{{ __('Platform & deployment') }}</div>
                <h2>{{ __($solution['gallery_title']) }}</h2>
                <p class="detail-section-intro">{{ __($solution['gallery_intro']) }}</p>
            </div>

            <div class="gallery-tabs reveal">
                <button type="button" class="gallery-tab active">{{ __('Platform Screenshots') }}</button>
                <button type="button" class="gallery-tab">{{ __('Deployment') }}</button>
                <button type="button" class="gallery-tab">{{ __('Architecture') }}</button>
            </div>

            <div class="gallery-grid reveal">
                <div class="gallery-empty">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" aria-hidden="true">
                        <rect x="3" y="3" width="18" height="18" rx="2"></rect>
                        <circle cx="8.5" cy="9" r="1.5"></circle>
                        <path d="m21 15-5-5L5 21"></path>
                    </svg>
                    <h3>{{ __('Platform screenshots coming soon') }}</h3>
                    <p>{{ __("Real platform screenshots will be added here as they become available, we don't publish placeholder or stock imagery in their place.") }}</p>
                </div>
            </div>

            @if (!empty($solution['credibility']))
                <div class="credibility-panel reveal">
                    <div class="credibility-label">{{ __($solution['credibility']['label']) }}</div>
                    <p>{{ __($solution['credibility']['text']) }}</p>
                    @if (!empty($solution['credibility']['meta']))
                        <div class="credibility-meta">
                            @foreach ($solution['credibility']['meta'] as $meta)
                                <span>{{ __($meta['label']) }}: <b>{{ __($meta['value']) }}</b></span>
                            @endforeach
                        </div>
                    @endif
                </div>
            @endif
        </div>
    </section>

    <section class="detail-section" id="how-it-works">
        <div class="dx-container">
            <div class="detail-section-head reveal">
                <div class="dx-eyebrow">{{ __('How it works') }}</div>
                <h2>{{ __('From data to decision') }}</h2>
            </div>

            <div class="flow-wrap reveal">
                @foreach ($solution['workflow'] as $step)
                    <div class="flow-step">{{ __($step) }}</div>
                    @if (!$loop->last)
                        <span class="flow-arrow" aria-hidden="true">&rarr;</span>
                    @endif
                @endforeach
            </div>
        </div>
    </section>

    <section class="detail-section detail-section-alt">
        <div class="dx-container">
            <div class="detail-section-head reveal">
                <div class="dx-eyebrow">{{ __('Architecture & technology') }}</div>
                <h2>{{ __('Built on capable, proven foundations') }}</h2>
                <p class="detail-section-intro">{{ __($solution['tech_intro']) }}</p>
            </div>

            <div class="tech-tags reveal">
                @foreach ($solution['tech_tags'] as $tag)
                    <span>{{ __($tag) }}</span>
                @endforeach
            </div>
        </div>
    </section>

    <section class="detail-section" id="impact">
        <div class="dx-container">
            <div class="detail-section-head reveal">
                <div class="dx-eyebrow">{{ __('Impact & status') }}</div>
                <h2>{{ __($solution['impact_title']) }}</h2>
            </div>

            <div class="results-panel reveal">
                <p>{{ __($solution['impact_text']) }}</p>
            </div>
        </div>
    </section>

    <section class="solution-final-cta">
        <div class="dx-container reveal">
            <div class="dx-eyebrow dx-eyebrow-center">{{ __("Let's talk") }}</div>
            <h2>{{ __($solution['cta_title']) }}</h2>
            <p class="cta-subheading">{{ __($solution['cta_text']) }}</p>
            <div class="cta-buttons">
                <a href="tel:+237650945280" class="dx-btn dx-btn-primary">{{ __('Call (+237) 650 945 280') }}</a>
                <a href="{{ url('/contact-us') }}" class="dx-btn dx-btn-secondary">{{ __('Start a Conversation') }}</a>
            </div>
        </div>
    </section>
</main>

@include('partials.v2.footer')
@endsection

@push('scripts')
<script>
document.querySelectorAll('.gallery-tab').forEach(function (tab) {
  tab.addEventListener('click', function () {
    document.querySelectorAll('.gallery-tab').forEach(function (item) {
      item.classList.remove('active');
    });
    tab.classList.add('active');
  });
});

const solutionRevealObserver = new IntersectionObserver(function (entries) {
  entries.forEach(function (entry) {
    if (entry.isIntersecting) {
      entry.target.classList.add('in-view');
      solutionRevealObserver.unobserve(entry.target);
    }
  });
}, { threshold: 0.1 });

document.querySelectorAll('.reveal').forEach(function (element) {
  solutionRevealObserver.observe(element);
});
</script>
@endpush
