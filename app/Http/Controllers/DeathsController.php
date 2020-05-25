<?php

namespace App\Http\Controllers;

use App\Death;
use App\Province;
use Illuminate\Http\Request;
use App\Http\Requests\Deaths\CreateDeathsRequest;

class DeathsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.deaths.index')->with('deaths', Death::paginate(5));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $provinces = Province::all();
        return view('admin.deaths.create', compact('provinces'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateDeathsRequest $request)
    {
        Death::create([
            'province_id' => $request->province_id,
            'date_reported' => $request->date_reported,
            'deaths' => $request->deaths
        ]);

        session()->flash('success', $request->deaths . ' Deaths added successfully!');

        return redirect(route('deaths.index'));
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
    public function edit(Death $death)
    {
        $provinces = Province::all();

        return view('admin.deaths.create', compact('death', 'provinces'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreateDeathsRequest $request, Death $death)
    {
        $data = $request->all();

        $death->update($data);

        session()->flash('success', 'Deaths property udated successfully!');

        return redirect(route('deaths.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
