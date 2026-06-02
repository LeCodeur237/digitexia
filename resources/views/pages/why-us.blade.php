@extends('index')

@section('page_title', 'Why Us | DigiTexia')

@push('styles')
<link href="https://fonts.googleapis.com/css2?family=Clash+Display:wght@400;500;600;700&family=Plus+Jakarta+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/why-us-digitexia.css') }}">
@endpush

@section('contain')
<!-- PAGE HERO -->
<section id="page-hero">
  <div class="ph-bg"></div><div class="ph-grid"></div>
  <div class="ph-inner">
    <div class="ph-left rv">
      <div class="ph-breadcrumb"><a href="{{ url('/') }}">Home</a><span>&rsaquo;</span><span class="curr">Why Us</span></div>
      <span class="tag">Why Choose DigiTexia</span>
      <h1>A technology partner focused on <em>business outcomes.</em></h1>
      <p class="lead">DigiTexia helps organizations replace manual friction with reliable digital systems, clearer operations and faster decisions.</p>
      <div class="ph-btns">
        <a href="#reasons" class="btn-pri">See Why <svg width="14" height="14" viewBox="0 0 14 14" fill="none" aria-hidden="true"><path d="M7 2v10M2 7l5 5 5-5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
        <a href="{{ url('/contact-us') }}" class="btn-sec">Request an Assessment</a>
      </div>
    </div>

    <!-- Identity Card -->
    <div class="identity-card rv d2">
      <div class="id-header">
        <div class="id-logo-wrap"><i class="ti ti-world"></i></div>
        <div>
          <div class="id-name">DigiTexia Corporate</div>
          <div class="id-sub">Software engineering &amp; digital operations</div>
        </div>
      </div>
      <div class="id-rows">
        <div class="id-row">
          <div class="id-row-label">Type</div>
          <div class="id-row-val">Business software &amp; digital consulting</div>
        </div>
        <div class="id-divider"></div>
        <div class="id-row">
          <div class="id-row-label">Mission</div>
          <div class="id-row-val">Help teams digitize operations faster</div>
        </div>
        <div class="id-divider"></div>
        <div class="id-row">
          <div class="id-row-label">Vision</div>
          <div class="id-row-val">Build practical platforms for scalable growth</div>
        </div>
        <div class="id-divider"></div>
        <div class="id-row">
          <div class="id-row-label">HQ</div>
          <div class="id-row-val">Yaounde, Cameroon</div>
        </div>
        <div class="id-divider"></div>
        <div class="id-row">
          <div class="id-row-label">Contact</div>
          <div class="id-row-val">contactdigitexia@gmail.com<br>(+237) 650 945 280</div>
        </div>
      </div>
      <div class="id-badges">
        <span class="id-badge blue">Innovation</span>
        <span class="id-badge blue">Excellence</span>
        <span class="id-badge green">Impact</span>
        <span class="id-badge green">Collaboration</span>
        <span class="id-badge blue">Adaptability</span>
      </div>
    </div>
  </div>
</section>

