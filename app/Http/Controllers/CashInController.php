<?php

namespace App\Http\Controllers;

use App\Models\CashIn;
use Illuminate\Http\Request;

class CashInController extends Controller
{
    static public function storeCashIn(Request $request, $car_id)
    {
        $cash_in = new CashIn();
        $car_name = $request->input('car_name');
        $name = $car_name . ' طاكسيات: سلاك تع طاكسي';
        $cash_in->name = $name;
        $cash_in->amount = $request->input('selling_price');
        $cash_in->reciever_id = $request->input('payment_reciever_id');
        $cash_in->car_id = $car_id;
        // $cash_in->setConnection('mysql1');
        $cash_in->save();
    }
}