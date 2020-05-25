<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StatsByProvinceController extends Controller
{
    public function index()
    {
    	return view('province');
    }

    public function isolation()
    {
    	return view('isolation');
    }
}
