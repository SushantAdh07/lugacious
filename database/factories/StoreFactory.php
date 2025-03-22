<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Store>
 */
class StoreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'store_name'=>fake()->name(),
            'store_description'=>fake()->paragraph(),
            'store_category'=>fake()->name(),
            'store_image'=>fake()->name(),
            'store_followers'=>fake()->numberBetween(100, 10000),
            'store_insta'=>fake()->name(),
        ];
    }
}
