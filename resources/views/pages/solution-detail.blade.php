@extends('index')

@section('page_title', $solution['page_title'])

@push('styles')
<link href="https://fonts.googleapis.com/css2?family=Clash+Display:wght@400;500;600;700&family=Plus+Jakarta+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/solutions-digitexia.css') }}">
<style>
  .sd-hero {
    --sd-accent: {{ $solution['accent'] }};
    --sd-accent-soft: {{ $solution['accent_soft'] }};
    padding: 128px 5% 72px;
    position: relative;
    overflow: hidden;
  }
  .sd-hero::before {
    content: '';
    position: absolute;
    inset: 0;
    background:
      radial-gradient(circle at 75% 20%, color-mix(in srgb, var(--sd-accent) 18%, transparent) 0%, transparent 35%),
      radial-gradient(circle at 15% 80%, rgba(22,199,132,.08) 0%, transparent 30%);
    pointer-events: none;
  }
  .sd-inner {
    max-width: 1240px;
    margin: 0 auto;
    position: relative;
    z-index: 1;
  }
  .sd-breadcrumb {
    display: flex;
    flex-wrap: wrap;
    gap: .5rem;
    align-items: center;
    color: var(--muted-lt);
    font-size: .78rem;
    margin-bottom: 1.25rem;
  }
  .sd-breadcrumb a {
    color: var(--muted-lt);
  }
  .sd-breadcrumb a:hover {
    color: var(--white);
  }
  .sd-hero-grid {
    display: grid;
    grid-template-columns: 1.15fr .85fr;
    gap: 2rem;
    align-items: start;
  }
  .sd-badge {
    display: inline-flex;
    align-items: center;
    gap: .5rem;
    padding: .3rem .85rem;
    border-radius: 999px;
    font-size: .68rem;
    font-weight: 700;
    letter-spacing: .1em;
    text-transform: uppercase;
    background: var(--sd-accent-soft);
    border: 1px solid color-mix(in srgb, var(--sd-accent) 30%, transparent);
    color: color-mix(in srgb, var(--sd-accent) 78%, white);
    width: fit-content;
    margin-bottom: 1.1rem;
  }
  .sd-title {
    font-family: 'Clash Display', sans-serif;
    font-size: clamp(2.3rem, 4vw, 4.25rem);
    line-height: 1.02;
    letter-spacing: -.04em;
    margin-bottom: 1rem;
    max-width: 780px;
  }
  .sd-title em {
    font-style: normal;
    background: linear-gradient(135deg, color-mix(in srgb, var(--sd-accent) 42%, #6BA4FF), var(--green));
    -webkit-background-clip: text;
    background-clip: text;
    -webkit-text-fill-color: transparent;
  }
  .sd-lead {
    max-width: 640px;
    font-size: 1rem;
    line-height: 1.8;
    color: var(--muted-lt);
    margin-bottom: 1.8rem;
  }
  .sd-ctas {
    display: flex;
    flex-wrap: wrap;
    gap: .9rem;
    margin-bottom: 1.5rem;
  }
  .sd-icon {
    width: 72px;
    height: 72px;
    display: grid;
    place-items: center;
    border-radius: 20px;
    background: var(--sd-accent-soft);
    border: 1px solid color-mix(in srgb, var(--sd-accent) 28%, transparent);
    color: var(--white);
    font-size: 1.8rem;
    margin-bottom: 1rem;
  }
  .sd-panel {
    background: var(--ink-2);
    border: 1px solid var(--bdr);
    border-radius: 24px;
    padding: 1.4rem;
    box-shadow: 0 20px 70px rgba(0,0,0,.28);
  }
  .sd-stats {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: .8rem;
    margin-bottom: 1rem;
  }
  .sd-stat {
    background: var(--ink-3);
    border: 1px solid var(--bdr);
    border-radius: 16px;
    padding: 1rem;
    text-align: center;
  }
  .sd-stat-val {
    font-family: 'Clash Display', sans-serif;
    font-size: 1.4rem;
    font-weight: 700;
    line-height: 1.1;
    color: color-mix(in srgb, var(--sd-accent) 60%, white);
  }
  .sd-stat-lbl {
    margin-top: .25rem;
    font-size: .68rem;
    color: var(--muted-lt);
  }
  .sd-copy-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 1rem;
    padding: 0 5% 90px;
  }
  .sd-card {
    background: var(--ink-2);
    border: 1px solid var(--bdr);
    border-radius: 20px;
    padding: 1.4rem;
  }
  .sd-card h3 {
    margin-bottom: .7rem;
  }
  .sd-card p {
    color: var(--muted-lt);
    line-height: 1.75;
  }
  .sd-section {
    padding: 0 5% 90px;
  }
  .sd-section-inner {
    max-width: 1240px;
    margin: 0 auto;
  }
  .sd-section-title {
    margin-bottom: 1.2rem;
  }
  .sd-feature-list {
    display: grid;
    grid-template-columns: repeat(2, minmax(0, 1fr));
    gap: 1rem;
  }
  .sd-feature {
    display: flex;
    gap: .85rem;
    align-items: flex-start;
    padding: 1rem 1.1rem;
    border-radius: 14px;
    background: var(--ink-2);
    border: 1px solid var(--bdr);
  }
  .sd-feature-ico {
    width: 34px;
    height: 34px;
    display: grid;
    place-items: center;
    border-radius: 10px;
    background: var(--sd-accent-soft);
    border: 1px solid color-mix(in srgb, var(--sd-accent) 24%, transparent);
    flex-shrink: 0;
  }
  .sd-feature-title {
    font-size: .95rem;
    font-weight: 700;
    margin-bottom: .15rem;
  }
  .sd-feature-desc {
    font-size: .82rem;
    color: var(--muted-lt);
    line-height: 1.6;
  }
  .sd-steps {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 1rem;
  }
  .sd-step {
    background: linear-gradient(180deg, rgba(255,255,255,.02), transparent), var(--ink-2);
    border: 1px solid var(--bdr);
    border-radius: 18px;
    padding: 1.2rem;
  }
  .sd-step-num {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 38px;
    height: 38px;
    border-radius: 12px;
    background: var(--sd-accent-soft);
    border: 1px solid color-mix(in srgb, var(--sd-accent) 28%, transparent);
    color: var(--white);
    font-weight: 700;
    margin-bottom: .9rem;
  }
  .sd-step-title {
    font-family: 'Clash Display', sans-serif;
    font-size: 1.05rem;
    margin-bottom: .45rem;
  }
  .sd-step-desc {
    color: var(--muted-lt);
    line-height: 1.65;
    font-size: .86rem;
  }
  .sd-cta {
    padding: 0 5% 100px;
  }
  .sd-cta-inner {
    max-width: 820px;
    margin: 0 auto;
    text-align: center;
    background: linear-gradient(180deg, rgba(255,255,255,.03), transparent), var(--ink-2);
    border: 1px solid var(--bdr);
    border-radius: 28px;
    padding: 2.3rem 1.4rem;
  }
  @media (max-width: 1024px) {
    .sd-hero-grid,
    .sd-copy-grid,
    .sd-steps,
    .sd-feature-list {
      grid-template-columns: 1fr;
    }
    .sd-hero {
      padding-top: 112px;
    }
  }
</style>
@endpush

@section('contain')
<section class="sd-hero">
  <div class="sd-inner">
    <div class="sd-breadcrumb">
      <a href="{{ url('/') }}">Home</a>
      <span>&rsaquo;</span>
      <a href="{{ url('/solutions') }}">Solutions</a>
      <span>&rsaquo;</span>
      <span>{{ $solution['title'] }}</span>
    </div>

    <div class="sd-hero-grid rv">
      <div>
        <span class="sd-badge"><i class="ti {{ $solution['icon'] }}"></i> {{ $solution['eyebrow'] }}</span>
        <h1 class="sd-title">{{ $solution['title'] }}<br><em>Built for operational clarity.</em></h1>
        <p class="sd-lead">{{ $solution['summary'] }}</p>
        <div class="sd-ctas">
          <a href="{{ url('/contact-us') }}" class="btn-pri">
            Request an Assessment
            <svg width="14" height="14" viewBox="0 0 14 14" fill="none"><path d="M2 7h10M7 2l5 5-5 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
          </a>
          <a href="{{ url('/solutions') }}" class="btn-sec">Back to Solutions</a>
        </div>
      </div>

      <div class="sd-panel">
        <div class="sd-icon"><i class="ti {{ $solution['icon'] }}"></i></div>
        <div class="sd-stats">
          @foreach ($solution['stats'] as $stat)
            <div class="sd-stat">
              <div class="sd-stat-val">{{ $stat['value'] }}</div>
              <div class="sd-stat-lbl">{{ $stat['label'] }}</div>
            </div>
          @endforeach
        </div>
        <div class="sd-card" style="margin-bottom:1rem;background:var(--ink-3)">
          <h3>What it solves</h3>
          <p>{{ $solution['problem'] }}</p>
        </div>
        <div class="sd-card" style="background:var(--ink-3)">
          <h3>The outcome</h3>
          <p>{{ $solution['solution'] }}</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="sd-copy-grid rv">
  <div class="sd-card">
    <h3>Who it is for</h3>
    <p>{{ $solution['audience'] }}</p>
  </div>
  <div class="sd-card">
    <h3>Why teams adopt it</h3>
    <p>It replaces fragmented files, manual approvals and slow follow-up with a structured workflow that improves control and day-to-day execution.</p>
  </div>
  <div class="sd-card">
    <h3>How it helps</h3>
    <p>Less rework, less uncertainty and less waiting. More traceability, more visibility and a process your team can rely on every day.</p>
  </div>
</section>

<section class="sd-section">
  <div class="sd-section-inner">
    <div class="sd-section-title rv">
      <span class="tag">Key Features</span>
      <h2>Built around the operational workflow your team needs to control.</h2>
    </div>
    <div class="sd-feature-list rv d1">
      @foreach ($solution['features'] as $feature)
        <div class="sd-feature">
          <div class="sd-feature-ico"><i class="ti ti-check"></i></div>
          <div>
            <div class="sd-feature-title">{{ $feature }}</div>
            <div class="sd-feature-desc">Designed to reduce friction, accelerate decisions and keep operational information in one trusted environment.</div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>

<section class="sd-section">
  <div class="sd-section-inner">
    <div class="sd-section-title rv">
      <span class="tag">How It Works</span>
      <h2>Structured workflow, less manual effort.</h2>
    </div>
    <div class="sd-steps rv d1">
      @foreach ($solution['workflow'] as $index => $step)
        <div class="sd-step">
          <div class="sd-step-num">{{ str_pad((string) ($index + 1), 2, '0', STR_PAD_LEFT) }}</div>
          <div class="sd-step-title">{{ $step }}</div>
          <div class="sd-step-desc">This step is designed to make execution predictable, visible and easier to manage across teams.</div>
        </div>
      @endforeach
    </div>
  </div>
</section>

<section class="sd-cta">
  <div class="sd-cta-inner rv">
    <span class="tag">Free Operational Assessment</span>
    <h2>Want this solution aligned with your organization?</h2>
    <p class="lead">We can assess your workflow and adapt the platform to your operating model, teams and priorities without starting from zero.</p>
    <div class="cta-btns">
      <a href="{{ url('/contact-us') }}" class="btn-pri">
        Request an Assessment
        <svg width="14" height="14" viewBox="0 0 14 14" fill="none"><path d="M2 7h10M7 2l5 5-5 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
      </a>
      <a href="{{ url('/solutions') }}" class="btn-sec">View All Solutions</a>
    </div>
  </div>
</section>

@push('scripts')
<script>
const obs = new IntersectionObserver(entries => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.classList.add('vis');
      obs.unobserve(entry.target);
    }
  });
}, { threshold: 0.1 });

document.querySelectorAll('.rv').forEach(el => obs.observe(el));

const navEl = document.getElementById('mainNav');
if (navEl) {
  window.addEventListener('scroll', () => navEl.classList.toggle('sc', window.scrollY > 50));
}

const ddToggle = document.querySelector('.nav-dropdown > a');
const ddMenu = document.querySelector('.dropdown-menu');
if (ddToggle && ddMenu) {
  ddToggle.addEventListener('click', function (e) {
    if (window.innerWidth <= 900) {
      e.preventDefault();
      ddMenu.classList.toggle('is-open');
    }
  });

  document.addEventListener('click', function (e) {
    if (!e.target.closest('.nav-dropdown')) {
      ddMenu.classList.remove('is-open');
    }
  });
}
</script>
@endpush
@endsection
