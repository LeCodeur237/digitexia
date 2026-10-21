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

@section('seo_description', $shareDescription)
@section('canonical_url', $shareUrl)
@section('og_type', 'article')
@section('og_title', $shareTitle)
@section('og_description', $shareDescription)
@section('og_image', $coverImage)
@section('twitter_title', $shareTitle)
@section('twitter_description', $shareDescription)
@section('twitter_image', $coverImage)

@push('meta')
<meta property="og:image:secure_url" content="{{ $coverImage }}">
<meta property="og:image:alt" content="{{ $post->cover_image_alt ?: $post->title }}">
@if ($post->published_at)
<meta property="article:published_time" content="{{ $post->published_at->toAtomString() }}">
@endif
@if ($post->updated_at)
<meta property="article:modified_time" content="{{ $post->updated_at->toAtomString() }}">
@endif
@endpush

@push('styles')
<link rel="stylesheet" href="{{ asset('css/blog-v2.css') }}?v={{ filemtime(public_path('css/blog-v2.css')) }}">
@endpush

@section('fullpage')
@include('partials.v2.header')

<main class="dx-blog dx-blog-show">
    <div class="article-reading-progress" data-reading-progress aria-hidden="true"></div>
    <section class="article-hero">
        <div class="dx-container">
            <div class="article-hero-copy">
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
                    <div class="article-author">
                        <div class="post-avatar">DX</div>
                        <div>
                            <div class="post-author">{{ $post->author->name ?? 'DigiTexia' }}</div>
                            <div class="post-role">{{ __('Author') }}</div>
                        </div>
                    </div>
                    <div class="article-share">
                        <span>{{ __('Share') }}</span>
                        <div class="share-links">
                            <a href="https://www.facebook.com/sharer/sharer.php?u={{ $encodedShareUrl }}" target="_blank" rel="noopener noreferrer" aria-label="{{ __('Share on Facebook') }}"><i class="ti ti-brand-facebook"></i></a>
                            <a href="https://twitter.com/intent/tweet?url={{ $encodedShareUrl }}&text={{ $encodedShareTitle }}" target="_blank" rel="noopener noreferrer" aria-label="{{ __('Share on X') }}"><i class="ti ti-brand-x"></i></a>
                            <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ $encodedShareUrl }}" target="_blank" rel="noopener noreferrer" aria-label="{{ __('Share on LinkedIn') }}"><i class="ti ti-brand-linkedin"></i></a>
                            <a href="https://wa.me/?text={{ $encodedShareTitle }}%20{{ $encodedShareUrl }}" target="_blank" rel="noopener noreferrer" aria-label="{{ __('Share on WhatsApp') }}"><i class="ti ti-brand-whatsapp"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="article-cover">
        <div class="dx-container">
            <img src="{{ $coverImage }}" alt="{{ $post->cover_image_alt ?: $post->title }}">
        </div>
    </section>

    <section class="article-body-section">
        <div class="dx-container article-layout">
            <aside class="article-aside" data-article-toc aria-label="{{ __('In this article') }}" hidden>
                <strong>{{ __('In this article') }}</strong>
                <nav data-article-toc-links></nav>
            </aside>

            <article class="article-content-card">
                <div class="article-content">
                    {!! $post->content !!}
                </div>
            </article>
        </div>
    </section>

    <section class="article-comments-section">
        <div class="dx-container article-comments-wrap">
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
                                <div><label for="comment-name">{{ __('Your name') }}</label><input id="comment-name" type="text" name="guest_name" value="{{ old('guest_name') }}" required></div>
                                <div><label for="comment-email">{{ __('Your email address') }}</label><input id="comment-email" type="email" name="guest_email" value="{{ old('guest_email') }}" required></div>
                            </div>
                        @endguest
                        <div><label for="comment-body">{{ __('Write your comment...') }}</label><textarea id="comment-body" name="body" rows="5" required>{{ old('body') }}</textarea></div>
                        <button type="submit" class="dx-btn dx-btn-primary">{{ __('Submit comment') }}</button>
                    </form>
                @else
                    <p>{{ __('Comments are disabled for this article.') }}</p>
                @endif
            </div>
        </div>
    </section>

    @if ($relatedPost)
        @php
            $relatedCover = $relatedPost->cover_image
                ? (\Illuminate\Support\Str::startsWith($relatedPost->cover_image, ['http://', 'https://', '/'])
                    ? $relatedPost->cover_image
                    : asset('storage/' . $relatedPost->cover_image))
                : asset('images/hero-home.jpg');
        @endphp
        <section class="article-related">
            <div class="dx-container">
                <h2>{{ __('Read also') }}</h2>
                <article class="article-related-post">
                    <a href="{{ route('blog.show', $relatedPost) }}" aria-label="{{ $relatedPost->title }}"><img src="{{ $relatedCover }}" alt="{{ $relatedPost->cover_image_alt ?: $relatedPost->title }}" loading="lazy"></a>
                    <div class="article-related-copy">
                        <span>{{ optional($relatedPost->published_at)->format('M d, Y') }}</span>
                        <h3><a href="{{ route('blog.show', $relatedPost) }}">{{ $relatedPost->title }}</a></h3>
                        <p>{{ $relatedPost->excerpt ?: \Illuminate\Support\Str::limit(strip_tags($relatedPost->content), 120) }}</p>
                        <a class="article-related-link" href="{{ route('blog.show', $relatedPost) }}">{{ __('Read more') }} <span aria-hidden="true">&rarr;</span></a>
                    </div>
                </article>
            </div>
        </section>
    @endif

    <section class="dx-final-cta blog-final-cta" id="parlons">
        <div class="dx-container blog-cta-grid">
            <div class="blog-cta-copy">
                <div class="dx-eyebrow">{{ __('Let us talk') }}</div>
                <h2>{{ __('Let us build the right digital solution together') }}</h2>
                <p class="dx-cta-subheading">{{ __('The best digital solutions start with a conversation, not a proposal.') }}</p>
                <p class="dx-cta-description">{{ __('Tell us about your operational challenge. We will assess it directly and share a practical path forward, without obligation.') }}</p>
                <div class="dx-cta-buttons">
                    <a href="tel:+237650945280" class="dx-btn dx-btn-primary">{{ __('Call (+237) 650 945 280') }}</a>
                    <a href="{{ url('/contact-us') }}" class="dx-btn dx-btn-secondary">{{ __('Start a Conversation') }}</a>
                </div>
            </div>
            <div class="blog-cta-visual" aria-hidden="true">
                <div class="blog-cta-grid-lines"></div>
                <div class="blog-cta-panel">
                    <strong>{{ __('Long-Term Partnership') }}</strong>
                    <p>{{ __('The best digital solutions start with a conversation, not a proposal.') }}</p>
                </div>
            </div>
        </div>
    </section>
</main>

<script>
(() => {
    const content = document.querySelector('.dx-blog-show .article-content');
    const toc = document.querySelector('[data-article-toc]');
    const links = document.querySelector('[data-article-toc-links]');
    const headings = content ? [...content.querySelectorAll('h2')] : [];
    if (headings.length && toc && links) {
        headings.forEach((heading, index) => {
            heading.id = heading.id || `article-section-${index + 1}`;
            const link = document.createElement('a');
            link.href = `#${heading.id}`;
            link.textContent = heading.textContent.trim();
            links.appendChild(link);
        });
        toc.hidden = false;
    }

    const progress = document.querySelector('[data-reading-progress]');
    if (content && progress) {
        const update = () => {
            const start = content.getBoundingClientRect().top + window.scrollY;
            const end = content.getBoundingClientRect().bottom + window.scrollY - window.innerHeight;
            const value = end > start ? Math.max(0, Math.min(1, (window.scrollY - start) / (end - start))) : 0;
            progress.style.width = `${value * 100}%`;
        };
        window.addEventListener('scroll', update, { passive: true });
        window.addEventListener('resize', update);
        update();
    }
})();
</script>

@include('partials.v2.footer')
@endsection
