<?php

namespace App\Http\Controllers;

use App\Country;
use App\Province;
use Illuminate\Http\Request;
use App\Http\Requests\Country\CreateCountryRequest;

class CountriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $countries = Country::all();
        return view('admin.countries.index', compact('countries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.countries.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateCountryRequest $request)
    {
        Country::create([
            'country' => $request->country,
        ]);

        session()->flash('success', $request->country . ' country successfully!');

        return redirect(route('countries.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Country $country)
    {
        return ($country);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Country $country)
    {
        return view('admin.countries.create', compact('country'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Country $country)
    {
        $data = $request->all();

        $country->update($data);

        session()->flash('success', $country->country . ' edited successfully!');

        return redirect(route('countries.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Country $country)
    {
        if(Province::count() > 0 ) {
            session()->flash('error', 'Take it easy, you cannot delete country because it has some Provinces!');

            return redirect(route('countries.index'));
        }
        $country->delete();

        session()->flash('success', $country->country . ' deleted successfully!');

        return redirect(route('countries.index'));
    }
}
