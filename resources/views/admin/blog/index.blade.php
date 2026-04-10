@extends('index')

@section('page_title', 'Blog Admin - DigiTexia')

@push('styles')
<style>
  body {
    background: var(--bg-primary) !important;
    color: var(--text-main) !important;
  }

  body main {
    display: block;
  }

  .dash-shell,
  .dash-shell * {
    color: var(--text-main) !important;
  }

  .dash-shell ::placeholder {
    color: var(--text-soft) !important;
  }

  .dash-shell {
    min-height: 100vh;
    padding: 1rem;
    background:
      radial-gradient(ellipse 60% 55% at 50% 10%, var(--accent-soft) 0%, transparent 60%),
      radial-gradient(ellipse 35% 40% at 12% 78%, var(--success-soft) 0%, transparent 55%),
      var(--bg-primary);
  }

  .dash-wrap {
    max-width: 1440px;
    margin: 0 auto;
    display: grid;
    grid-template-columns: 260px 1fr;
    gap: 1rem;
    min-height: calc(100vh - 2rem);
  }

  .dash-sidebar,
  .dash-main,
  .dash-card {
    border: 1px solid var(--border-color);
    background: var(--card-bg);
    backdrop-filter: blur(18px);
    box-shadow: var(--shadow-elev);
  }

  .dash-sidebar {
    border-radius: 22px;
    padding: 1.25rem;
    display: flex;
    flex-direction: column;
    gap: 1.25rem;
  }

  .dash-brand {
    display: flex;
    align-items: center;
    gap: .85rem;
  }

  .dash-brand-mark {
    width: 44px;
    height: 44px;
    border-radius: 14px;
    display: grid;
    place-items: center;
    background: linear-gradient(135deg, var(--blue), var(--green));
    color: var(--on-accent);
    font-family: 'Clash Display', sans-serif;
    font-weight: 700;
  }

  .dash-brand h1 {
    font-family: 'Clash Display', sans-serif;
    font-size: 1.15rem;
    line-height: 1;
    margin: 0;
    color: var(--white);
  }

  .dash-brand p {
    margin: .2rem 0 0;
    font-size: .75rem;
    color: var(--text-soft);
  }

  .dash-nav {
    display: grid;
    gap: .4rem;
  }

  .dash-link {
    display: flex;
    align-items: center;
    gap: .75rem;
    padding: .8rem .9rem;
    border-radius: 14px;
    border: 1px solid transparent;
    background: transparent;
    transition: all .18s;
    color: var(--text-muted);
  }

  .dash-link:hover,
  .dash-link.active {
    color: var(--text-main);
    background: var(--accent-soft);
    border-color: var(--blue-bdr);
  }

  .dash-link-ico {
    width: 30px;
    height: 30px;
    border-radius: 10px;
    display: grid;
    place-items: center;
    background: var(--accent-dim);
    border: 1px solid var(--accent-border);
    flex-shrink: 0;
  }

  .dash-card {
    border-radius: 18px;
    padding: 1rem;
  }

  .dash-logout {
    margin-top: auto;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: .75rem;
    padding-top: 1rem;
    border-top: 1px solid var(--border-color);
    font-size: .85rem;
    color: var(--text-muted);
  }

  .dash-main {
    border-radius: 22px;
    padding: 1.25rem;
    display: grid;
    gap: 1rem;
  }

  .dash-topbar {
    border-radius: 18px;
    padding: 1.15rem 1.25rem;
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 1rem;
    background:
      linear-gradient(135deg, var(--accent-soft), var(--success-soft)),
      var(--card-bg);
    border: 1px solid var(--border-color);
    box-shadow: var(--shadow-elev);
  }

  .dash-topbar h2 {
    margin: 0;
    color: var(--white);
    font-size: clamp(1.2rem, 2vw, 1.7rem);
  }

  .dash-topbar p {
    margin: .2rem 0 0;
    font-size: .9rem;
    color: var(--text-muted);
  }

  .dash-badge {
    display: inline-flex;
    align-items: center;
    gap: .45rem;
    padding: .5rem .8rem;
    border-radius: 999px;
    border: 1px solid var(--success-border);
    background: var(--success-soft);
    font-size: .72rem;
    font-weight: 700;
    letter-spacing: .04em;
    text-transform: uppercase;
    white-space: nowrap;
    color: var(--success-fg);
  }

  .dash-stats {
    display: grid;
    grid-template-columns: repeat(4, minmax(0, 1fr));
    gap: 1rem;
  }

  .dash-stat {
    border-radius: 18px;
    padding: 1rem 1rem 1.05rem;
    background: var(--bg-secondary);
    border: 1px solid var(--border-color);
    position: relative;
    overflow: hidden;
    box-shadow: var(--shadow-soft);
  }

  .dash-stat::after {
    content: '';
    position: absolute;
    inset: auto -12px -12px auto;
    width: 80px;
    height: 80px;
    border-radius: 999px;
    background: radial-gradient(circle, rgba(91,129,255,.12), transparent 70%);
    pointer-events: none;
  }

  .dash-stat .label {
    font-size: .72rem;
    font-weight: 700;
    letter-spacing: .08em;
    text-transform: uppercase;
    margin-bottom: .45rem;
    color: var(--text-soft);
  }

  .dash-stat .value {
    font-family: 'Clash Display', sans-serif;
    font-size: 1.75rem;
    line-height: 1;
    color: var(--text-main);
    margin-bottom: .3rem;
  }

  .dash-stat .delta {
    font-size: .8rem;
    color: var(--text-muted);
  }

  .dash-activity {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 1rem;
  }

  .dash-grid {
    display: grid;
    grid-template-columns: 1.3fr .9fr;
    gap: 1rem;
    align-items: start;
  }

  .card-head {
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: .75rem;
    margin-bottom: 1rem;
  }

  .card-title {
    color: var(--text-main);
    font-weight: 700;
    margin: 0;
  }

  .card-sub {
    font-size: .85rem;
    margin-top: .2rem;
    color: var(--text-muted);
  }

  .chart {
    display: grid;
    grid-template-columns: repeat(12, 1fr);
    gap: .5rem;
    align-items: end;
    height: 240px;
    padding-top: .75rem;
  }

  .bar {
    border-radius: 12px 12px 6px 6px;
    background: linear-gradient(180deg, var(--blue-lt), var(--green));
    min-height: 24px;
  }

  .chart-axis {
    display: flex;
    justify-content: space-between;
    gap: .75rem;
    margin-top: .75rem;
    font-size: .72rem;
    color: var(--text-soft);
  }

  .post-list {
    display: grid;
    gap: .75rem;
  }

  .post-item {
    padding: .9rem 1rem;
    border-radius: 14px;
    border: 1px solid var(--border-color);
    background: var(--bg-secondary);
  }

  .post-top {
    display: flex;
    justify-content: space-between;
    gap: .75rem;
    margin-bottom: .5rem;
  }

  .post-title {
    color: var(--text-main);
    font-weight: 700;
    margin-bottom: .2rem;
  }

  .post-meta {
    font-size: .82rem;
    color: var(--text-muted);
  }

  .post-actions {
    display: flex;
    gap: .5rem;
    flex-wrap: wrap;
    margin-top: .75rem;
  }

  .dash-empty {
    padding: 1.5rem;
    border-radius: 18px;
    border: 1px dashed var(--border-strong);
    text-align: center;
    color: var(--text-muted);
    background: var(--surface-bg);
  }

  .modal-backdrop {
    position: fixed;
    inset: 0;
    background: var(--overlay);
    backdrop-filter: blur(10px);
    display: none;
    align-items: center;
    justify-content: center;
    padding: 1rem;
    z-index: 2000;
  }

  .modal-backdrop.open {
    display: flex;
  }

  .modal-panel {
    width: min(920px, calc(100vw - 2rem));
    max-height: min(90vh, 1000px);
    overflow: auto;
    border-radius: 22px;
    border: 1px solid var(--border-color);
    background: var(--bg-secondary);
    box-shadow: var(--shadow-lg);
    padding: 1.25rem;
  }

  .modal-head {
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 1rem;
    margin-bottom: 1rem;
  }

  .modal-head h3 {
    margin: .1rem 0 0;
    font-family: 'Clash Display', sans-serif;
    font-size: clamp(1rem, 1.6vw, 1.3rem);
    color: var(--text-main);
  }

  .modal-head p {
    color: var(--text-muted);
  }

  .modal-close {
    width: 42px;
    height: 42px;
    border-radius: 12px;
    border: 1px solid var(--border-color);
    background: var(--bg-secondary);
    color: var(--text-main);
    display: grid;
    place-items: center;
    cursor: pointer;
  }

  .modal-grid {
    display: block;
  }

  .modal-form {
    display: grid;
    gap: .8rem;
    width: 100%;
    max-width: none;
  }

  .modal-form .field label,
  .modal-form .section-title h3,
  .modal-form .section-title .mini,
  .modal-form .check-row,
  .modal-form .check-row strong {
    color: var(--text-main) !important;
  }

  .modal-form .section-title {
    margin-bottom: .1rem;
  }

  .modal-form .section-title h3 {
    font-size: .8rem;
    letter-spacing: .08em;
    text-transform: uppercase;
    opacity: .72;
  }

  .modal-form .section-title .mini {
    font-size: .65rem;
    opacity: .58;
  }

  .editor-card input,
  .editor-card textarea,
  .editor-card select,
  .modal-panel input,
  .modal-panel textarea,
  .modal-panel select {
    background: var(--surface-bg);
    border-color: var(--border-strong);
    color: var(--text-main) !important;
    -webkit-text-fill-color: var(--text-main);
    box-shadow: var(--input-shadow);
  }

  .modal-form .grid-2 {
    grid-template-columns: 1fr;
    width: 100%;
  }

  .editor-card input::placeholder,
  .editor-card textarea::placeholder,
  .modal-panel input::placeholder,
  .modal-panel textarea::placeholder {
    color: var(--text-soft) !important;
  }

  .modal-form .field label {
    font-size: .68rem;
    letter-spacing: .08em;
  }

  .modal-form .field input,
  .modal-form .field textarea,
  .modal-form .field select {
    padding: .75rem .9rem;
    border-radius: 10px;
    font-size: .95rem;
    width: 100%;
    min-width: 0;
  }

  .modal-form .field input[type="file"] {
    padding: .55rem .7rem;
  }

  .modal-form .field input[type="file"]::file-selector-button {
    margin-right: .75rem;
    padding: .55rem .85rem;
    border: 1px solid var(--border-strong);
    border-radius: 8px;
    background: var(--bg-secondary);
    color: var(--text-main);
    cursor: pointer;
  }

  .modal-form .field textarea {
    min-height: 120px;
  }

  .modal-form .grid-2 {
    gap: .8rem;
  }

  .check-row,
  .preview-item {
    background: var(--bg-secondary);
    border-color: var(--border-color);
  }

  .modal-form .checks {
    gap: .45rem;
    width: 100%;
  }

  .modal-form .check-item {
    padding: .72rem .8rem;
    border-radius: 12px;
    width: 100%;
  }

  .modal-form .editor-actions {
    width: 100%;
  }

  .modal-form .editor-actions {
    margin-top: .1rem;
  }

  .side-card p,
  .check-row,
  .preview-item .value,
  .field-help {
    color: var(--text-muted) !important;
  }

  .dash-link-ico i,
  .dash-badge i,
  .editor-badge i {
    color: inherit !important;
  }

  .dash-shell .btn-pri,
  .modal-panel .btn-pri {
    color: var(--text-main) !important;
  }

  .dash-shell .btn-sec,
  .modal-panel .btn-sec {
    color: var(--text-main) !important;
  }

  .modal-form .check-item {
    background: var(--bg-secondary);
    border-color: var(--border-color);
  }

  .modal-form .check-item span {
    color: var(--text-main) !important;
  }

  .modal-form .field-help {
    color: var(--text-soft) !important;
  }

  .modal-form .editor-sep {
    margin: .05rem 0 .1rem;
  }

  @media (max-width: 1100px) {
    .dash-wrap {
      grid-template-columns: 1fr;
    }

    .dash-stats,
    .dash-grid {
      grid-template-columns: 1fr 1fr;
    }

    .dash-activity {
      grid-template-columns: 1fr;
    }
  }

  @media (max-width: 720px) {
    .dash-shell {
      padding: .75rem;
    }

    .dash-stats,
    .dash-grid {
      grid-template-columns: 1fr;
    }

    .dash-topbar,
    .dash-sidebar {
      padding: 1rem;
    }

  .modal-grid {
      display: block;
    }
  }
