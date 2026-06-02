@extends('index')

@section('page_title', 'Projets | DigiTexia')

@push('styles')
<link href="https://fonts.googleapis.com/css2?family=Clash+Display:wght@400;500;600;700&family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/problem-digitexia.css') }}">
<style>
    #page-hero {
        position: relative;
        overflow: hidden;
        padding: 6.5rem 0 3.5rem;
        isolation: isolate;
        background: linear-gradient(135deg, rgba(56, 189, 248, .04) 0%, rgba(34, 197, 94, .03) 100%);
    }

    #page-hero::before,
    #page-hero::after {
        content: "";
        position: absolute;
        inset: auto;
        border-radius: 999px;
        pointer-events: none;
        z-index: -1;
        filter: blur(12px);
    }

    #page-hero::before {
        width: 32rem;
        height: 32rem;
        top: -14rem;
        right: -12rem;
        background: radial-gradient(circle, rgba(56, 189, 248, .12), transparent 70%);
        opacity: .7;
    }

    #page-hero::after {
        width: 24rem;
        height: 24rem;
        bottom: -10rem;
        left: -8rem;
        background: radial-gradient(circle, rgba(34, 197, 94, .1), transparent 70%);
        opacity: .6;
    }

    .projects-shell {
        display: grid;
        grid-template-columns: minmax(0, 1.1fr) minmax(320px, .9fr);
        gap: 3rem;
        align-items: center;
    }

    .ph-left {
        display: flex;
        flex-direction: column;
        gap: 1.5rem;
        max-width: 42rem;
    }

    .ph-breadcrumb {
        display: flex;
        align-items: center;
        gap: .55rem;
        flex-wrap: wrap;
        color: var(--text-muted);
        font-size: .85rem;
    }

    .ph-breadcrumb a {
        color: var(--text-muted);
        text-decoration: none;
        transition: color .2s ease;
    }

    .ph-breadcrumb a:hover {
        color: var(--blue-lt);
    }

    .tag-blue {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: fit-content;
        padding: .42rem .9rem;
        border-radius: 999px;
        background: var(--blue-dim);
        border: 1px solid var(--blue-bdr);
        color: var(--blue-lt);
        font-size: .7rem;
        font-weight: 800;
        letter-spacing: .12em;
        text-transform: uppercase;
        margin-bottom: .1rem;
        box-shadow: 0 10px 30px rgba(0,0,0,.08);
    }

    .projects-title {
        font-family: 'Clash Display', sans-serif;
        font-size: clamp(2.65rem, 5.5vw, 5.2rem);
        line-height: .95;
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
        color: var(--text-muted);
        font-size: 1.1rem;
        line-height: 1.8;
        max-width: 58ch;
        font-weight: 500;
    }

    .ph-btns {
        display: flex;
        flex-wrap: wrap;
        gap: 1rem;
        margin-top: .75rem;
    }

    .projects-hero-panel {
        background: var(--card-bg);
        border: 1px solid var(--border-color);
        border-radius: 32px;
        padding: 1.5rem;
        box-shadow: 0 20px 50px rgba(0, 0, 0, .08);
        backdrop-filter: blur(20px);
        transition: transform .3s ease, box-shadow .3s ease;
        animation: slideUpFade .6s ease-out .2s both;
    }

    .projects-hero-panel:hover {
        transform: translateY(-8px);
        box-shadow: 0 30px 70px rgba(0, 0, 0, .12);
    }

    @keyframes slideUpFade {
        from {
            opacity: 0;
            transform: translateY(24px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .hero-art {
        position: relative;
        height: 310px;
        border-radius: 24px;
        overflow: hidden;
        border: 1px solid var(--border-color);
        background:
            radial-gradient(circle at 15% 20%, rgba(56, 189, 248, .2), transparent 32%),
            radial-gradient(circle at 85% 78%, rgba(34, 197, 94, .16), transparent 34%),
            var(--surface-bg);
    }

    .hero-art::before {
        content: "";
        position: absolute;
        inset: 0;
        background:
            linear-gradient(90deg, transparent 49.5%, var(--border-color) 50%, transparent 50.5%),
            linear-gradient(180deg, transparent 49.5%, var(--border-color) 50%, transparent 50.5%);
        opacity: .35;
    }

    .hero-art::after {
        content: "";
        position: absolute;
        inset: 1.2rem;
        border-radius: 20px;
        border: 1px dashed color-mix(in srgb, var(--border-color) 60%, transparent);
        opacity: .7;
    }

    .hero-art-icons {
        position: relative;
        z-index: 2;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 1rem;
        height: 100%;
    }

    .hero-icon-card {
        width: 64px;
        height: 64px;
        border-radius: 16px;
        display: grid;
        place-items: center;
        background: var(--card-bg);
        border: 1px solid var(--border-color);
        box-shadow: 0 14px 30px rgba(0,0,0,.14);
    }

    .hero-icon-card i {
        font-size: 1.6rem;
        color: var(--blue-lt);
    }

    .hero-icon-card.alt i {
        color: var(--green);
    }

    .hero-icon-card.third i {
        color: var(--orange);
    }

    .hero-icon-card.big {
        width: 74px;
        height: 74px;
        transform: translateY(-14px);
    }

    .hero-metrics {
        display: grid;
        grid-template-columns: repeat(3, minmax(0, 1fr));
        gap: 1rem;
        margin-top: 1.2rem;
    }

    .metric-card {
        padding: 1.15rem 1rem;
        border-radius: 20px;
        background: var(--surface-soft);
        border: 1px solid var(--border-color);
        text-align: center;
        transition: all .3s ease;
        cursor: pointer;
    }

    .metric-card:hover {
        transform: translateY(-4px);
        border-color: var(--blue-bdr);
        background: var(--card-bg);
        box-shadow: 0 12px 32px rgba(0, 0, 0, .08);
    }

    .metric-value {
        font-family: 'Clash Display', sans-serif;
        font-size: 1.75rem;
        line-height: 1;
        margin-bottom: .45rem;
        color: var(--text-main);
        font-weight: 700;
    }

    .metric-value.blue { color: var(--blue-lt); }
    .metric-value.green { color: var(--green); }
    .metric-value.orange { color: var(--orange); }

    .metric-label {
        font-size: .68rem;
        text-transform: uppercase;
        letter-spacing: .12em;
        font-weight: 800;
        color: var(--text-soft);
    }

    #stats-banner {
        padding: 0.5rem 0 1.5rem;
        background: linear-gradient(180deg, rgba(56, 189, 248, .02) 0%, rgba(34, 197, 94, .02) 100%);
    }

    .stats-inner {
        display: grid;
        grid-template-columns: repeat(4, minmax(0, 1fr));
        gap: 1.2rem;
        animation: slideUpFade .7s ease-out .3s both;
    }

    .stat-cell {
        background: var(--card-bg);
        border: 1px solid var(--border-color);
        border-radius: 24px;
        padding: 1.45rem 1.35rem;
        box-shadow: 0 8px 24px rgba(0, 0, 0, .04);
        transition: all .3s cubic-bezier(.25, .46, .45, .94);
        position: relative;
        overflow: hidden;
    }

    .stat-cell::before {
        content: "";
        position: absolute;
        inset: 0;
        background: linear-gradient(135deg, rgba(56, 189, 248, .05), transparent);
        opacity: 0;
        transition: opacity .3s ease;
    }

    .stat-cell:hover {
        transform: translateY(-6px);
        border-color: var(--blue-bdr);
        box-shadow: 0 16px 40px rgba(0, 0, 0, .08);
    }

    .stat-cell:hover::before {
        opacity: 1;
    }

    .stat-num {
        font-family: 'Clash Display', sans-serif;
        font-size: 1.55rem;
        line-height: 1;
        margin-bottom: .55rem;
        letter-spacing: -.03em;
        font-weight: 700;
        position: relative;
        z-index: 1;
    }

    .stat-num.blue { color: var(--blue-lt); }
    .stat-num.green { color: var(--green); }
    .stat-num.orange { color: var(--orange); }

    .stat-label {
        color: var(--text-main);
        font-size: .92rem;
        line-height: 1.6;
        margin-bottom: .35rem;
    }

    .stat-src {
        color: var(--text-soft);
        font-size: .74rem;
        text-transform: uppercase;
        letter-spacing: .12em;
        font-weight: 800;
    }

    #pain-points,
    #bridge {
        padding: 5rem 0;
    }

    .wrap {
        width: min(1200px, calc(100% - 2.5rem));
        margin: 0 auto;
    }

    .pain-intro {
        margin-bottom: 2.5rem;
        animation: slideUpFade .6s ease-out .2s both;
    }

    .tag {
        display: inline-flex;
        align-items: center;
        gap: .45rem;
        width: fit-content;
        padding: .4rem .85rem;
        border-radius: 999px;
        border: 1px solid var(--border-color);
        background: var(--surface-soft);
        color: var(--text-main);
        font-size: .72rem;
        text-transform: uppercase;
        letter-spacing: .12em;
        font-weight: 800;
        margin-bottom: .85rem;
    }

    .pain-intro h2,
    .bridge-inner h2 {
        font-family: 'Clash Display', sans-serif;
        color: var(--text-main);
        font-size: clamp(2rem, 3.5vw, 3.2rem);
        line-height: 1.1;
        letter-spacing: -.04em;
        margin-bottom: .8rem;
        font-weight: 700;
    }

    .lead {
        color: var(--text-muted);
        max-width: 68ch;
        line-height: 1.8;
        font-size: 1.05rem;
        font-weight: 500;
    }

    .pain-grid {
        display: grid;
        grid-template-columns: repeat(3, minmax(0, 1fr));
        gap: 1.5rem;
        animation: slideUpFade .7s ease-out .3s both;
    }

    .project-card {
        background: var(--card-bg);
        border: 1px solid var(--border-color);
        border-radius: 28px;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0, 0, 0, .05);
        transition: all .3s cubic-bezier(.25, .46, .45, .94);
        display: flex;
        flex-direction: column;
        position: relative;
    }

    .project-card::before {
        content: "";
        position: absolute;
        inset: 0;
        background: linear-gradient(135deg, rgba(56, 189, 248, .05), transparent);
        opacity: 0;
        transition: opacity .3s ease;
        pointer-events: none;
        z-index: 1;
    }

    .project-card:hover {
        transform: translateY(-8px);
        border-color: var(--blue-bdr);
        box-shadow: 0 24px 60px rgba(0, 0, 0, .12);
    }

    .project-card:hover::before {
        opacity: 1;
    }

    .project-card-image {
        position: relative;
        height: 240px;
        overflow: hidden;
        border-bottom: 1px solid var(--border-color);
    }

    .project-card-image::after {
        content: "";
        position: absolute;
        inset: 0;
        background: linear-gradient(180deg, transparent 40%, rgba(0, 0, 0, .12));
        pointer-events: none;
    }

    .project-card-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
        transition: transform .5s cubic-bezier(.25, .46, .45, .94);
    }

    .project-card:hover .project-card-image img {
        transform: scale(1.08);
    }

    .project-card-body {
        padding: 1.65rem;
        display: flex;
        flex-direction: column;
        flex-grow: 1;
        position: relative;
        z-index: 2;
    }

    .project-card-body h3 {
        font-family: 'Clash Display', sans-serif;
        color: var(--text-main);
        font-size: 1.55rem;
        line-height: 1.15;
        letter-spacing: -.03em;
        margin: .3rem 0 .9rem;
        font-weight: 700;
    }

    .project-card-body p {
        color: var(--text-muted);
        font-size: 1rem;
        line-height: 1.75;
        margin-bottom: 1.35rem;
        flex-grow: 1;
        font-weight: 500;
    }

    .card-actions {
        display: flex;
        gap: .75rem;
        flex-wrap: wrap;
        margin-top: auto;
    }

    .card-pill {
        display: inline-flex;
        align-items: center;
        width: fit-content;
        padding: .45rem .95rem;
        border-radius: 999px;
        background: var(--blue-dim);
        border: 1px solid var(--blue-bdr);
        color: var(--blue-lt);
        font-size: .75rem;
        text-transform: uppercase;
        letter-spacing: .12em;
        font-weight: 800;
        transition: all .2s ease;
    }

    .card-pill:hover {
        background: var(--blue);
        color: white;
        border-color: var(--blue);
    }

    .bridge-inner {
        background: var(--card-bg);
        border: 1px solid var(--border-color);
        border-radius: 32px;
        box-shadow: 0 20px 60px rgba(0, 0, 0, .08);
        padding: 2.5rem;
        animation: slideUpFade .7s ease-out .4s both;
    }

    .bridge-steps {
        display: grid;
        grid-template-columns: repeat(3, minmax(0, 1fr));
        gap: 1.5rem;
        margin: 2rem 0 1.8rem;
    }

    .bridge-step {
        position: relative;
        padding: 1.6rem;
        border-radius: 24px;
        border: 1px solid var(--border-color);
        background: var(--surface-soft);
        overflow: hidden;
        transition: all .3s cubic-bezier(.25, .46, .45, .94);
    }

    .bridge-step::before {
        content: "";
        position: absolute;
        inset: auto auto 0 0;
        width: 100%;
        height: 5px;
        background: linear-gradient(90deg, var(--blue-lt), var(--green));
        opacity: .8;
        transform: scaleX(0);
        transform-origin: left;
        transition: transform .4s cubic-bezier(.25, .46, .45, .94);
    }

    .bridge-step:hover {
        transform: translateY(-4px);
        border-color: var(--blue-bdr);
        background: var(--card-bg);
    }

    .bridge-step:hover::before {
        transform: scaleX(1);
    }

    .bridge-step-num {
        font-family: 'Clash Display', sans-serif;
        font-size: 1.65rem;
        color: var(--blue-lt);
        margin-bottom: .65rem;
        font-weight: 700;
    }

    .bridge-step-title {
        color: var(--text-main);
        font-size: 1.15rem;
        font-weight: 700;
        margin-bottom: .55rem;
    }

    .bridge-step-desc {
        color: var(--text-muted);
        line-height: 1.75;
        font-size: 1rem;
        font-weight: 500;
    }

    .bridge-ctas {
        display: flex;
        flex-wrap: wrap;
        gap: 1rem;
        margin-top: .8rem;
    }

    html.light-mode .projects-hero-panel,
    html.light-mode .stat-cell,
    html.light-mode .project-card,
    html.light-mode .bridge-inner,
    html.light-mode .metric-card,
    html.light-mode .bridge-step {
        box-shadow: 0 16px 40px rgba(15, 23, 42, .08);
    }

    html.light-mode .hero-art {
        background:
            radial-gradient(circle at 15% 20%, rgba(59, 130, 246, .16), transparent 32%),
            radial-gradient(circle at 85% 78%, rgba(16, 185, 129, .14), transparent 34%),
            var(--surface-bg);
    }

    html.light-mode .hero-icon-card,
    html.light-mode .metric-card,
    html.light-mode .stat-cell,
    html.light-mode .bridge-step {
        background: var(--card-bg);
    }

    @media (max-width: 1100px) {
        .projects-shell,
        .pain-grid,
        .stats-inner,
        .bridge-steps {
            grid-template-columns: 1fr 1fr;
        }

        .projects-shell {
            gap: 2rem;
        }

        .hero-metrics {
            grid-template-columns: repeat(3, minmax(0, 1fr));
        }

        .pain-grid {
            gap: 1.2rem;
        }

        .projects-title {
            max-width: 15ch;
        }
    }

    @media (max-width: 768px) {
        #page-hero {
            padding-top: 4.5rem;
            padding-bottom: 2rem;
        }

        .projects-shell,
        .pain-grid,
        .stats-inner,
        .bridge-steps {
            grid-template-columns: 1fr;
        }

        .projects-hero-panel,
        .bridge-inner {
            border-radius: 24px;
            padding: 1.25rem;
        }

        .hero-art {
            height: 260px;
        }

        .hero-metrics {
            grid-template-columns: repeat(3, minmax(0, 1fr));
        }

        .stat-cell,
        .project-card,
        .bridge-step {
            border-radius: 20px;
        }

        .project-card-image {
            height: 220px;
        }

        .bridge-inner {
            padding: 1.5rem;
        }

        .ph-btns,
        .bridge-ctas,
        .card-actions {
            flex-direction: column;
        }

        .ph-btns > a,
        .bridge-ctas > a,
        .card-actions > a {
            width: 100%;
            justify-content: center;
        }

        #pain-points,
        #bridge {
            padding: 3.5rem 0;
        }
    }

    @media (max-width: 480px) {
        #page-hero,
        #pain-points,
        #bridge {
            padding-left: 0;
            padding-right: 0;
        }

        .projects-title {
            font-size: 2.3rem;
        }

        .projects-lead,
        .lead {
            font-size: 1rem;
        }

        .hero-art {
            height: 230px;
        }

        .hero-icon-card {
            width: 58px;
            height: 58px;
            border-radius: 14px;
        }

        .hero-icon-card.big {
            width: 66px;
            height: 66px;
        }

        .project-card-body {
            padding: 1.3rem;
        }

        .project-card-body h3 {
            font-size: 1.3rem;
        }

        .stats-inner {
            grid-template-columns: repeat(2, minmax(0, 1fr));
        }
    }
