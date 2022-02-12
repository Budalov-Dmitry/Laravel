<?php

namespace App\Providers;

use App\Contracts\Money;
use App\Contracts\Social;
use App\Services\MoneyService;
use App\Services\SocialService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(Money::class, MoneyService::class);
        $this->app->bind(Social::class, SocialService::class );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
