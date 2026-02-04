@extends('index')

@section('contain')
    <section class="section inner-banner" style="padding-inline: 1rem">
        <div class="container">
            <div class="inner-banner-content">
                <div class="inner-banner-text-wrapper">
                    <div class="inner-banner-typography">
                        <h1 class="inner-banner-title">Contact Us</h1>
                        <p class="inner-banner-description">Understand the various reasons behind these retractions, from
                            personal conviction to external pressures, and discover the profound implications they can have
                            on individuals, justice, and public perception.</p>
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

    <section class="section contact-us" style="padding-inline: 1rem">
        <div class="container">
            <div class="contact-us-content">
                <div class="contact-us-image-wrapper"><img
                        src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/68b0ab92d1331d9fc99cba90_Contact%20Us%20Image.jpg"
                        loading="lazy" alt="Contact Image" class="contact-us-image" /></div>
                <div class="contact-us-form-wrapper">
                    <div class="contact-us-section-title-wrapper">
                        <div class="section-subtitle-wrap left-alignment">
                            <div class="section-subtitle-single white"><img
                                    src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/687810aa5293f9e8c955c26a_Section%20Subtitle%20Icon.svg"
                                    loading="lazy" alt="Subtitle Icon" class="section-subtitle-icon" />
                                <div class="section-subtitle">Get in touch</div>
                            </div>
                        </div>
                        <h2 class="section-title mb0">Send Your Message</h2>
                    </div>
                    <div class="contact-us-form-wrap">
                        <div class="contact-us-form-block w-form">
                            <form id="wf-form-Contact-Form" name="wf-form-Contact-Form" data-name="Contact Form"
                                method="get" class="contact-us-form" data-wf-page-id="6877e02f5387b6bdd6d338f7"
                                data-wf-element-id="62bf5370-1f1c-50de-9efe-03b9a6862301">
                                <div class="contact-us-form-wrap-main">
                                    <div class="contact-us-form-flex">
                                        <div class="contact-us-form-single"><label for="Name"
                                                class="contact-us-form-text-field">Name*</label><input
                                                class="contact-us-form-input-field w-input" maxlength="256" name="Name"
                                                data-name="Name" placeholder="Thomas Alison" type="text" id="Name"
                                                required="" /></div>
                                        <div class="contact-us-form-single"><label for="Contact-Mail"
                                                class="contact-us-form-text-field">Email*</label><input
                                                class="contact-us-form-input-field w-input" maxlength="256" name="email"
                                                data-name="Email" placeholder="example@domain.com" type="email"
                                                id="Contact-Mail" required="" /></div>
                                    </div>
                                    <div class="contact-us-form-flex">
                                        <div class="contact-us-form-single"><label for="Phone-Number"
                                                class="contact-us-form-text-field">Phone Number*</label><input
                                                class="contact-us-form-input-field w-input" maxlength="256"
                                                name="Phone-Number" data-name="Phone Number" placeholder="+91 123 456789"
                                                type="tel" id="Phone-Number" required="" /></div>
                                        <div class="contact-us-form-single"><label for="Budget"
                                                class="contact-us-form-text-field">Budget*</label><input
                                                class="contact-us-form-input-field w-input" maxlength="256" name="Budget"
                                                data-name="Budget" placeholder="Type Your Budget" type="text"
                                                id="Budget" required="" /></div>
                                    </div>
                                    <div class="contact-us-form-textarea-wrap"><label for="Inquiry-Message"
                                            class="contact-us-form-text-field">Inquiry about</label>
                                        <textarea id="Inquiry-Message" name="Inquiry-Message" maxlength="5000" data-name="Inquiry Message"
                                            placeholder="Write your message" required="" class="contact-us-form-textarea w-input"></textarea>
                                    </div>
                                    <div class="contact-us-form-submit-button-wrap"><input type="submit"
                                            data-wait="Please wait..." class="contact-us-form-submit-button w-button"
                                            value="Send Message" /></div>
                                </div>
                            </form>
                            <div class="success-message w-form-done">
                                <div>Thank you! Your submission has been received!</div>
                            </div>
                            <div class="w-form-fail">
                                <div>Oops! Something went wrong while submitting the form.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section contact-us-details" style="padding-inline: 1rem">
        <div class="container">
            <div class="contact-us-details-content">
                <div class="w-layout-grid contact-us-details-grid">
                    <div class="contact-us-details-single">
                        <div class="contact-us-details-icon-wrapper">
                            <div class="contact-us-details-icon-single"><img
                                    src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/68b0b6dc6ba3d1a32ddf5155_Contact%20Us%20Details%20Icon1.svg"
                                    loading="lazy" alt="Location" class="contact-us-details-icon" /></div>
                        </div>
                        <div class="contact-us-details-title-text">
                            <div class="contact-us-details-title">Our Address</div>
                            <p class="contact-us-details-text">1234 Elm Street, Suite 567, Springfield,</p>
                        </div>
                    </div>
                    <div class="contact-us-details-single">
                        <div class="contact-us-details-icon-wrapper">
                            <div class="contact-us-details-icon-single"><img
                                    src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/68b0b6dc1dd90d40cb5f7601_Contact%20Us%20Details%20Icon2.svg"
                                    loading="lazy" alt="Phone" class="contact-us-details-icon" /></div>
                        </div>
                        <div class="contact-us-details-title-text">
                            <div class="contact-us-details-title">Phone</div>
                            <p class="contact-us-details-text">+91 123 456789</p>
                        </div>
                    </div>
                    <div class="contact-us-details-single">
                        <div class="contact-us-details-icon-wrapper">
                            <div class="contact-us-details-icon-single"><img
                                    src="https://cdn.prod.website-files.com/6877e02f5387b6bdd6d338ec/68b0b6dc5379cc1b3aa2990b_Contact%20Us%20Details%20Icon3.svg"
                                    loading="lazy" alt="Mail" class="contact-us-details-icon" /></div>
                        </div>
                        <div class="contact-us-details-title-text">
                            <div class="contact-us-details-title">Email</div>
                            <p class="contact-us-details-text">Suport@example.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
