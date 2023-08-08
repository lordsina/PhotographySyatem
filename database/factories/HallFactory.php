<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\halls>
 */
class HallFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=>fake()->city(),
            'description'=>fake()->sentence(),
            'description'=>fake()->sentence(),
            'manager'=>fake()->name(),
            'telephone'=>fake()->e164PhoneNumber(),
            'address'=>fake()->address(),
            'banknumber'=>fake()->randomNumber(5,true),
        ];
    }
}
