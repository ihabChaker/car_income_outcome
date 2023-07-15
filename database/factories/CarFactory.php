<?php

namespace Database\Factories;

use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'car_buyer_id' => Employee::pluck('id')->random(),
            'license_plate' => $this->faker->numberBetween(0, 1000),
            'buy_price' => $this->faker->numberBetween(0, 1000),
            'electricity' => $this->faker->numberBetween(0, 1000),
            'electricity_buyer_id' => Employee::pluck('id')->random(),
            'mechanism' => $this->faker->numberBetween(0, 1000),
            'mechanism_buyer_id' => Employee::pluck('id')->random(),
            'tole' => $this->faker->numberBetween(0, 1000),
            'tole_buyer_id' => Employee::pluck('id')->random(),
            'repair_parts' => $this->faker->numberBetween(0, 1000),
            'repair_parts_buyer_id' => Employee::pluck('id')->random(),
            'selling_price' => $this->faker->numberBetween(0, 1000),
            'payment_reciever_id' => Employee::pluck('id')->random(),
        ];
    }
}