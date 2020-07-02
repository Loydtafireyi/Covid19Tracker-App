<?php

namespace App\Http\Controllers;

use App\Spent;
use App\Product;
use App\FocusArea;
use Illuminate\Http\Request;
use App\Http\Requests\Spent\CreateSpentRequest;

class SpentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $spent = Spent::paginate(8);

        return view('admin.spent.index', compact('spent'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = Product::all();

        $focusAreas = FocusArea::all();

        return view('admin.spent.create', compact('products', 'focusAreas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateSpentRequest $request)
    {
        Spent::create([ 
            'spent' => $request->spent,
            'product_id' => $request->product_id,
            'focus_area_id' => $request->focus_area_id,
        ]);

        session()->flash('success', "$request->spent added succesfully");

        return redirect(route('spent.index'));
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
    public function edit(Spent $spent)
    {
        $products = Product::all();

        $focusAreas = FocusArea::all();

        return view('admin.spent.edit', compact('products', 'focusAreas', 'spent'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreateSpentRequest $request, Spent $spent)
    {
        $data = $request->all();

        $spent->update($data);

        session()->flash('success', "$request->spent added succesfully");

        return redirect(route('spent.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Spent $spent)
    {
        $spent->delete();

        session()->flash('success', "$spent->spent deleted succesfully");

        return redirect(route('spent.index'));
    }
}
