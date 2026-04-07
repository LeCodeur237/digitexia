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
        <a href="index.html">Home</a><span>â€º</span>
        <a href="#">Company</a><span>â€º</span>
        <span class="curr">Partners</span>
      </div>
      <span class="tag-gold">Our Partners</span>
      <h1>Built together.<br>Growing <em>across Africa.</em></h1>
      <p class="lead">DigiTexia believes that sustainable digital transformation is a collective effort. Our partners are not just clients â€” they are co-builders of the digital ecosystem we are creating together across the continent.</p>
      <div class="hero-btns">
        <a href="#current-partners" class="btn-pri">
          Meet Our Partners
          <svg width="14" height="14" viewBox="0 0 14 14" fill="none"><path d="M7 2v10M2 7l5 5 5-5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </a>
        <a href="#become" class="btn-sec">Become a Partner</a>
      </div>
    </div>

    <!-- Visual -->
    <div class="partner-visual rv d2">
      <div class="pv-hub">
        <div class="pv-hub-title">DigiTexia Partnership Ecosystem</div>
        <div class="pv-center" style="position:relative;height:80px;display:flex;align-items:center;justify-content:center">
          <div class="pv-ring"></div>
          <div class="pv-digi-node">ðŸŒ</div>
        </div>
        <div class="pv-connector">
          <div class="pv-dot-line"></div><div class="pv-dot-line"></div>
          <div class="pv-dot-line"></div><div class="pv-dot-line"></div>
          <div class="pv-dot-line"></div>
        </div>
        <div class="pv-partners-row">
          <div class="pv-partner-chip">
            <div class="pv-partner-ico">ðŸŒ¸</div>
            <div class="pv-partner-name">Elles Plus Africa</div>
          </div>
          <div class="pv-partner-chip">
            <div class="pv-partner-ico">ðŸ”µ</div>
            <div class="pv-partner-name">Flexi Care</div>
          </div>
          <div class="pv-partner-chip">
            <div class="pv-partner-ico">ðŸ”¶</div>
            <div class="pv-partner-name">Orin Consulting</div>
          </div>
          <div class="pv-partner-chip">
            <div class="pv-partner-ico">ðŸŸ¢</div>
            <div class="pv-partner-name">CREMIN-CAM</div>
          </div>
          <div class="pv-partner-chip">
            <div class="pv-partner-ico">â¬œ</div>
            <div class="pv-partner-name">Snow White</div>
          </div>
        </div>
        <div style="margin-top:1.25rem;padding:.85rem;background:rgba(245,158,11,.06);border:1px solid var(--gold-bdr);border-radius:10px;font-size:.75rem;color:#FCD34D;text-align:center">
          âœ¦ 5 trusted partners â€” and growing across Africa
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
      <span class="tag">Ils nous font confiance</span>
      <h2>Organizations that trust DigiTexia</h2>
      <p class="lead">Five organizations across different sectors have chosen DigiTexia as their technology partner â€” each with a unique collaboration that delivers real impact.</p>
    </div>

    <div class="partners-grid">

      <!-- CREMIN-CAM â€” featured wide -->
      <div class="partner-card wide rv d1">
        <div class="pc-header">
          <div class="pc-logo-wrap" style="background:rgba(22,199,132,.08);border-color:var(--green-bdr)">
            <span style="font-size:.65rem;font-weight:900;color:var(--green);text-align:center;line-height:1.1;letter-spacing:-.02em">CRE<br>MIN</span>
          </div>
          <div class="pc-header-text">
            <div class="pc-type" style="background:var(--green-dim);border-color:var(--green-bdr);color:var(--green)">ðŸ¢ Enterprise Client</div>
            <div class="pc-name">CREMIN-CAM</div>
            <div class="pc-sector">Enterprise Operations Â· Cameroon</div>
          </div>
        </div>
        <div class="pc-body">
          <div class="pc-desc">CREMIN-CAM is one of DigiTexia's key enterprise partners, deploying InventoryPro for centralized stock management across their operations. The collaboration demonstrates DigiTexia's capacity to deliver enterprise-grade solutions adapted to the real-world workflows of African organizations.</div>
          <div class="pc-collab" style="background:var(--green-dim);border-color:var(--green-bdr)">
            <div class="pc-collab-label" style="color:var(--green)">Collaboration</div>
            <div style="font-size:.82rem;color:#D1FAE5">InventoryPro deployment â€” centralized stock tracking, movement history, and multi-user role management across departments.</div>
          </div>
          <div class="pc-tags">
            <span class="pc-tag">InventoryPro</span>
            <span class="pc-tag">Stock Management</span>
            <span class="pc-tag">Enterprise</span>
            <span class="pc-tag">Cameroon</span>
          </div>
        </div>
      </div>

      <!-- Snow White Group -->
      <div class="partner-card rv d2">
        <div class="pc-header">
          <div class="pc-logo-wrap" style="background:rgba(255,255,255,.04);border-color:rgba(255,255,255,.1)">
            <span style="font-family:'Clash Display',sans-serif;font-size:1.3rem;font-weight:700;color:var(--white)">SW</span>
          </div>
          <div class="pc-type" style="background:var(--blue-dim);border-color:var(--blue-bdr);color:#93C5FD">ðŸ—ï¸ Strategic Partner</div>
          <div class="pc-name">Snow White Group</div>
          <div class="pc-sector">Business Group Â· Cameroon</div>
        </div>
        <div class="pc-body">
          <div class="pc-desc">Snow White Group is a long-standing strategic partner of DigiTexia â€” supporting the company's development, operations, and visibility since its founding. The Snow White brand is featured on all DigiTexia-produced communications as a mark of this trusted alliance.</div>
          <div class="pc-collab" style="background:var(--blue-dim);border-color:var(--blue-bdr)">
            <div class="pc-collab-label" style="color:#93C5FD">Collaboration</div>
            <div style="font-size:.82rem;color:#BFDBFE">Strategic support, communications, and brand partnership â€” a foundational alliance underpinning DigiTexia's growth.</div>
          </div>
          <div class="pc-tags">
            <span class="pc-tag">Strategic Alliance</span>
            <span class="pc-tag">Brand Partner</span>
            <span class="pc-tag">Communications</span>
          </div>
        </div>
      </div>

      <!-- Fondation Elles Plus Africa -->
      <div class="partner-card rv d1">
        <div class="pc-header">
          <div class="pc-logo-wrap" style="background:rgba(236,72,153,.08);border-color:rgba(236,72,153,.25)">ðŸŒ¸</div>
          <div class="pc-type" style="background:rgba(236,72,153,.1);border-color:rgba(236,72,153,.25);color:#F9A8D4">ðŸŒ± Social Impact Partner</div>
          <div class="pc-name">Fondation Elles Plus Africa</div>
          <div class="pc-sector">NGO â€” Women's Empowerment Â· Africa</div>
        </div>
        <div class="pc-body">
          <div class="pc-desc">A foundation dedicated to creating equal opportunities for women and girls across Africa. This partnership resonates deeply with DigiTexia CEO Anne DZOU's personal conviction that technology must be inclusive and that equal access to opportunity is non-negotiable.</div>
          <div class="pc-collab" style="background:rgba(236,72,153,.08);border-color:rgba(236,72,153,.2)">
            <div class="pc-collab-label" style="color:#F9A8D4">Collaboration</div>
            <div style="font-size:.82rem;color:#FCE7F3">Digital tools and platform support to amplify the foundation's mission and reach across the continent.</div>
          </div>
          <div class="pc-tags">
            <span class="pc-tag">Social Impact</span>
            <span class="pc-tag">Women Empowerment</span>
            <span class="pc-tag">Digital Access</span>
          </div>
        </div>
      </div>

      <!-- Flexi Care -->
      <div class="partner-card rv d2">
        <div class="pc-header">
          <div class="pc-logo-wrap" style="background:rgba(99,102,241,.1);border-color:rgba(99,102,241,.28)">
            <span style="font-family:'Clash Display',sans-serif;font-size:.65rem;font-weight:900;color:#A5B4FC;text-align:center;line-height:1.15">FLEXI<br>CARE</span>
          </div>
          <div class="pc-type" style="background:rgba(99,102,241,.12);border-color:rgba(99,102,241,.28);color:#A5B4FC">ðŸ“± Product Partner</div>
          <div class="pc-name">Flexi Care</div>
          <div class="pc-sector">On-Demand Services Platform Â· Cameroon</div>
        </div>
        <div class="pc-body">
          <div class="pc-desc">Flexi Care is both a DigiTexia product and an operational partner â€” a smart platform connecting individuals with vetted domestic help and childcare providers. This partnership represents DigiTexia's ability to take a product from concept to full commercial deployment.</div>
          <div class="pc-collab" style="background:rgba(99,102,241,.1);border-color:rgba(99,102,241,.25)">
            <div class="pc-collab-label" style="color:#A5B4FC">Collaboration</div>
            <div style="font-size:.82rem;color:#E0E7FF">Full product development, deployment, and ongoing evolution of the FlexiCare platform â€” from design to launch.</div>
          </div>
          <div class="pc-tags">
            <span class="pc-tag">FlexiCare Platform</span>
            <span class="pc-tag">Product Development</span>
            <span class="pc-tag">Care Services</span>
          </div>
        </div>
      </div>

      <!-- Orin Consulting -->
      <div class="partner-card rv d3">
        <div class="pc-header">
          <div class="pc-logo-wrap" style="background:rgba(245,158,11,.08);border-color:var(--gold-bdr)">ðŸ”¶</div>
          <div class="pc-type" style="background:var(--gold-dim);border-color:var(--gold-bdr);color:#FCD34D">ðŸ’¼ Consulting Partner</div>
          <div class="pc-name">Orin Consulting Group Ltd</div>
          <div class="pc-sector">Strategic Consulting Â· Africa</div>
        </div>
        <div class="pc-body">
          <div class="pc-desc">Orin Consulting Group Ltd is a strategic advisory firm specializing in strategy, lobbying, and influence across African markets. This partnership combines DigiTexia's technological capability with Orin's market intelligence â€” creating a powerful axis for organizational transformation.</div>
          <div class="pc-collab" style="background:var(--gold-dim);border-color:var(--gold-bdr)">
            <div class="pc-collab-label" style="color:#FCD34D">Collaboration</div>
            <div style="font-size:.82rem;color:#FEF3C7">Technology solutions backed by strategic consulting expertise â€” a joint approach to comprehensive organizational transformation.</div>
          </div>
          <div class="pc-tags">
            <span class="pc-tag">Strategic Consulting</span>
            <span class="pc-tag">Market Intelligence</span>
            <span class="pc-tag">Pan-African</span>
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
        <span class="tag">Partnership Model</span>
        <h2>How we collaborate with our partners.</h2>
        <p class="lead">DigiTexia offers several types of partnership depending on your organization's needs, expertise, and goals â€” each designed for mutual, long-term value creation.</p>
        <div class="model-types">
          <div class="model-type">
            <div class="model-type-ico">ðŸ—ï¸</div>
            <div>
              <div class="model-type-title">Technology & Product Partnership</div>
              <div class="model-type-desc">We develop, deploy, and maintain digital solutions directly for your organization â€” acting as your full technology department or extension of your team.</div>
            </div>
          </div>
          <div class="model-type">
            <div class="model-type-ico">ðŸ¤</div>
            <div>
              <div class="model-type-title">Strategic Alliance</div>
              <div class="model-type-desc">A deep organizational partnership combining DigiTexia's tech capabilities with your market expertise â€” creating joint go-to-market strategies for African markets.</div>
            </div>
          </div>
          <div class="model-type">
            <div class="model-type-ico">ðŸŒ±</div>
            <div>
              <div class="model-type-title">Social Impact Partnership</div>
              <div class="model-type-desc">For NGOs, foundations, and institutions â€” we provide digital tools and platforms at adapted terms to amplify your social mission through technology.</div>
            </div>
          </div>
          <div class="model-type">
            <div class="model-type-ico">ðŸ”</div>
            <div>
              <div class="model-type-title">Referral & Reseller Partnership</div>
              <div class="model-type-desc">Recommend DigiTexia solutions to your network or resell our products within your market â€” with revenue sharing and dedicated support from our team.</div>
            </div>
          </div>
        </div>
      </div>

      <div class="rv d2">
        <div class="benefits-card">
          <div class="benefits-title">What you gain as a DigiTexia partner</div>
          <div class="benefit-row">
            <div class="benefit-ico">ðŸ”¬</div>
            <div>
              <div class="benefit-title">Access to R&D-driven technology</div>
              <div class="benefit-desc">Solutions built from scratch to fit African realities â€” not adapted from imported models.</div>
            </div>
          </div>
          <div class="benefit-row">
            <div class="benefit-ico">ðŸ›¡ï¸</div>
            <div>
              <div class="benefit-title">Long-term technical support</div>
              <div class="benefit-desc">DigiTexia stays with you after deployment â€” maintaining, improving, and evolving your systems over time.</div>
            </div>
          </div>
          <div class="benefit-row">
            <div class="benefit-ico">ðŸ“ˆ</div>
            <div>
              <div class="benefit-title">Measurable operational impact</div>
              <div class="benefit-desc">Every collaboration is results-oriented â€” reduced costs, improved productivity, and better data visibility.</div>
            </div>
          </div>
          <div class="benefit-row">
            <div class="benefit-ico">ðŸŒ</div>
            <div>
              <div class="benefit-title">Pan-African network & visibility</div>
              <div class="benefit-desc">Join DigiTexia's growing ecosystem of partners and gain exposure to organizations across the continent.</div>
            </div>
          </div>
          <div class="benefit-row">
            <div class="benefit-ico">âš¡</div>
            <div>
              <div class="benefit-title">Agile, fast delivery</div>
              <div class="benefit-desc">Our methodology ensures you see value quickly â€” not after months of slow development cycles.</div>
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
        <span class="tag-green">Become a Partner</span>
        <h2>Join the DigiTexia ecosystem.</h2>
        <p class="lead" style="margin-bottom:.5rem">If you believe in the power of digital technology to transform African organizations â€” and want to be part of building that future â€” we want to hear from you.</p>
        <div class="steps-list">
          <div class="step-item">
            <div class="step-num s1">01</div>
            <div class="step-body">
              <div class="step-title">Send us your interest</div>
              <div class="step-desc">Fill out the form or email us directly at contactdigitexia@@gmail.com â€” describe your organization and what type of partnership you're interested in.</div>
            </div>
          </div>
          <div class="step-item">
            <div class="step-num s2">02</div>
            <div class="step-body">
              <div class="step-title">Discovery conversation</div>
              <div class="step-desc">Our team will reach out to schedule a call â€” we'll discuss your needs, context, and explore how DigiTexia can create value for your organization.</div>
            </div>
          </div>
          <div class="step-item">
            <div class="step-num s3">03</div>
            <div class="step-body">
              <div class="step-title">Partnership proposal</div>
              <div class="step-desc">We'll present a tailored partnership proposal aligned with your goals â€” covering scope, terms, and expected outcomes.</div>
            </div>
          </div>
          <div class="step-item">
            <div class="step-num s4">04</div>
            <div class="step-body">
              <div class="step-title">Launch & grow together</div>
              <div class="step-desc">Once aligned, we get to work â€” and we stay committed to the partnership's success for the long term.</div>
            </div>
          </div>
        </div>
      </div>

      <div class="rv d2">
        <div class="contact-card">
          <h3>Partner with us</h3>
          <p class="sub">Tell us about your organization and how you'd like to work with DigiTexia. We respond within 48 hours.</p>
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
            <input type="email" class="form-input" placeholder="you@@yourcompany.com">
          </div>
          <div class="form-row">
            <div class="form-field">
              <label class="form-label">Country</label>
              <input type="text" class="form-input" placeholder="Cameroon">
            </div>
            <div class="form-field">
              <label class="form-label">Partnership Type</label>
              <select class="form-select">
                <option value="" disabled selected style="color:#5E6880">Select a type</option>
                <option>Technology Partnership</option>
                <option>Strategic Alliance</option>
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
          <a href="mailto:contactdigitexia@@gmail.com" class="btn-pri form-submit">
            Send Partnership Request â†’
          </a>
          <div class="form-note">Or email us directly: contactdigitexia@@gmail.com</div>
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
    <span class="tag-gold">Let's Build Together</span>
    <h2>Ready to join Africa's digital transformation?</h2>
    <p class="lead">DigiTexia is building the digital infrastructure of tomorrow's Africa â€” and we're looking for partners who share that vision. Let's make it happen together.</p>
    <div class="cta-btns">
      <a href="#become" class="btn-pri">
        Become a Partner
        <svg width="14" height="14" viewBox="0 0 14 14" fill="none"><path d="M2 7h10M7 2l5 5-5 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
      </a>
      <a href="solutions.html" class="btn-sec">Explore Our Solutions â†’</a>
    </div>
  </div>
</section>

<!-- â”€â”€â”€ FOOTER â”€â”€â”€ -->
@endsection
