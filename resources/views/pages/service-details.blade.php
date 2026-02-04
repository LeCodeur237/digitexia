@extends('index')
@push('styles')
    <style>
        .inner-banner {
            text-align:center;
            padding: 24rem 8rem 4rem 8rem !important;
        }

        .d-block{
            padding-bottom: 4rem !important;
            padding-top: 4rem !important;
            border-bottom: 1px solid #e5e7eb;
        }
    </style>
@endpush
@section('contain')
    <section class="section inner-banner">
        <div class="container">
            <div class="d-block">
                <h1 class="inner-banner-title services-details">Web Development</h1>
                <p class="inner-banner-description services-details-banner-description">Involves the coding and
                    programming that makes a website functional and interactive. This includes front-end development
                    (what users see) and back-end development (server, database, and application logic).</p>
            </div>
        </div>
    </section>
    <section class="section services-details" style="margin-bottom: 8rem">
        <div class="container">
            <div class="services-details-content">
                <div class="services-details-rich-content w-richtext">
                    <h2>Service Overview:</h2>
                    <p>Our Web Development services provide end-to-end solutions for creating dynamic and effective online
                        presences. We specialize in designing and building custom websites and web applications from the
                        ground up, ensuring they are perfectly aligned with your business goals. This includes expert
                        front-end development, focusing on intuitive user interfaces and engaging experiences that work
                        seamlessly across all devices, as well as robust back-end development to power your platform&#x27;s
                        core functionalities, secure data management, and efficient performance. We utilize modern
                        technologies and adhere to best practices to deliver secure, scalable, and search engine-friendly
                        digital solutions that not only look great but also drive user engagement and contribute to your
                        overall success.</p>
                    <h2>What&#x27;s Included in Web Development Services:</h2>
                    <p>We leverage cutting-edge technologies and industry best practices to deliver solutions that are not
                        only visually appealing but also secure, high-performing, and optimized for search engines, ensuring
                        your online presence effectively engages your target audience and achieves your business goals.</p>
                    <h5>Discovery &amp; Strategy:</h5>
                    <ul role="list">
                        <li>Initial consultation to understand your business, goals, and target audience.</li>
                        <li>Competitor analysis and market research.</li>
                        <li>Defining website objectives and key performance indicators (KPIs).</li>
                        <li>Sitemap creation and user flow planning.</li>
                    </ul>
                    <h5>User Experience (UI/UX) Design:</h5>
                    <ul role="list">
                        <li>Wireframing to outline the website structure and layout.</li>
                        <li>User journey mapping to optimize navigation and interaction.</li>
                        <li>Usability testing (where applicable) to ensure an intuitive experience.</li>
                        <li>Visual design of all web pages, including typography, color palette, and imagery.</li>
                    </ul>
                    <figure style="max-width:1070pxpx" class="w-richtext-align-fullwidth w-richtext-figure-type-image">
                        <div><img
                                src="https://cdn.prod.website-files.com/688a6c3373e0fdb14fbef689/68af623c1173fe7e1088e25b_Services%20Details%20Image.jpg"
                                loading="lazy" alt="" /></div>
                    </figure>
                </div>
                <div class="services-short-details">
                    <div class="services-short-details-title-description">
                        <h2 class="services-short-details-title">Your vision, our expertise.</h2>
                        <p class="services-short-details-description">Discover how our integrated approach to design and
                            development can revitalize your brand image, engage your audience, and drive growth.</p>
                    </div>
                    <div class="services-short-details-button-wrapper"><a href="/template-pages/contact-us"
                            data-wf--primary-button--variant="base" data-w-id="3d8db9dc-5eed-be45-f768-868f0c7978a9"
                            class="primary-button w-inline-block">
                            <div class="primary-button-inner">
                                <div class="primary-button-text-wrap">
                                    <div class="primary-button-text-block">Connect With Us Now!</div>
                                    <div class="primary-button-text-block is-text-absolute">Connect With Us Now!</div>
                                </div>
                            </div>
                        </a></div>
                </div>
            </div>
        </div>
    </section>
@endsection
