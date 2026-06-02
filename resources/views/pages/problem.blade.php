@extends('index')

@section('page_title', __('The Problem | DigiTexia'))

@push('styles')
<link href="https://fonts.googleapis.com/css2?family=Clash+Display:wght@400;500;600;700&family=Plus+Jakarta+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/problem-digitexia.css') }}">
@endpush

@section('contain')
<section id="page-hero">
  <div class="ph-bg"></div>
  <div class="ph-grid"></div>
  <div class="ph-inner">

    <div class="ph-left">
      <div class="ph-breadcrumb">
        <a href="{{ url('/') }}">{{ __('Home') }}</a>
        <span>&rsaquo;</span>
        <span class="curr">{{ __('The Problem') }}</span>
      </div>
      <span class="tag-red">{{ __('Operational Risk') }}</span>
      <h1>{{ __('Manual workflows are costing your business time, control and visibility.') }}</h1>
      <p class="lead">{{ __('When core operations depend on spreadsheets, chat threads and paper approvals, leaders lose real-time visibility, teams repeat work and decisions move slower than the business requires.') }}</p>
      <div class="ph-btns">
        <a href="{{ url('/solutions') }}" class="btn-pri">
          {{ __('Explore Digital Solutions') }}
          <svg width="14" height="14" viewBox="0 0 14 14" fill="none"><path d="M2 7h10M7 2l5 5-5 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </a>
        <a href="{{ url('/contact-us') }}" class="btn-sec">{{ __('Request an Assessment') }}</a>
      </div>
    </div>

    <div class="ph-chaos rv d1">
      <span class="ph-chaos-title"><i class="ti ti-alert-triangle"></i> {{ __('Before DigiTexia') }}</span>
      <div class="chaos-tools">
        <div class="chaos-tool">
          <div class="chaos-tool-ico"><i class="ti ti-table"></i></div>
          <div class="chaos-tool-body">
            <div class="chaos-tool-name">{{ __('Uncontrolled spreadsheets') }}</div>
            <div class="chaos-tool-issue"><i class="ti ti-alert-triangle"></i> {{ __('Multiple versions create conflicting business data') }}</div>
          </div>
        </div>
        <div class="chaos-tool">
          <div class="chaos-tool-ico"><i class="ti ti-mail"></i></div>
          <div class="chaos-tool-body">
            <div class="chaos-tool-name">{{ __('Chat and email approvals') }}</div>
            <div class="chaos-tool-issue"><i class="ti ti-alert-triangle"></i> {{ __('Decisions are buried in conversations') }}</div>
          </div>
        </div>
        <div class="chaos-tool">
          <div class="chaos-tool-ico"><i class="ti ti-file-text"></i></div>
          <div class="chaos-tool-body">
            <div class="chaos-tool-name">{{ __('Paper-based records') }}</div>
            <div class="chaos-tool-issue"><i class="ti ti-alert-triangle"></i> {{ __('Information is difficult to retrieve and verify') }}</div>
          </div>
        </div>
        <div class="chaos-tool">
          <div class="chaos-tool-ico"><i class="ti ti-message-circle"></i></div>
          <div class="chaos-tool-body">
            <div class="chaos-tool-name">{{ __('Manual activity logs') }}</div>
            <div class="chaos-tool-issue"><i class="ti ti-alert-triangle"></i> {{ __('Operational updates arrive too late to act on') }}</div>
          </div>
        </div>
      </div>
      <div class="chaos-arrow">
        <span class="chaos-arr-label">{{ __('Impact') }}</span>
      </div>
      <div class="chaos-result">
        <div class="chaos-result-ico"><i class="ti ti-trending-down"></i></div>
        <div class="chaos-result-text">{{ __('Slower execution, higher operational risk and weaker growth capacity') }}</div>
      </div>
    </div>

  </div>
</section>

