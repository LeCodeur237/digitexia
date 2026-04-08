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
    $isCarriersPage = request()->is('carriers');
    $isSaasHeaderPage = $isHomePage || $isProblemPage || $isSolutionsPage || $isWhyUsPage || $isTeamPage || $isPartnersPage || $isBlogPage || $isContactPage;

    $currentPageLabel = 'Home';
    $currentPageUrl = '/';
    if ($isAboutPage) {
        $currentPageLabel = 'About';
        $currentPageUrl = '/about-us';
    } elseif ($isServicesPage) {
        $currentPageLabel = 'Services';
        $currentPageUrl = '/services';
    } elseif ($isProjectsPage) {
        $currentPageLabel = 'Products';
        $currentPageUrl = '/projects';
    } elseif ($isCarriersPage) {
        $currentPageLabel = 'Careers';
        $currentPageUrl = '/carriers';
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
    #mainNav .nav-mid a.active,
    #mainNav .nav-dropdown>a.active {
        color: var(--white);
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
        box-shadow: 0 0 18px rgba(18, 70, 240, .35);
    }

    #mainNav .nav-dropdown>a.active svg {
        transform: rotate(180deg);
    }

    .current-page-badge {
        display: inline-flex;
        align-items: center;
        gap: .45rem;
        padding: .5rem .85rem;
        border-radius: 999px;
        border: 1px solid var(--blue-bdr);
        background: var(--blue-dim);
        color: var(--white);
        font-size: .72rem;
        font-weight: 700;
        letter-spacing: .04em;
        text-transform: uppercase;
        white-space: nowrap;
    }

    .current-page-badge span {
        color: var(--blue-lt);
    }

    .page-location-badge {
        display: inline-flex;
        align-items: center;
        gap: .4rem;
        padding: .45rem .75rem;
        border-radius: 999px;
        border: 1px solid rgba(18, 70, 240, .25);
        background: rgba(18, 70, 240, .08);
        color: #fff;
        font-size: .72rem;
        font-weight: 700;
        letter-spacing: .04em;
        text-transform: uppercase;
        white-space: nowrap;
        margin-right: .8rem;
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
                        class="dropdown-item {{ $isPartnersPage ? 'active' : '' }}"><span class="dropdown-item-ico">PR</span>
                        Partners</a>
                    <a href="/life-at-digi"
                        class="dropdown-item {{ $isBlogPage ? 'active' : '' }}"><span class="dropdown-item-ico">BL</span>
                        Blog</a>
                    <a href="/contact-us"
                        class="dropdown-item {{ $isContactPage ? 'active' : '' }}"><span class="dropdown-item-ico">CT</span>
                        Contact</a>
                </div>
            </li>
        </ul>
        <div class="nav-right">
            @if ($isHomePage)
                <a href="#cta-final" class="nav-btn">Request a Demo</a>
            @else
                <a href="/contact-us" class="nav-btn">Request a Demo</a>
            @endif
        </div>
    </div>
</nav>
