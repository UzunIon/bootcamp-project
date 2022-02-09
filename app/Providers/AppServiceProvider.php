<?php

namespace App\Providers;

use Illuminate\Support\Facades\App;
use App\Services\RequestActivityLoggerInterface;
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
        $this->app->bind(RequestActivityLoggerInterface::class, function (){
            return $this->app->make(App::environment() != 'production' ? DebugRequestActivityLogger::class : ProductionRequestActivityLogger::class);
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
