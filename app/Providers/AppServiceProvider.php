<?php

namespace App\Providers;

use App\Services\Auth\AuthService;
use App\Services\Auth\AuthServiceInterface;
use App\Services\Driver\DriverService;
use App\Services\Driver\DriverServiceInterface;
use App\Services\Trip\TripService;
use App\Services\Trip\TripServiceInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(AuthServiceInterface::class, AuthService::class);
        $this->app->bind(DriverServiceInterface::class, DriverService::class);
        $this->app->bind(TripServiceInterface::class, TripService::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
