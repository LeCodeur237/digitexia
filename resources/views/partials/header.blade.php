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

    $currentPageLabel = 'Home';
    $currentPageUrl = '/';
    if ($isAboutPage) {
        $currentPageLabel = 'About';
        $currentPageUrl = '/about-us';
    } elseif ($isServicesPage) {
        $currentPageLabel = 'Services';
        $currentPageUrl = '/services';
    } elseif ($isProjectsPage) {
        $currentPageLabel = 'Projects';
        $currentPageUrl = '/projects';
    } elseif ($isCareersPage) {
        $currentPageLabel = 'Careers';
        $currentPageUrl = '/careers';
    } elseif ($isProblemPage) {
        $currentPageLabel = 'Problem';
        $currentPageUrl = '/the-problem';
    } elseif ($isSolutionsPage) {
        $currentPageLabel = 'Solutions';
        $currentPageUrl = '/solutions';
    } elseif ($isWhyUsPage) {
        $currentPageLabel = 'Why Us';
        $currentPageUrl = '/why-us';
    } elseif ($isTeamPage) {
        $currentPageLabel = 'Team';
        $currentPageUrl = '/team-members';
    } elseif ($isPartnersPage) {
        $currentPageLabel = 'Partners';
        $currentPageUrl = '/our-partners';
    } elseif ($isBlogPage) {
        $currentPageLabel = 'Blog';
        $currentPageUrl = '/life-at-digi';
    } elseif ($isContactPage) {
        $currentPageLabel = 'Contact';
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
</style>
<nav id="mainNav">
    <a href="/" class="nav-logo"><img src="{{ asset('logo/logo-digi.png') }}" alt="DigiTexia"></a>
    <button class="nav-toggle" type="button" aria-label="Open navigation" aria-expanded="false"
        aria-controls="navPanel">
        <span></span><span></span><span></span>
    </button>
    <div class="nav-panel" id="navPanel">
        <ul class="nav-mid">
            <li><a href="/" class="{{ $isHomePage ? 'active' : '' }}">Home</a></li>
            <li><a href="/the-problem" class="{{ $isProblemPage ? 'active' : '' }}">The Problem</a></li>
            <li><a href="/solutions" class="{{ $isSolutionsPage ? 'active' : '' }}">Solutions</a></li>
            <li><a href="/projects" class="{{ $isProjectsPage ? 'active' : '' }}">Projects</a></li>
            <li><a href="/why-us" class="{{ $isWhyUsPage ? 'active' : '' }}">Why Us</a></li>
            <li class="nav-dropdown">
                <a href="#" class="{{ ($isTeamPage || $isPartnersPage || $isBlogPage || $isContactPage) ? 'active' : '' }}">
                    Company
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
                        Partners</a>
                    <a href="/life-at-digi"
                        class="dropdown-item {{ $isBlogPage ? 'active' : '' }}"><span class="dropdown-item-ico"><i class="ti ti-news"></i></span>
                        Blog</a>
                    <a href="/contact-us"
                        class="dropdown-item {{ $isContactPage ? 'active' : '' }}"><span class="dropdown-item-ico"><i class="ti ti-mail"></i></span>
                        Contact</a>
                </div>
            </li>
        </ul>
        <div class="nav-right">
            @if ($isHomePage)
                <a href="#cta-final" class="nav-btn">Free Diagnostic</a>
            @else
                <a href="/contact-us" class="nav-btn">Free Diagnostic</a>
            @endif
        </div>
    </div>
</nav>
