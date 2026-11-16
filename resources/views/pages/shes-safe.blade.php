@extends('index')

@section('page_title', __('shes-safe.page_title'))
@section('seo_description', __('shes-safe.seo_description'))
@section('digitexia_v2', true)

@push('styles')
<link rel="stylesheet" href="{{ asset('css/shes-safe.css') }}?v={{ filemtime(public_path('css/shes-safe.css')) }}">
@endpush

@section('fullpage')
@include('partials.v2.header')

<main class="ss-page">
    <section class="ss-hero">
        <div class="dx-container">
            <nav class="ss-breadcrumb" aria-label="{{ __('Solutions') }}">
                <a href="{{ route('solutions.index') }}">{{ __('Solutions') }}</a>
                <span aria-hidden="true">/</span>
                <span>SHE'S SAFE</span>
            </nav>
            <div class="ss-hero-grid">
                <div class="ss-hero-copy">
                    <span class="ss-status">{{ __('shes-safe.status') }}</span>
                    <h1>SHE'S SAFE</h1>
                    <p class="ss-hero-title">{{ __('shes-safe.hero_title') }}</p>
                    <p class="ss-hero-text">{{ __('shes-safe.hero_text') }}</p>
                    <div class="ss-actions">
                        <a class="dx-btn dx-btn-primary" href="#fonctionnement">{{ __('shes-safe.discover') }}</a>
                        <a class="dx-btn dx-btn-secondary" href="{{ url('/contact-us') }}">{{ __('shes-safe.discuss') }}</a>
                    </div>
                </div>
                <figure class="ss-hero-image">
                    <img src="{{ asset('images/shes-safe/necklace-concept.png') }}" alt="{{ __('shes-safe.concept_visual') }}" fetchpriority="high">
                    <figcaption>{{ __('shes-safe.concept_visual') }}</figcaption>
                </figure>
            </div>
        </div>
    </section>

    <section class="ss-section ss-problem">
        <div class="dx-container ss-split">
            <div>
                <span class="ss-eyebrow">01 / SHE'S SAFE</span>
                <h2>{{ __('shes-safe.problem_title') }}</h2>
                <p class="ss-lead">{{ __('shes-safe.problem_text') }}</p>
            </div>
            <ul class="ss-problem-list">
                @foreach (trans('shes-safe.problem_points') as $point)
                    <li><span aria-hidden="true">{{ sprintf('%02d', $loop->iteration) }}</span>{{ $point }}</li>
                @endforeach
            </ul>
        </div>
    </section>

    <section class="ss-section ss-flow" id="fonctionnement">
        <div class="dx-container">
            <div class="ss-section-head">
                <span class="ss-eyebrow">02 / SOS</span>
                <h2>{{ __('shes-safe.flow_title') }}</h2>
                <p>{{ __('shes-safe.flow_intro') }}</p>
            </div>
            <ol class="ss-flow-grid">
                @foreach (trans('shes-safe.flow') as $step)
                    <li>
                        <span class="ss-step-number">{{ sprintf('%02d', $loop->iteration) }}</span>
                        <h3>{{ $step[0] }}</h3>
                        <p>{{ $step[1] }}</p>
                    </li>
                @endforeach
            </ol>
            <p class="ss-caution"><i class="ti ti-info-circle" aria-hidden="true"></i>{{ __('shes-safe.activation_note') }}</p>
        </div>
    </section>

    <section class="ss-section ss-architecture" id="architecture">
        <div class="dx-container">
            <div class="ss-section-head">
                <span class="ss-eyebrow">03 / BLE + MOBILE</span>
                <h2>{{ __('shes-safe.architecture_title') }}</h2>
                <p>{{ __('shes-safe.architecture_intro') }}</p>
            </div>
            <figure class="ss-diagram">
                <div class="ss-diagram-image">
                    <img src="{{ asset('images/shes-safe/technical-diagram-v2.png') }}" alt="{{ __('shes-safe.diagram_alt') }}" loading="lazy">
                </div>
                <ol class="ss-architecture-flow" aria-label="{{ __('shes-safe.diagram_alt') }}">
                    @foreach (trans('shes-safe.architecture_steps') as $step)
                        <li>
                            <span>{{ sprintf('%02d', $loop->iteration) }}</span>
                            <h3>{{ $step[0] }}</h3>
                            <p>{{ $step[1] }}</p>
                        </li>
                    @endforeach
                </ol>
                <figcaption>{{ __('shes-safe.diagram_caption') }}</figcaption>
            </figure>
            <div class="ss-limits">
                <h3>{{ __('shes-safe.limitations_title') }}</h3>
                <ul>
                    @foreach (trans('shes-safe.limitations') as $limitation)
                        <li>{{ $limitation }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </section>

    <section class="ss-section ss-validation">
        <div class="dx-container">
            <div class="ss-section-head">
                <span class="ss-eyebrow">04 / VALIDATION</span>
                <h2>{{ __('shes-safe.validation_title') }}</h2>
                <p>{{ __('shes-safe.validation_intro') }}</p>
            </div>
            <ol class="ss-validation-grid">
                @foreach (trans('shes-safe.validation') as $phase)
                    <li>
                        <span>{{ sprintf('%02d', $loop->iteration) }}</span>
                        <h3>{{ $phase[0] }}</h3>
                        <p>{{ $phase[1] }}</p>
                    </li>
                @endforeach
            </ol>
            <p class="ss-safety-note">{{ __('shes-safe.safety_note') }}</p>
        </div>
    </section>

    <section class="ss-final-cta">
        <div class="dx-container ss-final-grid">
            <div>
                <span class="ss-eyebrow">SHE'S SAFE</span>
                <h2>{{ __('shes-safe.cta_title') }}</h2>
                <p>{{ __('shes-safe.cta_text') }}</p>
                <a class="dx-btn dx-btn-primary" href="{{ url('/contact-us') }}">{{ __('shes-safe.discuss') }}</a>
            </div>
            <div class="ss-final-mark" aria-hidden="true"><i class="ti ti-shield-heart"></i></div>
        </div>
    </section>
</main>

@include('partials.v2.footer')
@endsection
