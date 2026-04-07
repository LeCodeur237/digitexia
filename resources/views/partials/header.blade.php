@php
    $isHomePage = request()->path() === '/' || request()->path() === '' || request()->is('/');
    $isProblemPage = request()->is('the-problem') || request()->is('problem');
    $isSolutionsPage = request()->is('solutions') || request()->is('solutions/*') || request()->is('services');
    $isWhyUsPage = request()->is('why-us');
    $isTeamPage = request()->is('team-members') || request()->is('team');
    $isPartnersPage = request()->is('our-partners');
    $isBlogPage = request()->is('life-at-digi') || request()->is('life-at-digi/*');
    $isContactPage = request()->is('contact-us');
    $isSaasHeaderPage = $isHomePage || $isProblemPage || $isSolutionsPage || $isWhyUsPage || $isTeamPage || $isPartnersPage || $isBlogPage || $isContactPage;
@endphp

@if ($isSaasHeaderPage)
    <nav id="mainNav">
        <a href="/" class="nav-logo"><img src="{{ asset('logo/logo-digi.png') }}" alt="DigiTexia"></a>
        <button class="nav-toggle" type="button" aria-label="Open navigation" aria-expanded="false"
            aria-controls="navPanel">
            <span></span><span></span><span></span>
        </button>
        <div class="nav-panel" id="navPanel">
            <ul class="nav-mid">
                <li><a href="/" class="{{ $isHomePage ? 'active' : '' }}">Home</a></li>
                @if ($isHomePage)
                    <li><a href="/the-problem">The Problem</a></li>
                    <li><a href="/solutions">Solutions</a></li>
                    <li><a href="/why-us">Why Us</a></li>
                    <li><a href="#workflow">Workflow</a></li>
                    <li><a href="#impact">Impact</a></li>
                @else
                    <li><a href="/the-problem" class="{{ $isProblemPage ? 'active' : '' }}">The Problem</a></li>
                    <li><a href="/solutions" class="{{ $isSolutionsPage ? 'active' : '' }}">Solutions</a></li>
                    <li><a href="/why-us" class="{{ $isWhyUsPage ? 'active' : '' }}">Why Us</a></li>
                    <li><a href="/#workflow">Workflow</a></li>
                    <li><a href="/#impact">Impact</a></li>
                @endif
                <li class="nav-dropdown">
                    <a href="#" class="{{ ($isTeamPage || $isPartnersPage || $isBlogPage) ? 'active' : '' }}">
                        Company
                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none">
                            <path d="M2 4l4 4 4-4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </a>
                    <div class="dropdown-menu">
                        <a href="/team-members"
                            class="dropdown-item {{ $isTeamPage ? 'active' : '' }}"><span class="dropdown-item-ico">TM</span>
                            Teams</a>
                        <a href="/our-partners"
                            class="dropdown-item {{ $isPartnersPage ? 'active' : '' }}"><span class="dropdown-item-ico">PR</span>
                            Partners</a>
                        <a href="/carriers" class="dropdown-item"><span class="dropdown-item-ico">CR</span> Carriers</a>
                        <div class="dropdown-divider"></div>
                        <a href="/life-at-digi"
                            class="dropdown-item {{ $isBlogPage ? 'active' : '' }}"><span class="dropdown-item-ico">BL</span>
                            Blog</a>
                        <a href="/contact-us" class="dropdown-item"><span class="dropdown-item-ico">CT</span>
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
@else
    <style>
        .bg-light {
            background-color: #fff !important;
            z-index: 999;
        }

        .w-dropdown:hover .w-dropdown-list {
            display: block;
        }
    </style>

    <div class="page-wrapper">
        <div class="navbar w-nav bg-light">
            <div class="container">
                <div class="navbar-wrapper">
                    <a href="/" class="navbar-logo w-nav-brand {{ request()->is('/') ? 'w--current' : '' }}"
                        style="width: 15%;" {{ request()->is('/') ? 'aria-current="page"' : '' }}>
                        <img src="{{ asset('logo/logo-digi.png') }}" loading="lazy" alt="DigiTexia Logo"
                            class="navbar-logo-image" />
                    </a>
                    <nav role="navigation" class="nav-menu w-nav-menu">
                        <a href="/" class="nav-link w-nav-link {{ request()->is('/') ? 'w--current' : '' }}"
                            {{ request()->is('/') ? 'aria-current="page"' : '' }}>Home</a>

                        <a href="/services"
                            class="nav-link w-nav-link {{ request()->is('services') ? 'w--current' : '' }}">Solutions</a>
                        <a href="/projects"
                            class="nav-link w-nav-link {{ request()->is('projects') ? 'w--current' : '' }}">Produits</a>
                        <a href="/our-partners"
                            class="nav-link w-nav-link {{ request()->is('our-partners') ? 'w--current' : '' }}">Industries</a>
                        <div class="menu-dropdown-wrapper w-dropdown">
                            <div class="dropdown-toggle w-dropdown-toggle">
                                <div class="dropdown-toggle-text-block">Entreprise</div>
                                <div class="dropdown-toggle-arrow">?</div>
                            </div>
                            <nav class="resource-dropdown-wrap w-dropdown-list">
                                <div class="resource-dropdown-content-wrap">
                                    <div class="dropdown-menu-wrapper">
                                        <a href="/about-us"
                                            class="dropdown-menu-text-link-text w-inline-block {{ request()->is('about-us') ? 'w--current' : '' }}">
                                            <div>A propos</div>
                                        </a>
                                        <a href="/life-at-digi"
                                            class="dropdown-menu-text-link-text w-inline-block {{ request()->is('life-at-digi') || request()->is('life-at-digi/*') ? 'w--current' : '' }}">
                                            <div>Blog</div>
                                        </a>
                                        <a href="/contact-us"
                                            class="dropdown-menu-text-link-text mb0 w-inline-block {{ request()->is('contact-us') ? 'w--current' : '' }}">
                                            <div>Contact</div>
                                        </a>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </nav>
                    <div class="navbar-contact-wrapper">
                        <a href="tel:+237650945280" class="navbar-contact-link-block w-inline-block">
                            <div class="navbar-contact-icon-wrap">
                                <img src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/687802f515a83fbfc32a6ae4_Contact%20Icon.svg"
                                    loading="lazy" alt="Phone Icon" class="contact-icon" />
                            </div>
                            <div class="navbar-contact-title-number">
                                <div class="navbar-contact-title">Parlez a un expert</div>
                                <div class="navbar-contact-number">(+237) 650 94 5280</div>
                            </div>
                        </a>
                        <div class="menu-button w-nav-button">
                            <div data-is-ix2-target="1" class="hamburger-menu-icon"
                                data-w-id="0252e172-0813-2e01-a890-033f2b17bb38" data-animation-type="lottie"
                                data-src="https://cdn.prod.website-files.com/6649cc3a1ea038d81fed488f/665c6513d8d80fdb4ba4cd55_Hamburger%20Black%20(1).json"
                                data-loop="0" data-direction="1" data-autoplay="0" data-renderer="svg"
                                data-duration="0" data-ix2-initial-state="0"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
