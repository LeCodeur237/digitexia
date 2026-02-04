@extends('index')

@push('styles')
    <style>
        .section-details {
            padding: 2rem 4rem 14rem 4rem;
        }
    </style>
@endpush

@section('contain')
    <section class="section inner-banner" style="padding-inline: 1rem">
        <div class="container">
            <div class="inner-banner-content">
                <div class="inner-banner-text-wrapper">
                    <div class="inner-banner-typography">
                        <h1 class="inner-banner-title">About Us</h1>
                        <p class="inner-banner-description">We're a creative agency fueled by passion and purpose. We partner
                            with brands to craft unforgettable experiences and meaningful connections.</p>
                    </div>
                    <div class="services-button-wrapper"><a href="/template-pages/pricing"
                            data-wf--primary-button--variant="base" class="primary-button w-inline-block">
                            <div class="primary-button-inner">
                                <div class="primary-button-text-wrap">
                                    <div class="primary-button-text-block">Our Services</div>
                                </div>
                            </div>
                        </a><a href="/template-pages/contact-us" data-wf--primary-button--variant="secondary"
                            class="primary-button w-inline-block">
                            <div class="primary-button-inner w-variant-e542b707-47be-8374-03f0-de6722c5f865">
                                <div class="primary-button-text-wrap">
                                    <div class="primary-button-text-block w-variant-e542b707-47be-8374-03f0-de6722c5f865">
                                        Get a Free Consultation</div>
                                </div>
                            </div>
                        </a></div>
                </div>
                <div class="services-banner-image-wrapper">
                    <img src="{{ asset('images/12150971_4890883.png') }}" loading="lazy" alt="Service Image"
                        class="services-banner-image" />
                </div>
            </div>
        </div>
    </section>
    <section class="section-details">
        <div class="about-us-banner-features-wrapper">
            <div class="w-layout-grid about-us-banner-features-grid">
                <div class="about-us-card">
                    <div class="about-us-card-icon-wrap"><img
                            src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/68781451c1b2ec734bdb1f89_About%20Us%20Card%20Icon1.svg"
                            loading="lazy" alt="About Icon" class="about-us-card-icon" /></div>
                    <div class="about-us-card-typography">
                        <div class="about-us-card-counter-wrap">
                            <div class="summery-counter-wrap">
                                <div class="single-counter-wrap _1">
                                    <h3 class="number-digit">9</h3>
                                </div>
                                <div class="single-counter-wrap _2">
                                    <h3 class="number-digit">0</h3>
                                </div>
                                <div class="single-counter-wrap _1">
                                    <h3 class="number-digit">0</h3>
                                </div>
                                <h3 class="number-digit">+</h3>
                            </div>
                        </div>
                        <p class="about-us-card-description">We deliver great work always</p>
                    </div>
                </div>
                <div class="about-us-card">
                    <div class="about-us-card-icon-wrap"><img
                            src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/6878145183772d0cdf6005e8_About%20Us%20Card%20Icon2.svg"
                            loading="lazy" alt="About Icon" class="about-us-card-icon" /></div>
                    <div class="about-us-card-typography">
                        <div class="about-us-card-counter-wrap">
                            <div class="summery-counter-wrap">
                                <div class="single-counter-wrap _1">
                                    <h3 class="number-digit">1</h3>
                                </div>
                                <div class="single-counter-wrap _2">
                                    <h3 class="number-digit">2</h3>
                                </div>
                                <h3 class="number-digit">+</h3>
                            </div>
                        </div>
                        <p class="about-us-card-description">Experience you can count on</p>
                    </div>
                </div>
                <div class="about-us-card">
                    <div class="about-us-card-icon-wrap"><img
                            src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/68781451e9e825ffe70ac4af_About%20Us%20Card%20Icon3.svg"
                            loading="lazy" alt="About Icon" class="about-us-card-icon" /></div>
                    <div class="about-us-card-typography">
                        <div class="about-us-card-counter-wrap">
                            <div class="summery-counter-wrap">
                                <div class="single-counter-wrap _1">
                                    <h3 class="number-digit">2</h3>
                                </div>
                                <div class="single-counter-wrap _2">
                                    <h3 class="number-digit">8</h3>
                                </div>
                                <h3 class="number-digit">+</h3>
                            </div>
                        </div>
                        <p class="about-us-card-description">Award-Winning Work, Trusted Results</p>
                    </div>
                </div>
                <div class="about-us-card">
                    <div class="about-us-card-icon-wrap"><img
                            src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/68781451954bf1b86c600b25_About%20Us%20Card%20Icon4.svg"
                            loading="lazy" alt="About Icon" class="about-us-card-icon" /></div>
                    <div class="about-us-card-typography">
                        <div class="about-us-card-counter-wrap">
                            <div class="summery-counter-wrap">
                                <div class="single-counter-wrap _1">
                                    <h3 class="number-digit">5</h3>
                                </div>
                                <h3 class="number-digit">K</h3>
                                <h3 class="number-digit">+</h3>
                            </div>
                        </div>
                        <p class="about-us-card-description">We have happy Clients worldwide</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section why-chooses-us" style="padding-inline: 1rem">
        <div class="container">
            <div class="why-chooses-us-content">
                <div class="why-chooses-us-image-wrapper"><img
                        src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/68aa0d4927a7a2c37c2d4733_Why%20Chooses%20Us%20Image.png"
                        loading="lazy" alt="Choose Image" class="image why-chooses-us-image" />
                    <div class="image-overlay">
                        <div class="image-overlay-left"></div>
                        <div class="image-overlay-right"></div>
                    </div>
                </div>
                <div class="why-chooses-us-typography">
                    <div class="why-chooses-us-section-title-wrap">
                        <div class="section-subtitle-wrap left-alignment">
                            <div class="section-subtitle-single"><img
                                    src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/687810aa5293f9e8c955c26a_Section%20Subtitle%20Icon.svg"
                                    loading="lazy" alt="Subtitle Icon" class="section-subtitle-icon" />
                                <div class="section-subtitle">About Us</div>
                            </div>
                        </div>
                        <h2 class="section-title">Your Success, Our Priority.</h2>
                        <p class="section-description">We&#x27;re dedicated to helping you achieve your goals with a
                            simple, user-friendly experience. We believe our commitment to your success sets us apart.</p>
                    </div>
                    <div class="why-chooses-us-typography-content">
                        <div class="w-layout-grid why-chooses-us-typography-grid">
                            <div class="why-chooses-us-typography-single">
                                <div class="why-chooses-us-title">Innovate to Lead</div>
                                <p class="why-chooses-us-description">Foster creativity and embrace innovation to stay
                                    ahead of the competition.</p>
                            </div>
                            <div class="why-chooses-us-typography-single">
                                <div class="why-chooses-us-title">Optimize for Growth</div>
                                <p class="why-chooses-us-description">Streamline processes and resources to maximize
                                    efficiency and profitability.</p>
                            </div>
                            <div class="why-chooses-us-typography-single">
                                <div class="why-chooses-us-title">Engage with Purpose</div>
                                <p class="why-chooses-us-description">Build meaningful relationships with customers through
                                </p>
                            </div>
                            <div class="why-chooses-us-typography-single">
                                <div class="why-chooses-us-title">Scale with Strategy</div>
                                <p class="why-chooses-us-description">Expand your business by implementing structured,
                                    scalable plans</p>
                            </div>
                        </div>
                    </div>
                    <div class="why-chooses-us-button-wrapper"><a href="/template-pages/pricing"
                            data-wf--primary-button--variant="base" data-w-id="3d8db9dc-5eed-be45-f768-868f0c7978a9"
                            class="primary-button w-inline-block">
                            <div class="primary-button-inner">
                                <div class="primary-button-text-wrap">
                                    <div class="primary-button-text-block">Start Projects</div>
                                    <div class="primary-button-text-block is-text-absolute">Start Projects</div>
                                </div>
                            </div>
                        </a></div>
                </div>
            </div>
        </div>
    </section>

    <section class="section company-section">
        <div class="company-subtitle-wrapper">
            <div class="company-subtitle-line"></div>
            <div class="company-subtitle">Trusted Partners Worldwide for Success</div>
            <div class="company-subtitle-line"></div>
        </div>
        <div class="sponsors-ticker-wrapper">
            <div class="sponsors-ticker">
                <div class="ticker">
                    <div class="inner-ticker-wrapper">
                        <div class="ticker-circle"></div>
                        <img src="{{ asset('partners/partner-1.png') }}" loading="lazy" alt="Partner Logo"
                            class="company-logo" />
                        <div class="ticker-circle"></div>
                        <img src="{{ asset('partners/partner-2.png') }}" loading="lazy" alt="Partner Logo"
                            class="company-logo" />
                        <div class="ticker-circle"></div>
                        <img src="{{ asset('partners/partner-3.png') }}" loading="lazy" alt="Partner Logo"
                            class="company-logo" />
                        <div class="ticker-circle"></div>
                        <img src="{{ asset('partners/partner-4.png') }}" loading="lazy" alt="Partner Logo"
                            class="company-logo" />
                        <div class="ticker-circle"></div>
                        <img src="{{ asset('partners/partner-5.png') }}" loading="lazy" alt="Partner Logo"
                            class="company-logo" />
                        <div class="ticker-circle"></div>
                        <img src="{{ asset('partners/partner-6.png') }}.svg" loading="lazy" alt="Partner Logo"
                            class="company-logo" />
                        <div class="ticker-circle"></div>
                        <img src="{{ asset('partners/partner-7.png') }}" loading="lazy" alt="Partner Logo"
                            class="company-logo" />
                        <div class="ticker-circle"></div>
                        <img src="{{ asset('partners/partner-8.png') }}" loading="lazy" alt="Partner Logo"
                            class="company-logo" />
                        <div class="ticker-circle"></div>
                        <img src="{{ asset('partners/partner-9.png') }}" loading="lazy" alt="Partner Logo"
                            class="company-logo" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section team-members" style="padding-inline: 1rem">
        <div class="container">
            <div class="section-title-wrapper">
                <div class="section-subtitle-wrap">
                    <div class="section-subtitle-single"><img
                            src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/687810aa5293f9e8c955c26a_Section%20Subtitle%20Icon.svg"
                            loading="lazy" alt="Subtitle Icon" class="section-subtitle-icon" />
                        <div class="section-subtitle">Team Members</div>
                    </div>
                </div>
                <h2 class="section-title mb0">Meet Our Expert Members</h2>
            </div>
            <div class="team-members-content">
                <div data-delay="4000" data-animation="slide" class="team-members-slider w-slider" data-autoplay="false"
                    data-easing="ease" data-hide-arrows="false" data-disable-swipe="false" data-autoplay-limit="0"
                    data-nav-spacing="3" data-duration="500" data-infinite="true">
                    <div class="team-member-mask w-slider-mask">
                        <div class="team-member-single-slider w-slide">
                            <div class="team-member-single">
                                <div class="team-member-collection-list-wrapper w-dyn-list">
                                    <div role="list" class="team-member-collection-list w-dyn-items">
                                        <div role="listitem" class="team-member-collection-item w-dyn-item">
                                            <div class="team-member-wrapper">
                                                <div class="team-member-image-wrapper"><img
                                                        src="{{ asset('images/team-1.jpg') }}" loading="lazy" alt="Thomas Alison" class="team-member-image" />
                                                    <div class="team-member-social-media-wrapper"><a
                                                            href="https://www.facebook.com/" target="_blank"
                                                            class="team-member-social-media-link-block w-inline-block">
                                                            <div class="team-member-social-media-icon"></div>
                                                        </a><a href="https://www.instagram.com/" target="_blank"
                                                            class="team-member-social-media-link-block w-inline-block">
                                                            <div class="team-member-social-media-icon"></div>
                                                        </a><a href="https://x.com/" target="_blank"
                                                            class="team-member-social-media-link-block w-inline-block">
                                                            <div class="team-member-social-media-icon"></div>
                                                        </a><a href="http://linkedin.com/" target="_blank"
                                                            class="team-member-social-media-link-block w-inline-block">
                                                            <div class="team-member-social-media-icon"></div>
                                                        </a></div>
                                                </div>
                                                <div class="team-member-typography"><a href="/team-members/thomas-alison"
                                                        class="team-member-name">Thomas Alison</a>
                                                    <div class="team-member-bio">Co Founder &amp; CEO</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="team-member-single-slider w-slide">
                            <div class="team-member-single">
                                <div class="team-member-collection-list-wrapper w-dyn-list">
                                    <div role="list" class="team-member-collection-list w-dyn-items">
                                        <div role="listitem" class="team-member-collection-item w-dyn-item">
                                            <div class="team-member-wrapper">
                                                <div class="team-member-image-wrapper"><img
                                                        src="{{ asset('images/team-2.jpg') }}" loading="lazy" alt="Sarah Johnson" class="team-member-image" />
                                                    <div class="team-member-social-media-wrapper"><a
                                                            href="https://www.facebook.com/" target="_blank"
                                                            class="team-member-social-media-link-block w-inline-block">
                                                            <div class="team-member-social-media-icon"></div>
                                                        </a><a href="https://www.instagram.com/" target="_blank"
                                                            class="team-member-social-media-link-block w-inline-block">
                                                            <div class="team-member-social-media-icon"></div>
                                                        </a><a href="https://x.com/" target="_blank"
                                                            class="team-member-social-media-link-block w-inline-block">
                                                            <div class="team-member-social-media-icon"></div>
                                                        </a><a href="http://linkedin.com/" target="_blank"
                                                            class="team-member-social-media-link-block w-inline-block">
                                                            <div class="team-member-social-media-icon"></div>
                                                        </a></div>
                                                </div>
                                                <div class="team-member-typography"><a href="/team-members/sarah-johnson"
                                                        class="team-member-name">Sarah Johnson</a>
                                                    <div class="team-member-bio">Front End Developer</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="team-member-single-slider w-slide">
                            <div class="team-member-single">
                                <div class="team-member-collection-list-wrapper w-dyn-list">
                                    <div role="list" class="team-member-collection-list w-dyn-items">
                                        <div role="listitem" class="team-member-collection-item w-dyn-item">
                                            <div class="team-member-wrapper">
                                                <div class="team-member-image-wrapper"><img
                                                        src="{{ asset('images/team-3.jpg') }}" loading="lazy" alt="Michael Davis" class="team-member-image" />
                                                    <div class="team-member-social-media-wrapper"><a
                                                            href="https://www.facebook.com/" target="_blank"
                                                            class="team-member-social-media-link-block w-inline-block">
                                                            <div class="team-member-social-media-icon"></div>
                                                        </a><a href="https://www.instagram.com/" target="_blank"
                                                            class="team-member-social-media-link-block w-inline-block">
                                                            <div class="team-member-social-media-icon"></div>
                                                        </a><a href="https://x.com/" target="_blank"
                                                            class="team-member-social-media-link-block w-inline-block">
                                                            <div class="team-member-social-media-icon"></div>
                                                        </a><a href="http://linkedin.com/" target="_blank"
                                                            class="team-member-social-media-link-block w-inline-block">
                                                            <div class="team-member-social-media-icon"></div>
                                                        </a></div>
                                                </div>
                                                <div class="team-member-typography"><a href="/team-members/michael-davis"
                                                        class="team-member-name">Michael Davis</a>
                                                    <div class="team-member-bio">Chief Technology Officer</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="team-member-single-slider w-slide">
                            <div class="team-member-single">
                                <div class="team-member-collection-list-wrapper w-dyn-list">
                                    <div role="list" class="team-member-collection-list w-dyn-items">
                                        <div role="listitem" class="team-member-collection-item w-dyn-item">
                                            <div class="team-member-wrapper">
                                                <div class="team-member-image-wrapper"><img
                                                        src="{{ asset('images/team-4.jpg') }}" loading="lazy" alt="Sarah Elizabeth" class="team-member-image" />
                                                    <div class="team-member-social-media-wrapper"><a
                                                            href="https://www.facebook.com/" target="_blank"
                                                            class="team-member-social-media-link-block w-inline-block">
                                                            <div class="team-member-social-media-icon"></div>
                                                        </a><a href="https://www.instagram.com/" target="_blank"
                                                            class="team-member-social-media-link-block w-inline-block">
                                                            <div class="team-member-social-media-icon"></div>
                                                        </a><a href="https://x.com/" target="_blank"
                                                            class="team-member-social-media-link-block w-inline-block">
                                                            <div class="team-member-social-media-icon"></div>
                                                        </a><a href="http://linkedin.com/" target="_blank"
                                                            class="team-member-social-media-link-block w-inline-block">
                                                            <div class="team-member-social-media-icon"></div>
                                                        </a></div>
                                                </div>
                                                <div class="team-member-typography"><a
                                                        href="/team-members/sarah-elizabeth"
                                                        class="team-member-name">Sarah Elizabeth </a>
                                                    <div class="team-member-bio">Senior Web Developer</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
