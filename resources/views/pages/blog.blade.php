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
      <a href="{{ url('/') }}">Home</a><span>›</span>
      <span class="curr">Blog</span>
    </div>
    <span class="tag" style="margin-bottom:1.25rem;display:inline-block">DigiTexia Blog</span>
    <h1>Short reads on<br><em>digital growth.</em></h1>
    <p class="lead">Practical insights on product, tech, and transformation for African organizations.</p>

    <div class="search-bar rv d1">
      <span class="search-icon">🔍</span>
      <input type="text" placeholder="Search articles, topics, products...">
      <kbd>Ctrl K</kbd>
    </div>

    <div class="cat-pills rv d2">
      <span class="cat-pill active">All</span>
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
        <div class="feat-badge">Featured</div>
        <div class="feat-visual-ico">🌍</div>
      </div>
      <div class="feat-body">
        <div class="feat-meta">
          <span class="feat-cat" style="background:var(--blue-dim);border-color:var(--blue-bdr);color:#93C5FD">Africa & Tech</span>
          <span class="feat-date">March 2025</span>
          <span class="feat-read">· 8 min read</span>
        </div>
        <h3>Africa needs a leap, not a catch-up.</h3>
        <p>Africa can build systems for tomorrow instead of copying yesterday.</p>
        <div class="feat-author">
          <div class="feat-av" style="background:rgba(18,70,240,.12)">👩‍💼</div>
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
            <span style="position:relative;z-index:1">🔄</span>
          </div>
          <div class="post-body">
            <div class="post-meta">
              <span class="post-cat" style="background:var(--blue-dim);border-color:var(--blue-bdr);color:#93C5FD">Digital Transformation</span>
              <span class="post-date">Feb 2025</span>
            </div>
            <h4>Why digitalization fails - and how to fix it</h4>
            <p>Most projects fail because the tools do not match the reality.</p>
            <div class="post-footer">
              <div style="display:flex;align-items:center;gap:.5rem">
                <div class="post-av" style="background:rgba(22,199,132,.1)">👨‍💻</div>
                <div>
                  <div class="post-author">Lucien DZOU</div>
                  <div class="post-read">6 min read</div>
                </div>
              </div>
              <span class="post-arrow">→</span>
            </div>
          </div>
        </div>

        <div class="post-card rv d2">
          <div class="post-thumb">
            <div class="post-thumb-bg" style="background:linear-gradient(135deg,rgba(22,199,132,.1),rgba(14,165,233,.08))"></div>
            <span style="position:relative;z-index:1">📋</span>
          </div>
          <div class="post-body">
            <div class="post-meta">
              <span class="post-cat" style="background:var(--blue-dim);border-color:var(--blue-bdr);color:#93C5FD">Digital Transformation</span>
              <span class="post-date">Jan 2025</span>
            </div>
            <h4>The real cost of manual work</h4>
            <p>Spreadsheets, email chains, and paper cost more than you think.</p>
            <div class="post-footer">
              <div style="display:flex;align-items:center;gap:.5rem">
                <div class="post-av" style="background:var(--blue-dim)">👩‍💼</div>
                <div>
                  <div class="post-author">Anne DZOU</div>
                  <div class="post-read">5 min read</div>
                </div>
              </div>
              <span class="post-arrow">→</span>
            </div>
          </div>
        </div>

        <div class="post-card rv d3">
          <div class="post-thumb">
            <div class="post-thumb-bg" style="background:linear-gradient(135deg,rgba(245,158,11,.1),rgba(236,72,153,.06))"></div>
            <span style="position:relative;z-index:1">⚡</span>
          </div>
          <div class="post-body">
            <div class="post-meta">
              <span class="post-cat" style="background:var(--blue-dim);border-color:var(--blue-bdr);color:#93C5FD">Digital Transformation</span>
              <span class="post-date">Dec 2024</span>
            </div>
            <h4>How to ship value in weeks</h4>
            <p>Short cycles help teams see value sooner.</p>
            <div class="post-footer">
              <div style="display:flex;align-items:center;gap:.5rem">
                <div class="post-av" style="background:rgba(22,199,132,.1)">👨‍💻</div>
                <div>
                  <div class="post-author">Lucien DZOU</div>
                  <div class="post-read">7 min read</div>
                </div>
              </div>
              <span class="post-arrow">→</span>
            </div>
          </div>
        </div>

        <div class="post-card rv d4">
          <div class="post-thumb">
            <div class="post-thumb-bg" style="background:linear-gradient(135deg,rgba(99,102,241,.12),rgba(18,70,240,.08))"></div>
            <span style="position:relative;z-index:1">🏛️</span>
          </div>
          <div class="post-body">
            <div class="post-meta">
              <span class="post-cat" style="background:var(--blue-dim);border-color:var(--blue-bdr);color:#93C5FD">Digital Transformation</span>
              <span class="post-date">Nov 2024</span>
            </div>
            <h4>Digitalizing public institutions</h4>
            <p>Legacy processes, compliance, and budget pressure call for a practical roadmap.</p>
            <div class="post-footer">
              <div style="display:flex;align-items:center;gap:.5rem">
                <div class="post-av" style="background:var(--blue-dim)">👩‍💼</div>
                <div>
                  <div class="post-author">Anne DZOU</div>
                  <div class="post-read">9 min read</div>
                </div>
              </div>
              <span class="post-arrow">→</span>
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
            <span style="position:relative;z-index:1">📦</span>
          </div>
          <div class="post-body">
            <div class="post-meta">
              <span class="post-cat" style="background:rgba(14,165,233,.12);border-color:rgba(14,165,233,.28);color:#7DD3FC">Product Update</span>
              <span class="post-date">Mar 2025</span>
            </div>
            <h4>InventoryPro 2.0 is here</h4>
            <p>Multi-site stock tracking and low-stock alerts now work in real time.</p>
            <div class="post-footer">
              <div style="display:flex;align-items:center;gap:.5rem">
                <div class="post-av" style="background:rgba(22,199,132,.1)">👨‍💻</div>
                <div>
                  <div class="post-author">Lucien DZOU</div>
                  <div class="post-read">4 min read</div>
                </div>
              </div>
              <span class="post-arrow">→</span>
            </div>
          </div>
        </div>

        <div class="post-card rv d2">
          <div class="post-thumb">
            <div class="post-thumb-bg" style="background:linear-gradient(135deg,rgba(22,199,132,.1),rgba(18,70,240,.06))"></div>
            <span style="position:relative;z-index:1">⌚</span>
          </div>
          <div class="post-body">
            <div class="post-meta">
              <span class="post-cat" style="background:var(--green-dim);border-color:var(--green-bdr);color:var(--green)">Product Update</span>
              <span class="post-date">Feb 2025</span>
            </div>
            <h4>Introducing MedTrace</h4>
            <p>QR access to patient records in under 3 seconds.</p>
            <div class="post-footer">
              <div style="display:flex;align-items:center;gap:.5rem">
                <div class="post-av" style="background:rgba(22,199,132,.1)">👨‍💻</div>
                <div>
                  <div class="post-author">Lucien DZOU</div>
                  <div class="post-read">6 min read</div>
                </div>
              </div>
              <span class="post-arrow">→</span>
            </div>
          </div>
        </div>

        <div class="post-card rv d3">
          <div class="post-thumb">
            <div class="post-thumb-bg" style="background:linear-gradient(135deg,rgba(245,158,11,.1),rgba(245,158,11,.05))"></div>
            <span style="position:relative;z-index:1">📊</span>
          </div>
          <div class="post-body">
            <div class="post-meta">
              <span class="post-cat" style="background:rgba(245,158,11,.12);border-color:rgba(245,158,11,.28);color:#FCD34D">Product Update</span>
              <span class="post-date">Jan 2025</span>
            </div>
            <h4>Perfomia gets smarter</h4>
            <p>GPS attendance, KPI scoring, and a sharper manager dashboard.</p>
            <div class="post-footer">
              <div style="display:flex;align-items:center;gap:.5rem">
                <div class="post-av" style="background:rgba(22,199,132,.1)">👨‍💻</div>
                <div>
                  <div class="post-author">Lucien DZOU</div>
                  <div class="post-read">5 min read</div>
                </div>
              </div>
              <span class="post-arrow">→</span>
            </div>
          </div>
        </div>

        <div class="post-card rv d4">
          <div class="post-thumb">
            <div class="post-thumb-bg" style="background:linear-gradient(135deg,rgba(236,72,153,.1),rgba(99,102,241,.07))"></div>
            <span style="position:relative;z-index:1">✉️</span>
          </div>
          <div class="post-body">
            <div class="post-meta">
              <span class="post-cat" style="background:rgba(236,72,153,.1);border-color:rgba(236,72,153,.25);color:#F9A8D4">Product Update</span>
              <span class="post-date">Dec 2024</span>
            </div>
            <h4>DigiCourier reduces paper tracking</h4>
            <p>How CREMIN-CAM moved mail tracking out of paper and into software.</p>
            <div class="post-footer">
              <div style="display:flex;align-items:center;gap:.5rem">
                <div class="post-av" style="background:var(--blue-dim)">👩‍💼</div>
                <div>
                  <div class="post-author">Anne DZOU</div>
                  <div class="post-read">8 min read</div>
                </div>
              </div>
              <span class="post-arrow">→</span>
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
            <span style="position:relative;z-index:1">🚀</span>
          </div>
          <div class="post-body">
            <div class="post-meta">
              <span class="post-cat" style="background:var(--green-dim);border-color:var(--green-bdr);color:var(--green)">Africa & Tech</span>
              <span class="post-date">Mar 2025</span>
            </div>
            <h4>What is working in African startups</h4>
            <p>A quick look at the real state of the ecosystem.</p>
            <div class="post-footer">
              <div style="display:flex;align-items:center;gap:.5rem">
                <div class="post-av" style="background:var(--blue-dim)">👩‍💼</div>
                <div>
                  <div class="post-author">Anne DZOU</div>
                  <div class="post-read">10 min read</div>
                </div>
              </div>
              <span class="post-arrow">→</span>
            </div>
          </div>
        </div>

        <div class="post-card rv d2">
          <div class="post-thumb">
            <div class="post-thumb-bg" style="background:linear-gradient(135deg,rgba(99,102,241,.12),rgba(14,165,233,.07))"></div>
            <span style="position:relative;z-index:1">🏥</span>
          </div>
          <div class="post-body">
            <div class="post-meta">
              <span class="post-cat" style="background:var(--green-dim);border-color:var(--green-bdr);color:var(--green)">Africa & Tech</span>
              <span class="post-date">Jan 2025</span>
            </div>
            <h4>Why paper medical records are a problem</h4>
            <p>Patients lose time, data, and safety when records stay on paper.</p>
            <div class="post-footer">
              <div style="display:flex;align-items:center;gap:.5rem">
                <div class="post-av" style="background:rgba(22,199,132,.1)">👨‍💻</div>
                <div>
                  <div class="post-author">Lucien DZOU</div>
                  <div class="post-read">7 min read</div>
                </div>
              </div>
              <span class="post-arrow">→</span>
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
        <div class="nl-ico">📩</div>
        <div class="nl-title">Stay in the loop</div>
        <div class="nl-desc">Get short updates on products, strategy, and Africa tech.</div>
        <input type="email" class="nl-input" placeholder="your@email.com">
        <button class="nl-btn">Subscribe</button>
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
              <div class="popular-title">Africa needs a leap forward</div>
              <div class="popular-meta">Anne DZOU · 8 min · Africa & Tech</div>
            </div>
          </div>
          <div class="popular-item">
            <div class="popular-num">02</div>
            <div>
              <div class="popular-title">MedTrace: patient records in 3 seconds</div>
              <div class="popular-meta">Lucien DZOU · 6 min · Product Update</div>
            </div>
          </div>
          <div class="popular-item">
            <div class="popular-num">03</div>
            <div>
              <div class="popular-title">The true cost of manual processes in African enterprises</div>
              <div class="popular-meta">Anne DZOU · 5 min · Digital Transformation</div>
            </div>
          </div>
          <div class="popular-item">
            <div class="popular-num">04</div>
            <div>
              <div class="popular-title">How CREMIN-CAM eliminated paper mail tracking</div>
              <div class="popular-meta">Anne DZOU · 8 min · Product Update</div>
            </div>
          </div>
          <div class="popular-item">
            <div class="popular-num">05</div>
            <div>
              <div class="popular-title">Agile transformation: value in weeks, not months</div>
              <div class="popular-meta">Lucien DZOU · 7 min · Digital Transformation</div>
            </div>
          </div>
        </div>
      </div>

      <!-- About authors -->
      <div class="sidebar-block rv d3">
        <div class="sidebar-title">Authors</div>
        <div style="display:flex;flex-direction:column;gap:1rem">
          <div style="display:flex;align-items:center;gap:.85rem">
            <div style="width:44px;height:44px;border-radius:50%;background:rgba(18,70,240,.12);border:1px solid var(--blue-bdr);display:flex;align-items:center;justify-content:center;font-size:1rem;flex-shrink:0">👩‍💼</div>
            <div>
              <div style="font-size:.85rem;font-weight:600">Anne DZOU</div>
            <div style="font-size:.72rem;color:var(--muted)">CEO · Strategy, Vision, Africa</div>
            </div>
          </div>
          <div style="display:flex;align-items:center;gap:.85rem">
            <div style="width:44px;height:44px;border-radius:50%;background:rgba(22,199,132,.1);border:1px solid var(--green-bdr);display:flex;align-items:center;justify-content:center;font-size:1rem;flex-shrink:0">👨‍💻</div>
            <div>
              <div style="font-size:.85rem;font-weight:600">Lucien DZOU</div>
            <div style="font-size:.72rem;color:var(--muted)">CTO · Technology, Products, R&D</div>
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
    <h2>Ready to turn insight into action?</h2>
    <p class="lead">Let DigiTexia help you implement the right solution.</p>
    <div class="cta-btns">
      <a href="{{ url('/contact-us') }}" class="btn-pri">Request a Free Consultation <svg width="14" height="14" viewBox="0 0 14 14" fill="none"><path d="M2 7h10M7 2l5 5-5 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
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

