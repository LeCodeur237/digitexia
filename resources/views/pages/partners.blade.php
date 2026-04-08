@extends('index')

@section('page_title', 'Our Partners — DigiTexia Technology & Innovation')

@push('styles')
<link href="https://fonts.googleapis.com/css2?family=Clash+Display:wght@400;500;600;700&family=Plus+Jakarta+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/partners-digitexia.css') }}">
@endpush

@section('contain')
<!-- â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•
     HERO
â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â• -->
<section id="hero">
  <div class="hero-bg"></div><div class="hero-grid"></div>
  <div class="hero-inner">

    <div class="hero-left rv">
      <div class="hero-breadcrumb">
        <a href="{{ url('/') }}">Home</a><span>›</span>
        <span class="curr">Partners</span>
      </div>
      <span class="tag-gold">Partner with us</span>
      <h1>Build with DigiTexia.<br>Grow through partnership.</h1>
      <p class="lead">We are opening our partner network to organizations that want to co-build, refer, distribute, or launch with us.</p>
      <div class="hero-btns">
        <a href="#current-partners" class="btn-pri">
          Explore Partnership Types
          <svg width="14" height="14" viewBox="0 0 14 14" fill="none"><path d="M7 2v10M2 7l5 5 5-5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </a>
        <a href="#become" class="btn-sec">Become a Partner</a>
      </div>
    </div>

    <!-- Visual -->
    <div class="partner-visual rv d2">
      <div class="pv-hub">
          <div class="pv-hub-title">Open partnership network</div>
        <div class="pv-center" style="position:relative;height:80px;display:flex;align-items:center;justify-content:center">
          <div class="pv-ring"></div>
          <div class="pv-digi-node">DX</div>
        </div>
        <div class="pv-connector">
          <div class="pv-dot-line"></div><div class="pv-dot-line"></div>
          <div class="pv-dot-line"></div><div class="pv-dot-line"></div>
          <div class="pv-dot-line"></div>
        </div>
        <div class="pv-partners-row">
          <div class="pv-partner-chip">
            <div class="pv-partner-ico">TX</div>
          <div class="pv-partner-name">Technology</div>
          </div>
          <div class="pv-partner-chip">
            <div class="pv-partner-ico">RF</div>
          <div class="pv-partner-name">Referral</div>
          </div>
          <div class="pv-partner-chip">
            <div class="pv-partner-ico">ST</div>
          <div class="pv-partner-name">Strategic</div>
          </div>
          <div class="pv-partner-chip">
            <div class="pv-partner-ico">RS</div>
          <div class="pv-partner-name">Reseller</div>
          </div>
          <div class="pv-partner-chip">
            <div class="pv-partner-ico">DL</div>
          <div class="pv-partner-name">Delivery</div>
          </div>
        </div>
        <div style="margin-top:1.25rem;padding:.85rem;background:rgba(245,158,11,.06);border:1px solid var(--gold-bdr);border-radius:10px;font-size:.75rem;color:#FCD34D;text-align:center">
          We are actively looking for our first strategic partners
        </div>
      </div>
    </div>

  </div>
</section>

<!-- â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•
     CURRENT PARTNERS
