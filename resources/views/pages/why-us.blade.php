@extends('index')

@section('page_title', 'Why Us — DigiTexia')

@push('styles')
<link href="https://fonts.googleapis.com/css2?family=Clash+Display:wght@400;500;600;700&family=Plus+Jakarta+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/why-us-digitexia.css') }}">
@endpush

@section('contain')
<!-- â•â•â• PAGE HERO â•â•â• -->
<section id="page-hero">
  <div class="ph-bg"></div><div class="ph-grid"></div>
  <div class="ph-inner">
    <div class="ph-left rv">
      <div class="ph-breadcrumb"><a href="index.html">Home</a><span>â€º</span><span class="curr">Why Us</span></div>
      <span class="tag">Why Choose DigiTexia</span>
      <h1>Your strategic partner for <em>digital transformation in Africa.</em></h1>
      <p class="lead">DigiTexia is not just a software company. We are a long-term partner that combines solid technological expertise, a deep understanding of African realities, and an unwavering commitment to results.</p>
      <div class="ph-btns">
        <a href="#reasons" class="btn-pri">Discover Why <svg width="14" height="14" viewBox="0 0 14 14" fill="none"><path d="M7 2v10M2 7l5 5 5-5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
        <a href="index.html#cta-final" class="btn-sec">Contact Us</a>
      </div>
    </div>

    <!-- Identity Card -->
    <div class="identity-card rv d2">
      <div class="id-header">
        <div class="id-logo-wrap">ðŸŒ</div>
        <div>
          <div class="id-name">Digitexia Corporate</div>
          <div class="id-sub">Technology &amp; Innovation Â· Pan-African Startup</div>
        </div>
      </div>
      <div class="id-rows">
        <div class="id-row">
          <div class="id-row-label">Type</div>
          <div class="id-row-val">IT Startup â€” Software &amp; Digital Consulting</div>
        </div>
        <div class="id-divider"></div>
        <div class="id-row">
          <div class="id-row-label">Mission</div>
          <div class="id-row-val">Accompany organizations in their digital transition</div>
        </div>
        <div class="id-divider"></div>
        <div class="id-row">
          <div class="id-row-label">Vision</div>
          <div class="id-row-val">Pan-African reference in digital transformation</div>
        </div>
        <div class="id-divider"></div>
        <div class="id-row">
          <div class="id-row-label">HQ</div>
          <div class="id-row-val">YaoundÃ©, Cameroon</div>
        </div>
        <div class="id-divider"></div>
        <div class="id-row">
          <div class="id-row-label">Contact</div>
          <div class="id-row-val">contactdigitexia@@gmail.com<br>(+237) 650 945 280</div>
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

