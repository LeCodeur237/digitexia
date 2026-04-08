@extends('index')

@section('page_title', ($mode ?? 'create') === 'create' ? 'Create Blog Post — DigiTexia' : 'Edit Blog Post — DigiTexia')

@push('styles')
<style>
  .form-shell {
    padding: 130px 5% 80px;
    min-height: 100vh;
    background: var(--ink);
  }

  .form-wrap {
    max-width: 1100px;
    margin: 0 auto;
    display: grid;
    gap: 1.5rem;
  }

  .panel {
    padding: 1.5rem;
    border-radius: 18px;
    border: 1px solid var(--bdr);
    background: var(--ink-2);
  }

  .grid-2 {
    display: grid;
    grid-template-columns: repeat(2, minmax(0, 1fr));
    gap: 1rem;
  }

  .field label {
    display: block;
    margin-bottom: .45rem;
    color: var(--muted);
    font-size: .72rem;
    font-weight: 700;
    letter-spacing: .08em;
    text-transform: uppercase;
  }

  .field input,
  .field textarea,
  .field select {
    width: 100%;
    border: 1px solid var(--bdr);
    background: var(--ink-3);
    color: var(--white);
    border-radius: 12px;
    padding: .85rem 1rem;
    outline: none;
  }

  .field textarea {
    min-height: 180px;
    resize: vertical;
  }

  .checks {
    display: flex;
    flex-wrap: wrap;
    gap: 1rem;
  }
</style>
@endpush

@section('contain')
@php
  $post = $post ?? new \App\Models\BlogPost();
  $isEdit = ($mode ?? 'create') === 'edit';
  $action = $isEdit ? route('blog.admin.update', $post) : route('blog.admin.store');
@endphp

<section class="form-shell">
  <div class="form-wrap">
    <div>
      <div class="tag">Blog Admin</div>
      <h2 style="margin-top:1rem">{{ $isEdit ? 'Edit post' : 'Create a new post' }}</h2>
      <p class="lead">Blog authors must be authenticated before posting.</p>
    </div>

    @if (session('status'))
      <div style="padding:1rem;border-radius:12px;background:rgba(22,199,132,.1);border:1px solid var(--green-bdr);color:#BBF7D0">
        {{ session('status') }}
      </div>
    @endif

    <form class="panel" method="POST" action="{{ $action }}">
      @csrf
      @if ($isEdit)
        @method('PUT')
      @endif

      <div class="grid-2">
        <div class="field">
          <label for="title">Title</label>
          <input id="title" name="title" type="text" value="{{ old('title', $post->title) }}" required>
        </div>
        <div class="field">
          <label for="slug">Slug</label>
          <input id="slug" name="slug" type="text" value="{{ old('slug', $post->slug) }}" placeholder="auto-generated if empty">
        </div>
      </div>

      <div class="field">
        <label for="excerpt">Excerpt</label>
        <textarea id="excerpt" name="excerpt">{{ old('excerpt', $post->excerpt) }}</textarea>
      </div>

      <div class="field">
        <label for="content">Content</label>
        <textarea id="content" name="content" required>{{ old('content', $post->content) }}</textarea>
      </div>

      <div class="grid-2">
        <div class="field">
          <label for="seo_title">SEO Title</label>
          <input id="seo_title" name="seo_title" type="text" value="{{ old('seo_title', $post->seo_title) }}">
        </div>
        <div class="field">
          <label for="seo_description">SEO Description</label>
          <input id="seo_description" name="seo_description" type="text" value="{{ old('seo_description', $post->seo_description) }}">
        </div>
      </div>

      <div class="grid-2">
        <div class="field">
          <label for="cover_image">Cover Image</label>
          <input id="cover_image" name="cover_image" type="text" value="{{ old('cover_image', $post->cover_image) }}">
        </div>
        <div class="field">
          <label for="cover_image_alt">Cover Alt</label>
          <input id="cover_image_alt" name="cover_image_alt" type="text" value="{{ old('cover_image_alt', $post->cover_image_alt) }}">
        </div>
      </div>

      <div class="grid-2">
        <div class="field">
          <label for="tags">Tags</label>
          <input id="tags" name="tags" type="text" value="{{ old('tags', is_array($post->tags ?? null) ? implode(', ', $post->tags) : '') }}" placeholder="news, product, africa">
        </div>
        <div class="field">
          <label for="reading_time_minutes">Reading time (minutes)</label>
          <input id="reading_time_minutes" name="reading_time_minutes" type="number" min="1" max="999" value="{{ old('reading_time_minutes', $post->reading_time_minutes) }}">
        </div>
      </div>

      <div class="grid-2">
        <div class="field">
          <label for="status">Status</label>
          <select id="status" name="status" required>
            @foreach (['draft', 'pending_review', 'scheduled', 'published', 'archived'] as $status)
              <option value="{{ $status }}" @selected(old('status', $post->status ?: 'draft') === $status)>{{ str_replace('_', ' ', ucfirst($status)) }}</option>
            @endforeach
          </select>
        </div>
        <div class="field">
          <label for="visibility">Visibility</label>
          <select id="visibility" name="visibility" required>
            @foreach (['public', 'unlisted', 'private'] as $visibility)
              <option value="{{ $visibility }}" @selected(old('visibility', $post->visibility ?: 'public') === $visibility)>{{ ucfirst($visibility) }}</option>
            @endforeach
          </select>
        </div>
      </div>

      <div class="grid-2">
        <div class="field">
          <label for="published_at">Published At</label>
          <input id="published_at" name="published_at" type="datetime-local" value="{{ old('published_at', optional($post->published_at)->format('Y-m-d\TH:i')) }}">
        </div>
        <div class="field">
          <label for="scheduled_for">Scheduled For</label>
          <input id="scheduled_for" name="scheduled_for" type="datetime-local" value="{{ old('scheduled_for', optional($post->scheduled_for)->format('Y-m-d\TH:i')) }}">
        </div>
      </div>

      <div class="checks">
        <label><input type="checkbox" name="is_featured" value="1" @checked(old('is_featured', $post->is_featured))> Featured</label>
        <label><input type="checkbox" name="is_pinned" value="1" @checked(old('is_pinned', $post->is_pinned))> Pinned</label>
        <label><input type="checkbox" name="allow_comments" value="1" @checked(old('allow_comments', $post->allow_comments ?? true))> Allow comments</label>
      </div>

      <div style="display:flex;gap:.75rem;flex-wrap:wrap;margin-top:1.25rem">
        <button type="submit" class="btn-pri">{{ $isEdit ? 'Update post' : 'Create post' }}</button>
        <a href="{{ route('blog.admin.index') }}" class="btn-sec">Back to list</a>
      </div>
    </form>
  </div>
</section>
@endsection
