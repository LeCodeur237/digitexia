@extends('admin.layout', ['pageTitle' => ($mode === 'edit' ? 'Edit publication' : 'New publication') . ' - DigiTexia Admin'])

@push('admin_styles')
<link href="https://cdn.quilljs.com/1.3.7/quill.snow.css" rel="stylesheet">
@endpush

@php
    $isEdit = $mode === 'edit';
    $action = $isEdit ? route('blog.admin.update', $post) : route('blog.admin.store');
    $tags = old('tags', is_array($post->tags) ? implode(', ', $post->tags) : '');
    $initialCoverMode = old('cover_mode', old('cover_image', $post->cover_image) ? 'path' : 'upload');
@endphp

@section('admin_content')
<div class="admin-page-head">
    <div>
        <h1>{{ $isEdit ? 'Edit publication' : 'New publication' }}</h1>
        <p>Use Quill to write structured articles with headings, lists, links and rich formatting.</p>
    </div>
    <a href="{{ route('blog.admin.index') }}" class="admin-btn">Back to publications</a>
</div>

<form class="admin-form" method="POST" action="{{ $action }}" enctype="multipart/form-data" data-quill-form data-admin-submit>
    @csrf
    @if ($isEdit)
        @method('PATCH')
    @endif

    <div class="admin-form-grid">
        <section class="admin-card">
            <div class="admin-field">
                <label for="title">Title *</label>
                <input id="title" name="title" type="text" value="{{ old('title', $post->title) }}" required>
            </div>

            <div class="admin-field">
                <label for="excerpt">Excerpt</label>
                <textarea id="excerpt" name="excerpt" maxlength="500">{{ old('excerpt', $post->excerpt) }}</textarea>
            </div>

            <div class="admin-field">
                <label>Content *</label>
                <div id="quillEditor">{!! old('content', $post->content) !!}</div>
                <textarea id="content" name="content" class="admin-hidden-content">{{ old('content', $post->content) }}</textarea>
                <div class="admin-field-error" id="contentError" hidden>Article content is required.</div>
            </div>

            <div class="admin-field">
                <label for="tags">Tags</label>
                <input id="tags" name="tags" type="text" value="{{ $tags }}" placeholder="AI, Data, Infrastructure">
            </div>
        </section>

        <aside class="admin-card">
            <div class="admin-field">
                <label for="slug">Slug</label>
                <input id="slug" name="slug" type="text" value="{{ old('slug', $post->slug) }}" placeholder="auto-generated if empty">
            </div>

            <div class="admin-field">
                <label for="status">Status</label>
                <select id="status" name="status" required>
                    @foreach (['draft', 'pending_review', 'scheduled', 'published', 'archived'] as $status)
                        <option value="{{ $status }}" @selected(old('status', $post->status ?: 'draft') === $status)>{{ str_replace('_', ' ', ucfirst($status)) }}</option>
                    @endforeach
                </select>
            </div>

            <div class="admin-field">
                <label for="visibility">Visibility</label>
                <select id="visibility" name="visibility" required>
                    @foreach (['public', 'unlisted', 'private'] as $visibility)
                        <option value="{{ $visibility }}" @selected(old('visibility', $post->visibility ?: 'public') === $visibility)>{{ ucfirst($visibility) }}</option>
                    @endforeach
                </select>
            </div>

            <div class="admin-conditional-note" data-status-help>
                Drafts are saved privately. Publishing and scheduling options appear when needed.
            </div>

            <div class="admin-field" data-status-field="published">
                <label for="published_at">Published at</label>
                <input id="published_at" name="published_at" type="datetime-local" value="{{ old('published_at', optional($post->published_at)->format('Y-m-d\TH:i')) }}">
            </div>

            <div class="admin-field" data-status-field="scheduled">
                <label for="scheduled_for">Scheduled for *</label>
                <input id="scheduled_for" name="scheduled_for" type="datetime-local" value="{{ old('scheduled_for', optional($post->scheduled_for)->format('Y-m-d\TH:i')) }}">
            </div>

            <div class="admin-field">
                <label>Cover source</label>
                <div class="admin-segmented">
                    <label>
                        <input type="radio" name="cover_mode" value="upload" @checked($initialCoverMode === 'upload')>
                        <span>Upload</span>
                    </label>
                    <label>
                        <input type="radio" name="cover_mode" value="path" @checked($initialCoverMode === 'path')>
                        <span>Path / URL</span>
                    </label>
                </div>
            </div>

            <div class="admin-field" data-cover-field="upload">
                <label for="cover_image_file">Cover image {{ $isEdit ? '' : '*' }}</label>
                <input id="cover_image_file" name="cover_image_file" type="file" accept="image/*">
                <div class="admin-field-help">Use this when you want Laravel to store the image in public storage.</div>
            </div>

            <div class="admin-field" data-cover-field="path">
                <label for="cover_image">Cover image path</label>
                <input id="cover_image" name="cover_image" type="text" value="{{ old('cover_image', $post->cover_image) }}" placeholder="Optional existing path or URL">
                <div class="admin-field-help">Use a URL, an absolute path, or an existing storage path.</div>
            </div>

            <div class="admin-field">
                <label for="cover_image_alt">Cover alt</label>
                <input id="cover_image_alt" name="cover_image_alt" type="text" value="{{ old('cover_image_alt', $post->cover_image_alt) }}">
            </div>

            <div class="admin-field">
                <label for="reading_time_minutes">Reading time</label>
                <input id="reading_time_minutes" name="reading_time_minutes" type="number" min="1" max="999" value="{{ old('reading_time_minutes', $post->reading_time_minutes) }}">
            </div>

            <div class="admin-checks">
                <label><input type="checkbox" name="is_featured" value="1" @checked(old('is_featured', $post->is_featured))> Featured article</label>
                <label><input type="checkbox" name="is_pinned" value="1" @checked(old('is_pinned', $post->is_pinned))> Pinned to top</label>
                <label><input type="checkbox" name="allow_comments" value="1" @checked(old('allow_comments', $post->allow_comments ?? true))> Allow comments</label>
            </div>

            <div style="display:grid;gap:10px;margin-top:16px">
                <button type="submit" class="admin-btn primary">{{ $isEdit ? 'Save changes' : 'Create publication' }}</button>
                @if ($isEdit)
                    <a href="{{ route('blog.show', $post) }}" class="admin-btn">View article</a>
                @endif
            </div>
        </aside>
    </div>
