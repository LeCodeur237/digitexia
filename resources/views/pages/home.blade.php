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

      <div class="hero-badge"><span class="bdot"></span> {{ __('Free Operational Assessment') }}</div>

      <h1>{{ __('Transform manual operations into scalable digital systems.') }}</h1>

      <p class="hero-sub">{{ __('DigiTexia helps organizations replace spreadsheets, paper-based approvals and scattered follow-ups with secure software, executive dashboards and automated workflows built for measurable operational performance.') }}</p>

      <div class="hero-btns">
        <a href="#cta-final" class="btn-pri">
          {{ __('Request a Free Assessment') }}
          <svg width="14" height="14" viewBox="0 0 14 14" fill="none"><path d="M2 7h10M7 2l5 5-5 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </a>
        <a href="#needs" class="btn-sec">{{ __('Explore Business Use Cases') }}</a>
      </div>

      <div class="hero-proof">
        <span><i class="ti ti-check"></i> {{ __('Process audit') }}</span>
        <span><i class="ti ti-check"></i> {{ __('Implementation roadmap') }}</span>
        <span><i class="ti ti-check"></i> {{ __('Product or custom build recommendation') }}</span>
      </div>
    </div>

    <!-- Right: Dashboard mockup -->
    <div class="hero-visual">
      <div class="mockup">
          <div class="mkbar">
          <div class="dot dr"></div><div class="dot dy"></div><div class="dot dg"></div>
          <span class="mktitle">{{ __('DigiTexia · Operations Dashboard') }}</span>
        </div>
        <div class="mkbody">
          <div class="mksidebar">
            <div class="mks on"><span class="mks-ic"></span>{{ __('Dashboard') }}</div>
              <div class="mks"><span class="mks-ic mks-ic-round"></span>{{ __('Analytics') }}</div>
              <div class="mks"><span class="mks-ic mks-ic-triangle"></span>{{ __('Performance') }}</div>
              <div class="mks"><span class="mks-ic mks-ic-cut"></span>{{ __('Inventory') }}</div>
              <div class="mks"><span class="mks-ic"></span>{{ __('Reports') }}</div>
              <div class="mks"><span class="mks-ic mks-ic-round"></span>{{ __('Settings') }}</div>
          </div>
          <div class="mkcontent">
            <div class="mk-stats">
              <div class="msc"><div class="msc-l">{{ __('Tasks Done') }}</div><div class="msc-v">2,847</div><div class="msc-g">+18.2%</div></div>
              <div class="msc"><div class="msc-l">{{ __('Efficiency') }}</div><div class="msc-v">94%</div><div class="msc-g">+6.4%</div></div>
              <div class="msc"><div class="msc-l">{{ __('Errors') }}</div><div class="msc-v">0.3%</div><div class="msc-g msc-g-blue">-91%</div></div>
              <div class="msc"><div class="msc-l">{{ __('Active Users') }}</div><div class="msc-v">312</div><div class="msc-g">+24%</div></div>
            </div>
            <div class="mk-chart">
              <div class="mkc-lbl">{{ __('Operational Performance — Last 12 Weeks') }}</div>
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

