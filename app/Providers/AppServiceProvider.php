<?php

namespace App\Providers;

use App\Repositories\Interfaces\StoreRepositoryInterface;
use App\Repositories\StoreRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(StoreRepositoryInterface::class, StoreRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
