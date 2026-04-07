@extends('index')

@section('page_title', 'Solutions — DigiTexia')

@push('styles')
<link href="https://fonts.googleapis.com/css2?family=Clash+Display:wght@400;500;600;700&family=Plus+Jakarta+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/solutions-digitexia.css') }}">
@endpush

@section('contain')
<section id="page-hero">
  <div class="ph-bg"></div>
  <div class="ph-grid"></div>
  <div class="ph-inner">
    <div class="ph-breadcrumb">
      <a href="{{ url('/') }}">Home</a>
      <span>&rsaquo;</span>
      <span class="curr">Our Solutions</span>
    </div>

    <span class="tag">Our Digital Solutions</span>
    <h1>Built to Modernize<br><em>Enterprise Management.</em></h1>
    <p class="lead">We develop scalable, user-friendly platforms designed for the realities of modern African organizations. Five products. One mission: replace fragmented manual systems with intelligent digital tools.</p>

    <div class="ph-btns">
      <a href="#flexicare" class="btn-pri">
        Explore Products
        <svg width="14" height="14" viewBox="0 0 14 14" fill="none"><path d="M7 2v10M2 7l5 5 5-5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
      </a>
      <a href="{{ url('/contact-us') }}" class="btn-sec">Request a Demo</a>
    </div>

    <div class="product-nav">
      <a href="#flexicare" class="pnav-pill"><span class="pdot" style="background:#6366F1"></span>FlexiCare</a>
      <a href="#inventorypro" class="pnav-pill"><span class="pdot" style="background:#0EA5E9"></span>InventoryPro</a>
      <a href="#digiperformance" class="pnav-pill"><span class="pdot" style="background:#F59E0B"></span>DigiPerformance</a>
      <a href="#digicourier" class="pnav-pill"><span class="pdot" style="background:#EC4899"></span>DigiCourier</a>
      <a href="#digihealth" class="pnav-pill"><span class="pdot" style="background:#16C784"></span>DigiHealth Bracelet</a>
    </div>
  </div>
</section>