<!-- --- SECTION 2 — NEEDS --- -->
<section id="needs">
    <div class="needs-inner">
    <div class="needs-head rv">
      <span class="tag">{{ __('Business Needs') }}</span>
      <h2>{{ __('Identify the workflow with the highest impact.') }}</h2>
      <p class="lead">{{ __('Start with the operational challenge closest to your business. We recommend a ready-to-deploy DigiTexia product when it fits, or design a custom platform when your process requires it.') }}</p>
    </div>

    <div class="needs-grid rv d1">
      <a href="#solutions" class="need-card">
        <span class="need-ico"><i class="ti ti-package"></i></span>
        <h3>{{ __('Inventory, internal requests and approvals') }}</h3>
        <p>{{ __('Centralize resource tracking, validation workflows, delivery follow-up and accountability across teams or branches.') }}</p>
        <strong>{{ __('Explore InventoryPro') }}</strong>
      </a>
      <a href="#solutions" class="need-card">
        <span class="need-ico"><i class="ti ti-chart-bar"></i></span>
        <h3>{{ __('Tasks, performance and team execution') }}</h3>
        <p>{{ __('Assign work, monitor KPIs, reduce execution delays and give managers real-time visibility over team performance.') }}</p>
        <strong>{{ __('Explore Perfomia') }}</strong>
      </a>
      <a href="#solutions" class="need-card">
        <span class="need-ico"><i class="ti ti-users"></i></span>
        <h3>{{ __('Services, field agents and providers') }}</h3>
        <p>{{ __('Manage customer requests, verified providers, bookings and operational follow-up from a structured platform.') }}</p>
        <strong>{{ __('Explore FlexiCare') }}</strong>
      </a>
      <a href="#cta-final" class="need-card need-card-primary">
        <span class="need-ico"><i class="ti ti-code"></i></span>
        <h3>{{ __('A business-specific workflow') }}</h3>
        <p>{{ __('When your process is unique, we map your requirements and build a platform aligned with your operational model.') }}</p>
        <strong>{{ __('Request an assessment') }}</strong>
      </a>
    </div>
  </div>
</section>

<!-- --- SECTION 3 — THE PROBLEM --- -->
<section id="problem">
  <div class="wrap">
    <div class="problem-intro">
      <div class="rv">
        <span class="tag">{{ __('The Problem') }}</span>
        <h2>{{ __('The real cost is not software. It is operational inefficiency.') }}</h2>
        <p class="lead">{{ __('When information is fragmented, approvals are manual and reporting arrives late, teams lose time, managers lose visibility and decisions slow down. DigiTexia helps you consolidate operations into one controlled digital environment.') }}</p>
      </div>
      <div class="problem-severity rv d1">
        <div class="problem-severity-title">{{ __('Impact Severity') }}</div>
        <div class="sev-row">
          <div class="sev-label"><span>{{ __('Time Loss') }}</span><strong class="sev-critical">{{ __('Critical') }}</strong></div>
          <div class="sev-track"><div class="sev-fill sev-92"></div></div>
        </div>
        <div class="sev-row">
          <div class="sev-label"><span>{{ __('Data Errors') }}</span><strong class="sev-critical">{{ __('Critical') }}</strong></div>
          <div class="sev-track"><div class="sev-fill sev-88"></div></div>
        </div>
        <div class="sev-row">
          <div class="sev-label"><span>{{ __('Visibility') }}</span><strong class="sev-high">{{ __('High') }}</strong></div>
          <div class="sev-track"><div class="sev-fill sev-78 sev-amber"></div></div>
        </div>
        <div class="sev-row">
          <div class="sev-label"><span>{{ __('Collaboration') }}</span><strong class="sev-high">{{ __('High') }}</strong></div>
          <div class="sev-track"><div class="sev-fill sev-72 sev-amber"></div></div>
        </div>
        <div class="sev-row">
          <div class="sev-label"><span>{{ __('Traceability') }}</span><strong class="sev-medium">{{ __('Medium') }}</strong></div>
          <div class="sev-track"><div class="sev-fill sev-62 sev-blue"></div></div>
        </div>
      </div>
    </div>

    <div class="pain-grid">
      <article class="pain-card rv d1">
        <div class="pain-card-head"><span class="pain-card-num">01</span><span class="pain-ico"><i class="ti ti-clock"></i></span></div>
        <h3 class="pain-title">{{ __('Time Wasted on Repetitive Tasks') }}</h3>
        <p class="pain-desc">{{ __('Teams spend hours re-entering data, cross-checking files, and manually preparing reports instead of executing high-value work.') }}</p>
      </article>
      <article class="pain-card rv d2">
        <div class="pain-card-head"><span class="pain-card-num">02</span><span class="pain-ico"><i class="ti ti-eye"></i></span></div>
        <h3 class="pain-title">{{ __('No Real-Time Visibility') }}</h3>
        <p class="pain-desc">{{ __('Decision-makers work with outdated snapshots and disconnected information, which slows response time and increases risk.') }}</p>
      </article>
      <article class="pain-card rv d3">
        <div class="pain-card-head"><span class="pain-card-num">03</span><span class="pain-ico"><i class="ti ti-alert-triangle"></i></span></div>
        <h3 class="pain-title">{{ __('Human Errors & Data Silos') }}</h3>
        <p class="pain-desc">{{ __('Manual data entry and fragmented tools create inconsistencies across departments and expensive correction cycles.') }}</p>
      </article>
      <article class="pain-card rv d1">
        <div class="pain-card-head"><span class="pain-card-num">04</span><span class="pain-ico"><i class="ti ti-message-circle"></i></span></div>
        <h3 class="pain-title">{{ __('Communication Friction') }}</h3>
        <p class="pain-desc">{{ __('Approvals and updates scattered in email and chat lead to delays, misunderstandings, and missed execution windows.') }}</p>
      </article>
      <article class="pain-card rv d2">
        <div class="pain-card-head"><span class="pain-card-num">05</span><span class="pain-ico"><i class="ti ti-search"></i></span></div>
        <h3 class="pain-title">{{ __('Poor Information Traceability') }}</h3>
        <p class="pain-desc">{{ __('Auditability suffers when data is split across spreadsheets, inboxes, and paper files, increasing compliance exposure.') }}</p>
      </article>
      <article class="pain-card pain-bridge rv d3">
        <div class="pain-bridge-icon"><i class="ti ti-link"></i></div>
        <h3 class="pain-title">{{ __('Need clarity before investing?') }}</h3>
        <p class="pain-desc">{{ __('Start with an operational assessment. We identify the highest-impact workflow and recommend the most efficient digital path.') }}</p>
        <a href="#cta-final" class="btn-pri pain-bridge-btn">{{ __('Request an Assessment') }}</a>
      </article>
    </div>
  </div>