<!-- 4 REASONS TO CHOOSE DIGITEXIA -->
<section id="reasons">
  <div class="reasons-inner">
    <div class="reasons-head">
      <div class="rv">
        <span class="tag">Why DigiTexia</span>
        <h2>Clear value. Fast execution. Long-term support.</h2>
        <p class="lead">We build for outcomes, not noise. Every project must help your team save time, improve control or serve customers better.</p>
      </div>
      <div class="rv d1" style="display:flex;flex-direction:column;gap:1rem">
        <div style="background:var(--ink-2);border:1px solid var(--bdr);border-radius:12px;padding:1.25rem 1.5rem;display:flex;align-items:center;gap:1rem">
          <div style="font-size:1.4rem"><i class="ti ti-target"></i></div>
          <div style="font-size:.845rem;color:var(--muted-lt);line-height:1.55">We ship useful products, not features for show.</div>
        </div>
        <div style="background:var(--ink-2);border:1px solid var(--bdr);border-radius:12px;padding:1.25rem 1.5rem;display:flex;align-items:center;gap:1rem">
          <div style="font-size:1.4rem"><i class="ti ti-zap"></i></div>
          <div style="font-size:.845rem;color:var(--muted-lt);line-height:1.55">Value should start early, not after months of unclear work.</div>
        </div>
        <div style="background:var(--ink-2);border:1px solid var(--bdr);border-radius:12px;padding:1.25rem 1.5rem;display:flex;align-items:center;gap:1rem">
          <div style="font-size:1.4rem"><i class="ti ti-world"></i></div>
          <div style="font-size:.845rem;color:var(--muted-lt);line-height:1.55">We build for African realities, business constraints and growth.</div>
        </div>
      </div>
    </div>

    <div class="reasons-grid rv">
      <div class="reason-card" style="--accent:var(--blue)">
        <div class="reason-num" style="background:var(--blue-dim);border-color:var(--blue-bdr);color:var(--accent-fg)">01</div>
        <div class="reason-ico"><i class="ti ti-microscope"></i></div>
        <div class="reason-title">Strong technical execution</div>
        <div class="reason-desc">We design reliable software around your workflow, users and operational constraints.</div>
        <div class="reason-proof" style="background:var(--blue-dim);border-color:var(--blue-bdr);color:var(--accent-fg)">
          <span class="reason-proof-ico"><i class="ti ti-check"></i></span>Scalable, secure, and built to evolve.
        </div>
      </div>

      <div class="reason-card" style="--accent:var(--green)">
        <div class="reason-num" style="background:var(--green-dim);border-color:var(--green-bdr);color:var(--green)">02</div>
        <div class="reason-ico"><i class="ti ti-world"></i></div>
        <div class="reason-title">Built for African markets</div>
        <div class="reason-desc">We design for local realities: connectivity, adoption, cost control, field teams and growth.</div>
        <div class="reason-proof" style="background:var(--green-dim);border-color:var(--green-bdr);color:var(--green)">
          <span class="reason-proof-ico"><i class="ti ti-check"></i></span>Made for the market, ready to scale.
        </div>
      </div>

      <div class="reason-card" style="--accent:var(--accent-fg)">
        <div class="reason-num" style="background:var(--accent-soft);border-color:var(--accent-border);color:var(--accent-fg)">03</div>
        <div class="reason-ico"><i class="ti ti-chart-bar"></i></div>
        <div class="reason-title">Focused on measurable results</div>
        <div class="reason-desc">We focus on faster workflows, fewer errors, clearer reporting and measurable operational gains.</div>
        <div class="reason-proof" style="background:var(--accent-soft);border-color:var(--accent-border);color:var(--accent-fg)">
          <span class="reason-proof-ico"><i class="ti ti-check"></i></span>Fewer errors. Better speed. Lower cost.
        </div>
      </div>

      <div class="reason-card" style="--accent:var(--danger)">
        <div class="reason-num" style="background:var(--danger-soft);border-color:var(--danger-border);color:var(--danger-fg)">04</div>
        <div class="reason-ico"><i class="ti ti-handshake"></i></div>
        <div class="reason-title">A partner, not just a vendor</div>
        <div class="reason-desc">We stay after launch with support, improvements and practical guidance for adoption.</div>
        <div class="reason-proof" style="background:var(--danger-soft);border-color:var(--danger-border);color:var(--danger-fg)">
          <span class="reason-proof-ico"><i class="ti ti-check"></i></span>Support that keeps working after go-live.
        </div>
      </div>
    </div>
  </div>
</section>

