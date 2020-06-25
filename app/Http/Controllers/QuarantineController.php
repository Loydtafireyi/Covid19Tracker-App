<?php

namespace App\Http\Controllers;

use App\Quarantine;
use Illuminate\Http\Request;
use App\Http\Requests\Quarantine\CreateQuarantineRequest;

class QuarantineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.quarantine.index')->with('quarantine', Quarantine::paginate(5));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.quarantine.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateQuarantineRequest $request)
    {
        Quarantine::create([
            'province_id' => $request->province_id,
            'quarantine_centre' => $request->quarantine_centre,
            'tollfree' => $request->tollfree,
            'telephone' => $request->telephone
        ]);

        session()->flash('success', $request->quarantine_centre . ' centre added successfully');

        return redirect(route('quarantine.index'));
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
    public function edit(Quarantine $quarantine)
    {
        return view('admin.quarantine.create', compact('quarantine'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Quarantine $quarantine)
    {
        $data = $request->all();

        $quarantine->update($data);

        session()->flash('success', $request->quarantine_centre . ' centre updated successfully');

        return redirect(route('quarantine.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Quarantine $quarantine)
    {
        $quarantine->delete();

        session()->flash('success', $request->quarantine_centre . ' centre added successfully');

        return redirect(route('quarantine.index'));
    }
}
