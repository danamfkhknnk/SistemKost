<?php

use App\Http\Middleware\userAkses;
use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Auth\Middleware\RedirectIfAuthenticated;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            'guest' => RedirectIfAuthenticated::class,
            'auth'=> Authenticate::class,
            'userAkses' => userAkses::class
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();