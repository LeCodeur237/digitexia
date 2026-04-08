@extends('index')

@section('page_title', 'Blog Admin — DigiTexia')

@push('styles')
<style>
  .admin-shell {
    padding: 130px 5% 80px;
    min-height: 100vh;
    background: var(--ink);
  }

  .admin-wrap {
    max-width: 1240px;
    margin: 0 auto;
  }

  .admin-head {
    display: flex;
    justify-content: space-between;
    align-items: end;
    gap: 1rem;
    margin-bottom: 1.5rem;
  }

  .admin-table {
    width: 100%;
    border-collapse: collapse;
    background: var(--ink-2);
    border: 1px solid var(--bdr);
    border-radius: 16px;
    overflow: hidden;
  }

  .admin-table th,
  .admin-table td {
    padding: 1rem;
    border-bottom: 1px solid var(--bdr);
    text-align: left;
    vertical-align: top;
  }

  .admin-table th {
    color: var(--muted);
    font-size: .72rem;
    letter-spacing: .08em;
    text-transform: uppercase;
  }

  .admin-actions {
    display: flex;
    gap: .5rem;
    flex-wrap: wrap;
  }
</style>
@endpush

@section('contain')
<section class="admin-shell">
  <div class="admin-wrap">
    <div class="admin-head">
      <div>
        <div class="tag">Blog Admin</div>
        <h2 style="margin-top:1rem">Manage articles</h2>
        <p class="lead">Create, edit, schedule, and publish posts from here.</p>
      </div>
      <a href="{{ route('blog.admin.create') }}" class="btn-pri">New post</a>
    </div>

    @if (session('status'))
      <div style="margin-bottom:1rem;padding:1rem;border-radius:12px;background:rgba(22,199,132,.1);border:1px solid var(--green-bdr);color:#BBF7D0">
        {{ session('status') }}
      </div>
    @endif

    <div style="overflow:auto">
      <table class="admin-table">
        <thead>
          <tr>
            <th>Title</th>
            <th>Status</th>
            <th>Author</th>
            <th>Updated</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          @forelse ($posts as $post)
            <tr>
              <td>
                <div style="font-weight:700">{{ $post->title }}</div>
                <div style="color:var(--muted);font-size:.85rem">{{ $post->slug }}</div>
              </td>
              <td>
                <div>{{ ucfirst($post->status) }}</div>
                <div style="color:var(--muted);font-size:.82rem">{{ ucfirst($post->visibility) }}</div>
              </td>
              <td>{{ $post->author->name ?? 'Unknown' }}</td>
              <td>{{ optional($post->updated_at)->format('d M Y') }}</td>
              <td>
                <div class="admin-actions">
                  <a href="{{ route('blog.show', $post) }}" class="btn-sec">View</a>
                  <a href="{{ route('blog.admin.edit', $post) }}" class="btn-sec">Edit</a>
                  <form action="{{ route('blog.admin.destroy', $post) }}" method="POST" onsubmit="return confirm('Delete this post?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn-pri" style="background:#dc2626;box-shadow:none">Delete</button>
                  </form>
                </div>
              </td>
            </tr>
          @empty
            <tr>
              <td colspan="5" style="text-align:center;color:var(--muted-lt);padding:2rem">No articles yet.</td>
            </tr>
          @endforelse
        </tbody>
      </table>
    </div>

    <div style="margin-top:1.25rem">
      {{ $posts->links() }}
    </div>
  </div>
</section>
@endsection
