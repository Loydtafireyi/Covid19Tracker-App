<?php

namespace App\Http\Controllers\API;

use App\Test;
use App\Spent;
use App\Death;
use App\Pledge;
use App\Recieved;
use App\Province;
use App\Infection;
use App\Recovered;
use App\DonorName;
use App\DonorType;
use App\Quarantine;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApiController extends Controller
{
    public function index()
    {
    	$tests = Test::latest()->get();

    	return $tests->toArray();
    }

    public function infections()
    {
    	$infections = Infection::all();

    	return $infections;
    }

     public function deaths()
    {
    	$deaths = Death::all();

    	return $deaths;
    }

     public function recovered()
    {
    	$recovered = Recovered::all();

    	return $recovered;
    }

     public function provinces()
    {
    	$provinces = Province::with(['infections', 'deaths', 'recovered', 'tests'])->get()->map(function ($province) {
			return [
                'region_name' => $province->name,
                'region_code' => $province->code,
                'infected' => $province->infections->sum('infections'),
                'deaths' => $province->deaths->sum('deaths'),
                'recoveries' => $province->recovered->sum('recovered')
            ];
    	})->toArray();

    	return $provinces;
    }


    public function donorsDetail()
    {
        $donorsDetail =  DonorName::with(['donor_type'])->get()->map(function ($donor) {
            return[
                'donor_name' => $donor->name,
                'donor_type' => $donor->donor_type->type,
                'pledges' => $donor->pledges->sum('amount'),
                'honoured' => $donor->recieveds->sum('amount')
            ];
        })->toArray();

        return $donorsDetail;
    }

    public function isolation()
    {
        $isolations = Quarantine::with(['province'])->get()->map(function ($iso) {
            return [
                'province' => $iso->province->name,
                'centre_name' => $iso->quarantine_centre,
                'tollfree' => $iso->tollfree,
                'telephone' => $iso->telephone,
            ];
        })->toArray();

        return $isolations;
    }

    public function spent()
    {
        $spent = Spent::with(['focusArea', 'product'])->get()->map(function ($sp) {
            return [
                'focusArea' => $sp->focusArea->name,
                'product_name' => $sp->product->name,
                'product_quantity' => $sp->product->quantity,
                'amount_spent' => $sp->spent,
            ];
        })->toArray();

        return $spent;
    }

    public function amountTotals()
    {
        $total_pledges = Pledge::all()->sum('amount');
        $total_recieved = Recieved::all()->sum('amount');
        $total_spent = Spent::all()->sum('spent');
        $amount_left = $total_recieved - $total_spent;

        return (compact('total_pledges', 'total_recieved', 'total_spent', 'amount_left'));
    }
}