<section id="overview">
  <div class="ov-inner">
    <div class="ov-grid rv">
      <div class="ov-card span2" style="--accent-grad:linear-gradient(90deg,#6366F1,transparent);border-color:rgba(99,102,241,.25)">
        <div class="ov-card-badge" style="background:rgba(99,102,241,.12);border:1px solid rgba(99,102,241,.28);color:#A5B4FC"><i class="ti ti-heart-handshake"></i> Care Services Platform</div>
        <div style="display:grid;grid-template-columns:1fr 1fr;gap:2rem;align-items:center">
          <div>
            <div class="ov-card-ico"><i class="ti ti-heart-handshake"></i></div>
            <div class="ov-card-name">FlexiCare</div>
            <div class="ov-card-desc">A smart matching platform connecting individuals with vetted domestic help and childcare providers for on-demand or recurring services.</div>
            <div class="ov-card-features">
              <span class="feat-chip">Smart Matching</span><span class="feat-chip">Profile Verification</span><span class="feat-chip">Scheduling</span><span class="feat-chip">Ratings</span><span class="feat-chip">Real-Time Booking</span>
            </div>
          </div>
          <div style="background:var(--ink-3);border:1px solid rgba(99,102,241,.2);border-radius:12px;padding:1.25rem;display:flex;flex-direction:column;gap:.65rem">
            <div style="font-size:.6rem;font-weight:700;text-transform:uppercase;letter-spacing:.1em;color:#A5B4FC;margin-bottom:.25rem">Live Matching Feed</div>
            <div class="pv-row"><div class="pv-row-ico" style="background:rgba(99,102,241,.12)"><i class="ti ti-scan"></i></div><div><div class="pv-row-title">Amina K. &mdash; Cook</div><div class="pv-row-sub">4.9 &bull; 3km away &bull; Available now</div></div><div class="pv-row-tag" style="background:rgba(22,199,132,.1);color:var(--green);border:1px solid rgba(22,199,132,.25)">Match</div></div>
            <div class="pv-row"><div class="pv-row-ico" style="background:rgba(99,102,241,.12)"><i class="ti ti-baby-carriage"></i></div><div><div class="pv-row-title">Marie T. &mdash; Childcare</div><div class="pv-row-sub">4.8 &bull; 1.2km away &bull; Available now</div></div><div class="pv-row-tag" style="background:rgba(22,199,132,.1);color:var(--green);border:1px solid rgba(22,199,132,.25)">Match</div></div>
            <div class="pv-row"><div class="pv-row-ico" style="background:rgba(99,102,241,.12)"><i class="ti ti-broom"></i></div><div><div class="pv-row-title">Paul M. &mdash; Cleaner</div><div class="pv-row-sub">4.7 &bull; 2km away &bull; Booked today</div></div><div class="pv-row-tag" style="background:rgba(245,158,11,.1);color:#FCD34D;border:1px solid rgba(245,158,11,.25)">Busy</div></div>
          </div>
        </div>
        <a href="{{ url('/solutions/flexicare') }}" class="ov-card-cta">View full details &rarr;</a>
      </div>

      <div class="ov-card" style="--accent-grad:linear-gradient(90deg,#0EA5E9,transparent);border-color:rgba(14,165,233,.25)">
        <div class="ov-card-badge" style="background:rgba(14,165,233,.12);border:1px solid rgba(14,165,233,.28);color:#7DD3FC"><i class="ti ti-box"></i> Stock Management</div>
        <div class="ov-card-ico"><i class="ti ti-box"></i></div>
        <div class="ov-card-name">InventoryPro</div>
        <div class="ov-card-desc">Robust stock management to track resources, manage internal requests, and maintain tight inventory control across locations.</div>
        <div class="ov-card-features"><span class="feat-chip">Multi-location</span><span class="feat-chip">Auto Alerts</span><span class="feat-chip">Request Mgmt</span></div>
        <a href="{{ url('/solutions/inventorypro') }}" class="ov-card-cta">View full details &rarr;</a>
      </div>

      <div class="ov-card" style="--accent-grad:linear-gradient(90deg,#F59E0B,transparent);border-color:rgba(245,158,11,.25)">
        <div class="ov-card-badge" style="background:rgba(245,158,11,.12);border:1px solid rgba(245,158,11,.28);color:#FCD34D"><i class="ti ti-chart-bar"></i> HR & Performance</div>
        <div class="ov-card-ico"><i class="ti ti-chart-bar"></i></div>
        <div class="ov-card-name">DigiPerformance</div>
        <div class="ov-card-desc">Comprehensive performance tracking for task delegation, activity monitoring, staff evaluation, and attendance management.</div>
        <div class="ov-card-features"><span class="feat-chip">KPI Tracking</span><span class="feat-chip">Attendance</span><span class="feat-chip">Evaluations</span></div>
        <a href="{{ url('/solutions/digiperformance') }}" class="ov-card-cta">View full details &rarr;</a>
      </div>

      <div class="ov-card" style="--accent-grad:linear-gradient(90deg,#EC4899,transparent);border-color:rgba(236,72,153,.25)">
        <div class="ov-card-badge" style="background:rgba(236,72,153,.12);border:1px solid rgba(236,72,153,.28);color:#F9A8D4"><i class="ti ti-mail"></i> Internal Comms</div>
        <div class="ov-card-ico"><i class="ti ti-mail"></i></div>
        <div class="ov-card-name">DigiCourier</div>
        <div class="ov-card-desc">Administrative tracking system to digitize internal mail flows and secure official communication history with full audit trails.</div>
        <div class="ov-card-features"><span class="feat-chip">Mail Tracking</span><span class="feat-chip">Audit Trail</span><span class="feat-chip">Digital Archive</span></div>
        <a href="{{ url('/solutions/digicourier') }}" class="ov-card-cta">View full details &rarr;</a>
      </div>

      <div class="ov-card span2" style="--accent-grad:linear-gradient(90deg,#16C784,transparent);border-color:rgba(22,199,132,.25)">
        <div style="display:grid;grid-template-columns:1fr 1fr;gap:2rem;align-items:center">
          <div>
            <div class="ov-card-badge" style="background:rgba(22,199,132,.1);border:1px solid rgba(22,199,132,.25);color:var(--green)"><i class="ti ti-heart-pulse"></i> Healthcare Innovation</div>
            <div class="ov-card-ico"><i class="ti ti-heart-pulse"></i></div>
            <div class="ov-card-name">DigiHealth Bracelet</div>
            <div class="ov-card-desc">Innovative digital medical record system accessible via QR-coded wearables, providing instant access to vital patient data at the point of care.</div>
            <div class="ov-card-features"><span class="feat-chip">QR Wearable</span><span class="feat-chip">Instant Records</span><span class="feat-chip">Emergency Data</span><span class="feat-chip">Secure</span></div>
            <a href="{{ url('/solutions/digihealth') }}" class="ov-card-cta" style="margin-top:1rem">View full details &rarr;</a>
          </div>
          <div style="background:var(--ink-3);border:1px solid rgba(22,199,132,.2);border-radius:12px;padding:1.5rem;text-align:center">
            <div style="font-size:.6rem;font-weight:700;text-transform:uppercase;letter-spacing:.1em;color:var(--green);margin-bottom:1.25rem">Patient Record via QR Scan</div>
            <div style="font-size:2.5rem;margin-bottom:.75rem"><i class="ti ti-qrcode"></i></div>
            <div style="background:rgba(22,199,132,.08);border:1px solid rgba(22,199,132,.2);border-radius:8px;padding:.85rem;font-size:.75rem;color:#D1FAE5;line-height:1.6;text-align:left">
              <div style="font-weight:600;color:var(--green);margin-bottom:.5rem">Jean-Paul M., 42 ans</div>
              <div><i class="ti ti-blood-off"></i> Type O+ &nbsp;&middot;&nbsp; <i class="ti ti-alert-triangle"></i> Penicillin allergy</div>
              <div style="margin-top:.35rem"><i class="ti ti-pill"></i> Metformin 500mg/day</div>
              <div style="margin-top:.35rem"><i class="ti ti-clipboard"></i> Last visit: 12 Jan 2025</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="flexicare" class="prod-section">
  <div class="prod-inner">
    <div class="rv">
      <div class="prod-num">Product 01 / 05</div>
      <div class="prod-tag" style="background:rgba(99,102,241,.12);border:1px solid rgba(99,102,241,.28);color:#A5B4FC"><i class="ti ti-heart-handshake"></i> FlexiCare</div>
      <h3>Smart Matching for Domestic &amp; Care Services</h3>
      <p class="lead">Connect individuals with verified, vetted domestic help and childcare professionals &mdash; on-demand or recurring, managed entirely from one platform.</p>
      <div class="feat-list">
        <div class="feat-item" style="border-left:2px solid rgba(99,102,241,.4)">
          <div class="feat-item-ico" style="background:rgba(99,102,241,.12)"><i class="ti ti-search"></i></div>
          <div class="feat-item-body"><div class="feat-item-title">AI-Powered Smart Matching</div><div class="feat-item-desc">Automatically matches clients with the best available service provider based on location, skills, ratings, and availability.</div></div>
        </div>
        <div class="feat-item" style="border-left:2px solid rgba(99,102,241,.4)">
          <div class="feat-item-ico" style="background:rgba(99,102,241,.12)"><i class="ti ti-shield-check"></i></div>
          <div class="feat-item-body"><div class="feat-item-title">Profile Verification System</div><div class="feat-item-desc">Every service provider goes through a thorough vetting process &mdash; identity, background, and skills are all verified before listing.</div></div>
        </div>
        <div class="feat-item" style="border-left:2px solid rgba(99,102,241,.4)">
          <div class="feat-item-ico" style="background:rgba(99,102,241,.12)"><i class="ti ti-calendar"></i></div>
          <div class="feat-item-body"><div class="feat-item-title">Scheduling &amp; Recurring Bookings</div><div class="feat-item-desc">Clients can schedule one-off or recurring services with automated reminders, confirmations, and calendar integration.</div></div>
        </div>
        <div class="feat-item" style="border-left:2px solid rgba(99,102,241,.4)">
          <div class="feat-item-ico" style="background:rgba(99,102,241,.12)"><i class="ti ti-star"></i></div>
          <div class="feat-item-body"><div class="feat-item-title">Ratings &amp; Reviews Engine</div><div class="feat-item-desc">Post-service reviews maintain quality standards and help clients make informed decisions when choosing a provider.</div></div>
        </div>
      </div>
      <div class="prod-ctas">
        <a href="{{ url('/contact-us') }}" class="btn-pri" style="background:#6366F1;box-shadow:0 0 32px rgba(99,102,241,.35)">Request a Demo &rarr;</a>
        <a href="{{ url('/solutions/flexicare') }}" class="btn-sec">Learn More</a>
      </div>
    </div>
    <div class="prod-visual rv d2">
      <div class="pv-card">
        <div class="pv-topbar"><div class="pv-dot" style="background:#FF5F57"></div><div class="pv-dot" style="background:#FEBC2E"></div><div class="pv-dot" style="background:#28C840"></div><span class="pv-title">FlexiCare &middot; Dashboard</span></div>
        <div class="pv-body">
          <div class="pv-stats-row">
            <div class="pv-stat"><div class="pv-stat-val" style="color:#A5B4FC">142</div><div class="pv-stat-lbl">Active Providers</div></div>
            <div class="pv-stat"><div class="pv-stat-val" style="color:var(--green)">98%</div><div class="pv-stat-lbl">Match Rate</div></div>
            <div class="pv-stat"><div class="pv-stat-val" style="color:#FCD34D">4.9&starf;</div><div class="pv-stat-lbl">Avg Rating</div></div>
          </div>
          <div><div class="pv-header-row"><span class="pv-section-title">Recent Bookings</span><span class="pv-status" style="background:rgba(22,199,132,.1);color:var(--green);border:1px solid rgba(22,199,132,.25)">Live</span></div></div>
          <div class="pv-row"><div class="pv-row-ico" style="background:rgba(99,102,241,.12)"><i class="ti ti-chef-hat"></i></div><div><div class="pv-row-title">Amina K. &mdash; Cook</div><div class="pv-row-sub">Today &middot; 2h ago &middot; Completed</div></div><div class="pv-row-tag" style="background:rgba(22,199,132,.1);color:var(--green);border:1px solid rgba(22,199,132,.25)">Done</div></div>
          <div class="pv-row"><div class="pv-row-ico" style="background:rgba(99,102,241,.12)"><i class="ti ti-baby-carriage"></i></div><div><div class="pv-row-title">Marie T. &mdash; Childcare</div><div class="pv-row-sub">Tomorrow &middot; 09:00 &middot; Confirmed</div></div><div class="pv-row-tag" style="background:rgba(14,165,233,.1);color:#7DD3FC;border:1px solid rgba(14,165,233,.25)">Upcoming</div></div>
          <div class="pv-row"><div class="pv-row-ico" style="background:rgba(99,102,241,.12)"><i class="ti ti-broom"></i></div><div><div class="pv-row-title">Paul M. &mdash; Cleaner</div><div class="pv-row-sub">Weekly &middot; Recurring</div></div><div class="pv-row-tag" style="background:rgba(245,158,11,.1);color:#FCD34D;border:1px solid rgba(245,158,11,.25)">Active</div></div>
        </div>
      </div>
      <div class="pv-float"><div class="pv-float-lbl">New match found</div><div class="pv-float-val" style="color:#A5B4FC">+1 Provider Available</div></div>
    </div>
  </div>