<!-- VISION / MISSION / VALUES -->
<section id="vmv">
  <div class="vmv-inner">
    <div class="vmv-head rv">
      <span class="tag">Who We Are</span>
      <h2>What drives DigiTexia</h2>
      <p class="lead">Our direction is simple: build useful digital products and keep them useful as your organization grows.</p>
    </div>

    <div class="vmv-grid rv d1">
      <div class="vmv-card vision">
        <div class="vmv-card-ico"><i class="ti ti-compass"></i></div>
        <div class="vmv-card-title">Vision</div>
        <div class="vmv-card-text">Become a trusted African builder of digital systems that improve how organizations operate.</div>
      </div>
      <div class="vmv-card mission">
        <div class="vmv-card-ico"><i class="ti ti-target"></i></div>
        <div class="vmv-card-title">Mission</div>
        <div class="vmv-card-text">Help organizations digitize work, reduce friction and make better operational decisions.</div>
      </div>
      <div class="vmv-card ambition">
        <div class="vmv-card-ico"><i class="ti ti-world"></i></div>
        <div class="vmv-card-title">Ambition</div>
        <div class="vmv-card-text">Grow with products that solve real operational problems for teams, institutions and businesses.</div>
      </div>
    </div>

    <div class="values-row rv d2">
      <div class="value-pill">
        <span class="value-ico"><i class="ti ti-bulb"></i></span>
        <div class="value-name">Innovation</div>
        <div class="value-desc">Build better, faster, simpler.</div>
      </div>
      <div class="value-pill">
        <span class="value-ico"><i class="ti ti-star"></i></span>
        <div class="value-name">Excellence</div>
        <div class="value-desc">Reliable and secure by default.</div>
      </div>
      <div class="value-pill">
        <span class="value-ico"><i class="ti ti-sparkles"></i></span>
        <div class="value-name">Impact</div>
        <div class="value-desc">Create measurable business impact.</div>
      </div>
      <div class="value-pill">
        <span class="value-ico"><i class="ti ti-users"></i></span>
        <div class="value-name">Collaboration</div>
        <div class="value-desc">Work closely, ship together.</div>
      </div>
      <div class="value-pill">
        <span class="value-ico"><i class="ti ti-refresh"></i></span>
        <div class="value-name">Adaptability</div>
        <div class="value-desc">Made for real African conditions.</div>
      </div>
    </div>
  </div>
</section>

<!-- EXPERTISE DOMAINS -->
<section id="expertise">
  <div class="exp-inner">
    <div class="exp-head">
      <div class="rv">
        <span class="tag">What We Do</span>
        <h2>Five ways we help teams move faster.</h2>
        <p class="lead">We cover the full path from strategy to delivery: diagnose, design, build, deploy and support.</p>
      </div>
      <div class="rv d1">
        <div style="background:var(--ink-2);border:1px solid var(--bdr);border-radius:16px;padding:1.75rem">
          <div style="font-size:.62rem;font-weight:700;letter-spacing:.1em;text-transform:uppercase;color:var(--muted);margin-bottom:1.25rem">Our Approach</div>
          <div style="font-size:.9rem;color:var(--muted-lt);line-height:1.75;margin-bottom:1.25rem">Fast delivery, clear priorities and no wasted motion.</div>
          <div style="display:flex;gap:.5rem;flex-wrap:wrap">
            <span style="font-size:.65rem;padding:.2rem .7rem;border-radius:100px;background:var(--blue-dim);border:1px solid var(--blue-bdr);color:var(--accent-fg)">Agile</span>
            <span style="font-size:.65rem;padding:.2rem .7rem;border-radius:100px;background:var(--blue-dim);border:1px solid var(--blue-bdr);color:var(--accent-fg)">Scalable</span>
            <span style="font-size:.65rem;padding:.2rem .7rem;border-radius:100px;background:var(--green-dim);border:1px solid var(--green-bdr);color:var(--green)">Secure</span>
            <span style="font-size:.65rem;padding:.2rem .7rem;border-radius:100px;background:var(--green-dim);border:1px solid var(--green-bdr);color:var(--green)">Performant</span>
          </div>
        </div>
      </div>
    </div>

    <div class="exp-grid rv">
      <div class="exp-card">
        <div class="exp-card-ico"><i class="ti ti-device-laptop"></i></div>
        <div class="exp-card-title">Custom Software</div>
        <div class="exp-card-desc">Built around your process, users and reporting needs.</div>
        <div class="exp-tags"><span class="exp-tag">Web Platforms</span><span class="exp-tag">Mobile Apps</span><span class="exp-tag">Business Software</span><span class="exp-tag">Integrated Systems</span></div>
      </div>
      <div class="exp-card">
        <div class="exp-card-ico"><i class="ti ti-refresh"></i></div>
        <div class="exp-card-title">Digital Transformation</div>
        <div class="exp-card-desc">We help you move from manual work to controlled digital workflows.</div>
        <div class="exp-tags"><span class="exp-tag">Process Analysis</span><span class="exp-tag">Operations Digitalization</span><span class="exp-tag">Tool Integration</span></div>
      </div>
      <div class="exp-card">
        <div class="exp-card-ico"><i class="ti ti-world"></i></div>
        <div class="exp-card-title">Platform Design</div>
        <div class="exp-card-desc">Connect users, data and services in one place.</div>
        <div class="exp-tags"><span class="exp-tag">Online Services</span><span class="exp-tag">Marketplaces</span><span class="exp-tag">Collaborative Tools</span></div>
      </div>
      <div class="exp-card">
        <div class="exp-card-ico"><i class="ti ti-settings"></i></div>
        <div class="exp-card-title">Automation</div>
        <div class="exp-card-desc">Cut repetitive work and reduce errors.</div>
        <div class="exp-tags"><span class="exp-tag">Workflow Automation</span><span class="exp-tag">Error Reduction</span><span class="exp-tag">Cost Optimization</span></div>
      </div>
      <div class="exp-card">
        <div class="exp-card-ico"><i class="ti ti-briefcase"></i></div>
        <div class="exp-card-title">Tech Consulting</div>
        <div class="exp-card-desc">Choose the right tools, roadmap and architecture faster.</div>
        <div class="exp-tags"><span class="exp-tag">System Architecture</span><span class="exp-tag">Digital Strategy</span><span class="exp-tag">IT Project Mgmt</span></div>
      </div>
      <div class="exp-card" style="background:linear-gradient(135deg,var(--accent-dim),var(--success-soft));border-color:var(--blue-bdr);display:flex;flex-direction:column;justify-content:center;text-align:center;align-items:center;gap:.75rem">
        <div style="font-size:2rem"><i class="ti ti-box"></i></div>
        <div class="exp-card-title">Ready-Made Products</div>
        <div class="exp-card-desc">Products ready to deploy, adapt and improve.</div>
        <a href="{{ url('/solutions') }}" style="font-size:.8rem;font-weight:600;color:var(--blue-lt);display:flex;align-items:center;gap:.3rem;margin-top:.25rem">View All Solutions &rarr;</a>
      </div>
    </div>
  </div>
