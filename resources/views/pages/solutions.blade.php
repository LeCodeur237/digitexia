@extends('index')

@section('page_title', 'Solutions | DigiTexia')

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

    <span class="tag">Digital Operations Suite</span>
    <h1>Deploy the right platform for the workflow<br><em>that limits your business performance.</em></h1>
    <p class="lead">DigiTexia solutions help organizations digitize critical operations, reduce manual follow-up and give leadership the visibility needed to control execution at scale.</p>

    <div class="ph-btns">
      <a href="#flexicare" class="btn-pri">
        Explore Business Solutions
        <svg width="14" height="14" viewBox="0 0 14 14" fill="none"><path d="M7 2v10M2 7l5 5 5-5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
      </a>
      <a href="{{ url('/contact-us') }}" class="btn-sec">Request an Assessment</a>
    </div>

    <div class="proof-strip">
      <div class="proof-item">
        <strong>4 business platforms</strong>
        <span>Focused products for inventory, performance, services and healthcare workflows.</span>
      </div>
      <div class="proof-item">
        <strong>Implementation ready</strong>
        <span>Designed for rollout, training, user adoption and continuous support.</span>
      </div>
      <div class="proof-item">
        <strong>Measurable outcomes</strong>
        <span>Less manual work, stronger control and better management visibility.</span>
      </div>
    </div>

    <div class="product-nav">
      <a href="#flexicare" class="pnav-pill"><span class="pdot" style="background:var(--blue-lt)"></span>FlexiCare</a>
      <a href="#inventorypro" class="pnav-pill"><span class="pdot" style="background:var(--blue-lt)"></span>InventoryPro</a>
      <a href="#perfomia" class="pnav-pill"><span class="pdot" style="background:var(--accent-fg)"></span>Perfomia</a>
      <a href="#medtrace" class="pnav-pill"><span class="pdot" style="background:var(--green)"></span>MedTrace</a>
    </div>
  </div>
</section>