</section>

<section id="inventorypro" class="prod-section">
  <div class="prod-inner reverse">
    <div class="rv">
      <div class="prod-num">Product 02 / 05</div>
      <div class="prod-tag" style="background:rgba(14,165,233,.12);border:1px solid rgba(14,165,233,.28);color:#7DD3FC"><i class="ti ti-box"></i> InventoryPro</div>
      <h3>Complete Stock &amp; Resource Management</h3>
      <p class="lead">Track resources across locations, manage internal requests, and maintain tight inventory control &mdash; eliminating manual counts and spreadsheet errors for good.</p>
      <div class="feat-list">
        <div class="feat-item" style="border-left:2px solid rgba(14,165,233,.4)">
          <div class="feat-item-ico" style="background:rgba(14,165,233,.12)"><i class="ti ti-map-pin"></i></div>
          <div class="feat-item-body"><div class="feat-item-title">Multi-Location Tracking</div><div class="feat-item-desc">Monitor stock levels across multiple warehouses, departments, or sites in real time from a single dashboard.</div></div>
        </div>
        <div class="feat-item" style="border-left:2px solid rgba(14,165,233,.4)">
          <div class="feat-item-ico" style="background:rgba(14,165,233,.12)"><i class="ti ti-bell"></i></div>
          <div class="feat-item-body"><div class="feat-item-title">Automated Low-Stock Alerts</div><div class="feat-item-desc">Set custom thresholds and receive instant notifications when stock falls below critical levels, preventing costly shortages.</div></div>
        </div>
        <div class="feat-item" style="border-left:2px solid rgba(14,165,233,.4)">
          <div class="feat-item-ico" style="background:rgba(14,165,233,.12)"><i class="ti ti-clipboard-list"></i></div>
          <div class="feat-item-body"><div class="feat-item-title">Internal Request Management</div><div class="feat-item-desc">Teams can submit, track, and approve resource requests digitally &mdash; no more verbal or paper-based ordering processes.</div></div>
        </div>
        <div class="feat-item" style="border-left:2px solid rgba(14,165,233,.4)">
          <div class="feat-item-ico" style="background:rgba(14,165,233,.12)"><i class="ti ti-chart-line"></i></div>
          <div class="feat-item-body"><div class="feat-item-title">Consumption Analytics</div><div class="feat-item-desc">Analyze usage patterns over time to optimize purchasing, reduce waste, and forecast future needs accurately.</div></div>
        </div>
      </div>
      <div class="prod-ctas">
        <a href="{{ url('/contact-us') }}" class="btn-pri" style="background:#0EA5E9;box-shadow:0 0 32px rgba(14,165,233,.35)">Request a Demo &rarr;</a>
        <a href="{{ url('/solutions/inventorypro') }}" class="btn-sec">Learn More</a>
      </div>
    </div>
    <div class="prod-visual rv d2">
      <div class="pv-card">
        <div class="pv-topbar"><div class="pv-dot" style="background:#FF5F57"></div><div class="pv-dot" style="background:#FEBC2E"></div><div class="pv-dot" style="background:#28C840"></div><span class="pv-title">InventoryPro &middot; Stock Overview</span></div>
        <div class="pv-body">
          <div class="pv-stats-row">
            <div class="pv-stat"><div class="pv-stat-val" style="color:#7DD3FC">1,284</div><div class="pv-stat-lbl">Total Items</div></div>
            <div class="pv-stat"><div class="pv-stat-val" style="color:#F87171">7</div><div class="pv-stat-lbl">Low Stock</div></div>
            <div class="pv-stat"><div class="pv-stat-val" style="color:var(--green)">12</div><div class="pv-stat-lbl">Requests</div></div>
          </div>
          <div><div class="pv-header-row"><span class="pv-section-title">Stock Status</span><span class="pv-status" style="background:rgba(14,165,233,.1);color:#7DD3FC;border:1px solid rgba(14,165,233,.25)">3 Locations</span></div></div>
          <div class="pv-row"><div class="pv-row-ico" style="background:rgba(14,165,233,.12)"><i class="ti ti-box-seam"></i></div><div><div class="pv-row-title">Office Supplies &mdash; HQ</div><div class="pv-row-sub">248 units &middot; Updated 10m ago</div></div><div class="pv-row-tag" style="background:rgba(22,199,132,.1);color:var(--green);border:1px solid rgba(22,199,132,.25)">OK</div></div>
          <div class="pv-row"><div class="pv-row-ico" style="background:rgba(240,68,68,.12)"><i class="ti ti-ambulance"></i></div><div><div class="pv-row-title">Medical Kits &mdash; Site B</div><div class="pv-row-sub">3 units remaining</div></div><div class="pv-row-tag" style="background:rgba(240,68,68,.1);color:#F87171;border:1px solid rgba(240,68,68,.25)">Low</div></div>
          <div class="pv-row"><div class="pv-row-ico" style="background:rgba(14,165,233,.12)"><i class="ti ti-tools"></i></div><div><div class="pv-row-title">Equipment &mdash; Warehouse</div><div class="pv-row-sub">67 units &middot; Stable</div></div><div class="pv-row-tag" style="background:rgba(22,199,132,.1);color:var(--green);border:1px solid rgba(22,199,132,.25)">OK</div></div>
        </div>
      </div>
      <div class="pv-float" style="left:-1.5rem;right:auto"><div class="pv-float-lbl">Alert triggered</div><div class="pv-float-val" style="color:#F87171">Medical Kits &darr;</div></div>
    </div>
  </div>
