<?php

namespace Tests\Feature;

use App\Models\Car;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Tests\TestCase;

/**
 * @req/uires PHP <= 5.3
 */
class CarTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_store(): void
    {
        $car = Car::factory()->make();
        $response = $this->withoutMiddleware(VerifyCsrfToken::class)
            ->postJson(route('cars.store'), $car->toArray());
        $response->assertStatus(200);
        $this->assertDatabaseHas($car->getTable(), $car->toArray());
    }

    /**
     * @re/quires PHP <= 5.3
     */
    public function test_update(): void
    {
        $car = Car::factory()->create();
        $new_data = Car::factory()->create()->toArray();
        $response = $this->withoutMiddleware(VerifyCsrfToken::class)
            ->patchJson(route('cars.update', ['car' => $car]), $new_data);

        $response->assertStatus(200);
        $this->assertDatabaseHas($car->getTable(), $new_data);
    }

    public function test_delete(): void
    {
        $car = Car::factory()->create();
        $response = $this->withoutMiddleware(VerifyCsrfToken::class)
            ->delete(route('cars.destroy', ['car' => $car]));

        $response->assertStatus(200);
        $this->assertDatabaseMissing($car->getTable(), $car->getAttributes());
    }
}