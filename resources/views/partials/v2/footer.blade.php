<section class="dx-newsletter">
    <div class="dx-container">
        <h3>{{ __('Stay informed with the latest digital infrastructure insights.') }}</h3>
        <p>{{ __('Subscribe for practical perspectives on AI, data systems, infrastructure monitoring and digital transformation across Africa.') }}</p>
        <form class="dx-newsletter-form" onsubmit="event.preventDefault(); window.location.href='mailto:contactdigitexia@gmail.com?subject=Newsletter subscription - DigiTexia';">
            <input type="email" name="email" placeholder="{{ __('Your email address') }}" aria-label="{{ __('Your email address') }}" required>
            <button type="submit" class="dx-btn dx-btn-primary">{{ __('Subscribe') }}</button>
        </form>
    </div>
</section>

<footer class="dx-footer">
    <div class="dx-container">
        <div class="dx-footer-content">
            <div>
                <a href="{{ url('/') }}" class="dx-logo" aria-label="DigiTexia">
                    <img src="{{ asset('logo/logo-footer.png') }}" alt="DigiTexia" class="dx-footer-logo-img">
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
                <p><a href="{{ url('/solutions') }}">AquaWatch AI</a></p>
                <p><a href="{{ url('/solutions') }}">WastePay</a></p>
                <p><a href="{{ url('/solutions') }}">Carbon Africa Exchange</a></p>
                <p><a href="{{ url('/solutions') }}">Digital Twin Platform</a></p>
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
