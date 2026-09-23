<?php

declare(strict_types=1);

function base_path(string $path = ''): string
{
    $base = __DIR__ . '/../../';
    return $path ? $base . ltrim($path, '/') : $base;
}

function config(string $file): array
{
    static $cache = [];

    if (!isset($cache[$file])) {
        $cache[$file] = require base_path('config/' . $file . '.php');
    }

    return $cache[$file];
}

function url(string $path = '/'): string
{
    $base = rtrim(getenv('BASE_URL') ?: '', '/');
    return $base . '/' . ltrim($path, '/');
}

function asset(string $path): string
{
    return url($path);
}

function service_url(string $slug): string
{
    return url('/prestations/' . rawurlencode($slug));
}
