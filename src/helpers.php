<?php

if (!function_exists('env')) {
    function env(string $name, ?string $default = null): ?string
    {
        return $_ENV[$name] ?? $default;
    }
}
