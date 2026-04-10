<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    public function index()
    {
        $posts = BlogPost::query()
            ->published()
            ->with('author')
            ->latest('published_at')
            ->paginate(9);

        return view('pages.blog', compact('posts'));
    }

    public function show(BlogPost $post)
    {
        if (! $post->isPublished()) {
            abort_unless(auth()->check() && auth()->id() === $post->author_id, 404);
        }

        $post->load(['author', 'editor', 'comments.user']);

        return view('pages.blog-show', compact('post'));
    }

    public function adminIndex()
    {
        $posts = BlogPost::query()
            ->with(['author', 'editor'])
            ->latest()
            ->paginate(15);

        return view('admin.blog.index', compact('posts'));
    }

    public function create()
    {
        return view('admin.blog.form', [
            'post' => new BlogPost(),
            'mode' => 'create',
        ]);
    }

    public function store(Request $request)
    {
        $data = $this->validatePost($request);
        $data['cover_image'] = $this->persistCoverImage($request, null, true);
        $data['author_id'] = Auth::id();
        $data['slug'] = $this->uniqueSlug($data['slug'] ?? $data['title']);
        $data['tags'] = $this->normalizeTags($request->input('tags'));
        $data['views_count'] = 0;
        $data['is_featured'] = $request->boolean('is_featured');
        $data['is_pinned'] = $request->boolean('is_pinned');
        $data['allow_comments'] = $request->boolean('allow_comments', true);

        if ($data['status'] === 'published' && empty($data['published_at'])) {
            $data['published_at'] = now();
        }

        if ($data['status'] === 'scheduled' && empty($data['scheduled_for'])) {
            $data['scheduled_for'] = now()->addDay();
        }

        $post = BlogPost::create($data);

        return redirect()
            ->route('blog.admin.edit', $post)
            ->with('status', 'Article created successfully.');
    }

    public function edit(BlogPost $post)
    {
        $this->authorizePostAccess($post);

        return view('admin.blog.form', [
            'post' => $post,
            'mode' => 'edit',
        ]);
    }

    public function update(Request $request, BlogPost $post)
    {
        $this->authorizePostAccess($post);

        $data = $this->validatePost($request, $post->id);
        $data['cover_image'] = $this->persistCoverImage($request, $post->cover_image, false);
        $data['slug'] = $request->filled('slug') ? $this->uniqueSlug($data['slug']) : $post->slug;
        $data['tags'] = $this->normalizeTags($request->input('tags'));
        $data['is_featured'] = $request->boolean('is_featured');
        $data['is_pinned'] = $request->boolean('is_pinned');
        $data['allow_comments'] = $request->boolean('allow_comments', true);

        if ($data['status'] === 'published' && empty($data['published_at'])) {
            $data['published_at'] = $post->published_at ?? now();
        }

        if ($data['status'] === 'scheduled' && empty($data['scheduled_for'])) {
            $data['scheduled_for'] = now()->addDay();
        }

        if ($data['status'] !== 'published') {
            $data['published_at'] = $data['published_at'] ?: null;
        }

        if ($data['status'] !== 'scheduled') {
            $data['scheduled_for'] = null;
        }

        $post->update($data);

        return redirect()
            ->route('blog.admin.edit', $post)
            ->with('status', 'Article updated successfully.');
    }

    public function destroy(BlogPost $post)
    {
        $this->authorizePostAccess($post);
        $post->delete();

        return redirect()
            ->route('blog.admin.index')
            ->with('status', 'Article deleted successfully.');
    }

    protected function validatePost(Request $request, ?int $ignoreId = null): array
    {
        return $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'excerpt' => ['nullable', 'string', 'max:500'],
            'content' => ['required', 'string'],
            'seo_title' => ['nullable', 'string', 'max:255'],
            'seo_description' => ['nullable', 'string', 'max:1000'],
            'cover_image' => ['nullable', 'string', 'max:255', 'required_without:cover_image_file'],
            'cover_image_file' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp,avif', 'max:4096', 'required_without:cover_image'],
            'cover_image_alt' => ['nullable', 'string', 'max:255'],
            'tags' => ['nullable', 'string', 'max:255'],
            'status' => ['required', 'in:draft,pending_review,scheduled,published,archived'],
            'visibility' => ['required', 'in:public,unlisted,private'],
            'is_featured' => ['nullable', 'boolean'],
            'is_pinned' => ['nullable', 'boolean'],
            'allow_comments' => ['nullable', 'boolean'],
            'reading_time_minutes' => ['nullable', 'integer', 'min:1', 'max:999'],
            'published_at' => ['nullable', 'date'],
            'scheduled_for' => ['nullable', 'date'],
            'slug' => [
                'nullable',
                'string',
                'max:255',
                function ($attribute, $value, $fail) use ($ignoreId) {
                    if (! $value) {
                        return;
                    }

                    $exists = BlogPost::query()
                        ->when($ignoreId, fn ($query) => $query->whereKeyNot($ignoreId))
                        ->where('slug', $value)
                        ->exists();

                    if ($exists) {
                        $fail('The slug has already been taken.');
                    }
                },
            ],
        ], [
            'content.required' => 'The article body is required.',
            'cover_image.required' => 'A cover image is required for every post.',
            'cover_image.required_without' => 'A cover image is required for every post.',
            'cover_image_file.image' => 'The uploaded cover image must be a valid image file.',
            'cover_image_file.required_without' => 'A cover image is required for every post.',
        ]);
    }

    protected function persistCoverImage(Request $request, ?string $currentValue, bool $required): string
    {
        if ($request->hasFile('cover_image_file')) {
            return $request->file('cover_image_file')->store('blog-covers', 'public');
        }

        $coverImage = trim((string) $request->input('cover_image'));

        if ($coverImage !== '') {
            return $coverImage;
        }

        if ($required) {
            abort(422, 'A cover image is required for every post.');
        }

        return $currentValue ?? '';
    }

    protected function normalizeTags(?string $tags): array
    {
        return collect(explode(',', (string) $tags))
            ->map(fn ($tag) => trim($tag))
            ->filter()
            ->values()
            ->all();
    }

    protected function uniqueSlug(string $title): string
    {
        $base = Str::slug($title);
        $slug = $base;
        $suffix = 2;

        while (BlogPost::where('slug', $slug)->exists()) {
            $slug = "{$base}-{$suffix}";
            $suffix++;
        }

        return $slug;
    }

    protected function authorizePostAccess(BlogPost $post): void
    {
        abort_unless(auth()->check(), 403);

        abort_unless(
            auth()->id() === $post->author_id || auth()->id() === $post->editor_id,
            403
        );
    }
}
