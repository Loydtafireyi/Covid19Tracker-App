<?php

namespace App\Http\Controllers;

use App\Country;
use App\Province;
use App\Infection;
use Illuminate\Http\Request;
use App\Http\Middleware\VerifyCountryCount;

class ProvincesController extends Controller
{
    public function __construct()
    {
        return $this->middleware('verifyCountryCount')->only(['create', 'store']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $provinces = Province::paginate(5);
        return view('admin.provinces.index', compact('provinces'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countries = Country::all();
        return view('admin.provinces.create', compact('countries'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'country_id' => 'required',
            'code' => 'required'
        ]);

        Province::create([
            'name' => $request->name,
            'country_id' => $request->country_id,
            'code' => $request->code
        ]);

        session()->flash('success', $request->name . ' Province added successfully!');

        return redirect(route('provinces.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Province $province)
    {
        return view('admin.provinces.create', compact('province'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Province $province)
    {
        $data = $request->all();

        $province->update($data);

        session()->flash('success', $request->name . ' Province updated successfully!');

        return redirect(route('provinces.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Province $province)
    {
        if($province->infections()->count() > 0) {
            session()->flash('error', 'Take it easy, you cannot delete this Province because it has some infections!');

            return redirect(route('provinces.index'));
        }

        $province->delete();

        session()->flash('success', $province->name . ' Province deleted successfully');

        return redirect()->back();
    }
}
