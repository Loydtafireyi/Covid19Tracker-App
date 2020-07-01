<?php

namespace App\Http\Controllers;

use App\Province;
use App\SelfPositive;
use Illuminate\Http\Request;

class SelfPositiveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $provinces = Province::all();

        $self_tests = SelfPositive::all();

        $self_positive = SelfPositive::where('tested', 'yes')->count();

        $symptomatic = SelfPositive::where('symptoms', 'yes')->count();

        $asymptomatic = SelfPositive::where('symptoms', 'no')->count();

        return view('self-positive', compact('provinces', 'self_tests', 'self_positive', 'asymptomatic', 'symptomatic'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        SelfPositive::create([
            'tested' => $request->tested,
            'province_id' => $request->province_id,
            'symptoms' => $request->symptoms,
            'info' => $request->info,
            'email' => $request->email
        ]);

        session()->flash('success', 'Thank you. Your test submitted successfully.');

        return redirect()->back();
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
