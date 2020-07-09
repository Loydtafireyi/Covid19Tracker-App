<?php

namespace App\Http\Controllers;

use App\Province;
use App\Quarantine;
use Illuminate\Http\Request;

class StatsByProvinceController extends Controller
{
    public function index()
    {
    	return view('province');
    }

    public function isolation()
    {
    	$province = Province::with(['quarantines'])->get()->map(function ($iso) {
    		return [
    			'region_name' => $iso->name,
    			'region_code' => $iso->code,
    			'centre' => $iso->quarantines->count(),
    			// 'tollfree' => $iso->quarantines->tollfree,
    			// 'telephone' => $iso->quarantines->telephone,
    		];
    	})->toArray();

    	// dd($province);
    	return view('isolation', compact('province'));
    }
}
