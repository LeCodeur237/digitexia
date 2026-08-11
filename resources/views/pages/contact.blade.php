@extends('index')

@section('page_title', __('DigiTexia | Contact'))
@section('digitexia_v2', true)

@push('styles')
<link rel="stylesheet" href="{{ asset('css/contact-v2.css') }}?v={{ filemtime(public_path('css/contact-v2.css')) }}">
@endpush

@section('fullpage')
@include('partials.v2.header')

<main class="dx-contact">
    <section class="page-hero">
        <div class="dx-blueprint"></div>
        <div class="dx-container dx-reveal">
            <div class="dx-eyebrow">{{ __('Contact') }}</div>
            <h1>{{ __('Every successful digital transformation starts with a conversation.') }}</h1>
            <p class="page-hero-subtitle">
                {{ __('Whether you are starting a new initiative or improving one already underway, we welcome the chance to hear about it. Tell us about your organization, your challenge and where you want to go.') }}
            </p>
        </div>
    </section>

    <section class="dx-section" id="contact-form">
        <div class="dx-container">
            <div class="contact-grid dx-reveal">
                <div class="info-panel">
                    <h2>{{ __('Let us talk about your project') }}</h2>
                    <p>
                        {{ __('DigiTexia collaborates with organizations to design digital solutions that create measurable impact. We are an accessible technology partner, committed to meaningful communication from the first message onward.') }}
                    </p>

                    <div class="info-block">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true"><path d="m3 6 9 6 9-6"/><rect x="3" y="5" width="18" height="14" rx="2"/></svg>
                        <div>
                            <h3>{{ __('Email') }}</h3>
                            <a href="mailto:contactdigitexia@gmail.com">contactdigitexia@gmail.com</a>
                        </div>
                    </div>

                    <div class="info-block">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true"><path d="M22 16.9v3a2 2 0 0 1-2.2 2 19.8 19.8 0 0 1-8.6-3.1 19.5 19.5 0 0 1-6-6 19.8 19.8 0 0 1-3.1-8.6A2 2 0 0 1 4.1 2h3a2 2 0 0 1 2 1.7c.1.9.3 1.9.6 2.8a2 2 0 0 1-.4 2.1L8.1 9.8a16 16 0 0 0 6 6l1.2-1.2a2 2 0 0 1 2.1-.4c.9.3 1.8.5 2.8.6a2 2 0 0 1 1.8 2.1z"/></svg>
                        <div>
                            <h3>{{ __('Phone') }}</h3>
                            <a href="tel:+237650945280">(+237) 650 945 280</a> / <a href="tel:+237691095590">691 095 590</a>
                        </div>
                    </div>

                    <div class="info-block">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true"><path d="M21 10c0 6-9 12-9 12s-9-6-9-12a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                        <div>
                            <h3>{{ __('Location') }}</h3>
                            <p>{{ __('Yaounde, Cameroon') }}</p>
                        </div>
                    </div>

                    <div class="topics-label">{{ __('We are glad to discuss') }}</div>
                    <div class="topics-list">
                        <span>{{ __('Digital Transformation') }}</span>
                        <span>{{ __('Enterprise Software') }}</span>
                        <span>{{ __('Artificial Intelligence') }}</span>
                        <span>{{ __('Digital Infrastructure') }}</span>
                        <span>{{ __('Strategic Partnerships') }}</span>
                        <span>{{ __('Product Development') }}</span>
                    </div>
                </div>

                <div class="form-panel">
                    <p class="form-lead">
                        {{ __('Share a few details about your organization and what you hope to build. The more context you give us, the more useful our first conversation will be.') }}
                    </p>

                    <form id="contactForm" method="post" action="mailto:contactdigitexia@gmail.com">
                        <div class="form-row">
                            <div class="form-field">
                                <label for="fullname">{{ __('Full name') }}</label>
                                <input type="text" id="fullname" name="fullname" placeholder="{{ __('Your name') }}" autocomplete="name" required>
                            </div>
                            <div class="form-field">
                                <label for="organization">{{ __('Organization') }}</label>
                                <input type="text" id="organization" name="organization" placeholder="{{ __('Company, institution or organization') }}" autocomplete="organization">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-field">
                                <label for="email">{{ __('Email') }}</label>
                                <input type="email" id="email" name="email" placeholder="you@organization.com" autocomplete="email" required>
                            </div>
                            <div class="form-field">
                                <label for="phone">{{ __('Phone') }}</label>
                                <input type="tel" id="phone" name="phone" placeholder="+237 6XX XXX XXX" autocomplete="tel">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-field full">
                                <label for="topic">{{ __('What would you like to discuss?') }}</label>
                                <select id="topic" name="topic">
                                    <option>{{ __('Digital Transformation') }}</option>
                                    <option>{{ __('Enterprise Software') }}</option>
                                    <option>{{ __('Artificial Intelligence') }}</option>
                                    <option>{{ __('Digital Infrastructure') }}</option>
                                    <option>{{ __('Technology Partnership') }}</option>
                                    <option>{{ __('Product Development') }}</option>
                                    <option>{{ __('Other') }}</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-field full">
                                <label for="message">{{ __('Tell us about your challenge and objectives') }}</label>
                                <textarea id="message" name="message" placeholder="{{ __('What are you trying to solve, and what would success look like?') }}" required></textarea>
                            </div>
                        </div>

                        <button type="submit" class="dx-btn dx-btn-primary form-submit">
                            {{ __('Start the Conversation') }}
                            <span class="dx-btn-arrow" aria-hidden="true">&rarr;</span>
                        </button>

                        <div class="response-note">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true"><circle cx="12" cy="12" r="9"/><path d="M12 8v4M12 16h.01"/></svg>
                            <p>{{ __('We review every inquiry carefully and respond to discuss the most appropriate next steps for your project.') }}</p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="dx-final-cta">
        <div class="dx-container dx-reveal">
            <div class="dx-eyebrow">{{ __('Let us collaborate') }}</div>
            <h2>{{ __('Let us build the future of digital innovation together') }}</h2>
            <p class="dx-cta-subheading">
                {{ __('Prefer to talk directly? Reach us by phone or email. We are accessible, and we would be glad to hear from you.') }}
            </p>
            <div class="dx-cta-buttons">
                <a href="tel:+237650945280" class="dx-btn dx-btn-primary">{{ __('Call (+237) 650 945 280') }}</a>
                <a href="mailto:contactdigitexia@gmail.com" class="dx-btn dx-btn-secondary">{{ __('Email DigiTexia') }}</a>
            </div>
        </div>
    </section>
</main>

@include('partials.v2.footer')
@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {
  const form = document.getElementById('contactForm');
  if (!form) return;

  form.addEventListener('submit', function (event) {
    event.preventDefault();

    const fullName = document.getElementById('fullname').value.trim();
    const organization = document.getElementById('organization').value.trim();
    const email = document.getElementById('email').value.trim();
    const phone = document.getElementById('phone').value.trim();
    const topic = document.getElementById('topic').value.trim();
    const message = document.getElementById('message').value.trim();

    const subject = @json(__('Project inquiry')) + ' - ' + (organization || fullName || 'DigiTexia website');
    const body = [
      @json(__('Name')) + ': ' + fullName,
      @json(__('Organization')) + ': ' + (organization || @json(__('Not specified'))),
      @json(__('Email')) + ': ' + email,
      @json(__('Phone')) + ': ' + (phone || @json(__('Not specified'))),
      @json(__('Topic')) + ': ' + topic,
      '',
      @json(__('Message')) + ':',
      message
    ].join('\n');

    window.location.href = 'mailto:contactdigitexia@gmail.com?subject=' + encodeURIComponent(subject) + '&body=' + encodeURIComponent(body);
  });
});
</script>
@endpush
