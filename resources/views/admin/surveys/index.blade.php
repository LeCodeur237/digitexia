@extends('admin.layout', ['pageTitle' => 'Survey submissions - DigiTexia Admin'])

@section('admin_content')
<div class="admin-page-head">
    <div>
        <h1>Survey Data</h1>
        <p>Consult registrations and research answers submitted through DigiTexia project forms.</p>
    </div>
    <a href="{{ url('/research/flexicare') }}" class="admin-btn" target="_blank" rel="noreferrer">Open FlexiCare form</a>
</div>

<section class="admin-stats">
    <div class="admin-stat">
        <span>Total submissions</span>
        <strong>{{ $stats['total'] }}</strong>
    </div>
    <div class="admin-stat">
        <span>FlexiCare</span>
        <strong>{{ $stats['flexicare'] }}</strong>
    </div>
    <div class="admin-stat">
        <span>Countries</span>
        <strong>{{ $stats['countries'] }}</strong>
    </div>
    <div class="admin-stat">
        <span>Latest</span>
        <strong>{{ $stats['latest'] ? $stats['latest']->format('d M') : '-' }}</strong>
    </div>
</section>

<section class="admin-card">
    <form method="GET" action="{{ route('surveys.admin.index') }}" class="admin-filter-form">
        <div class="admin-field">
            <label for="project">Project</label>
            <select id="project" name="project">
                <option value="">All projects</option>
                @foreach ($projects as $item)
                    <option value="{{ $item->project_slug }}" @selected($project === $item->project_slug)>
                        {{ $item->project_name }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="admin-field">
            <label for="search">Search</label>
            <input id="search" type="search" name="search" value="{{ $search }}" placeholder="Name, email, organization, city...">
        </div>
        <div class="admin-filter-actions">
            <button type="submit" class="admin-btn primary">Filter</button>
            <a href="{{ route('surveys.admin.index') }}" class="admin-btn">Reset</a>
        </div>
    </form>
</section>

<section class="admin-card">
    <table class="admin-table">
        <thead>
            <tr>
                <th>Person</th>
                <th>Project</th>
                <th>Location</th>
                <th>Profile</th>
                <th>Submitted</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($submissions as $submission)
                <tr>
                    <td>
                        <strong>{{ $submission->full_name }}</strong>
                        <div>{{ $submission->email }}</div>
                        <div>{{ trim(($submission->phone_country_code ? $submission->phone_country_code . ' ' : '') . $submission->phone) ?: '-' }}</div>
                    </td>
                    <td>
                        <span class="admin-pill">{{ $submission->project_name }}</span>
                    </td>
                    <td>
                        <strong>{{ $submission->country ?: '-' }}</strong>
                        <div>{{ $submission->city ?: '-' }}</div>
                    </td>
                    <td>
                        <strong>{{ $submission->participant_type ?: '-' }}</strong>
                        <div>{{ $submission->sector ?: '-' }}</div>
                    </td>
                    <td>{{ optional($submission->created_at)->format('d M Y H:i') }}</td>
                    <td>
                        <div class="admin-actions">
                            <a href="{{ route('surveys.admin.show', $submission) }}" class="admin-btn">View</a>
                            <form method="POST" action="{{ route('surveys.admin.destroy', $submission) }}" data-admin-submit onsubmit="return confirm('Remove this survey submission?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="admin-btn danger">Remove</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6">No survey submission yet.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <div class="admin-pagination">
        {{ $submissions->links() }}
    </div>
</section>
@endsection
