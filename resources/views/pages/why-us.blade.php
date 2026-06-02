@extends('index')

@section('page_title', __('Why Us') . ' | DigiTexia')

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
      <div class="ph-breadcrumb"><a href="{{ url('/') }}">{{ __('Home') }}</a><span>&rsaquo;</span><span class="curr">{{ __('Why Us') }}</span></div>
      <span class="tag">{{ __('Why Choose DigiTexia') }}</span>
      <h1>{{ __('A technology partner focused on') }} <em>{{ __('business outcomes.') }}</em></h1>
      <p class="lead">{{ __('DigiTexia helps organizations replace manual friction with reliable digital systems, clearer operations and faster decisions.') }}</p>
      <div class="ph-btns">
        <a href="#reasons" class="btn-pri">{{ __('See Why') }} <svg width="14" height="14" viewBox="0 0 14 14" fill="none" aria-hidden="true"><path d="M7 2v10M2 7l5 5 5-5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
        <a href="{{ url('/contact-us') }}" class="btn-sec">{{ __('Request an Assessment') }}</a>
      </div>
    </div>

    <!-- Identity Card -->
    <div class="identity-card rv d2">
      <div class="id-header">
        <div class="id-logo-wrap"><i class="ti ti-world"></i></div>
        <div>
          <div class="id-name">{{ __('DigiTexia Corporate') }}</div>
          <div class="id-sub">{{ __('Software engineering & digital operations') }}</div>
        </div>
      </div>
      <div class="id-rows">
        <div class="id-row">
          <div class="id-row-label">{{ __('Type') }}</div>
          <div class="id-row-val">{{ __('Business software & digital consulting') }}</div>
        </div>
        <div class="id-divider"></div>
        <div class="id-row">
          <div class="id-row-label">{{ __('Mission') }}</div>
          <div class="id-row-val">{{ __('Help teams digitize operations faster') }}</div>
        </div>
        <div class="id-divider"></div>
        <div class="id-row">
          <div class="id-row-label">{{ __('Vision') }}</div>
          <div class="id-row-val">{{ __('Build practical platforms for scalable growth') }}</div>
        </div>
        <div class="id-divider"></div>
        <div class="id-row">
          <div class="id-row-label">{{ __('HQ') }}</div>
          <div class="id-row-val">{{ __('Yaounde, Cameroon') }}</div>
        </div>
        <div class="id-divider"></div>
        <div class="id-row">
          <div class="id-row-label">{{ __('Contact') }}</div>
          <div class="id-row-val">contactdigitexia@gmail.com<br>(+237) 650 945 280</div>
        </div>
      </div>
      <div class="id-badges">
        <span class="id-badge blue">{{ __('Innovation') }}</span>
        <span class="id-badge blue">{{ __('Excellence') }}</span>
        <span class="id-badge green">{{ __('Impact') }}</span>
        <span class="id-badge green">{{ __('Collaboration') }}</span>
        <span class="id-badge blue">{{ __('Adaptability') }}</span>
      </div>
    </div>
  </div>
</section>

