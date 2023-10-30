<?php

namespace App\Providers;

use Illuminate\Support\Facades\Config;

use App\Services\LechugaService;

use Illuminate\Support\ServiceProvider;

class MiServicioProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind('lechuga', LechugaService::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
