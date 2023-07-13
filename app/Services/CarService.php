<?php

namespace App\Services;

use App\Http\Services\ExpenseService;
use App\Models\Car;

class CarService
{
    public function store($data)
    {
        $car = Car::create([
            'name' => $data['name'],
            'car_buyer_id' => $data['buyer_id'],
            'license_plate' => $data['license_plate'],
            'buy_price' => $data['buy_price'],
            'electricity' => $data['electricity'],
            'electricity_buyer_id' => $data['electricity_buyer_id'],
            'mechanism' => $data['mechanism'],
            'mechanism_buyer_id' => $data['mechanism_buyer_id'],
            'tole' => $data['tole'],
            'tole_buyer_id' => $data['tole_buyer_id'],
            'repair_parts' => $data['repair_parts'],
            'repair_parts_buyer_id' => $data['repair_parts_buyer_id'],
            'selling_price' => $data['sell_price'],
            'payment_reciever_id' => $data['payment_reciever_id'],
        ]);

        $car->cashIn()->create([
            'name' => $car->name . ' طاكسيات: سلاك تع طاكسي',
            'amount' => $data('sell_price'),
            'reciever_id' => $data('payment_reciever_id'),
            'car_id' => $car->id,
        ]);

        ExpenseService::storeExpenses($data, $car->id);

        return ["message" => 'تم الحفظ بنجاح'];
    }

    public function update($car, $data)
    {
        $car->update([
            'name' => $data['name'],
            'car_buyer_id' => $data['buyer_id'],
            'license_plate' => $data['license_plate'],
            'buy_price' => $data['buy_price'],
            'electricity' => $data['electricity'],
            'electricity_buyer_id' => $data['electricity_buyer_id'],
            'mechanism' => $data['mechanism'],
            'mechanism_buyer_id' => $data['mechanism_buyer_id'],
            'tole' => $data['tole'],
            'tole_buyer_id' => $data['tole_buyer_id'],
            'repair_parts' => $data['repair_parts'],
            'repair_parts_buyer_id' => $data['repair_parts_buyer_id'],
            'selling_price' => $data['sell_price'],
            'payment_reciever_id' => $data['payment_reciever_id'],
        ]);

        $car->cashIn()->create([
            'name' => $car->name . ' طاكسيات: سلاك تع طاكسي',
            'amount' => $data('sell_price'),
            'reciever_id' => $data('payment_reciever_id'),
            'car_id' => $car->id,
        ]);

        ExpenseService::storeExpenses($data, $car->id);

        return ["message" => 'تم الحفظ بنجاح'];
    }
}