</style>
@endpush

@section('contain')
<section id="page-hero">
  <div class="wrap">
    <div class="projects-shell">
      <div class="ph-left">
        <div class="ph-breadcrumb">
          <a href="{{ url('/') }}">Home</a>
          <span>&rsaquo;</span>
          <span class="curr">Projects</span>
        </div>

        <span class="tag-blue">Portfolio</span>
        <h1 class="projects-title">Projects delivered with clarity and <em>visual direction.</em></h1>
        <p class="projects-lead">Discover selected work that reflects DigiTexia’s approach to digital delivery: useful interfaces, polished storytelling, and results aligned with business goals.</p>

        <div class="ph-btns">
          <a href="{{ url('/contact-us') }}" class="btn-pri">
            Book a Consultation
            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" aria-hidden="true"><path d="M2 7h10M7 2l5 5-5 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
          </a>
          <a href="{{ url('/services') }}" class="btn-sec">Explore Services</a>
        </div>
      </div>

      <div class="projects-hero-panel rv d1">
        <div class="hero-art">
          <div class="hero-art-icons">
            <div class="hero-icon-card">
              <i class="ti ti-layout-2" aria-hidden="true"></i>
            </div>
            <div class="hero-icon-card big alt">
              <i class="ti ti-stack-2" aria-hidden="true"></i>
            </div>
            <div class="hero-icon-card third">
              <i class="ti ti-device-mobile" aria-hidden="true"></i>
            </div>
          </div>
        </div>

        <div class="hero-metrics">
          <div class="metric-card">
            <div class="metric-value blue">03</div>
            <div class="metric-label">Case studies</div>
          </div>
          <div class="metric-card">
            <div class="metric-value green">100%</div>
            <div class="metric-label">Design focus</div>
          </div>
          <div class="metric-card">
            <div class="metric-value orange">24/7</div>
            <div class="metric-label">Visibility</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="stats-banner">
  <div class="stats-inner rv">
    <div class="stat-cell">
      <div class="stat-num blue">Polished</div>
      <div class="stat-label">Visual consistency for stronger perception</div>
      <div class="stat-src">Brand Identity</div>
    </div>
    <div class="stat-cell">
      <div class="stat-num green">Mobile</div>
      <div class="stat-label">Interfaces optimized for all devices</div>
      <div class="stat-src">Responsive Design</div>
    </div>
    <div class="stat-cell">
      <div class="stat-num orange">Useful</div>
      <div class="stat-label">Tools aligned with business goals</div>
      <div class="stat-src">Digital Delivery</div>
    </div>
    <div class="stat-cell">
      <div class="stat-num blue">Fast</div>
      <div class="stat-label">Short cycles from brief to live result</div>
      <div class="stat-src">Agile Workflow</div>
    </div>
  </div>
