<?php

namespace App\Providers;

use Braintree\Gateway;
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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->singleton(Gateway::class, function($app){

            return new Gateway(

                [

                    'environment' => 'sandbox',
                    'merchantId' => 'jcvymfwrf26rzh7c',
                    'publicKey' => 'qfnr36kvb327r2b7',
                    'privateKey' => 'a640c200398a5710a836bf287efe1d63'

                ]

            );

        });
    }
}
