@extends('index')

@section('page_title', 'The Problem — DigiTexia')

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
        <a href="{{ url('/') }}">Home</a>
        <span>&rsaquo;</span>
        <span class="curr">The Problem</span>
      </div>
      <span class="tag-red">Everyday Reality</span>
      <h1>African teams still lose time with <em>Excel, WhatsApp and paper.</em></h1>
      <p class="lead">Across offices, clinics, schools, NGOs and public institutions, work still moves through chats, spreadsheets and paper files. That means slow approvals, repeated data entry, and records that are hard to find when they are needed most.</p>
      <div class="ph-btns">
        <a href="{{ url('/solutions') }}" class="btn-pri">
          See the Solutions
          <svg width="14" height="14" viewBox="0 0 14 14" fill="none"><path d="M2 7h10M7 2l5 5-5 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </a>
        <a href="{{ url('/contact-us') }}" class="btn-sec">Request a Demo</a>
      </div>
    </div>

    <!-- "Before DigiTexia" Chaos Visual -->
    <div class="ph-chaos rv d1">
      <span class="ph-chaos-title"><i class="ti ti-alert-triangle"></i> Before DigiTexia</span>
      <div class="chaos-tools">
        <div class="chaos-tool">
          <div class="chaos-tool-ico"><i class="ti ti-table"></i></div>
          <div class="chaos-tool-body">
            <div class="chaos-tool-name">Excel Sheets</div>
            <div class="chaos-tool-issue"><i class="ti ti-alert-triangle"></i>Different versions everywhere</div>
          </div>
        </div>
        <div class="chaos-tool">
          <div class="chaos-tool-ico"><i class="ti ti-mail"></i></div>
          <div class="chaos-tool-body">
            <div class="chaos-tool-name">WhatsApp & Email</div>
            <div class="chaos-tool-issue"><i class="ti ti-alert-triangle"></i>Approvals get buried fast</div>
          </div>
        </div>
        <div class="chaos-tool">
          <div class="chaos-tool-ico"><i class="ti ti-file-text"></i></div>
          <div class="chaos-tool-body">
            <div class="chaos-tool-name">Paper Files</div>
            <div class="chaos-tool-issue"><i class="ti ti-alert-triangle"></i>Easy to lose, hard to search</div>
          </div>
        </div>
        <div class="chaos-tool">
          <div class="chaos-tool-ico"><i class="ti ti-message-circle"></i></div>
          <div class="chaos-tool-body">
            <div class="chaos-tool-name">Manual Registers</div>
            <div class="chaos-tool-issue"><i class="ti ti-alert-triangle"></i>Updates arrive late</div>
          </div>
        </div>
      </div>
      <div class="chaos-arrow">
        <span class="chaos-arr-label">Result</span>
      </div>
      <div class="chaos-result">
        <div class="chaos-result-ico"><i class="ti ti-trending-down"></i></div>
        <div class="chaos-result-text">Slower service, more errors, less growth</div>
      </div>
    </div>

  </div>
</section>

<!-- Stats Banner -->
<section id="stats-banner">
  <div class="stats-inner rv">
    <div class="stat-cell">
      <div class="stat-num red">Slow</div>
      <div class="stat-label">approvals get stuck in chats, calls and inboxes</div>
      <div class="stat-src">Everyday operations</div>
    </div>
    <div class="stat-cell">
      <div class="stat-num orange">Rework</div>
      <div class="stat-label">the same information is typed again and again</div>
      <div class="stat-src">Manual teams</div>
    </div>
    <div class="stat-cell">
      <div class="stat-num blue">Lost</div>
      <div class="stat-label">paper records disappear when people change desks</div>
      <div class="stat-src">Office reality</div>
    </div>
    <div class="stat-cell">
      <div class="stat-num green">Clear</div>
      <div class="stat-label">digital workflows make teams faster and easier to manage</div>
      <div class="stat-src">What DigiTexia solves</div>
    </div>
  </div>
</section>