</section>

<section id="pain-points">
  <div class="wrap">
    <div class="pain-intro rv">
      <span class="tag">Selected Work</span>
      <h2>Built to strengthen trust.</h2>
      <p class="lead">Each case study combines branding and delivery quality to help clients present themselves more professionally.</p>
    </div>

    <div class="pain-grid">
      <article class="project-card rv d1">
        <div class="project-card-image">
          <img src="{{ asset('images/service-2.jpg') }}" alt="CREMIN-CAM website">
        </div>
        <div class="project-card-body">
          <div class="card-pill">Website design</div>
          <h3>CREMIN-CAM website</h3>
          <p>Modern, mobile-first website created to showcase services and simplify lead capture.</p>
          <div class="card-actions">
            <a href="{{ url('/contact-us') }}" class="btn-pri" style="font-size:.82rem; padding:.75rem 1.1rem;">View Project</a>
          </div>
        </div>
      </article>

      <article class="project-card rv d2">
        <div class="project-card-image">
          <img src="{{ asset('images/service-3.jpg') }}" alt="APEC Facebook posters">
        </div>
        <div class="project-card-body">
          <div class="card-pill">Social design</div>
          <h3>APEC Facebook posters</h3>
          <p>Strategic visuals developed to boost event awareness and community presence.</p>
          <div class="card-actions">
            <a href="{{ url('/contact-us') }}" class="btn-sec" style="font-size:.82rem; padding:.75rem 1.1rem;">View Details</a>
          </div>
        </div>
      </article>

      <article class="project-card rv d3">
        <div class="project-card-image">
          <img src="{{ asset('images/service-4.jpg') }}" alt="Light Group platform">
        </div>
        <div class="project-card-body">
          <div class="card-pill">UX/UI design</div>
          <h3>Light Group platform</h3>
          <p>A clean, branded platform with refined layouts to reflect company values.</p>
          <div class="card-actions">
            <a href="{{ url('/contact-us') }}" class="btn-pri" style="font-size:.82rem; padding:.75rem 1.1rem;">View Project</a>
          </div>
        </div>
      </article>
    </div>
  </div>
