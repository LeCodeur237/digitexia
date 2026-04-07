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
        <a href="index.html">Home</a>
        <span>&rsaquo;</span>
        <span class="curr">The Problem</span>
      </div>
      <span class="tag-red">The Problem We Solve</span>
      <h1>Why companies lose time and revenue with <em>fragmented systems.</em></h1>
      <p class="lead">Many organizations still manage internal operations using disconnected tools like Excel, email threads, or paper documents. As businesses grow, these limitations become a critical bottleneck for productivity, accuracy, and growth.</p>
      <div class="ph-btns">
        <a href="index.html#solutions" class="btn-pri">
          See Our Solutions
          <svg width="14" height="14" viewBox="0 0 14 14" fill="none"><path d="M2 7h10M7 2l5 5-5 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </a>
        <a href="index.html#cta-final" class="btn-sec">Request a Demo</a>
      </div>
    </div>

    <!-- "Before DigiTexia" Chaos Visual -->
    <div class="ph-chaos rv d1">
      <span class="ph-chaos-title"><i class="ti ti-alert-triangle"></i> Before DigiTexia</span>
      <div class="chaos-tools">
        <div class="chaos-tool">
          <div class="chaos-tool-ico"><i class="ti ti-table"></i></div>
          <div class="chaos-tool-body">
            <div class="chaos-tool-name">Excel Spreadsheets</div>
            <div class="chaos-tool-issue"><i class="ti ti-alert-triangle"></i>Multiple conflicting versions in circulation</div>
          </div>
        </div>
        <div class="chaos-tool">
          <div class="chaos-tool-ico"><i class="ti ti-mail"></i></div>
          <div class="chaos-tool-body">
            <div class="chaos-tool-name">Email Threads</div>
            <div class="chaos-tool-issue"><i class="ti ti-alert-triangle"></i>Critical information lost in long chains</div>
          </div>
        </div>
        <div class="chaos-tool">
          <div class="chaos-tool-ico"><i class="ti ti-file-text"></i></div>
          <div class="chaos-tool-body">
            <div class="chaos-tool-name">Paper Documents</div>
            <div class="chaos-tool-issue"><i class="ti ti-alert-triangle"></i>No traceability, easily lost or damaged</div>
          </div>
        </div>
        <div class="chaos-tool">
          <div class="chaos-tool-ico"><i class="ti ti-message-circle"></i></div>
          <div class="chaos-tool-body">
            <div class="chaos-tool-name">Messaging Apps</div>
            <div class="chaos-tool-issue"><i class="ti ti-alert-triangle"></i>Decisions made without documentation</div>
          </div>
        </div>
      </div>
      <div class="chaos-arrow">
        <span class="chaos-arr-label">Result</span>
      </div>
      <div class="chaos-result">
        <div class="chaos-result-ico"><i class="ti ti-trending-down"></i></div>
        <div class="chaos-result-text">Revenue loss, operational errors & stunted growth</div>
      </div>
    </div>

  </div>
</section>

<!-- Stats Banner -->
<section id="stats-banner">
  <div class="stats-inner rv">
    <div class="stat-cell">
      <div class="stat-num red">73%</div>
      <div class="stat-label">of employees spend time on tasks that could be automated</div>
      <div class="stat-src">McKinsey Global Institute</div>
    </div>
    <div class="stat-cell">
      <div class="stat-num orange">$1.8T</div>
      <div class="stat-label">lost annually to poor productivity from manual processes</div>
      <div class="stat-src">IDC Research</div>
    </div>
    <div class="stat-cell">
      <div class="stat-num blue">88%</div>
      <div class="stat-label">of spreadsheets contain at least one critical error</div>
      <div class="stat-src">University of Hawaii Study</div>
    </div>
    <div class="stat-cell">
      <div class="stat-num green">3.5x</div>
      <div class="stat-label">more productive - companies that adopt digital workflows</div>
      <div class="stat-src">Deloitte Digital Report</div>
    </div>
  </div>
</section>

