<?php

namespace Tests\Feature;

use App\Models\Car;
use App\Models\CashIn;
use App\Models\Expense;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Tests\TestCase;

/**
 * @req/uires PHP <= 5.3
 */
class CarTest extends TestCase
{
    /**
     * @re/quires PHP <= 5.3
     */
    public function test_store(): void
    {
        $car = Car::factory()->make();
        $response = $this->withoutMiddleware(VerifyCsrfToken::class)
            ->postJson(route('cars.store'), $car->toArray());

        $car = Car::latest()->first();
        $response->assertStatus(200);
        $this->assertDatabaseHas($car->getTable(), $car->toArray());
        $this->assertNotEquals(0, $car->expenses()->count());
        $this->assertNotNull($car->cashIn);
        $this->assertEquals($car->selling_price, $car->cashIn->amount);
    }

    /**
     * @req/uires PHP <= 5.3
     */
    public function test_update(): void
    {
        $car = Car::factory()->create();
        $car_old_sell_price = $car->selling_price;
        $new_data = Car::factory()->make()->toArray();
        $old_expenses = ($car->expenses);
        $response = $this->withoutMiddleware(VerifyCsrfToken::class)
            ->patchJson(route('cars.update', ['car' => $car]), $new_data);

        $response->assertStatus(200);

        $car->setConnection('mysql')->refresh();

        $this->assertDatabaseHas($car->getTable(), $new_data);
        $this->assertNotNull($car->cashIn);
        $this->assertNotEquals($car_old_sell_price, $car->selling_price);
        $this->assertEquals($car->selling_price, $car->cashIn->amount);
        $this->assertNotEquals(0, $car->expenses()->count());
        $old_expenses->each(function ($expense) {
            $this->assertDatabaseMissing('expenses', ['amount' => $expense->amount, 'id' => $expense->id,], 'mysql1');
        });
    }

    /**
     * @req/uires PHP <= 5.3
     *
     * @return void
     */
    public function test_delete(): void
    {
        $car = Car::factory()->create();
        $response = $this->withoutMiddleware(VerifyCsrfToken::class)
            ->delete(route('cars.destroy', ['car' => $car]));

        $response->assertStatus(200);
        $this->assertDatabaseMissing($car->getTable(), $car->getAttributes());
    }
}