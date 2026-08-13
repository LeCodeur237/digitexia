<section class="dx-newsletter">
    <div class="dx-container">
        <h3>{{ __('Stay informed with the latest digital infrastructure insights.') }}</h3>
        <p>{{ __('Subscribe for practical perspectives on AI, data systems, infrastructure monitoring and digital transformation across Africa.') }}</p>

        <form class="dx-newsletter-form" method="post" action="{{ route('newsletter.subscribe') }}">
            @csrf
            <input type="email" name="newsletter_email" value="{{ old('newsletter_email') }}" placeholder="{{ __('Your email address') }}" aria-label="{{ __('Your email address') }}" required>
            <button type="submit" class="dx-btn dx-btn-primary">{{ __('Subscribe') }}</button>
        </form>
    </div>
</section>

<footer class="dx-footer">
    <div class="dx-container">
        <div class="dx-footer-content">
            <div>
                <a href="{{ url('/') }}" class="dx-logo" aria-label="DigiTexia">
                    <img src="{{ asset('logo/logo-footer.png') }}" alt="DigiTexia" class="dx-footer-logo-img dx-footer-logo-dark">
                    <img src="{{ asset('logo/logo-footer-light.png') }}" alt="DigiTexia" class="dx-footer-logo-img dx-footer-logo-light">
                </a>
                <p class="dx-footer-about">
                    {{ __('DigiTexia builds AI-powered digital infrastructure for organizations that need stronger visibility, better operations and scalable technology.') }}
                </p>
            </div>

            <div>
                <h4>{{ __('Company') }}</h4>
                <p><a href="{{ url('/the-problem') }}">{{ __('The Problem') }}</a></p>
                <p><a href="{{ url('/solutions') }}">{{ __('Solutions') }}</a></p>
                <p><a href="{{ url('/projects') }}">{{ __('Projects') }}</a></p>
                <p><a href="{{ url('/why-us') }}">{{ __('Why Us') }}</a></p>
            </div>

            <div>
                <h4>{{ __('Products') }}</h4>
                <p><a href="{{ url('/solutions/medtrace') }}">MedTrace</a></p>
                <p><a href="{{ url('/solutions/aquawatch-ai') }}">AquaWatch AI</a></p>
                <p><a href="{{ url('/solutions/wastepay') }}">WastePay</a></p>
                <p><a href="{{ url('/solutions/flexicare') }}">Flexicare</a></p>
                <p><a href="{{ url('/solutions/performia') }}">Performia</a></p>
            </div>

            <div>
                <h4>{{ __('Contact') }}</h4>
                <p><a href="mailto:contactdigitexia@gmail.com">contactdigitexia@gmail.com</a></p>
                <p><a href="tel:+237650945280">(+237) 650 945 280</a></p>
                <p>{{ __('Yaounde, Cameroon') }}</p>
                <p><a href="{{ url('/contact-us') }}">{{ __('Start a conversation') }}</a></p>
            </div>
        </div>

        <div class="dx-footer-bottom">
            <p>&copy; {{ date('Y') }} DigiTexia. {{ __('All rights reserved') }}</p>
            <p>{{ __('Built for African digital infrastructure.') }}</p>
        </div>
    </div>
</footer>

@if (session('newsletter_success') || $errors->newsletter->any())
    <div class="dx-toast-wrap" id="newsletterToast" role="alert" aria-live="assertive" data-dx-toast>
        <div class="dx-toast {{ session('newsletter_success') ? 'success' : 'error' }}">
            <div class="dx-toast-icon" aria-hidden="true">
                <i class="ti {{ session('newsletter_success') ? 'ti-check' : 'ti-alert-triangle' }}"></i>
            </div>
            <div class="dx-toast-content">
                <strong>{{ session('newsletter_success') ? __('Newsletter subscription') : __('Newsletter error') }}</strong>
                <span>{{ session('newsletter_success') ?: __('Please enter a valid email address.') }}</span>
            </div>
            <button type="button" class="dx-toast-close" aria-label="{{ __('Dismiss notification') }}" data-dx-toast-close>&times;</button>
        </div>
    </div>
@endif
