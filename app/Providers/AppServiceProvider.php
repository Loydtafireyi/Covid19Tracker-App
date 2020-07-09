<?php

namespace App\Providers;

use View;
use App\Test;
use App\Spent;
use App\Death;
use App\Pledge;
use App\Country;
use App\Recieved;
use App\Province;
use App\Infection;
use App\Recovered;
use App\DonorType;
use App\DonorName;
use App\Quarantine;
use App\RequestAmbulance;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;

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
        View::share('provinces', Province::all()->sortBy('name'));
        View::share('recovered', Recovered::all());
        View::share('deaths', Death::all());
        View::share('tests', Test::all());
        View::share('quarantines', Quarantine::all()->sortBy('province_id'));
        View::share('pledges', Pledge::all());
        View::share('recieved', Recieved::all());
        View::share('spent', Spent::all());
        View::share('donortypes', DonorType::all());
        View::share('donorname', DonorName::all());
        View::share('countries', Country::all());

        Schema::defaultStringLength(191);

        // Google recaptcha
        Validator::extend('recaptcha', 'App\\Validators\\ReCaptcha@validate');
    }
}