</section>

<section id="digiperformance" class="prod-section">
  <div class="prod-inner">
    <div class="rv">
      <div class="prod-num">Product 03 / 05</div>
      <div class="prod-tag" style="background:rgba(245,158,11,.12);border:1px solid rgba(245,158,11,.28);color:#FCD34D"><i class="ti ti-chart-bar"></i> DigiPerformance</div>
      <h3>Performance Tracking &amp; Team Management Suite</h3>
      <p class="lead">Delegate tasks, monitor activities, evaluate staff, and track attendance &mdash; all from one centralized platform that replaces scattered spreadsheets and verbal reporting.</p>
      <div class="feat-list">
        <div class="feat-item" style="border-left:2px solid rgba(245,158,11,.4)">
          <div class="feat-item-ico" style="background:rgba(245,158,11,.12)"><i class="ti ti-target-arrow"></i></div>
          <div class="feat-item-body"><div class="feat-item-title">Task Delegation &amp; Tracking</div><div class="feat-item-desc">Assign tasks with deadlines, priorities, and responsible owners &mdash; then track completion status in real time without follow-up meetings.</div></div>
        </div>
        <div class="feat-item" style="border-left:2px solid rgba(245,158,11,.4)">
          <div class="feat-item-ico" style="background:rgba(245,158,11,.12)"><i class="ti ti-clock"></i></div>
          <div class="feat-item-body"><div class="feat-item-title">Attendance Management</div><div class="feat-item-desc">Digital clock-in/clock-out with location verification, overtime calculations, and automated monthly attendance reports.</div></div>
        </div>
        <div class="feat-item" style="border-left:2px solid rgba(245,158,11,.4)">
          <div class="feat-item-ico" style="background:rgba(245,158,11,.12)"><i class="ti ti-star"></i></div>
          <div class="feat-item-body"><div class="feat-item-title">Staff Evaluation System</div><div class="feat-item-desc">Conduct structured performance reviews with KPIs, objective scoring, and historical comparison &mdash; enabling fair, data-driven appraisals.</div></div>
        </div>
        <div class="feat-item" style="border-left:2px solid rgba(245,158,11,.4)">
          <div class="feat-item-ico" style="background:rgba(245,158,11,.12)"><i class="ti ti-chart-pie"></i></div>
          <div class="feat-item-body"><div class="feat-item-title">Activity Monitoring Dashboard</div><div class="feat-item-desc">Live visibility into team workload, progress, and output &mdash; giving managers the insights to act before problems escalate.</div></div>
        </div>
      </div>
      <div class="prod-ctas">
        <a href="{{ url('/contact-us') }}" class="btn-pri" style="background:#D97706;box-shadow:0 0 32px rgba(245,158,11,.35)">Request a Demo &rarr;</a>
        <a href="{{ url('/solutions/digiperformance') }}" class="btn-sec">Learn More</a>
      </div>
    </div>
    <div class="prod-visual rv d2">
      <div class="pv-card">
        <div class="pv-topbar"><div class="pv-dot" style="background:#FF5F57"></div><div class="pv-dot" style="background:#FEBC2E"></div><div class="pv-dot" style="background:#28C840"></div><span class="pv-title">DigiPerformance &middot; Team View</span></div>
        <div class="pv-body">
          <div class="pv-stats-row">
            <div class="pv-stat"><div class="pv-stat-val" style="color:#FCD34D">86%</div><div class="pv-stat-lbl">Tasks Done</div></div>
            <div class="pv-stat"><div class="pv-stat-val" style="color:var(--green)">94%</div><div class="pv-stat-lbl">Attendance</div></div>
            <div class="pv-stat"><div class="pv-stat-val" style="color:#FCD34D">4.2</div><div class="pv-stat-lbl">Avg Score</div></div>
          </div>
          <div><div class="pv-header-row"><span class="pv-section-title">Team Performance</span><span class="pv-status" style="background:rgba(245,158,11,.1);color:#FCD34D;border:1px solid rgba(245,158,11,.25)">This Week</span></div></div>
          <div class="pv-row"><div class="pv-row-ico" style="background:rgba(245,158,11,.12)"><i class="ti ti-user"></i></div><div><div class="pv-row-title">Christelle B.</div><div class="pv-row-sub">8/9 tasks &middot; Present 5/5 days</div></div><div class="pv-row-tag" style="background:rgba(22,199,132,.1);color:var(--green);border:1px solid rgba(22,199,132,.25)">98%</div></div>
          <div class="pv-row"><div class="pv-row-ico" style="background:rgba(245,158,11,.12)"><i class="ti ti-user"></i></div><div><div class="pv-row-title">Marcel O.</div><div class="pv-row-sub">6/9 tasks &middot; Present 4/5 days</div></div><div class="pv-row-tag" style="background:rgba(245,158,11,.1);color:#FCD34D;border:1px solid rgba(245,158,11,.25)">72%</div></div>
          <div class="pv-row"><div class="pv-row-ico" style="background:rgba(245,158,11,.12)"><i class="ti ti-user"></i></div><div><div class="pv-row-title">Diane K.</div><div class="pv-row-sub">9/9 tasks &middot; Present 5/5 days</div></div><div class="pv-row-tag" style="background:rgba(22,199,132,.1);color:var(--green);border:1px solid rgba(22,199,132,.25)">100%</div></div>
        </div>
      </div>
      <div class="pv-float"><div class="pv-float-lbl">Top performer</div><div class="pv-float-val" style="color:#FCD34D">Diane K. &starf;</div></div>
    </div>
  </div>
