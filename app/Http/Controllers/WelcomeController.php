<?php

namespace App\Http\Controllers;

use App\Test;
use App\Death;
use App\Province;
use App\Recovered;
use App\Infection;
use Carbon\Carbon;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {

        $provincies = Province::with(['infections', 'deaths', 'recovered'])->get()->map(function ($province) {
            return [
                'region_name' => $province->name,
                'region_code' => $province->code,
                'infected' => $province->infections->sum('infections'),
                'deaths' => $province->deaths->sum('deaths'),
                'recoveries' => $province->recovered->sum('recovered')
            ];
        })->toArray();

        $todayDeaths = Death::whereDate('created_at',Carbon::today())->get();
        $todayTests = Test::whereDate('created_at',Carbon::today())->get();
        $todayRecovered = Recovered::whereDate('created_at',Carbon::today())->get();
        $todayInfections = Infection::whereDate('created_at',Carbon::today())->get();

        return view('welcome', compact('provincies', 'todayInfections', 'todayDeaths', 'todayRecovered', 'todayTests'));
    }

    public function search()
    {
        
    }
}
