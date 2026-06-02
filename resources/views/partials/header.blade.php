@php
    $isHomePage = request()->path() === '/' || request()->path() === '' || request()->is('/');
    $isProblemPage = request()->is('the-problem') || request()->is('problem');
    $isSolutionsPage = request()->is('solutions') || request()->is('solutions/*') || request()->is('services');
    $isWhyUsPage = request()->is('why-us');
    $isTeamPage = request()->is('team-members') || request()->is('team');
    $isPartnersPage = request()->is('our-partners');
    $isBlogPage = request()->is('life-at-digi') || request()->is('life-at-digi/*');
    $isContactPage = request()->is('contact-us');
    $isAboutPage = request()->is('about-us');
    $isServicesPage = request()->is('services') || request()->is('services-details');
    $isProjectsPage = request()->is('projects') || request()->is('project-details');
    $isCareersPage = request()->is('careers') || request()->is('carriers');
    $isSaasHeaderPage = $isHomePage || $isProblemPage || $isSolutionsPage || $isWhyUsPage || $isTeamPage || $isPartnersPage || $isBlogPage || $isContactPage || $isProjectsPage;

    $currentPageLabel = __('Home');
    $currentPageUrl = '/';
    if ($isAboutPage) {
        $currentPageLabel = __('About');
        $currentPageUrl = '/about-us';
    } elseif ($isServicesPage) {
        $currentPageLabel = __('Services');
        $currentPageUrl = '/services';
    } elseif ($isProjectsPage) {
        $currentPageLabel = __('Projects');
        $currentPageUrl = '/projects';
    } elseif ($isCareersPage) {
        $currentPageLabel = __('Careers');
        $currentPageUrl = '/careers';
    } elseif ($isProblemPage) {
        $currentPageLabel = __('The Problem');
        $currentPageUrl = '/the-problem';
    } elseif ($isSolutionsPage) {
        $currentPageLabel = __('Solutions');
        $currentPageUrl = '/solutions';
    } elseif ($isWhyUsPage) {
        $currentPageLabel = __('Why Us');
        $currentPageUrl = '/why-us';
    } elseif ($isTeamPage) {
        $currentPageLabel = __('Team');
        $currentPageUrl = '/team-members';
    } elseif ($isPartnersPage) {
        $currentPageLabel = __('Partners');
        $currentPageUrl = '/our-partners';
    } elseif ($isBlogPage) {
        $currentPageLabel = __('Blog');
        $currentPageUrl = '/life-at-digi';
    } elseif ($isContactPage) {
        $currentPageLabel = __('Contact');
        $currentPageUrl = '/contact-us';
    }
@endphp

