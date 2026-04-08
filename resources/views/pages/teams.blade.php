@extends('index')

@section('page_title', 'Team Members — DigiTexia Technology & Innovation')

@push('styles')
<link href="https://fonts.googleapis.com/css2?family=Clash+Display:wght@400;500;600;700&family=Plus+Jakarta+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/team-digitexia.css') }}">
@endpush

@section('contain')
<!--
     HERO
 -->
<section id="hero">
  <div class="hero-bg"></div>
  <div class="hero-grid-lines"></div>
  <div class="hero-inner rv">
      <div class="hero-breadcrumb">
      <a href="{{ url('/') }}">Home</a><span>›</span>
      <span class="curr">Team</span>
    </div>
    <span class="tag">Our Team</span>
    <h1>People who<br><em>build and ship.</em></h1>
    <p class="lead">Small team. Clear focus. Real products for real needs.</p>

    <div class="hero-stats rv d2">
      <div class="hero-stat">
        <div class="hero-stat-num" style="color:#93C5FD">2</div>
        <div class="hero-stat-lbl">Founders</div>
      </div>
      <div class="hero-stat">
        <div class="hero-stat-num" style="color:var(--green)">5+</div>
        <div class="hero-stat-lbl">Clients</div>
      </div>
      <div class="hero-stat">
        <div class="hero-stat-num" style="color:#FCD34D">5</div>
        <div class="hero-stat-lbl">Products</div>
      </div>
      <div class="hero-stat">
        <div class="hero-stat-num" style="color:#F9A8D4">AFR</div>
        <div class="hero-stat-lbl">Pan-African</div>
      </div>
    </div>
  </div>
</section>

<!--
     FOUNDERS
 -->
<section id="leadership">
  <div class="lead-inner">
    <div class="section-header rv">
      <span class="tag">Leadership</span>
      <h2>The founders behind DigiTexia</h2>
      <p class="lead">One mission: build useful products that matter.</p>
    </div>

    <div class="founders-grid">

      <!-- CEO -->
      <div class="founder-card rv d1">
        <div class="founder-card-top">
          <div class="founder-avatar" style="background:rgba(18,70,240,.12)"><i class="ti ti-user-circle"></i></div>
          <div class="founder-name">Anne DZOU</div>
          <div class="founder-role ceo">CEO</div>
        </div>
        <div class="founder-card-body">
          <p class="founder-bio">Anne drives the vision, partnerships, and long-term direction of DigiTexia.</p>
          <div class="founder-quote blue-q">We believe in a world where all women and girls have access to the same opportunities, the same rights, and the same respect.
          </div>
          <div class="founder-tags">
            <span class="ftag">Vision</span>
            <span class="ftag">Strategy</span>
            <span class="ftag">Growth</span>
            <span class="ftag">Clients</span>
          </div>
        </div>
      </div>

      <!-- CTO -->
      <div class="founder-card rv d2">
        <div class="founder-card-top">
          <div class="founder-avatar" style="background:rgba(22,199,132,.1)"><i class="ti ti-code"></i></div>
          <div class="founder-name">Lucien DZOU</div>
          <div class="founder-role cto">CTO</div>
        </div>
        <div class="founder-card-body">
          <p class="founder-bio">Lucien leads product, architecture, and technical execution.</p>
          <div class="founder-quote green-q">We don't settle for copying existing models. We do R&D to create software that understands our realities, our challenges, and our ambitions.
          </div>
          <div class="founder-tags">
            <span class="ftag">R&D</span>
            <span class="ftag">Product</span>
            <span class="ftag">Systems</span>
            <span class="ftag">Execution</span>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!--
     CULTURE & MANIFESTO
 -->
<section id="culture">
  <div class="culture-inner">
    <div class="culture-layout">

      <div class="rv">
      <span class="tag">Our Culture</span>
      <h2>How we work.</h2>
      <p class="lead" style="margin-bottom:2rem">Purposeful, collaborative, and focused on output.</p>
        <div class="culture-pills">
          <div class="culture-pill">
            <div class="culture-pill-ico"><i class="ti ti-bulb"></i></div>
            <div>
              <div class="culture-pill-title">Innovate</div>
              <div class="culture-pill-desc">Ideas are welcome, tested, and improved fast.</div>
            </div>
          </div>
          <div class="culture-pill">
            <div class="culture-pill-ico"><i class="ti ti-star"></i></div>
            <div>
              <div class="culture-pill-title">Ship well</div>
              <div class="culture-pill-desc">Useful, reliable, secure.</div>
            </div>
          </div>
          <div class="culture-pill">
            <div class="culture-pill-ico"><i class="ti ti-handshake"></i></div>
            <div>
              <div class="culture-pill-title">Collaborate</div>
              <div class="culture-pill-desc">We solve problems with clients, not for them.</div>
            </div>
          </div>
          <div class="culture-pill">
            <div class="culture-pill-ico"><i class="ti ti-sparkles"></i></div>
            <div>
              <div class="culture-pill-title">Measure impact</div>
              <div class="culture-pill-desc">If it doesn't move the needle, it doesn't matter.</div>
            </div>
          </div>
        </div>
      </div>

      <div class="rv d2">
        <div class="manifesto">
          <div class="manifesto-label">The DigiTexia Manifesto</div>
          <div class="manifesto-lines">
            <div class="manifesto-line">We deliver value, not just code.</div>
            <div class="manifesto-line">We build for African realities.</div>
            <div class="manifesto-line">We design for specific problems.</div>
            <div class="manifesto-line">We stay after launch.</div>
            <div class="manifesto-line">Digital change is a people project.</div>
            <div class="manifesto-line">Africa needs a leap forward.</div>
          </div>
          <div class="manifesto-footer">
            <div class="manifesto-dot"></div>
            DigiTexia Corporate - Technology &amp; Innovation · Yaoundé, Cameroon
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!--
     CTA
 -->
<section id="team-cta">
  <div class="cta-inner rv">
    <span class="tag">Work With Us</span>
    <h2>Let’s build with DigiTexia.</h2>
    <p class="lead">Partner with us, join the team, or book a consultation.</p>
    <div class="cta-btns">
      <a href="{{ url('/contact-us') }}" class="btn-pri">Request a Consultation <svg width="14" height="14" viewBox="0 0 14 14" fill="none"><path d="M2 7h10M7 2l5 5-5 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
      <a href="{{ url('/solutions') }}" class="btn-sec">See Our Solutions →</a>
    </div>
  </div>
</section>

<!-- â”€â”€â”€ FOOTER â”€â”€â”€ -->
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
</script>
@endpush
@endsection
