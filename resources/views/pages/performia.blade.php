@extends('index')

@section('page_title', __('Perfomia | Work management platform for organizations'))
@section('digitexia_v2', true)

@push('styles')
<link rel="stylesheet" href="{{ asset('css/performia-v2.css') }}?v={{ filemtime(public_path('css/performia-v2.css')) }}">
@endpush

@php
    $demoUrl = url('/contact-us');
    $loginUrl = '#performia-login-placeholder';

    $assets = [
        'logo' => 'images/performia/perfomia-logo.png',
        'hero' => 'images/performia/perfomia-hero-dashboard.png',
        'dashboard' => 'images/performia/perfomia-dashboard.png',
        'tasks' => 'images/performia/perfomia-tasks.png',
        'taskDetail' => 'images/performia/perfomia-task-detail.png',
        'couriers' => 'images/performia/perfomia-couriers.png',
        'courierDetail' => 'images/performia/perfomia-courier-detail.png',
        'evaluations' => 'images/performia/perfomia-evaluations.png',
        'mobile' => 'images/performia/perfomia-mobile.png',
    ];

    $uses = [
        [
            'title' => __('Projects and tasks'),
            'text' => __('Track projects, progress, teams, deliverables, tasks, subtasks, comments, files and reports from one workspace.'),
            'items' => [__('Project follow-up'), __('Task boards'), __('Files and comments'), __('Progress reports')],
        ],
        [
            'title' => __('Mail and document flows'),
            'text' => __('Register incoming and outgoing mail, transmit it to the right people and follow the treatment path until closure.'),
            'items' => [__('Incoming mail'), __('Outgoing mail'), __('Transmission tracking'), __('Processing history')],
        ],
        [
            'title' => __('Teams, evaluations and reports'),
            'text' => __('Centralize job descriptions, professional evaluations, productivity indicators, dashboards and organization settings.'),
            'items' => [__('Job descriptions'), __('Evaluations'), __('Productivity'), __('Dashboards')],
        ],
    ];

    $roles = [
        [
            'title' => __('Managers keep execution visible.'),
            'text' => __('Managers follow projects, task delays, mail treatment, team workload and evaluation campaigns from a role-based dashboard.'),
        ],
        [
            'title' => __('Collaborators know what to do next.'),
            'text' => __('Collaborators access assigned tasks, comments, files, mail actions and evaluation steps according to their permissions.'),
        ],
    ];

    $faqs = [
        [__('Is Perfomia only for performance reviews?'), __('No. Perfomia covers work management, projects, tasks, mail tracking, evaluations, reports and organization settings.')],
        [__('Does every user see the same information?'), __('No. Visible information and available actions depend on the user role and organization permissions.')],
        [__('Is there a mobile application?'), __('Yes. Perfomia includes a web application and a mobile application for teams that need access beyond the office.')],
        [__('Can Perfomia be used in French and English?'), __('Yes. The interface can be used in French or English.')],
    ];

    $shots = [
        ['key' => 'dashboard', 'label' => __('Dashboard'), 'alt' => __('Perfomia dashboard screenshot')],
        ['key' => 'tasks', 'label' => __('Tasks board'), 'alt' => __('Perfomia tasks board screenshot')],
        ['key' => 'taskDetail', 'label' => __('Task detail'), 'alt' => __('Perfomia task detail screenshot')],
        ['key' => 'couriers', 'label' => __('Mail list'), 'alt' => __('Perfomia mail list screenshot')],
        ['key' => 'courierDetail', 'label' => __('Mail treatment'), 'alt' => __('Perfomia mail treatment screenshot')],
        ['key' => 'evaluations', 'label' => __('Evaluations'), 'alt' => __('Perfomia evaluations screenshot')],
        ['key' => 'mobile', 'label' => __('Mobile application'), 'alt' => __('Perfomia mobile application screenshot')],
    ];

@endphp

@section('fullpage')
@include('partials.v2.header')

