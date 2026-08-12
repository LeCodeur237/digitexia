<?php

$root = dirname(__DIR__);

foreach (['en', 'fr', 'es', 'it', 'zh'] as $locale) {
    $path = $root . "/resources/lang/$locale.json";
    $json = json_decode(file_get_contents($path), true);
    $status = json_last_error() === JSON_ERROR_NONE ? 'valid' : 'invalid: ' . json_last_error_msg();
    $count = is_array($json) ? count($json) : 0;

    echo "$locale: $status ($count keys)\n";
}
