@extends('index')

@section('page_title', 'Our Blogs — DigiTexia Technology & Innovation')

@push('styles')
<link href="https://fonts.googleapis.com/css2?family=Clash+Display:wght@400;500;600;700&family=Plus+Jakarta+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/blog-digitexia.css') }}">
<style>
  .rv {
    opacity: 1;
    transform: none;
  }

  .rv.vis {
    opacity: 1;
    transform: none;
  }

  #hero h1,
  #featured h2,
  #featured h3,
  #blog-grid h2,
  #blog-grid h3,
  #blog-grid h4,
  #blog-cta h2,
  .sidebar-title,
  .feat-author-name,
  .feat-author-role,
  .post-author,
  .nl-title,
  .popular-title,
  .blog-empty h2,
  .blog-empty-card h4 {
    color: var(--text-main) !important;
  }

  .blog-empty {
    display: grid;
    gap: 1.25rem;
    padding: 2rem;
    border: 1px solid var(--border-color);
    border-radius: 18px;
    background: linear-gradient(135deg, var(--accent-soft), var(--success-soft));
  }

  .blog-empty-grid {
    display: grid;
    grid-template-columns: repeat(3, minmax(0, 1fr));
    gap: 1rem;
  }

  .blog-empty-card {
    padding: 1rem;
    border-radius: 14px;
    border: 1px solid var(--border-color);
    background: var(--surface-soft);
  }

  .blog-empty-card h4 {
    font-family: 'Clash Display', sans-serif;
    font-size: 1rem;
    margin-bottom: .45rem;
  }

  .blog-empty-card p {
    color: var(--text-muted);
    font-size: .85rem;
    line-height: 1.6;
  }

  .blog-admin-link {
    display: inline-flex;
    align-items: center;
    gap: .5rem;
    margin-top: .75rem;
  }

  @media (max-width: 900px) {
    .blog-empty-grid {
      grid-template-columns: 1fr;
    }
  }
</style>
@endpush

@section('contain')
@php
  $postsCollection = isset($posts) ? $posts->getCollection() : collect();
  $featuredPost = $postsCollection->firstWhere('is_featured', true) ?? $postsCollection->first();
  $otherPosts = $featuredPost ? $postsCollection->reject(fn ($post) => $post->id === $featuredPost->id)->values() : collect();
  $featuredTag = $featuredPost && !empty($featuredPost->tags) ? ($featuredPost->tags[0] ?? 'Blog') : 'Blog';
@endphp

<!-- HERO -->
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
      <span class="search-icon"><i class="ti ti-search"></i></span>
      <input type="text" placeholder="Search articles, topics, products..." aria-label="Search articles">
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

<!-- FEATURED -->
<section id="featured">
  <div class="feat-inner rv">
    @if ($featuredPost)
      <div class="feat-card">
        <div class="feat-visual">
          <div class="feat-visual-bg"></div>
          <div class="feat-badge">Featured</div>
          <div class="feat-visual-ico"><i class="ti ti-world"></i></div>
        </div>
        <div class="feat-body">
          <div class="feat-meta">
            <span class="feat-cat" style="background:var(--blue-dim);border-color:var(--blue-bdr);color: var(--accent-fg)">{{ $featuredTag }}</span>
            <span class="feat-date">{{ optional($featuredPost->published_at)->format('F Y') ?? 'Coming soon' }}</span>
            <span class="feat-read">· {{ $featuredPost->reading_time_minutes ?? 5 }} min read</span>
          </div>
          <h3>{{ $featuredPost->title }}</h3>
          <p>{{ $featuredPost->excerpt ?: \Illuminate\Support\Str::limit(strip_tags($featuredPost->content), 150) }}</p>
          <div class="feat-author">
            <div class="feat-av" style="background: var(--accent-soft)"><i class="ti ti-user"></i></div>
            <div>
              <div class="feat-author-name">{{ $featuredPost->author->name ?? 'DigiTexia' }}</div>
              <div class="feat-author-role">Author</div>
            </div>
          </div>
          <a href="{{ route('blog.show', $featuredPost) }}" class="feat-link">Read full article <svg width="14" height="14" viewBox="0 0 14 14" fill="none"><path d="M2 7h10M7 2l5 5-5 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
        </div>
      </div>
    @else
      <div class="blog-empty">
        <div class="tag" style="width:max-content">No articles yet</div>
        <h2 style="margin-bottom:.25rem">The blog is ready for its first publication.</h2>
        <p class="lead" style="margin-bottom:0">We have the publishing pipeline in place. The first posts will appear here as soon as the editorial team begins publishing.</p>
        <div class="blog-empty-grid">
          <div class="blog-empty-card">
            <h4>Editorial strategy</h4>
            <p>Insights on product, operations, and digital transformation.</p>
          </div>
          <div class="blog-empty-card">
            <h4>Company updates</h4>
            <p>Release notes, product launches, and project learnings.</p>
          </div>
          <div class="blog-empty-card">
            <h4>Publishing workflow</h4>
            <p>Articles will appear here once they are written, reviewed, and published.</p>
          </div>
        </div>
      </div>
    @endif
  </div>
