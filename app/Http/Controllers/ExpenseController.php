<?php

namespace App\Http\Controllers;

use App\Models\Expense;
use Illuminate\Http\Request;

class ExpenseController extends Controller
{
    static public function storeExpenses(Request $request, $car_id)
    {
        $car_name = $request->input('car_name');
        $name = $car_name . ' طاكسيات: شرى طاكسي';
        self::storeExpense($name, $request->input('buy_price'), $request->input('buyer_id'), $car_id);

        $name = $car_name . ' طاكسيات: ترسيتي تع';
        self::storeExpense($name, $request->input('electricity'), $request->input('electricity_buyer_id'), $car_id);

        $name = $car_name . ' طاكسيات: ميكانيك تع';
        self::storeExpense($name, $request->input('mechanism'), $request->input('mechanism_buyer_id'), $car_id);

        $name = $car_name . ' طاكسيات: لا بياس تع';
        self::storeExpense($name, $request->input('repair_parts'), $request->input('repair_parts_buyer_id'), $car_id);

        $name = $car_name . ' طاكسيات: لا طول تع';
        self::storeExpense($name, $request->input('tole'), $request->input('tole_buyer_id'), $car_id);
    }
    static public function storeExpense($expenseName, $amount, $spender_id, $car_id)
    {
        $expense = new Expense();
        $expense->name = $expenseName;
        $expense->amount = $amount;
        $expense->spender_id = $spender_id;
        $expense->car_id = $car_id;
        // $expense->setConnection('mysql1');
        $expense->save();
    }
}