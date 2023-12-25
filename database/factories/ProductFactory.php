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
            'product_name' => $this->faker->name(),
            'price' => $this->faker->numberBetween(1000, 10000),
            'quantity_in_stock' => $this->faker->numberBetween(1, 100),
            'category_id' => $this->faker->numberBetween(1, 10),
            'supplier_id' => $this->faker->numberBetween(1, 10),
        ];
    }
}
