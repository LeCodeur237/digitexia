@extends('index')

@section('page_title', $pageTitle ?? 'DigiTexia Admin')
@section('skip_frontend_scripts', true)

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
        @yield('admin_content')
    </main>
</section>

<div class="admin-loading" data-admin-loading aria-hidden="true">
    <div class="admin-loading-card">
        <span class="admin-spinner" aria-hidden="true"></span>
        <strong>Processing request...</strong>
    </div>
</div>

@if (session('status') || $errors->any())
    <div class="admin-toast-wrap" data-admin-toast role="alert" aria-live="assertive">
        <div class="admin-toast {{ session('status') ? 'success' : 'error' }}">
            <span class="admin-toast-icon">
                <i class="ti {{ session('status') ? 'ti-check' : 'ti-alert-triangle' }}"></i>
            </span>
            <span class="admin-toast-text">{{ session('status') ?: $errors->first() }}</span>
            <button type="button" class="admin-toast-close" data-admin-toast-close aria-label="Dismiss notification">&times;</button>
        </div>
    </div>
@endif
@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {
    window.AdminUI = {
        showLoading: function (form) {
            var loading = document.querySelector('[data-admin-loading]');
            var submitters = form ? form.querySelectorAll('[type="submit"]') : [];

            if (loading) {
                loading.classList.add('active');
                loading.setAttribute('aria-hidden', 'false');
            }

            submitters.forEach(function (button) {
                button.disabled = true;
                button.classList.add('loading');
            });
        },
        hideLoading: function (form) {
            var loading = document.querySelector('[data-admin-loading]');
            var submitters = form ? form.querySelectorAll('[type="submit"]') : [];

            if (loading) {
                loading.classList.remove('active');
                loading.setAttribute('aria-hidden', 'true');
            }

            submitters.forEach(function (button) {
                button.disabled = false;
                button.classList.remove('loading');
            });
        }
    };

    document.querySelectorAll('form[data-admin-submit]').forEach(function (form) {
        form.addEventListener('submit', function (event) {
            setTimeout(function () {
                if (!event.defaultPrevented && window.AdminUI) {
                    window.AdminUI.showLoading(form);
                }
            }, 0);
        });
    });

    document.querySelectorAll('[data-admin-toast]').forEach(function (toast) {
        var close = toast.querySelector('[data-admin-toast-close]');
        var removeToast = function () {
            toast.style.opacity = '0';
            toast.style.transform = 'translateY(12px)';
            setTimeout(function () {
                toast.remove();
            }, 180);
        };

        if (close) {
            close.addEventListener('click', removeToast);
        }

        setTimeout(removeToast, 5200);
    });
});
</script>
@stack('admin_scripts')
@endpush
