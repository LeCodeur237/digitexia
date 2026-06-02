@extends('index')

@section('page_title', __('Projects | DigiTexia'))

@push('styles')
<link href="https://fonts.googleapis.com/css2?family=Clash+Display:wght@400;500;600;700&family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/problem-digitexia.css') }}">
<style>
  /* ── Section spacing ──────────────────────────────────────────
     Aligné sur les autres pages : padding: 5rem 0 pour toutes
     les sections. On NE redéfinit PAS .section-wrap (déjà dans
     le CSS global). ──────────────────────────────────────────── */
  #page-hero,
  #portfolio,
  #workflows,
  #final-cta {
    padding: 5rem;
  }

  #page-hero {
    background:
      linear-gradient(180deg, rgba(56, 189, 248, .04), transparent 35%),
      linear-gradient(135deg, rgba(34, 197, 94, .03), transparent 50%);
    border-bottom: 1px solid var(--border-color);
  }

  /* ── Hero layout ──────────────────────────────────────────── */
  .hero-grid {
    display: grid;
    grid-template-columns: minmax(0, 1.1fr) minmax(320px, .9fr);
    gap: 2rem;
    align-items: center;
  }

  .hero-copy {
    display: flex;
    flex-direction: column;
    gap: 1.25rem;
  }

  /* ── Typography ───────────────────────────────────────────────
     .tag est la classe globale ; on ne redéfinit pas .eyebrow.
     On utilise uniquement .tag partout dans la page. ─────────── */
  .projects-title {
    font-family: 'Clash Display', sans-serif;
    font-size: clamp(2.9rem, 5vw, 5rem);
    line-height: .94;
    letter-spacing: -.04em;
    color: var(--text-main);
    max-width: 12ch;
    font-weight: 700;
  }

  .projects-title em {
    font-style: normal;
    background: linear-gradient(135deg, var(--blue-lt), var(--green));
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
  }

  .projects-lead {
    max-width: 60ch;
    color: var(--text-muted);
    font-size: 1.05rem;
    line-height: 1.8;
    font-weight: 500;
  }

  /* ── CTA button rows ─────────────────────────────────────────
     Réutilise .btn-pri / .btn-sec du CSS global sans surcharge. */
  .hero-actions,
  .section-actions {
    display: flex;
    flex-wrap: wrap;
    gap: .9rem;
  }

  /* ── Hero panel (right column) ────────────────────────────── */
  .hero-panel {
    background: var(--card-bg);
    border: 1px solid var(--border-color);
    border-radius: 28px;
    padding: 1.25rem;
  }

  .hero-board {
    min-height: 320px;
    border-radius: 22px;
    border: 1px solid var(--border-color);
    background:
      radial-gradient(circle at 18% 18%, rgba(56, 189, 248, .12), transparent 28%),
      radial-gradient(circle at 82% 78%, rgba(34, 197, 94, .1), transparent 28%),
      var(--surface-bg);
    padding: 1.25rem;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    gap: 1rem;
  }

  .board-top {
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 1rem;
  }

  .board-label {
    display: inline-flex;
    padding: .32rem .75rem;
    border-radius: 999px;
    background: var(--surface-soft);
    border: 1px solid var(--border-color);
    color: var(--text-main);
    font-size: .68rem;
    text-transform: uppercase;
    letter-spacing: .12em;
    font-weight: 800;
  }

  .board-note {
    color: var(--text-soft);
    font-size: .82rem;
    font-weight: 600;
  }

  /* ── Logo wall (hero) ────────────────────────────────────── */
  .logo-wall {
    display: grid;
    grid-template-columns: repeat(3, minmax(0, 1fr));
    gap: .9rem;
    align-items: stretch;
  }

  .logo-tile {
    min-height: 120px;
    border-radius: 20px;
    border: 1px solid var(--border-color);
    background: var(--card-bg);
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 1rem;
  }

  .logo-tile img {
    max-width: 100%;
    max-height: 52px;
    object-fit: contain;
  }

  /* ── Metric row (hero) ───────────────────────────────────── */
  .metric-row {
    display: grid;
    grid-template-columns: repeat(3, minmax(0, 1fr));
    gap: .85rem;
  }

  .metric-card {
    background: var(--card-bg);
    border: 1px solid var(--border-color);
    border-radius: 18px;
    padding: 1rem .95rem;
  }

  .metric-value {
    font-family: 'Clash Display', sans-serif;
    font-size: 1.45rem;
    line-height: 1;
    margin-bottom: .35rem;
    font-weight: 700;
    color: var(--text-main);
  }

  .metric-value.blue   { color: var(--blue-lt); }
  .metric-value.green  { color: var(--green); }
  .metric-value.orange { color: var(--orange); }

  .metric-label {
    color: var(--text-soft);
    font-size: .72rem;
    line-height: 1.45;
    text-transform: uppercase;
    letter-spacing: .1em;
    font-weight: 800;
  }

  /* ── Section head ────────────────────────────────────────────
     On n'override PAS .lead ici — la classe globale s'applique. */
  .section-head {
    display: flex;
    flex-direction: column;
    gap: .8rem;
    margin-bottom: 1.5rem;
    max-width: 64rem;
  }

  .section-head h2 {
    font-family: 'Clash Display', sans-serif;
    color: var(--text-main);
    font-size: clamp(2rem, 3.6vw, 3.15rem);
    line-height: 1.06;
    letter-spacing: -.04em;
    font-weight: 700;
  }

  /* ── Logo strip ──────────────────────────────────────────── */
  .logo-strip {
    display: grid;
    grid-template-columns: repeat(3, minmax(0, 1fr));
    gap: 1rem;
    margin-bottom: 1.25rem;
  }

  .logo-strip-item {
    border: 1px solid var(--border-color);
    border-radius: 18px;
    background: var(--card-bg);
    padding: 1.1rem 1rem;
    display: flex;
    align-items: center;
    gap: .9rem;
    min-height: 92px;
  }

  /* Correction : largeur/hauteur max plutôt que fixe pour les
     logos de proportions différentes (SVG APEC vs PNG partenaires) */
  .logo-strip-item img {
    width: 64px;
    height: 64px;
    max-width: 64px;
    max-height: 64px;
    object-fit: contain;
    flex-shrink: 0;
  }

  .logo-strip-copy {
    display: flex;
    flex-direction: column;
    gap: .25rem;
    min-width: 0;
  }

  .logo-strip-title {
    color: var(--text-main);
    font-size: .95rem;
    font-weight: 700;
    line-height: 1.3;
  }

  .logo-strip-meta {
    color: var(--text-soft);
    font-size: .8rem;
    line-height: 1.5;
  }

  /* ── Projects grid ───────────────────────────────────────── */
  .projects-grid {
    display: grid;
    grid-template-columns: repeat(3, minmax(0, 1fr));
    gap: 1.25rem;
  }

  .project-card {
    background: var(--card-bg);
    border: 1px solid var(--border-color);
    border-radius: 22px;
    overflow: hidden;
    transition: transform .25s ease, border-color .25s ease, box-shadow .25s ease;
    display: flex;
    flex-direction: column;
    min-height: 100%;
  }

  .project-card:hover {
    transform: translateY(-6px);
    border-color: var(--blue-bdr);
    box-shadow: 0 20px 44px rgba(0, 0, 0, .08);
  }

  .project-card-top {
    min-height: 160px;
    padding: 1.25rem;
    border-bottom: 1px solid var(--border-color);
    display: flex;
    align-items: center;
    justify-content: center;
    background:
      radial-gradient(circle at 20% 20%, rgba(56, 189, 248, .08), transparent 36%),
      radial-gradient(circle at 80% 80%, rgba(34, 197, 94, .08), transparent 36%),
      var(--surface-soft);
  }

  .project-card-top img {
    max-width: 100%;
    max-height: 78px;
    object-fit: contain;
  }

  .project-card-body {
    padding: 1.35rem;
    display: flex;
    flex-direction: column;
    gap: .9rem;
    flex-grow: 1;
  }

  /* .project-kicker aligne sur .tag global (même rôle visuel) */
  .project-kicker {
    display: inline-flex;
    width: fit-content;
    padding: .32rem .7rem;
    border-radius: 999px;
    background: var(--blue-dim);
    border: 1px solid var(--blue-bdr);
    color: var(--blue-lt);
    font-size: .68rem;
    text-transform: uppercase;
    letter-spacing: .12em;
    font-weight: 800;
  }

  .project-card h3 {
    font-family: 'Clash Display', sans-serif;
    color: var(--text-main);
    font-size: 1.45rem;
    line-height: 1.12;
    letter-spacing: -.03em;
    font-weight: 700;
  }

  .project-card p {
    color: var(--text-muted);
    line-height: 1.75;
    font-size: .98rem;
    font-weight: 500;
  }

  .project-chips {
    display: flex;
    flex-wrap: wrap;
    gap: .5rem;
  }

  .project-chip {
    display: inline-flex;
    padding: .38rem .7rem;
    border-radius: 999px;
    background: var(--surface-soft);
    border: 1px solid var(--border-color);
    color: var(--text-main);
    font-size: .72rem;
    font-weight: 700;
  }

  /* Correction : suppression des styles inline sur les boutons ;
     on laisse .btn-pri / .btn-sec s'appliquer tel quel (CSS global). */
  .project-link-row {
    margin-top: auto;
    display: flex;
    gap: .75rem;
    flex-wrap: wrap;
  }

  /* ── Workflow steps ──────────────────────────────────────── */
  .steps-grid {
    display: grid;
    grid-template-columns: repeat(3, minmax(0, 1fr));
    gap: 1rem;
  }

  .step-card {
    background: var(--card-bg);
    border: 1px solid var(--border-color);
    border-radius: 20px;
    padding: 1.25rem;
  }

  .step-num {
    font-family: 'Clash Display', sans-serif;
    color: var(--blue-lt);
    font-size: 1.45rem;
    line-height: 1;
    margin-bottom: .6rem;
    font-weight: 700;
  }

  .step-title {
    color: var(--text-main);
    font-size: 1.08rem;
    font-weight: 700;
    margin-bottom: .45rem;
  }

  .step-desc {
    color: var(--text-muted);
    font-size: .96rem;
    line-height: 1.7;
  }

  /* ── CTA panel ────────────────────────────────────────────── */
  .cta-panel {
    background: linear-gradient(135deg, rgba(56, 189, 248, .06), rgba(34, 197, 94, .05));
    border: 1px solid var(--border-color);
    border-radius: 24px;
    padding: 1.5rem;
  }

  .cta-panel h2 {
    font-family: 'Clash Display', sans-serif;
    color: var(--text-main);
    font-size: clamp(1.8rem, 3vw, 2.8rem);
    line-height: 1.06;
    letter-spacing: -.03em;
    margin-bottom: .6rem;
    font-weight: 700;
  }

  /* Correction : .cta-panel .lead hérite de .lead global.
     On ajoute seulement la marge spécifique au contexte CTA. */
  .cta-panel .lead {
    margin-bottom: 1rem;
  }

  /* ── Responsive ──────────────────────────────────────────── */
  @media (max-width: 1100px) {
    .hero-grid,
    .projects-grid,
    .logo-strip,
    .steps-grid {
      grid-template-columns: 1fr 1fr;
    }

    .projects-title {
      max-width: 14ch;
    }
  }

  @media (max-width: 780px) {
    #page-hero,
    #portfolio,
    #workflows,
    #final-cta {
      padding: 3.75rem 0;
    }

    .hero-grid,
    .projects-grid,
    .logo-strip,
    .steps-grid {
      grid-template-columns: 1fr;
    }

    .hero-panel {
      padding: 1rem;
    }

    .hero-board {
      min-height: 280px;
    }

    .logo-wall {
      grid-template-columns: 1fr;
    }

    .metric-row {
      grid-template-columns: 1fr;
    }

    .project-card-top {
      min-height: 140px;
    }
  }
