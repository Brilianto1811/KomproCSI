<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Contracts\CsiUserRepositoryInterface;
use App\Repositories\Eloquent\CsiUserRepository;
use App\Repositories\CsiProyekRepositoryInterface;
use App\Repositories\CsiProyekRepository;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(CsiUserRepositoryInterface::class, CsiUserRepository::class);
        $this->app->bind(CsiProyekRepositoryInterface::class, CsiProyekRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