<!-- Pain Points -->
<section id="pain-points">
  <div class="wrap">

    <div class="pain-intro">
      <div class="rv">
        <span class="tag-red">5 Core Pain Points</span>
        <h2>The everyday problems are always the same.</h2>
        <p class="lead">If your team still works with WhatsApp, Excel and paper, these are the bottlenecks that slow everything down.</p>
      </div>
      <div class="rv d1">
        <div style="background:var(--ink-2);border:1px solid var(--bdr);border-radius:16px;padding:2rem;">
          <div style="font-size:.7rem;font-weight:600;letter-spacing:.1em;text-transform:uppercase;color:var(--muted);margin-bottom:1.5rem;">Impact Severity</div>
          <div style="display:flex;flex-direction:column;gap:1rem;">
            <div>
              <div style="display:flex;justify-content:space-between;font-size:.78rem;color:var(--muted-lt);margin-bottom:.4rem"><span>Time Loss</span><span style="color:#F87171;font-weight:600">High</span></div>
              <div style="height:6px;background:rgba(255,255,255,.06);border-radius:100px;overflow:hidden"><div style="width:92%;height:100%;background:linear-gradient(90deg,#F43F5E,#F87171);border-radius:100px"></div></div>
            </div>
            <div>
              <div style="display:flex;justify-content:space-between;font-size:.78rem;color:var(--muted-lt);margin-bottom:.4rem"><span>Data Errors</span><span style="color:#F87171;font-weight:600">High</span></div>
              <div style="height:6px;background:rgba(255,255,255,.06);border-radius:100px;overflow:hidden"><div style="width:88%;height:100%;background:linear-gradient(90deg,#F43F5E,#F87171);border-radius:100px"></div></div>
            </div>
            <div>
              <div style="display:flex;justify-content:space-between;font-size:.78rem;color:var(--muted-lt);margin-bottom:.4rem"><span>Visibility</span><span style="color:var(--orange);font-weight:600">High</span></div>
              <div style="height:6px;background:rgba(255,255,255,.06);border-radius:100px;overflow:hidden"><div style="width:78%;height:100%;background:linear-gradient(90deg,#F59E0B,#FCD34D);border-radius:100px"></div></div>
            </div>
            <div>
              <div style="display:flex;justify-content:space-between;font-size:.78rem;color:var(--muted-lt);margin-bottom:.4rem"><span>Collaboration</span><span style="color:var(--orange);font-weight:600">High</span></div>
              <div style="height:6px;background:rgba(255,255,255,.06);border-radius:100px;overflow:hidden"><div style="width:72%;height:100%;background:linear-gradient(90deg,#F59E0B,#FCD34D);border-radius:100px"></div></div>
            </div>
            <div>
              <div style="display:flex;justify-content:space-between;font-size:.78rem;color:var(--muted-lt);margin-bottom:.4rem"><span>Traceability</span><span style="color:#60A5FA;font-weight:600">Medium</span></div>
              <div style="height:6px;background:rgba(255,255,255,.06);border-radius:100px;overflow:hidden"><div style="width:62%;height:100%;background:linear-gradient(90deg,var(--blue),#60A5FA);border-radius:100px"></div></div>
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
        <div class="pain-card-title">Time Wasted on Repetitive Manual Tasks</div>
        <div class="pain-card-desc">Staff spend hours retyping the same information, chasing signatures, and preparing reports by hand.</div>
        <div class="pain-card-impact">Too much work is spent on admin instead of service</div>
      </div>
      <div class="pain-card rv d2">
        <div class="pain-card-num">02</div>
        <div class="pain-card-ico"><i class="ti ti-eye"></i></div>
        <div class="pain-card-title">No Live View of What Is Happening</div>
        <div class="pain-card-desc">Managers only see the problem after the day is already moving. Reports come late, and decisions follow late too.</div>
        <div class="pain-card-impact">You react late instead of acting early</div>
      </div>
      <div class="pain-card rv d3">
        <div class="pain-card-num">03</div>
        <div class="pain-card-ico"><i class="ti ti-alert-triangle"></i></div>
        <div class="pain-card-title">Errors and Scattered Records</div>
        <div class="pain-card-desc">One file in Excel, another in WhatsApp, another on paper. The same information ends up in three places with three versions.</div>
        <div class="pain-card-impact">Small mistakes become big clean-up work</div>
      </div>
      <div class="pain-card rv d1">
        <div class="pain-card-num">04</div>
        <div class="pain-card-ico"><i class="ti ti-message-circle"></i></div>
        <div class="pain-card-title">Teams Work in Silos</div>
        <div class="pain-card-desc">Approvals move through messages, calls and quick reminders, so context gets lost and work stalls.</div>
        <div class="pain-card-impact">People keep asking the same question twice</div>
      </div>
      <div class="pain-card rv d2">
        <div class="pain-card-num">05</div>
        <div class="pain-card-ico"><i class="ti ti-search"></i></div>
        <div class="pain-card-title">No Clear Audit Trail</div>
        <div class="pain-card-desc">When a supervisor asks who approved what, the answer is often in someone’s inbox, notebook or memory.</div>
        <div class="pain-card-impact">Finding the truth takes too long</div>
      </div>
      <!-- Bridge card -->
      <div class="pain-card rv d3" style="background:linear-gradient(135deg,rgba(18,70,240,.1),rgba(18,70,240,.03));border-color:var(--blue-bdr);display:flex;flex-direction:column;justify-content:center;align-items:center;text-align:center;gap:1.25rem">
        <div style="font-size:2.5rem"><i class="ti ti-link"></i></div>
        <div class="pain-card-title" style="color:var(--white)">DigiTexia brings it all into one place</div>
        <div class="pain-card-desc">One simple platform for teams that want less confusion, less paper and faster work.</div>
      <a href="{{ url('/solutions') }}" class="btn-pri" style="margin-top:.5rem;font-size:.82rem;padding:.7rem 1.5rem">
          Explore the Solutions &rarr;
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
        <span class="tag">The Cost of Inaction</span>
        <h2>Waiting keeps the problem alive.</h2>
        <p class="lead">The longer teams stay manual, the more they waste time, lose records and slow service for clients and citizens.</p>
      </div>
      <div class="cost-visual rv d1">
        <div class="cost-visual-title"><i class="ti ti-zap"></i> Where the time goes</div>
        <div class="cost-bars-wrap">
          <div class="cost-bar-row">
            <div class="cost-bar-label">Manual data entry</div>
            <div class="cost-bar-track"><div class="cost-bar-fill" style="--w:85%;background:linear-gradient(90deg,#F43F5E,#F87171)"></div></div>
            <div class="cost-bar-val">85%</div>
          </div>
          <div class="cost-bar-row">
            <div class="cost-bar-label">Email overload</div>
            <div class="cost-bar-track"><div class="cost-bar-fill" style="--w:72%;background:linear-gradient(90deg,#F59E0B,#FCD34D)"></div></div>
            <div class="cost-bar-val">72%</div>
          </div>
          <div class="cost-bar-row">
            <div class="cost-bar-label">Searching for info</div>
            <div class="cost-bar-track"><div class="cost-bar-fill" style="--w:64%;background:linear-gradient(90deg,#F59E0B,#FCD34D)"></div></div>
            <div class="cost-bar-val">64%</div>
          </div>
          <div class="cost-bar-row">
            <div class="cost-bar-label">Duplicate work</div>
            <div class="cost-bar-track"><div class="cost-bar-fill" style="--w:58%;background:linear-gradient(90deg,var(--blue),#60A5FA)"></div></div>
            <div class="cost-bar-val">58%</div>
          </div>
          <div class="cost-bar-row">
            <div class="cost-bar-label">Error correction</div>
            <div class="cost-bar-track"><div class="cost-bar-fill" style="--w:47%;background:linear-gradient(90deg,var(--blue),#60A5FA)"></div></div>
            <div class="cost-bar-val">47%</div>
          </div>
        </div>
        <div class="cost-note">Daily admin, repeated follow-ups and late approvals eat the day first.</div>
      </div>
    </div>

    <div class="cost-list rv">
      <div class="cost-item">
        <div class="cost-item-ico"><i class="ti ti-cash"></i></div>
        <div>
          <div class="cost-item-title">Direct Financial Losses</div>
          <div class="cost-item-desc">Wrong invoices, missing stock and payroll mistakes quickly drain money from the business.</div>
        </div>
      </div>
      <div class="cost-item">
        <div class="cost-item-ico"><i class="ti ti-rocket"></i></div>
        <div>
          <div class="cost-item-title">Slower Than the Market</div>
          <div class="cost-item-desc">When others move fast, manual processes keep your team reacting instead of leading.</div>
        </div>
      </div>
      <div class="cost-item">
        <div class="cost-item-ico"><i class="ti ti-mood-sad"></i></div>
        <div>
          <div class="cost-item-title">Staff Frustration</div>
          <div class="cost-item-desc">People get tired when the job is mostly chasing files, correcting errors and repeating the same steps.</div>
        </div>
      </div>
      <div class="cost-item">
        <div class="cost-item-ico"><i class="ti ti-clipboard-list"></i></div>
        <div>
          <div class="cost-item-title">Audit Risk</div>
          <div class="cost-item-desc">When records are scattered, audits become stressful and slow to defend.</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Before vs After -->
