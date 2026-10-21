@extends('index')

@section('page_title', __($solution['page_title']))
@section('digitexia_v2', true)

@push('styles')
<link rel="stylesheet" href="{{ asset('css/flexicare-v2.css') }}?v={{ filemtime(public_path('css/flexicare-v2.css')) }}">
@endpush

@section('fullpage')
@include('partials.v2.header')

<main class="fx-page">
    <section class="fx-hero"><div class="dx-container">
        <nav class="fx-crumb" aria-label="{{ __('Solutions') }}"><a href="{{ url('/solutions') }}">{{ __('Solutions') }}</a><span aria-hidden="true">/</span><span>FlexiCare</span></nav>
        <div class="fx-hero-grid">
            <div class="fx-hero-copy">
                <div class="fx-hero-meta"><span class="fx-status">{{ __($solution['status']) }}</span><span>{{ __($solution['industry']) }}</span></div>
                <p class="fx-product-name">FlexiCare</p>
                <h1>{{ __($solution['tagline']) }}</h1>
                <p class="fx-lead">{{ __($solution['positioning']) }}</p>
                <div class="fx-actions"><a href="#overview" class="dx-btn dx-btn-primary">{{ __($solution['cta_primary']) }}</a><a href="{{ url('/solutions') }}" class="dx-btn dx-btn-secondary">{{ __('All Solutions') }}</a></div>
            </div>
            <div class="fx-hero-media"><img src="{{ asset('images/solutions/flexicare-solutions.png') }}" alt="{{ __('Childcare and household support') }}" fetchpriority="high"><div class="fx-hero-note"><strong>{{ __('Product in development') }}</strong><span>{{ __($solution['positioning']) }}</span></div></div>
        </div>
    </div></section>

    <section class="fx-section fx-overview" id="overview"><div class="dx-container">
        <div class="fx-section-head"><div class="dx-eyebrow">{{ __('Overview') }}</div><h2>{{ __($solution['overview_title']) }}</h2></div>
        <div class="fx-overview-grid">@foreach ($solution['overview'] as $item)<div><small>{{ __($item['label']) }}</small><p>{{ __($item['text']) }}</p></div>@endforeach</div>
    </div></section>

    <section class="fx-section"><div class="dx-container">
        <div class="fx-section-head"><div class="dx-eyebrow">{{ __('The challenge & the solution') }}</div><h2>{{ __('From word of mouth to a trusted relationship') }}</h2></div>
        <div class="fx-challenge-grid">
            <article class="fx-challenge"><h3>{{ __('The Challenge') }}</h3><p>{{ __($solution['challenge_text']) }}</p><ul>@foreach ($solution['challenge_points'] as $point)<li>{{ __($point) }}</li>@endforeach</ul></article>
            <article class="fx-answer"><h3>{{ __('The Solution') }}</h3><p>{{ __($solution['solution_text']) }}</p><ul>@foreach ($solution['solution_points'] as $point)<li>{{ __($point) }}</li>@endforeach</ul></article>
        </div>
    </div></section>

    <section class="fx-section fx-soft" id="capabilities"><div class="dx-container">
        <div class="fx-section-head"><div class="dx-eyebrow">{{ __('Key capabilities') }}</div><h2>{{ __($solution['capabilities_title']) }}</h2></div>
        <div class="fx-cap-grid">@foreach ($solution['capabilities'] as $capability)<article><span class="fx-cap-index">{{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}</span><h3>{{ __($capability['title']) }}</h3><p>{{ __($capability['text']) }}</p></article>@endforeach</div>
    </div></section>

    <section class="fx-section" id="gallery"><div class="dx-container">
        <div class="fx-section-head"><div class="dx-eyebrow">{{ __('Platform & deployment') }}</div><h2>{{ __($solution['gallery_title']) }}</h2><p>{{ __($solution['gallery_intro']) }}</p></div>
        <div class="fx-gallery" data-fx-gallery>
            <div class="fx-gallery-tabs" role="tablist" aria-label="{{ __($solution['gallery_title']) }}">@foreach ([__('Platform Screenshots'), __('Deployment'), __('Architecture')] as $label)<button type="button" role="tab" id="fx-tab-{{ $loop->index }}" aria-controls="fx-panel-{{ $loop->index }}" aria-selected="{{ $loop->first ? 'true' : 'false' }}" tabindex="{{ $loop->first ? '0' : '-1' }}">{{ $label }}</button>@endforeach</div>
            @foreach ([__('Platform Screenshots'), __('Deployment'), __('Architecture')] as $label)<div class="fx-gallery-panel" role="tabpanel" id="fx-panel-{{ $loop->index }}" aria-labelledby="fx-tab-{{ $loop->index }}" tabindex="0" @if(!$loop->first) hidden @endif><div class="fx-gallery-placeholder"><span>{{ $label }}</span><strong>{{ $loop->first ? __('Platform screenshots coming soon') : __('Coming soon') }}</strong></div></div>@endforeach
        </div>
    </div></section>

    <section class="fx-section fx-soft"><div class="dx-container">
        <div class="fx-section-head"><div class="dx-eyebrow">{{ __('How it works') }}</div><h2>{{ __('From first need to lasting trust') }}</h2></div>
        <ol class="fx-steps">@foreach ($solution['workflow'] as $step)<li><span>{{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}</span><h3>{{ __($step) }}</h3></li>@endforeach</ol>
    </div></section>

    <section class="fx-section fx-dark"><div class="dx-container">
        <div class="fx-section-head"><div class="dx-eyebrow">{{ __('Architecture & technology') }}</div><h2>{{ __('Built on capable, proven foundations') }}</h2><p>{{ __($solution['tech_intro']) }}</p></div>
        <div class="fx-tech-tags">@foreach ($solution['tech_tags'] as $tag)<span>{{ __($tag) }}</span>@endforeach</div>
    </div></section>

    <section class="fx-section fx-impact"><div class="dx-container"><div class="fx-section-head"><div class="dx-eyebrow">{{ __('Impact & status') }}</div><h2>{{ __($solution['impact_title']) }}</h2><p>{{ __($solution['impact_text']) }}</p></div></div></section>

    <section class="fx-final-cta"><div class="dx-container fx-final-grid">
        <div><div class="dx-eyebrow">{{ __("Let's talk") }}</div><h2>{{ __($solution['cta_title']) }}</h2><p>{{ __($solution['cta_text']) }}</p><div class="fx-actions"><a href="tel:+237650945280" class="dx-btn dx-btn-primary">{{ __('Call (+237) 650 945 280') }}</a><a href="{{ url('/contact-us') }}" class="dx-btn dx-btn-secondary">{{ __('Start a Conversation') }}</a></div></div>
        <div class="fx-final-visual" aria-hidden="true"><div><strong>FlexiCare</strong><span>{{ __($solution['positioning']) }}</span></div></div>
    </div></section>
</main>

@include('partials.v2.footer')
@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {
  var gallery = document.querySelector('[data-fx-gallery]');
  if (!gallery) return;
  var tabs = Array.from(gallery.querySelectorAll('[role="tab"]'));
  var panels = Array.from(gallery.querySelectorAll('[role="tabpanel"]'));
  function activate(index) {
    tabs.forEach(function (tab, i) { tab.setAttribute('aria-selected', i === index ? 'true' : 'false'); tab.tabIndex = i === index ? 0 : -1; panels[i].hidden = i !== index; });
    tabs[index].focus();
  }
  tabs.forEach(function (tab, index) {
    tab.addEventListener('click', function () { activate(index); });
    tab.addEventListener('keydown', function (event) {
      var next = event.key === 'ArrowRight' ? (index + 1) % tabs.length : event.key === 'ArrowLeft' ? (index - 1 + tabs.length) % tabs.length : event.key === 'Home' ? 0 : event.key === 'End' ? tabs.length - 1 : -1;
      if (next !== -1) { event.preventDefault(); activate(next); }
    });
  });
});
</script>
@endpush
