<?php

namespace App\Observers;

use App\Models\Car;
use App\Services\ExpenseService;

class CarObserver
{
    /**
     * Handle the Car "created" event.
     */
    public function created(Car $car): void
    {
        $car->cashIn()->create([
            'name' => $car->name . ' طاكسيات: سلاك تع طاكسي',
            'amount' => $car->selling_price,
            'reciever_id' => $car->payment_reciever_id,
            'parent_id' => $car->id,
        ]);

        ExpenseService::storeExpenses($car->toArray(), $car->id);
    }

    /**
     * Handle the Car "updated" event.
     */
    public function updated(Car $car): void
    {
        $car->cashIn()->update([
            'name' => $car->name . ' طاكسيات: سلاك تع طاكسي',
            'amount' => $car->selling_price,
            'reciever_id' => $car->payment_reciever_id,
        ]);

        $car->expenses()->delete();
        ExpenseService::storeExpenses($car->toArray(), $car->id);
    }

    /**
     * Handle the Car "deleted" event.
     */
    public function deleted(Car $car): void
    {
        $car->cashIn()->delete();
        $car->expenses()->delete();
    }

    /**
     * Handle the Car "restored" event.
     */
    public function restored(Car $car): void
    {
        //
    }

    /**
     * Handle the Car "force deleted" event.
     */
    public function forceDeleted(Car $car): void
    {
        //
    }
}