<section id="before-after">
  <div class="ba-inner">
    <div class="ba-header rv">
      <span class="tag">Transformation</span>
      <h2>Before vs. After DigiTexia</h2>
      <p class="lead">A quick view of what changes when everything is in one system.</p>
    </div>

    <div class="ba-grid">
      <!-- Before -->
      <div class="rv">
        <div class="ba-col-title before">
          <span>&times;</span> Without DigiTexia
        </div>
        <div class="ba-items">
          <div class="ba-item before-item"><span class="ba-item-ico"><i class="ti ti-x"></i></span>Excel, WhatsApp and paper everywhere</div>
          <div class="ba-item before-item"><span class="ba-item-ico"><i class="ti ti-x"></i></span>Reports built by hand, one by one</div>
          <div class="ba-item before-item"><span class="ba-item-ico"><i class="ti ti-x"></i></span>No live view of tasks or staff</div>
          <div class="ba-item before-item"><span class="ba-item-ico"><i class="ti ti-x"></i></span>Approvals stuck in messages and calls</div>
          <div class="ba-item before-item"><span class="ba-item-ico"><i class="ti ti-x"></i></span>Stock and records checked manually</div>
          <div class="ba-item before-item"><span class="ba-item-ico"><i class="ti ti-x"></i></span>Questions take too long to answer</div>
          <div class="ba-item before-item"><span class="ba-item-ico"><i class="ti ti-x"></i></span>No clear trail for audits</div>
          <div class="ba-item before-item"><span class="ba-item-ico"><i class="ti ti-x"></i></span>More staff often means more confusion</div>
        </div>
      </div>

      <!-- VS -->
      <div class="ba-divider">
        <div class="ba-vs">VS</div>
      </div>

      <!-- After -->
      <div class="rv d2">
        <div class="ba-col-title after">
          <span>&check;</span> With DigiTexia
        </div>
        <div class="ba-items">
          <div class="ba-item after-item"><span class="ba-item-ico"><i class="ti ti-check"></i></span>One system for all the data</div>
          <div class="ba-item after-item"><span class="ba-item-ico"><i class="ti ti-check"></i></span>Live dashboards without manual work</div>
          <div class="ba-item after-item"><span class="ba-item-ico"><i class="ti ti-check"></i></span>Clear view of tasks, attendance and KPIs</div>
          <div class="ba-item after-item"><span class="ba-item-ico"><i class="ti ti-check"></i></span>Approvals move fast and stay visible</div>
          <div class="ba-item after-item"><span class="ba-item-ico"><i class="ti ti-check"></i></span>Stock alerts when items run low</div>
          <div class="ba-item after-item"><span class="ba-item-ico"><i class="ti ti-check"></i></span>One communication hub for all teams</div>
          <div class="ba-item after-item"><span class="ba-item-ico"><i class="ti ti-check"></i></span>Searchable history for every action</div>
          <div class="ba-item after-item"><span class="ba-item-ico"><i class="ti ti-check"></i></span>Easy to grow as the team grows</div>
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
        <span class="tag">Who is Affected</span>
        <h2>Every African sector feels this.</h2>
        <p class="lead" style="margin-top:.75rem">The problem is not one industry. Offices, hospitals, schools, shops and public services all feel the delay when work is still manual.</p>
      </div>
      <div class="rv d1">
        <p class="body-text">DigiTexia is built for local realities: busy teams, mixed devices, unstable paperwork flows, and the need to move fast without losing control.</p>
        <a href="{{ url('/solutions') }}" class="btn-sec" style="margin-top:1.5rem">View All Solutions &rarr;</a>
      </div>
    </div>

    <div class="sector-grid rv">
      <div class="sector-card">
        <span class="sector-ico"><i class="ti ti-building-skyscraper"></i></span>
        <div class="sector-name">Enterprises & Corporates</div>
        <div class="sector-issue">Too many departments, too many spreadsheets, too many follow-ups</div>
      </div>
      <div class="sector-card">
        <span class="sector-ico"><i class="ti ti-hospital"></i></span>
        <div class="sector-name">Healthcare Providers</div>
        <div class="sector-issue">Paper patient records and slow access at the point of care</div>
      </div>
      <div class="sector-card">
        <span class="sector-ico"><i class="ti ti-crane"></i></span>
        <div class="sector-name">Construction & Projects</div>
        <div class="sector-issue">Site reporting, materials and attendance tracked on WhatsApp</div>
      </div>
      <div class="sector-card">
        <span class="sector-ico"><i class="ti ti-package"></i></span>
        <div class="sector-name">Retail & Distribution</div>
        <div class="sector-issue">Stock across locations tracked in disconnected sheets</div>
      </div>
      <div class="sector-card">
        <span class="sector-ico"><i class="ti ti-chart-scatter-3d"></i></span>
        <div class="sector-name">Public Institutions</div>
        <div class="sector-issue">Internal mail and files slowed by paper chains</div>
      </div>
      <div class="sector-card">
        <span class="sector-ico"><i class="ti ti-briefcase"></i></span>
        <div class="sector-name">Service Providers</div>
        <div class="sector-issue">Clients and providers still matched manually</div>
      </div>
    </div>
  </div>
