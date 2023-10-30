<?php

namespace App\Providers;

use App\Models\Lechuga;
use App\Observers\LechugaObserver;

use Illuminate\Support\ServiceProvider;

class ObserverServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot()
    {

        Lechuga::observe(LechugaObserver::class);
    }
}
