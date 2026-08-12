@extends('admin.layout', ['pageTitle' => 'Newsletter subscribers - DigiTexia Admin'])

@section('admin_content')
<div class="admin-page-head">
    <div>
        <h1>Subscribers</h1>
        <p>Manage newsletter leads collected from the website footer.</p>
    </div>
    <a href="{{ route('blog.admin.index') }}" class="admin-btn">Back to publications</a>
</div>

<section class="admin-card">
    <table class="admin-table">
        <thead>
            <tr>
                <th>Email</th>
                <th>Source</th>
                <th>Subscribed</th>
                <th>IP</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($subscribers as $subscriber)
                <tr>
                    <td><strong>{{ $subscriber->email }}</strong></td>
                    <td>{{ $subscriber->source }}</td>
                    <td>{{ optional($subscriber->subscribed_at)->format('d M Y H:i') }}</td>
                    <td>{{ $subscriber->ip_address ?: '-' }}</td>
                    <td>
                        <form method="POST" action="{{ route('newsletter.admin.destroy', $subscriber) }}" onsubmit="return confirm('Remove this subscriber?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="admin-btn danger">Remove</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5">No subscriber yet.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <div class="admin-pagination">
        {{ $subscribers->links() }}
    </div>
</section>
@endsection
