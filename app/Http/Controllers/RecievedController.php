<?php

namespace App\Http\Controllers;

use App\Recieved;
use App\DonorName;
use Illuminate\Http\Request;
use App\Http\Requests\Recieved\CreateRecievedRequest;

class RecievedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recieved = Recieved::all();

        return view('admin.recieved.index', compact('recieved'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $donornames = DonorName::all();

        return view('admin.recieved.create', compact('donornames'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateRecievedRequest $request)
    {
        Recieved::create([
            'amount' => $request->amount,
            'donor_name_id' => $request->donor_name_id
        ]);

        session()->flash('success', $request->amount . ' added successfully');

        return redirect(route('recieved.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Recieved $recieved)
    {
        return ($recieved);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Recieved $recieved)
    {
        $donornames = DonorName::all();

        return view('admin.recieved.create', compact('donornames', 'recieved'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Recieved $recieved)
    {
        $data = $request->all();

        $recieved->update($data);

        session()->flash('success', 'Updated successfully');

        return redirect()->route('recieved.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recieved $recieved)
    {
        $recieved->delete();

        session()->flash('success', 'Deleted successfully');

        return redirect()->route('recieved.index');
    }
}
