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
    <h1>Digital tools that help teams<br><em>work faster and sell better.</em></h1>
    <p class="lead">Four focused products for organizations that need clearer operations, better visibility, and a smoother experience for users, staff, and partners.</p>

    <div class="ph-btns">
      <a href="#flexicare" class="btn-pri">
        Explore Products
        <svg width="14" height="14" viewBox="0 0 14 14" fill="none"><path d="M7 2v10M2 7l5 5 5-5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
      </a>
      <a href="{{ url('/contact-us') }}" class="btn-sec">Request a Demo</a>
    </div>

    <div class="proof-strip">
      <div class="proof-item">
        <strong>4 products</strong>
        <span>One ecosystem, built for different operational needs.</span>
      </div>
      <div class="proof-item">
        <strong>Partner ready</strong>
        <span>Designed to support demos, rollout, and long-term collaboration.</span>
      </div>
      <div class="proof-item">
        <strong>Clear outcomes</strong>
        <span>Less manual work, more control, and better visibility from day one.</span>
      </div>
    </div>

    <div class="product-nav">
      <a href="#flexicare" class="pnav-pill"><span class="pdot" style="background:#6366F1"></span>FlexiCare</a>
      <a href="#inventorypro" class="pnav-pill"><span class="pdot" style="background:#0EA5E9"></span>InventoryPro</a>
      <a href="#perfomia" class="pnav-pill"><span class="pdot" style="background:#F59E0B"></span>Perfomia</a>
      <a href="#medtrace" class="pnav-pill"><span class="pdot" style="background:#16C784"></span>MedTrace</a>
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
            <div class="ov-card-desc">A smart matching platform for vetted domestic help and childcare, with booking and verification built in.</div>
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
        <div class="ov-card-desc">Track stock, control requests, and keep every location aligned from one place.</div>
        <div class="ov-card-features"><span class="feat-chip">Multi-location</span><span class="feat-chip">Auto Alerts</span><span class="feat-chip">Request Mgmt</span></div>
        <a href="{{ url('/solutions/inventorypro') }}" class="ov-card-cta">View full details &rarr;</a>
      </div>

      <div class="ov-card" style="--accent-grad:linear-gradient(90deg,#F59E0B,transparent);border-color:rgba(245,158,11,.25)">
        <div class="ov-card-badge" style="background:rgba(245,158,11,.12);border:1px solid rgba(245,158,11,.28);color:#FCD34D"><i class="ti ti-chart-bar"></i> HR & Performance</div>
        <div class="ov-card-ico"><i class="ti ti-chart-bar"></i></div>
        <div class="ov-card-name">Perfomia</div>
        <div class="ov-card-desc">A clear view of tasks, attendance, and staff performance for day-to-day management.</div>
        <div class="ov-card-features"><span class="feat-chip">KPI Tracking</span><span class="feat-chip">Attendance</span><span class="feat-chip">Evaluations</span></div>
        <a href="{{ url('/solutions/perfomia') }}" class="ov-card-cta">View full details &rarr;</a>
      </div>

      <div class="ov-card span2" style="--accent-grad:linear-gradient(90deg,#16C784,transparent);border-color:rgba(22,199,132,.25)">
        <div style="display:grid;grid-template-columns:1fr 1fr;gap:2rem;align-items:center">
          <div>
            <div class="ov-card-badge" style="background:rgba(22,199,132,.1);border:1px solid rgba(22,199,132,.25);color:var(--green)"><i class="ti ti-heart-pulse"></i> Healthcare Innovation</div>
            <div class="ov-card-ico"><i class="ti ti-heart-pulse"></i></div>
            <div class="ov-card-name">MedTrace</div>
            <div class="ov-card-desc">A QR-based medical record system that gives practitioners fast access to critical patient data.</div>
            <div class="ov-card-features"><span class="feat-chip">QR Wearable</span><span class="feat-chip">Instant Records</span><span class="feat-chip">Emergency Data</span><span class="feat-chip">Secure</span></div>
            <a href="{{ url('/solutions/medtrace') }}" class="ov-card-cta" style="margin-top:1rem">View full details &rarr;</a>
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
        <div class="cmp-prod-head"><div class="cmp-prod-ico"><i class="ti ti-chart-bar"></i></div><div class="cmp-prod-name">Perfomia</div></div>
        <div class="cmp-prod-head"><div class="cmp-prod-ico"><i class="ti ti-heart-pulse"></i></div><div class="cmp-prod-name">MedTrace</div></div>
      </div>
      <div class="cmp-row"><div class="cmp-feature">Real-time Dashboard</div><div class="cmp-cell"><span class="check">&check;</span></div><div class="cmp-cell"><span class="check">&check;</span></div><div class="cmp-cell"><span class="check">&check;</span></div><div class="cmp-cell"><span class="check">&check;</span></div></div>
      <div class="cmp-row"><div class="cmp-feature">Mobile Access</div><div class="cmp-cell"><span class="check">&check;</span></div><div class="cmp-cell"><span class="check">&check;</span></div><div class="cmp-cell"><span class="check">&check;</span></div><div class="cmp-cell"><span class="check">&check;</span></div></div>
      <div class="cmp-row"><div class="cmp-feature">Automated Alerts</div><div class="cmp-cell"><span class="check">&check;</span></div><div class="cmp-cell"><span class="check">&check;</span></div><div class="cmp-cell"><span class="check">&check;</span></div><div class="cmp-cell"><span class="dash">&mdash;</span></div></div>
      <div class="cmp-row"><div class="cmp-feature">Full Audit Trail</div><div class="cmp-cell"><span class="dash">&mdash;</span></div><div class="cmp-cell"><span class="check">&check;</span></div><div class="cmp-cell"><span class="check">&check;</span></div><div class="cmp-cell"><span class="check">&check;</span></div></div>
      <div class="cmp-row"><div class="cmp-feature">Multi-User Roles</div><div class="cmp-cell"><span class="check">&check;</span></div><div class="cmp-cell"><span class="check">&check;</span></div><div class="cmp-cell"><span class="check">&check;</span></div><div class="cmp-cell"><span class="check">&check;</span></div></div>
      <div class="cmp-row"><div class="cmp-feature">Analytics &amp; Reports</div><div class="cmp-cell"><span class="check">&check;</span></div><div class="cmp-cell"><span class="check">&check;</span></div><div class="cmp-cell"><span class="check">&check;</span></div><div class="cmp-cell"><span class="dash">&mdash;</span></div></div>
      <div class="cmp-row"><div class="cmp-feature">Custom Workflows</div><div class="cmp-cell"><span class="dash">&mdash;</span></div><div class="cmp-cell"><span class="check">&check;</span></div><div class="cmp-cell"><span class="check">&check;</span></div><div class="cmp-cell"><span class="dash">&mdash;</span></div></div>
      <div class="cmp-row"><div class="cmp-feature">QR / Wearable Integration</div><div class="cmp-cell"><span class="dash">&mdash;</span></div><div class="cmp-cell"><span class="dash">&mdash;</span></div><div class="cmp-cell"><span class="dash">&mdash;</span></div><div class="cmp-cell"><span class="check">&check;</span></div></div>
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

