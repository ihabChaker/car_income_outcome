<?php

namespace App\Http\Controllers;

use App\DataTables\CarsDataTable;
use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index(CarsDataTable $carsDataTable)
    {
        return $carsDataTable->render('cars.index');
    }
    public function store(Request $request)
    {
        $car = new Car();
        $car->car_name = $request->input('car_name');
        $car->license_plate = $request->input('license_plate');
        $car->buy_price = $request->input('buy_price');
        $car->electricity = $request->input('electricity');
        $car->mechanism = $request->input('mechanism');
        $car->tole = $request->input('tole');
        $car->repair_parts = $request->input('repair_parts');
        $car->sell_price = $request->input('sell_price');
        $car->save();
        return ["message" => 'Car saaved successfully'];
    }
    public function update(Request $request, Car $car)
    {
        $car->car_name = $request->input('car_name');
        $car->license_plate = $request->input('license_plate');
        $car->buy_price = $request->input('buy_price');
        $car->electricity = $request->input('electricity');
        $car->mechanism = $request->input('mechanism');
        $car->tole = $request->input('tole');
        $car->repair_parts = $request->input('repair_parts');
        $car->sell_price = $request->input('sell_price');
        $car->save();
        return ["message" => 'Car updated successfully'];
    }
    public function destroy(Request $request, Car $car)
    {

        $car->delete();
        return ["message" => 'Car deleted successfully'];
    }
}