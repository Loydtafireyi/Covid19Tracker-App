<?php

namespace App\Http\Controllers;

use App\Spent;
use App\Pledge;
use App\Recieved;
use App\DonorName;
use Illuminate\Http\Request;
use Carbon\Carbon;

class FundsTrackerController extends Controller
{
    public function index()
    {
    	$donorname = DonorName::paginate(10);

    	$weekPledge = Pledge::where('created_at', '>', Carbon::now()->startOfWeek())
	     ->where('created_at', '<', Carbon::now()->endOfWeek())
	     ->get();

	     $weekRecieved = Recieved::where('created_at', '>', Carbon::now()->startOfWeek())
	     ->where('created_at', '<', Carbon::now()->endOfWeek())
	     ->get();

	     $weekSpent = Spent::where('created_at', '>', Carbon::now()->startOfWeek())
	     ->where('created_at', '<', Carbon::now()->endOfWeek())
	     ->get();

    	return view('funds', compact('donorname', 'weekPledge', 'weekSpent', 'weekRecieved'));
    }
}
