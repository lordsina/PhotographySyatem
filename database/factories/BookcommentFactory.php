<?php

namespace Database\Factories;

use App\Models\Bookcomment;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bookcomment>
 */
class BookcommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "user_id"=>User::all()->random()->id,
            "fullname"=>fake()->firstName(),
            "description"=>fake()->sentence(),
        ];
    }
    protected $model=Bookcomment::class;
}
