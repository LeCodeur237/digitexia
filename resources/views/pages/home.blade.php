@extends('index')

@push('styles')
<link href="https://fonts.googleapis.com/css2?family=Clash+Display:wght@400;500;600;700&family=Plus+Jakarta+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/home-digitexia.css') }}">
@endpush

@section('fullpage')
@include('partials.header')

<!-- --- SECTION 1 — HERO --- -->
<section id="hero">
  <div class="hero-bg"></div>
  <div class="hero-grid"></div>

  <div class="hero-inner">
    <!-- Left -->
    <div class="hero-left">

      <h1>Accelerate Your Business<br><em>Digital Transformation.</em></h1>

      <p class="hero-sub">DigiTexia designs and builds intelligent digital solutions that empower companies to automate processes, enhance internal management, and optimize team performance. Transition from manual workflows to scalable digital platforms that reduce operational errors and provide total visibility.</p>

      <div class="hero-btns">
        <a href="#cta-final" class="btn-pri">
          Request a Demo
          <svg width="14" height="14" viewBox="0 0 14 14" fill="none"><path d="M2 7h10M7 2l5 5-5 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </a>
        <a href="#solutions" class="btn-sec">Explore Our Solutions</a>
      </div>
    </div>

    <!-- Right: Dashboard mockup -->
    <div class="hero-visual">
      <div class="mockup">
        <div class="mkbar">
          <div class="dot dr"></div><div class="dot dy"></div><div class="dot dg"></div>
          <span class="mktitle">DigiTexia · Operations Dashboard</span>
        </div>
        <div class="mkbody">
          <div class="mksidebar">
            <div class="mks on"><span class="mks-ic"></span>Dashboard</div>
            <div class="mks"><span class="mks-ic mks-ic-round"></span>Analytics</div>
            <div class="mks"><span class="mks-ic mks-ic-triangle"></span>Performance</div>
            <div class="mks"><span class="mks-ic mks-ic-cut"></span>Inventory</div>
            <div class="mks"><span class="mks-ic"></span>Reports</div>
            <div class="mks"><span class="mks-ic mks-ic-round"></span>Settings</div>
          </div>
          <div class="mkcontent">
            <div class="mk-stats">
              <div class="msc"><div class="msc-l">Tasks Done</div><div class="msc-v">2,847</div><div class="msc-g">? 18.2%</div></div>
              <div class="msc"><div class="msc-l">Efficiency</div><div class="msc-v">94%</div><div class="msc-g">? 6.4%</div></div>
              <div class="msc"><div class="msc-l">Errors</div><div class="msc-v">0.3%</div><div class="msc-g msc-g-blue">? 91%</div></div>
              <div class="msc"><div class="msc-l">Active Users</div><div class="msc-v">312</div><div class="msc-g">? 24%</div></div>
            </div>
            <div class="mk-chart">
              <div class="mkc-lbl">Operational Performance — Last 12 Weeks</div>
              <div class="bars">
                <div class="bar b0"></div><div class="bar b1"></div>
                <div class="bar b2"></div><div class="bar b3"></div>
                <div class="bar b4"></div><div class="bar b5"></div>
                <div class="bar b6"></div><div class="bar b7"></div>
                <div class="bar b8"></div><div class="bar b9"></div>
                <div class="bar b10"></div><div class="bar b11"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- --- SECTION 2 — THE PROBLEM --- -->