</section>

<section id="digicourier" class="prod-section">
  <div class="prod-inner reverse">
    <div class="rv">
      <div class="prod-num">Product 04 / 05</div>
      <div class="prod-tag" style="background:rgba(236,72,153,.12);border:1px solid rgba(236,72,153,.28);color:#F9A8D4"><i class="ti ti-mail"></i> DigiCourier</div>
      <h3>Digital Internal Mail &amp; Communication Tracking</h3>
      <p class="lead">Digitize every internal mail flow, secure your official communication history, and maintain a searchable, tamper-proof audit trail of all administrative correspondence.</p>
      <div class="feat-list">
        <div class="feat-item" style="border-left:2px solid rgba(236,72,153,.4)">
          <div class="feat-item-ico" style="background:rgba(236,72,153,.12)"><i class="ti ti-mail-fast"></i></div>
          <div class="feat-item-body"><div class="feat-item-title">Digital Mail Tracking</div><div class="feat-item-desc">Track every internal document from sender to recipient with timestamps, read receipts, and full delivery confirmation.</div></div>
        </div>
        <div class="feat-item" style="border-left:2px solid rgba(236,72,153,.4)">
          <div class="feat-item-ico" style="background:rgba(236,72,153,.12)"><i class="ti ti-lock"></i></div>
          <div class="feat-item-body"><div class="feat-item-title">Secure Communication Archive</div><div class="feat-item-desc">All official correspondence is stored securely with access controls &mdash; retrievable instantly during audits or disputes.</div></div>
        </div>
        <div class="feat-item" style="border-left:2px solid rgba(236,72,153,.4)">
          <div class="feat-item-ico" style="background:rgba(236,72,153,.12)"><i class="ti ti-scan"></i></div>
          <div class="feat-item-body"><div class="feat-item-title">Classification &amp; Routing</div><div class="feat-item-desc">Automatically classify incoming documents and route them to the correct department, role, or individual &mdash; eliminating manual sorting.</div></div>
        </div>
        <div class="feat-item" style="border-left:2px solid rgba(236,72,153,.4)">
          <div class="feat-item-ico" style="background:rgba(236,72,153,.12)"><i class="ti ti-clipboard-check"></i></div>
          <div class="feat-item-body"><div class="feat-item-title">Full Audit Trail</div><div class="feat-item-desc">Every action on every document is logged &mdash; who opened it, who approved it, when, and from where. Compliance-ready at all times.</div></div>
        </div>
      </div>
      <div class="prod-ctas">
        <a href="{{ url('/contact-us') }}" class="btn-pri" style="background:#BE185D;box-shadow:0 0 32px rgba(236,72,153,.35)">Request a Demo &rarr;</a>
        <a href="{{ url('/solutions/digicourier') }}" class="btn-sec">Learn More</a>
      </div>
    </div>
    <div class="prod-visual rv d2">
      <div class="pv-card">
        <div class="pv-topbar"><div class="pv-dot" style="background:#FF5F57"></div><div class="pv-dot" style="background:#FEBC2E"></div><div class="pv-dot" style="background:#28C840"></div><span class="pv-title">DigiCourier &middot; Mail Tracker</span></div>
        <div class="pv-body">
          <div class="pv-stats-row">
            <div class="pv-stat"><div class="pv-stat-val" style="color:#F9A8D4">47</div><div class="pv-stat-lbl">In Transit</div></div>
            <div class="pv-stat"><div class="pv-stat-val" style="color:var(--green)">312</div><div class="pv-stat-lbl">Delivered</div></div>
            <div class="pv-stat"><div class="pv-stat-val" style="color:#F87171">3</div><div class="pv-stat-lbl">Pending</div></div>
          </div>
          <div><div class="pv-header-row"><span class="pv-section-title">Recent Documents</span><span class="pv-status" style="background:rgba(236,72,153,.1);color:#F9A8D4;border:1px solid rgba(236,72,153,.25)">Tracked</span></div></div>
          <div class="pv-row"><div class="pv-row-ico" style="background:rgba(236,72,153,.12)"><i class="ti ti-file"></i></div><div><div class="pv-row-title">Contract #2025-047</div><div class="pv-row-sub">DG &rarr; Legal &middot; Signed 14:32</div></div><div class="pv-row-tag" style="background:rgba(22,199,132,.1);color:var(--green);border:1px solid rgba(22,199,132,.25)">Delivered</div></div>
          <div class="pv-row"><div class="pv-row-ico" style="background:rgba(236,72,153,.12)"><i class="ti ti-clipboard"></i></div><div><div class="pv-row-title">HR Memo &mdash; Q1 Review</div><div class="pv-row-sub">HR &rarr; All Depts &middot; Pending read</div></div><div class="pv-row-tag" style="background:rgba(245,158,11,.1);color:#FCD34D;border:1px solid rgba(245,158,11,.25)">Pending</div></div>
          <div class="pv-row"><div class="pv-row-ico" style="background:rgba(236,72,153,.12)"><i class="ti ti-file-check"></i></div><div><div class="pv-row-title">Purchase Order #889</div><div class="pv-row-sub">Finance &rarr; Procurement &middot; Approved</div></div><div class="pv-row-tag" style="background:rgba(22,199,132,.1);color:var(--green);border:1px solid rgba(22,199,132,.25)">Done</div></div>
        </div>
      </div>
      <div class="pv-float" style="left:-1.5rem;right:auto"><div class="pv-float-lbl">Audit ready</div><div class="pv-float-val" style="color:#F9A8D4">100% Traced &check;</div></div>
    </div>
  </div>