<!-- â•â•â• 4 REASONS TO CHOOSE DIGITEXIA â•â•â• -->
<section id="reasons">
  <div class="reasons-inner">
    <div class="reasons-head">
      <div class="rv">
        <span class="tag">Pourquoi Choisir DigiTexia</span>
        <h2>Four pillars that make us a different kind of partner.</h2>
        <p class="lead">Several key elements distinguish DigiTexia as a technology partner committed to delivering real, lasting impact for your organization.</p>
      </div>
      <div class="rv d1" style="display:flex;flex-direction:column;gap:1rem">
        <div style="background:var(--ink-2);border:1px solid var(--bdr);border-radius:12px;padding:1.25rem 1.5rem;display:flex;align-items:center;gap:1rem">
          <div style="font-size:1.4rem">ðŸŽ¯</div>
          <div style="font-size:.845rem;color:var(--muted-lt);line-height:1.55">We don't just write code â€” <strong style="color:var(--white)">we deliver value, continuously.</strong></div>
        </div>
        <div style="background:var(--ink-2);border:1px solid var(--bdr);border-radius:12px;padding:1.25rem 1.5rem;display:flex;align-items:center;gap:1rem">
          <div style="font-size:1.4rem">âš¡</div>
          <div style="font-size:.845rem;color:var(--muted-lt);line-height:1.55">A digital project should not take months before <strong style="color:var(--white)">producing value.</strong></div>
        </div>
        <div style="background:var(--ink-2);border:1px solid var(--bdr);border-radius:12px;padding:1.25rem 1.5rem;display:flex;align-items:center;gap:1rem">
          <div style="font-size:1.4rem">ðŸŒ</div>
          <div style="font-size:.845rem;color:var(--muted-lt);line-height:1.55">We do R&amp;D to create software that <strong style="color:var(--white)">understands African realities, challenges, and ambitions.</strong></div>
        </div>
      </div>
    </div>

    <div class="reasons-grid rv">
      <div class="reason-card" style="--accent:var(--blue)">
        <div class="reason-num" style="background:var(--blue-dim);border-color:var(--blue-bdr);color:#93C5FD">01</div>
        <div class="reason-ico">ðŸ”¬</div>
        <div class="reason-title">A Solid Technological Expertise</div>
        <div class="reason-desc">Our team is capable of designing innovative, high-performance solutions. We don't copy existing models â€” we conduct Research &amp; Development to build software that truly understands the specificities of each client's context.</div>
        <div class="reason-proof" style="background:var(--blue-dim);border-color:var(--blue-bdr);color:#93C5FD">
          <span class="reason-proof-ico">â†’</span>Scalable, secure and high-performance solutions, built to evolve with your organization.
        </div>
      </div>

      <div class="reason-card" style="--accent:var(--green)">
        <div class="reason-num" style="background:var(--green-dim);border-color:var(--green-bdr);color:var(--green)">02</div>
        <div class="reason-ico">ðŸŒ</div>
        <div class="reason-title">Deep Understanding of the African Context</div>
        <div class="reason-desc">We design solutions adapted to the economic and operational realities of African companies. Our products address specific challenges of the African market â€” they are not generic software retrofitted to local needs.</div>
        <div class="reason-proof" style="background:var(--green-dim);border-color:var(--green-bdr);color:var(--green)">
          <span class="reason-proof-ico">â†’</span>Accessible, scalable products adapted to local realities â€” not imported solutions forced to fit.
        </div>
      </div>

      <div class="reason-card" style="--accent:#F59E0B">
        <div class="reason-num" style="background:rgba(245,158,11,.12);border-color:rgba(245,158,11,.28);color:#FCD34D">03</div>
        <div class="reason-ico">ðŸ“ˆ</div>
        <div class="reason-title">A Results-Oriented Approach</div>
        <div class="reason-desc">We develop solutions that have a concrete impact on organizational performance. Our methodology combines business process analysis, agile development, and continuous improvement â€” so you see results quickly, not after months of waiting.</div>
        <div class="reason-proof" style="background:rgba(245,158,11,.1);border-color:rgba(245,158,11,.25);color:#FCD34D">
          <span class="reason-proof-ico">â†’</span>Improved efficiency, reduced costs, better productivity â€” measurable outcomes, not promises.
        </div>
      </div>

      <div class="reason-card" style="--accent:#EC4899">
        <div class="reason-num" style="background:rgba(236,72,153,.12);border-color:rgba(236,72,153,.28);color:#F9A8D4">04</div>
        <div class="reason-ico">ðŸ¤</div>
        <div class="reason-title">A Durable, Long-Term Partnership</div>
        <div class="reason-desc">We accompany our clients over the long term in the evolution of their systems and digital tools. From initial deployment to continuous improvement, DigiTexia stays by your side â€” providing maintenance, technical support, and strategic guidance.</div>
        <div class="reason-proof" style="background:rgba(236,72,153,.1);border-color:rgba(236,72,153,.25);color:#F9A8D4">
          <span class="reason-proof-ico">â†’</span>Not a vendor â€” a strategic technology partner committed to your long-term success.
        </div>
      </div>
    </div>
  </div>