</style>
@endpush

@section('fullpage')
<section class="dash-shell">
  <div class="dash-wrap">
    <aside class="dash-sidebar rv">
      <div class="dash-brand">
        <div class="dash-brand-mark">P</div>
        <div>
          <h1>PERFOMIA</h1>
          <p>Blog Admin Dashboard</p>
        </div>
      </div>

      <nav class="dash-nav">
        <a href="{{ route('blog.admin.index') }}" class="dash-link active">
          <span class="dash-link-ico"><i class="ti ti-layout-dashboard"></i></span>
          Overview
        </a>
        <button type="button" class="dash-link" data-open-create-modal style="text-align:left;width:100%">
          <span class="dash-link-ico"><i class="ti ti-plus"></i></span>
          New post
        </button>
        <a href="{{ route('blog.index') }}" class="dash-link">
          <span class="dash-link-ico"><i class="ti ti-world"></i></span>
          Public blog
        </a>
        <a href="{{ url('/') }}" class="dash-link">
          <span class="dash-link-ico"><i class="ti ti-arrow-left"></i></span>
          Back to site
        </a>
      </nav>

      <div class="dash-card">
        <div class="card-head" style="margin-bottom:.75rem">
          <div>
            <h3 class="card-title" style="font-size:1rem">Editorial status</h3>
            <div class="card-sub">Current publishing posture</div>
          </div>
        </div>
        <div style="display:grid;gap:.65rem">
          <div style="display:flex;justify-content:space-between;gap:1rem;color:var(--muted-lt);font-size:.88rem">
            <span>Drafts</span>
            <strong style="color:var(--white)">{{ $posts->where('status', 'draft')->count() }}</strong>
          </div>
          <div style="display:flex;justify-content:space-between;gap:1rem;color:var(--muted-lt);font-size:.88rem">
            <span>Published</span>
            <strong style="color:var(--white)">{{ $posts->where('status', 'published')->count() }}</strong>
          </div>
          <div style="display:flex;justify-content:space-between;gap:1rem;color:var(--muted-lt);font-size:.88rem">
            <span>Featured</span>
            <strong style="color:var(--white)">{{ $posts->where('is_featured', true)->count() }}</strong>
          </div>
        </div>
      </div>

      <div class="dash-logout">
        <span>{{ auth()->user()->name ?? 'Admin' }}</span>
        <form method="POST" action="{{ route('logout') }}">
          @csrf
          <button type="submit" class="btn-sec" style="padding:.55rem .9rem">Logout</button>
        </form>
      </div>
    </aside>

    <main class="dash-main rv d2">
      <div class="dash-topbar">
        <div>
          <h2>Content Overview</h2>
          <p>Track articles, publication health, and editorial flow from one place.</p>
        </div>
        <button type="button" class="dash-badge" data-open-create-modal style="border:1px solid var(--blue-bdr);background:var(--blue-dim);color: var(--accent-fg);cursor:pointer">
          <i class="ti ti-point-filled"></i> Live editorial dashboard
        </button>
      </div>

      @if (session('status'))
        <div style="padding:1rem 1.1rem;border-radius:14px;background:var(--success-soft);border:1px solid var(--green-bdr);color:var(--success-fg)">
          {{ session('status') }}
        </div>
      @endif

      <section class="dash-stats">
        <div class="dash-stat">
          <div class="label">Total posts</div>
          <div class="value">{{ $posts->count() }}</div>
          <div class="delta">All articles in the system</div>
        </div>
        <div class="dash-stat">
          <div class="label">Published</div>
          <div class="value">{{ $posts->where('status', 'published')->count() }}</div>
          <div class="delta">Visible on the public blog</div>
        </div>
        <div class="dash-stat">
          <div class="label">Drafts</div>
          <div class="value">{{ $posts->where('status', 'draft')->count() }}</div>
          <div class="delta">Work in progress</div>
        </div>
        <div class="dash-stat">
          <div class="label">Featured</div>
          <div class="value">{{ $posts->where('is_featured', true)->count() }}</div>
          <div class="delta">Pinned editorial picks</div>
        </div>
      </section>

      <section class="dash-activity">
        <div class="dash-card">
          <div class="card-head">
            <div>
              <h3 class="card-title">Publishing queue</h3>
              <div class="card-sub">What is moving right now</div>
            </div>
            <span class="dash-badge" style="border-color:var(--blue-bdr);background:var(--blue-dim);color: var(--accent-fg)">Queue</span>
          </div>

          @if ($posts->count())
            <div class="post-list">
              @foreach ($posts->take(3) as $post)
                <div class="post-item">
                  <div class="post-top">
                    <div>
                      <div class="post-title">{{ $post->title }}</div>
                      <div class="post-meta">{{ ucfirst($post->status) }} - {{ ucfirst($post->visibility) }}</div>
                    </div>
                    <div style="color:var(--muted-lt);font-size:.82rem">{{ optional($post->updated_at)->format('d M') }}</div>
                  </div>
                  <div class="post-meta">{{ $post->excerpt ?: \Illuminate\Support\Str::limit(strip_tags($post->content), 110) }}</div>
                </div>
              @endforeach
            </div>
          @else
            <div class="dash-empty">No posts in queue yet.</div>
          @endif
        </div>

        <div class="dash-card">
          <div class="card-head">
            <div>
              <h3 class="card-title">Editorial notes</h3>
              <div class="card-sub">A few things to keep in view</div>
            </div>
          </div>

          <div class="post-list">
            <div class="post-item">
              <div class="post-title">Phone-based login is active</div>
              <div class="post-meta">Admins sign in with +237 numbers only.</div>
            </div>
            <div class="post-item">
              <div class="post-title">Comments are pending by default</div>
              <div class="post-meta">Moderate before exposing responses publicly.</div>
            </div>
            <div class="post-item">
              <div class="post-title">Slug and author are required</div>
              <div class="post-meta">Every article is tied to a real author and clean URL.</div>
            </div>
          </div>
        </div>
      </section>

      <section class="dash-grid">
        <div class="dash-card">
          <div class="card-head">
            <div>
              <h3 class="card-title">Publishing trend</h3>
              <div class="card-sub">A quick visual of content distribution</div>
            </div>
            <button type="button" class="btn-pri" data-open-create-modal style="padding:.7rem 1rem">New post</button>
          </div>
          <div class="chart" aria-label="Publishing trend chart">
            <div class="bar" style="height:35%"></div>
            <div class="bar" style="height:55%"></div>
            <div class="bar" style="height:45%"></div>
            <div class="bar" style="height:75%"></div>
            <div class="bar" style="height:60%"></div>
            <div class="bar" style="height:82%"></div>
            <div class="bar" style="height:68%"></div>
            <div class="bar" style="height:88%"></div>
            <div class="bar" style="height:54%"></div>
            <div class="bar" style="height:70%"></div>
            <div class="bar" style="height:48%"></div>
            <div class="bar" style="height:92%"></div>
          </div>
          <div class="chart-axis">
            <span>W1</span><span>W2</span><span>W3</span><span>W4</span>
            <span>W5</span><span>W6</span><span>W7</span><span>W8</span>
            <span>W9</span><span>W10</span><span>W11</span><span>W12</span>
          </div>
        </div>

        <div class="dash-card">
          <div class="card-head">
            <div>
              <h3 class="card-title">Recent articles</h3>
              <div class="card-sub">Latest posts at a glance</div>
            </div>
            <div class="dash-badge" style="border-color:var(--blue-bdr);background:var(--blue-dim);color: var(--accent-fg)">All content</div>
          </div>

          @if ($posts->count())
            <div class="post-list">
              @foreach ($posts->take(6) as $post)
                <div class="post-item">
                  <div class="post-top">
                    <div>
                      <div class="post-title">{{ $post->title }}</div>
                      <div class="post-meta">
                        {{ $post->author->name ?? 'Unknown' }} | {{ ucfirst($post->status) }} | {{ optional($post->updated_at)->format('d M Y') }}
                      </div>
                    </div>
                    <div style="color:var(--muted-lt);font-size:.82rem">{{ ucfirst($post->visibility) }}</div>
                  </div>

                  <div class="post-meta">{{ $post->excerpt ?: \Illuminate\Support\Str::limit(strip_tags($post->content), 120) }}</div>

                  <div class="post-actions">
                    <a href="{{ route('blog.show', $post) }}" class="btn-sec">View</a>
                    <a href="{{ route('blog.admin.edit', $post) }}" class="btn-sec">Edit</a>
                    <form action="{{ route('blog.admin.destroy', $post) }}" method="POST" onsubmit="return confirm('Delete this post?')">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn-pri" style="background: var(--danger);box-shadow:none;padding:.7rem 1rem">Delete</button>
                    </form>
                  </div>
                </div>
              @endforeach
            </div>
          @else
            <div class="dash-empty">
              No articles yet. Create the first post to populate the dashboard.
            </div>
          @endif

          <div style="margin-top:1rem">
            {{ $posts->links() }}
          </div>
        </div>
      </section>
    </main>
  </div>