<!-- Stats Banner -->
<section id="stats-banner">
  <div class="stats-inner rv">
    <div class="stat-cell">
      <div class="stat-num red">{{ __('Delayed') }}</div>
      <div class="stat-label">{{ __('approvals remain blocked in messages, calls and inboxes') }}</div>
      <div class="stat-src">{{ __('Execution speed') }}</div>
    </div>
    <div class="stat-cell">
      <div class="stat-num orange">{{ __('Rework') }}</div>
      <div class="stat-label">{{ __('teams enter the same information repeatedly across tools') }}</div>
      <div class="stat-src">{{ __('Team productivity') }}</div>
    </div>
    <div class="stat-cell">
      <div class="stat-num blue">{{ __('Hidden') }}</div>
      <div class="stat-label">{{ __('documents, decisions and responsibilities are difficult to trace') }}</div>
      <div class="stat-src">{{ __('Management control') }}</div>
    </div>
    <div class="stat-cell">
      <div class="stat-num green">{{ __('Connected') }}</div>
      <div class="stat-label">{{ __('digital workflows improve execution, control and accountability') }}</div>
      <div class="stat-src">{{ __('DigiTexia outcome') }}</div>
    </div>
  </div>
</section>

<!-- Pain Points -->
<section id="pain-points">
  <div class="wrap">

    <div class="pain-intro">
      <div class="rv">
        <span class="tag-red">{{ __('Operational Gaps') }}</span>
        <h2>{{ __('Manual work creates risks leadership cannot ignore.') }}</h2>
        <p class="lead">{{ __('The issue is not only productivity. Manual operations reduce accountability, weaken reporting quality and make it harder to scale with confidence.') }}</p>
      </div>
      <div class="rv d1">
        <div style="background:var(--card-bg);border:1px solid var(--bdr);border-radius:16px;padding:2rem;">
          <div style="font-size:.7rem;font-weight:600;letter-spacing:.1em;text-transform:uppercase;color:var(--muted);margin-bottom:1.5rem;">{{ __('Impact Severity') }}</div>
          <div style="display:flex;flex-direction:column;gap:1rem;">
            <div>
              <div style="display:flex;justify-content:space-between;font-size:.78rem;color:var(--muted-lt);margin-bottom:.4rem"><span>{{ __('Time Loss') }}</span><span style="color:var(--danger-fg);font-weight:600">{{ __('High') }}</span></div>
              <div style="height:6px;background:var(--surface-bg);border-radius:100px;overflow:hidden"><div style="width:92%;height:100%;background:linear-gradient(90deg,var(--danger),var(--danger-fg));border-radius:100px"></div></div>
            </div>
            <div>
              <div style="display:flex;justify-content:space-between;font-size:.78rem;color:var(--muted-lt);margin-bottom:.4rem"><span>{{ __('Data Errors') }}</span><span style="color:var(--danger-fg);font-weight:600">{{ __('High') }}</span></div>
              <div style="height:6px;background:var(--surface-bg);border-radius:100px;overflow:hidden"><div style="width:88%;height:100%;background:linear-gradient(90deg,var(--danger),var(--danger-fg));border-radius:100px"></div></div>
            </div>
            <div>
              <div style="display:flex;justify-content:space-between;font-size:.78rem;color:var(--muted-lt);margin-bottom:.4rem"><span>{{ __('Visibility') }}</span><span style="color:var(--orange);font-weight:600">{{ __('High') }}</span></div>
              <div style="height:6px;background:var(--surface-bg);border-radius:100px;overflow:hidden"><div style="width:78%;height:100%;background:linear-gradient(90deg,var(--accent-fg),var(--accent-fg));border-radius:100px"></div></div>
            </div>
            <div>
              <div style="display:flex;justify-content:space-between;font-size:.78rem;color:var(--muted-lt);margin-bottom:.4rem"><span>{{ __('Collaboration') }}</span><span style="color:var(--orange);font-weight:600">{{ __('High') }}</span></div>
              <div style="height:6px;background:var(--surface-bg);border-radius:100px;overflow:hidden"><div style="width:72%;height:100%;background:linear-gradient(90deg,var(--accent-fg),var(--accent-fg));border-radius:100px"></div></div>
            </div>
            <div>
              <div style="display:flex;justify-content:space-between;font-size:.78rem;color:var(--muted-lt);margin-bottom:.4rem"><span>{{ __('Traceability') }}</span><span style="color:var(--blue-lt);font-weight:600">{{ __('Medium') }}</span></div>
              <div style="height:6px;background:var(--surface-bg);border-radius:100px;overflow:hidden"><div style="width:62%;height:100%;background:linear-gradient(90deg,var(--blue),var(--blue-lt));border-radius:100px"></div></div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- 5 Pain Point Cards -->
    <div class="pain-grid">
      <div class="pain-card rv d1">
        <div class="pain-card-num">01</div>
        <div class="pain-card-ico"><i class="ti ti-clock"></i></div>
        <div class="pain-card-title">{{ __('Repetitive manual work') }}</div>
        <div class="pain-card-desc">{{ __('Employees spend valuable time copying data, chasing approvals and rebuilding reports manually.') }}</div>
        <div class="pain-card-impact">{{ __('Administrative effort consumes core business capacity.') }}</div>
      </div>
      <div class="pain-card rv d2">
        <div class="pain-card-num">02</div>
        <div class="pain-card-ico"><i class="ti ti-eye"></i></div>
        <div class="pain-card-title">{{ __('No live operational visibility') }}</div>
        <div class="pain-card-desc">{{ __('Leaders discover issues after they happen because data is not consolidated in real time.') }}</div>
        <div class="pain-card-impact">{{ __('Management becomes reactive instead of proactive.') }}</div>
      </div>
      <div class="pain-card rv d3">
        <div class="pain-card-num">03</div>
        <div class="pain-card-ico"><i class="ti ti-alert-triangle"></i></div>
        <div class="pain-card-title">{{ __('Data inconsistency') }}</div>
        <div class="pain-card-desc">{{ __('Information is entered in multiple places, creating conflicting versions and correction cycles.') }}</div>
        <div class="pain-card-impact">{{ __('Small errors become costly operational cleanup.') }}</div>
      </div>
      <div class="pain-card rv d1">
        <div class="pain-card-num">04</div>
        <div class="pain-card-ico"><i class="ti ti-message-circle"></i></div>
        <div class="pain-card-title">{{ __('Teams operate in silos') }}</div>
        <div class="pain-card-desc">{{ __('Work moves through informal channels, and context disappears between departments or handoffs.') }}</div>
        <div class="pain-card-impact">{{ __('Collaboration slows and execution mistakes increase.') }}</div>
      </div>
      <div class="pain-card rv d2">
        <div class="pain-card-num">05</div>
        <div class="pain-card-ico"><i class="ti ti-search"></i></div>
        <div class="pain-card-title">{{ __('Weak traceability') }}</div>
        <div class="pain-card-desc">{{ __('Approval history is scattered across inboxes, notebooks, files and chat logs.') }}</div>
        <div class="pain-card-impact">{{ __('Audits become time-consuming and difficult to defend.') }}</div>
      </div>
      <div class="pain-card rv d3" style="background:linear-gradient(135deg,var(--accent-soft),var(--accent-soft));border-color:var(--blue-bdr);display:flex;flex-direction:column;justify-content:center;align-items:center;text-align:center;gap:1.25rem">
        <div style="font-size:2.5rem"><i class="ti ti-link"></i></div>
        <div class="pain-card-title" style="color:var(--white)">{{ __('DigiTexia restores operational control.') }}</div>
        <div class="pain-card-desc">{{ __('One digital environment aligns data, workflows and approvals so teams execute with clarity.') }}</div>
      <a href="{{ url('/solutions') }}" class="btn-pri" style="margin-top:.5rem;font-size:.82rem;padding:.7rem 1.5rem">
          {{ __('Explore Digital Solutions') }} &rarr;
        </a>
      </div>
    </div>
  </div>
