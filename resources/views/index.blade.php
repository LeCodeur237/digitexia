<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('page_title', 'DigiTexia | Transformation digitale des entreprises')</title>
    <link rel="shortcut icon" href="{{ asset('logo/icon.png') }}" type="image/x-icon">
    <style>
        :root {
            --bg-primary: #0b1220;
            --bg-secondary: #101827;
            --bg-tertiary: #151d2d;
            --card-bg: rgba(14, 20, 34, .92);
            --surface-bg: rgba(255, 255, 255, .04);
            --surface-strong: rgba(255, 255, 255, .08);
            --surface-soft: rgba(255, 255, 255, .03);
            --text-main: #f8fafc;
            --text-main-rgb: 248, 250, 252;
            --text-muted: rgba(248, 250, 252, .72);
            --text-soft: rgba(248, 250, 252, .56);
            --border-color: rgba(255, 255, 255, .08);
            --border-strong: rgba(255, 255, 255, .14);
            --shadow-elev: 0 20px 60px rgba(0, 0, 0, .28);
            --shadow-soft: 0 12px 30px rgba(0, 0, 0, .22);
            --shadow-lg: 0 30px 100px rgba(0, 0, 0, .32);
            --shadow-toast: 0 18px 48px rgba(0, 0, 0, .32);
            --overlay: rgba(3, 7, 18, .72);
            --accent: #004aac;
            --accent-lt: #0064d8;
            --accent-soft: rgba(0, 74, 172, .12);
            --accent-dim: rgba(0, 74, 172, .08);
            --accent-border: rgba(0, 74, 172, .22);
            --accent-fg: #bfdbfe;
            --on-accent: #ffffff;
            --success: #00bf63;
            --success-soft: rgba(0, 191, 99, .1);
            --success-border: rgba(0, 191, 99, .18);
            --success-fg: #bbf7d0;
            --orange: #f59e0b;
            --danger: #dc2626;
            --danger-soft: rgba(220, 38, 38, .12);
            --danger-border: rgba(220, 38, 38, .28);
            --danger-fg: #fca5a5;
            --input-bg: rgba(255, 255, 255, .04);
            --input-border: rgba(255, 255, 255, .12);
            --input-shadow: 0 0 0 3px rgba(18, 70, 240, .12);
            --white: var(--text-main);
            --ink: var(--bg-primary);
            --ink-2: var(--bg-secondary);
            --ink-3: var(--bg-tertiary);
            --bdr: var(--border-color);
            --muted: var(--text-muted);
            --muted-lt: var(--text-soft);
            --blue: var(--accent);
            --blue-lt: var(--accent-lt);
            --blue-dim: var(--accent-dim);
            --blue-bdr: var(--accent-border);
            --green: var(--success);
            --green-dim: var(--success-soft);
            --green-bdr: var(--success-border);
        }

        html.light-mode, body.light-mode {
            --bg-primary: #f5f7fb;
            --bg-secondary: #ffffff;
            --bg-tertiary: #f8fafc;
            --card-bg: rgba(255, 255, 255, .94);
            --surface-bg: rgba(248, 250, 252, .96);
            --surface-strong: rgba(15, 23, 42, .05);
            --surface-soft: rgba(15, 23, 42, .03);
            --text-main: #0f172a;
            --text-main-rgb: 15, 23, 42;
            --text-muted: rgba(15, 23, 42, .72);
            --text-soft: rgba(15, 23, 42, .58);
            --border-color: rgba(15, 23, 42, .08);
            --border-strong: rgba(15, 23, 42, .14);
            --shadow-elev: 0 20px 60px rgba(15, 23, 42, .08);
            --shadow-soft: 0 12px 30px rgba(15, 23, 42, .05);
            --shadow-lg: 0 30px 100px rgba(15, 23, 42, .12);
            --shadow-toast: 0 18px 48px rgba(15, 23, 42, .16);
            --overlay: rgba(15, 23, 42, .18);
            --accent-soft: rgba(0, 74, 172, .05);
            --accent-dim: rgba(0, 74, 172, .08);
            --accent-border: rgba(0, 74, 172, .18);
            --accent-fg: #1d4ed8;
            --on-accent: #ffffff;
            --success-soft: rgba(0, 191, 99, .1);
            --success-border: rgba(0, 191, 99, .18);
            --success-fg: #15803d;
            --orange: #f59e0b;
            --danger-soft: rgba(220, 38, 38, .1);
            --danger-border: rgba(220, 38, 38, .25);
            --danger-fg: #b91c1c;
            --input-bg: #f8fafc;
            --input-border: rgba(15, 23, 42, .14);
            --input-shadow: inset 0 1px 2px rgba(15, 23, 42, .04);
        }

        html, body {
            background: var(--bg-primary);
            color: var(--text-main);
        }

        body,
        body * {
            transition: all .3s ease;
        }

        .theme-toggle {
            position: fixed;
            right: 2rem;
            bottom: 2rem;
            z-index: 3000;
            width: 52px;
            height: 52px;
            border-radius: 999px;
            border: 1px solid var(--border-color);
            background: var(--card-bg);
            color: var(--text-main);
            box-shadow: var(--shadow-elev);
            display: grid;
            place-items: center;
            cursor: pointer;
            backdrop-filter: blur(16px);
        }

        body.light-mode .theme-toggle {
            box-shadow: none;
        }

        .theme-toggle .ti-sun {
            display: none;
        }

        body.light-mode .theme-toggle .ti-sun {
            display: inline-block;
        }

        body.light-mode .theme-toggle .ti-moon {
            display: none;
        }
    </style>
    <link rel="stylesheet" href="{{ asset('css/digitexiastyles.css') }}?v={{ filemtime(public_path('css/digitexiastyles.css')) }}">
    <link rel="stylesheet" href="{{ asset('css/mystyles.css') }}?v={{ filemtime(public_path('css/mystyles.css')) }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/tabler-icons.min.css">
    @hasSection('digitexia_v2')
        <link rel="stylesheet" href="{{ asset('css/theme-fixes.css') }}?v={{ filemtime(public_path('css/theme-fixes.css')) }}">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Big+Shoulders+Display:wght@500;600;700;800&family=IBM+Plex+Sans:wght@400;500;600;700&family=IBM+Plex+Mono:wght@400;500&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/digitexia-v2.css') }}?v={{ filemtime(public_path('css/digitexia-v2.css')) }}">
    @else
        @stack('styles')
        <link rel="stylesheet" href="{{ asset('css/theme-fixes.css') }}?v={{ filemtime(public_path('css/theme-fixes.css')) }}">
    @endif
    @hasSection('digitexia_v2')
        @stack('styles')
        <style>
            .dx-page :is(
                .dx-btn-primary,
                .dx-blog .featured-badge,
                .dx-home .step-number,
                .dx-why .pstep-number
            ),
            .dx-page :is(
                .dx-btn-primary,
                .dx-blog .featured-badge,
                .dx-home .step-number,
                .dx-why .pstep-number
            ) * {
                color: #ffffff !important;
            }
        </style>
    @endif
