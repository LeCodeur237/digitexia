@extends('index')

@section('page_title', __('DigiTexia | Contact'))
@section('digitexia_v2', true)

@push('styles')
<link rel="stylesheet" href="{{ asset('css/contact-v2.css') }}?v={{ filemtime(public_path('css/contact-v2.css')) }}">
@endpush

@section('fullpage')
@include('partials.v2.header')

<main class="dx-contact">
    <section class="page-hero contact-hero" id="contact-form">
        <div class="dx-blueprint"></div>
        <div class="dx-container contact-grid dx-reveal">
            <div class="info-panel">
                    <div class="dx-eyebrow">{{ __('Contact') }}</div>
                    <h1>{{ __('Every successful digital transformation starts with a conversation.') }}</h1>
                    <p class="page-hero-subtitle">
                        {{ __('Whether you are starting a new initiative or improving one already underway, we welcome the chance to hear about it. Tell us about your organization, your challenge and where you want to go.') }}
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

            </div>

            <div class="form-panel">
                    <h2>{{ __('Start the Conversation') }}</h2>
                    <p class="form-lead">
                        {{ __('Share a few details about your organization and what you hope to build. The more context you give us, the more useful our first conversation will be.') }}
                    </p>

                    @if (session('contact_success'))
                        <div class="contact-alert contact-alert-success">
                            {{ session('contact_success') }}
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="contact-alert contact-alert-error">
                            {{ __('Please check the form and try again.') }}
                        </div>
                    @endif

                    <form id="contactForm" method="post" action="{{ route('contact.send') }}">
                        @csrf
                        <div class="form-row">
                            <div class="form-field">
                                <label for="fullname">{{ __('Full name') }}</label>
                                <input type="text" id="fullname" name="fullname" value="{{ old('fullname') }}" placeholder="{{ __('Your name') }}" autocomplete="name" required>
                                @error('fullname')<span class="field-error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-field">
                                <label for="organization">{{ __('Organization') }}</label>
                                <input type="text" id="organization" name="organization" value="{{ old('organization') }}" placeholder="{{ __('Company, institution or organization') }}" autocomplete="organization">
                                @error('organization')<span class="field-error">{{ $message }}</span>@enderror
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-field">
                                <label for="email">{{ __('Email') }}</label>
                                <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="you@organization.com" autocomplete="email" required>
                                @error('email')<span class="field-error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-field">
                                <label for="phone">{{ __('Phone') }}</label>
                                <input type="tel" id="phone" name="phone" value="{{ old('phone') }}" placeholder="+237 6XX XXX XXX" autocomplete="tel">
                                @error('phone')<span class="field-error">{{ $message }}</span>@enderror
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-field full">
                                <label for="topic">{{ __('What would you like to discuss?') }}</label>
                                <select id="topic" name="topic">
                                    @foreach ([__('Digital Transformation'), __('Enterprise Software'), __('Artificial Intelligence'), __('Digital Infrastructure'), __('Technology Partnership'), __('Product Development'), __('Other')] as $topic)
                                        <option @selected(old('topic') === $topic)>{{ $topic }}</option>
                                    @endforeach
                                </select>
                                @error('topic')<span class="field-error">{{ $message }}</span>@enderror
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-field full">
                                <label for="message">{{ __('Tell us about your challenge and objectives') }}</label>
                                <textarea id="message" name="message" placeholder="{{ __('What are you trying to solve, and what would success look like?') }}" required>{{ old('message') }}</textarea>
                                @error('message')<span class="field-error">{{ $message }}</span>@enderror
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
    </section>

    <section class="dx-section contact-topics-section">
        <div class="dx-container contact-topics-grid dx-reveal">
            <div class="contact-topics-copy">
                <h2>{{ __('We are glad to discuss') }}</h2>
                <div class="topics-list">
                    <span>{{ __('Digital Transformation') }}</span>
                    <span>{{ __('Enterprise Software') }}</span>
                    <span>{{ __('Artificial Intelligence') }}</span>
                    <span>{{ __('Digital Infrastructure') }}</span>
                    <span>{{ __('Strategic Partnerships') }}</span>
                    <span>{{ __('Product Development') }}</span>
                </div>
                <div class="contact-discuss-actions">
                    <a href="mailto:anne.dzou@digitexia.org" class="dx-btn dx-btn-primary">{{ __('Discuss with Anne') }}</a>
                    <a href="mailto:eraste.dzou@digitexia.org" class="dx-btn dx-btn-secondary">{{ __('Discuss with Lucien') }}</a>
                </div>
            </div>
            <div class="contact-map-visual">
                <img src="{{ asset('images/carte-contact.png') }}" alt="{{ __('Yaounde, Cameroon') }}" loading="lazy">
            </div>
        </div>
    </section>

    <section class="dx-final-cta contact-final-cta" id="contact-cta">
        <div class="dx-container contact-final-grid dx-reveal">
            <div class="contact-cta-copy">
                <div class="dx-eyebrow">{{ __('Let us talk') }}</div>
                <h2>{{ __('Let us build the right digital solution together') }}</h2>
                <p class="dx-cta-subheading">{{ __('The best digital solutions start with a conversation, not a proposal.') }}</p>
                <p class="dx-cta-description">{{ __('Tell us about your operational challenge. We will assess it directly and share a practical path forward, without obligation.') }}</p>
                <div class="dx-cta-buttons">
                    <a href="tel:+237650945280" class="dx-btn dx-btn-primary">{{ __('Call (+237) 650 945 280') }}</a>
                    <a href="#contactForm" class="dx-btn dx-btn-secondary">{{ __('Start a Conversation') }}</a>
                </div>
            </div>
            <div class="contact-cta-visual" aria-hidden="true">
                <div class="contact-cta-grid-lines"></div>
                <div class="contact-cta-panel">
                    <strong>{{ __('Long-Term Partnership') }}</strong>
                    <p>{{ __('The best digital solutions start with a conversation, not a proposal.') }}</p>
                </div>
            </div>
        </div>
    </section>
</main>

@include('partials.v2.footer')
@endsection
