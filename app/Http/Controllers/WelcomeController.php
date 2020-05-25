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
    	$deaths = Death::all();
    	$infections = Infection::all();
    	$recoveries = Recovered::all();
    	$mashCentral = Infection::where('province_id', 1);
    	$harare = Infection::where('province_id', 2);
    	$matebNorth = Infection::where('province_id', 3);
    	$midlands = Infection::where('province_id', 4);
    	$mashEast = Infection::where('province_id', 5);
    	$manica = Infection::where('province_id', 6);
    	$matebe = Infection::where('province_id', 7);
    	$byo = Infection::where('province_id', 8);
    	$masvingo = Infection::where('province_id', 9);
    	$mashWest = Infection::where('province_id', 10);
    	return view('welcome', compact('deaths', 'infections', 'recoveries', 'mashCentral', 'mashEast', 'mashCentral', 'harare', 'matebNorth', 'midlands', 'manica', 'matebe', 'byo', 'masvingo', 'mashWest'));
    }
}
