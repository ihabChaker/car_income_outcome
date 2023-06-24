<?php

namespace App\Http\Controllers;

use App\DataTables\CarsDataTable;
use App\Models\Car;
use App\Models\Expense;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CarController extends Controller
{
    public function index(CarsDataTable $carsDataTable)
    {
        return $carsDataTable->render('cars.index');
    }
    public function store(Request $request)
    {
        $car = new Car();
        $car->name = $request->input('car_name');
        $car->car_buyer_id = $request->input('buyer_id');
        $car->license_plate = $request->input('license_plate');
        $car->buy_price = $request->input('buy_price');
        $car->electricity = $request->input('electricity');
        $car->electricity_buyer_id = $request->input('electricity_buyer_id');
        $car->mechanism = $request->input('mechanism');
        $car->mechanism_buyer_id = $request->input('mechanism_buyer_id');
        $car->tole = $request->input('tole');
        $car->tole_buyer_id = $request->input('tole_buyer_id');
        $car->repair_parts = $request->input('repair_parts');
        $car->repair_parts_buyer_id = $request->input('repair_parts_buyer_id');
        $car->selling_price = $request->input('sell_price');
        $car->payment_reciever_id = $request->input('payment_reciever_id');
        $car->save();
        // Saving data to dashboard 
        ExpenseController::storeExpenses($request);
        //
        return ["message" => 'Car saved successfully'];
    }
    public function update(Request $request, Car $car)
    {
        $car->name = $request->input('car_name');
        $car->car_buyer_id = $request->input('buyer_id');
        $car->license_plate = $request->input('license_plate');
        $car->buy_price = $request->input('buy_price');
        $car->electricity = $request->input('electricity');
        $car->electricity_buyer_id = $request->input('electricity_buyer_id');
        $car->mechanism = $request->input('mechanism');
        $car->mechanism_buyer_id = $request->input('mechanism_buyer_id');
        $car->tole = $request->input('tole');
        $car->tole_buyer_id = $request->input('tole_buyer_id');
        $car->repair_parts = $request->input('repair_parts');
        $car->repair_parts_buyer_id = $request->input('repair_parts_buyer_id');
        $car->selling_price = $request->input('sell_price');
        $car->payment_reciever_id = $request->input('payment_reciever_id');
        $car->save();
        return ["message" => 'Car updated successfully'];
    }
    public function destroy(Request $request, Car $car)
    {

        $car->delete();
        return ["message" => 'Car deleted successfully'];
    }
}