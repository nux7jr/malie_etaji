<?php

namespace App\Providers;

use App\Content\main\HousesInfo;
use Illuminate\Support\Facades\Vite;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Vite::macro('image', fn($asset) => $this->
            asset("resources/images/{$asset}"));
        new HousesInfo();
    }
}