</section>

<!-- â•â•â• VISION / MISSION / VALUES â•â•â• -->
<section id="vmv">
  <div class="vmv-inner">
    <div class="vmv-head rv">
      <span class="tag">Who We Are</span>
      <h2>The foundations of DigiTexia</h2>
      <p class="lead">Everything we do is guided by a clear vision, a concrete mission, and shared values that define how we work and who we serve.</p>
    </div>

    <div class="vmv-grid rv d1">
      <div class="vmv-card vision">
        <div class="vmv-card-ico">ðŸ”­</div>
        <div class="vmv-card-title">Our Vision</div>
        <div class="vmv-card-text">To become a pan-African reference in digital transformation, by creating technological solutions capable of accelerating the modernization of businesses and institutions across Africa. We believe that digital technology represents a major opportunity to improve the productivity, transparency, and competitiveness of African organizations.</div>
      </div>
      <div class="vmv-card mission">
        <div class="vmv-card-ico">ðŸŽ¯</div>
        <div class="vmv-card-title">Our Mission</div>
        <div class="vmv-card-text">To accompany businesses and organizations in their transition to digital by providing: high-performance and scalable software solutions, digital tools adapted to local realities, and strategic support throughout the transformation process. Our objective is to enable organizations to fully leverage digital technologies to improve their efficiency and impact.</div>
      </div>
      <div class="vmv-card ambition">
        <div class="vmv-card-ico">ðŸŒ</div>
        <div class="vmv-card-title">Our Ambition</div>
        <div class="vmv-card-text">DigiTexia aims to actively contribute to the development of the digital economy in Africa. We want to develop high-impact technological solutions, extend our presence across several African countries, and participate in the digital modernization of enterprises and public institutions on the continent.</div>
      </div>
    </div>

    <div class="values-row rv d2">
      <div class="value-pill">
        <span class="value-ico">ðŸ’¡</span>
        <div class="value-name">Innovation</div>
        <div class="value-desc">We encourage creativity to design modern, high-performance digital solutions.</div>
      </div>
      <div class="value-pill">
        <span class="value-ico">â­</span>
        <div class="value-name">Excellence</div>
        <div class="value-desc">Reliable, secure solutions meeting international technology standards.</div>
      </div>
      <div class="value-pill">
        <span class="value-ico">ðŸ’¥</span>
        <div class="value-name">Impact</div>
        <div class="value-desc">Technologies that improve performance and support economic development.</div>
      </div>
      <div class="value-pill">
        <span class="value-ico">ðŸ¤</span>
        <div class="value-name">Collaboration</div>
        <div class="value-desc">We work in partnership with clients to build the right solutions together.</div>
      </div>
      <div class="value-pill">
        <span class="value-ico">ðŸ”„</span>
        <div class="value-name">Adaptability</div>
        <div class="value-desc">Solutions designed for the economic and technological realities of Africa.</div>
      </div>
    </div>
  </div>
</section>

