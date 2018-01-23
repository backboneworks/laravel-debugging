<?php

namespace App\Http\Controllers;

use App\CarModel;
use App\Manufacturer;
use Illuminate\Http\Request;

class CarModelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('car_models.index', [
            'carModels' => CarModel::with('manufacturer')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function craete()
    {
        return view('car_models.create', [
            'manufacturers' => Manufacturer::getNamesList(),
        ]);
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
        CarModel::create($request->all());

        return redirect()->route('car-models.index')
                         ->with('flash_message', [
                             'level'   => 'success',
                             'message' => 'Car model created'
                         ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  CarModel $carModel
     *
     * @return \Illuminate\Http\Response
     */
    public function show(CarModel $carModel)
    {
        return view('car_models.show', compact('carModel'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param CarModel $carModel
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(CarModel $carModel)
    {
        return view('car_models.edit', [
            'carModel'      => $carModel,
            'manufacturers' => Manufacturer::getNamesList(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param CarModel $carModel
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CarModel $carModel)
    {
        $carModel->update($request->all());

        return redirect()->route('car-models.update')
                         ->with('flash_message', [
                             'level'   => 'success',
                             'message' => 'Car model updated',
                         ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Request $request
     * @param CarModel $carModel
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, CarModel $carModel)
    {
        $carModel->delete();

        return redirect()->route('car-models.index')
                         ->with('flash_message', [
                             'level'   => 'success',
                             'message' => 'Car model deleted',
                         ]);
    }
}
