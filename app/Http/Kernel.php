<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    protected $middleware = [
        \App\Http\Middleware\Authenticate::class,
    ];

    protected $middlewareGroups = [
        'web' => [
            \App\Http\Middleware\Authenticate::class,
        ],
    ];

    protected $routeMiddleware = [
        // Middleware lainnya...
        'checkrole' => \App\Http\Middleware\CheckRole::class, // Pastikan sudah terdaftar di sini
    ];
}