</section>

<!-- Cost of Inaction -->
<section id="cost">
  <div class="cost-inner">
        <div class="cost-header">
      <div class="rv">
        <span class="tag">{{ __('Cost of Inaction') }}</span>
        <h2>{{ __('Delaying digital transformation increases operational debt.') }}</h2>
        <p class="lead">{{ __('The longer critical workflows remain manual, the more your organization pays through lost time, avoidable errors and slower service delivery.') }}</p>
      </div>
      <div class="cost-visual rv d1">
        <div class="cost-visual-title"><i class="ti ti-zap"></i>{{ __('Where operational time is lost') }}</div>
        <div class="cost-bars-wrap">
          <div class="cost-bar-row">
            <div class="cost-bar-label">{{ __('Manual data entry') }}</div>
            <div class="cost-bar-track"><div class="cost-bar-fill" style="--w:85%;background:linear-gradient(90deg,var(--danger),var(--danger-fg))"></div></div>
            <div class="cost-bar-val">85%</div>
          </div>
          <div class="cost-bar-row">
            <div class="cost-bar-label">{{ __('Email and chat') }}</div>
            <div class="cost-bar-track"><div class="cost-bar-fill" style="--w:72%;background:linear-gradient(90deg,var(--accent-fg),var(--accent-fg))"></div></div>
            <div class="cost-bar-val">72%</div>
          </div>
          <div class="cost-bar-row">
            <div class="cost-bar-label">{{ __('Searching for information') }}</div>
            <div class="cost-bar-track"><div class="cost-bar-fill" style="--w:64%;background:linear-gradient(90deg,var(--accent-fg),var(--accent-fg))"></div></div>
            <div class="cost-bar-val">64%</div>
          </div>
          <div class="cost-bar-row">
            <div class="cost-bar-label">{{ __('Duplicate effort') }}</div>
            <div class="cost-bar-track"><div class="cost-bar-fill" style="--w:58%;background:linear-gradient(90deg,var(--blue),var(--blue-lt))"></div></div>
            <div class="cost-bar-val">58%</div>
          </div>
          <div class="cost-bar-row">
            <div class="cost-bar-label">{{ __('Error correction') }}</div>
            <div class="cost-bar-track"><div class="cost-bar-fill" style="--w:47%;background:linear-gradient(90deg,var(--blue),var(--blue-lt))"></div></div>
            <div class="cost-bar-val">47%</div>
          </div>
        </div>
        <div class="cost-note">{{ __('Operational inefficiency consumes your best people before it affects your numbers.') }}</div>
      </div>
    </div>

    <div class="cost-list rv">
      <div class="cost-item">
        <div class="cost-item-ico"><i class="ti ti-cash"></i></div>
        <div>
          <div class="cost-item-title">{{ __('Direct Financial Leakage') }}</div>
          <div class="cost-item-desc">{{ __('Wrong invoices, missing stock and payroll mistakes create avoidable losses.') }}</div>
        </div>
      </div>
      <div class="cost-item">
        <div class="cost-item-ico"><i class="ti ti-rocket"></i></div>
        <div>
          <div class="cost-item-title">{{ __('Slower Market Response') }}</div>
          <div class="cost-item-desc">{{ __('Manual processes keep your team reacting while faster competitors improve execution.') }}</div>
        </div>
      </div>
      <div class="cost-item">
        <div class="cost-item-ico"><i class="ti ti-mood-sad"></i></div>
        <div>
          <div class="cost-item-title">{{ __('Staff Frustration') }}</div>
          <div class="cost-item-desc">{{ __('Talented employees lose motivation when their work becomes file chasing, error correction and repeated manual steps.') }}</div>
        </div>
      </div>
      <div class="cost-item">
        <div class="cost-item-ico"><i class="ti ti-clipboard-list"></i></div>
        <div>
          <div class="cost-item-title">{{ __('Audit and Compliance Risk') }}</div>
          <div class="cost-item-desc">{{ __('When records are scattered, audits become slower, stressful and harder to defend.') }}</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Before vs After -->
