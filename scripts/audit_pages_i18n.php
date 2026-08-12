<?php

$root = dirname(__DIR__);

$pages = [
    'Header' => ['resources/views/partials/v2/header.blade.php'],
    'Footer' => ['resources/views/partials/v2/footer.blade.php'],
    'Home' => ['resources/views/pages/home.blade.php'],
    'The Problem' => ['resources/views/pages/problem.blade.php'],
    'Solutions' => ['resources/views/pages/solutions.blade.php'],
    'Solution Detail' => [
        'resources/views/pages/solution-detail.blade.php',
        'app/Http/Controllers/SolutionController.php',
    ],
    'Why Us' => ['resources/views/pages/why-us.blade.php'],
    'Projects' => ['resources/views/pages/projects.blade.php'],
    'Partners' => ['resources/views/pages/partners.blade.php'],
    'Blog' => ['resources/views/pages/blog.blade.php', 'resources/views/pages/blog-show.blade.php'],
    'Contact' => ['resources/views/pages/contact.blade.php'],
];

$locales = ['en', 'fr', 'es', 'it', 'zh'];
$translations = [];

foreach ($locales as $locale) {
    $path = $root . "/resources/lang/{$locale}.json";
    $json = json_decode(file_get_contents($path), true);
    if (!is_array($json)) {
        fwrite(STDERR, "Invalid JSON: {$path}\n");
        exit(1);
    }
    $translations[$locale] = $json;
}

$excludedExact = [
    'DigiTexia', 'AquaWatch AI', 'WastePay', 'MedTrace', 'Performia', 'Flexicare',
    'CREMIN-CAM', 'APEC', 'Light Group', 'LinkedIn', 'Facebook', 'EN', 'FR', 'ES', 'IT', 'ZH',
    'Email', 'Phone', 'Home', 'Blog', 'Contact', 'Projects', 'Solutions', 'Company', 'Partners',
    'CRM', 'ERP', 'KPI', 'KPIs', 'AI', 'IoT', 'CO2', 'CO₂', 'API', 'UX / UI',
];

function decode_key(string $value): string
{
    return stripcslashes($value);
}

function is_visible_key(string $key): bool
{
    $key = trim($key);
    if ($key === '' || strlen($key) < 2) {
        return false;
    }
    if (preg_match('/^(ti-|fa-|mdi-|bi-|dx-|rv|d[0-9]+$)/', $key)) {
        return false;
    }
    if (preg_match('/^(https?:|mailto:|tel:|#|\/|[a-z0-9\-]+$)/i', $key)) {
        return false;
    }
    if (str_contains($key, 'rgba(')) {
        return false;
    }
    if (preg_match('/^[0-9\s.,:%+()\-]+$/', $key)) {
        return false;
    }
    if (preg_match('/\.(blade|css|js|jpg|jpeg|png|svg|webp|php)$/i', $key)) {
        return false;
    }

    return true;
}

function extract_translation_keys(string $root, array $files): array
{
    $keys = [];

    foreach ($files as $file) {
        $path = $root . '/' . $file;
        if (!is_file($path)) {
            continue;
        }

        $content = file_get_contents($path);

        preg_match_all("/__\(\s*'((?:\\\\'|[^'])*)'\s*\)/", $content, $single);
        foreach ($single[1] as $key) {
            $key = decode_key($key);
            if (is_visible_key($key)) {
                $keys[$key] = true;
            }
        }

        preg_match_all('/__\(\s*"((?:\\\\"|[^"])*)"\s*\)/', $content, $double);
        foreach ($double[1] as $key) {
            $key = decode_key($key);
            if (is_visible_key($key)) {
                $keys[$key] = true;
            }
        }

        if (str_ends_with($file, 'SolutionController.php')) {
            preg_match_all("/=>\s*'((?:\\\\'|[^'])*)'/", $content, $values);
            foreach ($values[1] as $key) {
                $key = decode_key($key);
                if (is_visible_key($key)) {
                    $keys[$key] = true;
                }
            }
        }
    }

    return array_keys($keys);
}

