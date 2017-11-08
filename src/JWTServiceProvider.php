<?php

namespace PHPCollective\JWTLaraAuth;

use Illuminate\Support\ServiceProvider;

class JWTServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        //$this->app->make('Tymon\JWTAuth\Providers\JWTAuthServiceProvider');

        $this->app->register(
            \Tymon\JWTAuth\Providers\LaravelServiceProvider::class
        );

        $loader = \Illuminate\Foundation\AliasLoader::getInstance();
        $loader->alias('JWTAuth', \Tymon\JWTAuth\Facades\JWTAuth::class);
        $loader->alias('JWTFactory', \Tymon\JWTAuth\Facades\JWTFactory::class);
    }
}