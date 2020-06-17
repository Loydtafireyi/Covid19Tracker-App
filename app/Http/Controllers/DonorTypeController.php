<?php

namespace App\Http\Controllers;

use App\DonorType;
use Illuminate\Http\Request;
use App\Http\Requests\DonorType\CreateDonorTypeRequest;

class DonorTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $donortypes = DonorType::all();

        return view('admin.donortypes.index', compact('donortypes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.donortypes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateDonorTypeRequest $request)
    {
        DonorType::create([
            'type' => $request->type
        ]);

        session()->flash('success', $request->type . ' donor type added successfully');

        return redirect(route('donor-type.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(DonorType $donortype)
    {
        return ($donortype);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $donortype = DonorType::findOrFail($id);

        return view('admin.donortypes.create', compact('donortype'));
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
        $data = $request->all();

        $donortype = DonorType::findOrFail($id);

        $donortype->update($data);

        session()->flash('success', $donortype->type . ' updated successfully!');

        return redirect(route('donor-type.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $donortype = DonorType::findOrFail($id);

        $donortype->delete();

        session()->flash('success', $donortype->type . ' deleted successfully!');

        return redirect(route('donor-type.index'));
    }
}