<!-- Pain Points -->
<section id="pain-points">
  <div class="wrap">

    <div class="pain-intro">
      <div class="rv">
        <span class="tag-red">5 Core Pain Points</span>
        <h2>The real cost of staying manual.</h2>
        <p class="lead">Each of these challenges compounds the others - creating a cycle that silently drains your organization's time, money, and competitive edge.</p>
      </div>
      <div class="rv d1">
        <div style="background:var(--ink-2);border:1px solid var(--bdr);border-radius:16px;padding:2rem;">
          <div style="font-size:.7rem;font-weight:600;letter-spacing:.1em;text-transform:uppercase;color:var(--muted);margin-bottom:1.5rem;">Impact Severity</div>
          <div style="display:flex;flex-direction:column;gap:1rem;">
            <div>
              <div style="display:flex;justify-content:space-between;font-size:.78rem;color:var(--muted-lt);margin-bottom:.4rem"><span>Time Loss</span><span style="color:#F87171;font-weight:600">Critical</span></div>
              <div style="height:6px;background:rgba(255,255,255,.06);border-radius:100px;overflow:hidden"><div style="width:92%;height:100%;background:linear-gradient(90deg,#F43F5E,#F87171);border-radius:100px"></div></div>
            </div>
            <div>
              <div style="display:flex;justify-content:space-between;font-size:.78rem;color:var(--muted-lt);margin-bottom:.4rem"><span>Data Errors</span><span style="color:#F87171;font-weight:600">Critical</span></div>
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
        <div class="pain-card-desc">Employees spend hours each week re-entering data, copy-pasting between tools, and manually compiling reports - time that could be invested in strategic, value-generating activities.</div>
        <div class="pain-card-impact">Teams lose up to 40% of their productive hours on manual, repetitive work</div>
      </div>
      <div class="pain-card rv d2">
        <div class="pain-card-num">02</div>
        <div class="pain-card-ico"><i class="ti ti-eye"></i></div>
        <div class="pain-card-title">Lack of Real-Time Visibility into Operations</div>
        <div class="pain-card-desc">Without centralized data, managers operate on outdated snapshots. By the time a report is compiled, the situation has already changed - making proactive decision-making nearly impossible.</div>
        <div class="pain-card-impact">Decisions made on stale data increase operational risk by up to 30%</div>
      </div>
      <div class="pain-card rv d3">
        <div class="pain-card-num">03</div>
        <div class="pain-card-ico"><i class="ti ti-alert-triangle"></i></div>
        <div class="pain-card-title">Frequent Human Errors & Data Silos</div>
        <div class="pain-card-desc">Manual data entry and isolated systems create islands of information. Errors propagate silently across departments, creating discrepancies that are expensive and time-consuming to resolve.</div>
        <div class="pain-card-impact">Data entry errors cost businesses an average of $12.9M annually per company</div>
      </div>
      <div class="pain-card rv d1">
        <div class="pain-card-num">04</div>
        <div class="pain-card-ico"><i class="ti ti-message-circle"></i></div>
        <div class="pain-card-title">Communication Friction Between Teams</div>
        <div class="pain-card-desc">Without a shared platform, teams operate in silos - using email, chat apps, and verbal communication to coordinate. Context gets lost, approvals stall, and projects fall behind schedule.</div>
        <div class="pain-card-impact">Poor internal communication costs organizations $420,000 per year on average</div>
      </div>
      <div class="pain-card rv d2">
        <div class="pain-card-num">05</div>
        <div class="pain-card-ico"><i class="ti ti-search"></i></div>
        <div class="pain-card-title">Poor Information Traceability</div>
        <div class="pain-card-desc">When data lives in spreadsheets, inboxes, and filing cabinets, auditing becomes a nightmare. Who approved what? When was this changed? These questions become impossible to answer with confidence.</div>
        <div class="pain-card-impact">55% of compliance issues are directly traced to poor documentation practices</div>
      </div>
      <!-- Bridge card -->
      <div class="pain-card rv d3" style="background:linear-gradient(135deg,rgba(18,70,240,.1),rgba(18,70,240,.03));border-color:var(--blue-bdr);display:flex;flex-direction:column;justify-content:center;align-items:center;text-align:center;gap:1.25rem">
        <div style="font-size:2.5rem"><i class="ti ti-link"></i></div>
        <div class="pain-card-title" style="color:var(--white)">DigiTexia bridges all these gaps</div>
        <div class="pain-card-desc">By centralizing and automating your core operations - turning scattered tools into one intelligent, connected platform.</div>
      <a href="index.html#solutions" class="btn-pri" style="margin-top:.5rem;font-size:.82rem;padding:.7rem 1.5rem">
          Explore Solutions &rarr;
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
        <h2>Every month without digitalization has a price.</h2>
        <p class="lead">Organizations that delay their digital transformation don't stand still - they fall behind. The costs accumulate silently until they become a crisis.</p>
      </div>
      <div class="cost-visual rv d1">
        <div class="cost-visual-title"><i class="ti ti-zap"></i> Productivity Loss by Source</div>
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
        <div class="cost-note">% of companies reporting significant time loss from each source</div>
      </div>
    </div>

    <div class="cost-list rv">
      <div class="cost-item">
        <div class="cost-item-ico"><i class="ti ti-cash"></i></div>
        <div>
          <div class="cost-item-title">Direct Financial Losses</div>
          <div class="cost-item-desc">Errors in invoicing, inventory miscounts, and payroll mistakes directly drain revenue. Manual processes have an average 4% error rate - even a small organization can lose thousands each month.</div>
        </div>
      </div>
      <div class="cost-item">
        <div class="cost-item-ico"><i class="ti ti-rocket"></i></div>
        <div>
          <div class="cost-item-title">Loss of Competitive Advantage</div>
          <div class="cost-item-desc">While your competitors are deploying automated workflows and real-time dashboards, manual processes slow your response time to market changes, customer needs, and operational challenges.</div>
        </div>
      </div>
      <div class="cost-item">
        <div class="cost-item-ico"><i class="ti ti-mood-sad"></i></div>
        <div>
          <div class="cost-item-title">Employee Frustration & Turnover</div>
          <div class="cost-item-desc">Talented employees become disengaged when asked to do repetitive, error-prone manual work. High turnover driven by poor tooling costs businesses 50-200% of an employee's annual salary to replace.</div>
        </div>
      </div>
      <div class="cost-item">
        <div class="cost-item-ico"><i class="ti ti-clipboard-list"></i></div>
        <div>
          <div class="cost-item-title">Compliance & Audit Risk</div>
          <div class="cost-item-desc">Regulatory compliance requires accurate, traceable records. Organizations relying on manual systems face significant exposure to fines, failed audits, and reputational damage.</div>
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
      <p class="lead">A clear picture of what changes when your organization adopts an intelligent digital platform.</p>
    </div>

    <div class="ba-grid">
      <!-- Before -->
      <div class="rv">
        <div class="ba-col-title before">
          <span>&times;</span> Without DigiTexia
        </div>
        <div class="ba-items">
          <div class="ba-item before-item"><span class="ba-item-ico"><i class="ti ti-x"></i></span>Scattered data across Excel, email, paper</div>
          <div class="ba-item before-item"><span class="ba-item-ico"><i class="ti ti-x"></i></span>Hours spent compiling weekly reports manually</div>
          <div class="ba-item before-item"><span class="ba-item-ico"><i class="ti ti-x"></i></span>No visibility into team performance in real time</div>
          <div class="ba-item before-item"><span class="ba-item-ico"><i class="ti ti-x"></i></span>Approval processes lost in email chains</div>
          <div class="ba-item before-item"><span class="ba-item-ico"><i class="ti ti-x"></i></span>Inventory counts done manually, prone to errors</div>
          <div class="ba-item before-item"><span class="ba-item-ico"><i class="ti ti-x"></i></span>Communication bottlenecks slowing every decision</div>
          <div class="ba-item before-item"><span class="ba-item-ico"><i class="ti ti-x"></i></span>Audit trails impossible to reconstruct</div>
          <div class="ba-item before-item"><span class="ba-item-ico"><i class="ti ti-x"></i></span>Growing team means growing operational chaos</div>
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
          <div class="ba-item after-item"><span class="ba-item-ico"><i class="ti ti-check"></i></span>All data centralized in one intelligent platform</div>
          <div class="ba-item after-item"><span class="ba-item-ico"><i class="ti ti-check"></i></span>Live dashboards updated automatically in real time</div>
          <div class="ba-item after-item"><span class="ba-item-ico"><i class="ti ti-check"></i></span>Full visibility into team tasks, attendance & KPIs</div>
          <div class="ba-item after-item"><span class="ba-item-ico"><i class="ti ti-check"></i></span>Digital workflows route approvals instantly</div>
          <div class="ba-item after-item"><span class="ba-item-ico"><i class="ti ti-check"></i></span>Inventory tracked automatically with alerts</div>
          <div class="ba-item after-item"><span class="ba-item-ico"><i class="ti ti-check"></i></span>Seamless cross-department communication hub</div>
          <div class="ba-item after-item"><span class="ba-item-ico"><i class="ti ti-check"></i></span>Complete, searchable audit trail on every action</div>
          <div class="ba-item after-item"><span class="ba-item-ico"><i class="ti ti-check"></i></span>Scales effortlessly as your organization grows</div>
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
        <h2>These challenges affect every sector.</h2>
        <p class="lead" style="margin-top:.75rem">Fragmented processes are not exclusive to any one industry. From healthcare to retail, every organization managing internal operations manually faces the same bottlenecks.</p>
      </div>
      <div class="rv d1">
        <p class="body-text">DigiTexia has developed targeted solutions for the most pressing digitalization needs across African organizations. Our platforms are built to address the specific operational realities of each sector - not generic software retrofitted to local needs.</p>
        <a href="index.html#solutions" class="btn-sec" style="margin-top:1.5rem">View All Solutions &rarr;</a>
      </div>
    </div>

    <div class="sector-grid rv">
      <div class="sector-card">
        <span class="sector-ico"><i class="ti ti-building-skyscraper"></i></span>
        <div class="sector-name">Enterprises & Corporates</div>
        <div class="sector-issue">Multi-department coordination, HR management, and inventory control done manually</div>
      </div>
      <div class="sector-card">
        <span class="sector-ico"><i class="ti ti-hospital"></i></span>
        <div class="sector-name">Healthcare Providers</div>
        <div class="sector-issue">Patient records on paper, no instant access to medical history at point of care</div>
      </div>
      <div class="sector-card">
        <span class="sector-ico"><i class="ti ti-crane"></i></span>
        <div class="sector-name">Construction & Projects</div>
        <div class="sector-issue">Site reporting, material tracking, and workforce attendance done via WhatsApp</div>
      </div>
      <div class="sector-card">
        <span class="sector-ico"><i class="ti ti-package"></i></span>
        <div class="sector-name">Retail & Distribution</div>
        <div class="sector-issue">Stock management across locations done in disconnected spreadsheets</div>
      </div>
      <div class="sector-card">
        <span class="sector-ico"><i class="ti ti-landmark"></i></span>
        <div class="sector-name">Public Institutions</div>
        <div class="sector-issue">Internal mail and document tracking lost in bureaucratic paper chains</div>
      </div>
      <div class="sector-card">
        <span class="sector-ico"><i class="ti ti-briefcase"></i></span>
        <div class="sector-name">Service Providers</div>
        <div class="sector-issue">Matching service professionals to clients with no digital booking or tracking system</div>
      </div>
    </div>
  </div>