</style>
@endpush

@section('contain')

{{-- ═══════════════════════════════════════════════════════════
     HERO
     ═══════════════════════════════════════════════════════════ --}}
<section id="page-hero">
  <div class="section-wrap">
    <div class="hero-grid">

      <div class="hero-copy">
        {{-- Breadcrumb — classe globale ph-breadcrumb --}}
        <div class="ph-breadcrumb">
          <a href="{{ url('/') }}">{{ __('Home') }}</a>
          <span>&rsaquo;</span>
          <span class="curr">{{ __('Projects') }}</span>
        </div>

        {{-- Eyebrow : classe globale .tag (cohérent avec toutes les pages) --}}
        <span class="tag">{{ __('Portfolio') }}</span>

        <h1 class="projects-title">
          {{ __('Projects delivered with clarity and business direction.') }}
        </h1>

        <p class="projects-lead">
          {{ __('Selected work that reflects how DigiTexia presents organizations online: clear positioning, credible interfaces, and delivery that supports real business goals.') }}
        </p>

        <div class="hero-actions">
          <a href="{{ url('/contact-us') }}" class="btn-pri">
            {{ __('Book a Consultation') }}
            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" aria-hidden="true">
              <path d="M2 7h10M7 2l5 5-5 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </a>
          <a href="{{ url('/solutions') }}" class="btn-sec">{{ __('Explore Solutions') }}</a>
        </div>
      </div>

      <div class="hero-panel rv d1">
        <div class="hero-board">
          <div class="board-top">
            <span class="board-label">{{ __('Selected Clients') }}</span>
            <span class="board-note">{{ __('Portfolio highlights') }}</span>
          </div>

          <div class="logo-wall">
            <div class="logo-tile">
              <img src="{{ asset('partners/partner-2.png') }}" alt="CREMIN-CAM logo">
            </div>
            <div class="logo-tile">
              <img src="{{ asset('partners/apec-logo-white--BtJLi1d.svg') }}" alt="APEC logo">
            </div>
            <div class="logo-tile">
              <img src="{{ asset('partners/partner-1.png') }}" alt="Light Group logo">
            </div>
          </div>

          <div class="metric-row">
            <div class="metric-card">
              <div class="metric-value blue">03</div>
              <div class="metric-label">{{ __('Client stories') }}</div>
            </div>
            <div class="metric-card">
              <div class="metric-value green">100%</div>
              <div class="metric-label">{{ __('Business-focused') }}</div>
            </div>
            <div class="metric-card">
              <div class="metric-value orange">24/7</div>
              <div class="metric-label">{{ __('Accessible online') }}</div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

