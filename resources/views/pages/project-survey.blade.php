@extends('index')

@section('page_title', $project['title'] . ' | DigiTexia')
@section('digitexia_v2', true)

@push('styles')
<link rel="stylesheet" href="{{ asset('css/contact-v2.css') }}?v={{ filemtime(public_path('css/contact-v2.css')) }}">
<link rel="stylesheet" href="{{ asset('css/project-survey-v2.css') }}?v={{ filemtime(public_path('css/project-survey-v2.css')) }}">
@endpush

@php
    $centralAfricanCountries = [
        ['country' => 'Cameroon', 'code' => '+237'],
        ['country' => 'Central African Republic', 'code' => '+236'],
        ['country' => 'Chad', 'code' => '+235'],
        ['country' => 'Congo', 'code' => '+242'],
        ['country' => 'Democratic Republic of the Congo', 'code' => '+243'],
        ['country' => 'Equatorial Guinea', 'code' => '+240'],
        ['country' => 'Gabon', 'code' => '+241'],
        ['country' => 'Sao Tome and Principe', 'code' => '+239'],
    ];

    $oldCountry = old('country', 'Cameroon');
    $selectedCountry = collect($centralAfricanCountries)->firstWhere('country', $oldCountry) ?: $centralAfricanCountries[0];
    $oldPhoneCode = old('phone_country_code', $selectedCountry['code']);

    $sectors = [
        __('Home services'),
        __('Maintenance and repairs'),
        __('Cleaning services'),
        __('Personal care services'),
        __('Logistics and delivery'),
        __('Events and hospitality'),
        __('Corporate support services'),
        __('Other'),
    ];
@endphp

@section('fullpage')
@include('partials.v2.header')

