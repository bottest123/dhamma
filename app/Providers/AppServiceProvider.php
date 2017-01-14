<?php

namespace App\Providers;

use App\Services\Storage\PostgresKeyValueStorage;
use App\Services\Storage\RawMessageStorage;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{


    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }


    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('persistent.kv', function () {
            return new PostgresKeyValueStorage();
        });

        $this->app->singleton('messages.raw', function () {
            return new RawMessageStorage();
        });
    }
}
