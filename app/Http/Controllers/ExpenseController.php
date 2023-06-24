<?php

namespace App\Http\Controllers;

use App\Models\Expense;
use Illuminate\Http\Request;

class ExpenseController extends Controller
{
    static public function storeExpenses(Request $request)
    {
        $car_name = $request->input('car_name');
        $name = ' طاكسيات: شرى طاكسي' . $car_name;
        self::storeExpense($name, $request->input('buy_price'), $request->input('buyer_id'));

        $name = ' طاكسيات: ترسيتي تع' . $car_name;
        self::storeExpense($name, $request->input('electricity'), $request->input('electricity_buyer_id'));

        $name = ' طاكسيات: ميكانيك تع' . $car_name;
        self::storeExpense($name, $request->input('mechanism'), $request->input('mechanism_buyer_id'));

        $name = ' طاكسيات: لا بياس تع' . $car_name;
        self::storeExpense($name, $request->input('repair_parts'), $request->input('repair_parts_buyer_id'));

        $name = ' طاكسيات: لا طول تع' . $car_name;
        self::storeExpense($name, $request->input('tole'), $request->input('tole_buyer_id'));
    }
    static public function storeExpense($expenseName, $amount, $spender_id)
    {
        $expense = new Expense();
        $expense->name = $expenseName;
        $expense->amount = $amount;
        $expense->spended_by = $spender_id;
        $expense->setConnection('mysql1');
        $expense->save();
    }
}