</section>

<!-- --- SECTION 4 — SOLUTIONS --- -->
<section id="solutions">
  <div class="sol-inner">
        <div class="sol-head rv" style="display: flex; justify-content: space-between; align-items: flex-end; gap: 4rem; flex-wrap: wrap; margin-bottom: 3rem;">
      <div style="flex: 1.2; min-width: 300px;">
        <span class="tag">{{ __('Solutions') }}</span>
        <h2 style="margin-bottom: 0;">{{ __('Digital products and custom platforms for core operations.') }}</h2>
      </div>
      <div style="flex: 1; min-width: 300px;">
        <p class="lead lead-sm" style="margin-bottom: 0.5rem;">{{ __('Deploy a proven product when it matches your needs, or build a tailored platform when your operational model requires it.') }}</p>
      </div>
    </div>

    <div class="pain-grid rv d1">
      <!-- Card 1: FlexiCare context -->
      <article class="pain-card">
        <div class="pain-card-head"><span class="pain-ico" style="color: var(--blue-lt);"><i class="ti ti-users"></i></span></div>
        <h3 class="pain-title">{{ __('FlexiCare') }}</h3>
        <p class="pain-desc">{{ __('A service and workforce platform for provider verification, booking management and customer follow-up.') }}</p>
        <div class="solutions-bullets" style="margin-top: 1rem; border-top: 1px solid var(--bg-tertiary); padding-top: 1rem;">
          <div class="solutions-bullet"><i class="ti ti-check"></i> {{ __('Real-time booking') }}</div>
          <div class="solutions-bullet"><i class="ti ti-check"></i> {{ __('Ratings and reliability') }}</div>
        </div>
      </article>

      <!-- Card 2: Inventory context -->
      <article class="pain-card">
        <div class="pain-card-head"><span class="pain-ico" style="color: var(--blue-lt);"><i class="ti ti-package"></i></span></div>
        <h3 class="pain-title">{{ __('InventoryPro') }}</h3>
        <p class="pain-desc">{{ __('An inventory and internal request platform for organizations that need validation, visibility and traceability.') }}</p>
        <div class="solutions-bullets" style="margin-top: 1rem; border-top: 1px solid var(--bg-tertiary); padding-top: 1rem;">
          <div class="solutions-bullet"><i class="ti ti-check"></i> {{ __('Full traceability') }}</div>
          <div class="solutions-bullet"><i class="ti ti-check"></i> {{ __('Consumption analytics') }}</div>
        </div>
      </article>

      <!-- Card 3: Performance context -->
      <article class="pain-card">
        <div class="pain-card-head"><span class="pain-ico" style="color: var(--orange);"><i class="ti ti-chart-bar"></i></span></div>
        <h3 class="pain-title">{{ __('Perfomia') }}</h3>
        <p class="pain-desc">{{ __('A performance and task management platform for leaders who need structured execution, follow-up and reporting.') }}</p>
        <div class="solutions-bullets" style="margin-top: 1rem; border-top: 1px solid var(--bg-tertiary); padding-top: 1rem;">
          <div class="solutions-bullet"><i class="ti ti-check"></i> {{ __('Objective evaluations') }}</div>
          <div class="solutions-bullet"><i class="ti ti-check"></i> {{ __('Live dashboards') }}</div>
        </div>
      </article>
    </div>

    <div class="sol-cta-row rv">
      <a href="/solutions" class="btn-sec">{{ __('View all solutions') }}</a>
    </div>
  </div>