<!-- 4 REASONS TO CHOOSE DIGITEXIA -->
<section id="reasons">
  <div class="reasons-inner">
    <div class="reasons-head">
      <div class="rv">
        <span class="tag">{{ __('Why DigiTexia') }}</span>
        <h2>{{ __('Clear value. Fast execution. Long-term support.') }}</h2>
        <p class="lead">{{ __('We build for outcomes, not noise. Every project must help your team save time, improve control or serve customers better.') }}</p>
      </div>
      <div class="rv d1" style="display:flex;flex-direction:column;gap:1rem">
        <div style="background:var(--ink-2);border:1px solid var(--bdr);border-radius:12px;padding:1.25rem 1.5rem;display:flex;align-items:center;gap:1rem">
          <div style="font-size:1.4rem"><i class="ti ti-target"></i></div>
          <div style="font-size:.845rem;color:var(--muted-lt);line-height:1.55">{{ __('We ship useful products, not features for show.') }}</div>
        </div>
        <div style="background:var(--ink-2);border:1px solid var(--bdr);border-radius:12px;padding:1.25rem 1.5rem;display:flex;align-items:center;gap:1rem">
          <div style="font-size:1.4rem"><i class="ti ti-zap"></i></div>
          <div style="font-size:.845rem;color:var(--muted-lt);line-height:1.55">{{ __('Value should start early, not after months of unclear work.') }}</div>
        </div>
        <div style="background:var(--ink-2);border:1px solid var(--bdr);border-radius:12px;padding:1.25rem 1.5rem;display:flex;align-items:center;gap:1rem">
          <div style="font-size:1.4rem"><i class="ti ti-world"></i></div>
          <div style="font-size:.845rem;color:var(--muted-lt);line-height:1.55">{{ __('We build for African realities, business constraints and growth.') }}</div>
        </div>
      </div>
    </div>

    <div class="reasons-grid rv">
      <div class="reason-card" style="--accent:var(--blue)">
        <div class="reason-num" style="background:var(--blue-dim);border-color:var(--blue-bdr);color:var(--accent-fg)">01</div>
        <div class="reason-ico"><i class="ti ti-microscope"></i></div>
        <div class="reason-title">{{ __('Strong technical execution') }}</div>
        <div class="reason-desc">{{ __('We design reliable software around your workflow, users and operational constraints.') }}</div>
        <div class="reason-proof" style="background:var(--blue-dim);border-color:var(--blue-bdr);color:var(--accent-fg)">
          <span class="reason-proof-ico"><i class="ti ti-check"></i></span>{{ __('Scalable, secure, and built to evolve.') }}
        </div>
      </div>

      <div class="reason-card" style="--accent:var(--green)">
        <div class="reason-num" style="background:var(--green-dim);border-color:var(--green-bdr);color:var(--green)">02</div>
        <div class="reason-ico"><i class="ti ti-world"></i></div>
        <div class="reason-title">{{ __('Built for African markets') }}</div>
        <div class="reason-desc">{{ __('We design for local realities: connectivity, adoption, cost control, field teams and growth.') }}</div>
        <div class="reason-proof" style="background:var(--green-dim);border-color:var(--green-bdr);color:var(--green)">
          <span class="reason-proof-ico"><i class="ti ti-check"></i></span>{{ __('Made for the market, ready to scale.') }}
        </div>
      </div>

      <div class="reason-card" style="--accent:var(--accent-fg)">
        <div class="reason-num" style="background:var(--accent-soft);border-color:var(--accent-border);color:var(--accent-fg)">03</div>
        <div class="reason-ico"><i class="ti ti-chart-bar"></i></div>
        <div class="reason-title">{{ __('Focused on measurable results') }}</div>
        <div class="reason-desc">{{ __('We focus on faster workflows, fewer errors, clearer reporting and measurable operational gains.') }}</div>
        <div class="reason-proof" style="background:var(--accent-soft);border-color:var(--accent-border);color:var(--accent-fg)">
          <span class="reason-proof-ico"><i class="ti ti-check"></i></span>{{ __('Fewer errors. Better speed. Lower cost.') }}
        </div>
      </div>

      <div class="reason-card" style="--accent:var(--danger)">
        <div class="reason-num" style="background:var(--danger-soft);border-color:var(--danger-border);color:var(--danger-fg)">04</div>
        <div class="reason-ico"><i class="ti ti-handshake"></i></div>
        <div class="reason-title">{{ __('A partner, not just a vendor') }}</div>
        <div class="reason-desc">{{ __('We stay after launch with support, improvements and practical guidance for adoption.') }}</div>
        <div class="reason-proof" style="background:var(--danger-soft);border-color:var(--danger-border);color:var(--danger-fg)">
          <span class="reason-proof-ico"><i class="ti ti-check"></i></span>{{ __('Support that keeps working after go-live.') }}
        </div>
      </div>
    </div>
  </div>
</section>

<!-- VISION / MISSION / VALUES -->
<section id="vmv">
  <div class="vmv-inner">
    <div class="vmv-head rv">
      <span class="tag">{{ __('Who We Are') }}</span>
      <h2>{{ __('What drives DigiTexia') }}</h2>
      <p class="lead">{{ __('Our direction is simple: build useful digital products and keep them useful as your organization grows.') }}</p>
    </div>

    <div class="vmv-grid rv d1">
      <div class="vmv-card vision">
        <div class="vmv-card-ico"><i class="ti ti-compass"></i></div>
        <div class="vmv-card-title">{{ __('Vision') }}</div>
        <div class="vmv-card-text">{{ __('Become a trusted African builder of digital systems that improve how organizations operate.') }}</div>
      </div>
      <div class="vmv-card mission">
        <div class="vmv-card-ico"><i class="ti ti-target"></i></div>
        <div class="vmv-card-title">{{ __('Mission') }}</div>
        <div class="vmv-card-text">{{ __('Help organizations digitize work, reduce friction and make better operational decisions.') }}</div>
      </div>
      <div class="vmv-card ambition">
        <div class="vmv-card-ico"><i class="ti ti-world"></i></div>
        <div class="vmv-card-title">{{ __('Ambition') }}</div>
        <div class="vmv-card-text">{{ __('Grow with products that solve real operational problems for teams, institutions and businesses.') }}</div>
      </div>
    </div>

    <div class="values-row rv d2">
      <div class="value-pill">
        <span class="value-ico"><i class="ti ti-bulb"></i></span>
        <div class="value-name">{{ __('Innovation') }}</div>
        <div class="value-desc">{{ __('Build better, faster, simpler.') }}</div>
      </div>
      <div class="value-pill">
        <span class="value-ico"><i class="ti ti-star"></i></span>
        <div class="value-name">{{ __('Excellence') }}</div>
        <div class="value-desc">{{ __('Reliable and secure by default.') }}</div>
      </div>
      <div class="value-pill">
        <span class="value-ico"><i class="ti ti-sparkles"></i></span>
        <div class="value-name">{{ __('Impact') }}</div>
        <div class="value-desc">{{ __('Create measurable business impact.') }}</div>
      </div>
      <div class="value-pill">
        <span class="value-ico"><i class="ti ti-users"></i></span>
        <div class="value-name">{{ __('Collaboration') }}</div>
        <div class="value-desc">{{ __('Work closely, ship together.') }}</div>
      </div>
      <div class="value-pill">
        <span class="value-ico"><i class="ti ti-refresh"></i></span>
        <div class="value-name">{{ __('Adaptability') }}</div>
        <div class="value-desc">{{ __('Made for real African conditions.') }}</div>
      </div>
    </div>
  </div>
