<?php

if (!function_exists('dd')) {
    function dd(): void
    {
        dump(func_get_args());
        die;
    }
}

if (!function_exists('env')) {
    function env(string $name, ?string $default = null): ?string
    {
        return $_ENV[$name] ?? $default;
    }
}
