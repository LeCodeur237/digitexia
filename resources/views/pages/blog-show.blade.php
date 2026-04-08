@extends('index')

@section('page_title', $post->seo_title ?: $post->title)

@push('styles')
<style>
  .show-shell {
    padding: 130px 5% 80px;
    background: var(--ink);
  }

  .show-wrap {
    max-width: 900px;
    margin: 0 auto;
  }

  .show-card {
    padding: 2rem;
    border-radius: 20px;
    border: 1px solid var(--bdr);
    background: var(--ink-2);
  }

  .show-meta {
    display: flex;
    gap: .75rem;
    flex-wrap: wrap;
    color: var(--muted);
    font-size: .85rem;
    margin-bottom: 1rem;
  }

  .show-content {
    color: var(--muted-lt);
    line-height: 1.85;
  }

  .show-content h2,
  .show-content h3 {
    color: var(--white);
    margin: 1.5rem 0 .75rem;
  }

  .comment-box {
    margin-top: 2rem;
    padding: 1.5rem;
    border-radius: 18px;
    border: 1px solid var(--bdr);
    background: rgba(255,255,255,.03);
  }

  .comment-box textarea,
  .comment-box input {
    width: 100%;
    padding: .9rem 1rem;
    border-radius: 12px;
    border: 1px solid var(--bdr);
    background: var(--ink-3);
    color: var(--white);
    outline: none;
  }
</style>
@endpush

@section('contain')
<section class="show-shell">
  <div class="show-wrap">
    <div class="tag" style="margin-bottom:1rem">Blog article</div>
    <div class="show-card">
      <div class="show-meta">
        <span>{{ $post->author->name ?? 'DigiTexia' }}</span>
        <span>•</span>
        <span>{{ optional($post->published_at)->format('d M Y') ?? 'Draft' }}</span>
        <span>•</span>
        <span>{{ $post->reading_time_minutes ?? 5 }} min read</span>
      </div>

      <h1 style="font-family:'Clash Display',sans-serif;font-size:clamp(2rem,4vw,3.4rem);line-height:1.05;margin-bottom:1rem">{{ $post->title }}</h1>
      <p class="lead">{{ $post->excerpt }}</p>

      @if (!empty($post->cover_image))
        <div style="margin:1.5rem 0;border-radius:18px;overflow:hidden;border:1px solid var(--bdr)">
          <img src="{{ $post->cover_image }}" alt="{{ $post->cover_image_alt ?: $post->title }}" style="width:100%;display:block">
        </div>
      @endif

      <div class="show-content">
        {!! nl2br(e($post->content)) !!}
      </div>
    </div>

    <div class="comment-box">
      <h2 style="margin-bottom:1rem">Comments</h2>
      @if ($post->allow_comments)
        @auth
          <form method="POST" action="{{ route('blog.comments.store', $post) }}">
            @csrf
            <div style="margin-bottom:1rem">
              <textarea name="body" rows="5" placeholder="Write your comment..." required>{{ old('body') }}</textarea>
            </div>
            <button type="submit" class="btn-pri">Submit comment</button>
          </form>
        @else
          <p class="lead">Please login to leave a comment.</p>
          <a href="{{ route('login') }}" class="btn-pri">Login</a>
        @endauth
      @else
        <p class="lead">Comments are disabled for this article.</p>
      @endif
    </div>
  </div>
</section>
@endsection
