<?php

namespace App\Providers;

use View;
use App\Test;
use App\Death;
use App\Province;
use App\Infection;
use App\Recovered;
use App\Quarantine;
use App\RequestAmbulance;
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
        View::share('requestAmbulances', RequestAmbulance::all());
        View::share('infections', Infection::all());
        View::share('provinces', Province::all());
        View::share('recovered', Recovered::all());
        View::share('deaths', Death::all());
        View::share('tests', Test::all());
        View::share('quarantines', Quarantine::all());
    }
}