function looks_like_english_text(string $value, array $excludedExact): bool
{
    $value = trim($value);

    if (in_array($value, $excludedExact, true)) {
        return false;
    }
    if (preg_match('/^[A-Z0-9\s\/&+.-]{2,}$/', $value)) {
        return false;
    }
    if (preg_match('/^(PRODUCT|FLAGSHIP|STATUS|PHASE|STEP|LAYER)\s*\//i', $value)) {
        return false;
    }
    if (preg_match('/\b(DigiTexia|AquaWatch|WastePay|MedTrace|Performia|Flexicare|CREMIN|APEC|Light Group)\b/', $value) && str_word_count($value) <= 3) {
        return false;
    }

    $englishWords = [
        'the', 'and', 'with', 'your', 'for', 'from', 'that', 'into', 'built', 'building',
        'digital', 'infrastructure', 'platform', 'systems', 'solutions', 'data', 'business',
        'operations', 'management', 'tracking', 'monitoring', 'field', 'teams', 'workflows',
        'visibility', 'request', 'learn', 'more', 'view', 'start', 'contact', 'partners',
        'governments', 'cities', 'healthcare', 'waste', 'water', 'carbon', 'smart',
        'challenge', 'impact', 'solution', 'technology', 'enterprise', 'organization',
    ];

    foreach ($englishWords as $word) {
        if (preg_match('/\b' . preg_quote($word, '/') . '\b/i', $value)) {
            return true;
        }
    }

    return false;
}

function extract_literal_text_candidates(string $root, array $files, array $excludedExact): array
{
    $items = [];

    foreach ($files as $file) {
        $path = $root . '/' . $file;
        if (!is_file($path) || !str_ends_with($file, '.blade.php')) {
            continue;
        }

        $lines = file($path);
        foreach ($lines as $lineNo => $line) {
            $trimmed = trim($line);
            if ($trimmed === '' || str_contains($trimmed, "{{ __('") || str_contains($trimmed, '{{ __("') || str_contains($trimmed, '@section') || str_contains($trimmed, '@foreach') || str_contains($trimmed, '@if')) {
                continue;
            }
            if (!preg_match('/>([^<>{}@][^<>{}]*)</', $line, $match)) {
                continue;
            }

            $text = trim(html_entity_decode($match[1], ENT_QUOTES | ENT_HTML5));
            $text = preg_replace('/\s+/', ' ', $text);
            if ($text === '' || in_array($text, $excludedExact, true)) {
                continue;
            }
            if (preg_match('/^[→←›·•|&;]+$/', $text) || preg_match('/^[0-9\s.,:%+()\-]+$/', $text)) {
                continue;
            }
            if (looks_like_english_text($text, $excludedExact)) {
                $items[] = "{$file}:" . ($lineNo + 1) . " {$text}";
            }
        }
    }

    return array_values(array_unique($items));
}

$report = [];

foreach ($pages as $page => $files) {
    $keys = extract_translation_keys($root, $files);
    sort($keys);

    $missing = [];
    $fallbacks = [];

    foreach ($locales as $locale) {
        foreach ($keys as $key) {
            if (!array_key_exists($key, $translations[$locale])) {
                $missing[$locale][] = $key;
                continue;
            }

            if ($locale !== 'en' && $translations[$locale][$key] === $key && looks_like_english_text($key, $excludedExact)) {
                $fallbacks[$locale][] = $key;
            }
        }
    }

    $literalCandidates = extract_literal_text_candidates($root, $files, $excludedExact);

    $report[$page] = [
        'files' => $files,
        'keys' => count($keys),
        'missing' => array_map('count', $missing),
        'fallbacks' => array_map('count', $fallbacks),
        'literal_candidates' => count($literalCandidates),
        'missing_samples' => array_map(fn ($items) => array_slice($items, 0, 8), $missing),
        'fallback_samples' => array_map(fn ($items) => array_slice($items, 0, 8), $fallbacks),
        'literal_samples' => array_slice($literalCandidates, 0, 8),
    ];
}

echo json_encode($report, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
echo "\n";