<!-- â•â•â• EXPERTISE DOMAINS â•â•â• -->
<section id="expertise">
  <div class="exp-inner">
    <div class="exp-head">
      <div class="rv">
        <span class="tag">Our Domains of Expertise</span>
        <h2>Five areas where we deliver real value.</h2>
        <p class="lead">DigiTexia intervenes in several key areas related to information technologies and digital transformation â€” from custom development to strategic consulting.</p>
      </div>
      <div class="rv d1">
        <div style="background:var(--ink-2);border:1px solid var(--bdr);border-radius:16px;padding:1.75rem">
          <div style="font-size:.62rem;font-weight:700;letter-spacing:.1em;text-transform:uppercase;color:var(--muted);margin-bottom:1.25rem">Our Approach</div>
          <div style="font-size:.9rem;color:var(--muted-lt);line-height:1.75;margin-bottom:1.25rem">DigiTexia adopts an <strong style="color:var(--white)">agile methodology</strong> that allows rapid development while guaranteeing solution quality â€” so you get value quickly, not after months of development.</div>
          <div style="display:flex;gap:.5rem;flex-wrap:wrap">
            <span style="font-size:.65rem;padding:.2rem .7rem;border-radius:100px;background:var(--blue-dim);border:1px solid var(--blue-bdr);color:#93C5FD">Agile</span>
            <span style="font-size:.65rem;padding:.2rem .7rem;border-radius:100px;background:var(--blue-dim);border:1px solid var(--blue-bdr);color:#93C5FD">Scalable</span>
            <span style="font-size:.65rem;padding:.2rem .7rem;border-radius:100px;background:var(--green-dim);border:1px solid var(--green-bdr);color:var(--green)">Secure</span>
            <span style="font-size:.65rem;padding:.2rem .7rem;border-radius:100px;background:var(--green-dim);border:1px solid var(--green-bdr);color:var(--green)">Performant</span>
          </div>
        </div>
      </div>
    </div>

    <div class="exp-grid rv">
      <div class="exp-card">
        <div class="exp-card-ico">ðŸ’»</div>
        <div class="exp-card-title">Custom Software Development</div>
        <div class="exp-card-desc">We design and develop applications tailored to the specific needs of each organization â€” scalable, secure, and high-performance from day one.</div>
        <div class="exp-tags"><span class="exp-tag">Web Platforms</span><span class="exp-tag">Mobile Apps</span><span class="exp-tag">Business Software</span><span class="exp-tag">Integrated Systems</span></div>
      </div>
      <div class="exp-card">
        <div class="exp-card-ico">ðŸ”„</div>
        <div class="exp-card-title">Digital Transformation</div>
        <div class="exp-card-desc">We accompany organizations through the analysis, design, and implementation of their digital transformation strategy â€” from process audit to operational go-live.</div>
        <div class="exp-tags"><span class="exp-tag">Process Analysis</span><span class="exp-tag">Operations Digitalization</span><span class="exp-tag">Tool Integration</span></div>
      </div>
      <div class="exp-card">
        <div class="exp-card-ico">ðŸŒ</div>
        <div class="exp-card-title">Digital Platform Design</div>
        <div class="exp-card-desc">We develop platforms that connect users, services, and data â€” enabling organizations to serve customers and collaborate more effectively at scale.</div>
        <div class="exp-tags"><span class="exp-tag">Online Services</span><span class="exp-tag">Marketplaces</span><span class="exp-tag">Collaborative Tools</span></div>
      </div>
      <div class="exp-card">
        <div class="exp-card-ico">âš™ï¸</div>
        <div class="exp-card-title">Process Automation</div>
        <div class="exp-card-desc">We implement solutions to automate repetitive tasks and operational processes â€” reducing human errors, improving productivity, and cutting operational costs.</div>
        <div class="exp-tags"><span class="exp-tag">Workflow Automation</span><span class="exp-tag">Error Reduction</span><span class="exp-tag">Cost Optimization</span></div>
      </div>
      <div class="exp-card">
        <div class="exp-card-ico">ðŸ§­</div>
        <div class="exp-card-title">Technology Consulting</div>
        <div class="exp-card-desc">We support organizations in their technology decisions â€” bringing expertise in system architecture, technology selection, digital strategy, and IT project management.</div>
        <div class="exp-tags"><span class="exp-tag">System Architecture</span><span class="exp-tag">Digital Strategy</span><span class="exp-tag">IT Project Mgmt</span></div>
      </div>
      <div class="exp-card" style="background:linear-gradient(135deg,rgba(18,70,240,.08),rgba(22,199,132,.04));border-color:var(--blue-bdr);display:flex;flex-direction:column;justify-content:center;text-align:center;align-items:center;gap:.75rem">
        <div style="font-size:2rem">ðŸ“¦</div>
        <div class="exp-card-title">Ready-Made Products</div>
        <div class="exp-card-desc">FlexiCare, InventoryPro, Perfomia, DigiCourier, and MedTrace â€” proven products deployable immediately.</div>
        <a href="solutions.html" style="font-size:.8rem;font-weight:600;color:var(--blue-lt);display:flex;align-items:center;gap:.3rem;margin-top:.25rem">View All Solutions â†’</a>
      </div>
    </div>
  </div>
