@extends('index')

@section('page_title', 'Partners | DigiTexia')

@push('styles')
<link href="https://fonts.googleapis.com/css2?family=Clash+Display:wght@400;500;600;700&family=Plus+Jakarta+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/partners-digitexia.css') }}">
@endpush

@section('contain')
<section id="hero">
  <div class="hero-bg"></div><div class="hero-grid"></div>
  <div class="hero-inner">

    <div class="hero-left rv">
      <div class="hero-breadcrumb">
        <a href="{{ url('/') }}">Home</a><span>&rsaquo;</span>
        <span class="curr">Partners</span>
      </div>
      <span class="tag-gold">Clients & Partners</span>
      <h1>Organizations that build, launch and grow with DigiTexia.</h1>
      <p class="lead">This page highlights the clients we support, the partners we work with, and the kinds of organizations that can create value with DigiTexia.</p>
      <div class="hero-btns">
        <a href="#current-partners" class="btn-pri">
          View Ecosystem
          <svg width="14" height="14" viewBox="0 0 14 14" fill="none" aria-hidden="true"><path d="M7 2v10M2 7l5 5 5-5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </a>
        <a href="#become" class="btn-sec">Work With Us</a>
      </div>
    </div>

    <!-- Visual -->
    <div class="partner-visual rv d2">
      <div class="pv-hub">
          <div class="pv-hub-title">DigiTexia ecosystem</div>
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
            <div class="pv-partner-ico">CL</div>
          <div class="pv-partner-name">Clients</div>
          </div>
          <div class="pv-partner-chip">
            <div class="pv-partner-ico">TX</div>
          <div class="pv-partner-name">Technology</div>
          </div>
          <div class="pv-partner-chip">
            <div class="pv-partner-ico">ST</div>
          <div class="pv-partner-name">Strategic</div>
          </div>
          <div class="pv-partner-chip">
            <div class="pv-partner-ico">MK</div>
          <div class="pv-partner-name">Market</div>
          </div>
          <div class="pv-partner-chip">
            <div class="pv-partner-ico">DL</div>
          <div class="pv-partner-name">Delivery</div>
          </div>
        </div>
        <div style="margin-top:1.25rem;padding:.85rem;background:rgba(245,158,11,.06);border:1px solid var(--gold-bdr);border-radius:10px;font-size:.75rem;color:#FCD34D;text-align:center">
          Clients and partners create stronger digital outcomes together
        </div>
      </div>
    </div>

  </div>
</section>

<section id="current-partners">
  <div class="cp-inner">
    <div class="section-header rv">
      <span class="tag">Our ecosystem</span>
      <h2>Clients we support and partners we can grow with.</h2>
      <p class="lead">DigiTexia works with organizations that need clearer digital presence, better workflows, stronger operations or a trusted technology partner.</p>
    </div>

    <div class="logo-wall rv d1">
      <a href="https://www.cremin-cam.org" target="_blank" rel="noopener noreferrer" class="logo-tile">
        <div class="logo-mark">
          <img src="{{ asset('partners/partner-2.png') }}" alt="CREMIN-CAM logo">
        </div>
        <strong>CREMIN-CAM</strong>
        <em>Client</em>
      </a>

      <a href="https://web.facebook.com/profile.php?id=61575062085703&amp;locale=fr_FR" target="_blank" rel="noopener noreferrer" class="logo-tile">
        <div class="logo-mark">
          <img src="{{ asset('partners/apec-logo-white--BtJLi1d.svg') }}" alt="APEC logo">
        </div>
        <strong>APEC</strong>
        <em>Client</em>
      </a>

      <a href="https://www.lightgroup.co.com/" target="_blank" rel="noopener noreferrer" class="logo-tile">
        <div class="logo-mark">
          <img src="{{ asset('partners/partner-1.png') }}" alt="Light Group logo">
        </div>
        <strong>Light Group</strong>
        <em>Client</em>
      </a>

      <div class="logo-tile">
        <div class="logo-placeholder muted">
          <span>TP</span>
          <small>Logo placeholder</small>
        </div>
        <strong>Technology Partners</strong>
        <em>Partner profile</em>
      </div>

      <div class="logo-tile">
        <div class="logo-mark">
          <img src="{{ asset('partners/partner-4.png') }}" alt="Consulting partner logo">
        </div>
        <strong>Consulting Allies</strong>
        <em>Partner profile</em>
      </div>
    </div>
  </div>
</section>

