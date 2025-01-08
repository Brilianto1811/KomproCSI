<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Contracts\CsiUserRepositoryInterface;
use App\Repositories\Eloquent\CsiUserRepository;
use App\Repositories\Contracts\CsiProyekRepositoryInterface;
use App\Repositories\Eloquent\CsiProyekRepository;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(CsiUserRepositoryInterface::class, CsiUserRepository::class);
        $this->app->bind(CsiProyekRepositoryInterface::class, CsiProyekRepository::class);  // Binding repository
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