</form>
@endsection

@push('admin_scripts')
<script src="https://cdn.quilljs.com/1.3.7/quill.min.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function () {
    var editorEl = document.getElementById('quillEditor');
    var contentEl = document.getElementById('content');
    var form = document.querySelector('[data-quill-form]');

    if (!editorEl || !contentEl || !form || !window.Quill) return;

    var quill = new Quill(editorEl, {
        theme: 'snow',
        placeholder: 'Write the article content...',
        modules: {
            toolbar: [
                [{ header: [2, 3, 4, false] }],
                ['bold', 'italic', 'underline', 'blockquote'],
                [{ list: 'ordered' }, { list: 'bullet' }],
                ['link', 'clean']
            ]
        }
    });

    form.addEventListener('submit', function (event) {
        var contentError = document.getElementById('contentError');
        var contentText = quill.getText().trim();

        contentEl.value = quill.root.innerHTML.trim();

        if (!contentText) {
            event.preventDefault();
            if (contentError) {
                contentError.hidden = false;
            }
            editorEl.scrollIntoView({ behavior: 'smooth', block: 'center' });
            quill.focus();
            return;
        }

        if (contentError) {
            contentError.hidden = true;
        }
    });

    var statusEl = document.getElementById('status');
    var coverModeEls = document.querySelectorAll('input[name="cover_mode"]');
    var coverFileEl = document.getElementById('cover_image_file');
    var coverPathEl = document.getElementById('cover_image');
    var scheduledForEl = document.getElementById('scheduled_for');

    function syncStatusFields() {
        if (!statusEl) return;

        var status = statusEl.value;

        document.querySelectorAll('[data-status-field]').forEach(function (field) {
            var isActive = field.getAttribute('data-status-field') === status;
            field.hidden = !isActive;

            field.querySelectorAll('input, select, textarea').forEach(function (input) {
                input.disabled = !isActive;
            });
        });

        if (scheduledForEl) {
            scheduledForEl.required = status === 'scheduled';
        }
    }

    function syncCoverFields() {
        var checked = document.querySelector('input[name="cover_mode"]:checked');
        var mode = checked ? checked.value : 'upload';

        document.querySelectorAll('[data-cover-field]').forEach(function (field) {
            var isActive = field.getAttribute('data-cover-field') === mode;
            field.hidden = !isActive;

            field.querySelectorAll('input, select, textarea').forEach(function (input) {
                input.disabled = !isActive;
            });
        });

        if (coverFileEl) {
            coverFileEl.required = mode === 'upload' && {{ (! $isEdit && empty($post->cover_image)) ? 'true' : 'false' }};
        }

        if (coverPathEl) {
            coverPathEl.required = mode === 'path' && {{ (! $isEdit && empty($post->cover_image)) ? 'true' : 'false' }};
        }
    }

    if (statusEl) {
        statusEl.addEventListener('change', syncStatusFields);
        syncStatusFields();
    }

    coverModeEls.forEach(function (input) {
        input.addEventListener('change', syncCoverFields);
    });
    syncCoverFields();
});
</script>
@endpush
