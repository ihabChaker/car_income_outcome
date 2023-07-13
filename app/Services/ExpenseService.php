<?php

namespace App\Http\Services;

use App\Models\Expense;

class ExpenseService
{
    static public function storeExpenses($data, $car_id)
    {
        $car_name = $data['name'];
        $name = $car_name . ' طاكسيات: شرى طاكسي';
        self::storeExpense($name, $data['buy_price'], $data['buyer_id'], $car_id);

        $name = $car_name . ' طاكسيات: ترسيتي تع';
        self::storeExpense($name, $data['electricity'], $data['electricity_buyer_id'], $car_id);

        $name = $car_name . ' طاكسيات: ميكانيك تع';
        self::storeExpense($name, $data['mechanism'], $data['mechanism_buyer_id'], $car_id);

        $name = $car_name . ' طاكسيات: لا بياس تع';
        self::storeExpense($name, $data['repair_parts'], $data['repair_parts_buyer_id'], $car_id);

        $name = $car_name . ' طاكسيات: لا طول تع';
        self::storeExpense($name, $data['tole'], $data['tole_buyer_id'], $car_id);
    }
    static public function storeExpense($expenseName, $amount, $spender_id, $car_id)
    {
        Expense::create([
            'name' => $expenseName,
            'amount' => $amount,
            'spender_id' => $spender_id,
            'car_id' => $car_id,
        ]);
    }
}