</section>

<div class="modal-backdrop" id="createPostModal" aria-hidden="true">
  <div class="modal-panel" role="dialog" aria-modal="true" aria-labelledby="createPostTitle">
    <div class="modal-head">
      <div>
        <span class="eyebrow">Blog Admin</span>
        <h3 id="createPostTitle">Create a new post</h3>
      </div>
      <button type="button" class="modal-close" data-close-create-modal aria-label="Close modal">
        <i class="ti ti-x"></i>
      </button>
    </div>

    <div class="modal">
      <form class="editor-card modal-form" method="POST" action="{{ route('blog.admin.store') }}" enctype="multipart/form-data">
        @csrf

        <div class="section-title">
          <h3>Article details</h3>
          <span class="mini">Core content</span>
        </div>

        <div class="grid-2">
          <div class="field">
            <label for="modal_title">Title *</label>
            <input id="modal_title" name="title" type="text" value="{{ old('title') }}" required>
          </div>
          <div class="field">
            <label for="modal_slug">Slug</label>
            <input id="modal_slug" name="slug" type="text" value="{{ old('slug') }}" placeholder="auto-generated if empty">
          </div>
        </div>

        <div class="field">
          <label for="modal_excerpt">Excerpt</label>
          <textarea id="modal_excerpt" name="excerpt" placeholder="A short summary shown in lists and previews">{{ old('excerpt') }}</textarea>
        </div>

        <div class="field">
          <label for="modal_content">Content *</label>
          <textarea id="modal_content" name="content" placeholder="Write the full article here..." required>{{ old('content') }}</textarea>
        </div>

        <div class="field">
          <label for="modal_cover_image_file">Cover image *</label>
          <input id="modal_cover_image_file" name="cover_image_file" type="file" accept="image/*" required>
          <div class="field-help">Upload a JPG, PNG, WebP, or AVIF image.</div>
        </div>

        <div class="field">
          <label for="modal_cover_image_alt">Cover alt</label>
          <input id="modal_cover_image_alt" name="cover_image_alt" type="text" value="{{ old('cover_image_alt') }}" placeholder="Optional alt text">
        </div>

        <div class="editor-sep"></div>

        <div class="section-title">
          <h3>Publishing settings</h3>
          <span class="mini">Status and visibility</span>
        </div>

        <div class="grid-2">
          <div class="field">
            <label for="modal_status">Status</label>
            <select id="modal_status" name="status" required>
              @foreach (['draft', 'pending_review', 'scheduled', 'published', 'archived'] as $status)
                <option value="{{ $status }}" @selected(old('status', 'draft') === $status)>{{ str_replace('_', ' ', ucfirst($status)) }}</option>
              @endforeach
            </select>
          </div>
          <div class="field">
            <label for="modal_visibility">Visibility</label>
            <select id="modal_visibility" name="visibility" required>
              @foreach (['public', 'unlisted', 'private'] as $visibility)
                <option value="{{ $visibility }}" @selected(old('visibility', 'public') === $visibility)>{{ ucfirst($visibility) }}</option>
              @endforeach
            </select>
          </div>
        </div>

        <div class="checks">
          <label class="check-item">
            <input type="checkbox" name="is_featured" value="1" @checked(old('is_featured'))>
            <span>Featured article</span>
          </label>
          <label class="check-item">
            <input type="checkbox" name="is_pinned" value="1" @checked(old('is_pinned'))>
            <span>Pinned to top</span>
          </label>
          <label class="check-item">
            <input type="checkbox" name="allow_comments" value="1" @checked(old('allow_comments', true))>
            <span>Allow comments</span>
          </label>
        </div>

        <div class="editor-actions">
          <button type="submit" class="btn-pri">Create post</button>
          <button type="button" class="btn-sec" data-close-create-modal>Cancel</button>
        </div>
      </form>
    </div>
  </div>
</div>

<script>
(() => {
  const modal = document.getElementById('createPostModal');
  if (!modal) return;

  const openers = document.querySelectorAll('[data-open-create-modal]');
  const closers = document.querySelectorAll('[data-close-create-modal]');
  const firstField = modal.querySelector('#modal_title');
  const shouldOpen = {{ $errors->any() ? 'true' : 'false' }};

  const openModal = () => {
    modal.classList.add('open');
    modal.setAttribute('aria-hidden', 'false');
    document.body.style.overflow = 'hidden';
    if (firstField) firstField.focus();
  };

  const closeModal = () => {
    modal.classList.remove('open');
    modal.setAttribute('aria-hidden', 'true');
    document.body.style.overflow = '';
  };

  openers.forEach(btn => btn.addEventListener('click', openModal));
  closers.forEach(btn => btn.addEventListener('click', closeModal));
  modal.addEventListener('click', e => {
    if (e.target === modal) closeModal();
  });
  document.addEventListener('keydown', e => {
    if (e.key === 'Escape' && modal.classList.contains('open')) closeModal();
  });

  if (shouldOpen) openModal();
})();
</script>
@endsection


