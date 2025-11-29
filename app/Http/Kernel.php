<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    /**
     * The application's global HTTP middleware stack.
     */
    protected $middleware = [
        // \Illuminate\Foundation\Http\Middleware\ValidatePostSize::class,
        \App\Http\Middleware\TrimStrings::class,
        \Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull::class,
        // \Illuminate\Session\Middleware\StartSession::class,   
        // \Illuminate\Session\Middleware\AuthenticateSession::class,
        // \Illuminate\View\Middleware\ShareErrorsFromSession::class,
        // \Illuminate\Foundation\Http\Middleware\VerifyCsrfToken::class,
    ];

    /**
     * The application's route middleware groups.
     */
    protected $middlewareGroups = [
        'web' => [
            // tout le groupe web est désactivé pour l’instant
        ],

        'api' => [
            // ...
        ],
    ];

    /**
     * The application's route middleware.
     */
    protected $routeMiddleware = [
        // ...
    ];
}