<section id="problem">
  <div class="wrap">
    <div class="problem-intro">
      <div class="rv">
        <span class="tag">The Problem</span>
        <h2>Why companies lose time and revenue with fragmented systems.</h2>
        <p class="lead">Many organizations still manage internal operations using disconnected tools like Excel, email threads, or paper documents. As businesses grow, these limitations become a critical bottleneck for productivity, accuracy, and growth.</p>
      </div>
      <div class="problem-severity rv d1">
        <div class="problem-severity-title">Impact Severity</div>
        <div class="sev-row">
          <div class="sev-label"><span>Time Loss</span><strong class="sev-critical">Critical</strong></div>
          <div class="sev-track"><div class="sev-fill sev-92"></div></div>
        </div>
        <div class="sev-row">
          <div class="sev-label"><span>Data Errors</span><strong class="sev-critical">Critical</strong></div>
          <div class="sev-track"><div class="sev-fill sev-88"></div></div>
        </div>
        <div class="sev-row">
          <div class="sev-label"><span>Visibility</span><strong class="sev-high">High</strong></div>
          <div class="sev-track"><div class="sev-fill sev-78 sev-amber"></div></div>
        </div>
        <div class="sev-row">
          <div class="sev-label"><span>Collaboration</span><strong class="sev-high">High</strong></div>
          <div class="sev-track"><div class="sev-fill sev-72 sev-amber"></div></div>
        </div>
        <div class="sev-row">
          <div class="sev-label"><span>Traceability</span><strong class="sev-medium">Medium</strong></div>
          <div class="sev-track"><div class="sev-fill sev-62 sev-blue"></div></div>
        </div>
      </div>
    </div>

    <div class="pain-grid">
      <article class="pain-card rv d1">
        <div class="pain-card-head"><span class="pain-card-num">01</span><span class="pain-ico"><i class="ti ti-clock"></i></span></div>
        <h3 class="pain-title">Time Wasted on Repetitive Tasks</h3>
        <p class="pain-desc">Teams spend hours re-entering data, cross-checking files, and manually preparing reports instead of executing high-value work.</p>
      </article>
      <article class="pain-card rv d2">
        <div class="pain-card-head"><span class="pain-card-num">02</span><span class="pain-ico"><i class="ti ti-eye"></i></span></div>
        <h3 class="pain-title">No Real-Time Visibility</h3>
        <p class="pain-desc">Decision-makers work with outdated snapshots and disconnected information, which slows response time and increases risk.</p>
      </article>
      <article class="pain-card rv d3">
        <div class="pain-card-head"><span class="pain-card-num">03</span><span class="pain-ico"><i class="ti ti-alert-triangle"></i></span></div>
        <h3 class="pain-title">Human Errors & Data Silos</h3>
        <p class="pain-desc">Manual data entry and fragmented tools create inconsistencies across departments and expensive correction cycles.</p>
      </article>
      <article class="pain-card rv d1">
        <div class="pain-card-head"><span class="pain-card-num">04</span><span class="pain-ico"><i class="ti ti-message-circle"></i></span></div>
        <h3 class="pain-title">Communication Friction</h3>
        <p class="pain-desc">Approvals and updates scattered in email and chat lead to delays, misunderstandings, and missed execution windows.</p>
      </article>
      <article class="pain-card rv d2">
        <div class="pain-card-head"><span class="pain-card-num">05</span><span class="pain-ico"><i class="ti ti-search"></i></span></div>
        <h3 class="pain-title">Poor Information Traceability</h3>
        <p class="pain-desc">Auditability suffers when data is split across spreadsheets, inboxes, and paper files, increasing compliance exposure.</p>
      </article>
      <article class="pain-card pain-bridge rv d3">
        <div class="pain-bridge-icon"><i class="ti ti-link"></i></div>
        <h3 class="pain-title">DigiTexia bridges all these gaps</h3>
        <p class="pain-desc">We centralize and automate your core operations, turning scattered tools into one intelligent platform.</p>
        <a href="#solutions" class="btn-pri pain-bridge-btn">Explore Solutions</a>
      </article>
    </div>

    <div class="bridge rv">
      <strong>DigiTexia bridges these gaps</strong> by centralizing and automating your core operations, turning scattered tools into one intelligent, connected platform.
      </div>
  </div>
</section>

<!-- --- SECTION 3 — SOLUTIONS --- -->
<section id="solutions">
  <div class="sol-inner">
    <div class="sol-head rv" style="display: flex; justify-content: space-between; align-items: flex-end; gap: 4rem; flex-wrap: wrap; margin-bottom: 3rem;">
      <div style="flex: 1.2; min-width: 300px;">
        <span class="tag">Nos solutions</span>
        <h2 style="margin-bottom: 0;">Une architecture numérique pour chaque pilier de votre entreprise.</h2>
      </div>
      <div style="flex: 1; min-width: 300px;">
        <p class="lead lead-sm" style="margin-bottom: 0.5rem;">Nous avons conçu un écosystème de produits intelligents pour remplacer vos processus manuels par une efficacité automatisée.</p>
      </div>
    </div>

    <div class="pain-grid rv d1">
      <!-- Card 1: FlexiCare context -->
      <article class="pain-card">
        <div class="pain-card-head"><span class="pain-ico" style="color: var(--blue-lt);"><i class="ti ti-users"></i></span></div>
        <h3 class="pain-title">Services & Main-d'œuvre</h3>
        <p class="pain-desc">Matching intelligent et gestion des prestataires de services domestiques avec vérification de profil intégrée.</p>
        <div class="solutions-bullets" style="margin-top: 1rem; border-top: 1px solid var(--bg-tertiary); padding-top: 1rem;">
          <div class="solutions-bullet"><i class="ti ti-check"></i> Booking en temps réel</div>
          <div class="solutions-bullet"><i class="ti ti-check"></i> Notation & Fiabilité</div>
        </div>
      </article>

      <!-- Card 2: Inventory context -->
      <article class="pain-card">
        <div class="pain-card-head"><span class="pain-ico" style="color: var(--blue-lt);"><i class="ti ti-package"></i></span></div>
        <h3 class="pain-title">Stocks & Ressources</h3>
        <p class="pain-desc">Contrôle rigoureux des inventaires multi-sites, gestion des demandes internes et alertes de stock bas.</p>
        <div class="solutions-bullets" style="margin-top: 1rem; border-top: 1px solid var(--bg-tertiary); padding-top: 1rem;">
          <div class="solutions-bullet"><i class="ti ti-check"></i> Traçabilité totale</div>
          <div class="solutions-bullet"><i class="ti ti-check"></i> Analytics de consommation</div>
        </div>
      </article>

      <!-- Card 3: Performance context -->
      <article class="pain-card">
        <div class="pain-card-head"><span class="pain-ico" style="color: var(--orange);"><i class="ti ti-chart-bar"></i></span></div>
        <h3 class="pain-title">Performance & RH</h3>
        <p class="pain-desc">Suivi des KPIs, délégation de tâches et gestion des présences pour une productivité d'équipe optimale.</p>
        <div class="solutions-bullets" style="margin-top: 1rem; border-top: 1px solid var(--bg-tertiary); padding-top: 1rem;">
          <div class="solutions-bullet"><i class="ti ti-check"></i> Évaluations objectives</div>
          <div class="solutions-bullet"><i class="ti ti-check"></i> Tableaux de bord live</div>
        </div>
      </article>
    </div>

    <div class="sol-cta-row rv">
      <a href="/solutions" class="btn-sec">Découvrir toutes nos solutions</a>
    </div>
  </div>
