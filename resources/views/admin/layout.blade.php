@extends('index')

@section('page_title', $pageTitle ?? 'DigiTexia Admin')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/admin-v2.css') }}?v={{ filemtime(public_path('css/admin-v2.css')) }}">
@stack('admin_styles')
@endpush

@section('fullpage')
<section class="admin-shell">
    <aside class="admin-sidebar">
        <a href="{{ route('blog.admin.index') }}" class="admin-brand">
            <span class="admin-brand-mark">D</span>
            <span>
                <strong>DigiTexia</strong>
                <small>Admin Console</small>
            </span>
        </a>

        <nav class="admin-nav">
            <a href="{{ route('blog.admin.index') }}" class="{{ request()->routeIs('blog.admin.*') ? 'active' : '' }}">
                <i class="ti ti-news"></i>
                <span>Publications</span>
            </a>
            <a href="{{ route('newsletter.admin.index') }}" class="{{ request()->routeIs('newsletter.admin.*') ? 'active' : '' }}">
                <i class="ti ti-mail"></i>
                <span>Subscribers</span>
            </a>
            <a href="{{ route('blog.index') }}">
                <i class="ti ti-world"></i>
                <span>Public Blog</span>
            </a>
            <a href="{{ url('/') }}">
                <i class="ti ti-arrow-left"></i>
                <span>Back to Site</span>
            </a>
        </nav>

        <div class="admin-user">
            <span>{{ auth()->user()->name ?? 'Admin' }}</span>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit">Logout</button>
            </form>
        </div>
    </aside>

    <main class="admin-main">
        @if (session('status'))
            <div class="admin-alert success">{{ session('status') }}</div>
        @endif

        @if ($errors->any())
            <div class="admin-alert error">{{ $errors->first() }}</div>
        @endif

        @yield('admin_content')
    </main>
</section>
@endsection

@push('scripts')
@stack('admin_scripts')
@endpush
