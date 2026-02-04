@extends('index')

@section('contain')
    <section class="section inner-banner" style="padding-inline: 1rem">
        <div class="container">
            <div class="inner-banner-content">
                <div class="inner-banner-text-wrapper">
                    <div class="inner-banner-typography">
                        <h1 class="inner-banner-title">Creative Solutions</h1>
                        <p class="inner-banner-description">We deliver innovative, tailor-made strategies that solve
                            problems,
                            spark ideas, and bring your vision to life—efficiently and effectively.</p>
                    </div>
                    <div class="services-button-wrapper"><a href="/template-pages/pricing"
                            data-wf--primary-button--variant="base" data-w-id="3d8db9dc-5eed-be45-f768-868f0c7978a9"
                            class="primary-button w-inline-block">
                            <div class="primary-button-inner">
                                <div class="primary-button-text-wrap">
                                    <div class="primary-button-text-block">Start Projects</div>
                                </div>
                            </div>
                        </a><a href="/template-pages/contact-us" data-wf--primary-button--variant="secondary"
                            data-w-id="3d8db9dc-5eed-be45-f768-868f0c7978a9" class="primary-button w-inline-block">
                            <div class="primary-button-inner w-variant-e542b707-47be-8374-03f0-de6722c5f865">
                                <div class="primary-button-text-wrap">
                                    <div class="primary-button-text-block w-variant-e542b707-47be-8374-03f0-de6722c5f865">
                                        Get a
                                        Free Consultation</div>
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
                <h2 class="section-title white">Your Needs, Our Expertise</h2>
                <p class="section-description white-color services">Your Vision, Our Expertise – Together, we bring ideas
                    to life with tailored solutions that deliver real results. Let’s build something amazing.</p>
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
                                                Design</h2>
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
                                            <p class="services-description-text">Focuses on the aesthetic and user
                                                experience of a website, creating visually appealing and intuitive layouts.
                                                It involves aspects like graphic design, typography, and color schemes to
                                                enhance user engagement.</p>
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
                                                Development</h2>
                                        </div>
                                        <div data-w-id="ab38aa81-ed75-752f-1365-2f2e8f53fae5"
                                            class="services-arrow-icon-wrapper"><img
                                                src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/68a8c4dc0bf39abe4f4c253d_Services%20Arrow%20Icon.svg"
                                                loading="lazy" alt="Arrow" class="services-arrow-icon" /></div>
                                    </div>
                                    <div class="services-description-wrapper">
                                        <div data-w-id="ab38aa81-ed75-752f-1365-2f2e8f53fae8"
                                            class="services-description-single">
                                            <p class="services-description-text">Involves the coding and programming that
                                                makes a website functional and interactive. This includes front-end
                                                development (what users see) and back-end development (server, database, and
                                                application logic).</p>
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
                                                Branding</h2>
                                        </div>
                                        <div class="services-arrow-icon-wrapper">
                                            <img src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/68a8c4dc0bf39abe4f4c253d_Services%20Arrow%20Icon.svg"
                                                loading="lazy" alt="Arrow" class="services-arrow-icon" />
                                        </div>
                                    </div>
                                    <div class="services-description-wrapper">
                                        <div data-w-id="09d08cac-d607-ec02-5387-75ad1a62fea4"
                                            class="services-description-single">
                                            <p class="services-description-text">The process of creating a unique identity
                                                for a company or product, encompassing its name, logo, messaging, and
                                                overall market perception. It aims to establish recognition and a positive
                                                emotional connection with the target audience.</p>
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
                                                Product Design</h2>
                                        </div>
                                        <div data-w-id="f1b498ae-d155-e4f6-a43f-c2cc236e6228"
                                            class="services-arrow-icon-wrapper"><img
                                                src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/68a8c4dc0bf39abe4f4c253d_Services%20Arrow%20Icon.svg"
                                                loading="lazy" alt="Arrow" class="services-arrow-icon" /></div>
                                    </div>
                                    <div class="services-description-wrapper">
                                        <div data-w-id="f1b498ae-d155-e4f6-a43f-c2cc236e622b"
                                            class="services-description-single">
                                            <p class="services-description-text">Encompasses the entire process of creating
                                                a new product, from conceptualization and research to prototyping and final
                                                execution. It focuses on solving user problems and enhancing the overall
                                                user experience and functionality of a product.</p>
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
    <section class="section cms-technology">
        <div class="container">
            <div class="section-title-wrapper">
                <div class="section-subtitle-wrap">
                    <div class="section-subtitle-single"><img
                            src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/687810aa5293f9e8c955c26a_Section%20Subtitle%20Icon.svg"
                            loading="lazy" alt="Subtitle Icon" class="section-subtitle-icon" />
                        <div class="section-subtitle">CMS Technology</div>
                    </div>
                </div>
                <h2 class="section-title cms-technology-tools">Tools We Use to Build Great Products</h2>
                <p class="section-description cms-technology-description">We use modern, reliable technologies to craft
                    fast, user-friendly digital experiences. Our stack is built for performance, scalability, and smooth
                    development.</p>
            </div>
            <div class="cms-technology-content">
                <div class="cms-technology-top-card">
                    <div class="cms-technology-top-card-single"><img
                            src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/68c31df2295edf1335729c8d_Tech-Hover-Logo-1.svg"
                            loading="lazy" alt="Tech Logo" class="cms-technology-logo hover" /><img
                            src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/68af513d7a49a116be044b27_CMS%20Technology%20Logo1.svg"
                            loading="lazy" alt="Tech Logo" class="cms-technology-logo" />
                        <div class="cms-technology-hover-bg"></div>
                    </div>
                    <div class="cms-technology-top-card-single"><img
                            src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/68c31df2fd669c5f666db9bc_Tech-Hover-Logo-2.svg"
                            loading="lazy" alt="Tech Logo" class="cms-technology-logo hover" /><img
                            src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/68af513df1cc704eefdb0e77_CMS%20Technology%20Logo2.svg"
                            loading="lazy" alt="Tech Logo" class="cms-technology-logo" />
                        <div class="cms-technology-hover-bg"></div>
                    </div>
                    <div class="cms-technology-top-card-single"><img
                            src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/68c31df2be3833b58b42a0ba_Tech-Hover-Logo-3.svg"
                            loading="lazy" alt="Tech Logo" class="cms-technology-logo hover" /><img
                            src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/68af513d2191ab69d45384fc_CMS%20Technology%20Logo3.svg"
                            loading="lazy" alt="Tech Logo" class="cms-technology-logo" />
                        <div class="cms-technology-hover-bg"></div>
                    </div>
                    <div class="cms-technology-top-card-single"><img
                            src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/68c31df2189f9ca4911961e1_Tech-Hover-Logo-4.svg"
                            loading="lazy" alt="Tech Logo" class="cms-technology-logo hover" /><img
                            src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/68af513dc95092f5927835b3_CMS%20Technology%20Logo4.svg"
                            loading="lazy" alt="Tech Logo" class="cms-technology-logo" />
                        <div class="cms-technology-hover-bg"></div>
                    </div>
                </div>
                <div class="cms-technology-bottom-card">
                    <div class="cms-technology-top-card-single"><img
                            src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/68c31df2d41dabfc2b106002_Tech-Hover-Logo-5.svg"
                            loading="lazy" alt="Tech Logo" class="cms-technology-logo hover" /><img
                            src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/68af513d78b8a9fee152810a_CMS%20Technology%20Logo5.svg"
                            loading="lazy" alt="Tech Logo" class="cms-technology-logo" />
                        <div class="cms-technology-hover-bg"></div>
                    </div>
                    <div class="cms-technology-top-card-single"><img
                            src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/68c31df2630851a6b14b16cb_Tech-Hover-Logo-6.svg"
                            loading="lazy" alt="Tech Logo" class="cms-technology-logo hover" /><img
                            src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/68af513de56eee75a3acf1d0_CMS%20Technology%20Logo6.svg"
                            loading="lazy" alt="Tech Logo" class="cms-technology-logo" />
                        <div class="cms-technology-hover-bg"></div>
                    </div>
                    <div class="cms-technology-top-card-single"><img
                            src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/68c31df27bbf7d2042d5a94b_Tech-Hover-Logo-7.svg"
                            loading="lazy" alt="Tech Logo" class="cms-technology-logo hover" /><img
                            src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/68af513d23a241191ad59629_CMS%20Technology%20Logo7.svg"
                            loading="lazy" alt="Tech Logo" class="cms-technology-logo" />
                        <div class="cms-technology-hover-bg"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section benefit-section">
        <div class="benefit-content" style="padding-inline: 1rem; padding-block: 5rem;">
            <div class="benefit-image-wrapper"><img
                    src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/68af526b9b09c1f0d5201fb8_Benefit%20Image.jpg"
                    loading="lazy" alt="Benefit Image" height="Auto" class="benefit-image" /></div>
            <div class="benefit-typography">
                <div class="benefit-section-title-wrapper">
                    <div class="section-subtitle-wrap left-alignment">
                        <div class="section-subtitle-single gray-bg"><img
                                src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/68a8be303fa5a8c72f1cf197_Section%20Subtitle%20Icon2.svg"
                                loading="lazy" alt="Subtitle Icon" class="section-subtitle-icon" />
                            <div class="section-subtitle white">Benefit</div>
                        </div>
                    </div>
                    <div class="benefit-section-title-description">
                        <h2 class="section-title white">Why Choose Our Services</h2>
                        <p class="section-description benefit-description">Get high-quality results, faster delivery, and
                            tailored solutions that grow with your business. We focus on value, efficiency, and long-term
                            success for every project.</p>
                    </div>
                    <div class="benefit-card-wrapper">
                        <div class="benefit-card-single">
                            <div class="benefit-card-icon-wrapper"><img
                                    src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/68af54ee3bafdceb6ffba3dc_Benefit%20Card%20Icon1.svg"
                                    loading="lazy" alt="Check" class="benefit-card-icon" /></div>
                            <div class="benefit-card-title-description">
                                <div class="benefit-card-title">Fast &amp; Reliable Delivery</div>
                                <p class="benefit-card-description">We prioritize timely completion without compromising
                                    quality.</p>
                            </div>
                        </div>
                        <div class="benefit-card-single">
                            <div class="benefit-card-icon-wrapper"><img
                                    src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/68af54ee3bafdceb6ffba3dc_Benefit%20Card%20Icon1.svg"
                                    loading="lazy" alt="Check" class="benefit-card-icon" /></div>
                            <div class="benefit-card-title-description">
                                <div class="benefit-card-title">Tailored to Your Needs</div>
                                <p class="benefit-card-description">Every solution is customized to fit your unique goals
                                    and challenges.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section faq" style="padding-inline: 1rem">
        <div class="container">
            <div class="section-title-wrapper">
                <div class="section-subtitle-wrap">
                    <div class="section-subtitle-single"><img
                            src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/687810aa5293f9e8c955c26a_Section%20Subtitle%20Icon.svg"
                            loading="lazy" alt="Subtitle Icon" class="section-subtitle-icon" />
                        <div class="section-subtitle">FAQS</div>
                    </div>
                </div>
                <h2 class="section-title">Frequently Asked Questions</h2>
                <p class="section-description cms-technology-description">We use modern, reliable technologies to craft
                    fast, user-friendly digital experiences. Our stack is built for performance, scalability, and smooth
                    development.</p>
            </div>
            <div class="faq-content">
                <div class="faq-typography-card">
                    <div class="faq-title-card-wrapper">
                        <div class="faq-card-title-single">
                            <h3 class="faq-card-title">Still Have More Questions?</h3>
                        </div>
                        <p class="faq-card-description">If you’re curious or need more info, feel free to reach out—we’re
                            here to help!</p>
                    </div>
                    <div class="faq-typography-card-button-wrapper"><a href="/template-pages/contact-us"
                            data-wf--primary-button--variant="base" data-w-id="3d8db9dc-5eed-be45-f768-868f0c7978a9"
                            class="primary-button w-inline-block">
                            <div class="primary-button-inner">
                                <div class="primary-button-text-wrap">
                                    <div class="primary-button-text-block">Contact Us Now</div>
                                    <div class="primary-button-text-block is-text-absolute">Contact Us Now</div>
                                </div>
                            </div>
                        </a></div>
                </div>
                <div class="faq-wrapper">
                    <div data-current="Tab 1" data-easing="ease" data-duration-in="300" data-duration-out="100"
                        class="w-tabs">
                        <div class="faq-accordion-wrapper w-tab-menu"><a data-w-tab="Tab 1"
                                class="single-faq-accordion-wrap w-inline-block w-tab-link w--current">
                                <div class="faq-accordion-question-wrap">
                                    <div class="faq-question">What Services Do You Offer?</div>
                                    <div class="faq-icon-wrapper"><img loading="lazy"
                                            src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/68af5ce71c07351569a5efe0_Faq%20Icon.svg"
                                            alt="Plus" class="faq-icon" /></div>
                                </div>
                                <div class="core-values-accordion-answer-wrap">
                                    <div class="faq-answer">
                                        <p class="faq-answer-text">The provided image already contains placeholder text for
                                            this section. I&#x27;ve retained it as requested, but typically, this would be
                                            more specific.</p>
                                    </div>
                                </div>
                            </a><a data-w-tab="Tab 2" class="single-faq-accordion-wrap w-inline-block w-tab-link">
                                <div class="faq-accordion-question-wrap">
                                    <div class="faq-question">What Is the Project Timeline?</div>
                                    <div class="faq-icon-wrapper"><img loading="lazy"
                                            src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/68af5ce71c07351569a5efe0_Faq%20Icon.svg"
                                            alt="Plus" class="faq-icon" /></div>
                                </div>
                                <div class="core-values-accordion-answer-wrap">
                                    <div class="faq-answer">
                                        <p class="faq-answer-text">The provided image already contains placeholder text for
                                            this section. I&#x27;ve retained it as requested, but typically, this would be
                                            more specific.</p>
                                    </div>
                                </div>
                            </a><a data-w-tab="Tab 3" class="single-faq-accordion-wrap w-inline-block w-tab-link">
                                <div class="faq-accordion-question-wrap">
                                    <div class="faq-question">Do You Offer Ongoing Support?</div>
                                    <div class="faq-icon-wrapper"><img loading="lazy"
                                            src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/68af5ce71c07351569a5efe0_Faq%20Icon.svg"
                                            alt="Plus" class="faq-icon" /></div>
                                </div>
                                <div class="core-values-accordion-answer-wrap">
                                    <div class="faq-answer">
                                        <p class="faq-answer-text">Yes, absolutely. We believe in building long-term
                                            relationships with our clients. Our ongoing support packages ensure your digital
                                            assets remain secure, up-to-date, and perform optimally.</p>
                                    </div>
                                </div>
                            </a><a data-w-tab="Tab 4" class="single-faq-accordion-wrap w-inline-block w-tab-link">
                                <div class="faq-accordion-question-wrap">
                                    <div class="faq-question">How Do You Ensure Quality?</div>
                                    <div class="faq-icon-wrapper"><img loading="lazy"
                                            src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/68af5ce71c07351569a5efe0_Faq%20Icon.svg"
                                            alt="Plus" class="faq-icon" /></div>
                                </div>
                                <div class="core-values-accordion-answer-wrap">
                                    <div class="faq-answer">
                                        <p class="faq-answer-text">Thorough requirement gathering, agile development
                                            methodologies, continuous testing and quality assurance at every stage, regular
                                            client feedback loops, and adherence to industry best practices and coding
                                            standards. Our experienced team is dedicated to delivering robust,
                                            user-friendly, and high-performing solutions.</p>
                                    </div>
                                </div>
                            </a><a data-w-tab="Tab 5" class="single-faq-accordion-wrap w-inline-block w-tab-link">
                                <div class="faq-accordion-question-wrap">
                                    <div class="faq-question">Can I Request Custom Features?</div>
                                    <div class="faq-icon-wrapper"><img loading="lazy"
                                            src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/68af5ce71c07351569a5efe0_Faq%20Icon.svg"
                                            alt="Plus" class="faq-icon" /></div>
                                </div>
                                <div class="core-values-accordion-answer-wrap">
                                    <div class="faq-answer">
                                        <p class="faq-answer-text">Yes, we welcome custom feature requests! We understand
                                            that every business has unique requirements. Our flexible development approach
                                            allows us to incorporate custom functionalities and integrations to perfectly
                                            align with your vision and business goals.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section testimonial" style="margin-bottom: 10rem">
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
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const faqTabs = document.querySelectorAll('.single-faq-accordion-wrap');
            faqTabs.forEach(tab => {
                tab.addEventListener('click', function() {
                    faqTabs.forEach(t => t.classList.remove('w--current'));
                    this.classList.add('w--current');
                });
            });
        });
    </script>
@endsection
