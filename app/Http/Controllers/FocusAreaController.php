<?php

namespace App\Http\Controllers;

use App\FocusArea;
use Illuminate\Http\Request;
use App\Http\Requests\FocusArea\CreateFocusAreaTypeRequest;

class FocusAreaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $focusareas = FocusArea::all();

        return view('admin.focusareas.index', compact('focusareas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.focusareas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateFocusAreaTypeRequest $request)
    {
        FocusArea::create([
            'name' => $request->name
        ]);

        session()->flash('success', $request->name . ' focus area added successfully');

        return redirect(route('focus-area.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(FocusArea $focusarea)
    {
        return ($focusarea);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $focusarea = FocusArea::findOrFail($id);

        return view('admin.focusareas.create', compact('focusarea'));
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

        $focusarea = FocusArea::findOrFail($id);

        $focusarea->update($data);

        session()->flash('success', $focusarea->name . ' updated successfully!');

        return redirect()->route('focus-area.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $focusarea = FocusArea::findOrFail($id);

        if($focusarea->spents->count() > 0) {
            session()->flash('error', 'Take it easy, this focus-area has some spendings');

            return redirect(route('products.index'));
        }

        $focusarea->delete();

        session()->flash('success', $focusarea->name . ' deleted successfully!');

        return redirect()->route('focus-area.index');
    }
}
