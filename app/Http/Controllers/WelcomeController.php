<?php

namespace App\Http\Controllers;

use App\Death;
use App\Province;
use App\Recovered;
use App\Infection;
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

        return view('welcome', compact('provincies'));
    }
}
