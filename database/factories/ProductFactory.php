<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->title(),
            'previous_price' => $this->faker->numberBetween(100, 500),
            'present_price' => $this->faker->numberBetween(100, 500),
            'product_details' => $this->faker->sentence(),
            'category' => "laptop",
        ];
    }
}
