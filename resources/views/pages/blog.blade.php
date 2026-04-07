@extends('index')

@section('page_title', 'Our Blogs — DigiTexia Technology & Innovation')

@push('styles')
<link href="https://fonts.googleapis.com/css2?family=Clash+Display:wght@400;500;600;700&family=Plus+Jakarta+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/blog-digitexia.css') }}">
@endpush

@section('contain')
<!-- â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•
     HERO
â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â• -->
<section id="hero">
  <div class="hero-bg"></div><div class="hero-grid-ln"></div>
  <div class="hero-inner rv">
    <div class="hero-crumb">
      <a href="index.html">Home</a><span>â€º</span>
      <span class="curr">Blog</span>
    </div>
    <span class="tag" style="margin-bottom:1.25rem;display:inline-block">DigiTexia Blog</span>
    <h1>Insights on <em>digital transformation</em><br>across Africa.</h1>
    <p class="lead">Perspectives, deep dives, and practical guides on technology, innovation, and building the digital future of African organizations â€” from the DigiTexia team.</p>

    <div class="search-bar rv d1">
      <span class="search-icon">ðŸ”</span>
      <input type="text" placeholder="Search articles, topics, productsâ€¦">
      <kbd>âŒ˜K</kbd>
    </div>

    <div class="cat-pills rv d2">
      <span class="cat-pill active">All Articles</span>
      <span class="cat-pill">Digital Transformation</span>
      <span class="cat-pill">Product Updates</span>
      <span class="cat-pill">Africa & Tech</span>
      <span class="cat-pill">How-to Guides</span>
      <span class="cat-pill">Innovation</span>
      <span class="cat-pill">Company News</span>
    </div>
  </div>
</section>

<!-- â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•
     FEATURED POST
â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â• -->
<section id="featured">
  <div class="feat-inner rv">
    <div class="feat-card">
      <div class="feat-visual">
        <div class="feat-visual-bg"></div>
        <div class="feat-badge">âœ¦ Featured Article</div>
        <div class="feat-visual-ico">ðŸŒ</div>
      </div>
      <div class="feat-body">
        <div class="feat-meta">
          <span class="feat-cat" style="background:var(--blue-dim);border-color:var(--blue-bdr);color:#93C5FD">Africa & Tech</span>
          <span class="feat-date">March 2025</span>
          <span class="feat-read">Â· 8 min read</span>
        </div>
        <h3>Africa doesn't need technological catch-up â€” it needs a technological leap forward.</h3>
        <p>The narrative of African technology has long been framed around "catching up" with the West. But this framing is fundamentally wrong â€” and limiting. Africa has a unique opportunity to leapfrog outdated infrastructure and build digital systems designed for tomorrow, not yesterday. Here is why the continent's digital transformation is not a delay, but an advantage.</p>
        <div class="feat-author">
          <div class="feat-av" style="background:rgba(18,70,240,.12)">ðŸ‘©â€ðŸ’¼</div>
          <div>
            <div class="feat-author-name">Anne DZOU</div>
            <div class="feat-author-role">CEO, DigiTexia</div>
          </div>
        </div>
        <a href="#" class="feat-link">Read full article <svg width="14" height="14" viewBox="0 0 14 14" fill="none"><path d="M2 7h10M7 2l5 5-5 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
      </div>
    </div>
  </div>
</section>

<!-- â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•
     BLOG GRID + SIDEBAR