<section id="before-after">
  <div class="ba-inner">
    <div class="ba-header rv">
      <span class="tag">{{ __('Before vs After') }}</span>
      <h2>{{ __('Manual operations vs controlled digital execution.') }}</h2>
      <p class="lead">{{ __('A clear view of how work changes when processes, data and approvals run through one system.') }}</p>
    </div>

    <div class="ba-grid">
      <!-- Before -->
      <div class="rv">
        <div class="ba-col-title before">
          <span>&times;</span> {{ __('Manual Operations') }}
        </div>
        <div class="ba-items">
          <div class="ba-item before-item"><span class="ba-item-ico"><i class="ti ti-x"></i></span>{{ __('Excel, WhatsApp and paper everywhere') }}</div>
          <div class="ba-item before-item"><span class="ba-item-ico"><i class="ti ti-x"></i></span>{{ __('Reports built by hand, one by one') }}</div>
          <div class="ba-item before-item"><span class="ba-item-ico"><i class="ti ti-x"></i></span>{{ __('No live view of tasks or staff') }}</div>
          <div class="ba-item before-item"><span class="ba-item-ico"><i class="ti ti-x"></i></span>{{ __('Approvals stuck in messages and calls') }}</div>
          <div class="ba-item before-item"><span class="ba-item-ico"><i class="ti ti-x"></i></span>{{ __('Stock and records checked manually') }}</div>
          <div class="ba-item before-item"><span class="ba-item-ico"><i class="ti ti-x"></i></span>{{ __('Questions take too long to answer') }}</div>
          <div class="ba-item before-item"><span class="ba-item-ico"><i class="ti ti-x"></i></span>{{ __('No clear trail for audits') }}</div>
          <div class="ba-item before-item"><span class="ba-item-ico"><i class="ti ti-x"></i></span>{{ __('More staff often means more confusion') }}</div>
        </div>
      </div>

      <!-- VS -->
      <div class="ba-divider">
        <div class="ba-vs">{{ __('VS') }}</div>
      </div>

      <!-- After -->
      <div class="rv d2">
        <div class="ba-col-title after">
          <span>&check;</span> {{ __('Digital Operations') }}
        </div>
        <div class="ba-items">
          <div class="ba-item after-item"><span class="ba-item-ico"><i class="ti ti-check"></i></span>{{ __('One system for all the data') }}</div>
          <div class="ba-item after-item"><span class="ba-item-ico"><i class="ti ti-check"></i></span>{{ __('Live dashboards without manual work') }}</div>
          <div class="ba-item after-item"><span class="ba-item-ico"><i class="ti ti-check"></i></span>{{ __('Clear view of tasks, attendance and KPIs') }}</div>
          <div class="ba-item after-item"><span class="ba-item-ico"><i class="ti ti-check"></i></span>{{ __('Approvals move fast and stay visible') }}</div>
          <div class="ba-item after-item"><span class="ba-item-ico"><i class="ti ti-check"></i></span>{{ __('Stock alerts when items run low') }}</div>
          <div class="ba-item after-item"><span class="ba-item-ico"><i class="ti ti-check"></i></span>{{ __('One communication hub for all teams') }}</div>
          <div class="ba-item after-item"><span class="ba-item-ico"><i class="ti ti-check"></i></span>{{ __('Searchable history for every action') }}</div>
          <div class="ba-item after-item"><span class="ba-item-ico"><i class="ti ti-check"></i></span>{{ __('Easy to grow as the team grows') }}</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Who is Affected -->
