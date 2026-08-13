@extends('index')

@section('page_title', $project['title'] . ' | DigiTexia')
@section('digitexia_v2', true)

@push('styles')
<link rel="stylesheet" href="{{ asset('css/contact-v2.css') }}?v={{ filemtime(public_path('css/contact-v2.css')) }}">
<link rel="stylesheet" href="{{ asset('css/project-survey-v2.css') }}?v={{ filemtime(public_path('css/project-survey-v2.css')) }}">
@endpush

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
                    <h2>{{ __('Why this form exists') }}</h2>
                    <p>{{ __('This is not a commercial registration form. It helps DigiTexia understand real users, field constraints, priorities and deployment conditions before building the product.') }}</p>

                    <div class="topics-label">{{ __('What we want to learn') }}</div>
                    <div class="topics-list">
                        <span>{{ __('User needs') }}</span>
                        <span>{{ __('Operational problems') }}</span>
                        <span>{{ __('Deployment constraints') }}</span>
                        <span>{{ __('Expected features') }}</span>
                        <span>{{ __('Pilot readiness') }}</span>
                    </div>
                </div>

                <div class="form-panel">
                    <p class="form-lead">{{ __('Fill in the form below. The information will help us design a better solution and identify the right pilot conditions.') }}</p>

                    @if (session('survey_success'))
                        <div class="contact-alert contact-alert-success">{{ session('survey_success') }}</div>
                    @endif

                    @if ($errors->any())
                        <div class="contact-alert contact-alert-error">{{ __('Please check the form and try again.') }}</div>
                    @endif

                    <form method="post" action="{{ route('project-survey.store', $project['slug']) }}">
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
                                <input id="phone" name="phone" value="{{ old('phone') }}" autocomplete="tel">
                                @error('phone')<span class="field-error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-field">
                                <label for="organization">{{ __('Organization') }}</label>
                                <input id="organization" name="organization" value="{{ old('organization') }}" autocomplete="organization">
                                @error('organization')<span class="field-error">{{ $message }}</span>@enderror
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-field">
                                <label for="role">{{ __('Role or function') }}</label>
                                <input id="role" name="role" value="{{ old('role') }}">
                                @error('role')<span class="field-error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-field">
                                <label for="participant_type">{{ __('Participant type') }}</label>
                                <select id="participant_type" name="participant_type" required>
                                    @foreach ([__('Healthcare professional'), __('Clinic or hospital manager'), __('Patient or caregiver'), __('NGO or public actor'), __('Technology partner'), __('Other')] as $option)
                                        <option value="{{ $option }}" @selected(old('participant_type') === $option)>{{ $option }}</option>
                                    @endforeach
                                </select>
                                @error('participant_type')<span class="field-error">{{ $message }}</span>@enderror
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-field">
                                <label for="city">{{ __('City') }}</label>
                                <input id="city" name="city" value="{{ old('city') }}">
                                @error('city')<span class="field-error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-field">
                                <label for="country">{{ __('Country') }}</label>
                                <input id="country" name="country" value="{{ old('country', 'Cameroon') }}">
                                @error('country')<span class="field-error">{{ $message }}</span>@enderror
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-field full">
                                <label for="sector">{{ __('Sector or activity') }}</label>
                                <input id="sector" name="sector" value="{{ old('sector') }}" placeholder="{{ __('Healthcare, insurance, public health, NGO, technology, other...') }}">
                                @error('sector')<span class="field-error">{{ $message }}</span>@enderror
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-field full">
                                <label for="current_challenges">{{ __('What problems should this project solve?') }}</label>
                                <textarea id="current_challenges" name="current_challenges">{{ old('current_challenges') }}</textarea>
                                @error('current_challenges')<span class="field-error">{{ $message }}</span>@enderror
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-field full">
                                <label for="expected_features">{{ __('Which features would be most useful?') }}</label>
                                <textarea id="expected_features" name="expected_features">{{ old('expected_features') }}</textarea>
                                @error('expected_features')<span class="field-error">{{ $message }}</span>@enderror
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-field full">
                                <label for="deployment_context">{{ __('Where and how could this solution be deployed?') }}</label>
                                <textarea id="deployment_context" name="deployment_context">{{ old('deployment_context') }}</textarea>
                                @error('deployment_context')<span class="field-error">{{ $message }}</span>@enderror
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-field full">
                                <label for="contact_preference">{{ __('Preferred follow-up') }}</label>
                                <select id="contact_preference" name="contact_preference">
                                    @foreach ([__('Email'), __('Phone call'), __('WhatsApp'), __('No follow-up needed')] as $option)
                                        <option value="{{ $option }}" @selected(old('contact_preference') === $option)>{{ $option }}</option>
                                    @endforeach
                                </select>
                                @error('contact_preference')<span class="field-error">{{ $message }}</span>@enderror
                            </div>
                        </div>

                        <label class="survey-consent">
                            <input type="checkbox" name="consent" value="1" required @checked(old('consent'))>
                            <span>{{ __('I agree that DigiTexia may store my answers and contact me about this project research.') }}</span>
                        </label>
                        @error('consent')<span class="field-error">{{ $message }}</span>@enderror

                        <button type="submit" class="dx-btn dx-btn-primary form-submit">
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
@endsection