</section>

<!-- Bridge -->
<section id="bridge">
  <div class="bridge-inner rv">
    <span class="tag">The DigiTexia Solution</span>
    <h2>We bridge every gap - intelligently.</h2>
    <p class="lead">DigiTexia centralizes and automates your core operations through targeted, scalable digital platforms - built specifically for the African business reality.</p>

    <div class="bridge-steps">
      <div class="bridge-step">
        <div class="bridge-step-num">01</div>
        <div class="bridge-step-title">We Audit Your Processes</div>
        <div class="bridge-step-desc">Our team maps your existing workflows, identifies every bottleneck, and quantifies the cost of your current inefficiencies.</div>
      </div>
      <div class="bridge-step">
        <div class="bridge-step-num">02</div>
        <div class="bridge-step-title">We Design Your Platform</div>
        <div class="bridge-step-desc">We architect a custom digital solution - or adapt one of our proven products - precisely mapped to your organizational needs.</div>
      </div>
      <div class="bridge-step">
        <div class="bridge-step-num">03</div>
        <div class="bridge-step-title">We Deploy & Support You</div>
        <div class="bridge-step-desc">From go-live to long-term maintenance, we stay with you - training your teams and evolving the platform as your business grows.</div>
      </div>
    </div>

    <div class="bridge-ctas">
      <a href="index.html#solutions" class="btn-pri">
        Explore Our Solutions
        <svg width="14" height="14" viewBox="0 0 14 14" fill="none"><path d="M2 7h10M7 2l5 5-5 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
      </a>
      <a href="index.html#cta-final" class="btn-sec">Contact Our Experts</a>
    </div>
  </div>
</section>


<script>
// Scroll reveal
const obs = new IntersectionObserver(entries => {
  entries.forEach(e => { if(e.isIntersecting){ e.target.classList.add('vis'); obs.unobserve(e.target); } });
}, { threshold: 0.1 });
document.querySelectorAll('.rv').forEach(el => obs.observe(el));

// Nav scroll
const navEl = document.getElementById('mainNav');
window.addEventListener('scroll', () => navEl.classList.toggle('sc', window.scrollY > 50));

// Dropdown mobile
const ddToggle = document.querySelector('.nav-dropdown > a');
const ddMenu   = document.querySelector('.dropdown-menu');
ddToggle.addEventListener('click', function(e) {
  if (window.innerWidth <= 900) { e.preventDefault(); ddMenu.classList.toggle('is-open'); }
});
document.addEventListener('click', function(e) {
  if (!e.target.closest('.nav-dropdown')) ddMenu.classList.remove('is-open');
});
</script>
@endsection