</section>

<!-- --- SECTION 5 — WHY CHOOSE DIGITEXIA --- -->
<section id="why">
  <div class="why-inner wrap">
    <!-- Values -->
    <div class="rv">
      <span class="tag">{{ __('Why Choose DigiTexia') }}</span>
      <h2>{{ __('Built around your operating model.') }}</h2>
      <div class="value-list value-list-spaced">
        <div class="val-item">
          <div class="val-num">01</div>
          <div>
            <div class="val-h">{{ __('Workflow-first approach') }}</div>
            <p class="val-p">{{ __('We analyze how your teams operate before recommending a product or custom platform.') }}</p>
          </div>
        </div>
        <div class="val-item">
          <div class="val-num">02</div>
          <div>
            <div class="val-h">{{ __('User adoption by design') }}</div>
            <p class="val-p">{{ __('Interfaces are designed for daily operational users, helping teams adopt the platform quickly.') }}</p>
          </div>
        </div>
        <div class="val-item">
          <div class="val-num">03</div>
          <div>
            <div class="val-h">{{ __('Product speed, custom precision') }}</div>
            <p class="val-p">{{ __('We use existing products where they accelerate delivery and customize only where it creates business value.') }}</p>
          </div>
        </div>
        <div class="val-item">
          <div class="val-num">04</div>
          <div>
            <div class="val-h">{{ __('Implementation and support') }}</div>
            <p class="val-p">{{ __('Deployment, training and continuous support are integrated into the delivery process.') }}</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Stats panel -->
    <div class="why-panel rv d2">
      <div class="wp-title">{{ __('DigiTexia by the numbers') }}</div>
      <div class="wp-stat">
        <div><div class="wp-stat-val">10+</div><div class="wp-stat-lbl">{{ __('Digital Solutions Delivered') }}</div></div>
        <span class="wp-badge green-badge">{{ __('Growing') }}</span>
      </div>
      <div class="wp-stat">
        <div><div class="wp-stat-val">5+</div><div class="wp-stat-lbl">{{ __('Years of Combined Experience') }}</div></div>
        <span class="wp-badge blue-badge">{{ __('Pan-African') }}</span>
      </div>
      <div class="wp-stat">
        <div><div class="wp-stat-val">100%</div><div class="wp-stat-lbl">{{ __('Client-Focused Approach') }}</div></div>
        <span class="wp-badge green-badge">{{ __('Satisfied') }}</span>
      </div>
      <div class="wp-stat">
        <div><div class="wp-stat-val">0</div><div class="wp-stat-lbl">{{ __('Compromise on Quality') }}</div></div>
        <span class="wp-badge blue-badge">{{ __('Always') }}</span>
      </div>
    </div>
  </div>
</section>

