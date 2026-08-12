<?php

$root = dirname(__DIR__);
$page = $argv[1] ?? null;

$files = [
    'solutions' => ['resources/views/pages/solutions.blade.php'],
    'why-us' => ['resources/views/pages/why-us.blade.php'],
    'projects' => ['resources/views/pages/projects.blade.php'],
    'partners' => ['resources/views/pages/partners.blade.php'],
    'blog' => ['resources/views/pages/blog.blade.php', 'resources/views/pages/blog-show.blade.php'],
    'contact' => ['resources/views/pages/contact.blade.php'],
];

if (!$page || !isset($files[$page])) {
    fwrite(STDERR, "Usage: php scripts/list_page_i18n_fallbacks.php <" . implode('|', array_keys($files)) . ">\n");
    exit(1);
}

$keys = [];
foreach ($files[$page] as $file) {
    $content = file_get_contents($root . '/' . $file);
    preg_match_all("/__\(\s*'((?:\\\\'|[^'])*)'\s*\)/", $content, $single);
    preg_match_all('/__\(\s*"((?:\\\\"|[^"])*)"\s*\)/', $content, $double);
    foreach (array_merge($single[1], $double[1]) as $key) {
        $key = stripcslashes($key);
        if ($key !== '') {
            $keys[$key] = true;
        }
    }
}

foreach (['es', 'it', 'zh'] as $locale) {
    $json = json_decode(file_get_contents($root . "/resources/lang/{$locale}.json"), true) ?: [];
    echo strtoupper($locale) . PHP_EOL;
    foreach (array_keys($keys) as $key) {
        if (($json[$key] ?? null) === $key) {
            echo '- ' . $key . PHP_EOL;
        }
    }
    echo PHP_EOL;
}
