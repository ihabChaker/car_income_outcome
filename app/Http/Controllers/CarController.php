<?php

namespace App\Http\Controllers;

use App\DataTables\CarsDataTable;
use App\Http\Requests\StoreCarRequest;
use App\Http\Requests\UpdateCarRequest;
use App\Models\Car;
use App\Services\CarService;

class CarController extends Controller
{
    public function index(CarsDataTable $carsDataTable)
    {
        return $carsDataTable->render('cars.index');
    }

    public function store(StoreCarRequest $request, CarService $carService)
    {
        $validated_data = $request->validated();
        $message = $carService->store($validated_data);

        return $message;
    }

    public function update(UpdateCarRequest $request, Car $car, CarService $carService)
    {
        $validated_data = $request->validated();
        $message = $carService->update($car, $validated_data);

        return $message;
    }

    public function destroy(Car $car, CarService $carService)
    {
        $message = $carService->delete($car);

        return $message;
    }
}