{{-- ═══════════════════════════════════════════════════════════
     PORTFOLIO
     ═══════════════════════════════════════════════════════════ --}}
<section id="portfolio">
  <div class="section-wrap">

    <div class="section-head rv">
      {{-- .tag : classe globale, cohérente avec les autres pages --}}
      <span class="tag">{{ __('Selected Work') }}</span>
      <h2>{{ __('Client-facing work that feels credible at a glance.') }}</h2>
      {{-- .lead : classe globale — pas besoin de la redéfinir --}}
      <p class="lead">
        {{ __('These examples are presented with the logos and links that matter, so visitors can see the relationship, the output, and the business context without noise.') }}
      </p>
    </div>

    <div class="logo-strip rv d1">
      <div class="logo-strip-item">
        <img src="{{ asset('partners/partner-2.png') }}" alt="CREMIN-CAM logo">
        <div class="logo-strip-copy">
          <div class="logo-strip-title">CREMIN-CAM</div>
          <div class="logo-strip-meta">{{ __('Website project and digital presence') }}</div>
        </div>
      </div>
      <div class="logo-strip-item">
        <img src="{{ asset('partners/apec-logo-white--BtJLi1d.svg') }}" alt="APEC logo">
        <div class="logo-strip-copy">
          <div class="logo-strip-title">APEC</div>
          <div class="logo-strip-meta">{{ __('Social presence and event communication') }}</div>
        </div>
      </div>
      <div class="logo-strip-item">
        <img src="{{ asset('partners/partner-1.png') }}" alt="Light Group logo">
        <div class="logo-strip-copy">
          <div class="logo-strip-title">Light Group</div>
          <div class="logo-strip-meta">{{ __('Platform and brand presentation') }}</div>
        </div>
      </div>
    </div>

    <div class="projects-grid">

      <article class="project-card rv d1">
        <div class="project-card-top">
          <img src="{{ asset('partners/partner-2.png') }}" alt="CREMIN-CAM logo">
        </div>
        <div class="project-card-body">
          <span class="project-kicker">{{ __('Website design') }}</span>
          <h3>{{ __('CREMIN-CAM website') }}</h3>
          <p>{{ __('Modern, mobile-first website created to present the organization clearly and guide visitors toward action.') }}</p>
          <div class="project-chips">
            <span class="project-chip">{{ __('Business presence') }}</span>
            <span class="project-chip">{{ __('Lead capture') }}</span>
            <span class="project-chip">{{ __('Mobile-first') }}</span>
          </div>
          {{-- Correction : suppression des styles inline sur les boutons --}}
          <div class="project-link-row">
            <a href="https://www.cremin-cam.org" target="_blank" rel="noreferrer" class="btn-pri">
              {{ __('Visit site') }}
            </a>
          </div>
        </div>
      </article>

      <article class="project-card rv d2">
        <div class="project-card-top">
          <img src="{{ asset('partners/apec-logo-white--BtJLi1d.svg') }}" alt="APEC logo">
        </div>
        <div class="project-card-body">
          <span class="project-kicker">{{ __('Social design') }}</span>
          <h3>{{ __('APEC Facebook content') }}</h3>
          <p>{{ __('Visual content crafted to support communication, strengthen recognition and keep the brand active online.') }}</p>
          <div class="project-chips">
            <span class="project-chip">{{ __('Content design') }}</span>
            <span class="project-chip">{{ __('Community awareness') }}</span>
            <span class="project-chip">{{ __('Brand consistency') }}</span>
          </div>
          <div class="project-link-row">
            <a href="https://web.facebook.com/profile.php?id=61575062085703&locale=fr_FR" target="_blank" rel="noreferrer" class="btn-sec">
              {{ __('Open profile') }}
            </a>
          </div>
        </div>
      </article>

      <article class="project-card rv d3">
        <div class="project-card-top">
          <img src="{{ asset('partners/partner-1.png') }}" alt="Light Group logo">
        </div>
        <div class="project-card-body">
          <span class="project-kicker">{{ __('UX / UI') }}</span>
          <h3>{{ __('Light Group platform') }}</h3>
          <p>{{ __('A clean digital presentation with refined layouts and a more structured experience for visitors and stakeholders.') }}</p>
          <div class="project-chips">
            <span class="project-chip">{{ __('Interface clarity') }}</span>
            <span class="project-chip">{{ __('Visual hierarchy') }}</span>
            <span class="project-chip">{{ __('Business-facing') }}</span>
          </div>
          <div class="project-link-row">
            <a href="https://www.lightgroup.co.com/" target="_blank" rel="noreferrer" class="btn-pri">
              {{ __('Visit site') }}
            </a>
          </div>
        </div>
      </article>

    </div>
  </div>