<section id="who">
  <div class="who-inner">
    <div class="who-header">
      <div class="rv">
        <span class="tag">{{ __('Who is Affected') }}</span>
        <h2>{{ __('Any organization with critical workflows still handled manually.') }}</h2>
        <p class="lead" style="margin-top:.75rem">{{ __('This challenge is not limited to one sector. Companies, hospitals, schools, retailers and institutions all lose speed when operational data is scattered.') }}</p>
      </div>
      <div class="rv d1">
        <p class="body-text">{{ __('DigiTexia is designed for practical operational environments: busy teams, mixed devices, approval chains and the need for fast, accurate execution.') }}</p>
        <a href="{{ url('/solutions') }}" class="btn-sec" style="margin-top:1.5rem">{{ __('Explore Solutions') }} &rarr;</a>
      </div>
    </div>

    <div class="sector-grid rv">
      <div class="sector-card">
        <span class="sector-ico"><i class="ti ti-building-skyscraper"></i></span>
        <div class="sector-name">{{ __('Enterprises & Corporates') }}</div>
        <div class="sector-issue">{{ __('Too many departments, too many spreadsheets, too many follow-ups') }}</div>
      </div>
      <div class="sector-card">
        <span class="sector-ico"><i class="ti ti-hospital"></i></span>
        <div class="sector-name">{{ __('Healthcare Providers') }}</div>
        <div class="sector-issue">{{ __('Paper patient records and slow access at the point of care') }}</div>
      </div>
      <div class="sector-card">
        <span class="sector-ico"><i class="ti ti-crane"></i></span>
        <div class="sector-name">{{ __('Construction & Projects') }}</div>
        <div class="sector-issue">{{ __('Site reporting, materials and attendance tracked on WhatsApp') }}</div>
      </div>
      <div class="sector-card">
        <span class="sector-ico"><i class="ti ti-package"></i></span>
        <div class="sector-name">{{ __('Retail & Distribution') }}</div>
        <div class="sector-issue">{{ __('Stock across locations tracked in disconnected sheets') }}</div>
      </div>
      <div class="sector-card">
        <span class="sector-ico"><i class="ti ti-building"></i></span>
        <div class="sector-name">{{ __('Public Institutions') }}</div>
        <div class="sector-issue">{{ __('Internal mail and files slowed by paper chains') }}</div>
      </div>
      <div class="sector-card">
        <span class="sector-ico"><i class="ti ti-briefcase"></i></span>
        <div class="sector-name">{{ __('Service Providers') }}</div>
        <div class="sector-issue">{{ __('Clients and providers still matched manually') }}</div>
      </div>
    </div>
  </div>