â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â• -->
<section id="blog-grid">
  <div class="bg-inner wrap">

    <!-- POSTS -->
    <div class="posts-section">

      <!-- Digital Transformation -->
      <h3>Digital Transformation</h3>
      <div class="posts-grid">

        <div class="post-card rv d1">
          <div class="post-thumb">
            <div class="post-thumb-bg" style="background:linear-gradient(135deg,rgba(18,70,240,.12),rgba(99,102,241,.08))"></div>
            <span style="position:relative;z-index:1">ðŸ”„</span>
          </div>
          <div class="post-body">
            <div class="post-meta">
              <span class="post-cat" style="background:var(--blue-dim);border-color:var(--blue-bdr);color:#93C5FD">Digital Transformation</span>
              <span class="post-date">Feb 2025</span>
            </div>
            <h4>Why digitalization fails in African enterprises â€” and how to fix it</h4>
            <p>Most digital transformation projects fail not because of the technology, but because of misalignment between tools and organizational realities. Here are the five root causes â€” and how DigiTexia's approach addresses each one.</p>
            <div class="post-footer">
              <div style="display:flex;align-items:center;gap:.5rem">
                <div class="post-av" style="background:rgba(22,199,132,.1)">ðŸ‘¨â€ðŸ’»</div>
                <div>
                  <div class="post-author">Lucien DZOU</div>
                  <div class="post-read">6 min read</div>
                </div>
              </div>
              <span class="post-arrow">â†’</span>
            </div>
          </div>
        </div>

        <div class="post-card rv d2">
          <div class="post-thumb">
            <div class="post-thumb-bg" style="background:linear-gradient(135deg,rgba(22,199,132,.1),rgba(14,165,233,.08))"></div>
            <span style="position:relative;z-index:1">ðŸ“‹</span>
          </div>
          <div class="post-body">
            <div class="post-meta">
              <span class="post-cat" style="background:var(--blue-dim);border-color:var(--blue-bdr);color:#93C5FD">Digital Transformation</span>
              <span class="post-date">Jan 2025</span>
            </div>
            <h4>The true cost of manual processes: what your spreadsheets are costing you</h4>
            <p>Organizations relying on Excel, email chains, and paper documents are bleeding money silently. We break down the real financial and operational cost of staying manual â€” with data to back it up.</p>
            <div class="post-footer">
              <div style="display:flex;align-items:center;gap:.5rem">
                <div class="post-av" style="background:var(--blue-dim)">ðŸ‘©â€ðŸ’¼</div>
                <div>
                  <div class="post-author">Anne DZOU</div>
                  <div class="post-read">5 min read</div>
                </div>
              </div>
              <span class="post-arrow">â†’</span>
            </div>
          </div>
        </div>

        <div class="post-card rv d3">
          <div class="post-thumb">
            <div class="post-thumb-bg" style="background:linear-gradient(135deg,rgba(245,158,11,.1),rgba(236,72,153,.06))"></div>
            <span style="position:relative;z-index:1">âš¡</span>
          </div>
          <div class="post-body">
            <div class="post-meta">
              <span class="post-cat" style="background:var(--blue-dim);border-color:var(--blue-bdr);color:#93C5FD">Digital Transformation</span>
              <span class="post-date">Dec 2024</span>
            </div>
            <h4>Agile digital transformation: how to deliver value in weeks, not months</h4>
            <p>At DigiTexia, we believe a digital project should not take months before producing value. Here is our methodology for delivering working, impactful solutions rapidly â€” without sacrificing quality.</p>
            <div class="post-footer">
              <div style="display:flex;align-items:center;gap:.5rem">
                <div class="post-av" style="background:rgba(22,199,132,.1)">ðŸ‘¨â€ðŸ’»</div>
                <div>
                  <div class="post-author">Lucien DZOU</div>
                  <div class="post-read">7 min read</div>
                </div>
              </div>
              <span class="post-arrow">â†’</span>
            </div>
          </div>
        </div>

        <div class="post-card rv d4">
          <div class="post-thumb">
            <div class="post-thumb-bg" style="background:linear-gradient(135deg,rgba(99,102,241,.12),rgba(18,70,240,.08))"></div>
            <span style="position:relative;z-index:1">ðŸ›ï¸</span>
          </div>
          <div class="post-body">
            <div class="post-meta">
              <span class="post-cat" style="background:var(--blue-dim);border-color:var(--blue-bdr);color:#93C5FD">Digital Transformation</span>
              <span class="post-date">Nov 2024</span>
            </div>
            <h4>Digitalizing African public institutions: challenges, opportunities, and first steps</h4>
            <p>Public institutions face unique challenges in digital transformation â€” legacy processes, compliance requirements, and limited budgets. We explore a practical roadmap for modernization.</p>
            <div class="post-footer">
              <div style="display:flex;align-items:center;gap:.5rem">
                <div class="post-av" style="background:var(--blue-dim)">ðŸ‘©â€ðŸ’¼</div>
                <div>
                  <div class="post-author">Anne DZOU</div>
                  <div class="post-read">9 min read</div>
                </div>
              </div>
              <span class="post-arrow">â†’</span>
            </div>
          </div>
        </div>

      </div>

      <!-- Product Updates -->
      <h3>Product Updates</h3>
      <div class="posts-grid">

        <div class="post-card rv d1">
          <div class="post-thumb">
            <div class="post-thumb-bg" style="background:linear-gradient(135deg,rgba(14,165,233,.12),rgba(22,199,132,.06))"></div>
            <span style="position:relative;z-index:1">ðŸ“¦</span>
          </div>
          <div class="post-body">
            <div class="post-meta">
              <span class="post-cat" style="background:rgba(14,165,233,.12);border-color:rgba(14,165,233,.28);color:#7DD3FC">Product Update</span>
              <span class="post-date">Mar 2025</span>
            </div>
            <h4>InventoryPro 2.0: multi-location tracking and real-time stock alerts are here</h4>
            <p>The latest version of InventoryPro introduces cross-site inventory management, automated low-stock alerts, and an enhanced consumption analytics dashboard. Here's everything that's new.</p>
            <div class="post-footer">
              <div style="display:flex;align-items:center;gap:.5rem">
                <div class="post-av" style="background:rgba(22,199,132,.1)">ðŸ‘¨â€ðŸ’»</div>
                <div>
                  <div class="post-author">Lucien DZOU</div>
                  <div class="post-read">4 min read</div>
                </div>
              </div>
              <span class="post-arrow">â†’</span>
            </div>
          </div>
        </div>

        <div class="post-card rv d2">
          <div class="post-thumb">
            <div class="post-thumb-bg" style="background:linear-gradient(135deg,rgba(22,199,132,.1),rgba(18,70,240,.06))"></div>
            <span style="position:relative;z-index:1">âŒš</span>
          </div>
          <div class="post-body">
            <div class="post-meta">
              <span class="post-cat" style="background:var(--green-dim);border-color:var(--green-bdr);color:var(--green)">Product Update</span>
              <span class="post-date">Feb 2025</span>
            </div>
            <h4>Introducing MedTrace: patient records accessible in under 3 seconds</h4>
            <p>Our most innovative product to date â€” a QR-coded wearable that gives any authorized healthcare professional instant access to a patient's full medical record. Here's how it works and why it matters.</p>
            <div class="post-footer">
              <div style="display:flex;align-items:center;gap:.5rem">
                <div class="post-av" style="background:rgba(22,199,132,.1)">ðŸ‘¨â€ðŸ’»</div>
                <div>
                  <div class="post-author">Lucien DZOU</div>
                  <div class="post-read">6 min read</div>
                </div>
              </div>
              <span class="post-arrow">â†’</span>
            </div>
          </div>
        </div>

        <div class="post-card rv d3">
          <div class="post-thumb">
            <div class="post-thumb-bg" style="background:linear-gradient(135deg,rgba(245,158,11,.1),rgba(245,158,11,.05))"></div>
            <span style="position:relative;z-index:1">ðŸ“Š</span>
          </div>
          <div class="post-body">
            <div class="post-meta">
              <span class="post-cat" style="background:rgba(245,158,11,.12);border-color:rgba(245,158,11,.28);color:#FCD34D">Product Update</span>
              <span class="post-date">Jan 2025</span>
            </div>
            <h4>Perfomia: new attendance geolocation and automated appraisal modules</h4>
            <p>The latest Perfomia release adds GPS-verified attendance, automated KPI scoring, and a revamped team comparison dashboard for managers. A full breakdown of what's changed.</p>
            <div class="post-footer">
              <div style="display:flex;align-items:center;gap:.5rem">
                <div class="post-av" style="background:rgba(22,199,132,.1)">ðŸ‘¨â€ðŸ’»</div>
                <div>
                  <div class="post-author">Lucien DZOU</div>
                  <div class="post-read">5 min read</div>
                </div>
              </div>
              <span class="post-arrow">â†’</span>
            </div>
          </div>
        </div>

        <div class="post-card rv d4">
          <div class="post-thumb">
            <div class="post-thumb-bg" style="background:linear-gradient(135deg,rgba(236,72,153,.1),rgba(99,102,241,.07))"></div>
            <span style="position:relative;z-index:1">âœ‰ï¸</span>
          </div>
          <div class="post-body">
            <div class="post-meta">
              <span class="post-cat" style="background:rgba(236,72,153,.1);border-color:rgba(236,72,153,.25);color:#F9A8D4">Product Update</span>
              <span class="post-date">Dec 2024</span>
            </div>
            <h4>DigiCourier: how CREMIN-CAM eliminated paper mail tracking across 3 departments</h4>
            <p>A behind-the-scenes look at how we deployed DigiCourier for one of our enterprise clients â€” the challenges faced, the solutions engineered, and the results achieved within the first 60 days.</p>
            <div class="post-footer">
              <div style="display:flex;align-items:center;gap:.5rem">
                <div class="post-av" style="background:var(--blue-dim)">ðŸ‘©â€ðŸ’¼</div>
                <div>
                  <div class="post-author">Anne DZOU</div>
                  <div class="post-read">8 min read</div>
                </div>
              </div>
              <span class="post-arrow">â†’</span>
            </div>
          </div>
        </div>

      </div>

      <!-- Africa & Innovation -->
      <h3>Africa & Innovation</h3>
      <div class="posts-grid">

        <div class="post-card rv d1">
          <div class="post-thumb">
            <div class="post-thumb-bg" style="background:linear-gradient(135deg,rgba(22,199,132,.12),rgba(18,70,240,.06))"></div>
            <span style="position:relative;z-index:1">ðŸš€</span>
          </div>
          <div class="post-body">
            <div class="post-meta">
              <span class="post-cat" style="background:var(--green-dim);border-color:var(--green-bdr);color:var(--green)">Africa & Tech</span>
              <span class="post-date">Mar 2025</span>
            </div>
            <h4>The African startup ecosystem in 2025: what's working and what still needs fixing</h4>
            <p>From Lagos to Nairobi to YaoundÃ© â€” the African tech startup space is maturing rapidly. But significant structural challenges remain. Here is our honest assessment of where we stand today.</p>
            <div class="post-footer">
              <div style="display:flex;align-items:center;gap:.5rem">
                <div class="post-av" style="background:var(--blue-dim)">ðŸ‘©â€ðŸ’¼</div>
                <div>
                  <div class="post-author">Anne DZOU</div>
                  <div class="post-read">10 min read</div>
                </div>
              </div>
              <span class="post-arrow">â†’</span>
            </div>
          </div>
        </div>

        <div class="post-card rv d2">
          <div class="post-thumb">
            <div class="post-thumb-bg" style="background:linear-gradient(135deg,rgba(99,102,241,.12),rgba(14,165,233,.07))"></div>
            <span style="position:relative;z-index:1">ðŸ¥</span>
          </div>
          <div class="post-body">
            <div class="post-meta">
              <span class="post-cat" style="background:var(--green-dim);border-color:var(--green-bdr);color:var(--green)">Africa & Tech</span>
              <span class="post-date">Jan 2025</span>
            </div>
            <h4>Digital health in Africa: why the paper medical record is the continent's biggest silent crisis</h4>
            <p>Millions of patients across Africa receive treatment without access to their medical history â€” every single day. The consequences are preventable deaths, drug interactions, and wasted resources. Technology can fix this.</p>
            <div class="post-footer">
              <div style="display:flex;align-items:center;gap:.5rem">
                <div class="post-av" style="background:rgba(22,199,132,.1)">ðŸ‘¨â€ðŸ’»</div>
                <div>
                  <div class="post-author">Lucien DZOU</div>
                  <div class="post-read">7 min read</div>
                </div>
              </div>
              <span class="post-arrow">â†’</span>
            </div>
          </div>
        </div>

      </div>

      <div class="load-more rv">
        <a href="#" class="btn-sec">Load more articles <svg width="14" height="14" viewBox="0 0 14 14" fill="none"><path d="M7 2v10M2 7l5 5 5-5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
      </div>
    </div>

    <!-- SIDEBAR -->
    <div class="sidebar">

      <!-- Newsletter -->
      <div class="newsletter-block rv">
        <div class="nl-ico">ðŸ“©</div>
        <div class="nl-title">Stay in the loop</div>
        <div class="nl-desc">Get the latest DigiTexia insights, product updates, and Africa tech perspectives delivered to your inbox.</div>
        <input type="email" class="nl-input" placeholder="your@@email.com">
        <button class="nl-btn">Subscribe for free</button>
        <div class="nl-note">No spam. Unsubscribe at any time.</div>
      </div>

      <!-- Topics -->
      <div class="sidebar-block rv d1">
        <div class="sidebar-title">Browse Topics</div>
        <div class="topic-list">
          <span class="topic-chip">Digital Transformation</span>
          <span class="topic-chip">Product Updates</span>
          <span class="topic-chip">Africa & Tech</span>
          <span class="topic-chip">Innovation</span>
          <span class="topic-chip">How-to Guides</span>
          <span class="topic-chip">FlexiCare</span>
          <span class="topic-chip">InventoryPro</span>
          <span class="topic-chip">MedTrace</span>
          <span class="topic-chip">HR & Performance</span>
          <span class="topic-chip">Healthcare</span>
          <span class="topic-chip">Startups</span>
          <span class="topic-chip">Company News</span>
        </div>
      </div>

      <!-- Popular posts -->
      <div class="sidebar-block rv d2">
        <div class="sidebar-title">Most Read</div>
        <div class="popular-list">
          <div class="popular-item">
            <div class="popular-num">01</div>
            <div>
              <div class="popular-title">Africa doesn't need catch-up â€” it needs a leap forward</div>
              <div class="popular-meta">Anne DZOU Â· 8 min Â· Africa & Tech</div>
            </div>
          </div>
          <div class="popular-item">
            <div class="popular-num">02</div>
            <div>
              <div class="popular-title">MedTrace: patient records in 3 seconds</div>
              <div class="popular-meta">Lucien DZOU Â· 6 min Â· Product Update</div>
            </div>
          </div>
          <div class="popular-item">
            <div class="popular-num">03</div>
            <div>
              <div class="popular-title">The true cost of manual processes in African enterprises</div>
              <div class="popular-meta">Anne DZOU Â· 5 min Â· Digital Transformation</div>
            </div>
          </div>
          <div class="popular-item">
            <div class="popular-num">04</div>
            <div>
              <div class="popular-title">How CREMIN-CAM eliminated paper mail tracking</div>
              <div class="popular-meta">Anne DZOU Â· 8 min Â· Product Update</div>
            </div>
          </div>
          <div class="popular-item">
            <div class="popular-num">05</div>
            <div>
              <div class="popular-title">Agile transformation: value in weeks, not months</div>
              <div class="popular-meta">Lucien DZOU Â· 7 min Â· Digital Transformation</div>
            </div>
          </div>
        </div>
      </div>

      <!-- About authors -->
      <div class="sidebar-block rv d3">
        <div class="sidebar-title">Authors</div>
        <div style="display:flex;flex-direction:column;gap:1rem">
          <div style="display:flex;align-items:center;gap:.85rem">
            <div style="width:44px;height:44px;border-radius:50%;background:rgba(18,70,240,.12);border:1px solid var(--blue-bdr);display:flex;align-items:center;justify-content:center;font-size:1rem;flex-shrink:0">ðŸ‘©â€ðŸ’¼</div>
            <div>
              <div style="font-size:.85rem;font-weight:600">Anne DZOU</div>
              <div style="font-size:.72rem;color:var(--muted)">CEO Â· Strategy, Vision, Africa</div>
            </div>
          </div>
          <div style="display:flex;align-items:center;gap:.85rem">
            <div style="width:44px;height:44px;border-radius:50%;background:rgba(22,199,132,.1);border:1px solid var(--green-bdr);display:flex;align-items:center;justify-content:center;font-size:1rem;flex-shrink:0">ðŸ‘¨â€ðŸ’»</div>
            <div>
              <div style="font-size:.85rem;font-weight:600">Lucien DZOU</div>
              <div style="font-size:.72rem;color:var(--muted)">CTO Â· Technology, Products, R&D</div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•
     CTA
â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â•â• -->
<section id="blog-cta">
  <div class="cta-inner rv">
    <span class="tag" style="margin-bottom:1.5rem;display:inline-block">Transform Your Organization</span>
    <h2>Ready to go beyond reading about digital transformation?</h2>
    <p class="lead">Let DigiTexia help you implement it â€” with solutions built specifically for your organization's context and goals.</p>
    <div class="cta-btns">
      <a href="index.html#cta-final" class="btn-pri">Request a Free Consultation <svg width="14" height="14" viewBox="0 0 14 14" fill="none"><path d="M2 7h10M7 2l5 5-5 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
      <a href="solutions.html" class="btn-sec">Explore Our Solutions â†’</a>
    </div>
  </div>
</section>

<!-- â”€â”€â”€ FOOTER â”€â”€â”€ -->
@endsection