<section id="model">
  <div class="model-inner">
    <div class="model-layout">

      <div class="rv">
        <span class="tag">Why work with us</span>
        <h2>Why clients and partners choose DigiTexia.</h2>
        <p class="lead">We combine business understanding, practical software delivery and long-term support to help organizations move from idea to usable digital systems.</p>
        <div class="model-types">
          <div class="model-type">
            <div class="model-type-ico"><i class="ti ti-building"></i></div>
            <div>
              <div class="model-type-title">For clients</div>
              <div class="model-type-desc">A team that understands operations and builds tools around real business needs.</div>
            </div>
          </div>
          <div class="model-type">
            <div class="model-type-ico"><i class="ti ti-handshake"></i></div>
            <div>
              <div class="model-type-title">For strategic partners</div>
              <div class="model-type-desc">Combine your reach, sector knowledge or distribution with our execution capacity.</div>
            </div>
          </div>
          <div class="model-type">
            <div class="model-type-ico"><i class="ti ti-heart-handshake"></i></div>
            <div>
              <div class="model-type-title">For social impact organizations</div>
              <div class="model-type-desc">Use digital tools to extend reach, improve reporting and reduce administrative friction.</div>
            </div>
          </div>
          <div class="model-type">
            <div class="model-type-ico"><i class="ti ti-replace"></i></div>
            <div>
              <div class="model-type-title">For referral and reseller partners</div>
              <div class="model-type-desc">Introduce qualified needs and grow with a technology team that can deliver.</div>
            </div>
          </div>
        </div>
      </div>

      <div class="rv d2">
        <div class="benefits-card">
          <div class="benefits-title">What our ecosystem gains</div>
          <div class="benefit-row">
            <div class="benefit-ico"><i class="ti ti-flask"></i></div>
            <div>
              <div class="benefit-title">Business-ready technology</div>
              <div class="benefit-desc">Products and platforms designed for real operational conditions.</div>
            </div>
          </div>
          <div class="benefit-row">
            <div class="benefit-ico"><i class="ti ti-shield-check"></i></div>
            <div>
              <div class="benefit-title">Long-term support</div>
              <div class="benefit-desc">We stay after launch to support adoption and improvement.</div>
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
              <div class="benefit-title">Shared credibility</div>
              <div class="benefit-desc">Clients and partners gain a stronger digital delivery story.</div>
            </div>
          </div>
          <div class="benefit-row">
            <div class="benefit-ico"><i class="ti ti-zap"></i></div>
            <div>
              <div class="benefit-title">Fast delivery</div>
              <div class="benefit-desc">See practical value early instead of waiting months.</div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<section id="become">
  <div class="become-inner">
    <div class="become-layout">

      <div class="rv">
        <span class="tag-green">Work with DigiTexia</span>
        <h2>Become a client, partner or strategic ally.</h2>
        <p class="lead" style="margin-bottom:.5rem">Whether you need a solution for your organization or want to collaborate with us, the next step is a clear business conversation.</p>
        <div class="steps-list">
          <div class="step-item">
            <div class="step-num s1">01</div>
            <div class="step-body">
              <div class="step-title">Share the context</div>
              <div class="step-desc">Tell us about your organization, challenge, audience or partnership idea.</div>
            </div>
          </div>
          <div class="step-item">
            <div class="step-num s2">02</div>
            <div class="step-body">
              <div class="step-title">Discovery call</div>
              <div class="step-desc">We review goals, constraints, expected value and the best collaboration path.</div>
            </div>
          </div>
          <div class="step-item">
            <div class="step-num s3">03</div>
            <div class="step-body">
              <div class="step-title">Clear proposal</div>
              <div class="step-desc">We define the solution, responsibilities, timeline, delivery support and next steps.</div>
            </div>
          </div>
          <div class="step-item">
            <div class="step-num s4">04</div>
            <div class="step-body">
              <div class="step-title">Launch and improve</div>
              <div class="step-desc">We start with clear priorities and improve through real usage and feedback.</div>
            </div>
          </div>
        </div>
      </div>

      <div class="rv d2">
        <div class="contact-card">
          <h3>Work with us</h3>
          <p class="sub">Send us a short message with your organization, country, need and whether you are contacting us as a client, partner or ally.</p>

          <div class="partner-contact-list">
            <div class="partner-contact-row">
              <span class="partner-contact-ico"><i class="ti ti-mail"></i></span>
              <div>
                <strong>Email</strong>
                <span>contactdigitexia@gmail.com</span>
              </div>
            </div>
            <div class="partner-contact-row">
              <span class="partner-contact-ico"><i class="ti ti-clock"></i></span>
              <div>
                <strong>Response time</strong>
                <span>We review partnership requests within 48 hours.</span>
              </div>
            </div>
            <div class="partner-contact-row">
              <span class="partner-contact-ico"><i class="ti ti-list-check"></i></span>
              <div>
                <strong>What to include</strong>
                <span>Your organization, market, need, audience and expected collaboration.</span>
              </div>
            </div>
          </div>

          <a href="mailto:contactdigitexia@gmail.com?subject=Work%20With%20DigiTexia" class="btn-pri form-submit">
            Contact DigiTexia &rarr;
          </a>
          <a href="{{ url('/contact-us') }}" class="btn-sec form-submit secondary-action">Use Contact Page</a>
        </div>
      </div>

    </div>
  </div>
</section>

<section id="partner-cta">
  <div class="cta-inner rv">
    <span class="tag-gold">Let's build together</span>
    <h2>Ready to become a client or partner?</h2>
    <p class="lead">If you need a digital solution, want to collaborate, or want to join our ecosystem, let's talk.</p>
    <div class="cta-btns">
      <a href="#become" class="btn-pri">
        Work With DigiTexia
        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" aria-hidden="true"><path d="M2 7h10M7 2l5 5-5 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
      </a>
      <a href="{{ url('/solutions') }}" class="btn-sec">Explore Our Solutions &rarr;</a>
    </div>
  </div>
</section>

<!--  FOOTER  -->
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