</section>

{{-- ═══════════════════════════════════════════════════════════
     WORKFLOWS
     ═══════════════════════════════════════════════════════════ --}}
<section id="workflows">
  <div class="section-wrap">

    <div class="section-head rv">
      <span class="tag">{{ __('How we work') }}</span>
      <h2>{{ __('From brief to polished result.') }}</h2>
      <p class="lead">
        {{ __('We keep the process straightforward: understand the audience, structure the message, and deliver a result that reads as professional from the first glance.') }}
      </p>
    </div>

    <div class="steps-grid rv d1">
      <div class="step-card">
        <div class="step-num">01</div>
        <div class="step-title">{{ __('Understand') }}</div>
        <div class="step-desc">{{ __('We align the design with your message, audience and business priorities.') }}</div>
      </div>
      <div class="step-card">
        <div class="step-num">02</div>
        <div class="step-title">{{ __('Structure') }}</div>
        <div class="step-desc">{{ __('We craft layouts, spacing and visual hierarchy that feel clean and intentional.') }}</div>
      </div>
      <div class="step-card">
        <div class="step-num">03</div>
        <div class="step-title">{{ __('Deliver') }}</div>
        <div class="step-desc">{{ __('We finish with responsive output that works across desktop and mobile screens.') }}</div>
      </div>
    </div>

  </div>