<!-- --- SECTION 6 — WORKFLOW --- -->
<section id="workflow">
  <div class="wf-inner">
      <div class="rv">
      <span class="tag">{{ __('Our Workflow') }}</span>
      <h2>{{ __('From process assessment to operational deployment.') }}</h2>
    </div>
    <div class="wf-steps">
      <div class="wf-card rv d1">
        <div class="wf-num">01</div>
        <div class="wf-title">{{ __('Needs Analysis') }}</div>
        <div class="wf-desc">{{ __('We identify the workflow creating the highest operational cost, delay or risk.') }}</div>
      </div>
      <div class="wf-card rv d2">
        <div class="wf-num">02</div>
        <div class="wf-title">{{ __('Solution Design') }}</div>
        <div class="wf-desc">{{ __('We define the roles, data flows, approval rules and user interfaces required for adoption.') }}</div>
      </div>
      <div class="wf-card rv d3">
        <div class="wf-num">03</div>
        <div class="wf-title">{{ __('Development & Testing') }}</div>
        <div class="wf-desc">{{ __('We build, test and validate the platform with your team before operational launch.') }}</div>
      </div>
      <div class="wf-card rv d4">
        <div class="wf-num">04</div>
        <div class="wf-title">{{ __('Deployment & Training') }}</div>
        <div class="wf-desc">{{ __('We train users, support adoption and optimize the platform after deployment.') }}</div>
      </div>
    </div>
  </div>
</section>

<!-- --- SECTION 7 — IMPACT --- -->
<section id="impact">
  <div class="impact-inner">
    <div class="impact-top">
      <div class="rv">
        <span class="tag">{{ __('The Impact') }}</span>
        <h2>{{ __('Operational outcomes your leadership can measure.') }}</h2>
      </div>
      <p class="lead rv d1">{{ __('Fewer manual checks, clearer accountability, faster reporting and stronger decision-making visibility.') }}</p>
    </div>
    <div class="impact-grid rv">
      <div class="imp-cell">
        <span class="imp-emoji"><i class="ti ti-bolt"></i></span>
        <div class="imp-title">{{ __('Full Automation of Internal Workflows') }}</div>
        <div class="imp-sub">{{ __('Eliminate repetitive manual processes entirely') }}</div>
      </div>
      <div class="imp-cell">
        <span class="imp-emoji"><i class="ti ti-target"></i></span>
        <div class="imp-title">{{ __('Significant Reduction in Operational Errors') }}</div>
        <div class="imp-sub">{{ __('Near-zero human errors in day-to-day operations') }}</div>
      </div>
      <div class="imp-cell">
        <span class="imp-emoji"><i class="ti ti-users"></i></span>
        <div class="imp-title">{{ __('Enhanced Cross-Departmental Collaboration') }}</div>
        <div class="imp-sub">{{ __('Seamless information flow between all teams') }}</div>
      </div>
      <div class="imp-cell">
        <span class="imp-emoji"><i class="ti ti-trending-up"></i></span>
        <div class="imp-title">{{ __('Real-Time Data for Better Decisions') }}</div>
        <div class="imp-sub">{{ __('Live dashboards for informed leadership') }}</div>
      </div>
      <div class="imp-cell">
        <span class="imp-emoji"><i class="ti ti-rocket"></i></span>
        <div class="imp-title">{{ __('Increased Overall Team Productivity') }}</div>
        <div class="imp-sub">{{ __('Measurable performance gains across all departments') }}</div>
      </div>
    </div>
  </div>
</section>

<!-- --- SECTION 8 — FINAL CTA --- -->
<section id="cta-final">
  <div class="cta-inner rv">
    <span class="tag">{{ __('Free Operational Assessment') }}</span>
    <h2>{{ __('Share your current process.') }}<br>{{ __('We will identify the first workflow to digitize.') }}</h2>
    <p class="lead">{{ __('In a focused assessment, we clarify bottlenecks, identify the workflow with the strongest business impact and recommend either a DigiTexia product or a custom implementation.') }}</p>
    <div class="cta-btns">
      <a href="tel:+237650945280" class="btn-pri">
        {{ __('Call (+237) 650 945 280') }}
        <svg width="14" height="14" viewBox="0 0 14 14" fill="none"><path d="M2 7h10M7 2l5 5-5 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
      </a>
      <a href="/contact-us" class="btn-sec">{{ __('Request a Consultation') }}</a>
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