</head>

<body class="@hasSection('digitexia_v2') dx-page @endif">
    <script>
        (() => {
            const key = 'digitexia-theme';
            const saved = localStorage.getItem(key);
            const prefersLight = window.matchMedia('(prefers-color-scheme: light)').matches;
            const useLight = saved ? saved === 'light' : prefersLight;
            // Run early so theme variables and body-scoped fallbacks are aligned before content renders.
            document.documentElement.classList.toggle('light-mode', useLight);
            document.body.classList.toggle('light-mode', useLight);
        })();
    </script>
    @if (trim($__env->yieldContent('fullpage')))
        @yield('fullpage')
    @else
        @include('partials.v2.header')

        <main>
            @yield('contain')
        </main>

        @include('partials.v2.footer')
    @endif

    <script src="{{ asset('js/digitexiajs001.js') }}"></script>
    <script src="{{ asset('js/digitexiajs002.js') }}"></script>
    <script src="{{ asset('js/digitexiajs003.js') }}"></script>
    <script src="{{ asset('js/myjs.js') }}"></script>
    @hasSection('digitexia_v2')
        <script src="{{ asset('js/digitexia-v2.js') }}?v={{ filemtime(public_path('js/digitexia-v2.js')) }}"></script>
    @endif
    <button type="button" class="theme-toggle" aria-label="Toggle color theme" data-theme-toggle>
        <i class="ti ti-moon"></i>
        <i class="ti ti-sun"></i>
    </button>
    <script>
        (() => {
            const key = 'digitexia-theme';
            const root = document.documentElement;
            const body = document.body;
            const toggle = document.querySelector('[data-theme-toggle]');
            if (!toggle) return;

            const apply = (isLight) => {
                root.classList.toggle('light-mode', isLight);
                body.classList.toggle('light-mode', isLight);
                localStorage.setItem(key, isLight ? 'light' : 'dark');
                toggle.setAttribute('aria-pressed', String(isLight));
                toggle.setAttribute('aria-label', isLight ? 'Switch to dark theme' : 'Switch to light theme');
            };

            toggle.addEventListener('click', () => {
                apply(!root.classList.contains('light-mode'));
            });

            const saved = localStorage.getItem(key);
            const prefersLight = window.matchMedia('(prefers-color-scheme: light)').matches;
            const initialLight = saved ? saved === 'light' : prefersLight;
            apply(initialLight);
        })();
    </script>
    @stack('scripts')
</body>

</html>
