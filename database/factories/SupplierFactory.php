<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Supplier>
 */
class SupplierFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->words(3, true),
            'ruc' => $this->faker->randomNumber(9, true),
            'email' => $this->faker->safeEmail(),
            'phone' => $this->faker->randomNumber(9, true),
            'address' =>$this->faker->streetAddress()
        ];
    }
}
