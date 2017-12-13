<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Carbon\Carbon;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    public function boot()
    {
        \Dusterio\LumenPassport\LumenPassport::routes($this->app);

        \Laravel\Passport\Passport::tokensExpireIn(Carbon::now()->addHours(1));
        \Laravel\Passport\Passport::refreshTokensExpireIn(Carbon::now()->addDays(30));
    }
}