â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â• -->
<section id="current-partners">
  <div class="cp-inner">
    <div class="section-header rv">
      <span class="tag">Partnership opportunities</span>
      <h2>We are building a partner ecosystem.</h2>
      <p class="lead">We are not showcasing public partners yet. This page is for organizations that want to distribute, refer, integrate, or co-create with us.</p>
    </div>

    <div class="partners-grid">

      <!-- Referral & reseller network -->
      <div class="partner-card wide rv d1">
        <div class="pc-header">
          <div class="pc-logo-wrap" style="background:rgba(22,199,132,.08);border-color:var(--green-bdr)">
            <span style="font-size:.65rem;font-weight:900;color:var(--green);text-align:center;line-height:1.1;letter-spacing:-.02em">R&R</span>
          </div>
          <div class="pc-header-text">
            <div class="pc-type" style="background:var(--green-dim);border-color:var(--green-bdr);color:var(--green)">Partner profile</div>
            <div class="pc-name">Referral / Reseller</div>
            <div class="pc-sector">For consultants, agencies, and local connectors</div>
          </div>
        </div>
        <div class="pc-body">
          <div class="pc-desc">Bring us opportunities and earn from qualified introductions, referrals, or co-selling.</div>
          <div class="pc-collab" style="background:var(--green-dim);border-color:var(--green-bdr)">
            <div class="pc-collab-label" style="color:var(--green)">Collaboration</div>
            <div style="font-size:.82rem;color:#D1FAE5">Revenue share, shared credibility, and support from our team.</div>
          </div>
          <div class="pc-tags">
            <span class="pc-tag">Referral</span>
            <span class="pc-tag">Reseller</span>
            <span class="pc-tag">Co-selling</span>
            <span class="pc-tag">Revenue share</span>
          </div>
        </div>
      </div>

      <!-- Go-to-market allies -->
      <div class="partner-card rv d2">
        <div class="pc-header">
          <div class="pc-logo-wrap" style="background:rgba(255,255,255,.04);border-color:rgba(255,255,255,.1)">
            <span style="font-family:'Clash Display',sans-serif;font-size:1.3rem;font-weight:700;color:var(--white)">GTM</span>
          </div>
          <div class="pc-type" style="background:var(--blue-dim);border-color:var(--blue-bdr);color:#93C5FD">Go-to-market partner</div>
          <div class="pc-name">Go-to-Market</div>
          <div class="pc-sector">For launch teams, media, and channel builders</div>
        </div>
        <div class="pc-body">
          <div class="pc-desc">Co-launch products, campaigns, or services with a partner that ships quickly.</div>
          <div class="pc-collab" style="background:var(--blue-dim);border-color:var(--blue-bdr)">
            <div class="pc-collab-label" style="color:#93C5FD">Collaboration</div>
            <div style="font-size:.82rem;color:#BFDBFE">Shared launch plans, product support, and stronger market reach.</div>
          </div>
          <div class="pc-tags">
            <span class="pc-tag">Launch partner</span>
            <span class="pc-tag">Brand partner</span>
            <span class="pc-tag">Market access</span>
          </div>
        </div>
      </div>

      <!-- Social impact partners -->
      <div class="partner-card rv d1">
        <div class="pc-header">
          <div class="pc-logo-wrap" style="background:rgba(236,72,153,.08);border-color:rgba(236,72,153,.25)">SI</div>
          <div class="pc-type" style="background:rgba(236,72,153,.1);border-color:rgba(236,72,153,.25);color:#F9A8D4">Social impact partner</div>
          <div class="pc-name">Social Impact</div>
          <div class="pc-sector">NGOs, foundations, and social programs</div>
        </div>
        <div class="pc-body">
          <div class="pc-desc">Use digital products to extend the reach and efficiency of your mission.</div>
          <div class="pc-collab" style="background:rgba(236,72,153,.08);border-color:rgba(236,72,153,.2)">
            <div class="pc-collab-label" style="color:#F9A8D4">Collaboration</div>
            <div style="font-size:.82rem;color:#FCE7F3">Aligned tools, lower admin work, and better impact reporting.</div>
          </div>
          <div class="pc-tags">
            <span class="pc-tag">Social Impact</span>
            <span class="pc-tag">Mission support</span>
            <span class="pc-tag">Digital access</span>
          </div>
        </div>
      </div>

      <!-- Implementation partners -->
      <div class="partner-card rv d2">
        <div class="pc-header">
          <div class="pc-logo-wrap" style="background:rgba(99,102,241,.1);border-color:rgba(99,102,241,.28)">
            <span style="font-family:'Clash Display',sans-serif;font-size:.65rem;font-weight:900;color:#A5B4FC;text-align:center;line-height:1.15">IMP</span>
          </div>
          <div class="pc-type" style="background:rgba(99,102,241,.12);border-color:rgba(99,102,241,.28);color:#A5B4FC">Implementation partner</div>
          <div class="pc-name">Implementation</div>
          <div class="pc-sector">For teams that deploy, integrate, or onboard clients</div>
        </div>
        <div class="pc-body">
          <div class="pc-desc">Help clients connect DigiTexia products with their existing tools and workflows.</div>
          <div class="pc-collab" style="background:rgba(99,102,241,.1);border-color:rgba(99,102,241,.25)">
            <div class="pc-collab-label" style="color:#A5B4FC">Collaboration</div>
            <div style="font-size:.82rem;color:#E0E7FF">Technical support, product onboarding, and shared delivery wins.</div>
          </div>
          <div class="pc-tags">
            <span class="pc-tag">Integration</span>
            <span class="pc-tag">Implementation</span>
            <span class="pc-tag">Delivery partner</span>
          </div>
        </div>
      </div>

      <!-- Consulting partner -->
      <div class="partner-card rv d3">
        <div class="pc-header">
          <div class="pc-logo-wrap" style="background:rgba(245,158,11,.08);border-color:var(--gold-bdr)">CA</div>
          <div class="pc-type" style="background:var(--gold-dim);border-color:var(--gold-bdr);color:#FCD34D">Consulting partner</div>
          <div class="pc-name">Consulting & Agencies</div>
          <div class="pc-sector">Consulting and advisory firms</div>
        </div>
        <div class="pc-body">
          <div class="pc-desc">Recommend the right product to the right client, and earn from the relationship.</div>
          <div class="pc-collab" style="background:var(--gold-dim);border-color:var(--gold-bdr)">
            <div class="pc-collab-label" style="color:#FCD34D">Collaboration</div>
            <div style="font-size:.82rem;color:#FEF3C7">Shared value, trusted delivery, and recurring opportunities.</div>
          </div>
          <div class="pc-tags">
            <span class="pc-tag">Consulting</span>
            <span class="pc-tag">Distribution</span>
            <span class="pc-tag">Market access</span>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•
     PARTNERSHIP MODEL