<main class="perfomia-page">
    <section class="perfomia-hero">
        <div class="dx-container">
            <nav class="perfomia-breadcrumb" aria-label="{{ __('Solutions') }}"><a href="{{ url('/solutions') }}">{{ __('Solutions') }}</a><span aria-hidden="true">/</span><span>Perfomia</span></nav>
            <div class="perfomia-hero-grid">
            <div class="perfomia-hero-copy dx-reveal">
                <div class="perfomia-logo-line">
                    @if (file_exists(public_path($assets['logo'])))
                        <img src="{{ asset($assets['logo']) }}" alt="Perfomia" class="perfomia-logo-img">
                    @else
                        <div class="perfomia-logo-placeholder">{{ __('Perfomia logo placeholder') }}</div>
                    @endif
                    <span>{{ __('Web and mobile work management platform') }}</span>
                </div>

                <h1>{{ __('Centralize work, mail and team performance in one platform.') }}</h1>
                <p class="perfomia-lead">
                    {{ __('Perfomia helps organizations manage projects, tasks, mail flows, professional evaluations, productivity and reports from a role-based workspace available on web and mobile.') }}
                </p>

                <div class="perfomia-actions">
                    <a href="{{ $demoUrl }}" class="dx-btn dx-btn-primary">{{ __('Request a demonstration') }} <span class="dx-btn-arrow" aria-hidden="true">&rarr;</span></a>
                    <a href="{{ $loginUrl }}" class="dx-btn dx-btn-secondary">{{ __('Access the platform') }}</a>
                </div>
                <div class="perfomia-hero-uses" aria-label="{{ __('Main uses') }}">
                    @foreach ([__('Projects and tasks'), __('Mail and document flows'), __('Teams, evaluations and reports')] as $point)
                        <span>{{ $point }}</span>
                    @endforeach
                </div>
            </div>

            <div class="perfomia-hero-media dx-reveal">
                @if (file_exists(public_path($assets['dashboard'])))
                    <img src="{{ asset($assets['dashboard']) }}" alt="{{ __('Perfomia enterprise dashboard screenshot') }}" fetchpriority="high">
                @else
                    <div class="perfomia-image-placeholder">
                        <span>{{ __('Real Perfomia dashboard screenshot') }}</span>
                        <strong>{{ $assets['dashboard'] }}</strong>
                        <small>1600 x 1000</small>
                    </div>
                @endif
            </div>
            </div>
        </div>
    </section>

    <section class="perfomia-facts" aria-label="{{ __('Perfomia') }}">
        <div class="dx-container perfomia-facts-grid">
            <div><strong>3</strong><span>{{ __('Main uses') }}</span></div>
            <div><strong>2</strong><span>{{ __('Apps') }} : {{ __('Web application') }} / {{ __('Mobile application') }}</span></div>
            <div><strong>2</strong><span>{{ __('Languages') }} : FR / EN</span></div>
        </div>
    </section>

    <section class="perfomia-section">
        <div class="dx-container">
            <div class="perfomia-section-head dx-reveal">
                <div class="dx-eyebrow">{{ __('Main uses') }}</div>
                <h2>{{ __('What Perfomia centralizes') }}</h2>
                <p>{{ __('The platform brings daily execution, administrative flows and performance follow-up into a single operational environment.') }}</p>
            </div>

            <div class="perfomia-use-grid dx-reveal">
                @foreach ($uses as $use)
                    <article class="perfomia-use-card">
                        <h3>{{ $use['title'] }}</h3>
                        <p>{{ $use['text'] }}</p>
                        <div class="perfomia-chip-list">
                            @foreach ($use['items'] as $item)
                                <span>{{ $item }}</span>
                            @endforeach
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="perfomia-section perfomia-roles-section">
        <div class="dx-container">
            <div class="perfomia-section-head dx-reveal">
                <div class="dx-eyebrow">{{ __('Role-based workspaces') }}</div>
                <h2>{{ __('Each role works from the right level of information.') }}</h2>
                <p>{{ __('Perfomia adapts what people see and what they can do according to their responsibilities inside the organization.') }}</p>
            </div>

            <div class="perfomia-role-grid dx-reveal">
                @foreach ($roles as $index => $role)
                    <article class="perfomia-role-card">
                        <div class="perfomia-role-image">
                            <img src="{{ asset($assets[$index === 0 ? 'dashboard' : 'tasks']) }}" alt="{{ $index === 0 ? __('Perfomia dashboard screenshot') : __('Perfomia tasks board screenshot') }}" loading="lazy">
                        </div>
                        <div class="perfomia-role-body">
                        <h3>{{ $role['title'] }}</h3>
                        <p>{{ $role['text'] }}</p>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="perfomia-section" id="screenshots">
        <div class="dx-container">
            <div class="perfomia-section-head dx-reveal">
                <div class="dx-eyebrow">{{ __('Web and mobile preview') }}</div>
                <h2>{{ __('A clear view of the product experience.') }}</h2>
                <p>{{ __('Explore the dashboard, task management, mail tracking, evaluations and mobile access through real Perfomia screens.') }}</p>
            </div>

            <div class="perfomia-showcase dx-reveal" data-perfomia-gallery>
                <div class="perfomia-tabs" role="tablist" aria-label="{{ __('Web and mobile preview') }}">
                    @foreach ($shots as $index => $shot)
                        <button type="button" role="tab" id="perfomia-tab-{{ $index }}" aria-controls="perfomia-panel-{{ $index }}" aria-selected="{{ $index === 0 ? 'true' : 'false' }}" tabindex="{{ $index === 0 ? '0' : '-1' }}">{{ $shot['label'] }}</button>
                    @endforeach
                </div>
                @foreach ($shots as $index => $shot)
                    <div class="perfomia-panel{{ $shot['key'] === 'mobile' ? ' is-mobile' : '' }}" role="tabpanel" id="perfomia-panel-{{ $index }}" aria-labelledby="perfomia-tab-{{ $index }}" tabindex="0" @if($index !== 0) hidden @endif>
                        @if (file_exists(public_path($assets[$shot['key']])))
                            <img src="{{ asset($assets[$shot['key']]) }}" alt="{{ $shot['alt'] }}" loading="lazy">
                        @else
                            <div class="perfomia-image-placeholder"><strong>{{ $assets[$shot['key']] }}</strong></div>
                        @endif
                        <p>{{ $shot['label'] }} · {{ $shot['key'] === 'mobile' ? __('Mobile application') : __('Web application') }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="perfomia-section perfomia-section-soft">
        <div class="dx-container">
            <div class="perfomia-section-head dx-reveal">
                <div class="dx-eyebrow">{{ __('FAQ') }}</div>
                <h2>{{ __('Questions leaders usually ask first') }}</h2>
            </div>

            <div class="perfomia-faq dx-reveal">
                @foreach ($faqs as $faq)
                    <details>
                        <summary>{{ $faq[0] }}</summary>
                        <p>{{ $faq[1] }}</p>
                    </details>
                @endforeach
            </div>
        </div>
    </section>

    <section class="perfomia-final-cta">
        <div class="dx-container perfomia-cta-grid dx-reveal">
            <div class="perfomia-cta-copy">
            <div class="dx-eyebrow">{{ __('Request a demo') }}</div>
            <h2>{{ __('See how Perfomia can fit your organization.') }}</h2>
            <p>{{ __('A short demonstration can show how projects, tasks, mail flows, evaluations and reports come together in one workspace.') }}</p>
            <div class="perfomia-actions">
                <a href="{{ $demoUrl }}" class="dx-btn dx-btn-primary">{{ __('Request a demonstration') }}</a>
                <a href="{{ $loginUrl }}" class="dx-btn dx-btn-secondary">{{ __('Access the platform') }}</a>
            </div>
            <div id="performia-login-placeholder" class="perfomia-contact-note">
                {{ __('Commercial contact and platform access can be connected to the final Perfomia environment.') }}
            </div>
            </div>
            <div class="perfomia-cta-visual" aria-hidden="true">
                <div class="perfomia-cta-panel">
                    <strong>Perfomia</strong>
                    <span>{{ __('Web and mobile work management platform') }}</span>
                </div>
            </div>
        </div>
    </section>
</main>

@include('partials.v2.footer')
@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {
  var gallery = document.querySelector('[data-perfomia-gallery]');
  if (gallery) {
    var tabs = Array.from(gallery.querySelectorAll('[role="tab"]'));
    var panels = Array.from(gallery.querySelectorAll('[role="tabpanel"]'));
    function activate(index) {
      tabs.forEach(function (tab, i) {
        tab.setAttribute('aria-selected', i === index ? 'true' : 'false');
        tab.tabIndex = i === index ? 0 : -1;
        panels[i].hidden = i !== index;
      });
      tabs[index].focus();
    }
    tabs.forEach(function (tab, index) {
      tab.addEventListener('click', function () { activate(index); });
      tab.addEventListener('keydown', function (event) {
        var next = event.key === 'ArrowRight' ? (index + 1) % tabs.length : event.key === 'ArrowLeft' ? (index - 1 + tabs.length) % tabs.length : event.key === 'Home' ? 0 : event.key === 'End' ? tabs.length - 1 : -1;
        if (next !== -1) { event.preventDefault(); activate(next); }
      });
    });
  }
  var observer = new IntersectionObserver(function (entries) {
    entries.forEach(function (entry) {
      if (entry.isIntersecting) {
        entry.target.classList.add('in-view');
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.12 });

  document.querySelectorAll('.dx-reveal').forEach(function (element) {
    observer.observe(element);
  });
});
</script>
@endpush
