@extends('admin.layout', ['pageTitle' => 'Admin profile - DigiTexia Admin'])

@section('admin_content')
<div class="admin-page-head">
    <div>
        <h1>Profile</h1>
        <p>Update your admin identity, login phone number and password.</p>
    </div>
    <a href="{{ route('blog.admin.index') }}" class="admin-btn">Back to publications</a>
</div>

<form method="POST" action="{{ route('admin.profile.update') }}" class="admin-form" data-admin-submit>
    @csrf
    @method('PATCH')

    <div class="admin-profile-grid">
        <section class="admin-card">
            <div class="admin-card-head">
                <div>
                    <h2>Account information</h2>
                    <p>These details are used for admin access and article authorship.</p>
                </div>
            </div>

            <div class="admin-field">
                <label for="name">Name</label>
                <input id="name" type="text" name="name" value="{{ old('name', $user->name) }}" required autocomplete="name">
                @error('name')
                    <div class="admin-field-error">{{ $message }}</div>
                @enderror
            </div>

            <div class="admin-field">
                <label for="email">Email</label>
                <input id="email" type="email" name="email" value="{{ old('email', $user->email) }}" required autocomplete="email">
                @error('email')
                    <div class="admin-field-error">{{ $message }}</div>
                @enderror
            </div>

            <div class="admin-field">
                <label for="phone">Login phone</label>
                <input id="phone" type="tel" name="phone" value="{{ old('phone', $user->phone) }}" required autocomplete="tel">
                <div class="admin-field-help">Cameroon numbers are normalized with +237 automatically.</div>
                @error('phone')
                    <div class="admin-field-error">{{ $message }}</div>
                @enderror
            </div>
        </section>

        <aside class="admin-card">
            <div class="admin-profile-summary">
                <div class="admin-profile-avatar">{{ strtoupper(mb_substr($user->name ?? 'A', 0, 1)) }}</div>
                <strong>{{ $user->name }}</strong>
                <span>{{ $user->email }}</span>
                <span>{{ $user->phone }}</span>
            </div>
        </aside>
    </div>

    <section class="admin-card">
        <div class="admin-card-head">
            <div>
                <h2>Password</h2>
                <p>Leave these fields empty if you do not want to change your password.</p>
            </div>
        </div>

        <div class="admin-password-grid">
            <div class="admin-field">
                <label for="current_password">Current password</label>
                <input id="current_password" type="password" name="current_password" autocomplete="current-password">
                @error('current_password')
                    <div class="admin-field-error">{{ $message }}</div>
                @enderror
            </div>

            <div class="admin-field">
                <label for="password">New password</label>
                <input id="password" type="password" name="password" autocomplete="new-password" minlength="8">
                @error('password')
                    <div class="admin-field-error">{{ $message }}</div>
                @enderror
            </div>

            <div class="admin-field">
                <label for="password_confirmation">Confirm password</label>
                <input id="password_confirmation" type="password" name="password_confirmation" autocomplete="new-password" minlength="8">
            </div>
        </div>
    </section>

    <div class="admin-form-actions">
        <button type="submit" class="admin-btn primary">Save profile</button>
        <a href="{{ route('blog.admin.index') }}" class="admin-btn">Cancel</a>
    </div>
</form>
@endsection