<style>
    #mainNav .nav-mid a,
    #mainNav .nav-dropdown > a {
        color: var(--text-muted);
        transition: color .3s ease;
    }

    #mainNav .nav-mid a:hover,
    #mainNav .nav-mid a.active,
    #mainNav .nav-dropdown > a:hover,
    #mainNav .nav-dropdown > a.active {
        color: var(--text-main);
    }

    #mainNav .nav-mid a.active {
        position: relative;
    }

    #mainNav .nav-mid a.active::after {
        content: '';
        position: absolute;
        left: 0;
        right: 0;
        bottom: -8px;
        height: 2px;
        border-radius: 999px;
        background: linear-gradient(90deg, var(--blue-lt), var(--green));
        box-shadow: 0 0 18px var(--accent-soft);
    }

    #mainNav .nav-dropdown > a.active svg {
        transform: rotate(180deg);
    }

    #mainNav .dropdown-menu {
        background: var(--card-bg);
        border: 1px solid var(--border-color);
        backdrop-filter: blur(20px);
        box-shadow: var(--shadow-lg);
        top: calc(100% + 6px);
        transform: translateX(-50%) translateY(0);
    }

    #mainNav .nav-dropdown:hover .dropdown-menu,
    #mainNav .nav-dropdown:focus-within .dropdown-menu {
        opacity: 1;
        visibility: visible;
        pointer-events: all;
        transform: translateX(-50%) translateY(0);
    }

    #mainNav .dropdown-menu::before {
        content: '';
        position: absolute;
        left: 0;
        right: 0;
        top: -10px;
        height: 10px;
        background: transparent;
    }

    #mainNav .dropdown-item {
        color: var(--text-muted);
    }

    #mainNav .dropdown-item:hover {
        background: var(--accent-dim);
        color: var(--text-main);
    }

    #mainNav .dropdown-item-ico {
        background: var(--surface-bg);
        border: 1px solid var(--border-color);
        color: var(--text-main);
    }

    #mainNav .dropdown-item:hover .dropdown-item-ico {
        background: var(--accent-dim);
        border-color: var(--accent-border);
    }

    #mainNav .nav-btn {
        background: var(--blue);
        color: var(--on-accent);
        transition: background .2s ease, transform .15s ease;
    }

    #mainNav .nav-btn:hover {
        background: var(--blue-lt);
        transform: translateY(-1px);
    }

    #mainNav .current-page-badge,
    #mainNav .page-location-badge {
        border: 1px solid var(--blue-bdr);
        background: var(--blue-dim);
        color: var(--text-main);
    }

    #mainNav .current-page-badge span {
        color: var(--blue-lt);
    }

    /* Language Switcher premium styles */
    #mainNav .lang-switcher {
        position: relative;
        margin-right: 1.5rem;
    }

    #mainNav .lang-toggle {
        display: flex;
        align-items: center;
        gap: 0.6rem;
        color: var(--text-muted);
        font-size: 0.8rem;
        font-weight: 700;
        cursor: pointer;
        padding: 0.5rem 0.8rem;
        border-radius: 12px;
        background: transparent;
        border: none;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        text-transform: uppercase;
        letter-spacing: 0.02em;
    }

    #mainNav .lang-toggle:hover {
        color: var(--text-main);
        transform: translateY(-1px);
    }

    #mainNav .lang-toggle i.ti-world {
        color: var(--blue-lt);
        font-size: 1.1rem;
    }

    #mainNav .lang-menu {
        position: absolute;
        top: calc(100% + 6px);
        right: 0;
        background: var(--card-bg);
        border: 1px solid var(--border-color);
        border-radius: 16px;
        backdrop-filter: blur(24px);
        box-shadow: var(--shadow-lg);
        min-width: 150px;
        padding: 0.4rem;
        opacity: 0;
        visibility: hidden;
        transform: translateY(12px);
        transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
        z-index: 2000;
    }

    #mainNav .lang-switcher:hover .lang-menu,
    #mainNav .lang-menu.is-open {
        opacity: 1;
        visibility: visible;
        transform: translateY(0);
    }

    #mainNav .lang-option {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 0.45rem 0.6rem;
        border-radius: 10px;
        color: var(--text-muted);
        font-size: 0.8rem;
        transition: all 0.2s ease;
        text-decoration: none;
        font-weight: 500;
    }

    #mainNav .lang-option:hover {
        background: var(--accent-dim);
        color: var(--text-main);
        padding-left: 0.8rem;
    }

    #mainNav .lang-option.active {
        color: var(--on-accent);
        background: var(--blue);
        font-weight: 700;
    }

    #mainNav .lang-option small {
        font-size: 0.55rem;
        font-weight: 800;
        opacity: 0.6;
        background: var(--surface-strong);
        padding: 1px 4px;
        border-radius: 4px;
        color: var(--text-main);
    }

    @media (max-width: 900px) {
        #mainNav .lang-switcher {
            margin-right: 0;
            margin-bottom: 2rem;
            width: 100%;
            order: -1;
        }
        #mainNav .lang-menu {
            position: static;
            opacity: 1;
            visibility: visible;
            transform: none;
            box-shadow: none;
            background: var(--surface-soft);
            border: 1px solid var(--border-color);
            display: none;
            grid-template-columns: 1fr;
            margin-top: 0.75rem;
        }
        #mainNav .lang-menu.is-open {
            display: grid;
        }
        #mainNav .lang-toggle {
            width: 100%;
            justify-content: space-between;
            padding: 0.8rem 1.2rem;
        }
    }
