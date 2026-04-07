@extends('index')

@section('page_title', 'Team Members — DigiTexia Technology & Innovation')

@push('styles')
<link href="https://fonts.googleapis.com/css2?family=Clash+Display:wght@400;500;600;700&family=Plus+Jakarta+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/team-digitexia.css') }}">
@endpush

@section('contain')
<!-- â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•
     HERO
â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â• -->
<section id="hero">
  <div class="hero-bg"></div>
  <div class="hero-grid-lines"></div>
  <div class="hero-inner rv">
    <div class="hero-breadcrumb">
      <a href="index.html">Home</a><span>â€º</span>
      <a href="#">Company</a><span>â€º</span>
      <span class="curr">Teams</span>
    </div>
    <span class="tag">Our Team</span>
    <h1>The people building<br><em>Africa's digital future.</em></h1>
    <p class="lead">Behind every solution DigiTexia delivers is a team that deeply believes in the power of technology to transform organizations â€” and puts that conviction into every decision, every line of code, every day.</p>

    <div class="hero-stats rv d2">
      <div class="hero-stat">
        <div class="hero-stat-num" style="color:#93C5FD">2</div>
        <div class="hero-stat-lbl">Co-Founders</div>
      </div>
      <div class="hero-stat">
        <div class="hero-stat-num" style="color:var(--green)">5+</div>
        <div class="hero-stat-lbl">Trusted Clients</div>
      </div>
      <div class="hero-stat">
        <div class="hero-stat-num" style="color:#FCD34D">5</div>
        <div class="hero-stat-lbl">Products Built</div>
      </div>
      <div class="hero-stat">
        <div class="hero-stat-num" style="color:#F9A8D4">ðŸŒ</div>
        <div class="hero-stat-lbl">Pan-African Vision</div>
      </div>
    </div>
  </div>
</section>

<!-- â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•
     FOUNDERS
â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â• -->
<section id="leadership">
  <div class="lead-inner">
    <div class="section-header rv">
      <span class="tag">Leadership</span>
      <h2>The founders driving DigiTexia</h2>
      <p class="lead">Two visionaries united by a single mission: to make digital transformation accessible, impactful, and durable for African organizations.</p>
    </div>

    <div class="founders-grid">

      <!-- CEO -->
      <div class="founder-card rv d1">
        <div class="founder-card-top">
          <div class="founder-avatar" style="background:rgba(18,70,240,.12)">ðŸ‘©â€ðŸ’¼</div>
          <div class="founder-name">Anne DZOU</div>
          <div class="founder-role ceo">âš¡ CEO â€” Chief Executive Officer</div>
        </div>
        <div class="founder-card-body">
          <p class="founder-bio">Anne leads DigiTexia's vision and strategy, driving the company's mission to become a pan-African reference in digital transformation. With a deep commitment to inclusive technology, she ensures that DigiTexia's solutions create real opportunities â€” for organizations and for the people within them.</p>
          <div class="founder-quote blue-q">We believe in a world where all women and girls have access to the same opportunities, the same rights, and the same respect.
          </div>
          <div class="founder-tags">
            <span class="ftag">Vision & Strategy</span>
            <span class="ftag">Business Development</span>
            <span class="ftag">Inclusive Tech</span>
            <span class="ftag">Pan-African Growth</span>
            <span class="ftag">Client Relations</span>
          </div>
        </div>
      </div>

      <!-- CTO -->
      <div class="founder-card rv d2">
        <div class="founder-card-top">
          <div class="founder-avatar" style="background:rgba(22,199,132,.1)">ðŸ‘¨â€ðŸ’»</div>
          <div class="founder-name">Lucien DZOU</div>
          <div class="founder-role cto">ðŸ”¬ CTO â€” Chief Technology Officer</div>
        </div>
        <div class="founder-card-body">
          <p class="founder-bio">Lucien leads all technical R&D at DigiTexia, architecting scalable platforms and overseeing product development across the full portfolio. His conviction is that great software must understand the context it serves â€” which is why every DigiTexia product is built from first principles, not copied from existing models.</p>
          <div class="founder-quote green-q">We don't settle for copying existing models. We do R&D to create software that understands our realities, our challenges, and our ambitions.
          </div>
          <div class="founder-tags">
            <span class="ftag">R&D & Architecture</span>
            <span class="ftag">Product Development</span>
            <span class="ftag">Agile Methodology</span>
            <span class="ftag">System Design</span>
            <span class="ftag">Tech Strategy</span>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•
     DEPARTMENT TEAMS
