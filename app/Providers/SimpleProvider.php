<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class SimpleProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('test', function() {
            return new \App\test(config('mymailservices.testkey.key'));
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