</style>
<nav id="mainNav">
    <a href="/" class="nav-logo"><img src="{{ asset('logo/logo-digi.png') }}" alt="DigiTexia"></a>
    <button class="nav-toggle" type="button" aria-label="Open navigation" aria-expanded="false"
        aria-controls="navPanel">
        <span></span><span></span><span></span>
    </button>
    <div class="nav-panel" id="navPanel">
        <ul class="nav-mid">
            <li><a href="/" class="{{ $isHomePage ? 'active' : '' }}">{{ __('Home') }}</a></li>
            <li><a href="/the-problem" class="{{ $isProblemPage ? 'active' : '' }}">{{ __('The Problem') }}</a></li>
            <li><a href="/solutions" class="{{ $isSolutionsPage ? 'active' : '' }}">{{ __('Solutions') }}</a></li>
            <li><a href="/projects" class="{{ $isProjectsPage ? 'active' : '' }}">{{ __('Projects') }}</a></li>
            <li><a href="/why-us" class="{{ $isWhyUsPage ? 'active' : '' }}">{{ __('Why Us') }}</a></li>
            <li class="nav-dropdown">
                <a href="#" class="{{ ($isTeamPage || $isPartnersPage || $isBlogPage || $isContactPage) ? 'active' : '' }}">
                    {{ __('Company') }}
                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none">
                        <path d="M2 4l4 4 4-4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </a>
                <div class="dropdown-menu">
                    {{-- <a href="/team-members"
                        class="dropdown-item {{ $isTeamPage ? 'active' : '' }}"><span class="dropdown-item-ico">TM</span>
                        Teams</a> --}}
                    <a href="/our-partners"
                        class="dropdown-item {{ $isPartnersPage ? 'active' : '' }}"><span class="dropdown-item-ico"><i class="ti ti-users"></i></span>
                        {{ __('Partners') }}</a>
                    <a href="/life-at-digi"
                        class="dropdown-item {{ $isBlogPage ? 'active' : '' }}"><span class="dropdown-item-ico"><i class="ti ti-news"></i></span>
                        {{ __('Blog') }}</a>
                    <a href="/contact-us"
                        class="dropdown-item {{ $isContactPage ? 'active' : '' }}"><span class="dropdown-item-ico"><i class="ti ti-mail"></i></span>
                        {{ __('Contact') }}</a>
                </div>
            </li>
        </ul>
        <div class="nav-right">
            <div class="lang-switcher">
                <div class="lang-toggle" id="langToggle">
                    <div style="display: flex; align-items: center; gap: 0.6rem;">
                        <i class="ti ti-world"></i>
                        <span>{{ strtoupper(app()->getLocale()) }}</span>
                    </div>
                    <i class="ti ti-chevron-down" style="font-size: 0.75rem; transition: transform 0.3s ease;"></i>
                </div>
                <div class="lang-menu" id="langMenu">
                    <a href="{{ route('lang.switch', 'en') }}" class="lang-option {{ app()->getLocale() === 'en' ? 'active' : '' }}">
                        <span>English</span>
                        <small>EN</small>
                    </a>
                    <a href="{{ route('lang.switch', 'fr') }}" class="lang-option {{ app()->getLocale() === 'fr' ? 'active' : '' }}">
                        <span>Français</span>
                        <small>FR</small>
                    </a>
                    <a href="{{ route('lang.switch', 'es') }}" class="lang-option {{ app()->getLocale() === 'es' ? 'active' : '' }}">
                        <span>Español</span>
                        <small>ES</small>
                    </a>
                    <a href="{{ route('lang.switch', 'it') }}" class="lang-option {{ app()->getLocale() === 'it' ? 'active' : '' }}">
                        <span>Italiano</span>
                        <small>IT</small>
                    </a>
                    <a href="{{ route('lang.switch', 'zh') }}" class="lang-option {{ app()->getLocale() === 'zh' ? 'active' : '' }}">
                        <span>中文</span>
                        <small>ZH</small>
                    </a>
                </div>
            </div>
            @if ($isHomePage)
                <a href="#cta-final" class="nav-btn">{{ __('Free Diagnostic') }}</a>
            @else
                <a href="/contact-us" class="nav-btn">{{ __('Free Diagnostic') }}</a>
            @endif
        </div>
    </div>
</nav>

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const langToggle = document.getElementById('langToggle');
        const langMenu = document.getElementById('langMenu');
        const langChevron = langToggle ? langToggle.querySelector('.ti-chevron-down') : null;

        if (langToggle && langMenu) {
            langToggle.addEventListener('click', function(e) {
                if (window.innerWidth <= 900) {
                    const isOpen = langMenu.classList.toggle('is-open');
                    if(langChevron) langChevron.style.transform = isOpen ? 'rotate(180deg)' : 'rotate(0)';
                }
            });

            document.addEventListener('click', function(e) {
                if (!langToggle.contains(e.target) && !langMenu.contains(e.target)) {
                    langMenu.classList.remove('is-open');
                    if(langChevron) langChevron.style.transform = 'rotate(0)';
                }
            });
        }
    });
</script>
@endpush