</section>

<!-- --- SECTION 4 — WHY CHOOSE DIGITEXIA --- -->
<section id="why">
  <div class="why-inner wrap">
    <!-- Values -->
    <div class="rv">
      <span class="tag">Why Choose DigiTexia</span>
      <h2>Expertise Dedicated to Organizational Growth.</h2>
      <div class="value-list value-list-spaced">
        <div class="val-item">
          <div class="val-num">01</div>
          <div>
            <div class="val-h">Market-Specific Solutions</div>
            <p class="val-p">We build platforms specifically tailored to the unique operational challenges of the African business landscape.</p>
          </div>
        </div>
        <div class="val-item">
          <div class="val-num">02</div>
          <div>
            <div class="val-h">Simplicity & Efficiency</div>
            <p class="val-p">User interfaces designed to be intuitive, ensuring high adoption rates across all departments.</p>
          </div>
        </div>
        <div class="val-item">
          <div class="val-num">03</div>
          <div>
            <div class="val-h">Custom Development</div>
            <p class="val-p">We don't just provide software; we adapt our technology to fit your specific organizational DNA.</p>
          </div>
        </div>
        <div class="val-item">
          <div class="val-num">04</div>
          <div>
            <div class="val-h">Dedicated Support</div>
            <p class="val-p">Comprehensive guidance from deployment through long-term maintenance.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Stats panel -->
    <div class="why-panel rv d2">
      <div class="wp-title">DigiTexia by the numbers</div>
      <div class="wp-stat">
        <div><div class="wp-stat-val">10+</div><div class="wp-stat-lbl">Digital Solutions Delivered</div></div>
        <span class="wp-badge green-badge">? Growing</span>
      </div>
      <div class="wp-stat">
        <div><div class="wp-stat-val">5+</div><div class="wp-stat-lbl">Years of Combined Experience</div></div>
        <span class="wp-badge blue-badge">Pan-African</span>
      </div>
      <div class="wp-stat">
        <div><div class="wp-stat-val">100%</div><div class="wp-stat-lbl">Client-Focused Approach</div></div>
        <span class="wp-badge green-badge">Satisfied</span>
      </div>
      <div class="wp-stat">
        <div><div class="wp-stat-val">0</div><div class="wp-stat-lbl">Compromise on Quality</div></div>
        <span class="wp-badge blue-badge">Always</span>
      </div>
    </div>
  </div>
</section>

<!-- --- SECTION 5 — WORKFLOW --- -->
<section id="workflow">
  <div class="wf-inner">
    <div class="rv">
      <span class="tag">Our Workflow</span>
      <h2>A Structured Path to Performance.</h2>
    </div>
    <div class="wf-steps">
      <div class="wf-card rv d1">
        <div class="wf-num">01</div>
        <div class="wf-title">Needs Analysis</div>
        <div class="wf-desc">We audit your existing processes to identify bottlenecks and digitization opportunities.</div>
      </div>
      <div class="wf-card rv d2">
        <div class="wf-num">02</div>
        <div class="wf-title">Solution Design</div>
        <div class="wf-desc">We architect a software framework specifically mapped to your business goals.</div>
      </div>
      <div class="wf-card rv d3">
        <div class="wf-num">03</div>
        <div class="wf-title">Development & Testing</div>
        <div class="wf-desc">Our engineering team builds your solution with a focus on security, speed, and reliability.</div>
      </div>
      <div class="wf-card rv d4">
        <div class="wf-num">04</div>
        <div class="wf-title">Deployment & Training</div>
        <div class="wf-desc">We manage the "Go-Live" phase and train your teams to ensure a seamless transition.</div>
      </div>
    </div>
  </div>
