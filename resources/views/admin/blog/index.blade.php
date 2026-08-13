@extends('admin.layout', ['pageTitle' => 'Publications - DigiTexia Admin'])

@section('admin_content')
<div class="admin-page-head">
    <div>
        <h1>Publications</h1>
        <p>Write, edit and publish DigiTexia blog articles from one editorial console.</p>
    </div>
    <a href="{{ route('blog.admin.create') }}" class="admin-btn primary">
        <i class="ti ti-plus"></i>
        New publication
    </a>
</div>

<section class="admin-stats">
    <div class="admin-stat">
        <span>Total posts</span>
        <strong>{{ $stats['total'] }}</strong>
    </div>
    <div class="admin-stat">
        <span>Published</span>
        <strong>{{ $stats['published'] }}</strong>
    </div>
    <div class="admin-stat">
        <span>Drafts</span>
        <strong>{{ $stats['drafts'] }}</strong>
    </div>
    <div class="admin-stat">
        <span>Subscribers</span>
        <strong>{{ $stats['subscribers'] }}</strong>
    </div>
</section>

<div class="admin-grid">
    <section class="admin-card">
        <table class="admin-table">
            <thead>
                <tr>
                    <th>Article</th>
                    <th>Status</th>
                    <th>Updated</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($posts as $post)
                    <tr>
                        <td>
                            <strong>{{ $post->title }}</strong>
                            <div>{{ $post->excerpt ?: \Illuminate\Support\Str::limit(strip_tags($post->content), 110) }}</div>
                        </td>
                        <td>
                            <span class="admin-pill">{{ str_replace('_', ' ', ucfirst($post->status)) }}</span>
                            <div>{{ ucfirst($post->visibility) }}</div>
                        </td>
                        <td>{{ optional($post->updated_at)->format('d M Y') }}</td>
                        <td>
                            <div class="admin-actions">
                                <a href="{{ route('blog.admin.edit', $post) }}" class="admin-btn">Edit</a>
                                <a href="{{ route('blog.show', $post) }}" class="admin-btn">View</a>
                                <form action="{{ route('blog.admin.destroy', $post) }}" method="POST" data-admin-submit onsubmit="return confirm('Delete this post?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="admin-btn danger">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4">No publication yet.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        <div class="admin-pagination">
            {{ $posts->links() }}
        </div>
    </section>

    <aside class="admin-card">
        <div class="admin-page-head" style="margin-bottom:12px">
            <div>
                <h1 style="font-size:26px">Recent subscribers</h1>
                <p>Latest newsletter leads.</p>
            </div>
        </div>

        <table class="admin-table">
            <tbody>
                @forelse ($recentSubscribers as $subscriber)
                    <tr>
                        <td>
                            <strong>{{ $subscriber->email }}</strong>
                            <div>{{ optional($subscriber->subscribed_at)->format('d M Y H:i') }}</div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td>No subscriber yet.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        <div style="margin-top:14px">
            <a href="{{ route('newsletter.admin.index') }}" class="admin-btn">Manage subscribers</a>
        </div>
    </aside>
</div>
@endsection
