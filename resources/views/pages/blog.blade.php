@extends('index')

@section('page_title', __('Blog') . ' | DigiTexia')

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
      <a href="{{ url('/') }}">{{ __('Home') }}</a><span>&rsaquo;</span>
      <span class="curr">{{ __('Blog') }}</span>
    </div>
    <span class="tag" style="margin-bottom:1.25rem;display:inline-block">{{ __('DigiTexia Insights') }}</span>
    <h1>{{ __('Business insights for') }}<br><em>{{ __('digital operations.') }}</em></h1>
    <p class="lead">{{ __('Practical articles on workflow digitalization, software delivery, operational control and technology decisions for growing organizations.') }}</p>

    <div class="search-bar rv d1">
      <span class="search-icon"><i class="ti ti-search"></i></span>
      <input type="text" placeholder="{{ __('Search digital operations, automation, products...') }}" aria-label="{{ __('Search articles') }}">
      <kbd>Ctrl K</kbd>
    </div>

    <div class="cat-pills rv d2">
      <span class="cat-pill active">{{ __('All') }}</span>
      <span class="cat-pill">{{ __('Digital Transformation') }}</span>
      <span class="cat-pill">{{ __('Operations') }}</span>
      <span class="cat-pill">{{ __('Software Delivery') }}</span>
      <span class="cat-pill">{{ __('Business Automation') }}</span>
      <span class="cat-pill">{{ __('Innovation') }}</span>
      <span class="cat-pill">{{ __('Case Notes') }}</span>
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
          <div class="feat-badge">{{ __('Featured') }}</div>
          <div class="feat-visual-ico"><i class="ti ti-world"></i></div>
        </div>
        <div class="feat-body">
          <div class="feat-meta">
            <span class="feat-cat" style="background:var(--blue-dim);border-color:var(--blue-bdr);color: var(--accent-fg)">{{ $featuredTag }}</span>
            <span class="feat-date">{{ optional($featuredPost->published_at)->format('F Y') ?? __('Coming soon') }}</span>
            <span class="feat-read">&middot; {{ $featuredPost->reading_time_minutes ?? 5 }} {{ __('min read') }}</span>
          </div>
          <h3>{{ $featuredPost->title }}</h3>
          <p>{{ $featuredPost->excerpt ?: \Illuminate\Support\Str::limit(strip_tags($featuredPost->content), 150) }}</p>
          <div class="feat-author">
            <div class="feat-av" style="background: var(--accent-soft)"><i class="ti ti-user"></i></div>
            <div>
              <div class="feat-author-name">{{ $featuredPost->author->name ?? 'DigiTexia' }}</div>
              <div class="feat-author-role">{{ __('Author') }}</div>
            </div>
          </div>
          <a href="{{ route('blog.show', $featuredPost) }}" class="feat-link">{{ __('Read full article') }} <svg width="14" height="14" viewBox="0 0 14 14" fill="none"><path d="M2 7h10M7 2l5 5-5 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
        </div>
      </div>
    @else
      <div class="blog-empty">
        <div class="tag" style="width:max-content">{{ __('Insights coming soon') }}</div>
        <h2 style="margin-bottom:.25rem">{{ __('Our business insight library is being prepared.') }}</h2>
        <p class="lead" style="margin-bottom:0">{{ __('This space will share practical guidance for leaders who want to digitize operations, reduce manual work and choose better software decisions.') }}</p>
        <div class="blog-empty-grid">
          <div class="blog-empty-card">
            <h4>{{ __('Operational playbooks') }}</h4>
            <p>{{ __('How to identify manual friction, prioritize workflows and improve execution.') }}</p>
          </div>
          <div class="blog-empty-card">
            <h4>{{ __('Product and case notes') }}</h4>
            <p>{{ __('Lessons from DigiTexia products, client projects and implementation work.') }}</p>
          </div>
          <div class="blog-empty-card">
            <h4>{{ __('Decision guides') }}</h4>
            <p>{{ __('Clear thinking for technology choices, automation and digital transformation.') }}</p>
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
        <h3>{{ __('Latest articles') }}</h3>
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
                  <span class="post-date">{{ optional($post->published_at)->format('M Y') ?? __('Draft') }}</span>
                </div>
                <h4>{{ $post->title }}</h4>
                <p>{{ $post->excerpt ?: \Illuminate\Support\Str::limit(strip_tags($post->content), 120) }}</p>
                <div class="post-footer">
                  <div style="display:flex;align-items:center;gap:.5rem">
                    <div class="post-av" style="background: var(--success-soft)"><i class="ti ti-user"></i></div>
                    <div>
                      <div class="post-author">{{ $post->author->name ?? 'DigiTexia' }}</div>
                      <div class="post-read">{{ $post->reading_time_minutes ?? 5 }} {{ __('min read') }}</div>
                    </div>
                  </div>
                  <span class="post-arrow">&rarr;</span>
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
          <h2 style="margin-bottom:.25rem">No articles are published yet.</h2>
          <p class="lead" style="margin-bottom:0">The blog is ready for business insights, product notes and practical guides as soon as the first article is approved.</p>
        </div>
      @endif
    </div>

    <aside class="sidebar">
      <div class="sidebar-block rv d1">
          <div class="sidebar-title">{{ __('Topics') }}</div>
          <div class="topic-list">
          <span class="topic-chip">{{ __('Digital Transformation') }}</span>
          <span class="topic-chip">{{ __('Operations') }}</span>
          <span class="topic-chip">{{ __('Software Delivery') }}</span>
          <span class="topic-chip">{{ __('Innovation') }}</span>
          <span class="topic-chip">{{ __('Automation') }}</span>
          <span class="topic-chip">{{ __('Strategy') }}</span>
          <span class="topic-chip">{{ __('Case Notes') }}</span>
        </div>
      </div>

      <div class="sidebar-block rv d2">
        <div class="sidebar-title">{{ __('What to expect') }}</div>
        <div class="popular-list">
          <div class="popular-item">
            <div class="popular-num">01</div>
            <div>
              <div class="popular-title">{{ __('Operational content first') }}</div>
              <div class="popular-meta">{{ __('Insights that help teams execute better') }}</div>
            </div>
          </div>
          <div class="popular-item">
            <div class="popular-num">02</div>
            <div>
              <div class="popular-title">{{ __('Built for real business constraints') }}</div>
              <div class="popular-meta">{{ __('Practical content, not filler') }}</div>
            </div>
          </div>
          <div class="popular-item">
            <div class="popular-num">03</div>
            <div>
              <div class="popular-title">{{ __('Clear and actionable') }}</div>
              <div class="popular-meta">{{ __('Short reads with direct takeaways') }}</div>
            </div>
          </div>
        </div>
      </div>

      <div class="sidebar-block rv d3 newsletter-block">
        <div class="nl-ico"><i class="ti ti-pencil"></i></div>
        <div class="nl-title">{{ __('Need guidance now?') }}</div>
        <div class="nl-desc">{{ __('Talk to DigiTexia about your operations, tools and digital priorities.') }}</div>
        <a href="{{ url('/contact-us') }}" class="btn-pri" style="width:100%;justify-content:center">{{ __('Contact DigiTexia') }}</a>
      </div>
    </aside>
  </div>
</section>

<!-- CTA -->
<section id="blog-cta">
  <div class="cta-inner rv">
    <span class="tag" style="margin-bottom:1.5rem;display:inline-block">{{ __('From Insight To Execution') }}</span>
    <h2>{{ __('Ready to turn operational ideas into a working system?') }}</h2>
    <p class="lead">{{ __('Let DigiTexia help you assess your workflow and implement the right digital solution.') }}</p>
    <div class="cta-btns">
      <a href="{{ url('/contact-us') }}" class="btn-pri">{{ __('Request an Assessment') }} <svg width="14" height="14" viewBox="0 0 14 14" fill="none" aria-hidden="true"><path d="M2 7h10M7 2l5 5-5 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
      <a href="{{ url('/solutions') }}" class="btn-sec">{{ __('Explore Our Solutions') }} &rarr;</a>
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