</section>

<!-- Bridge -->
<section id="bridge">
  <div class="bridge-inner rv">
    <span class="tag">{{ __('The DigiTexia Solution') }}</span>
    <h2>{{ __('Move from fragmented execution to controlled digital operations.') }}</h2>
    <p class="lead">{{ __('DigiTexia standardizes workflows, centralizes operational data and gives teams one place to execute with accountability.') }}</p>

    <div class="bridge-steps">
      <div class="bridge-step">
        <div class="bridge-step-num">01</div>
        <div class="bridge-step-title">{{ __('We assess your workflow') }}</div>
        <div class="bridge-step-desc">{{ __('We identify where delays, errors, duplication and control gaps occur.') }}</div>
      </div>
      <div class="bridge-step">
        <div class="bridge-step-num">02</div>
        <div class="bridge-step-title">{{ __('We recommend the right solution') }}</div>
        <div class="bridge-step-desc">{{ __('We align an existing DigiTexia product or a custom platform with your priorities.') }}</div>
      </div>
      <div class="bridge-step">
        <div class="bridge-step-num">03</div>
        <div class="bridge-step-title">{{ __('We deploy and support adoption') }}</div>
        <div class="bridge-step-desc">{{ __('We help your team launch, adopt and continuously improve the platform.') }}</div>
      </div>
    </div>

    <div class="bridge-ctas">
      <a href="{{ url('/solutions') }}" class="btn-pri">
        {{ __('Explore Digital Solutions') }}
        <svg width="14" height="14" viewBox="0 0 14 14" fill="none"><path d="M2 7h10M7 2l5 5-5 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
      </a>
      <a href="{{ url('/contact-us') }}" class="btn-sec">{{ __('Request an Assessment') }}</a>
    </div>
  </div>
</section>


@push('scripts')
<script>
// Scroll reveal
const obs = new IntersectionObserver(entries => {
  entries.forEach(e => { if(e.isIntersecting){ e.target.classList.add('vis'); obs.unobserve(e.target); } });
}, { threshold: 0.1 });
document.querySelectorAll('.rv').forEach(el => obs.observe(el));

// Nav scroll
const navEl = document.getElementById('mainNav');
if (navEl) {
  window.addEventListener('scroll', () => navEl.classList.toggle('sc', window.scrollY > 50));
}

// Dropdown mobile
const ddToggle = document.querySelector('.nav-dropdown > a');
const ddMenu   = document.querySelector('.dropdown-menu');
if (ddToggle && ddMenu) {
  ddToggle.addEventListener('click', function(e) {
    if (window.innerWidth <= 900) { e.preventDefault(); ddMenu.classList.toggle('is-open'); }
  });
  document.addEventListener('click', function(e) {
    if (!e.target.closest('.nav-dropdown')) ddMenu.classList.remove('is-open');
  });
}
</script>
@endpush
@endsection