</section>

<!-- BLOG GRID + SIDEBAR -->
<section id="blog-grid">
  <div class="bg-inner wrap">
    <div class="posts-section">
      @if ($postsCollection->count())
        <h3>Latest articles</h3>
        <div class="posts-grid">
          @foreach ($otherPosts->take(8) as $post)
            @php
              $tag = !empty($post->tags) ? ($post->tags[0] ?? 'Blog') : 'Blog';
            @endphp
            <a href="{{ route('blog.show', $post) }}" class="post-card rv">
              <div class="post-thumb">
                <div class="post-thumb-bg" style="background:linear-gradient(135deg,var(--accent-soft),var(--success-soft))"></div>
                <span style="position:relative;z-index:1"><i class="ti ti-article"></i></span>
              </div>
              <div class="post-body">
                <div class="post-meta">
                  <span class="post-cat" style="background:var(--blue-dim);border-color:var(--blue-bdr);color: var(--accent-fg)">{{ $tag }}</span>
                  <span class="post-date">{{ optional($post->published_at)->format('M Y') ?? 'Draft' }}</span>
                </div>
                <h4>{{ $post->title }}</h4>
                <p>{{ $post->excerpt ?: \Illuminate\Support\Str::limit(strip_tags($post->content), 120) }}</p>
                <div class="post-footer">
                  <div style="display:flex;align-items:center;gap:.5rem">
                    <div class="post-av" style="background: var(--success-soft)"><i class="ti ti-user"></i></div>
                    <div>
                      <div class="post-author">{{ $post->author->name ?? 'DigiTexia' }}</div>
                      <div class="post-read">{{ $post->reading_time_minutes ?? 5 }} min read</div>
                    </div>
                  </div>
                  <span class="post-arrow">→</span>
                </div>
              </div>
            </a>
          @endforeach
        </div>
        @if ($posts->hasPages())
          <div style="margin-top:1.5rem">
            {{ $posts->links() }}
          </div>
        @endif
      @else
        <div class="blog-empty">
          <div class="tag" style="width:max-content">Publishing coming soon</div>
          <h2 style="margin-bottom:.25rem">There are no published articles yet.</h2>
          <p class="lead" style="margin-bottom:0">This page is already wired to a full blog workflow. It will show published content as soon as the first article is created and approved.</p>
        </div>
      @endif
    </div>

    <aside class="sidebar">
      <div class="sidebar-block rv d1">
        <div class="sidebar-title">Topics</div>
        <div class="topic-list">
          <span class="topic-chip">Digital Transformation</span>
          <span class="topic-chip">Product Updates</span>
          <span class="topic-chip">Africa & Tech</span>
          <span class="topic-chip">Innovation</span>
          <span class="topic-chip">How-to Guides</span>
          <span class="topic-chip">Strategy</span>
          <span class="topic-chip">Company News</span>
        </div>
      </div>

      <div class="sidebar-block rv d2">
        <div class="sidebar-title">What to expect</div>
        <div class="popular-list">
          <div class="popular-item">
            <div class="popular-num">01</div>
            <div>
              <div class="popular-title">Practical content first</div>
              <div class="popular-meta">Insights that help teams move faster</div>
            </div>
          </div>
          <div class="popular-item">
            <div class="popular-num">02</div>
            <div>
              <div class="popular-title">Built for African realities</div>
              <div class="popular-meta">Operational content, not filler</div>
            </div>
          </div>
          <div class="popular-item">
            <div class="popular-num">03</div>
            <div>
              <div class="popular-title">Clear and actionable</div>
              <div class="popular-meta">Short reads with direct takeaways</div>
            </div>
          </div>
        </div>
      </div>

      <div class="sidebar-block rv d3 newsletter-block">
        <div class="nl-ico"><i class="ti ti-pencil"></i></div>
        <div class="nl-title">Editorial notes</div>
        <div class="nl-desc">New articles will be published here as DigiTexia expands its knowledge base.</div>
        <a href="{{ url('/contact-us') }}" class="btn-pri" style="width:100%;justify-content:center">Contact DigiTexia</a>
      </div>
    </aside>
  </div>
</section>

<!-- CTA -->
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