</section>

<!-- Bridge -->
<section id="bridge">
  <div class="bridge-inner rv">
    <span class="tag">The DigiTexia Solution</span>
    <h2>One simple system. Less stress.</h2>
    <p class="lead">DigiTexia centralizes the work, clears the clutter, and gives teams one place to operate from.</p>

    <div class="bridge-steps">
      <div class="bridge-step">
        <div class="bridge-step-num">01</div>
        <div class="bridge-step-title">We review your workflow</div>
        <div class="bridge-step-desc">We look at how your team works today and where the delays happen.</div>
      </div>
      <div class="bridge-step">
        <div class="bridge-step-num">02</div>
        <div class="bridge-step-title">We set up the right tool</div>
        <div class="bridge-step-desc">We match your need with the right DigiTexia product or setup.</div>
      </div>
      <div class="bridge-step">
        <div class="bridge-step-num">03</div>
        <div class="bridge-step-title">We launch and support</div>
        <div class="bridge-step-desc">We help your team start fast and stay supported as you grow.</div>
      </div>
    </div>

    <div class="bridge-ctas">
      <a href="{{ url('/solutions') }}" class="btn-pri">
        Explore Our Solutions
        <svg width="14" height="14" viewBox="0 0 14 14" fill="none"><path d="M2 7h10M7 2l5 5-5 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
      </a>
      <a href="{{ url('/contact-us') }}" class="btn-sec">Contact Our Experts</a>
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
