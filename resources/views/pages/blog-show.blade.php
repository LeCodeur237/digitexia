@extends('index')

@section('page_title', $post->seo_title ?: $post->title)
@section('digitexia_v2', true)

@push('styles')
<link rel="stylesheet" href="{{ asset('css/blog-v2.css') }}?v={{ filemtime(public_path('css/blog-v2.css')) }}">
@endpush

@php
    $coverImage = $post->cover_image
        ? (
            \Illuminate\Support\Str::startsWith($post->cover_image, ['http://', 'https://', '/'])
                ? $post->cover_image
                : asset('storage/' . $post->cover_image)
        )
        : null;
    $shareUrl = route('blog.show', $post);
    $shareTitle = $post->title;
    $encodedShareUrl = rawurlencode($shareUrl);
    $encodedShareTitle = rawurlencode($shareTitle);
    $primaryTag = !empty($post->tags) ? ($post->tags[0] ?? 'Blog') : 'Blog';
@endphp

@section('fullpage')
@include('partials.v2.header')

<main class="dx-blog dx-blog-show">
    <section class="article-hero">
        <div class="dx-blueprint"></div>
        <div class="dx-container article-hero-grid">
            <div class="article-hero-copy dx-reveal">
                <a href="{{ route('blog.index') }}" class="article-back">
                    <i class="ti ti-arrow-left"></i>
                    <span>{{ __('Back to Blog') }}</span>
                </a>

                <div class="post-meta">
                    <span class="post-tag">{{ $primaryTag }}</span>
                    <span>{{ optional($post->published_at)->format('M d, Y') ?? __('Draft') }}</span>
                    <span>{{ $post->reading_time_minutes ?? 5 }} {{ __('min read') }}</span>
                </div>

                <h1>{{ $post->title }}</h1>

                @if ($post->excerpt)
                    <p class="article-excerpt">{{ $post->excerpt }}</p>
                @endif

                <div class="article-author-row">
                    <div class="post-avatar">DX</div>
                    <div>
                        <div class="post-author">{{ $post->author->name ?? 'DigiTexia' }}</div>
                        <div class="post-role">{{ __('Author') }}</div>
                    </div>
                </div>
            </div>

            <div class="article-hero-media dx-reveal">
                @if ($coverImage)
                    <img src="{{ $coverImage }}" alt="{{ $post->cover_image_alt ?: $post->title }}">
                @else
                    <div class="media-placeholder">DGX</div>
                @endif
            </div>
        </div>
    </section>

    <section class="article-body-section">
        <div class="dx-container article-layout">
            <aside class="article-aside dx-reveal">
                <div class="article-share-card">
                    <div class="share-title">{{ __('Share this article') }}</div>
                    <div class="share-links">
                        <a href="https://www.facebook.com/sharer/sharer.php?u={{ $encodedShareUrl }}" target="_blank" rel="noopener noreferrer" aria-label="{{ __('Share on Facebook') }}">
                            <i class="ti ti-brand-facebook"></i>
                        </a>
                        <a href="https://twitter.com/intent/tweet?url={{ $encodedShareUrl }}&text={{ $encodedShareTitle }}" target="_blank" rel="noopener noreferrer" aria-label="{{ __('Share on X') }}">
                            <i class="ti ti-brand-x"></i>
                        </a>
                        <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ $encodedShareUrl }}" target="_blank" rel="noopener noreferrer" aria-label="{{ __('Share on LinkedIn') }}">
                            <i class="ti ti-brand-linkedin"></i>
                        </a>
                        <a href="https://wa.me/?text={{ $encodedShareTitle }}%20{{ $encodedShareUrl }}" target="_blank" rel="noopener noreferrer" aria-label="{{ __('Share on WhatsApp') }}">
                            <i class="ti ti-brand-whatsapp"></i>
                        </a>
                    </div>
                </div>
            </aside>

            <article class="article-content-card dx-reveal">
                <div class="article-content">
                    {!! $post->content !!}
                </div>
            </article>
        </div>
    </section>

    <section class="article-comments-section">
        <div class="dx-container article-comments-wrap dx-reveal">
            <div class="article-comments-card">
                <h2>{{ __('Comments') }}</h2>
                @if ($post->allow_comments)
                    @auth
                        <form method="POST" action="{{ route('blog.comments.store', $post) }}">
                            @csrf
                            <textarea name="body" rows="5" placeholder="{{ __('Write your comment...') }}" required>{{ old('body') }}</textarea>
                            <button type="submit" class="dx-btn dx-btn-primary">{{ __('Submit comment') }}</button>
                        </form>
                    @else
                        <p>{{ __('Please login to leave a comment.') }}</p>
                        <a href="{{ route('login') }}" class="dx-btn dx-btn-primary">{{ __('Login') }}</a>
                    @endauth
                @else
                    <p>{{ __('Comments are disabled for this article.') }}</p>
                @endif
            </div>
        </div>
    </section>
</main>

@include('partials.v2.footer')
@endsection