</section>

<section id="digihealth" class="prod-section">
  <div class="prod-inner">
    <div class="rv">
      <div class="prod-num">Product 05 / 05</div>
      <div class="prod-tag" style="background:rgba(22,199,132,.1);border:1px solid rgba(22,199,132,.25);color:var(--green)"><i class="ti ti-heart-pulse"></i> DigiHealth Bracelet</div>
      <h3>Instant Medical Records via QR-Coded Wearables</h3>
      <p class="lead">A breakthrough in patient care &mdash; vital medical records embedded in a wearable bracelet, accessible instantly at any point of care with a simple QR scan. No paperwork. No delays.</p>
      <div class="feat-list">
        <div class="feat-item" style="border-left:2px solid rgba(22,199,132,.4)">
          <div class="feat-item-ico" style="background:rgba(22,199,132,.1)"><i class="ti ti-qrcode"></i></div>
          <div class="feat-item-body"><div class="feat-item-title">QR-Coded Wearable Bracelet</div><div class="feat-item-desc">Each bracelet contains a unique QR code linked to a secure patient profile &mdash; scannable by any authorized healthcare professional in seconds.</div></div>
        </div>
        <div class="feat-item" style="border-left:2px solid rgba(22,199,132,.4)">
          <div class="feat-item-ico" style="background:rgba(22,199,132,.1)"><i class="ti ti-bolt"></i></div>
          <div class="feat-item-body"><div class="feat-item-title">Emergency Critical Data Access</div><div class="feat-item-desc">Blood type, allergies, chronic conditions, and emergency contacts are immediately available &mdash; critical in emergency and unconscious-patient scenarios.</div></div>
        </div>
        <div class="feat-item" style="border-left:2px solid rgba(22,199,132,.4)">
          <div class="feat-item-ico" style="background:rgba(22,199,132,.1)"><i class="ti ti-clipboard"></i></div>
          <div class="feat-item-body"><div class="feat-item-title">Full Medical History Record</div><div class="feat-item-desc">Past consultations, prescriptions, vaccinations, and lab results stored securely and updated after each visit &mdash; giving any doctor full context instantly.</div></div>
        </div>
        <div class="feat-item" style="border-left:2px solid rgba(22,199,132,.4)">
          <div class="feat-item-ico" style="background:rgba(22,199,132,.1)"><i class="ti ti-lock"></i></div>
          <div class="feat-item-body"><div class="feat-item-title">Privacy-First Security</div><div class="feat-item-desc">Patient data is encrypted and access is restricted to authorized practitioners &mdash; patients retain full control over who can view their records.</div></div>
        </div>
      </div>
      <div class="prod-ctas">
        <a href="{{ url('/contact-us') }}" class="btn-pri" style="background:#059669;box-shadow:0 0 32px rgba(22,199,132,.35)">Request a Demo &rarr;</a>
        <a href="{{ url('/solutions/digihealth') }}" class="btn-sec">Learn More</a>
      </div>
    </div>
    <div class="prod-visual rv d2">
      <div class="pv-card">
        <div class="pv-topbar"><div class="pv-dot" style="background:#FF5F57"></div><div class="pv-dot" style="background:#FEBC2E"></div><div class="pv-dot" style="background:#28C840"></div><span class="pv-title">DigiHealth &middot; Patient Record</span></div>
        <div class="pv-body">
          <div style="background:rgba(22,199,132,.06);border:1px solid rgba(22,199,132,.2);border-radius:10px;padding:1rem;display:flex;align-items:center;gap:.85rem">
            <div style="font-size:1.5rem"><i class="ti ti-qrcode"></i></div>
            <div><div style="font-size:.65rem;color:var(--green);font-weight:700;letter-spacing:.08em;text-transform:uppercase">QR Scan Successful</div><div style="font-family:'Clash Display',sans-serif;font-size:.95rem;font-weight:700;margin-top:.15rem">Jean-Paul Mbarga, 42</div></div>
          </div>
          <div class="pv-stats-row">
            <div class="pv-stat"><div class="pv-stat-val" style="color:#F87171">O+</div><div class="pv-stat-lbl">Blood Type</div></div>
            <div class="pv-stat"><div class="pv-stat-val" style="color:#FCD34D"><i class="ti ti-alert-triangle"></i> 1</div><div class="pv-stat-lbl">Allergy</div></div>
            <div class="pv-stat"><div class="pv-stat-val" style="color:var(--green)">4</div><div class="pv-stat-lbl">Prescriptions</div></div>
          </div>
          <div><div class="pv-header-row"><span class="pv-section-title">Medical History</span><span class="pv-status" style="background:rgba(22,199,132,.1);color:var(--green);border:1px solid rgba(22,199,132,.25)">Verified</span></div></div>
          <div class="pv-row"><div class="pv-row-ico" style="background:rgba(22,199,132,.1)"><i class="ti ti-pill"></i></div><div><div class="pv-row-title">Metformin 500mg</div><div class="pv-row-sub">Daily &middot; Since Jan 2024</div></div><div class="pv-row-tag" style="background:rgba(22,199,132,.1);color:var(--green);border:1px solid rgba(22,199,132,.25)">Active</div></div>
          <div class="pv-row"><div class="pv-row-ico" style="background:rgba(240,68,68,.1)"><i class="ti ti-alert-triangle"></i></div><div><div class="pv-row-title">Penicillin &mdash; ALLERGY</div><div class="pv-row-sub">Severe reaction documented</div></div><div class="pv-row-tag" style="background:rgba(240,68,68,.1);color:#F87171;border:1px solid rgba(240,68,68,.25)">Alert</div></div>
          <div class="pv-row"><div class="pv-row-ico" style="background:rgba(22,199,132,.1)"><i class="ti ti-hospital"></i></div><div><div class="pv-row-title">Last Consultation</div><div class="pv-row-sub">Dr. Fomba &mdash; 12 Jan 2025</div></div><div class="pv-row-tag" style="background:rgba(14,165,233,.1);color:#7DD3FC;border:1px solid rgba(14,165,233,.25)">View</div></div>
        </div>
      </div>
      <div class="pv-float"><div class="pv-float-lbl">Emergency access</div><div class="pv-float-val" style="color:var(--green)">Less than 3 seconds &rarr;</div></div>
    </div>
  </div>
