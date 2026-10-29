<?php

namespace Core;

class Middleware
{
    const MAP = [
        'guest' => 'guest',
        'auth' => 'auth'
    ];

    public static function resolve($key)
    {
        if (! $key) {
            return;
        }

        $middleware = self::MAP[$key] ?? false;

        if (! $middleware) {
            throw new \Exception("No matching middleware found for key '{$key}'.");
        }

        if ($middleware === 'auth' && ! isset($_SESSION['user'])) {
            header('Location: /login');
            exit();
        }

        if ($middleware === 'guest' && isset($_SESSION['user'])) {
            header('Location: /');
            exit();
        }
    }
}
