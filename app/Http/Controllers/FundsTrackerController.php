<?php

namespace App\Http\Controllers;

use App\DonorName;
use Illuminate\Http\Request;

class FundsTrackerController extends Controller
{
    public function index()
    {
    	$donorname = DonorName::all();

    	return view('funds', compact('donorname'));
    }
}