<section id="overview">
  <div class="prod-section" id="flexicare">
    <div class="prod-inner rv">
      <div>
        <span class="prod-tag">Service Operations</span>
        <div class="prod-num">01</div>
        <h3>FlexiCare</h3>
        <p class="lead">A service operations platform for organizations that manage providers, bookings, customer requests and field execution.</p>
        <div class="feat-list">
          <div class="feat-item"><div class="feat-item-ico" style="background:var(--c1d);color:var(--c1)"><i class="ti ti-users"></i></div><div class="feat-item-body"><div class="feat-item-title">Provider matching</div><div class="feat-item-desc">Match client demand with available and qualified providers.</div></div></div>
          <div class="feat-item"><div class="feat-item-ico" style="background:var(--c1d);color:var(--c1)"><i class="ti ti-shield-check"></i></div><div class="feat-item-body"><div class="feat-item-title">Verified credentials</div><div class="feat-item-desc">Keep provider screening and approval in one secure system.</div></div></div>
          <div class="feat-item"><div class="feat-item-ico" style="background:var(--c1d);color:var(--c1)"><i class="ti ti-calendar"></i></div><div class="feat-item-body"><div class="feat-item-title">Scheduling and follow-up</div><div class="feat-item-desc">Manage bookings, availability and service follow-up in one workflow.</div></div></div>
        </div>
        <div class="prod-ctas"><a href="{{ url('/solutions/flexicare') }}" class="btn-pri">View FlexiCare</a></div>
      </div>
      <div class="prod-visual">
        <div class="pv-card">
          <div class="pv-topbar"><span class="pv-dot" style="background:var(--c1)"></span><div class="pv-title">FlexiCare availability</div></div>
          <div class="pv-body">
            <div class="pv-row"><div class="pv-row-ico" style="background:var(--c1d)"><i class="ti ti-user-check"></i></div><div><div class="pv-row-title">Verified provider</div><div class="pv-row-sub">Available now · High satisfaction score</div></div><div class="pv-row-tag" style="background:var(--success-soft);color:var(--green);border:1px solid var(--success-border)">Match</div></div>
            <div class="pv-row"><div class="pv-row-ico" style="background:var(--c1d)"><i class="ti ti-calendar-check"></i></div><div><div class="pv-row-title">Client booking</div><div class="pv-row-sub">Confirmed slot · Follow-up required</div></div><div class="pv-row-tag" style="background:var(--success-soft);color:var(--green);border:1px solid var(--success-border)">Ready</div></div>
            <div class="pv-row"><div class="pv-row-ico" style="background:var(--c1d)"><i class="ti ti-clock"></i></div><div><div class="pv-row-title">Service queue</div><div class="pv-row-sub">3 requests pending assignment</div></div><div class="pv-row-tag" style="background:var(--ink-3);color:var(--muted);border:1px solid var(--bdr)">Pending</div></div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="prod-section reverse" id="inventorypro">
    <div class="prod-inner rv">
      <div>
        <span class="prod-tag">Inventory Control</span>
        <div class="prod-num">02</div>
        <h3>InventoryPro</h3>
        <p class="lead">Control stock levels, internal requests, approvals and consumption data across locations from one operational hub.</p>
        <div class="feat-list">
          <div class="feat-item"><div class="feat-item-ico" style="background:var(--c2d);color:var(--c2)"><i class="ti ti-box"></i></div><div class="feat-item-body"><div class="feat-item-title">Multi-location stock</div><div class="feat-item-desc">See inventory levels across all sites in one view.</div></div></div>
          <div class="feat-item"><div class="feat-item-ico" style="background:var(--c2d);color:var(--c2)"><i class="ti ti-bell"></i></div><div class="feat-item-body"><div class="feat-item-title">Auto alerts</div><div class="feat-item-desc">Get notified when supplies need replenishing.</div></div></div>
          <div class="feat-item"><div class="feat-item-ico" style="background:var(--c2d);color:var(--c2)"><i class="ti ti-list-check"></i></div><div class="feat-item-body"><div class="feat-item-title">Approval workflows</div><div class="feat-item-desc">Approve stock requests with visibility and full traceability.</div></div></div>
        </div>
        <div class="prod-ctas"><a href="{{ url('/solutions/inventorypro') }}" class="btn-pri">View InventoryPro</a></div>
      </div>
      <div class="prod-visual">
        <div class="pv-card">
          <div class="pv-topbar"><span class="pv-dot" style="background:var(--c2)"></span><div class="pv-title">Inventory dashboard</div></div>
          <div class="pv-body">
            <div class="pv-row"><div class="pv-row-ico" style="background:var(--c2d)"><i class="ti ti-package"></i></div><div><div class="pv-row-title">Warehouse A</div><div class="pv-row-sub">Low stock on 3 key items</div></div><div class="pv-row-tag" style="background:var(--c2d);color:var(--c2);border:1px solid var(--c2b)">Alert</div></div>
            <div class="pv-row"><div class="pv-row-ico" style="background:var(--c2d)"><i class="ti ti-building-store"></i></div><div><div class="pv-row-title">Retail outlet</div><div class="pv-row-sub">Stock steady · 95% fill rate</div></div><div class="pv-row-tag" style="background:var(--success-soft);color:var(--green);border:1px solid var(--success-border)">Good</div></div>
            <div class="pv-row"><div class="pv-row-ico" style="background:var(--c2d)"><i class="ti ti-arrow-up-right"></i></div><div><div class="pv-row-title">Requests pending</div><div class="pv-row-sub">12 approval actions</div></div><div class="pv-row-tag" style="background:var(--c2d);color:var(--c2);border:1px solid var(--c2b)">Action</div></div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="prod-section" id="perfomia">
    <div class="prod-inner rv">
      <div>
        <span class="prod-tag">Performance Management</span>
        <div class="prod-num">03</div>
        <h3>Perfomia</h3>
        <p class="lead">A management platform for task delegation, attendance, KPI visibility and staff performance follow-up.</p>
        <div class="feat-list">
          <div class="feat-item"><div class="feat-item-ico" style="background:var(--c3d);color:var(--c3)"><i class="ti ti-chart-bar"></i></div><div class="feat-item-body"><div class="feat-item-title">KPI visibility</div><div class="feat-item-desc">Track the metrics that matter for performance and delivery.</div></div></div>
          <div class="feat-item"><div class="feat-item-ico" style="background:var(--c3d);color:var(--c3)"><i class="ti ti-clock"></i></div><div class="feat-item-body"><div class="feat-item-title">Attendance tracking</div><div class="feat-item-desc">Monitor presence and punctuality across teams.</div></div></div>
          <div class="feat-item"><div class="feat-item-ico" style="background:var(--c3d);color:var(--c3)"><i class="ti ti-clipboard-list"></i></div><div class="feat-item-body"><div class="feat-item-title">Performance reviews</div><div class="feat-item-desc">Document progress, goals and improvement actions.</div></div></div>
        </div>
        <div class="prod-ctas"><a href="{{ url('/solutions/perfomia') }}" class="btn-pri">View Perfomia</a></div>
      </div>
      <div class="prod-visual">
        <div class="pv-card">
          <div class="pv-topbar"><span class="pv-dot" style="background:var(--c3)"></span><div class="pv-title">Performance overview</div></div>
          <div class="pv-body">
            <div class="pv-row"><div class="pv-row-ico" style="background:var(--c3d)"><i class="ti ti-users"></i></div><div><div class="pv-row-title">Team productivity</div><div class="pv-row-sub">82% target completion</div></div><div class="pv-row-tag" style="background:var(--success-soft);color:var(--green);border:1px solid var(--success-border)">On track</div></div>
            <div class="pv-row"><div class="pv-row-ico" style="background:var(--c3d)"><i class="ti ti-clock-check"></i></div><div><div class="pv-row-title">Attendance</div><div class="pv-row-sub">98% present today</div></div><div class="pv-row-tag" style="background:var(--success-soft);color:var(--green);border:1px solid var(--success-border)">Stable</div></div>
            <div class="pv-row"><div class="pv-row-ico" style="background:var(--c3d)"><i class="ti ti-arrow-up-right"></i></div><div><div class="pv-row-title">Review cycle</div><div class="pv-row-sub">4 pending evaluations</div></div><div class="pv-row-tag" style="background:var(--c3d);color:var(--c3);border:1px solid var(--c3b)">Action</div></div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="prod-section reverse" id="medtrace">
    <div class="prod-inner rv">
      <div>
        <span class="prod-tag">Healthcare Records</span>
        <div class="prod-num">04</div>
        <h3>MedTrace</h3>
        <p class="lead">A secure medical record platform that gives authorized healthcare staff fast access to critical patient data.</p>
        <div class="feat-list">
          <div class="feat-item"><div class="feat-item-ico" style="background:var(--c5d);color:var(--c5)"><i class="ti ti-qrcode"></i></div><div class="feat-item-body"><div class="feat-item-title">QR access</div><div class="feat-item-desc">Instantly retrieve the patient record at the point of care.</div></div></div>
          <div class="feat-item"><div class="feat-item-ico" style="background:var(--c5d);color:var(--c5)"><i class="ti ti-shield-lock"></i></div><div class="feat-item-body"><div class="feat-item-title">Secure data</div><div class="feat-item-desc">Only authorized staff see the medical history they need.</div></div></div>
          <div class="feat-item"><div class="feat-item-ico" style="background:var(--c5d);color:var(--c5)"><i class="ti ti-ambulance"></i></div><div class="feat-item-body"><div class="feat-item-title">Emergency readiness</div><div class="feat-item-desc">Critical details remain visible when seconds matter.</div></div></div>
        </div>
        <div class="prod-ctas"><a href="{{ url('/solutions/medtrace') }}" class="btn-pri">View MedTrace</a></div>
      </div>
      <div class="prod-visual">
        <div class="pv-card">
          <div class="pv-topbar"><span class="pv-dot" style="background:var(--c5)"></span><div class="pv-title">Patient summary</div></div>
          <div class="pv-body">
            <div class="pv-row"><div class="pv-row-ico" style="background:var(--c5d)"><i class="ti ti-user"></i></div><div><div class="pv-row-title">John P., 42</div><div class="pv-row-sub">Type O+ · Penicillin allergy</div></div><div class="pv-row-tag" style="background:var(--danger);color:#fff;border:1px solid rgba(255,0,0,.16)">Alert</div></div>
            <div class="pv-row"><div class="pv-row-ico" style="background:var(--c5d)"><i class="ti ti-pill"></i></div><div><div class="pv-row-title">Medication</div><div class="pv-row-sub">Metformin 500mg/day</div></div></div>
            <div class="pv-row"><div class="pv-row-ico" style="background:var(--c5d)"><i class="ti ti-clipboard"></i></div><div><div class="pv-row-title">Last visit</div><div class="pv-row-sub">12 Jan 2025</div></div></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="compare">
  <div class="cmp-inner">
    <div class="cmp-header rv">
      <span class="tag">Decision Guide</span>
      <h2>Compare the operational capabilities</h2>
      <p class="lead" style="max-width:560px;margin:.75rem auto 0">Choose the platform that best matches your workflow, visibility and control priorities.</p>
    </div>
    <div class="cmp-table rv d1">
      <div class="cmp-head-row">
        <div style="font-size:.75rem;color:var(--muted)">Features</div>
        <div class="cmp-prod-head"><div class="cmp-prod-ico"><i class="ti ti-users"></i></div><div class="cmp-prod-name">FlexiCare</div></div>
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
    <span class="tag">Free Operational Assessment</span>
    <h2>Need help choosing the right platform?</h2>
    <p class="lead">We review your current workflow and recommend the DigiTexia product or custom implementation that creates the strongest business impact.</p>
    <div class="cta-btns">
      <a href="{{ url('/contact-us') }}" class="btn-pri">Request an Assessment <svg width="14" height="14" viewBox="0 0 14 14" fill="none"><path d="M2 7h10M7 2l5 5-5 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
      <a href="{{ url('/the-problem') }}" class="btn-sec">Review The Problem &rarr;</a>
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



