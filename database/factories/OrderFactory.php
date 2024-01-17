<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    // $table->string("order_id");
    //         $table->date("date");
    //         $table->string("customer");
    //         $table->string("customer_id");
    //         $table->string("payment_status");
    //         $table->string("method");
    public function definition(): array
    {
        return [
            'order_id' => '#' . $this->faker->numberBetween(2342, 9999),
            'date' => $this->faker->date(),
            'customer' => $this->faker->name(),
            'customer_id' => '#' . $this->faker->numberBetween(0000, 9999),
            'payment_status' => 'unpaid',
            'method' => 'credit card'
        ];
    }
}