</section>

<!-- AGILE WORKFLOW -->
<section id="workflow">
  <div class="wf-inner">
    <div class="wf-head rv">
      <span class="tag">How We Work</span>
      <h2>From idea to impact.</h2>
      <p class="lead" style="max-width:540px;margin:.75rem auto 0">Short cycles, clear feedback and delivery your team can actually adopt.</p>
    </div>
    <div class="wf-steps rv d1">
      <div class="wf-step">
        <div class="wf-num">01</div>
        <div class="wf-label">Needs</div>
        <div class="wf-desc">Understand the real operational problem</div>
      </div>
      <div class="wf-step">
        <div class="wf-num">02</div>
        <div class="wf-label">Design</div>
        <div class="wf-desc">Map the simplest useful path</div>
      </div>
      <div class="wf-step">
        <div class="wf-num">03</div>
        <div class="wf-label">Build</div>
        <div class="wf-desc">Ship a focused first version</div>
      </div>
      <div class="wf-step">
        <div class="wf-num">04</div>
        <div class="wf-label">Test</div>
        <div class="wf-desc">Check quality, security and reliability</div>
      </div>
      <div class="wf-step">
        <div class="wf-num">05</div>
        <div class="wf-label">Launch</div>
        <div class="wf-desc">Go live and train the team</div>
      </div>
      <div class="wf-step">
        <div class="wf-num">06</div>
        <div class="wf-label">Support</div>
        <div class="wf-desc">Improve after real usage</div>
      </div>
    </div>
  </div>
</section>


<!-- FINAL CTA -->
<section id="why-cta">
  <div class="cta-inner rv">
    <span class="tag">Request Assessment</span>
    <h2>Want to see if DigiTexia fits your team or project?</h2>
    <p class="lead">Let's talk about your goals, your constraints and the fastest way to create value.</p>
    <div class="cta-btns">
      <a href="{{ url('/contact-us') }}" class="btn-pri">Request an Assessment <svg width="14" height="14" viewBox="0 0 14 14" fill="none" aria-hidden="true"><path d="M2 7h10M7 2l5 5-5 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
      <a href="{{ url('/solutions') }}" class="btn-sec">See the products &rarr;</a>
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
</script>
@endpush

@endsection






