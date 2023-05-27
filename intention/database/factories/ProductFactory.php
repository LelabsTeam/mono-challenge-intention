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
            'external_id' => $this->faker->numberBetween(1, 500),
            'price' => $this->faker->randomNumber(5),
            'title' => $this->faker->words(2, true),
            'description' => $this->faker->sentence(),
            'category' => $this->faker->word(),
            'image' => $this->faker->imageUrl(),
        ];
    }
}