</section>

{{-- ═══════════════════════════════════════════════════════════
     FINAL CTA
     ═══════════════════════════════════════════════════════════ --}}
<section id="final-cta">
  <div class="section-wrap">
    <div class="cta-panel rv">
      <span class="tag">{{ __('Ready to move forward?') }}</span>
      <h2>{{ __('Need a project presentation that feels more credible?') }}</h2>
      {{-- .lead hérite du CSS global — .cta-panel .lead n'ajoute que la marge --}}
      <p class="lead">
        {{ __('Let us shape the next project page so it looks less like a placeholder and more like a real business asset.') }}
      </p>
      <div class="section-actions">
        <a href="{{ url('/contact-us') }}" class="btn-pri">
          {{ __('Start Your Project') }}
          <svg width="14" height="14" viewBox="0 0 14 14" fill="none" aria-hidden="true">
            <path d="M2 7h10M7 2l5 5-5 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </a>
        <a href="{{ url('/solutions') }}" class="btn-sec">{{ __('View Solutions') }}</a>
      </div>
    </div>
  </div>
</section>

@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {
  const obs = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add('vis');
        obs.unobserve(entry.target);
      }
    });
  }, { threshold: 0.1 });

  document.querySelectorAll('.rv').forEach((el) => obs.observe(el));

  const navEl = document.getElementById('mainNav');
  if (navEl) {
    window.addEventListener('scroll', () => {
      navEl.classList.toggle('sc', window.scrollY > 50);
    });
  }

  const ddToggle = document.querySelector('.nav-dropdown > a');
  const ddMenu   = document.querySelector('.dropdown-menu');
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
});
</script>
@endpush