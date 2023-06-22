<?php

namespace App\Providers;

use App\Content\main\HousesInfo;
use App\Content\main\Articles;
use App\Helpers\Senders\Bitrix24;
use App\Helpers\Senders\Interface\SendFormInterface;
use Illuminate\Support\Facades\Vite;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->formSenderInjection();
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->addAssetsViteMacros();
        $this->initClasses();
        $this->formSenderInjection();
    }
    private function addAssetsViteMacros(): void
    {
        Vite::macro('image', fn ($asset) => $this->asset("resources/images/{$asset}"));
    }
    private function initClasses(): void
    {
        new HousesInfo();
        new Articles();
    }

    private function formSenderInjection(): void
    {
        $this->app->singleton(SendFormInterface::class, function ($app) {
            match ($app->make('config')->get('services.client-form-sender')) {
                'Bitrix24Tiksan' => new Bitrix24(env('TIKSAN_SUBDOMAIN_BITRIX24'), env('TIKSAN_WEBHOOK_BITRIX24_BASE_URI'), (int)env('DEFAULT_DIRECTION_TIKSAN_BITRIX24')),
                'default' => new \RuntimeException("Unknown Form Sender Service"),
            };
        });
    }
}