</section>

<!-- EXPERTISE DOMAINS -->
<section id="expertise">
  <div class="exp-inner">
    <div class="exp-head">
      <div class="rv">
        <span class="tag">{{ __('What We Do') }}</span>
        <h2>{{ __('Five ways we help teams move faster.') }}</h2>
        <p class="lead">{{ __('We cover the full path from strategy to delivery: diagnose, design, build, deploy and support.') }}</p>
      </div>
      <div class="rv d1">
        <div style="background:var(--ink-2);border:1px solid var(--bdr);border-radius:16px;padding:1.75rem">
          <div style="font-size:.62rem;font-weight:700;letter-spacing:.1em;text-transform:uppercase;color:var(--muted);margin-bottom:1.25rem">{{ __('Our Approach') }}</div>
          <div style="font-size:.9rem;color:var(--muted-lt);line-height:1.75;margin-bottom:1.25rem">{{ __('Fast delivery, clear priorities and no wasted motion.') }}</div>
          <div style="display:flex;gap:.5rem;flex-wrap:wrap">
            <span style="font-size:.65rem;padding:.2rem .7rem;border-radius:100px;background:var(--blue-dim);border:1px solid var(--blue-bdr);color:var(--accent-fg)">{{ __('Agile') }}</span>
            <span style="font-size:.65rem;padding:.2rem .7rem;border-radius:100px;background:var(--blue-dim);border:1px solid var(--blue-bdr);color:var(--accent-fg)">{{ __('Scalable') }}</span>
            <span style="font-size:.65rem;padding:.2rem .7rem;border-radius:100px;background:var(--green-dim);border:1px solid var(--green-bdr);color:var(--green)">{{ __('Secure') }}</span>
            <span style="font-size:.65rem;padding:.2rem .7rem;border-radius:100px;background:var(--green-dim);border:1px solid var(--green-bdr);color:var(--green)">{{ __('Performant') }}</span>
          </div>
        </div>
      </div>
    </div>

    <div class="exp-grid rv">
      <div class="exp-card">
        <div class="exp-card-ico"><i class="ti ti-device-laptop"></i></div>
        <div class="exp-card-title">{{ __('Custom Software') }}</div>
        <div class="exp-card-desc">{{ __('Built around your process, users and reporting needs.') }}</div>
        <div class="exp-tags"><span class="exp-tag">{{ __('Web Platforms') }}</span><span class="exp-tag">{{ __('Mobile Apps') }}</span><span class="exp-tag">{{ __('Business Software') }}</span><span class="exp-tag">{{ __('Integrated Systems') }}</span></div>
      </div>
      <div class="exp-card">
        <div class="exp-card-ico"><i class="ti ti-refresh"></i></div>
        <div class="exp-card-title">{{ __('Digital Transformation') }}</div>
        <div class="exp-card-desc">{{ __('We help you move from manual work to controlled digital workflows.') }}</div>
        <div class="exp-tags"><span class="exp-tag">{{ __('Process Analysis') }}</span><span class="exp-tag">{{ __('Operations Digitalization') }}</span><span class="exp-tag">{{ __('Tool Integration') }}</span></div>
      </div>
      <div class="exp-card">
        <div class="exp-card-ico"><i class="ti ti-world"></i></div>
        <div class="exp-card-title">{{ __('Platform Design') }}</div>
        <div class="exp-card-desc">{{ __('Connect users, data and services in one place.') }}</div>
        <div class="exp-tags"><span class="exp-tag">{{ __('Online Services') }}</span><span class="exp-tag">{{ __('Marketplaces') }}</span><span class="exp-tag">{{ __('Collaborative Tools') }}</span></div>
      </div>
      <div class="exp-card">
        <div class="exp-card-ico"><i class="ti ti-settings"></i></div>
        <div class="exp-card-title">{{ __('Automation') }}</div>
        <div class="exp-card-desc">{{ __('Cut repetitive work and reduce errors.') }}</div>
        <div class="exp-tags"><span class="exp-tag">{{ __('Workflow Automation') }}</span><span class="exp-tag">{{ __('Error Reduction') }}</span><span class="exp-tag">{{ __('Cost Optimization') }}</span></div>
      </div>
      <div class="exp-card">
        <div class="exp-card-ico"><i class="ti ti-briefcase"></i></div>
        <div class="exp-card-title">{{ __('Tech Consulting') }}</div>
        <div class="exp-card-desc">{{ __('Choose the right tools, roadmap and architecture faster.') }}</div>
        <div class="exp-tags"><span class="exp-tag">{{ __('System Architecture') }}</span><span class="exp-tag">{{ __('Digital Strategy') }}</span><span class="exp-tag">{{ __('IT Project Mgmt') }}</span></div>
      </div>
      <div class="exp-card" style="background:linear-gradient(135deg,var(--accent-dim),var(--success-soft));border-color:var(--blue-bdr);display:flex;flex-direction:column;justify-content:center;text-align:center;align-items:center;gap:.75rem">
        <div style="font-size:2rem"><i class="ti ti-box"></i></div>
        <div class="exp-card-title">{{ __('Ready-Made Products') }}</div>
        <div class="exp-card-desc">{{ __('Products ready to deploy, adapt and improve.') }}</div>
        <a href="{{ url('/solutions') }}" style="font-size:.8rem;font-weight:600;color:var(--blue-lt);display:flex;align-items:center;gap:.3rem;margin-top:.25rem">{{ __('View All Solutions') }} &rarr;</a>
      </div>
    </div>
  </div>