â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â• -->
<section id="departments">
  <div class="dept-inner">
    <div class="section-header rv">
      <span class="tag">Our Departments</span>
      <h2>Organized to deliver excellence</h2>
      <p class="lead">DigiTexia operates across specialized teams, each focused on a critical dimension of delivering and evolving our digital solutions â€” from development to client success.</p>
    </div>

    <div class="dept-grid">

      <div class="dept-card rv d1" style="border-top:2px solid var(--blue)">
        <div class="dept-ico-wrap" style="background:var(--blue-dim);border-color:var(--blue-bdr)">ðŸ’»</div>
        <div class="dept-name">Engineering & Development</div>
        <div class="dept-desc">The core product team â€” designing, building, and evolving all DigiTexia platforms using modern technologies and agile methods.</div>
        <div class="dept-members">
          <div class="dept-member">
            <div class="dept-member-dot" style="background:#93C5FD"></div>
            <div>
              <div class="dept-member-name">Lucien DZOU</div>
              <div class="dept-member-title">CTO â€” Lead Architect</div>
            </div>
          </div>
          <div class="dept-member">
            <div class="dept-member-dot" style="background:#93C5FD"></div>
            <div>
              <div class="dept-member-name">Frontend Engineers</div>
              <div class="dept-member-title">Web & Mobile Interfaces</div>
            </div>
          </div>
          <div class="dept-member">
            <div class="dept-member-dot" style="background:#93C5FD"></div>
            <div>
              <div class="dept-member-name">Backend Engineers</div>
              <div class="dept-member-title">APIs, Systems & Security</div>
            </div>
          </div>
        </div>
      </div>

      <div class="dept-card rv d2" style="border-top:2px solid var(--green)">
        <div class="dept-ico-wrap" style="background:var(--green-dim);border-color:var(--green-bdr)">ðŸŽ¯</div>
        <div class="dept-name">Strategy & Business Development</div>
        <div class="dept-desc">Driving DigiTexia's growth, partnerships, and expansion strategy across African markets â€” identifying new opportunities and client relationships.</div>
        <div class="dept-members">
          <div class="dept-member">
            <div class="dept-member-dot" style="background:var(--green)"></div>
            <div>
              <div class="dept-member-name">Anne DZOU</div>
              <div class="dept-member-title">CEO â€” Strategic Director</div>
            </div>
          </div>
          <div class="dept-member">
            <div class="dept-member-dot" style="background:var(--green)"></div>
            <div>
              <div class="dept-member-name">Business Developers</div>
              <div class="dept-member-title">Client Acquisition & Growth</div>
            </div>
          </div>
          <div class="dept-member">
            <div class="dept-member-dot" style="background:var(--green)"></div>
            <div>
              <div class="dept-member-name">Partnership Team</div>
              <div class="dept-member-title">Partnerships & Alliances</div>
            </div>
          </div>
        </div>
      </div>

      <div class="dept-card rv d3" style="border-top:2px solid #F59E0B">
        <div class="dept-ico-wrap" style="background:rgba(245,158,11,.12);border-color:rgba(245,158,11,.28)">ðŸ”„</div>
        <div class="dept-name">Digital Transformation Consulting</div>
        <div class="dept-desc">Accompanying clients through their full digital journey â€” from business process analysis to deployment and post-launch evolution support.</div>
        <div class="dept-members">
          <div class="dept-member">
            <div class="dept-member-dot" style="background:#FCD34D"></div>
            <div>
              <div class="dept-member-name">Digital Consultants</div>
              <div class="dept-member-title">Process Analysis & Design</div>
            </div>
          </div>
          <div class="dept-member">
            <div class="dept-member-dot" style="background:#FCD34D"></div>
            <div>
              <div class="dept-member-name">Implementation Specialists</div>
              <div class="dept-member-title">Deployment & Integration</div>
            </div>
          </div>
          <div class="dept-member">
            <div class="dept-member-dot" style="background:#FCD34D"></div>
            <div>
              <div class="dept-member-name">Training Team</div>
              <div class="dept-member-title">User Onboarding & Training</div>
            </div>
          </div>
        </div>
      </div>

      <div class="dept-card rv d1" style="border-top:2px solid #EC4899">
        <div class="dept-ico-wrap" style="background:rgba(236,72,153,.12);border-color:rgba(236,72,153,.28)">ðŸ§ª</div>
        <div class="dept-name">Quality Assurance & Testing</div>
        <div class="dept-desc">Ensuring every solution shipped by DigiTexia meets international standards for performance, reliability, and security before reaching clients.</div>
        <div class="dept-members">
          <div class="dept-member">
            <div class="dept-member-dot" style="background:#F9A8D4"></div>
            <div>
              <div class="dept-member-name">QA Engineers</div>
              <div class="dept-member-title">Testing & Validation</div>
            </div>
          </div>
          <div class="dept-member">
            <div class="dept-member-dot" style="background:#F9A8D4"></div>
            <div>
              <div class="dept-member-name">Security Specialists</div>
              <div class="dept-member-title">Security & Compliance</div>
            </div>
          </div>
        </div>
      </div>

      <div class="dept-card rv d2" style="border-top:2px solid #6366F1">
        <div class="dept-ico-wrap" style="background:rgba(99,102,241,.12);border-color:rgba(99,102,241,.28)">ðŸŽ¨</div>
        <div class="dept-name">Design & User Experience</div>
        <div class="dept-desc">Crafting interfaces that are as intuitive as they are powerful â€” ensuring every DigiTexia product is a pleasure to use, for every type of organization.</div>
        <div class="dept-members">
          <div class="dept-member">
            <div class="dept-member-dot" style="background:#A5B4FC"></div>
            <div>
              <div class="dept-member-name">UX/UI Designers</div>
              <div class="dept-member-title">Interface & Experience Design</div>
            </div>
          </div>
          <div class="dept-member">
            <div class="dept-member-dot" style="background:#A5B4FC"></div>
            <div>
              <div class="dept-member-name">Brand & Visual Team</div>
              <div class="dept-member-title">Brand Identity & Visuals</div>
            </div>
          </div>
        </div>
      </div>

      <div class="dept-card rv d3" style="border-top:2px solid #0EA5E9">
        <div class="dept-ico-wrap" style="background:rgba(14,165,233,.12);border-color:rgba(14,165,233,.28)">ðŸ›¡ï¸</div>
        <div class="dept-name">Client Success & Support</div>
        <div class="dept-desc">Long-term technical support, maintenance, and continuous improvement â€” ensuring clients extract maximum value from their DigiTexia solutions over time.</div>
        <div class="dept-members">
          <div class="dept-member">
            <div class="dept-member-dot" style="background:#7DD3FC"></div>
            <div>
              <div class="dept-member-name">Support Engineers</div>
              <div class="dept-member-title">Technical Maintenance</div>
            </div>
          </div>
          <div class="dept-member">
            <div class="dept-member-dot" style="background:#7DD3FC"></div>
            <div>
              <div class="dept-member-name">Client Success Managers</div>
              <div class="dept-member-title">Relationship & Evolution</div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•
     CULTURE & MANIFESTO
