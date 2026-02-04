<style>
    .bg-light {
        background-color: #fff !important;
        z-index: 999;
    }

    /* Fix pour le dropdown qui ne fonctionne pas.
       Ceci le fait apparaître au survol de la souris. */
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
                        class="nav-link w-nav-link {{ request()->is('services') ? 'w--current' : '' }}">Services</a>
                    <a href="/projects"
                        class="nav-link w-nav-link {{ request()->is('projects') ? 'w--current' : '' }}">Projects</a>
                    <a href="/our-partners"
                        class="nav-link w-nav-link {{ request()->is('our-partners') ? 'w--current' : '' }}">Partners</a>
                    <div class="menu-dropdown-wrapper w-dropdown">
                        <div class="dropdown-toggle w-dropdown-toggle">
                            <div class="dropdown-toggle-text-block">Company</div>
                            <div class="dropdown-toggle-arrow"></div>
                        </div>
                        <nav class="resource-dropdown-wrap w-dropdown-list">
                            <div class="resource-dropdown-content-wrap">
                                <div class="dropdown-menu-wrapper">
                                    <a href="/about-us"
                                        class="dropdown-menu-text-link-text w-inline-block {{ request()->is('about-us') ? 'w--current' : '' }}">
                                        <div>About Us</div>
                                    </a>
                                    <a href="/team-members"
                                        class="dropdown-menu-text-link-text w-inline-block {{ request()->is('team-members') ? 'w--current' : '' }}">
                                        <div>Teams</div>
                                    </a>
                                    <a href="/life-at-digi" class="dropdown-menu-text-link-text w-inline-block {{ request()->is('life-at-digi') ? 'w--current' : '' }}">
                                        <div>Blogs</div>
                                    </a>
                                    <a href="/contact-us"
                                        class="dropdown-menu-text-link-text mb0 w-inline-block {{ request()->is('contact-us') ? 'w--current' : '' }}">
                                        <div>Contact Us</div>
                                    </a>
                                </div>
                            </div>
                        </nav>
                    </div>
                    <a href="/carriers"
                        class="nav-link w-nav-link {{ request()->is('template-pages/portfolio') ? 'w--current' : '' }}">Carriers</a>
                </nav>
                <div class="navbar-contact-wrapper">
                    <a href="tel:22003567890" class="navbar-contact-link-block w-inline-block">
                        <div class="navbar-contact-icon-wrap">
                            <img src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/687802f515a83fbfc32a6ae4_Contact%20Icon.svg"
                                loading="lazy" alt="Phone Icon" class="contact-icon" />
                        </div>
                        <div class="navbar-contact-title-number">
                            <div class="navbar-contact-title">Call Any Time</div>
                            <div class="navbar-contact-number">22 (00) 356 7890</div>
                        </div>
                    </a>
                    <div class="menu-button w-nav-button">
                        <div data-is-ix2-target="1" class="hamburger-menu-icon"
                            data-w-id="0252e172-0813-2e01-a890-033f2b17bb38" data-animation-type="lottie"
                            data-src="https://cdn.prod.website-files.com/6649cc3a1ea038d81fed488f/665c6513d8d80fdb4ba4cd55_Hamburger%20Black%20(1).json"
                            data-loop="0" data-direction="1" data-autoplay="0" data-renderer="svg" data-duration="0"
                            data-ix2-initial-state="0"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
