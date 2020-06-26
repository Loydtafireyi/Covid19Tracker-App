<?php

namespace App\Http\Controllers;

use App\Province;
use App\Recovered;
use Illuminate\Http\Request;
use App\Http\Requests\Recovered\CreateRecoveredRequest;

class RecoveredController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.recovered.index')->with('recovered', Recovered::paginate(5));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $provinces = Province::all();

        return view('admin.recovered.create', compact('provinces'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateRecoveredRequest $request)
    {
        Recovered::create([
            'province_id' => $request->province_id,
            'date_reported' => $request->date_reported,
            'recovered' => $request->recovered
        ]);

        session()->flash('success', 'Recovered added successfully!');

        return redirect(route('recovered.index'));
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
    public function edit($id)
    {
        $recover = Recovered::findOrFail($id);

        $provinces = Province::all();

        return view('admin.recovered.create', compact('recover', 'provinces'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreateRecoveredRequest $request, Recovered $recovered)
    {
        $data = $request->all();

        $recovered->update($data);

        session()->flash('success', 'Recovered data successfully updated');

        return redirect(route('recovered.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $recover = Recovered::findOrFail($id);

        $recover->delete();

        session()->flash('success', 'Data deleted successfully');

        return redirect(route('recovered.index'));

    }
}