</section>

<!-- â•â•â• AGILE WORKFLOW â•â•â• -->
<section id="workflow">
  <div class="wf-inner">
    <div class="wf-head rv">
      <span class="tag">Notre Approche de Travail</span>
      <h2>How we work â€” from idea to impact.</h2>
      <p class="lead" style="max-width:540px;margin:.75rem auto 0">Our agile approach allows us to develop solutions rapidly while guaranteeing quality at every step.</p>
    </div>
    <div class="wf-steps rv d1">
      <div class="wf-step">
        <div class="wf-num">01</div>
        <div class="wf-label">Analyse des Besoins</div>
        <div class="wf-desc">Deep understanding of your context, objectives, and constraints</div>
      </div>
      <div class="wf-step">
        <div class="wf-num">02</div>
        <div class="wf-label">Conception</div>
        <div class="wf-desc">Solution architecture definition and feature design</div>
      </div>
      <div class="wf-step">
        <div class="wf-num">03</div>
        <div class="wf-label">DÃ©veloppement</div>
        <div class="wf-desc">Building the solution using modern technologies and agile methods</div>
      </div>
      <div class="wf-step">
        <div class="wf-num">04</div>
        <div class="wf-label">Tests & Validation</div>
        <div class="wf-desc">Performance, security, and reliability verification</div>
      </div>
      <div class="wf-step">
        <div class="wf-num">05</div>
        <div class="wf-label">DÃ©ploiement</div>
        <div class="wf-desc">Production launch and user training</div>
      </div>
      <div class="wf-step">
        <div class="wf-num">06</div>
        <div class="wf-label">Support & Ã‰volution</div>
        <div class="wf-desc">Maintenance, technical support, and continuous improvement</div>
      </div>
    </div>
  </div>
</section>

<!-- â•â•â• TEAM â•â•â• -->
<section id="team">
  <div class="team-inner">
    <div class="team-head rv">
      <span class="tag">The Leadership</span>
      <h2>The people driving DigiTexia forward</h2>
      <p class="lead" style="max-width:500px;margin:.75rem auto 0">Behind every solution is a team that believes in the power of technology to transform Africa â€” and puts that conviction into every line of code.</p>
    </div>
    <div class="team-grid rv d1">
      <div class="team-card">
        <div class="team-avatar">ðŸ‘©â€ðŸ’¼</div>
        <div class="team-name">Anne DZOU</div>
        <div class="team-role">CEO â€” Chief Executive Officer</div>
        <div class="team-quote">We believe in a world where all women and girls have access to the same opportunities, the same rights, and the same respect.</div>
      </div>
      <div class="team-card">
        <div class="team-avatar">ðŸ‘¨â€ðŸ’»</div>
        <div class="team-name">Lucien DZOU</div>
        <div class="team-role">CTO â€” Chief Technology Officer</div>
        <div class="team-quote">We don't settle for copying existing models. We do R&D to create software that understands our realities, our challenges, and our ambitions.</div>
      </div>
    </div>
  </div>
</section>

<!-- â•â•â• TRUSTED BY â•â•â• -->
<section id="trusted">
  <div class="trusted-inner rv">
    <div class="trusted-label">Ils nous font confiance â€” They trust us</div>
    <div class="trusted-logos">
      <div class="trusted-logo">ðŸŒ¸ Fondation Elles Plus Africa</div>
      <div class="trusted-logo">ðŸ”µ Flexi Care</div>
      <div class="trusted-logo">ðŸ”¶ Orin Consulting Group Ltd</div>
      <div class="trusted-logo">ðŸŸ¢ CREMIN-CAM</div>
      <div class="trusted-logo">â¬œ Snow White Group</div>
    </div>
  </div>