</section>

<section id="bridge">
  <div class="wrap">
    <div class="bridge-inner rv">
      <span class="tag">How we work</span>
      <h2>From brief to polished result.</h2>
      <p class="lead">We align design with your audience and business objectives.</p>

      <div class="bridge-steps">
        <div class="bridge-step">
          <div class="bridge-step-num">01</div>
          <div class="bridge-step-title">Understand</div>
          <div class="bridge-step-desc">We align the design with your message and target audience.</div>
        </div>
        <div class="bridge-step">
          <div class="bridge-step-num">02</div>
          <div class="bridge-step-title">Structure</div>
          <div class="bridge-step-desc">We craft layouts and typography that feel clean and professional.</div>
        </div>
        <div class="bridge-step">
          <div class="bridge-step-num">03</div>
          <div class="bridge-step-title">Deliver</div>
          <div class="bridge-step-desc">We finish with responsive output that supports your real-world needs.</div>
        </div>
      </div>

      <div class="bridge-ctas">
        <a href="{{ url('/contact-us') }}" class="btn-pri">
          Start Your Project
          <svg width="14" height="14" viewBox="0 0 14 14" fill="none" aria-hidden="true"><path d="M2 7h10M7 2l5 5-5 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </a>
        <a href="{{ url('/solutions') }}" class="btn-sec">View Solutions</a>
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
});
</script>
@endpush
