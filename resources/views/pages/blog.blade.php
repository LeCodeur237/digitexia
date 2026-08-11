@extends('index')

@section('page_title', __('DigiTexia | Blog and Technology Insights'))
@section('digitexia_v2', true)

@push('styles')
<link rel="stylesheet" href="{{ asset('css/blog-v2.css') }}?v={{ filemtime(public_path('css/blog-v2.css')) }}">
@endpush

@php
    $postsCollection = isset($posts) ? $posts->getCollection() : collect();
    $featuredPost = $postsCollection->firstWhere('is_featured', true) ?? $postsCollection->first();
    $otherPosts = $featuredPost ? $postsCollection->reject(fn ($post) => $post->id === $featuredPost->id)->values() : collect();
    $featuredTag = $featuredPost && !empty($featuredPost->tags) ? ($featuredPost->tags[0] ?? 'Blog') : 'Blog';
    $topics = [
        __('All'),
        __('AI & Intelligent Systems'),
        __('Digital Transformation'),
        __('Digital Infrastructure'),
        __('Innovation'),
        __('Africa & Technology'),
        __('Industry Insights'),
    ];
@endphp

@section('fullpage')
@include('partials.v2.header')

<main class="dx-blog">
    <section class="page-hero">
        <div class="dx-blueprint"></div>
        <div class="dx-container dx-reveal">
            <div class="dx-eyebrow">{{ __('Blog') }} / {{ __('Life at Digi') }}</div>
            <h1>{{ __('Technology, innovation and digital transformation insights for Africa.') }}</h1>
            <p class="page-hero-subtitle">
                {{ __('We share what we learn building digital infrastructure across Africa: practical perspectives on AI, enterprise technology and the real-world challenges organizations face.') }}
            </p>
        </div>
    </section>

    <section class="dx-section" id="blog">
        <div class="dx-container">
            <div class="cat-pills dx-reveal" aria-label="{{ __('Blog topics') }}">
                @foreach ($topics as $topic)
                    <span class="cat-pill {{ $loop->first ? 'active' : '' }}">{{ $topic }}</span>
                @endforeach
            </div>

            @if ($featuredPost)
                <article class="featured-card dx-reveal">
                    <a href="{{ route('blog.show', $featuredPost) }}" class="featured-media" aria-label="{{ $featuredPost->title }}">
                        @if ($featuredPost->cover_image)
                            @php
                                $featuredCover = \Illuminate\Support\Str::startsWith($featuredPost->cover_image, ['http://', 'https://'])
                                    ? $featuredPost->cover_image
                                    : asset($featuredPost->cover_image);
                            @endphp
                            <img src="{{ $featuredCover }}" alt="{{ $featuredPost->cover_image_alt ?: $featuredPost->title }}">
                        @else
                            <div class="media-placeholder">DGX</div>
                        @endif
                        <span class="featured-badge">{{ __('Featured') }}</span>
                    </a>

                    <div class="featured-body">
                        <div class="post-meta">
                            <span class="post-tag">{{ $featuredTag }}</span>
                            <span>{{ optional($featuredPost->published_at)->format('M d, Y') ?? __('Coming soon') }}</span>
                            <span>{{ $featuredPost->reading_time_minutes ?? 5 }} {{ __('min read') }}</span>
                        </div>
                        <h2>{{ $featuredPost->title }}</h2>
                        <p class="excerpt">{{ $featuredPost->excerpt ?: \Illuminate\Support\Str::limit(strip_tags($featuredPost->content), 180) }}</p>

                        <div class="post-author-row">
                            <div class="post-avatar">DX</div>
                            <div>
                                <div class="post-author">{{ $featuredPost->author->name ?? 'DigiTexia' }}</div>
                                <div class="post-role">{{ __('Author') }}</div>
                            </div>
                        </div>

                        <div class="featured-link">
                            <a href="{{ route('blog.show', $featuredPost) }}" class="dx-btn dx-btn-secondary">
                                {{ __('Read full article') }}
                                <span class="dx-btn-arrow" aria-hidden="true">&rarr;</span>
                            </a>
                        </div>
                    </div>
                </article>
            @else
                <div class="empty-state dx-reveal">
                    <div class="dx-eyebrow">{{ __('Insights coming soon') }}</div>
                    <h2>{{ __('Our insight library is being prepared.') }}</h2>
                    <p class="page-hero-subtitle">
                        {{ __('This space will share practical guidance for leaders working on AI, infrastructure monitoring, automation and digital transformation across Africa.') }}
                    </p>
                    <div class="empty-grid">
                        <article class="empty-card">
                            <h3>{{ __('Operational playbooks') }}</h3>
                            <p>{{ __('How to identify manual friction, prioritize workflows and improve execution.') }}</p>
                        </article>
                        <article class="empty-card">
                            <h3>{{ __('Product and case notes') }}</h3>
                            <p>{{ __('Lessons from DigiTexia products, client projects and implementation work.') }}</p>
                        </article>
                        <article class="empty-card">
                            <h3>{{ __('Decision guides') }}</h3>
                            <p>{{ __('Clear thinking for technology choices, automation and digital transformation.') }}</p>
                        </article>
                    </div>
                </div>
            @endif

            @if ($otherPosts->count())
                <div class="dx-section-head dx-reveal blog-latest-head">
                    <div class="dx-eyebrow">{{ __('Latest insights') }}</div>
                    <h2>{{ __('Recent articles') }}</h2>
                    <p class="dx-section-intro">{{ __('Articles are published in English so the editorial voice stays consistent across markets.') }}</p>
                </div>

                <div class="articles-grid dx-reveal">
                    @foreach ($otherPosts->take(9) as $post)
                        @php
                            $tag = !empty($post->tags) ? ($post->tags[0] ?? 'Blog') : 'Blog';
                            $cover = $post->cover_image && \Illuminate\Support\Str::startsWith($post->cover_image, ['http://', 'https://'])
                                ? $post->cover_image
                                : ($post->cover_image ? asset($post->cover_image) : null);
                        @endphp
                        <article class="article-card">
                            <a href="{{ route('blog.show', $post) }}" class="article-media" aria-label="{{ $post->title }}">
                                @if ($cover)
                                    <img src="{{ $cover }}" alt="{{ $post->cover_image_alt ?: $post->title }}">
                                @else
                                    <div class="media-placeholder">DGX</div>
                                @endif
                            </a>
                            <div class="article-body">
                                <div class="post-meta">
                                    <span class="post-tag">{{ $tag }}</span>
                                    <span>{{ optional($post->published_at)->format('M d, Y') ?? __('Draft') }}</span>
                                </div>
                                <h3>{{ $post->title }}</h3>
                                <p class="excerpt">{{ $post->excerpt ?: \Illuminate\Support\Str::limit(strip_tags($post->content), 120) }}</p>
                                <div class="article-foot">
                                    <span class="post-meta">{{ $post->reading_time_minutes ?? 5 }} {{ __('min read') }}</span>
                                    <a href="{{ route('blog.show', $post) }}" class="read-more">{{ __('Read more') }} <span aria-hidden="true">&rarr;</span></a>
                                </div>
                            </div>
                        </article>
                    @endforeach
                </div>

                @if (isset($posts) && $posts->hasPages())
                    <div class="pagination-wrap">
                        {{ $posts->links() }}
                    </div>
                @endif
            @endif
        </div>
    </section>

    <section class="dx-final-cta">
        <div class="dx-container dx-reveal">
            <div class="dx-eyebrow">{{ __('Let us talk') }}</div>
            <h2>{{ __('Have a digital challenge to solve? Let us talk.') }}</h2>
            <p class="dx-cta-subheading">
                {{ __('If something you read here connects to a challenge your organization is facing, we welcome the conversation.') }}
            </p>
            <div class="dx-cta-buttons">
                <a href="{{ url('/contact-us') }}" class="dx-btn dx-btn-primary">
                    {{ __('Start a Conversation') }}
                    <span class="dx-btn-arrow" aria-hidden="true">&rarr;</span>
                </a>
                <a href="{{ url('/solutions') }}" class="dx-btn dx-btn-secondary">{{ __('Explore Our Solutions') }}</a>
            </div>
        </div>
    </section>
</main>

@include('partials.v2.footer')
@endsection