â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â• -->
<section id="culture">
  <div class="culture-inner">
    <div class="culture-layout">

      <div class="rv">
        <span class="tag">Our Culture</span>
        <h2>What it means to work at DigiTexia.</h2>
        <p class="lead" style="margin-bottom:2rem">We've built a culture rooted in the belief that technology must serve people â€” and that the best solutions come from teams that combine talent, purpose, and mutual respect.</p>
        <div class="culture-pills">
          <div class="culture-pill">
            <div class="culture-pill-ico">ðŸ’¡</div>
            <div>
              <div class="culture-pill-title">Innovation is encouraged, not optional</div>
              <div class="culture-pill-desc">Every team member is empowered to propose ideas, challenge assumptions, and experiment â€” because innovation is a culture, not a department.</div>
            </div>
          </div>
          <div class="culture-pill">
            <div class="culture-pill-ico">â­</div>
            <div>
              <div class="culture-pill-title">Excellence in everything we ship</div>
              <div class="culture-pill-desc">We hold every product, every line of code, and every client interaction to the same standard: reliable, secure, and genuinely useful.</div>
            </div>
          </div>
          <div class="culture-pill">
            <div class="culture-pill-ico">ðŸ¤</div>
            <div>
              <div class="culture-pill-title">Collaboration over hierarchy</div>
              <div class="culture-pill-desc">We work in true partnership with each other and with our clients â€” the best solutions emerge from shared understanding, not top-down directives.</div>
            </div>
          </div>
          <div class="culture-pill">
            <div class="culture-pill-ico">ðŸ’¥</div>
            <div>
              <div class="culture-pill-title">Impact is the only metric that matters</div>
              <div class="culture-pill-desc">We measure our success by the concrete improvement our solutions create â€” not by features shipped or lines written.</div>
            </div>
          </div>
        </div>
      </div>

      <div class="rv d2">
        <div class="manifesto">
          <div class="manifesto-label">The DigiTexia Manifesto</div>
          <div class="manifesto-lines">
            <div class="manifesto-line">We don't just write code. <strong>We deliver value, continuously.</strong></div>
            <div class="manifesto-line">We don't copy existing models. <strong>We do R&D to create software that understands African realities.</strong></div>
            <div class="manifesto-line">We don't build generic products. <strong>We design solutions for the specific challenges of each organization.</strong></div>
            <div class="manifesto-line">We don't disappear after deployment. <strong>We stay â€” and we grow with you.</strong></div>
            <div class="manifesto-line">We believe digital transformation is not a technology project. <strong>It is a people project.</strong></div>
            <div class="manifesto-line">We believe Africa doesn't need catch-up. <strong>It needs a technological leap forward.</strong></div>
          </div>
          <div class="manifesto-footer">
            <div class="manifesto-dot"></div>
            DigiTexia Corporate â€” Technology &amp; Innovation Â· YaoundÃ©, Cameroon
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•
     JOIN US
