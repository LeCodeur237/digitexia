@extends('index')

@push('styles')
    <style>
        .partners-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 30px;
            margin-top: 50px;
        }

        .partner-card {
            background-color: #fff;
            border: 1px solid #e5e7eb;
            border-radius: 12px;
            padding: 40px 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
        }

        .partner-card:hover {
            border-color: #000;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            transform: translateY(-5px);
        }

        .partner-logo {
            max-width: 120px;
            height: auto;
            filter: grayscale(100%);
            opacity: 0.7;
            transition: all 0.3s ease;
        }

        .partner-card:hover .partner-logo {
            filter: grayscale(0%);
            opacity: 1;
        }
    </style>
@endpush

@section('contain')
    <section class="section inner-banner">
        <div class="container">
            <div class="inner-banner-content">
                <div class="inner-banner-text-wrapper">
                    <div class="inner-banner-typography">
                        <h1 class="inner-banner-title">Our Partners</h1>
                        <p class="inner-banner-description">We collaborate with industry-leading organizations to deliver
                            innovative solutions and exceptional value, ensuring our clients stay ahead in technology.</p>
                    </div>
                    <div class="services-button-wrapper"><a href="/template-pages/pricing"
                            data-wf--primary-button--variant="base" class="primary-button w-inline-block">
                            <div class="primary-button-inner">
                                <div class="primary-button-text-wrap">
                                    <div class="primary-button-text-block">Start Projects</div>
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
    <section class="section partners">
        <div class="container">
            <div class="section-title-wrapper">
                <div class="section-subtitle-wrap">
                    <div class="section-subtitle-single"><img
                            src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/687810aa5293f9e8c955c26a_Section%20Subtitle%20Icon.svg"
                            loading="lazy" alt="Subtitle Icon" class="section-subtitle-icon" />
                        <div class="section-subtitle">Our Partners</div>
                    </div>
                </div>
                <h2 class="section-title">Trusted by Industry Leaders</h2>
                <p class="section-description">We are proud to work with some of the most innovative and successful
                    companies in the world.</p>
            </div>
            <div class="partners-grid">
                @for ($i = 1; $i <= 9; $i++)
                    <div class="partner-card">
                        <img src="{{ asset('partners/partner-' . $i . '.png') }}" loading="lazy" alt="Partner Logo"
                            class="partner-logo" />
                    </div>
                @endfor
            </div>
        </div>
    </section>
@endsection
