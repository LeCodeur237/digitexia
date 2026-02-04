@extends('index')

@section('contain')
    <section class="section banner" style="padding-inline: 1rem">
        <div class="container">
            <div class="banner-content">
                <div class="banner-typography">
                    <div class="banner-subtitle-wrapper">
                        <div class="banner-subtitle">Building Africa’s Digital Future</div>
                    </div>
                    <div class="banner-title-description">
                        <h1 class="banner-title">Accelerating Digital Transformation Across Africa</h1>
                        <p class="banner-description-text">We help companies design, build, and deploy innovative digital
                            solutions that improve
                            performance, efficiency, and long-term growth.</p>
                    </div>
                    <div class="banner-button-wrapper">
                        <a href="/template-pages/pricing" class="primary-button w-inline-block">
                            <div class="primary-button-inner">
                                <div class="primary-button-text-wrap">
                                    <div class="primary-button-text-block">Start Your Digital Project</div>
                                </div>
                            </div>
                        </a>
                        <a href="/template-pages/contact-us" data-wf--primary-button--variant="secondary"
                            class="primary-button w-inline-block">
                            <div class="primary-button-inner w-variant-e542b707-47be-8374-03f0-de6722c5f865">
                                <div class="primary-button-text-wrap">
                                    <div class="primary-button-text-block w-variant-e542b707-47be-8374-03f0-de6722c5f865">
                                        Discover Our Services</div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="banner-image-wrapper">
                    <img src="{{ asset('images/118195.jpg') }}" loading="lazy" alt="Banner Image"
                        class="image banner-image" />
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
    <section class="section about-us" style="padding-inline: 1rem">
        <div class="container">
            <div class="section-title-wrapper">
                <div class="section-subtitle-wrap">
                    <div class="section-subtitle-single"><img
                            src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/687810aa5293f9e8c955c26a_Section%20Subtitle%20Icon.svg"
                            loading="lazy" alt="Subtitle Icon" class="section-subtitle-icon" />
                        <div class="section-subtitle">About Digitexia</div>
                    </div>
                </div>
                <h2 class="section-title about-mobile">Who We Are. Building Digital Solutions for Africa</h2>
                <p class="section-description about-us">We are a pan-African team of technology experts and digital
                    innovators dedicated to helping organizations transform their ideas into scalable, impactful digital
                    solutions.</p>
            </div>
            <div class="about-us-content">
                <div data-w-id="867b5e97-f513-07e2-ad0c-f997f670fcee" class="about-us-image-wrapper"><img
                        src="{{ asset('images/126208.jpg') }}" loading="lazy" sizes="(max-width: 584px) 100vw, 584px"
                        srcset="{{ asset('images/126208.jpg') }} 500w, {{ asset('images/126208.jpg') }} 584w"
                        alt="About Image" class="image about-us-image" />
                </div>
                <div class="about-us-typography">
                    <div class="about-us-top-content">
                        <div class="w-layout-grid about-us-top-grid">
                            <div class="about-us-card _01">
                                <div class="about-us-card-icon-wrap"><img
                                        src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/68781451c1b2ec734bdb1f89_About%20Us%20Card%20Icon1.svg"
                                        loading="lazy" alt="About Icon" class="about-us-card-icon" /></div>
                                <div class="about-us-card-typography">
                                    <div class="about-us-card-counter-wrap">
                                        <div class="summery-counter-wrap">
                                            <div class="single-counter-wrap _1">
                                                <h3 class="number-digit">10+</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="about-us-card-description">Digital Solutions Delivered</p>
                                </div>
                            </div>
                            <div class="about-us-card _02">
                                <div class="about-us-card-icon-wrap"><img
                                        src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/6878145183772d0cdf6005e8_About%20Us%20Card%20Icon2.svg"
                                        loading="lazy" alt="About Icon" class="about-us-card-icon" /></div>
                                <div class="about-us-card-typography">
                                    <div class="about-us-card-counter-wrap">
                                        <div class="summery-counter-wrap">
                                            <div class="single-counter-wrap _1">
                                                <h3 class="number-digit">5+</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="about-us-card-description">Years of Combined Experience</p>
                                </div>
                            </div>
                            <div class="about-us-card _03">
                                <div class="about-us-card-icon-wrap"><img
                                        src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/68781451e9e825ffe70ac4af_About%20Us%20Card%20Icon3.svg"
                                        loading="lazy" alt="About Icon" class="about-us-card-icon" /></div>
                                <div class="about-us-card-typography">
                                    <div class="about-us-card-counter-wrap">
                                        <div class="summery-counter-wrap">
                                            <div class="single-counter-wrap _1">
                                                <h3 class="number-digit">100%</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="about-us-card-description">Client-Focused Approach</p>
                                </div>
                            </div>
                            <div class="about-us-card _04">
                                <div class="about-us-card-icon-wrap"><img
                                        src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/68781451954bf1b86c600b25_About%20Us%20Card%20Icon4.svg"
                                        loading="lazy" alt="About Icon" class="about-us-card-icon" /></div>
                                <div class="about-us-card-typography">
                                    <div class="about-us-card-counter-wrap">
                                        <div class="summery-counter-wrap">
                                            <div class="single-counter-wrap _1">
                                                <h3 class="number-digit">Pan-A</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="about-us-card-description">Clients & Partners</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="about-us-bottom-content"><a href="/template-pages/about-us"
                            data-wf--primary-button--variant="base" data-w-id="3d8db9dc-5eed-be45-f768-868f0c7978a9"
                            class="primary-button w-inline-block">
                            <div class="primary-button-inner">
                                <div class="primary-button-text-wrap">
                                    <div class="primary-button-text-block">Learn More About Digitexia</div>
                                </div>
                            </div>
                        </a><a href="tel:22(00)3567890" class="navbar-contact-link-block w-inline-block">
                            <div class="navbar-contact-icon-wrap about-us"><img
                                    src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/687802f515a83fbfc32a6ae4_Contact%20Icon.svg"
                                    loading="lazy" alt="Phone Icon" class="contact-icon about" /></div>
                            <div class="navbar-contact-title-number">
                                <div class="navbar-contact-title about-us">Request a Free Consultation</div>
                                <div class="navbar-contact-number about">(00237) 650 94 5280</div>
                            </div>
                        </a></div>
                </div>
            </div>
        </div>
    </section>
    <section class="section services">
        <div class="container">
            <div class="section-title-wrapper">
                <div class="section-subtitle-wrap">
                    <div class="section-subtitle-single gray-bg"><img
                            src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/68a8be303fa5a8c72f1cf197_Section%20Subtitle%20Icon2.svg"
                            loading="lazy" alt="Subtitle Icon" class="section-subtitle-icon" />
                        <div class="section-subtitle white">Services</div>
                    </div>
                </div>
                <h2 class="section-title white">Your Business Challenges, Our Digital Expertise</h2>
                <p class="section-description white-color services">Your vision, our expertise — together, we design and
                    build digital solutions tailored to your business needs, delivering measurable and sustainable results.
                </p>
            </div>
            <div class="services-contenr">
                <div class="services-single-wrapper">
                    <div class="services-collection-list-wrapper w-dyn-list">
                        <div role="list" class="services-collection-list w-dyn-items">
                            <div role="listitem" class="services-collection-item w-dyn-item"><a
                                    data-w-id="64377adc-e8e6-4194-2f99-78ff246ff39d" href="/services/web-design"
                                    class="services-single _1st w-inline-block">
                                    <div class="services-name-wrapper">
                                        <div class="services-name-number-wrapper">
                                            <div data-w-id="996ade88-712c-652f-a7d5-a6740dea2bd5" class="services-number">
                                                01</div>
                                            <h2 data-w-id="fecc23b7-7e62-a351-4b5a-eb794dfa52ec" class="services-name">Web
                                                Digital Strategy & Consulting</h2>
                                        </div>
                                        <div data-w-id="ee2d1959-1d9f-4a95-f18b-278b61be4895"
                                            class="services-arrow-icon-wrapper">
                                            <img src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/68a8c4dc0bf39abe4f4c253d_Services%20Arrow%20Icon.svg"
                                                loading="lazy" alt="Arrow" class="services-arrow-icon" />
                                        </div>
                                    </div>
                                    <div class="services-description-wrapper">
                                        <div data-w-id="be27fb93-ff60-9477-0331-89e08cf5e38f"
                                            class="services-description-single">
                                            <p class="services-description-text">We help organizations define clear digital
                                                strategies by analyzing their processes, challenges, and growth objectives,
                                                then translating them into actionable digital roadmaps.</p>
                                        </div>
                                    </div><img src="{{ asset('images/service-1.jpg') }}" loading="lazy"
                                        data-w-id="4d18c86f-1a55-0ade-905e-94c160616e6e" alt="Service Image"
                                        class="services-image" />
                                </a></div>
                        </div>
                    </div>
                </div>
                <div class="services-single-wrapper">
                    <div class="services-collection-list-wrapper w-dyn-list">
                        <div role="list" class="services-collection-list w-dyn-items">
                            <div role="listitem" class="services-collection-item w-dyn-item"><a
                                    data-w-id="ab38aa81-ed75-752f-1365-2f2e8f53fadf" href="/services/web-development"
                                    class="services-single w-inline-block">
                                    <div class="services-name-wrapper">
                                        <div class="services-name-number-wrapper">
                                            <div data-w-id="ab38aa81-ed75-752f-1365-2f2e8f53fae2" class="services-number">
                                                02</div>
                                            <h2 data-w-id="ab38aa81-ed75-752f-1365-2f2e8f53fae4" class="services-name">Web
                                                & Software Development</h2>
                                        </div>
                                        <div data-w-id="ab38aa81-ed75-752f-1365-2f2e8f53fae5"
                                            class="services-arrow-icon-wrapper"><img
                                                src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/68a8c4dc0bf39abe4f4c253d_Services%20Arrow%20Icon.svg"
                                                loading="lazy" alt="Arrow" class="services-arrow-icon" /></div>
                                    </div>
                                    <div class="services-description-wrapper">
                                        <div data-w-id="ab38aa81-ed75-752f-1365-2f2e8f53fae8"
                                            class="services-description-single">
                                            <p class="services-description-text">We design and develop robust web
                                                applications, mobile solutions, and custom software tailored to business
                                                needs, using modern and scalable technologies.</p>
                                        </div>
                                    </div><img src="{{ asset('images/service-2.jpg') }}" loading="lazy"
                                        data-w-id="ab38aa81-ed75-752f-1365-2f2e8f53faea" alt="Service Image"
                                        class="services-image" />
                                </a></div>
                        </div>
                    </div>
                </div>
                <div class="services-single-wrapper">
                    <div class="services-collection-list-wrapper w-dyn-list">
                        <div role="list" class="services-collection-list w-dyn-items">
                            <div role="listitem" class="services-collection-item w-dyn-item">
                                <a data-w-id="09d08cac-d607-ec02-5387-75ad1a62fe9b" href="/services/branding"
                                    class="services-single w-inline-block">
                                    <div class="services-name-wrapper">
                                        <div class="services-name-number-wrapper">
                                            <div data-w-id="09d08cac-d607-ec02-5387-75ad1a62fe9e" class="services-number">
                                                03</div>
                                            <h2 data-w-id="09d08cac-d607-ec02-5387-75ad1a62fea0" class="services-name">
                                                Business Process Digitalization</h2>
                                        </div>
                                        <div class="services-arrow-icon-wrapper">
                                            <img src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/68a8c4dc0bf39abe4f4c253d_Services%20Arrow%20Icon.svg"
                                                loading="lazy" alt="Arrow" class="services-arrow-icon" />
                                        </div>
                                    </div>
                                    <div class="services-description-wrapper">
                                        <div data-w-id="09d08cac-d607-ec02-5387-75ad1a62fea4"
                                            class="services-description-single">
                                            <p class="services-description-text">We digitalize and automate internal
                                                business processes to improve efficiency, reduce operational costs, and
                                                enhance decision-making through smart digital tools.</p>
                                        </div>
                                    </div>
                                    <img src="{{ asset('images/service-3.jpg') }}" loading="lazy"
                                        data-w-id="09d08cac-d607-ec02-5387-75ad1a62fea6" alt="Service Image"
                                        class="services-image" />
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="services-single-wrapper">
                    <div class="services-collection-list-wrapper w-dyn-list">
                        <div role="list" class="services-collection-list w-dyn-items">
                            <div role="listitem" class="services-collection-item w-dyn-item">
                                <a data-w-id="f1b498ae-d155-e4f6-a43f-c2cc236e6222" href="/services/product-design"
                                    class="services-single last w-inline-block">
                                    <div class="services-name-wrapper">
                                        <div class="services-name-number-wrapper">
                                            <div data-w-id="f1b498ae-d155-e4f6-a43f-c2cc236e6225" class="services-number">
                                                04</div>
                                            <h2 data-w-id="f1b498ae-d155-e4f6-a43f-c2cc236e6227" class="services-name">
                                                Product Design & UX/UI</h2>
                                        </div>
                                        <div data-w-id="f1b498ae-d155-e4f6-a43f-c2cc236e6228"
                                            class="services-arrow-icon-wrapper"><img
                                                src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/68a8c4dc0bf39abe4f4c253d_Services%20Arrow%20Icon.svg"
                                                loading="lazy" alt="Arrow" class="services-arrow-icon" /></div>
                                    </div>
                                    <div class="services-description-wrapper">
                                        <div data-w-id="f1b498ae-d155-e4f6-a43f-c2cc236e622b"
                                            class="services-description-single">
                                            <p class="services-description-text">rom concept to execution, we design
                                                digital products focused on user experience, usability, and performance to
                                                ensure adoption and long-term success.</p>
                                        </div>
                                    </div>
                                    <img src="{{ asset('images/service-4.jpg') }}" loading="lazy"
                                        data-w-id="f1b498ae-d155-e4f6-a43f-c2cc236e622d" alt="Service Image"
                                        class="services-image" />
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section portfolio">
        <div data-w-id="d81279eb-b65a-12ac-3c6b-923ba4aec547" class="portfolio-content-vh">
            <div class="portfolio-sticky">
                <div class="portfolio-top-content">
                    <div class="container">
                        <div class="section-title-wrapper">
                            <div class="section-subtitle-wrap">
                                <div class="section-subtitle-single"><img
                                        src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/687810aa5293f9e8c955c26a_Section%20Subtitle%20Icon.svg"
                                        loading="lazy" alt="Subtitle Icon" class="section-subtitle-icon" />
                                    <div class="section-subtitle">Portfolio</div>
                                </div>
                            </div>
                            <h2 class="section-title mb0">Explore Our Real Woks</h2>
                        </div>
                    </div>
                </div>
                <div class="portfolio-bottom-content">
                    <div class="portfolio-ticker-wrapper">
                        <div class="portfolio-ticker">
                            <div class="portfolio-ticker-flex">
                                <div class="portfolio-inner-ticker">
                                    <div class="portfolio-card">
                                        <div class="portfolio-collection-list-wrapper w-dyn-list">
                                            <div role="list" class="portfolio-collection-list w-dyn-items">
                                                <div role="listitem" class="portfolio-collection-item w-dyn-item">
                                                    <div class="portfolio-card-single"><a
                                                            href="/portfolio/smartcity-traffic-solution"
                                                            class="portfolio-thumbnail-wrapper w-inline-block"><img
                                                                src="https://cdn.prod.website-files.com/688a6c3373e0fdb14fbef689/68a8d02d50c1399d195e2285_Work%20Thumbnail4.jpg"
                                                                loading="lazy" alt="" sizes="100vw"
                                                                srcset="https://cdn.prod.website-files.com/688a6c3373e0fdb14fbef689/68a8d02d50c1399d195e2285_Work%20Thumbnail4-p-500.jpg 500w, https://cdn.prod.website-files.com/688a6c3373e0fdb14fbef689/68a8d02d50c1399d195e2285_Work%20Thumbnail4-p-800.jpg 800w, https://cdn.prod.website-files.com/688a6c3373e0fdb14fbef689/68a8d02d50c1399d195e2285_Work%20Thumbnail4.jpg 900w"
                                                                class="portfolio-thumbnail" />
                                                            <div class="portfolio-thumbnail-overlay"></div>
                                                            <div class="portfolio-view-button">
                                                                <div class="portfolio-view-button-text">View</div>
                                                            </div>
                                                            <div class="portfolio-category-date">
                                                                <div class="portfolio-category-date-text">Web Development
                                                                </div>
                                                                <div class="portfolio-category-date-circle"></div>
                                                                <div class="portfolio-category-date-text">August 23, 2025
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <div class="portfolio-typography"><a
                                                                href="/portfolio/smartcity-traffic-solution"
                                                                class="work-name">SmartCity Traffic Solution&quot;</a>
                                                            <div class="work-mini-description">AI-powered sensors reduced
                                                                downtown traffic congestion by 35% weekly.</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="portfolio-card">
                                        <div class="portfolio-collection-list-wrapper w-dyn-list">
                                            <div role="list" class="portfolio-collection-list w-dyn-items">
                                                <div role="listitem" class="portfolio-collection-item w-dyn-item">
                                                    <div class="portfolio-card-single"><a
                                                            href="/portfolio/shopeasy-e-commerce-platform"
                                                            class="portfolio-thumbnail-wrapper w-inline-block"><img
                                                                src="https://cdn.prod.website-files.com/688a6c3373e0fdb14fbef689/68b35ad3c1cd99f5b1a47999_Portfolios%20Image2.jpg"
                                                                loading="lazy" alt="" sizes="100vw"
                                                                srcset="https://cdn.prod.website-files.com/688a6c3373e0fdb14fbef689/68b35ad3c1cd99f5b1a47999_Portfolios%20Image2-p-500.jpg 500w, https://cdn.prod.website-files.com/688a6c3373e0fdb14fbef689/68b35ad3c1cd99f5b1a47999_Portfolios%20Image2-p-800.jpg 800w, https://cdn.prod.website-files.com/688a6c3373e0fdb14fbef689/68b35ad3c1cd99f5b1a47999_Portfolios%20Image2.jpg 900w"
                                                                class="portfolio-thumbnail" />
                                                            <div class="portfolio-thumbnail-overlay"></div>
                                                            <div class="portfolio-view-button">
                                                                <div class="portfolio-view-button-text">View</div>
                                                            </div>
                                                            <div class="portfolio-category-date">
                                                                <div class="portfolio-category-date-text">Web Development
                                                                </div>
                                                                <div class="portfolio-category-date-circle"></div>
                                                                <div class="portfolio-category-date-text">August 23, 2025
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <div class="portfolio-typography"><a
                                                                href="/portfolio/shopeasy-e-commerce-platform"
                                                                class="work-name">ShopEasy E-Commerce Platform</a>
                                                            <div class="work-mini-description">Boosted online sales 200%
                                                                with lightning-fast, mobile-friendly checkout flows.</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="portfolio-card">
                                        <div class="portfolio-collection-list-wrapper w-dyn-list">
                                            <div role="list" class="portfolio-collection-list w-dyn-items">
                                                <div role="listitem" class="portfolio-collection-item w-dyn-item">
                                                    <div class="portfolio-card-single"><a
                                                            href="/portfolio/medtrack-healthcare-app"
                                                            class="portfolio-thumbnail-wrapper w-inline-block"><img
                                                                src="https://cdn.prod.website-files.com/688a6c3373e0fdb14fbef689/68a8ce8b7d0302aff8503cf5_Work%20Thumbnail2.jpg"
                                                                loading="lazy" alt="" sizes="100vw"
                                                                srcset="https://cdn.prod.website-files.com/688a6c3373e0fdb14fbef689/68a8ce8b7d0302aff8503cf5_Work%20Thumbnail2-p-500.jpg 500w, https://cdn.prod.website-files.com/688a6c3373e0fdb14fbef689/68a8ce8b7d0302aff8503cf5_Work%20Thumbnail2-p-800.jpg 800w, https://cdn.prod.website-files.com/688a6c3373e0fdb14fbef689/68a8ce8b7d0302aff8503cf5_Work%20Thumbnail2.jpg 900w"
                                                                class="portfolio-thumbnail" />
                                                            <div class="portfolio-thumbnail-overlay"></div>
                                                            <div class="portfolio-view-button">
                                                                <div class="portfolio-view-button-text">View</div>
                                                            </div>
                                                            <div class="portfolio-category-date">
                                                                <div class="portfolio-category-date-text">Web Development
                                                                </div>
                                                                <div class="portfolio-category-date-circle"></div>
                                                                <div class="portfolio-category-date-text">August 23, 2025
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <div class="portfolio-typography"><a
                                                                href="/portfolio/medtrack-healthcare-app"
                                                                class="work-name">MedTrack Healthcare App</a>
                                                            <div class="work-mini-description">Doctor-patient communication
                                                                with secure messaging and appointment tracking.</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="portfolio-card">
                                        <div class="portfolio-collection-list-wrapper w-dyn-list">
                                            <div role="list" class="portfolio-collection-list w-dyn-items">
                                                <div role="listitem" class="portfolio-collection-item w-dyn-item">
                                                    <div class="portfolio-card-single"><a
                                                            href="/portfolio/eduplay-learning-portal"
                                                            class="portfolio-thumbnail-wrapper w-inline-block"><img
                                                                src="https://cdn.prod.website-files.com/688a6c3373e0fdb14fbef689/68a8ce127eb5a6e00915f3c7_Work%20Thumbnail1.jpg"
                                                                loading="lazy" alt="" sizes="100vw"
                                                                srcset="https://cdn.prod.website-files.com/688a6c3373e0fdb14fbef689/68a8ce127eb5a6e00915f3c7_Work%20Thumbnail1-p-500.jpg 500w, https://cdn.prod.website-files.com/688a6c3373e0fdb14fbef689/68a8ce127eb5a6e00915f3c7_Work%20Thumbnail1-p-800.jpg 800w, https://cdn.prod.website-files.com/688a6c3373e0fdb14fbef689/68a8ce127eb5a6e00915f3c7_Work%20Thumbnail1.jpg 900w"
                                                                class="portfolio-thumbnail" />
                                                            <div class="portfolio-thumbnail-overlay"></div>
                                                            <div class="portfolio-view-button">
                                                                <div class="portfolio-view-button-text">View</div>
                                                            </div>
                                                            <div class="portfolio-category-date">
                                                                <div class="portfolio-category-date-text">Web Development
                                                                </div>
                                                                <div class="portfolio-category-date-circle"></div>
                                                                <div class="portfolio-category-date-text">August 23, 2025
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <div class="portfolio-typography"><a
                                                                href="/portfolio/eduplay-learning-portal"
                                                                class="work-name">EduPlay Learning Portal</a>
                                                            <div class="work-mini-description">Interactive STEM games
                                                                increased student engagement by 4X in classrooms.</div>
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
            </div>
        </div>
    </section>
    <section class="section working-process" style="padding-inline: 1rem">
        <div class="container">
            <div class="working-process-content">
                <div class="working-process-typography">
                    <div class="section-subtitle-wrap left-alignment">
                        <div class="section-subtitle-single"><img
                                src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/687810aa5293f9e8c955c26a_Section%20Subtitle%20Icon.svg"
                                loading="lazy" alt="Subtitle Icon" class="section-subtitle-icon" />
                            <div class="section-subtitle">Working Process</div>
                        </div>
                    </div>
                    <div class="working-process-section-title">
                        <h2 class="section-title mb0">Explore Our 3 Step Working Process</h2>
                    </div>
                    <div class="working-process-button-wrapper"><a href="/template-pages/pricing"
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
                <div class="working-process-card-wrapper">
                    <div data-w-id="78b9db37-a5e5-f579-4212-1357e42aa47e" class="working-process-card-single">
                        <div class="working-process-card _01">
                            <div class="working-process-card-icon-number-wrapper">
                                <div class="working-process-card-icon-wrap"><img
                                        src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/68a8d986192c37ebe5b1f6e2_Working%20Process%20Card%20Icon1.svg"
                                        loading="lazy" alt="Process Icon" class="working-process-card-icon" /></div>
                                <div class="working-process-card-number-wrap">
                                    <div class="working-process-card-number">01</div>
                                </div>
                            </div>
                            <div class="working-process-card-title-description">
                                <h3 class="working-process-card-title">Discovery &amp; Strategy</h3>
                                <div class="working-process-card-description">We start by understanding your vision, goals,
                                </div>
                            </div>
                        </div>
                        <div class="working-process-card _02">
                            <div class="working-process-card-icon-number-wrapper">
                                <div class="working-process-card-icon-wrap"><img
                                        src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/68a8d93a82c71a2fa084211d_Working%20Process%20Card%20Icon2.svg"
                                        loading="lazy" alt="Process Icon" class="working-process-card-icon" /></div>
                                <div class="working-process-card-number-wrap">
                                    <div class="working-process-card-number">02</div>
                                </div>
                            </div>
                            <div class="working-process-card-title-description">
                                <h3 class="working-process-card-title">Design &amp; Development</h3>
                                <div class="working-process-card-description">We start by understanding your vision, goals,
                                </div>
                            </div>
                        </div>
                        <div class="working-process-card _03">
                            <div class="working-process-card-icon-number-wrapper">
                                <div class="working-process-card-icon-wrap"><img
                                        src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/68a8d93a17433548b70ef818_Working%20Process%20Card%20Icon3.svg"
                                        loading="lazy" alt="Process Icon" class="working-process-card-icon" /></div>
                                <div class="working-process-card-number-wrap">
                                    <div class="working-process-card-number">03</div>
                                </div>
                            </div>
                            <div class="working-process-card-title-description">
                                <h3 class="working-process-card-title">Discovery &amp; Strategy</h3>
                                <div class="working-process-card-description">We start by understanding your vision, goals,
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section services-tools">
        <div class="services-tools-ticker">
            <div class="ticker">
                <div class="services-tools-ticker-inner">
                    <div class="services-tools-single">
                        <div class="services-tools-name-wrap">
                            <div class="services-tools-name">Web Design</div>
                        </div>
                        <div class="services-tools-arrow"><img
                                src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/68b36484c2a79758ab02a59e_Services%20Tools%20Arrow%20Icon.svg"
                                loading="lazy" alt="Arrow" /></div>
                    </div><img
                        src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/68b364c6fca04397a2a005fb_Services%20Tools%20Element.svg"
                        loading="lazy" alt="Star" class="services-tools-element" />
                    <div class="services-tools-single">
                        <div class="services-tools-name-wrap">
                            <div class="services-tools-name">UI/UX Design</div>
                        </div>
                        <div class="services-tools-arrow"><img
                                src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/68b36484c2a79758ab02a59e_Services%20Tools%20Arrow%20Icon.svg"
                                loading="lazy" alt="Arrow" /></div>
                    </div><img
                        src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/68b364c6fca04397a2a005fb_Services%20Tools%20Element.svg"
                        loading="lazy" alt="Star" class="services-tools-element" />
                    <div class="services-tools-single">
                        <div class="services-tools-name-wrap">
                            <div class="services-tools-name">Product Design</div>
                        </div>
                        <div class="services-tools-arrow"><img
                                src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/68b36484c2a79758ab02a59e_Services%20Tools%20Arrow%20Icon.svg"
                                loading="lazy" alt="Arrow" /></div>
                    </div><img
                        src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/68b364c6fca04397a2a005fb_Services%20Tools%20Element.svg"
                        loading="lazy" alt="Star" class="services-tools-element" />
                    <div class="services-tools-single">
                        <div class="services-tools-name-wrap">
                            <div class="services-tools-name">Digital Marketing</div>
                        </div>
                        <div class="services-tools-arrow"><img
                                src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/68b36484c2a79758ab02a59e_Services%20Tools%20Arrow%20Icon.svg"
                                loading="lazy" alt="Arrow" /></div>
                    </div><img
                        src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/68b364c6fca04397a2a005fb_Services%20Tools%20Element.svg"
                        loading="lazy" alt="Star" class="services-tools-element last" />
                </div>
                <div class="services-tools-ticker-inner">
                    <div class="services-tools-single">
                        <div class="services-tools-name-wrap">
                            <div class="services-tools-name">Web Design</div>
                        </div>
                        <div class="services-tools-arrow"><img
                                src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/68b36484c2a79758ab02a59e_Services%20Tools%20Arrow%20Icon.svg"
                                loading="lazy" alt="Arrow" /></div>
                    </div><img
                        src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/68b364c6fca04397a2a005fb_Services%20Tools%20Element.svg"
                        loading="lazy" alt="Star" class="services-tools-element" />
                    <div class="services-tools-single">
                        <div class="services-tools-name-wrap">
                            <div class="services-tools-name">UI/UX Design</div>
                        </div>
                        <div class="services-tools-arrow"><img
                                src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/68b36484c2a79758ab02a59e_Services%20Tools%20Arrow%20Icon.svg"
                                loading="lazy" alt="Arrow" /></div>
                    </div><img
                        src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/68b364c6fca04397a2a005fb_Services%20Tools%20Element.svg"
                        loading="lazy" alt="Star" class="services-tools-element" />
                    <div class="services-tools-single">
                        <div class="services-tools-name-wrap">
                            <div class="services-tools-name">Product Design</div>
                        </div>
                        <div class="services-tools-arrow"><img
                                src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/68b36484c2a79758ab02a59e_Services%20Tools%20Arrow%20Icon.svg"
                                loading="lazy" alt="Arrow" /></div>
                    </div><img
                        src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/68b364c6fca04397a2a005fb_Services%20Tools%20Element.svg"
                        loading="lazy" alt="Star" class="services-tools-element" />
                    <div class="services-tools-single">
                        <div class="services-tools-name-wrap">
                            <div class="services-tools-name">Digital Marketing</div>
                        </div>
                        <div class="services-tools-arrow"><img
                                src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/68b36484c2a79758ab02a59e_Services%20Tools%20Arrow%20Icon.svg"
                                loading="lazy" alt="Arrow" /></div>
                    </div><img
                        src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/68b364c6fca04397a2a005fb_Services%20Tools%20Element.svg"
                        loading="lazy" alt="Star" class="services-tools-element last" />
                </div>
                <div class="services-tools-ticker-inner">
                    <div class="services-tools-single">
                        <div class="services-tools-name-wrap">
                            <div class="services-tools-name">Web Design</div>
                        </div>
                        <div class="services-tools-arrow"><img
                                src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/68b36484c2a79758ab02a59e_Services%20Tools%20Arrow%20Icon.svg"
                                loading="lazy" alt="Arrow" /></div>
                    </div><img
                        src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/68b364c6fca04397a2a005fb_Services%20Tools%20Element.svg"
                        loading="lazy" alt="Star" class="services-tools-element" />
                    <div class="services-tools-single">
                        <div class="services-tools-name-wrap">
                            <div class="services-tools-name">UI/UX Design</div>
                        </div>
                        <div class="services-tools-arrow"><img
                                src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/68b36484c2a79758ab02a59e_Services%20Tools%20Arrow%20Icon.svg"
                                loading="lazy" alt="Arrow" /></div>
                    </div><img
                        src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/68b364c6fca04397a2a005fb_Services%20Tools%20Element.svg"
                        loading="lazy" alt="Star" class="services-tools-element" />
                    <div class="services-tools-single">
                        <div class="services-tools-name-wrap">
                            <div class="services-tools-name">Product Design</div>
                        </div>
                        <div class="services-tools-arrow"><img
                                src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/68b36484c2a79758ab02a59e_Services%20Tools%20Arrow%20Icon.svg"
                                loading="lazy" alt="Arrow" /></div>
                    </div><img
                        src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/68b364c6fca04397a2a005fb_Services%20Tools%20Element.svg"
                        loading="lazy" alt="Star" class="services-tools-element" />
                    <div class="services-tools-single">
                        <div class="services-tools-name-wrap">
                            <div class="services-tools-name">Digital Marketing</div>
                        </div>
                        <div class="services-tools-arrow"><img
                                src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/68b36484c2a79758ab02a59e_Services%20Tools%20Arrow%20Icon.svg"
                                loading="lazy" alt="Arrow" /></div>
                    </div><img
                        src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/68b364c6fca04397a2a005fb_Services%20Tools%20Element.svg"
                        loading="lazy" alt="Star" class="services-tools-element last" />
                </div>
            </div>
        </div>
    </section>
    <section class="section testimonial">
        <div data-w-id="9f907c42-0e3c-ca5a-06af-69ec27d598e2" class="testimonial-top-content">
            <div class="container">
                <div class="section-title-wrapper">
                    <div class="section-subtitle-wrap">
                        <div class="section-subtitle-single"><img
                                src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/687810aa5293f9e8c955c26a_Section%20Subtitle%20Icon.svg"
                                loading="lazy" alt="Subtitle Icon" class="section-subtitle-icon" />
                            <div class="section-subtitle">Testimonial</div>
                        </div>
                    </div>
                    <h2 class="section-title">What Our Clients are Saying</h2>
                    <p class="section-description about-us">Hear directly from our clients about their experiences and the
                        results we&#x27;ve delivered. Explore Client Feedback</p>
                </div>
            </div>
        </div>
        <div data-w-id="9f907c42-0e3c-ca5a-06af-69ec27d598ee" class="testimonial-bottom-content">
            <div class="testimonial-ticker">
                <div class="ticker-testimonial">
                    <div class="testimonial-inner-ticker-wrapper">
                        <div class="testimonial-card">
                            <div class="testimonial-card-review-wrapper"><img
                                    src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/68a7706fdbe1cb1c58f4bc43_Testimonial%20Card%20Review%20Icon1.svg"
                                    loading="lazy" alt="" class="testimonial-card-review-icon" /><img
                                    src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/68a7706fdbe1cb1c58f4bc43_Testimonial%20Card%20Review%20Icon1.svg"
                                    loading="lazy" alt="" class="testimonial-card-review-icon" /><img
                                    src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/68a7706fdbe1cb1c58f4bc43_Testimonial%20Card%20Review%20Icon1.svg"
                                    loading="lazy" alt="" class="testimonial-card-review-icon" /><img
                                    src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/68a7706fdbe1cb1c58f4bc43_Testimonial%20Card%20Review%20Icon1.svg"
                                    loading="lazy" alt="" class="testimonial-card-review-icon" /><img
                                    src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/68a7706fe4ffef9b43f72c36_Testimonial%20Card%20Review%20Icon2.svg"
                                    loading="lazy" alt="" class="testimonial-card-review-icon" /></div>
                            <div class="testimonial-card-description-wrapper">
                                <p class="testimonial-card-description-text">Was initially hesitant about the project, but
                                    the team quickly put my mind at ease. Their expertise and creative solutions were
                                    impressive. The final product exceeded my expectations,</p>
                            </div>
                            <div class="testimonial-card-author-wrapper">
                                <div class="testimonial-card-author-image-wrapper"><img
                                        src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/68a8b2ce85663a578d1bef2a_Testimonial%20Card%20Author%20Image1.png"
                                        loading="lazy" alt="" class="testimonial-card-author-image" /></div>
                                <div class="testimonial-card-author-name-bio-wrapper">
                                    <h6 class="testimonial-card-author-name">Jakob Alison</h6>
                                    <div class="testimonial-card-author-bio">Project Manager at triko</div>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-card">
                            <div class="testimonial-card-review-wrapper"><img
                                    src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/68a7706fdbe1cb1c58f4bc43_Testimonial%20Card%20Review%20Icon1.svg"
                                    loading="lazy" alt="" class="testimonial-card-review-icon" /><img
                                    src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/68a7706fdbe1cb1c58f4bc43_Testimonial%20Card%20Review%20Icon1.svg"
                                    loading="lazy" alt="" class="testimonial-card-review-icon" /><img
                                    src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/68a7706fdbe1cb1c58f4bc43_Testimonial%20Card%20Review%20Icon1.svg"
                                    loading="lazy" alt="" class="testimonial-card-review-icon" /><img
                                    src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/68a7706fdbe1cb1c58f4bc43_Testimonial%20Card%20Review%20Icon1.svg"
                                    loading="lazy" alt="" class="testimonial-card-review-icon" /><img
                                    src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/68a7706fdbe1cb1c58f4bc43_Testimonial%20Card%20Review%20Icon1.svg"
                                    loading="lazy" alt="" class="testimonial-card-review-icon" /></div>
                            <div class="testimonial-card-description-wrapper">
                                <p class="testimonial-card-description-text">I came to them with a vague idea, and they
                                    helped me refine it into a concrete plan. Throughout the process, they kept me informed
                                    and involved, ensuring I was happy with the direction.</p>
                            </div>
                            <div class="testimonial-card-author-wrapper">
                                <div class="testimonial-card-author-image-wrapper"><img
                                        src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/68a8b2ce08dcf75e3ac0a337_Testimonial%20Card%20Author%20Image2.png"
                                        loading="lazy" alt="" class="testimonial-card-author-image" /></div>
                                <div class="testimonial-card-author-name-bio-wrapper">
                                    <h6 class="testimonial-card-author-name">Alisa Olivia</h6>
                                    <div class="testimonial-card-author-bio">CTO at Ritovex</div>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-card">
                            <div class="testimonial-card-review-wrapper"><img
                                    src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/68a7706fdbe1cb1c58f4bc43_Testimonial%20Card%20Review%20Icon1.svg"
                                    loading="lazy" alt="" class="testimonial-card-review-icon" /><img
                                    src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/68a7706fdbe1cb1c58f4bc43_Testimonial%20Card%20Review%20Icon1.svg"
                                    loading="lazy" alt="" class="testimonial-card-review-icon" /><img
                                    src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/68a7706fdbe1cb1c58f4bc43_Testimonial%20Card%20Review%20Icon1.svg"
                                    loading="lazy" alt="" class="testimonial-card-review-icon" /><img
                                    src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/68a7706fdbe1cb1c58f4bc43_Testimonial%20Card%20Review%20Icon1.svg"
                                    loading="lazy" alt="" class="testimonial-card-review-icon" /><img
                                    src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/68a7706fdbe1cb1c58f4bc43_Testimonial%20Card%20Review%20Icon1.svg"
                                    loading="lazy" alt="" class="testimonial-card-review-icon" /></div>
                            <div class="testimonial-card-description-wrapper">
                                <p class="testimonial-card-description-text">Working with them was a true pleasure. They
                                    were responsive, communicative, and always willing to go the extra mile. I especially
                                    appreciated their attention to detail</p>
                            </div>
                            <div class="testimonial-card-author-wrapper">
                                <div class="testimonial-card-author-image-wrapper"><img
                                        src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/68a8b2ced4b407065ff16588_Testimonial%20Card%20Author%20Image3.png"
                                        loading="lazy" alt="" class="testimonial-card-author-image" /></div>
                                <div class="testimonial-card-author-name-bio-wrapper">
                                    <h6 class="testimonial-card-author-name">Jordan Walk</h6>
                                    <div class="testimonial-card-author-bio">Software Engineer at Briks</div>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-card">
                            <div class="testimonial-card-review-wrapper"><img
                                    src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/68a7706fdbe1cb1c58f4bc43_Testimonial%20Card%20Review%20Icon1.svg"
                                    loading="lazy" alt="" class="testimonial-card-review-icon" /><img
                                    src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/68a7706fdbe1cb1c58f4bc43_Testimonial%20Card%20Review%20Icon1.svg"
                                    loading="lazy" alt="" class="testimonial-card-review-icon" /><img
                                    src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/68a7706fdbe1cb1c58f4bc43_Testimonial%20Card%20Review%20Icon1.svg"
                                    loading="lazy" alt="" class="testimonial-card-review-icon" /><img
                                    src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/68a7706fdbe1cb1c58f4bc43_Testimonial%20Card%20Review%20Icon1.svg"
                                    loading="lazy" alt="" class="testimonial-card-review-icon" /><img
                                    src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/68a7706fe4ffef9b43f72c36_Testimonial%20Card%20Review%20Icon2.svg"
                                    loading="lazy" alt="" class="testimonial-card-review-icon" /></div>
                            <div class="testimonial-card-description-wrapper">
                                <p class="testimonial-card-description-text">Throughout the process, they kept me informed
                                    and involved, ensuring I was happy with the direction. I came to them with a vague idea,
                                    and they helped me refine it into a concrete plan.</p>
                            </div>
                            <div class="testimonial-card-author-wrapper">
                                <div class="testimonial-card-author-image-wrapper"><img
                                        src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/68a8b2cea461dc549f0c811d_Testimonial%20Card%20Author%20Image4.png"
                                        loading="lazy" alt="" class="testimonial-card-author-image" /></div>
                                <div class="testimonial-card-author-name-bio-wrapper">
                                    <h6 class="testimonial-card-author-name">Ema Watson</h6>
                                    <div class="testimonial-card-author-bio">Founder at Ritof</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-inner-ticker-wrapper">
                        <div class="testimonial-card">
                            <div class="testimonial-card-review-wrapper"><img
                                    src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/68a7706fdbe1cb1c58f4bc43_Testimonial%20Card%20Review%20Icon1.svg"
                                    loading="lazy" alt="" class="testimonial-card-review-icon" /><img
                                    src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/68a7706fdbe1cb1c58f4bc43_Testimonial%20Card%20Review%20Icon1.svg"
                                    loading="lazy" alt="" class="testimonial-card-review-icon" /><img
                                    src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/68a7706fdbe1cb1c58f4bc43_Testimonial%20Card%20Review%20Icon1.svg"
                                    loading="lazy" alt="" class="testimonial-card-review-icon" /><img
                                    src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/68a7706fdbe1cb1c58f4bc43_Testimonial%20Card%20Review%20Icon1.svg"
                                    loading="lazy" alt="" class="testimonial-card-review-icon" /><img
                                    src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/68a7706fe4ffef9b43f72c36_Testimonial%20Card%20Review%20Icon2.svg"
                                    loading="lazy" alt="" class="testimonial-card-review-icon" /></div>
                            <div class="testimonial-card-description-wrapper">
                                <p class="testimonial-card-description-text">Was initially hesitant about the project, but
                                    the team quickly put my mind at ease. Their expertise and creative solutions were
                                    impressive. The final product exceeded my expectations,</p>
                            </div>
                            <div class="testimonial-card-author-wrapper">
                                <div class="testimonial-card-author-image-wrapper"><img
                                        src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/68a8b2ce85663a578d1bef2a_Testimonial%20Card%20Author%20Image1.png"
                                        loading="lazy" alt="" class="testimonial-card-author-image" /></div>
                                <div class="testimonial-card-author-name-bio-wrapper">
                                    <h6 class="testimonial-card-author-name">Jakob Alison</h6>
                                    <div class="testimonial-card-author-bio">Project Manager at triko</div>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-card">
                            <div class="testimonial-card-review-wrapper"><img
                                    src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/68a7706fdbe1cb1c58f4bc43_Testimonial%20Card%20Review%20Icon1.svg"
                                    loading="lazy" alt="" class="testimonial-card-review-icon" /><img
                                    src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/68a7706fdbe1cb1c58f4bc43_Testimonial%20Card%20Review%20Icon1.svg"
                                    loading="lazy" alt="" class="testimonial-card-review-icon" /><img
                                    src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/68a7706fdbe1cb1c58f4bc43_Testimonial%20Card%20Review%20Icon1.svg"
                                    loading="lazy" alt="" class="testimonial-card-review-icon" /><img
                                    src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/68a7706fdbe1cb1c58f4bc43_Testimonial%20Card%20Review%20Icon1.svg"
                                    loading="lazy" alt="" class="testimonial-card-review-icon" /><img
                                    src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/68a7706fdbe1cb1c58f4bc43_Testimonial%20Card%20Review%20Icon1.svg"
                                    loading="lazy" alt="" class="testimonial-card-review-icon" /></div>
                            <div class="testimonial-card-description-wrapper">
                                <p class="testimonial-card-description-text">I came to them with a vague idea, and they
                                    helped me refine it into a concrete plan. Throughout the process, they kept me informed
                                    and involved, ensuring I was happy with the direction.</p>
                            </div>
                            <div class="testimonial-card-author-wrapper">
                                <div class="testimonial-card-author-image-wrapper"><img
                                        src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/68a8b2ce08dcf75e3ac0a337_Testimonial%20Card%20Author%20Image2.png"
                                        loading="lazy" alt="" class="testimonial-card-author-image" /></div>
                                <div class="testimonial-card-author-name-bio-wrapper">
                                    <h6 class="testimonial-card-author-name">Alisa Olivia</h6>
                                    <div class="testimonial-card-author-bio">CTO at Ritovex</div>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-card">
                            <div class="testimonial-card-review-wrapper"><img
                                    src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/68a7706fdbe1cb1c58f4bc43_Testimonial%20Card%20Review%20Icon1.svg"
                                    loading="lazy" alt="" class="testimonial-card-review-icon" /><img
                                    src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/68a7706fdbe1cb1c58f4bc43_Testimonial%20Card%20Review%20Icon1.svg"
                                    loading="lazy" alt="" class="testimonial-card-review-icon" /><img
                                    src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/68a7706fdbe1cb1c58f4bc43_Testimonial%20Card%20Review%20Icon1.svg"
                                    loading="lazy" alt="" class="testimonial-card-review-icon" /><img
                                    src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/68a7706fdbe1cb1c58f4bc43_Testimonial%20Card%20Review%20Icon1.svg"
                                    loading="lazy" alt="" class="testimonial-card-review-icon" /><img
                                    src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/68a7706fdbe1cb1c58f4bc43_Testimonial%20Card%20Review%20Icon1.svg"
                                    loading="lazy" alt="" class="testimonial-card-review-icon" /></div>
                            <div class="testimonial-card-description-wrapper">
                                <p class="testimonial-card-description-text">Working with them was a true pleasure. They
                                    were responsive, communicative, and always willing to go the extra mile. I especially
                                    appreciated their attention to detail</p>
                            </div>
                            <div class="testimonial-card-author-wrapper">
                                <div class="testimonial-card-author-image-wrapper"><img
                                        src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/68a8b2ced4b407065ff16588_Testimonial%20Card%20Author%20Image3.png"
                                        loading="lazy" alt="" class="testimonial-card-author-image" /></div>
                                <div class="testimonial-card-author-name-bio-wrapper">
                                    <h6 class="testimonial-card-author-name">Jordan Walk</h6>
                                    <div class="testimonial-card-author-bio">Software Engineer at Briks</div>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-card">
                            <div class="testimonial-card-review-wrapper"><img
                                    src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/68a7706fdbe1cb1c58f4bc43_Testimonial%20Card%20Review%20Icon1.svg"
                                    loading="lazy" alt="" class="testimonial-card-review-icon" /><img
                                    src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/68a7706fdbe1cb1c58f4bc43_Testimonial%20Card%20Review%20Icon1.svg"
                                    loading="lazy" alt="" class="testimonial-card-review-icon" /><img
                                    src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/68a7706fdbe1cb1c58f4bc43_Testimonial%20Card%20Review%20Icon1.svg"
                                    loading="lazy" alt="" class="testimonial-card-review-icon" /><img
                                    src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/68a7706fdbe1cb1c58f4bc43_Testimonial%20Card%20Review%20Icon1.svg"
                                    loading="lazy" alt="" class="testimonial-card-review-icon" /><img
                                    src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/68a7706fe4ffef9b43f72c36_Testimonial%20Card%20Review%20Icon2.svg"
                                    loading="lazy" alt="" class="testimonial-card-review-icon" /></div>
                            <div class="testimonial-card-description-wrapper">
                                <p class="testimonial-card-description-text">Throughout the process, they kept me informed
                                    and involved, ensuring I was happy with the direction. I came to them with a vague idea,
                                    and they helped me refine it into a concrete plan.</p>
                            </div>
                            <div class="testimonial-card-author-wrapper">
                                <div class="testimonial-card-author-image-wrapper"><img
                                        src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/68a8b2cea461dc549f0c811d_Testimonial%20Card%20Author%20Image4.png"
                                        loading="lazy" alt="" class="testimonial-card-author-image" /></div>
                                <div class="testimonial-card-author-name-bio-wrapper">
                                    <h6 class="testimonial-card-author-name">Ema Watson</h6>
                                    <div class="testimonial-card-author-bio">Founder at Ritof</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-inner-ticker-wrapper">
                        <div class="testimonial-card">
                            <div class="testimonial-card-review-wrapper"><img
                                    src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/68a7706fdbe1cb1c58f4bc43_Testimonial%20Card%20Review%20Icon1.svg"
                                    loading="lazy" alt="" class="testimonial-card-review-icon" /><img
                                    src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/68a7706fdbe1cb1c58f4bc43_Testimonial%20Card%20Review%20Icon1.svg"
                                    loading="lazy" alt="" class="testimonial-card-review-icon" /><img
                                    src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/68a7706fdbe1cb1c58f4bc43_Testimonial%20Card%20Review%20Icon1.svg"
                                    loading="lazy" alt="" class="testimonial-card-review-icon" /><img
                                    src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/68a7706fdbe1cb1c58f4bc43_Testimonial%20Card%20Review%20Icon1.svg"
                                    loading="lazy" alt="" class="testimonial-card-review-icon" /><img
                                    src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/68a7706fe4ffef9b43f72c36_Testimonial%20Card%20Review%20Icon2.svg"
                                    loading="lazy" alt="" class="testimonial-card-review-icon" /></div>
                            <div class="testimonial-card-description-wrapper">
                                <p class="testimonial-card-description-text">Was initially hesitant about the project, but
                                    the team quickly put my mind at ease. Their expertise and creative solutions were
                                    impressive. The final product exceeded my expectations,</p>
                            </div>
                            <div class="testimonial-card-author-wrapper">
                                <div class="testimonial-card-author-image-wrapper"><img
                                        src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/68a8b2ce85663a578d1bef2a_Testimonial%20Card%20Author%20Image1.png"
                                        loading="lazy" alt="" class="testimonial-card-author-image" /></div>
                                <div class="testimonial-card-author-name-bio-wrapper">
                                    <h6 class="testimonial-card-author-name">Jakob Alison</h6>
                                    <div class="testimonial-card-author-bio">Project Manager at triko</div>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-card">
                            <div class="testimonial-card-review-wrapper"><img
                                    src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/68a7706fdbe1cb1c58f4bc43_Testimonial%20Card%20Review%20Icon1.svg"
                                    loading="lazy" alt="" class="testimonial-card-review-icon" /><img
                                    src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/68a7706fdbe1cb1c58f4bc43_Testimonial%20Card%20Review%20Icon1.svg"
                                    loading="lazy" alt="" class="testimonial-card-review-icon" /><img
                                    src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/68a7706fdbe1cb1c58f4bc43_Testimonial%20Card%20Review%20Icon1.svg"
                                    loading="lazy" alt="" class="testimonial-card-review-icon" /><img
                                    src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/68a7706fdbe1cb1c58f4bc43_Testimonial%20Card%20Review%20Icon1.svg"
                                    loading="lazy" alt="" class="testimonial-card-review-icon" /><img
                                    src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/68a7706fdbe1cb1c58f4bc43_Testimonial%20Card%20Review%20Icon1.svg"
                                    loading="lazy" alt="" class="testimonial-card-review-icon" /></div>
                            <div class="testimonial-card-description-wrapper">
                                <p class="testimonial-card-description-text">I came to them with a vague idea, and they
                                    helped me refine it into a concrete plan. Throughout the process, they kept me informed
                                    and involved, ensuring I was happy with the direction.</p>
                            </div>
                            <div class="testimonial-card-author-wrapper">
                                <div class="testimonial-card-author-image-wrapper"><img
                                        src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/68a8b2ce08dcf75e3ac0a337_Testimonial%20Card%20Author%20Image2.png"
                                        loading="lazy" alt="" class="testimonial-card-author-image" /></div>
                                <div class="testimonial-card-author-name-bio-wrapper">
                                    <h6 class="testimonial-card-author-name">Alisa Olivia</h6>
                                    <div class="testimonial-card-author-bio">CTO at Ritovex</div>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-card">
                            <div class="testimonial-card-review-wrapper"><img
                                    src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/68a7706fdbe1cb1c58f4bc43_Testimonial%20Card%20Review%20Icon1.svg"
                                    loading="lazy" alt="" class="testimonial-card-review-icon" /><img
                                    src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/68a7706fdbe1cb1c58f4bc43_Testimonial%20Card%20Review%20Icon1.svg"
                                    loading="lazy" alt="" class="testimonial-card-review-icon" /><img
                                    src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/68a7706fdbe1cb1c58f4bc43_Testimonial%20Card%20Review%20Icon1.svg"
                                    loading="lazy" alt="" class="testimonial-card-review-icon" /><img
                                    src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/68a7706fdbe1cb1c58f4bc43_Testimonial%20Card%20Review%20Icon1.svg"
                                    loading="lazy" alt="" class="testimonial-card-review-icon" /><img
                                    src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/68a7706fdbe1cb1c58f4bc43_Testimonial%20Card%20Review%20Icon1.svg"
                                    loading="lazy" alt="" class="testimonial-card-review-icon" /></div>
                            <div class="testimonial-card-description-wrapper">
                                <p class="testimonial-card-description-text">Working with them was a true pleasure. They
                                    were responsive, communicative, and always willing to go the extra mile. I especially
                                    appreciated their attention to detail</p>
                            </div>
                            <div class="testimonial-card-author-wrapper">
                                <div class="testimonial-card-author-image-wrapper"><img
                                        src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/68a8b2ced4b407065ff16588_Testimonial%20Card%20Author%20Image3.png"
                                        loading="lazy" alt="" class="testimonial-card-author-image" /></div>
                                <div class="testimonial-card-author-name-bio-wrapper">
                                    <h6 class="testimonial-card-author-name">Jordan Walk</h6>
                                    <div class="testimonial-card-author-bio">Software Engineer at Briks</div>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-card">
                            <div class="testimonial-card-review-wrapper"><img
                                    src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/68a7706fdbe1cb1c58f4bc43_Testimonial%20Card%20Review%20Icon1.svg"
                                    loading="lazy" alt="" class="testimonial-card-review-icon" /><img
                                    src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/68a7706fdbe1cb1c58f4bc43_Testimonial%20Card%20Review%20Icon1.svg"
                                    loading="lazy" alt="" class="testimonial-card-review-icon" /><img
                                    src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/68a7706fdbe1cb1c58f4bc43_Testimonial%20Card%20Review%20Icon1.svg"
                                    loading="lazy" alt="" class="testimonial-card-review-icon" /><img
                                    src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/68a7706fdbe1cb1c58f4bc43_Testimonial%20Card%20Review%20Icon1.svg"
                                    loading="lazy" alt="" class="testimonial-card-review-icon" /><img
                                    src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/68a7706fe4ffef9b43f72c36_Testimonial%20Card%20Review%20Icon2.svg"
                                    loading="lazy" alt="" class="testimonial-card-review-icon" /></div>
                            <div class="testimonial-card-description-wrapper">
                                <p class="testimonial-card-description-text">Throughout the process, they kept me informed
                                    and involved, ensuring I was happy with the direction. I came to them with a vague idea,
                                    and they helped me refine it into a concrete plan.</p>
                            </div>
                            <div class="testimonial-card-author-wrapper">
                                <div class="testimonial-card-author-image-wrapper"><img
                                        src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/68a8b2cea461dc549f0c811d_Testimonial%20Card%20Author%20Image4.png"
                                        loading="lazy" alt="" class="testimonial-card-author-image" /></div>
                                <div class="testimonial-card-author-name-bio-wrapper">
                                    <h6 class="testimonial-card-author-name">Ema Watson</h6>
                                    <div class="testimonial-card-author-bio">Founder at Ritof</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section blog" style="padding-block: 10rem; padding-inline: 1rem">
        <div class="container">
            <div class="blog-section-title-wrapper">
                <div class="blog-section-title-single-wrapper">
                    <div class="section-subtitle-wrap left-alignment">
                        <div class="section-subtitle-single"><img
                                src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/687810aa5293f9e8c955c26a_Section%20Subtitle%20Icon.svg"
                                loading="lazy" alt="Subtitle Icon" class="section-subtitle-icon" />
                            <div class="section-subtitle">Our Blogs</div>
                        </div>
                    </div>
                    <h2 class="section-title mb0">Read Our Recants Article</h2>
                </div>
                <div class="blog-section-button-wrapper"><a href="/template-pages/blog"
                        data-wf--primary-button--variant="base" data-w-id="3d8db9dc-5eed-be45-f768-868f0c7978a9"
                        class="primary-button w-inline-block">
                        <div class="primary-button-inner">
                            <div class="primary-button-text-wrap">
                                <div class="primary-button-text-block">Browse All Article</div>
                                <div class="primary-button-text-block is-text-absolute">Browse All Article</div>
                            </div>
                        </div>
                    </a></div>
            </div>
            <div class="blog-content">
                <div class="blog-collection-list-wrapper w-dyn-list">
                    <div role="list" class="blog-collection-list w-dyn-items">
                        <div role="listitem" class="blog-collection-list-item w-dyn-item">
                            <div class="blog-single"><a data-w-id="2796ff38-93ca-bf85-ceea-af243fa95b8c"
                                    href="/blog/simple-tips-for-better-website-design"
                                    class="blog-image-wrapper w-inline-block"><img
                                        src="https://cdn.prod.website-files.com/688a6c3373e0fdb14fbef689/688a6f38c2a413d69c4b61b0_Blog%20Image9.jpg"
                                        loading="lazy"
                                        style="-webkit-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)"
                                        alt="Blog Image" class="blog-image" /></a>
                                <div class="blog-typography">
                                    <div class="blog-category-tag-date-wrapper">
                                        <div class="blog-category">Design</div>
                                        <div class="blog-date-wrapper"><img
                                                src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/688ebdbfcf1bd5a5f84021f3_Blog%20Date%20Icon.svg"
                                                loading="lazy" alt="Date" />
                                            <div class="blog-date">July 31, 2025</div>
                                        </div>
                                    </div>
                                    <div class="blog-title-description"><a
                                            href="/blog/simple-tips-for-better-website-design" class="blog-title">Simple
                                            Tips for Better Website Design</a>
                                        <p class="blog-description-text">Learn easy ways to improve your website’s look
                                            and feel. easy step for you</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="listitem" class="blog-collection-list-item w-dyn-item">
                            <div class="blog-single"><a data-w-id="2796ff38-93ca-bf85-ceea-af243fa95b8c"
                                    href="/blog/how-to-speed-up-your-website-fast-loading"
                                    class="blog-image-wrapper w-inline-block"><img
                                        src="https://cdn.prod.website-files.com/688a6c3373e0fdb14fbef689/688a6f14fce3da4b055bd44a_Blog%20Image8.jpg"
                                        loading="lazy"
                                        style="-webkit-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)"
                                        alt="Blog Image" class="blog-image" /></a>
                                <div class="blog-typography">
                                    <div class="blog-category-tag-date-wrapper">
                                        <div class="blog-category">Design</div>
                                        <div class="blog-date-wrapper"><img
                                                src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/688ebdbfcf1bd5a5f84021f3_Blog%20Date%20Icon.svg"
                                                loading="lazy" alt="Date" />
                                            <div class="blog-date">July 31, 2025</div>
                                        </div>
                                    </div>
                                    <div class="blog-title-description"><a
                                            href="/blog/how-to-speed-up-your-website-fast-loading"
                                            class="blog-title">How to Speed Up Your Website Fast loading</a>
                                        <p class="blog-description-text">Quick fixes to make your site load faster. How
                                            great user experience boosts your business</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="listitem" class="blog-collection-list-item w-dyn-item">
                            <div class="blog-single"><a data-w-id="2796ff38-93ca-bf85-ceea-af243fa95b8c"
                                    href="/blog/best-tools-for-app-development-today-world-vqrqo"
                                    class="blog-image-wrapper w-inline-block"><img
                                        src="https://cdn.prod.website-files.com/688a6c3373e0fdb14fbef689/688a6eec142bdf303761443b_Blog%20Image7.jpg"
                                        loading="lazy"
                                        style="-webkit-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)"
                                        alt="Blog Image" class="blog-image" /></a>
                                <div class="blog-typography">
                                    <div class="blog-category-tag-date-wrapper">
                                        <div class="blog-category">Design</div>
                                        <div class="blog-date-wrapper"><img
                                                src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/688ebdbfcf1bd5a5f84021f3_Blog%20Date%20Icon.svg"
                                                loading="lazy" alt="Date" />
                                            <div class="blog-date">July 31, 2025</div>
                                        </div>
                                    </div>
                                    <div class="blog-title-description"><a
                                            href="/blog/best-tools-for-app-development-today-world-vqrqo"
                                            class="blog-title">Best Tools for App Development Today world</a>
                                        <p class="blog-description-text">Keep your site safe with simple security tips
                                            best tools to build apps easily and quickly</p>
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