â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â• -->
<section id="join">
  <div class="join-inner">
    <div class="join-layout">
      <div class="rv">
        <span class="tag">Carriers â€” Join Us</span>
        <h2>We are always looking for talented people.</h2>
        <p class="lead" style="margin-bottom:2rem">DigiTexia is growing. If you are passionate about technology, driven by impact, and believe in Africa's digital future â€” we want to hear from you.</p>
        <div class="roles-list">
          <div class="role-card">
            <div class="role-ico">ðŸ’»</div>
            <div class="role-body">
              <div class="role-title">Full-Stack Web Developer</div>
              <div class="role-meta"><span>ðŸŒ Remote / YaoundÃ©</span><span>â± Full-time</span></div>
            </div>
            <div class="role-badge open">Open</div>
          </div>
          <div class="role-card">
            <div class="role-ico">ðŸ“±</div>
            <div class="role-body">
              <div class="role-title">Mobile Developer (React Native)</div>
              <div class="role-meta"><span>ðŸŒ Remote / YaoundÃ©</span><span>â± Full-time</span></div>
            </div>
            <div class="role-badge open">Open</div>
          </div>
          <div class="role-card">
            <div class="role-ico">ðŸŽ¨</div>
            <div class="role-body">
              <div class="role-title">UX/UI Product Designer</div>
              <div class="role-meta"><span>ðŸŒ Remote / YaoundÃ©</span><span>â± Full-time</span></div>
            </div>
            <div class="role-badge open">Open</div>
          </div>
          <div class="role-card">
            <div class="role-ico">ðŸ”„</div>
            <div class="role-body">
              <div class="role-title">Digital Transformation Consultant</div>
              <div class="role-meta"><span>ðŸŒ Cameroon</span><span>â± Full-time</span></div>
            </div>
            <div class="role-badge soon">Soon</div>
          </div>
          <div class="role-card">
            <div class="role-ico">ðŸ“Š</div>
            <div class="role-body">
              <div class="role-title">Business Developer â€” West Africa</div>
              <div class="role-meta"><span>ðŸŒ West Africa</span><span>â± Full-time</span></div>
            </div>
            <div class="role-badge soon">Soon</div>
          </div>
        </div>
      </div>

      <div class="rv d2">
        <div style="background:var(--ink-3);border:1px solid var(--bdr);border-radius:18px;padding:2rem;margin-bottom:1.5rem">
          <div style="font-size:.62rem;font-weight:700;text-transform:uppercase;letter-spacing:.1em;color:var(--muted);margin-bottom:1.25rem">Why Join DigiTexia</div>
          <div class="perks-grid">
            <div class="perk">
              <div class="perk-ico">ðŸŒ</div>
              <div>
                <div class="perk-title">Pan-African Impact</div>
                <div class="perk-desc">Work on solutions that transform organizations across an entire continent</div>
              </div>
            </div>
            <div class="perk">
              <div class="perk-ico">ðŸ”¬</div>
              <div>
                <div class="perk-title">Real R&D</div>
                <div class="perk-desc">Build genuinely new products â€” not clones of existing tools</div>
              </div>
            </div>
            <div class="perk">
              <div class="perk-ico">ðŸ“ˆ</div>
              <div>
                <div class="perk-title">Fast Growth</div>
                <div class="perk-desc">Evolve quickly in a startup where your contributions are directly visible</div>
              </div>
            </div>
            <div class="perk">
              <div class="perk-ico">ðŸ¤</div>
              <div>
                <div class="perk-title">Strong Culture</div>
                <div class="perk-desc">A team united by values, not just tasks â€” collaboration at its core</div>
              </div>
            </div>
            <div class="perk">
              <div class="perk-ico">ðŸŽ“</div>
              <div>
                <div class="perk-title">Continuous Learning</div>
                <div class="perk-desc">Access to training resources and a culture of knowledge sharing</div>
              </div>
            </div>
            <div class="perk">
              <div class="perk-ico">ðŸŒ</div>
              <div>
                <div class="perk-title">Remote-Friendly</div>
                <div class="perk-desc">Flexible working arrangements for the right talent, wherever they are</div>
              </div>
            </div>
          </div>
        </div>
        <a href="mailto:contactdigitexia@@gmail.com" class="btn-pri" style="width:100%;justify-content:center">
          Send Your Application â†’
        </a>
        <div style="text-align:center;margin-top:.85rem;font-size:.78rem;color:var(--muted)">contactdigitexia@@gmail.com Â· (+237) 650 945 280</div>
      </div>
    </div>
  </div>
</section>

<!-- â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•
     CTA
â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â• -->
<section id="team-cta">
  <div class="cta-inner rv">
    <span class="tag">Work With Us</span>
    <h2>Let's build Africa's digital future together.</h2>
    <p class="lead">Whether you want to partner with DigiTexia, join our team, or transform your organization â€” we would love to start the conversation.</p>
    <div class="cta-btns">
      <a href="index.html#cta-final" class="btn-pri">Request a Consultation <svg width="14" height="14" viewBox="0 0 14 14" fill="none"><path d="M2 7h10M7 2l5 5-5 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
      <a href="solutions.html" class="btn-sec">Explore Our Solutions â†’</a>
    </div>
  </div>
</section>

<!-- â”€â”€â”€ FOOTER â”€â”€â”€ -->
@endsection
