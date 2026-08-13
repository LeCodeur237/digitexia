@extends('index')

@section('page_title', $post->seo_title ?: $post->title)
@section('digitexia_v2', true)

@php
    $coverImage = $post->cover_image
        ? (
            \Illuminate\Support\Str::startsWith($post->cover_image, ['http://', 'https://', '/'])
                ? $post->cover_image
                : asset('storage/' . $post->cover_image)
        )
        : asset('images/hero-home.jpg');
    $shareUrl = route('blog.show', $post);
    $shareTitle = $post->title;
    $shareDescription = $post->seo_description ?: ($post->excerpt ?: \Illuminate\Support\Str::limit(strip_tags($post->content), 180));
    $encodedShareUrl = rawurlencode($shareUrl);
    $encodedShareTitle = rawurlencode($shareTitle);
    $primaryTag = !empty($post->tags) ? ($post->tags[0] ?? 'Blog') : 'Blog';
@endphp

@push('meta')
<meta name="description" content="{{ $shareDescription }}">
<meta property="og:type" content="article">
<meta property="og:site_name" content="DigiTexia">
<meta property="og:title" content="{{ $shareTitle }}">
<meta property="og:description" content="{{ $shareDescription }}">
<meta property="og:url" content="{{ $shareUrl }}">
<meta property="og:image" content="{{ $coverImage }}">
<meta property="og:image:secure_url" content="{{ $coverImage }}">
<meta property="og:image:alt" content="{{ $post->cover_image_alt ?: $post->title }}">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="{{ $shareTitle }}">
<meta name="twitter:description" content="{{ $shareDescription }}">
<meta name="twitter:image" content="{{ $coverImage }}">
@endpush

@push('styles')
<link rel="stylesheet" href="{{ asset('css/blog-v2.css') }}?v={{ filemtime(public_path('css/blog-v2.css')) }}">
@endpush

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
                    @if (session('status'))
                        <div class="article-comment-alert">{{ session('status') }}</div>
                    @endif

                    @if ($errors->any())
                        <div class="article-comment-alert error">{{ $errors->first() }}</div>
                    @endif

                    <form method="POST" action="{{ route('blog.comments.store', $post) }}">
                        @csrf
                        @guest
                            <div class="article-comment-grid">
                                <input type="text" name="guest_name" value="{{ old('guest_name') }}" placeholder="{{ __('Your name') }}" required>
                                <input type="email" name="guest_email" value="{{ old('guest_email') }}" placeholder="{{ __('Your email address') }}" required>
                            </div>
                        @endguest
                        <textarea name="body" rows="5" placeholder="{{ __('Write your comment...') }}" required>{{ old('body') }}</textarea>
                        <button type="submit" class="dx-btn dx-btn-primary">{{ __('Submit comment') }}</button>
                    </form>
                @else
                    <p>{{ __('Comments are disabled for this article.') }}</p>
                @endif
            </div>
        </div>
    </section>
</main>

@include('partials.v2.footer')
@endsection
