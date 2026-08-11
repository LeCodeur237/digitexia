@extends('index')

@section('page_title', $post->seo_title ?: $post->title)

@push('styles')
<style>
  .show-shell {
    padding: 130px 5% 80px;
    background: var(--bg-primary);
  }

  .show-wrap {
    max-width: 900px;
    margin: 0 auto;
  }

  .show-card {
    padding: 2rem;
    border-radius: 20px;
    border: 1px solid var(--border-color);
    background: var(--card-bg);
  }

  .show-meta {
    display: flex;
    gap: .75rem;
    flex-wrap: wrap;
    color: var(--text-soft);
    font-size: .85rem;
    margin-bottom: 1rem;
  }

  .show-content {
    color: var(--text-muted);
    line-height: 1.85;
  }

  .show-content h2,
  .show-content h3 {
    color: var(--text-main);
    margin: 1.5rem 0 .75rem;
  }

  .comment-box {
    margin-top: 2rem;
    padding: 1.5rem;
    border-radius: 18px;
    border: 1px solid var(--border-color);
    background: var(--surface-soft);
  }

  .comment-box textarea,
  .comment-box input {
    width: 100%;
    padding: .9rem 1rem;
    border-radius: 12px;
    border: 1px solid var(--border-color);
    background: var(--input-bg);
    color: var(--text-main);
    outline: none;
  }
</style>
@endpush

@section('contain')
@php
  $coverImage = $post->cover_image
    ? (
      \Illuminate\Support\Str::startsWith($post->cover_image, ['http://', 'https://', '/'])
        ? $post->cover_image
        : asset('storage/' . $post->cover_image)
    )
    : null;
@endphp

<section class="show-shell">
  <div class="show-wrap">
    <div class="tag" style="margin-bottom:1rem">{{ __('Blog article') }}</div>
    <div class="show-card">
      <div class="show-meta">
        <span>{{ $post->author->name ?? 'DigiTexia' }}</span>
        <span>&bull;</span>
        <span>{{ optional($post->published_at)->format('d M Y') ?? __('Draft') }}</span>
        <span>&bull;</span>
        <span>{{ $post->reading_time_minutes ?? 5 }} {{ __('min read') }}</span>
      </div>

      <h1 style="font-family:'Clash Display',sans-serif;font-size:clamp(2rem,4vw,3.4rem);line-height:1.05;margin-bottom:1rem">{{ $post->title }}</h1>
      <p class="lead">{{ $post->excerpt }}</p>

      @if (!empty($coverImage))
        <div style="margin:1.5rem 0;border-radius:18px;overflow:hidden;border:1px solid var(--border-color)">
          <img src="{{ $coverImage }}" alt="{{ $post->cover_image_alt ?: $post->title }}" style="width:100%;display:block">
        </div>
      @endif

      <div class="show-content">
        {!! nl2br(e($post->content)) !!}
      </div>
    </div>

    <div class="comment-box">
      <h2 style="margin-bottom:1rem">{{ __('Comments') }}</h2>
      @if ($post->allow_comments)
        @auth
          <form method="POST" action="{{ route('blog.comments.store', $post) }}">
            @csrf
            <div style="margin-bottom:1rem">
              <textarea name="body" rows="5" placeholder="{{ __('Write your comment...') }}" required>{{ old('body') }}</textarea>
            </div>
            <button type="submit" class="btn-pri">{{ __('Submit comment') }}</button>
          </form>
        @else
          <p class="lead">{{ __('Please login to leave a comment.') }}</p>
          <a href="{{ route('login') }}" class="btn-pri">{{ __('Login') }}</a>
        @endauth
      @else
        <p class="lead">{{ __('Comments are disabled for this article.') }}</p>
      @endif
    </div>
  </div>
</section>
@endsection