<main class="dx-contact dx-survey">
    <section class="page-hero">
        <div class="dx-blueprint"></div>
        <div class="dx-container dx-reveal">
            <div class="dx-eyebrow">{{ __($project['eyebrow']) }}</div>
            <h1>{{ __($project['headline']) }}</h1>
            <p class="page-hero-subtitle">{{ __($project['intro']) }}</p>
        </div>
    </section>

    <section class="dx-section" id="survey-form">
        <div class="dx-container">
            <div class="contact-grid dx-reveal">
                <div class="info-panel">
                    <h2>{{ __('About Flexicare') }}</h2>
                    <p>{{ __('FlexiCare helps households connect with trusted care and domestic professionals through a structured digital experience.') }}</p>
                    <p>{{ __('It supports mission management, service tracking, secure payments, performance evaluation and the professionalization of independent workers.') }}</p>

                    <div class="topics-label">{{ __('Flexicare focus areas') }}</div>
                    <div class="topics-list">
                        <span>{{ __('Qualified providers') }}</span>
                        <span>{{ __('Mission management') }}</span>
                        <span>{{ __('Service tracking') }}</span>
                        <span>{{ __('Secure payments') }}</span>
                        <span>{{ __('Performance evaluation') }}</span>
                    </div>
                </div>

                <div class="form-panel">
                    <p class="form-lead">{{ __('Answer a few questions about how you request, provide, manage or supervise services today.') }}</p>

                    <form method="post" action="{{ route('project-survey.store', $project['slug']) }}" data-survey-form>
                        @csrf

                        <div class="form-row">
                            <div class="form-field">
                                <label for="full_name">{{ __('Full name') }}</label>
                                <input id="full_name" name="full_name" value="{{ old('full_name') }}" required autocomplete="name">
                                @error('full_name')<span class="field-error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-field">
                                <label for="email">{{ __('Email') }}</label>
                                <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email">
                                @error('email')<span class="field-error">{{ $message }}</span>@enderror
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-field">
                                <label for="phone">{{ __('Phone') }}</label>
                                <div class="phone-field">
                                    <select id="phone_country_code" name="phone_country_code" required data-phone-code>
                                        @foreach ($centralAfricanCountries as $item)
                                            <option value="{{ $item['code'] }}" data-country="{{ $item['country'] }}" @selected($oldPhoneCode === $item['code'])>
                                                {{ $item['code'] }} {{ $item['country'] }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <input id="phone" name="phone" value="{{ old('phone') }}" autocomplete="tel" required>
                                </div>
                                @error('phone_country_code')<span class="field-error">{{ $message }}</span>@enderror
                                @error('phone')<span class="field-error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-field">
                                <label for="organization">{{ __('Organization') }}</label>
                                <input id="organization" name="organization" value="{{ old('organization') }}" autocomplete="organization" required>
                                @error('organization')<span class="field-error">{{ $message }}</span>@enderror
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-field">
                                <label for="role">{{ __('Role or function') }}</label>
                                <input id="role" name="role" value="{{ old('role') }}" required>
                                @error('role')<span class="field-error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-field">
                                <label for="participant_type">{{ __('Participant type') }}</label>
                                <select id="participant_type" name="participant_type" required>
                                    @foreach ([__('Company or organization'), __('Individual client'), __('Independent service provider'), __('Service agency'), __('Technology or payment partner'), __('Other')] as $option)
                                        <option value="{{ $option }}" @selected(old('participant_type') === $option)>{{ $option }}</option>
                                    @endforeach
                                </select>
                                @error('participant_type')<span class="field-error">{{ $message }}</span>@enderror
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-field">
                                <label for="country">{{ __('Country') }}</label>
                                <select id="country" name="country" required data-country>
                                    @foreach ($centralAfricanCountries as $item)
                                        <option value="{{ $item['country'] }}" data-code="{{ $item['code'] }}" @selected(old('country', 'Cameroon') === $item['country'])>{{ __($item['country']) }}</option>
                                    @endforeach
                                </select>
                                @error('country')<span class="field-error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-field">
                                <label for="city">{{ __('City') }}</label>
                                <input id="city" name="city" value="{{ old('city') }}" required>
                                @error('city')<span class="field-error">{{ $message }}</span>@enderror
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-field full">
                                <label for="sector">{{ __('Sector or activity') }}</label>
                                <select id="sector" name="sector" required>
                                    <option value="">{{ __('Select a sector') }}</option>
                                    @foreach ($sectors as $sector)
                                        <option value="{{ $sector }}" @selected(old('sector') === $sector)>{{ $sector }}</option>
                                    @endforeach
                                </select>
                                @error('sector')<span class="field-error">{{ $message }}</span>@enderror
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-field full">
                                <label for="current_challenges">{{ __('What are the main difficulties when requesting, delivering or supervising services today?') }}</label>
                                <textarea id="current_challenges" name="current_challenges" required>{{ old('current_challenges') }}</textarea>
                                @error('current_challenges')<span class="field-error">{{ $message }}</span>@enderror
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-field full">
                                <label for="expected_features">{{ __('Which FlexiCare features would be most useful: professional profiles, verification, availability, messaging, service requests, ratings or reviews?') }}</label>
                                <textarea id="expected_features" name="expected_features" required>{{ old('expected_features') }}</textarea>
                                @error('expected_features')<span class="field-error">{{ $message }}</span>@enderror
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-field full">
                                <label for="deployment_context">{{ __('Where could FlexiCare be deployed first: households, families, agencies, institutions or local communities?') }}</label>
                                <textarea id="deployment_context" name="deployment_context" required>{{ old('deployment_context') }}</textarea>
                                @error('deployment_context')<span class="field-error">{{ $message }}</span>@enderror
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-field full">
                                <label for="contact_preference">{{ __('Preferred follow-up') }}</label>
                                <select id="contact_preference" name="contact_preference" required>
                                    @foreach ([__('Email'), __('Phone call'), __('WhatsApp'), __('No follow-up needed')] as $option)
                                        <option value="{{ $option }}" @selected(old('contact_preference') === $option)>{{ $option }}</option>
                                    @endforeach
                                </select>
                                @error('contact_preference')<span class="field-error">{{ $message }}</span>@enderror
                            </div>
                        </div>

                        <label class="survey-consent">
                            <input type="checkbox" name="consent" value="1" required @checked(old('consent')) data-consent>
                            <span>{{ __('I agree that DigiTexia may store my answers and contact me about this project research.') }}</span>
                        </label>
                        @error('consent')<span class="field-error">{{ $message }}</span>@enderror

                        <button type="submit" class="dx-btn dx-btn-primary form-submit" data-submit disabled>
                            {{ __('Submit registration') }}
                            <span class="dx-btn-arrow" aria-hidden="true">&rarr;</span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>

@include('partials.v2.footer')

@if (session('survey_success') || $errors->any())
    <div class="dx-toast-wrap" id="surveyToast" role="alert" aria-live="assertive" data-dx-toast>
        <div class="dx-toast {{ session('survey_success') ? 'success' : 'error' }}">
            <div class="dx-toast-icon" aria-hidden="true">
                <i class="ti {{ session('survey_success') ? 'ti-check' : 'ti-alert-triangle' }}"></i>
            </div>
            <div class="dx-toast-content">
                <strong>{{ session('survey_success') ? __('Registration saved') : __('Registration error') }}</strong>
                <span>{{ session('survey_success') ?: ($errors->first() ?: __('Please fill in all required fields.')) }}</span>
            </div>
            <button type="button" class="dx-toast-close" aria-label="{{ __('Dismiss notification') }}" data-dx-toast-close>&times;</button>
        </div>
    </div>
@endif
@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {
    var form = document.querySelector('[data-survey-form]');
    if (!form) return;

    var country = form.querySelector('[data-country]');
    var phoneCode = form.querySelector('[data-phone-code]');
    var consent = form.querySelector('[data-consent]');
    var submit = form.querySelector('[data-submit]');

    function syncPhoneCodeFromCountry() {
        if (!country || !phoneCode) return;
        var selected = country.options[country.selectedIndex];
        var code = selected ? selected.getAttribute('data-code') : null;
        if (code) {
            phoneCode.value = code;
        }
    }

    function syncCountryFromPhoneCode() {
        if (!country || !phoneCode) return;
        var selected = phoneCode.options[phoneCode.selectedIndex];
        var countryName = selected ? selected.getAttribute('data-country') : null;
        if (countryName) {
            country.value = countryName;
        }
    }

    function updateSubmitState() {
        if (!submit || !consent) return;
        submit.disabled = !consent.checked;
    }

    if (country) {
        country.addEventListener('change', syncPhoneCodeFromCountry);
    }

    if (phoneCode) {
        phoneCode.addEventListener('change', syncCountryFromPhoneCode);
    }

    if (consent) {
        consent.addEventListener('change', updateSubmitState);
    }

    form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
            event.preventDefault();
            form.reportValidity();
            window.dispatchEvent(new CustomEvent('dx:toast', {
                detail: {
                    type: 'error',
                    title: @json(__('Registration error')),
                    message: @json(__('Please fill in all required fields.'))
                }
            }));
            return;
        }

        if (!consent.checked) {
            event.preventDefault();
            window.dispatchEvent(new CustomEvent('dx:toast', {
                detail: {
                    type: 'error',
                    title: @json(__('Registration error')),
                    message: @json(__('Please accept the consent checkbox before submitting.'))
                }
            }));
        }
    });

    updateSubmitState();
});
</script>
@endpush