</section>

<!-- --- SECTION 6 — IMPACT --- -->
<section id="impact">
  <div class="impact-inner">
    <div class="impact-top">
      <div class="rv">
        <span class="tag">The Impact</span>
        <h2>Tangible Benefits for Your Organization.</h2>
      </div>
      <p class="lead rv d1">The measurable outcomes our platforms deliver — from day one through long-term operation.</p>
    </div>
    <div class="impact-grid rv">
      <div class="imp-cell">
        <span class="imp-emoji"><i class="ti ti-bolt"></i></span>
        <div class="imp-title">Full Automation of Internal Workflows</div>
        <div class="imp-sub">Eliminate repetitive manual processes entirely</div>
      </div>
      <div class="imp-cell">
        <span class="imp-emoji"><i class="ti ti-bullseye"></i></span>
        <div class="imp-title">Significant Reduction in Operational Errors</div>
        <div class="imp-sub">Near-zero human errors in day-to-day operations</div>
      </div>
      <div class="imp-cell">
        <span class="imp-emoji"><i class="ti ti-handshake"></i></span>
        <div class="imp-title">Enhanced Cross-Departmental Collaboration</div>
        <div class="imp-sub">Seamless information flow between all teams</div>
      </div>
      <div class="imp-cell">
        <span class="imp-emoji"><i class="ti ti-trending-up"></i></span>
        <div class="imp-title">Real-Time Data for Better Decisions</div>
        <div class="imp-sub">Live dashboards for informed leadership</div>
      </div>
      <div class="imp-cell">
        <span class="imp-emoji"><i class="ti ti-rocket"></i></span>
        <div class="imp-title">Increased Overall Team Productivity</div>
        <div class="imp-sub">Measurable performance gains across all departments</div>
      </div>
    </div>
  </div>
</section>

<!-- --- SECTION 7 — FINAL CTA --- -->
<section id="cta-final">
  <div class="cta-inner rv">
    <span class="tag">Get Started</span>
    <h2>Transform Your Business<br>Management Today.</h2>
    <p class="lead">Top-performing companies leverage digital tools to stay competitive. Discover how DigiTexia can modernize your operations.</p>
    <div class="cta-btns">
      <a href="tel:+237650945280" class="btn-pri">
        Request a Demo
        <svg width="14" height="14" viewBox="0 0 14 14" fill="none"><path d="M2 7h10M7 2l5 5-5 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
      </a>
      <a href="/contact-us" class="btn-sec">Contact Our Experts</a>
    </div>
  </div>
</section>

@include('partials.footer')

@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {
  const obs = new IntersectionObserver((entries) => {
    entries.forEach((e) => {
      if (e.isIntersecting) {
        e.target.classList.add('vis');
        obs.unobserve(e.target);
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
  const navToggle = document.querySelector('.nav-toggle');
  const navPanel = document.getElementById('navPanel');
  function closeMobileNav() {
    if (navToggle && navPanel) {
      navPanel.classList.remove('is-open');
      navToggle.classList.remove('is-open');
      navToggle.setAttribute('aria-expanded', 'false');
      const openDropdown = navPanel.querySelector('.dropdown-menu.is-open');
      if (openDropdown) {
        openDropdown.classList.remove('is-open');
      }
    }
  }
  if (navToggle && navPanel) {
    navToggle.addEventListener('click', function () {
      const isOpen = navPanel.classList.toggle('is-open');
      navToggle.classList.toggle('is-open', isOpen);
      navToggle.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
    });
    navPanel.querySelectorAll('a').forEach(function (link) {
      link.addEventListener('click', function () {
        if (window.innerWidth <= 900) {
          closeMobileNav();
        }
      });
    });
    document.addEventListener('click', function (e) {
      if (window.innerWidth <= 900 && !e.target.closest('#mainNav')) {
        closeMobileNav();
      }
    });
    window.addEventListener('resize', function () {
      if (window.innerWidth > 900) {
        closeMobileNav();
      }
    });
    document.addEventListener('keydown', function (e) {
      if (e.key === 'Escape') {
        closeMobileNav();
      }
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