</section>

<!-- AGILE WORKFLOW -->
<section id="workflow">
  <div class="wf-inner">
    <div class="wf-head rv">
      <span class="tag">{{ __('How We Work') }}</span>
      <h2>{{ __('From idea to impact.') }}</h2>
      <p class="lead" style="max-width:540px;margin:.75rem auto 0">{{ __('Short cycles, clear feedback and delivery your team can actually adopt.') }}</p>
    </div>
    <div class="wf-steps rv d1">
      <div class="wf-step">
        <div class="wf-num">01</div>
        <div class="wf-label">{{ __('Needs') }}</div>
        <div class="wf-desc">{{ __('Understand the real operational problem') }}</div>
      </div>
      <div class="wf-step">
        <div class="wf-num">02</div>
        <div class="wf-label">{{ __('Design') }}</div>
        <div class="wf-desc">{{ __('Map the simplest useful path') }}</div>
      </div>
      <div class="wf-step">
        <div class="wf-num">03</div>
        <div class="wf-label">{{ __('Build') }}</div>
        <div class="wf-desc">{{ __('Ship a focused first version') }}</div>
      </div>
      <div class="wf-step">
        <div class="wf-num">04</div>
        <div class="wf-label">{{ __('Test') }}</div>
        <div class="wf-desc">{{ __('Check quality, security and reliability') }}</div>
      </div>
      <div class="wf-step">
        <div class="wf-num">05</div>
        <div class="wf-label">{{ __('Launch') }}</div>
        <div class="wf-desc">{{ __('Go live and train the team') }}</div>
      </div>
      <div class="wf-step">
        <div class="wf-num">06</div>
        <div class="wf-label">{{ __('Support') }}</div>
        <div class="wf-desc">{{ __('Improve after real usage') }}</div>
      </div>
    </div>
  </div>
</section>


<!-- FINAL CTA -->
<section id="why-cta">
  <div class="cta-inner rv">
    <span class="tag">{{ __('Request Assessment') }}</span>
    <h2>{{ __('Want to see if DigiTexia fits your team or project?') }}</h2>
    <p class="lead">{{ __("Let's talk about your goals, your constraints and the fastest way to create value.") }}</p>
    <div class="cta-btns">
      <a href="{{ url('/contact-us') }}" class="btn-pri">{{ __('Request an Assessment') }} <svg width="14" height="14" viewBox="0 0 14 14" fill="none" aria-hidden="true"><path d="M2 7h10M7 2l5 5-5 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
      <a href="{{ url('/solutions') }}" class="btn-sec">{{ __('View Solutions') }} &rarr;</a>
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
