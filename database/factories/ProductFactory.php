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
            'brand' => $this->faker->numberBetween(1, 6),
            'year' => $this->faker->year(),
            'price' => $this->faker->numberBetween(125, 1200)
        ];
    }
}
