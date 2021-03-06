<?php

namespace App\Http\Controllers;

use App\Pledge;
use App\DonorName;
use Illuminate\Http\Request;
use App\Http\Requests\Pledges\PledgesTypeRequest;

class PledgeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pledges = Pledge::all();

        return view('admin.pledges.index', compact('pledges'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $donornames = DonorName::all();

        return view('admin.pledges.create', compact('donornames'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PledgesTypeRequest $request)
    {
        Pledge::create([
            'amount' => $request->amount,
            'donor_name_id' => $request->donor_name_id
        ]);

        session()->flash('success', $request->amount . ' added successfully');

        return redirect(route('pledge.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Pledge $pledge)
    {
        return ($pledge);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Pledge $pledge)
    {
        $donornames = DonorName::all();

        return view('admin.pledges.create', compact('pledge', 'donornames'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pledge $pledge)
    {
        $data = $request->all();

        $pledge->update($data);

        session()->flash('success', 'updated successfully');

        return redirect()->route('pledge.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pledge $pledge)
    {
        $pledge->delete();

        session()->flash('success', 'Deleted successfully');

        return redirect()->route('pledge.index');
    }
}
