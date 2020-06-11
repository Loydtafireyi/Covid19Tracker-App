<?php

namespace App\Http\Controllers;

use App\Infection;
use App\Province;
use Illuminate\Http\Request;
use App\Http\Requests\Infections\CreateInfectionsRequest;

class InfectionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $infections = Infection::paginate(5);
        return view('admin.infections.index', compact('infections'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $provinces = Province::all();
        return view('admin.infections.create', compact('provinces'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateInfectionsRequest $request)
    {
        Infection::create([
            'province_id' => $request->province_id,
            'date_reported' => $request->date_reported,
            'infections' => $request->infections,
            'region_code' => $request->region_code
        ]);

        session()->flash('success', "$request->infections Infections reported on $request->date_reported have been successfully added.");

        return redirect(route('infections.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Province $province, Infection $infection)
    {
        // return view ('admin.infections');
        return($infection);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Infection $infection)
    {   
        $provinces = Province::all();
        return view('admin.infections.create', compact('infection', 'provinces'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreateInfectionsRequest $request, Infection $infection)
    {
        $data = $request->all();

        $infection->update($data);

        session()->flash('success', 'Infection updated successfully');

        return redirect(route('infections.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Infection $infection)
    {
        $infection->delete();

        session()->flash('success', 'Infection deleted successfully');

        return redirect()->back();
    }
}