â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â• -->
<section id="model">
  <div class="model-inner">
    <div class="model-layout">

      <div class="rv">
        <span class="tag">Partnership model</span>
        <h2>How partnership works at DigiTexia.</h2>
        <p class="lead">Pick the path that fits your network, audience, and business model.</p>
        <div class="model-types">
          <div class="model-type">
            <div class="model-type-ico"><i class="ti ti-building"></i></div>
            <div>
              <div class="model-type-title">Technology partnership</div>
              <div class="model-type-desc">Co-build solutions and support delivery for your clients.</div>
            </div>
          </div>
          <div class="model-type">
            <div class="model-type-ico"><i class="ti ti-handshake"></i></div>
            <div>
              <div class="model-type-title">Strategic alliance</div>
              <div class="model-type-desc">Combine your reach with our product and execution capacity.</div>
            </div>
          </div>
          <div class="model-type">
            <div class="model-type-ico"><i class="ti ti-heart-handshake"></i></div>
            <div>
              <div class="model-type-title">Social impact</div>
              <div class="model-type-desc">Bring digital tools to missions that need scale.</div>
            </div>
          </div>
          <div class="model-type">
            <div class="model-type-ico"><i class="ti ti-replace"></i></div>
            <div>
              <div class="model-type-title">Referral & reseller</div>
              <div class="model-type-desc">Refer opportunities and earn as we grow together.</div>
            </div>
          </div>
        </div>
      </div>

      <div class="rv d2">
        <div class="benefits-card">
          <div class="benefits-title">What partners gain</div>
          <div class="benefit-row">
            <div class="benefit-ico"><i class="ti ti-flask"></i></div>
            <div>
              <div class="benefit-title">R&D-driven technology</div>
              <div class="benefit-desc">Products designed for African realities from the start.</div>
            </div>
          </div>
          <div class="benefit-row">
            <div class="benefit-ico"><i class="ti ti-shield-check"></i></div>
            <div>
              <div class="benefit-title">Long-term support</div>
              <div class="benefit-desc">We stay after launch and keep improving the offer.</div>
            </div>
          </div>
          <div class="benefit-row">
            <div class="benefit-ico"><i class="ti ti-chart-line"></i></div>
            <div>
              <div class="benefit-title">Measurable impact</div>
              <div class="benefit-desc">Better productivity, lower cost, clearer data.</div>
            </div>
          </div>
          <div class="benefit-row">
            <div class="benefit-ico"><i class="ti ti-world"></i></div>
            <div>
              <div class="benefit-title">Market access reach</div>
              <div class="benefit-desc">Tap into a growing African business network.</div>
            </div>
          </div>
          <div class="benefit-row">
            <div class="benefit-ico"><i class="ti ti-zap"></i></div>
            <div>
              <div class="benefit-title">Fast delivery</div>
              <div class="benefit-desc">See value early instead of waiting months.</div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•
     BECOME A PARTNER