</section>

<!-- â•â•â• PERSPECTIVES â•â•â• -->
<section id="perspectives">
  <div class="persp-inner">
    <div class="persp-head">
      <div class="rv">
        <span class="tag-green">Perspectives & Ambition</span>
        <h2>Where DigiTexia is heading.</h2>
        <p class="lead">DigiTexia aims to actively contribute to the development of the digital economy in Africa. At medium and long term, the company has clear ambitions for its pan-African expansion.</p>
      </div>
      <div class="rv d1">
        <div style="background:var(--ink-2);border:1px solid var(--green-bdr);border-radius:16px;padding:1.75rem">
          <div style="font-size:.62rem;font-weight:700;letter-spacing:.1em;text-transform:uppercase;color:var(--green);margin-bottom:.75rem">Africa needs a technological leap</div>
          <div style="font-size:.875rem;color:var(--muted-lt);line-height:1.75">Africa doesn't need technological catch-up â€” it needs a <strong style="color:var(--white)">technological leap forward.</strong> Digital transformation is the lever that allows skipping directly from absent infrastructure to cutting-edge innovation.</div>
          <div style="margin-top:1rem;font-size:.72rem;color:var(--muted);font-style:italic">â€” Cheikh Modibo Diarra, astrophysicist &amp; Malian statesman</div>
        </div>
      </div>
    </div>

    <div class="persp-cards rv">
      <div class="persp-card">
        <span class="persp-ico">ðŸš€</span>
        <div class="persp-title">Develop High-Impact Solutions</div>
        <div class="persp-desc">Continue building innovative technological solutions that address real problems and deliver measurable impact for African organizations at every scale.</div>
      </div>
      <div class="persp-card">
        <span class="persp-ico">ðŸŒ</span>
        <div class="persp-title">Pan-African Expansion</div>
        <div class="persp-desc">Extend DigiTexia's presence across multiple African countries, bringing our platforms and expertise to organizations throughout the continent.</div>
      </div>
      <div class="persp-card">
        <span class="persp-ico">ðŸ›ï¸</span>
        <div class="persp-title">Modernize Enterprises & Institutions</div>
        <div class="persp-desc">Participate actively in the digital modernization of both private enterprises and public institutions â€” contributing to a performant, innovative, and durable African digital ecosystem.</div>
      </div>
    </div>

    <div class="quote-block rv d2">
      <div class="quote-text">Digital transformation is not a technological project â€” it is a societal project. It is not about digitizing what already exists, but about inventing what does not yet exist.</div>
      <div class="quote-author">â€” Gilles Babinet, entrepreneur &amp; co-president of the Conseil national du numÃ©rique (France)</div>
    </div>
  </div>
</section>

<!-- â•â•â• FINAL CTA â•â•â• -->
<section id="why-cta">
  <div class="cta-inner rv">
    <span class="tag">Get Started</span>
    <h2>Ready to transform your organization with DigiTexia?</h2>
    <p class="lead">In a world where digital transformation is becoming unavoidable, DigiTexia positions itself as a strategic partner for organizations that want to harness the full power of digital technology.</p>
    <div class="cta-btns">
      <a href="index.html#cta-final" class="btn-pri">Request a Free Consultation <svg width="14" height="14" viewBox="0 0 14 14" fill="none"><path d="M2 7h10M7 2l5 5-5 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
      <a href="solutions.html" class="btn-sec">Explore Our Solutions â†’</a>
    </div>
  </div>
</section>

<!-- â”€â”€â”€ FOOTER â”€â”€â”€ -->
@endsection

