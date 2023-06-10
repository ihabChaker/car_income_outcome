<?php

namespace Database\Factories;

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
            'license_plate' => $this->faker->bothify('??-###-??'),
            'buy_price' => $this->faker->randomNumber(),
            'repair_parts' => $this->faker->randomNumber(),
            'mechanism' => $this->faker->randomNumber(),
            'electricity' => $this->faker->randomNumber(),
            'tole' => $this->faker->randomNumber(),
            'selling_price' => $this->faker->randomNumber(),
        ];
    }
}