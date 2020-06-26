<?php

namespace App\Http\Controllers;

use App\Country;
use App\DonorName;
use App\DonorType;
use Illuminate\Http\Request;
use App\Http\Requests\DonorName\CreateDonorNameTypeRequest;

class DonorNameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $donornames = DonorName::paginate(10);

        return view('admin.donornames.index', compact('donornames'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $donortypes = Donortype::all();

        $countries = Country::all();

        return view('admin.donornames.create', compact('donortypes', 'countries'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateDonorNameTypeRequest $request)
    {
        DonorName::create([
            'name' => $request->name,
            'country_id' => $request->country_id,
            'donor_type_id' => $request->donor_type_id
        ]);

        session()->flash('success', $request->name . ' donor name added successfully');

        return redirect(route('donor-name.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $donorname = DonorName::findOrFail($id);

        return ($donorname);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $donortypes = DonorType::all();

        $countries = Country::all();

        $donorname = DonorName::findOrFail($id);

        return view('admin.donornames.edit', compact('donorname', 'donortypes', 'countries'));
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

        $donorname = DonorName::findOrFail($id);

        $donorname->update($data);

        session()->flash('success', $donorname->name . ' updated successfully!');

        return redirect()->route('donor-name.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $donorname = DonorName::findOrFail($id);

        $donorname->delete();

        session()->flash('success', $donorname->name . ' deleted successfully!');

        return redirect()->route('donor-name.index');
    }
}