</section>

<section id="compare">
  <div class="cmp-inner">
    <div class="cmp-header rv">
      <span class="tag">At a Glance</span>
      <h2>Compare All Solutions</h2>
      <p class="lead" style="max-width:500px;margin:.75rem auto 0">Find the right product for your organization's specific needs.</p>
    </div>
    <div class="cmp-table rv d1">
      <div class="cmp-head-row">
        <div style="font-size:.75rem;color:var(--muted)">Features</div>
        <div class="cmp-prod-head"><div class="cmp-prod-ico"><i class="ti ti-heart-handshake"></i></div><div class="cmp-prod-name">FlexiCare</div></div>
        <div class="cmp-prod-head"><div class="cmp-prod-ico"><i class="ti ti-box"></i></div><div class="cmp-prod-name">InventoryPro</div></div>
        <div class="cmp-prod-head"><div class="cmp-prod-ico"><i class="ti ti-chart-bar"></i></div><div class="cmp-prod-name">DigiPerf.</div></div>
        <div class="cmp-prod-head"><div class="cmp-prod-ico"><i class="ti ti-mail"></i></div><div class="cmp-prod-name">DigiCourier</div></div>
        <div class="cmp-prod-head"><div class="cmp-prod-ico"><i class="ti ti-heart-pulse"></i></div><div class="cmp-prod-name">DigiHealth</div></div>
      </div>
      <div class="cmp-row"><div class="cmp-feature">Real-time Dashboard</div><div class="cmp-cell"><span class="check">&check;</span></div><div class="cmp-cell"><span class="check">&check;</span></div><div class="cmp-cell"><span class="check">&check;</span></div><div class="cmp-cell"><span class="check">&check;</span></div><div class="cmp-cell"><span class="check">&check;</span></div></div>
      <div class="cmp-row"><div class="cmp-feature">Mobile Access</div><div class="cmp-cell"><span class="check">&check;</span></div><div class="cmp-cell"><span class="check">&check;</span></div><div class="cmp-cell"><span class="check">&check;</span></div><div class="cmp-cell"><span class="check">&check;</span></div><div class="cmp-cell"><span class="check">&check;</span></div></div>
      <div class="cmp-row"><div class="cmp-feature">Automated Alerts</div><div class="cmp-cell"><span class="check">&check;</span></div><div class="cmp-cell"><span class="check">&check;</span></div><div class="cmp-cell"><span class="check">&check;</span></div><div class="cmp-cell"><span class="check">&check;</span></div><div class="cmp-cell"><span class="dash">&mdash;</span></div></div>
      <div class="cmp-row"><div class="cmp-feature">Full Audit Trail</div><div class="cmp-cell"><span class="dash">&mdash;</span></div><div class="cmp-cell"><span class="check">&check;</span></div><div class="cmp-cell"><span class="check">&check;</span></div><div class="cmp-cell"><span class="check">&check;</span></div><div class="cmp-cell"><span class="check">&check;</span></div></div>
      <div class="cmp-row"><div class="cmp-feature">Multi-User Roles</div><div class="cmp-cell"><span class="check">&check;</span></div><div class="cmp-cell"><span class="check">&check;</span></div><div class="cmp-cell"><span class="check">&check;</span></div><div class="cmp-cell"><span class="check">&check;</span></div><div class="cmp-cell"><span class="check">&check;</span></div></div>
      <div class="cmp-row"><div class="cmp-feature">Analytics &amp; Reports</div><div class="cmp-cell"><span class="check">&check;</span></div><div class="cmp-cell"><span class="check">&check;</span></div><div class="cmp-cell"><span class="check">&check;</span></div><div class="cmp-cell"><span class="check">&check;</span></div><div class="cmp-cell"><span class="dash">&mdash;</span></div></div>
      <div class="cmp-row"><div class="cmp-feature">Custom Workflows</div><div class="cmp-cell"><span class="dash">&mdash;</span></div><div class="cmp-cell"><span class="check">&check;</span></div><div class="cmp-cell"><span class="check">&check;</span></div><div class="cmp-cell"><span class="check">&check;</span></div><div class="cmp-cell"><span class="dash">&mdash;</span></div></div>
      <div class="cmp-row"><div class="cmp-feature">QR / Wearable Integration</div><div class="cmp-cell"><span class="dash">&mdash;</span></div><div class="cmp-cell"><span class="dash">&mdash;</span></div><div class="cmp-cell"><span class="dash">&mdash;</span></div><div class="cmp-cell"><span class="dash">&mdash;</span></div><div class="cmp-cell"><span class="check">&check;</span></div></div>
    </div>
  </div>
</section>

<section id="sol-cta">
  <div class="sol-cta-inner rv">
    <span class="tag">Get Started</span>
    <h2>Not sure which solution fits your needs?</h2>
    <p class="lead">Our experts will analyze your current operations and recommend the right combination of DigiTexia products for your organization &mdash; at no cost.</p>
    <div class="cta-btns">
      <a href="{{ url('/contact-us') }}" class="btn-pri">Request a Free Consultation <svg width="14" height="14" viewBox="0 0 14 14" fill="none"><path d="M2 7h10M7 2l5 5-5 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
      <a href="{{ url('/the-problem') }}" class="btn-sec">See The Problem &rarr;</a>
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
