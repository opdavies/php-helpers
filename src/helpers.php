<?php

if (!function_exists('env')) {
    function env(string $name): ?string
    {
        return $_ENV[$name];
    }
}
