@extends('admin.layout', ['pageTitle' => 'Survey submission - DigiTexia Admin'])

@section('admin_content')
<div class="admin-page-head">
    <div>
        <h1>{{ $submission->full_name }}</h1>
        <p>{{ $submission->project_name }} submission received {{ optional($submission->created_at)->format('d M Y H:i') }}.</p>
    </div>
    <a href="{{ route('surveys.admin.index') }}" class="admin-btn">Back to survey data</a>
</div>

<div class="admin-form-grid">
    <section class="admin-card">
        <div class="admin-card-head">
            <div>
                <h2>Contact information</h2>
                <p>Identity and contact details submitted by the participant.</p>
            </div>
        </div>

        <div class="admin-detail-grid">
            <div class="admin-detail-item">
                <span>Full name</span>
                <strong>{{ $submission->full_name }}</strong>
            </div>
            <div class="admin-detail-item">
                <span>Email</span>
                <strong><a href="mailto:{{ $submission->email }}">{{ $submission->email }}</a></strong>
            </div>
            <div class="admin-detail-item">
                <span>Phone</span>
                <strong>{{ trim(($submission->phone_country_code ? $submission->phone_country_code . ' ' : '') . $submission->phone) ?: '-' }}</strong>
            </div>
            <div class="admin-detail-item">
                <span>Contact preference</span>
                <strong>{{ $submission->contact_preference ?: '-' }}</strong>
            </div>
            <div class="admin-detail-item">
                <span>Country</span>
                <strong>{{ $submission->country ?: '-' }}</strong>
            </div>
            <div class="admin-detail-item">
                <span>City</span>
                <strong>{{ $submission->city ?: '-' }}</strong>
            </div>
        </div>
    </section>

    <aside class="admin-card">
        <div class="admin-card-head">
            <div>
                <h2>Profile</h2>
                <p>Context for segmenting the response.</p>
            </div>
        </div>

        <div class="admin-detail-stack">
            <div class="admin-detail-item">
                <span>Project</span>
                <strong>{{ $submission->project_name }}</strong>
            </div>
            <div class="admin-detail-item">
                <span>Organization</span>
                <strong>{{ $submission->organization ?: '-' }}</strong>
            </div>
            <div class="admin-detail-item">
                <span>Role</span>
                <strong>{{ $submission->role ?: '-' }}</strong>
            </div>
            <div class="admin-detail-item">
                <span>Participant type</span>
                <strong>{{ $submission->participant_type ?: '-' }}</strong>
            </div>
            <div class="admin-detail-item">
                <span>Sector</span>
                <strong>{{ $submission->sector ?: '-' }}</strong>
            </div>
            <div class="admin-detail-item">
                <span>Consent</span>
                <strong>{{ $submission->consent ? 'Accepted' : 'Not accepted' }}</strong>
            </div>
        </div>
    </aside>
</div>

<section class="admin-card admin-response-card">
    <div class="admin-card-head">
        <div>
            <h2>Research answers</h2>
            <p>Use these answers to understand how the project should be developed and deployed.</p>
        </div>
    </div>

    <div class="admin-answer">
        <span>Current challenges</span>
        <p>{{ $submission->current_challenges ?: '-' }}</p>
    </div>
    <div class="admin-answer">
        <span>Expected features</span>
        <p>{{ $submission->expected_features ?: '-' }}</p>
    </div>
    <div class="admin-answer">
        <span>Deployment context</span>
        <p>{{ $submission->deployment_context ?: '-' }}</p>
    </div>
</section>

<section class="admin-card">
    <div class="admin-card-head">
        <div>
            <h2>Technical metadata</h2>
            <p>Useful for tracing duplicate or suspicious submissions.</p>
        </div>
    </div>

    <div class="admin-detail-grid">
        <div class="admin-detail-item">
            <span>IP address</span>
            <strong>{{ $submission->ip_address ?: '-' }}</strong>
        </div>
        <div class="admin-detail-item">
            <span>User agent</span>
            <strong>{{ $submission->user_agent ?: '-' }}</strong>
        </div>
    </div>

    <form method="POST" action="{{ route('surveys.admin.destroy', $submission) }}" data-admin-submit onsubmit="return confirm('Remove this survey submission?')" style="margin-top:16px">
        @csrf
        @method('DELETE')
        <button type="submit" class="admin-btn danger">Remove submission</button>
    </form>
</section>
@endsection
