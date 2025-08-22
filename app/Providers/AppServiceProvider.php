<?php

namespace App\Providers;

use App\Http\Resources\PlanetResource;
use App\Support\AppVersion\AppVersion;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind('app-version', function () {
            return new AppVersion;
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        PlanetResource::withoutWrapping();
    }
}
