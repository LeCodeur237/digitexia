@php
    $isHomePage = request()->path() === '/' || request()->path() === '';
    $isProblemPage = request()->is('the-problem') || request()->is('problem');
    $isSolutionsPage = request()->is('solutions') || request()->is('solutions/*');
    $isProjectsPage = request()->is('projects');
    $isWhyUsPage = request()->is('why-us');
    $isTeamPage = request()->is('team') || request()->is('team-members');
    $isPartnersPage = request()->is('our-partners');
    $isBlogPage = request()->is('life-at-digi') || request()->is('life-at-digi/*');
    $isContactPage = request()->is('contact-us') || request()->is('contact');
    $isCompanyPage = $isTeamPage || $isPartnersPage || $isBlogPage || $isContactPage;
@endphp

<header class="dx-header">
    <nav class="dx-nav" aria-label="{{ __('Primary navigation') }}">
        <a href="{{ url('/') }}" class="dx-logo" aria-label="DigiTexia">
            <img src="{{ asset('logo/logo-digi.png') }}" alt="DigiTexia" class="dx-logo-img">
        </a>

        <div class="dx-nav-links">
            <a href="{{ url('/') }}" class="{{ $isHomePage ? 'active' : '' }}">{{ __('Home') }}</a>
            <a href="{{ url('/the-problem') }}" class="{{ $isProblemPage ? 'active' : '' }}">{{ __('The Problem') }}</a>
            <a href="{{ url('/solutions') }}" class="{{ $isSolutionsPage ? 'active' : '' }}">{{ __('Solutions') }}</a>
            <a href="{{ url('/projects') }}" class="{{ $isProjectsPage ? 'active' : '' }}">{{ __('Projects') }}</a>
            <a href="{{ url('/why-us') }}" class="{{ $isWhyUsPage ? 'active' : '' }}">{{ __('Why Us') }}</a>
            <div class="dx-dropdown">
                <a href="#" class="{{ $isCompanyPage ? 'active' : '' }}">{{ __('Company') }}</a>
                <div class="dx-dropdown-menu">
                    <a href="{{ url('/team') }}">{{ __('Team') }}</a>
                    <a href="{{ url('/our-partners') }}">{{ __('Partners') }}</a>
                    <a href="{{ url('/life-at-digi') }}">{{ __('Blog') }}</a>
                    <a href="{{ url('/contact-us') }}">{{ __('Contact') }}</a>
                </div>
            </div>
        </div>

        <div class="dx-nav-right">
            <div class="dx-lang">
                <button type="button" class="dx-btn dx-btn-secondary dx-lang-current" aria-label="{{ __('Change language') }}">
                    {{ strtoupper(app()->getLocale()) }}
                </button>
                <div class="dx-lang-menu">
                    <a href="{{ route('lang.switch', 'en') }}" class="{{ app()->getLocale() === 'en' ? 'active' : '' }}">EN</a>
                    <a href="{{ route('lang.switch', 'fr') }}" class="{{ app()->getLocale() === 'fr' ? 'active' : '' }}">FR</a>
                    <a href="{{ route('lang.switch', 'es') }}" class="{{ app()->getLocale() === 'es' ? 'active' : '' }}">ES</a>
                    <a href="{{ route('lang.switch', 'it') }}" class="{{ app()->getLocale() === 'it' ? 'active' : '' }}">IT</a>
                    <a href="{{ route('lang.switch', 'zh') }}" class="{{ app()->getLocale() === 'zh' ? 'active' : '' }}">ZH</a>
                </div>
            </div>
            <a href="{{ $isHomePage ? '#cta-final' : url('/contact-us') }}" class="dx-btn dx-btn-primary">
                {{ __('Request Demo') }}
            </a>
        </div>

        <button id="burger" class="dx-burger" type="button" aria-label="{{ __('Open navigation') }}" aria-expanded="false" data-dx-burger>
            <span></span>
            <span></span>
            <span></span>
        </button>
    </nav>

    <div id="mobilePanel" class="dx-mobile-panel" data-dx-mobile-panel>
        <a href="{{ url('/') }}">{{ __('Home') }}</a>
        <a href="{{ url('/the-problem') }}">{{ __('The Problem') }}</a>
        <a href="{{ url('/solutions') }}">{{ __('Solutions') }}</a>
        <a href="{{ url('/projects') }}">{{ __('Projects') }}</a>
        <a href="{{ url('/why-us') }}">{{ __('Why Us') }}</a>
        <a href="{{ url('/team') }}">{{ __('Team') }}</a>
        <a href="{{ url('/our-partners') }}">{{ __('Partners') }}</a>
        <a href="{{ url('/life-at-digi') }}">{{ __('Blog') }}</a>
        <div class="dx-mobile-langs" aria-label="{{ __('Languages') }}">
            <a href="{{ route('lang.switch', 'en') }}" class="{{ app()->getLocale() === 'en' ? 'active' : '' }}">EN</a>
            <a href="{{ route('lang.switch', 'fr') }}" class="{{ app()->getLocale() === 'fr' ? 'active' : '' }}">FR</a>
            <a href="{{ route('lang.switch', 'es') }}" class="{{ app()->getLocale() === 'es' ? 'active' : '' }}">ES</a>
            <a href="{{ route('lang.switch', 'it') }}" class="{{ app()->getLocale() === 'it' ? 'active' : '' }}">IT</a>
            <a href="{{ route('lang.switch', 'zh') }}" class="{{ app()->getLocale() === 'zh' ? 'active' : '' }}">ZH</a>
        </div>
        <a href="{{ url('/contact-us') }}" class="dx-btn dx-btn-primary">{{ __('Request Demo') }}</a>
    </div>
</header>
