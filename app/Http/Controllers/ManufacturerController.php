<?php

namespace App\Http\Controllers;

use App\Manufacturer;
use Illuminate\Http\Request;

class ManufacturerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('manufacturers.index', [
            'manufacturers' => Manufacturer::with('carModels')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('manufacturers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Manufacturer::create($request->all());

        return redirect()->route('manufacturers.index')
                         ->with('flash_message', [
                             'level'   => 'success',
                             'message' => 'Manufacturer created',
                         ]);
    }

    /**
     * Display the specified resource.
     *
     * @param Manufacturer $manufacturer
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Manufacturer $manufacturers)
    {
        return view('manufacturers.show', compact('manufacturer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Manufacturer $manufacturer
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Manufacturer $manufacturer)
    {
        view('manufacturers.edit', compact('manufacturer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param Manufacturer $manufacturer
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Manufacturer $manufacturer)
    {
        $manufacturer->update($request->all());

        return redirect()->route('manufacturers.show', $manufacturer->id)
                         ->with('flash_message', [
                             'level'   => 'success',
                             'message' => 'Manufacturer updated',
                         ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Manufacturer $manufacturer
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Manufacturer $manufacturer)
    {
        $manufacturer->delete();

        return redirect()->route('manufacturers.index')
                         ->with('flash_message', [
                             'level'   => 'success',
                             'message' => 'Manufacturer deleted',
                         ]);
    }
}
