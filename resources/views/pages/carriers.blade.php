@extends('index')

@push('styles')
    <style>
        .careers-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 30px;
            margin-top: 50px;
            margin-bottom: 80px;
        }

        .career-card {
            background-color: #fff;
            border: 1px solid #e5e7eb;
            border-radius: 12px;
            padding: 40px 30px;
            transition: all 0.3s ease;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .career-card:hover {
            border-color: #000;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            transform: translateY(-5px);
        }

        .career-title {
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 15px;
            color: #1a1a1a;
            line-height: 1.3;
        }

        .career-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-bottom: 20px;
        }

        .career-tag {
            background-color: #f3f4f6;
            padding: 6px 14px;
            border-radius: 50px;
            font-size: 14px;
            color: #4b5563;
            font-weight: 500;
        }

        .career-description {
            color: #6b7280;
            margin-bottom: 30px;
            line-height: 1.6;
        }
    </style>
@endpush

@section('contain')
    <section class="section inner-banner">
        <div class="container">
            <div class="inner-banner-content">
                <div class="inner-banner-text-wrapper">
                    <div class="inner-banner-typography">
                        <h1 class="inner-banner-title">Work With Us</h1>
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

    <section class="section careers-positions">
        <div class="container">
            <div class="section-title-wrapper">
                <div class="section-subtitle-wrap">
                    <div class="section-subtitle-single"><img
                            src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/687810aa5293f9e8c955c26a_Section%20Subtitle%20Icon.svg"
                            loading="lazy" alt="Subtitle Icon" class="section-subtitle-icon" />
                        <div class="section-subtitle">Open Positions</div>
                    </div>
                </div>
                <h2 class="section-title">Join Our Team</h2>
                <p class="section-description">Explore exciting opportunities to grow your career with us. We are always looking for talented individuals.</p>
            </div>

            <div class="careers-grid">
                <!-- Job Item 1 -->
                <div class="career-card">
                    <div class="career-card-content">
                        <h3 class="career-title">Senior Web Developer</h3>
                        <div class="career-tags">
                            <span class="career-tag">Engineering</span>
                            <span class="career-tag">Remote</span>
                            <span class="career-tag">Full Time</span>
                        </div>
                        <p class="career-description">We are looking for an experienced Web Developer to join our team and help build amazing digital experiences.</p>
                    </div>
                    <div class="career-button-wrapper">
                        <a href="#" class="primary-button w-inline-block">
                            <div class="primary-button-inner">
                                <div class="primary-button-text-wrap">
                                    <div class="primary-button-text-block">Apply Now</div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- Job Item 2 -->
                <div class="career-card">
                    <div class="career-card-content">
                        <h3 class="career-title">UI/UX Designer</h3>
                        <div class="career-tags">
                            <span class="career-tag">Design</span>
                            <span class="career-tag">On-site</span>
                            <span class="career-tag">Full Time</span>
                        </div>
                        <p class="career-description">Join our creative team to design intuitive and visually stunning user interfaces for our clients.</p>
                    </div>
                    <div class="career-button-wrapper">
                        <a href="#" class="primary-button w-inline-block">
                            <div class="primary-button-inner">
                                <div class="primary-button-text-wrap">
                                    <div class="primary-button-text-block">Apply Now</div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- Job Item 3 -->
                <div class="career-card">
                    <div class="career-card-content">
                        <h3 class="career-title">Project Manager</h3>
                        <div class="career-tags">
                            <span class="career-tag">Management</span>
                            <span class="career-tag">Hybrid</span>
                            <span class="career-tag">Full Time</span>
                        </div>
                        <p class="career-description">Lead cross-functional teams to deliver projects on time and within budget while maintaining high quality.</p>
                    </div>
                    <div class="career-button-wrapper">
                        <a href="#" class="primary-button w-inline-block">
                            <div class="primary-button-inner">
                                <div class="primary-button-text-wrap">
                                    <div class="primary-button-text-block">Apply Now</div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section spontaneous-application" style="padding-bottom: 100px;">
        <div class="container">
            <div class="section-title-wrapper">
                <h2 class="section-title">Spontaneous Application</h2>
                <p class="section-description">Don't see a position that fits? Send us your resume and we'll keep you in mind for future openings.</p>
            </div>
            <div class="contact-us-form-wrapper">
                <div class="contact-us-form-block w-form">
                    <form id="wf-form-Careers-Form" name="wf-form-Careers-Form" method="post" enctype="multipart/form-data" class="contact-us-form">
                        @csrf
                        <div class="contact-us-form-wrap-main">
                            <div class="contact-us-form-flex">
                                <div class="contact-us-form-single">
                                    <label for="Name" class="contact-us-form-text-field">Name*</label>
                                    <input class="contact-us-form-input-field w-input" name="Name" placeholder="Your Name" type="text" id="Name" required="" />
                                </div>
                                <div class="contact-us-form-single">
                                    <label for="Email" class="contact-us-form-text-field">Email*</label>
                                    <input class="contact-us-form-input-field w-input" name="Email" placeholder="example@domain.com" type="email" id="Email" required="" />
                                </div>
                            </div>
                            <div class="contact-us-form-flex">
                                <div class="contact-us-form-single">
                                    <label for="Phone" class="contact-us-form-text-field">Phone Number</label>
                                    <input class="contact-us-form-input-field w-input" name="Phone" placeholder="+1 234 567 890" type="tel" id="Phone" />
                                </div>
                                <div class="contact-us-form-single">
                                    <label for="Resume" class="contact-us-form-text-field">Resume (PDF)*</label>
                                    <input class="contact-us-form-input-field w-input" name="Resume" type="file" id="Resume" accept=".pdf,.doc,.docx" required="" style="padding-top: 12px;" />
                                </div>
                            </div>
                            <div class="contact-us-form-textarea-wrap">
                                <label for="Message" class="contact-us-form-text-field">Cover Letter / Message</label>
                                <textarea id="Message" name="Message" placeholder="Tell us why you want to join..." class="contact-us-form-textarea w-input"></textarea>
                            </div>
                            <div class="contact-us-form-submit-button-wrap">
                                <input type="submit" class="contact-us-form-submit-button w-button" value="Submit Application" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
