<?php

namespace App\Providers;

use Illuminate\Routing\Redirector;
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
        $this->app->extend('redirect', function($redirectorOriginal, $app){
            $redirector = new Redirector($app['url']);

            if(isset($app['session.store'])){
                $redirector->setSession($app['session.store']);
            }

            return $redirector;
        });
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
