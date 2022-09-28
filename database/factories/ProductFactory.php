<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->sentence(),
            'brand_id' => $this->faker->numberBetween(1, 6),
            'type_id' => $this->faker->numberBetween(1, 3),
            'count' => $this->faker->numberBetween(0, 1000),
            'price' => $this->faker->numberBetween(125, 1200),
            'article' => $this->faker->randomNumber(9, true),
            'descr' => $this->faker->paragraph($this->faker->numberBetween(8, 16)),
        ];
    }
}