â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â• -->
<section id="become">
  <div class="become-inner">
    <div class="become-layout">

      <div class="rv">
        <span class="tag-green">Become a partner</span>
        <h2>Join the DigiTexia network.</h2>
        <p class="lead" style="margin-bottom:.5rem">If you bring value, we want to talk.</p>
        <div class="steps-list">
          <div class="step-item">
            <div class="step-num s1">01</div>
            <div class="step-body">
              <div class="step-title">Send your interest</div>
              <div class="step-desc">Tell us who you are and what you want to build.</div>
            </div>
          </div>
          <div class="step-item">
            <div class="step-num s2">02</div>
            <div class="step-body">
              <div class="step-title">Discovery call</div>
              <div class="step-desc">We review your goals and the best fit.</div>
            </div>
          </div>
          <div class="step-item">
            <div class="step-num s3">03</div>
            <div class="step-body">
              <div class="step-title">Proposal</div>
              <div class="step-desc">We share a simple, tailored proposal.</div>
            </div>
          </div>
          <div class="step-item">
            <div class="step-num s4">04</div>
            <div class="step-body">
              <div class="step-title">Launch and grow</div>
              <div class="step-desc">We start and keep improving together.</div>
            </div>
          </div>
        </div>
      </div>

      <div class="rv d2">
        <div class="contact-card">
          <h3>Partner with us</h3>
          <p class="sub">Tell us what you are building. We reply within 48 hours.</p>
          <div class="form-row">
            <div class="form-field">
              <label class="form-label">Your Name</label>
              <input type="text" class="form-input" placeholder="Jean-Pierre Kamga">
            </div>
            <div class="form-field">
              <label class="form-label">Organization</label>
              <input type="text" class="form-input" placeholder="Your Company Name">
            </div>
          </div>
          <div class="form-field">
            <label class="form-label">Professional Email</label>
            <input type="email" class="form-input" placeholder="you@yourcompany.com">
          </div>
          <div class="form-row">
            <div class="form-field">
              <label class="form-label">Country</label>
              <input type="text" class="form-input" placeholder="Cameroon">
            </div>
            <div class="form-field">
              <label class="form-label">Partnership Type</label>
              <select class="form-select">
                <option value="" disabled selected style="color:#5E6880">Choose a model</option>
                <option>Technology Partnership</option>
                <option>Go-to-Market / Launch Partner</option>
                <option>Social Impact Partnership</option>
                <option>Referral / Reseller</option>
                <option>Other</option>
              </select>
            </div>
          </div>
          <div class="form-field">
            <label class="form-label">Tell us about your project</label>
            <textarea class="form-textarea" placeholder="Describe your organization, your needs, and what kind of collaboration you have in mind..."></textarea>
          </div>
          <a href="mailto:contactdigitexia@gmail.com" class="btn-pri form-submit">
            Send Partnership Request →
          </a>
          <div class="form-note">Or email us directly: contactdigitexia@gmail.com</div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•
     CTA
â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â• -->
<section id="partner-cta">
  <div class="cta-inner rv">
    <span class="tag-gold">Let's build together</span>
    <h2>Ready to build a real partnership?</h2>
    <p class="lead">If you want to partner, refer, or co-build, let's talk.</p>
    <div class="cta-btns">
      <a href="#become" class="btn-pri">
        Become a Partner
        <svg width="14" height="14" viewBox="0 0 14 14" fill="none"><path d="M2 7h10M7 2l5 5-5 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
      </a>
      <a href="{{ url('/solutions') }}" class="btn-sec">Explore Our Solutions →</a>
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

