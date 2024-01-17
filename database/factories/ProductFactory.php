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
    //  $table->string('name');
    //  $table->integer('price');
    //  $table->integer('discount');
    //  $table->foreignid('category');
    //  $table->string('image_path');
    //  $table->string('availability');
    //  $table->longText('description');
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'price' => $this->faker->numberBetween(100, 4000),
            'discount' => $this->faker->numberBetween(10, 50),
            'category' => 'Laptop',
            'image_path' => 'sdfva',
            'availability' => 1,
            'description' => $this->faker->sentence()
        ];
    }
}
